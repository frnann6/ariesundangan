const btnOpen = document.getElementById("btnOpen");
const coverScreen = document.getElementById("coverScreen");
const invitation = document.getElementById("invitation");
const musicToggle = document.getElementById("musicToggle");
const weddingMusic = document.getElementById("weddingMusic");

let musicEnabled = false;

function setMusicButtonState(isPlaying) {
  musicToggle.innerHTML = isPlaying
    ? `<i class="bi bi-pause-circle"></i>`
    : `<i class="bi bi-play-circle"></i>`;
  musicToggle.setAttribute("aria-pressed", String(isPlaying));
}

async function playMusicIfAllowed() {
  if (!musicEnabled || document.hidden) return;

  try {
    await weddingMusic.play();
    setMusicButtonState(true);
  } catch (error) {
    console.log("Tidak bisa memutar musik saat ini.");
    setMusicButtonState(false);
  }
}

function pauseMusic() {
  weddingMusic.pause();
  setMusicButtonState(false);
}

btnOpen.addEventListener("click", async () => {
  coverScreen.classList.add("is-closing");
  invitation.style.display = "block";

  // Refresh AOS ketika konten ditampilkan
  AOS.refresh();

  musicEnabled = true;
  await playMusicIfAllowed();

  setTimeout(() => {
    coverScreen.style.display = "none";
  }, 3000);
});

musicToggle.addEventListener("click", async () => {
  if (musicEnabled) {
    musicEnabled = false;
    pauseMusic();
  } else {
    musicEnabled = true;
    await playMusicIfAllowed();
  }
});

document.addEventListener("visibilitychange", () => {
  if (document.hidden) {
    pauseMusic();
  } else if (musicEnabled) {
    playMusicIfAllowed();
  }
});

window.addEventListener("blur", () => {
  if (musicEnabled) {
    pauseMusic();
  }
});

window.addEventListener("focus", () => {
  if (musicEnabled && !document.hidden) {
    playMusicIfAllowed();
  }
});

setMusicButtonState(false);

const countdown = document.querySelector("[data-countdown-target]");
const countdownTarget = Date.parse(countdown?.dataset.countdownTarget ?? "");

if (countdown && Number.isFinite(countdownTarget)) {
  const countdownFields = countdown.querySelectorAll(".border h1");

  const updateCountdown = () => {
    const remaining = Math.max(0, countdownTarget - Date.now());
    const values = [
      Math.floor(remaining / 86400000),
      Math.floor((remaining % 86400000) / 3600000),
      Math.floor((remaining % 3600000) / 60000),
      Math.floor((remaining % 60000) / 1000),
    ];

    countdownFields.forEach((field, index) => {
      field.textContent = String(values[index]).padStart(2, "0");
    });
  };

  updateCountdown();
  window.setInterval(updateCountdown, 1000);
}

// GIFT SECTION (ACCORDION)

const button = document.getElementById("toggleBtn");
const content = document.getElementById("content");
const cards = document.querySelectorAll(".gift-cards > .gift-item, .gift-cards > div");

if (button && content) {
  button.addEventListener("click", () => {
    const isOpen = content.classList.toggle("active");

    if (cards.length) {
      if (isOpen) {
        cards.forEach((card) => {
          card.classList.remove("animate__zoomOut");
          card.classList.add(
            "animate__animated",
            "animate__zoomIn",
            "animate_delay-1s",
          );
        });
      } else {
        cards.forEach((card) => {
          card.classList.remove("animate__zoomIn");
          card.classList.add(
            "animate__animated",
            "animate__zoomOut",
            "animate_delay-1s",
          );
        });
      }
    }
  });
}

// COPY GIFT ACCOUNT NUMBER
document.querySelectorAll(".gift-copy-btn").forEach((btn) => {
  btn.addEventListener("click", async () => {
    const value = btn.getAttribute("data-copy") || "";
    if (!value) return;

    try {
      if (navigator.clipboard && navigator.clipboard.writeText) {
        await navigator.clipboard.writeText(value);
      } else {
        const temp = document.createElement("textarea");
        temp.value = value;
        temp.setAttribute("readonly", "");
        temp.style.position = "absolute";
        temp.style.left = "-9999px";
        document.body.appendChild(temp);
        temp.select();
        document.execCommand("copy");
        document.body.removeChild(temp);
      }

      const original = btn.innerHTML;
      btn.innerHTML = '<i class="bi bi-check2"></i> Tersalin';
      btn.classList.add("copied");
      setTimeout(() => {
        btn.innerHTML = original;
        btn.classList.remove("copied");
      }, 1800);
    } catch (e) {
      console.log("Gagal menyalin nomor.");
    }
  });
});
