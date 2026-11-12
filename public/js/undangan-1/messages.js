const messageForm = document.getElementById("messageForm");
const messageList = document.getElementById("messageList");
const messageStatus = document.getElementById("messageStatus");

if (messageForm && messageList && messageStatus) {
  const endpoint = messageForm.dataset.messageEndpoint;
  const submitButton = messageForm.querySelector("[type=submit]");
  const dateFormatter = new Intl.DateTimeFormat("id-ID", {
    day: "numeric",
    month: "long",
    year: "numeric",
  });

  const createTime = (value) => {
    const time = document.createElement("time");
    const date = new Date(value);
    if (!Number.isNaN(date.getTime())) {
      time.dateTime = date.toISOString();
      time.textContent = dateFormatter.format(date);
    }
    return time;
  };

  const createReply = (reply) => {
    const card = document.createElement("div");
    card.className = "message-reply";

    const header = document.createElement("div");
    header.className = "message-reply-header";
    const name = document.createElement("strong");
    name.textContent = reply.name;
    header.append(name, createTime(reply.created_at));

    const body = document.createElement("p");
    body.className = "message-reply-body";
    body.textContent = reply.message;
    card.append(header, body);
    return card;
  };

  const createReplyForm = (messageId) => {
    const form = document.createElement("form");
    form.className = "reply-form";

    const name = document.createElement("input");
    name.name = "name";
    name.type = "text";
    name.maxLength = 60;
    name.placeholder = "Nama Anda";
    name.setAttribute("aria-label", "Nama Anda");
    name.required = true;

    const text = document.createElement("textarea");
    text.name = "message";
    text.maxLength = 500;
    text.rows = 3;
    text.placeholder = "Tulis balasan...";
    text.setAttribute("aria-label", "Balasan");
    text.required = true;

    const submit = document.createElement("button");
    submit.type = "submit";
    submit.className = "message-submit message-reply-button";
    submit.textContent = "Kirim balasan";

    const status = document.createElement("p");
    status.className = "message-status work-sans";
    status.setAttribute("role", "status");
    form.append(name, text, submit, status);

    form.addEventListener("submit", async (event) => {
      event.preventDefault();
      submit.disabled = true;
      status.textContent = "Mengirim balasan...";

      try {
        const response = await fetch(`${endpoint}/${encodeURIComponent(messageId)}/replies`, {
          method: "POST",
          headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
          },
          body: JSON.stringify(Object.fromEntries(new FormData(form))),
        });
        const result = await response.json();

        if (!response.ok) {
          throw new Error(result.error || "Balasan gagal dikirim.");
        }

        await loadMessages();
      } catch (error) {
        status.textContent = error.message || "Terjadi kesalahan. Silakan coba lagi.";
        submit.disabled = false;
      }
    });

    return form;
  };

  const renderMessage = (message) => {
    const card = document.createElement("article");
    card.className = "message-card";

    const header = document.createElement("div");
    header.className = "message-card-header";

    const authorInfo = document.createElement("div");
    authorInfo.className = "message-author-info";

    const name = document.createElement("strong");
    name.textContent = message.name;

    const attendance = document.createElement("span");
    attendance.className = `message-attendance ${message.attendance === "hadir" ? "is-present" : "is-absent"}`;
    attendance.textContent = message.attendance === "hadir" ? "Hadir" : "Tidak hadir";
    authorInfo.append(name, attendance);

    header.append(authorInfo, createTime(message.created_at));

    const body = document.createElement("p");
    body.className = "message-body";
    body.textContent = message.message;
    card.append(header, body);

    const replyToggle = document.createElement("button");
    replyToggle.type = "button";
    replyToggle.className = "reply-toggle";
    replyToggle.innerHTML = '<i class="bi bi-reply-fill" aria-hidden="true"></i><span>Balas</span>';
    replyToggle.setAttribute("aria-expanded", "false");

    const replies = document.createElement("div");
    replies.className = "message-replies";
    (message.replies || []).forEach((reply) => replies.append(createReply(reply)));
    card.append(replyToggle, replies);

    let replyForm = null;
    replyToggle.addEventListener("click", () => {
      if (replyForm) {
        replyForm.remove();
        replyForm = null;
      } else {
        replyForm = createReplyForm(message.id);
        card.insertBefore(replyForm, replies);
      }
      replyToggle.setAttribute("aria-expanded", String(replyForm !== null));
    });

    return card;
  };

  const loadMessages = async () => {
    const response = await fetch(endpoint, {
      headers: { Accept: "application/json" },
    });
    const result = await response.json();

    if (!response.ok) {
      throw new Error(result.error || "Pesan gagal dimuat.");
    }

    messageList.replaceChildren();
    if (result.messages.length === 0) {
      const emptyState = document.createElement("p");
      emptyState.className = "message-empty work-sans";
      emptyState.textContent = "Belum ada pesan yang dikirim.";
      messageList.append(emptyState);
      return;
    }

    result.messages.forEach((message) => {
      messageList.append(renderMessage(message));
    });
  };

  loadMessages().catch(() => {
    messageList.innerHTML = '<p class="message-empty work-sans">Pesan belum dapat dimuat.</p>';
  });
  messageForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    messageStatus.textContent = "Mengirim pesan...";
    submitButton.disabled = true;

    try {
      const response = await fetch(endpoint, {
        method: "POST",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
        body: JSON.stringify(Object.fromEntries(new FormData(messageForm))),
      });
      const result = await response.json();

      if (!response.ok) {
        throw new Error(result.error || "Pesan gagal dikirim.");
      }

      messageForm.reset();
      messageStatus.textContent = result.message;
      await loadMessages();
    } catch (error) {
      messageStatus.textContent = error.message || "Terjadi kesalahan. Silakan coba lagi.";
    } finally {
      submitButton.disabled = false;
    }
  });
}