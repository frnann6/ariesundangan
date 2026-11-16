<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Undangan-1 | Aries Undangan Digital</title>
	<link rel="shortcut icon" href="<?= base_url('img/undangan-1/cover.png') ?>" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="<?= base_url('css/undangan-1/undangan-1.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/undangan-1/animate.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/undangan-1/responsive.css') ?>">
</head>

<body>
	<div class="cover" id="coverScreen">
		<img src="<?= base_url('img/undangan-1/dekorasi/top-flow.png') ?>" alt="" class="flower flower-top-left">
		<img src="<?= base_url('img/undangan-1/dekorasi/bottom-flow.png') ?>" alt="" class="flower flower-bottom">
		<div class="text-center second-cover animate__animated animate__zoomIn animate__delay-1s">
			<span class="work-sans wedding-text animate__animated animate__zoomIn animate__delay-1s">THE WEDDING OF</span>
			<h1 class="great-vibes animate__animated animate__zoomIn animate__delay-1s">Eren &amp; Mikasa</h1>
			<span class="work-sans kepada animate__animated animate__zoomIn animate__delay-1s">Kepada Bapak/Ibu/Saudara/i</span>
			<h4 id="namaTamu" class="work-sans animate__animated animate__zoomIn animate__delay-1s"></h4>
			<p id="btnOpen" class="work-sans animate__animated animate__zoomIn animate__delay-1s"><i class="bi bi-envelope-open-fill"></i> Buka Undangan</p>
		</div>
	</div>

	<div class="invitation" id="invitation">
		<button id="musicToggle" class="music-toggle" type="button" aria-label="Putar musik" aria-pressed="false"></button>

		<section class="save-date">
			<div class="ftl animate__animated animate__slideInLeft animate__delay-1s"><img src="<?= base_url('img/undangan-1/dekorasi/top-flow.png') ?>" alt="" class="flower flower-top-left"></div>
			<div class="fbr animate__animated animate__slideInRight animate__delay-1s"><img src="<?= base_url('img/undangan-1/dekorasi/bottom-flow.png') ?>" alt="" class="flower flower-bottom"></div>
			<span class="animate__animated animate__zoomIn animate__delay-1s wedding-text work-sans">THE WEDDING OF</span>
			<img src="<?= base_url('img/cover-photo/eren-mikasa/erenmikasa.png') ?>" class="foto animate__animated animate__zoomIn animate__delay-1s" alt="Eren dan Mikasa">
			<h1 class="great-vibes animate__animated animate__zoomIn animate__delay-1s">Eren &amp; Mikasa</h1>
			<span class="paragph text-center work-sans animate__animated animate__zoomIn animate__delay-1s">Kami berharap Anda menjadi bagian dari hari istimewa kami.</span>
			<p class="date text-center work-sans animate__animated animate__zoomIn animate__delay-1s">Sabtu, 20 Maret 2027</p>
			<a href="#date-locate" class="btn-save-date text-center animate__animated animate__zoomIn animate__delay-1s">Save The Date</a>
		</section>

		<section class="opening-couple">
			<div class="card"><div class="container text-center"><p data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="600" class="work-sans"><i>Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan pasangan-pasangan untukmu.<br><br>(Qs. Ar-Rum : 21)</i></p></div></div>
			<div class="content text-center">
				<div>
					<p data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600" class="great-vibes">بِسْمِ ٱللَّهِ ٱلرَّحْمَـٰنِ ٱلرَّحِيمِ</p>
					<p data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="800" class="salam-pembuka work-sans">Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk menghadiri acara pernikahan kami.</p>
				</div>
				<div>
					<img data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1000" src="<?= base_url('img/couple/eren-mikasa/eren.png') ?>" alt="Eren">
					<h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1100" class="great-vibes">Eren Yeager</h1>
					<span data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="1200" class="work-sans">Putra pertama dari Grisha Yeager <br>dan Carla Yeager</span>
					<h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1300" class="great-vibes and">&amp;</h1>
					<img data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1400" src="<?= base_url('img/couple/eren-mikasa/mikasa.png') ?>" alt="Mikasa">
					<h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1500" class="great-vibes">Mikasa Ackerman</h1>
					<span data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1600" class="work-sans">Putri pertama dari Mr. Ackerman <br>dan Mrs. Ackerman</span>
				</div>
			</div>
			<div class="wave-stack">
				<svg class="wave wave-back" viewBox="0 0 390 80" preserveAspectRatio="none"><path d="M0,35 C40,50 70,55 110,48 C160,40 190,18 240,22 C290,26 330,48 390,40 L390,80 L0,80 Z" /></svg>
				<svg class="wave wave-front" viewBox="0 0 390 80" preserveAspectRatio="none"><path d="M0,50 C45,65 90,68 140,58 C190,48 230,28 280,30 C330,32 360,52 390,48 L390,80 L0,80 Z" /></svg>
			</div>
		</section>

		<section id="date-locate" class="date-locate">
			<div class="text-center content">
				<h1 class="great-vibes" data-aos="zoom-in-up" data-aos-duration="1600" data-aos-delay="500">Save The Date</h1>
				<div class="time work-sans" data-countdown-target="2027-03-20T08:00:00+07:00" data-aos="zoom-in-up" data-aos-duration="1600" data-aos-delay="600">
					<div class="border"><h1>00</h1><p>Hari</p></div><div class="border"><h1>00</h1><p>Jam</p></div><div class="border"><h1>00</h1><p>Menit</p></div><div class="border"><h1>00</h1><p>Detik</p></div>
				</div>
				<div class="akad"><div class="card">
					<img src="<?= base_url('img/galleries/eren-mikasa/pelaminan.png') ?>" alt="Dekorasi acara">
					<div>
						<h1 class="great-vibes" data-aos="zoom-in" data-aos-duration="1000">Akad Nikah</h1>
						<p class="date" data-aos="zoom-in" data-aos-duration="1000">Sabtu, 20 Maret 2027</p>
						<p class="time" data-aos="zoom-in" data-aos-duration="1000">Pukul: 08.00 - 10.00 WIB</p>
						<p class="locate" data-aos="zoom-in" data-aos-duration="1000">Tempat: <strong>Gedung Serbaguna Sakura</strong><br>Jl. Melati No. 18, Bandung</p>
						<div class="save-locate"><a href="https://maps.google.com/?q=Bandung" target="_blank" rel="noopener noreferrer" class="btn-save-locate text-center">Lihat Lokasi</a></div>
					</div>
					<div class="divider-cont"><div class="divider"></div></div>
					<div class="clone">
						<h1 class="great-vibes" data-aos="zoom-in" data-aos-duration="1000">Resepsi</h1>
						<p class="date" data-aos="zoom-in" data-aos-duration="1000">Sabtu, 20 Maret 2027</p>
						<p class="time" data-aos="zoom-in" data-aos-duration="1000">Pukul: 11.00 - 14.00 WIB</p>
						<p class="locate" data-aos="zoom-in" data-aos-duration="1000">Tempat: <strong>Gedung Serbaguna Sakura</strong><br>Jl. Melati No. 18, Bandung</p>
						<div class="save-locate"><a href="https://maps.google.com/?q=Bandung" target="_blank" rel="noopener noreferrer" class="btn-save-locate text-center">Lihat Lokasi</a></div>
					</div>
				</div></div>
			</div>
		</section>

		<section class="gallery">
			<div class="text-center"><h1 class="great-vibes">Gallery</h1></div>
			<div class="gallery-grid">
				<figure class="gallery-item gallery-item--tall"><img src="<?= base_url('img/galleries/eren-mikasa/erenmikasa.png') ?>" alt="Eren dan Mikasa" loading="lazy"></figure>
				<figure class="gallery-item"><img src="<?= base_url('img/galleries/eren-mikasa/eren.png') ?>" alt="Eren" loading="lazy"></figure>
				<figure class="gallery-item gallery-item--wide"><img src="<?= base_url('img/galleries/eren-mikasa/eremika.jpeg') ?>" alt="Momen bersama" loading="lazy"></figure>
				<figure class="gallery-item"><img src="<?= base_url('img/galleries/eren-mikasa/mikasa.png') ?>" alt="Mikasa" loading="lazy"></figure>
				<figure class="gallery-item gallery-item--tall"><img src="<?= base_url('img/galleries/eren-mikasa/eremikamarried1.png') ?>" alt="Hari pernikahan" loading="lazy"></figure>
				<figure class="gallery-item"><img src="<?= base_url('img/galleries/eren-mikasa/pelaminan.png') ?>" alt="Dekorasi pelaminan" loading="lazy"></figure>
			</div>
		</section>

		<div class="divider-cont"></div>
		<section class="story">
			<div class="text-center"><h1 class="great-vibes">Love Story</h1></div>
			<img src="<?= base_url('img/stories/eren-mikasa/eremika.jpeg') ?>" alt="Kisah Eren dan Mikasa" loading="lazy">
			<div class="story-timeline">
				<div class="story-item"><div class="story-dot"></div><div class="story-card"><span class="story-year">2018</span><h3>Awal Pertemuan</h3><p>Sebuah pertemuan sederhana menjadi awal cerita yang tak pernah kami sangka.</p></div></div>
				<div class="story-item"><div class="story-dot"></div><div class="story-card"><span class="story-year">2021</span><h3>Menjadi Lebih Dekat</h3><p>Waktu dan kebersamaan membuat kami semakin yakin untuk melangkah bersama.</p></div></div>
				<div class="story-item"><div class="story-dot"></div><div class="story-card"><span class="story-year">2026</span><h3>Hari Istimewa</h3><p>Dengan penuh syukur, kami memulai babak baru dalam perjalanan hidup kami.</p></div></div>
			</div>
		</section>

		<section class="gift">
			<div class="text-center card">
				<h1 class="great-vibes">Amplop Digital</h1>
				<p class="work-sans"><i>Doa restu Anda merupakan karunia yang sangat berarti bagi kami. Jika memberi adalah ungkapan tanda kasih, Anda dapat memberi kado secara cashless.</i></p>
				<button class="btn" id="toggleBtn" type="button"><i class="bi bi-gift-fill"></i> Kirim Hadiah</button>
			</div>
			<div class="accordion-content" id="content"><div class="accordion-inner"><div class="gift-cards">
				<div class="gift-item"><div class="gift-item-top"><div class="gift-item-info"><span class="gift-provider work-sans">BCA</span><span class="gift-account-name work-sans">Eren Yeager</span></div><img class="gift-logo" src="<?= base_url('img/payments/bca.png') ?>" alt="Logo BCA" loading="lazy"></div><div class="gift-account-row"><span class="gift-account-number work-sans" data-account="1234567890">1234 567 890</span><button type="button" class="gift-copy-btn work-sans" data-copy="1234567890"><i class="bi bi-copy"></i> Salin</button></div></div>
				<div class="gift-item"><div class="gift-item-top"><div class="gift-item-info"><span class="gift-provider work-sans">Mandiri</span><span class="gift-account-name work-sans">Mikasa Ackerman</span></div><img class="gift-logo" src="<?= base_url('img/payments/mandiri.png') ?>" alt="Logo Mandiri" loading="lazy"></div><div class="gift-account-row"><span class="gift-account-number work-sans" data-account="0987654321">0987 654 321</span><button type="button" class="gift-copy-btn work-sans" data-copy="0987654321"><i class="bi bi-copy"></i> Salin</button></div></div>
			</div></div></div>
		</section>

		<section class="message">
			<div class="message-inner">
				<div class="text-center message-heading"><h1 class="great-vibes">Kirim Pesan</h1><p class="work-sans">Tinggalkan doa dan pesan untuk kedua mempelai.</p></div>
				<form id="catalogMessageForm" class="message-form">
					<label class="work-sans" for="messageName">Nama</label><input id="messageName" name="name" type="text" maxlength="60" placeholder="Nama Anda" required>
					<label class="work-sans" for="messageText">Pesan</label><textarea id="messageText" name="message" maxlength="500" rows="4" placeholder="Tulis ucapan dan doa Anda..." required></textarea>
					<span class="attendance-label work-sans">Konfirmasi kehadiran</span>
					<select class="attendance-select work-sans" name="attendance" required><option value="" selected disabled>Pilih konfirmasi kehadiran</option><option value="hadir">Hadir</option><option value="tidak_hadir">Tidak hadir</option></select>
					<button class="message-submit work-sans" type="submit"><i class="bi bi-send-fill"></i> Kirim Pesan</button>
					<p id="catalogMessageStatus" class="message-status work-sans" role="status" aria-live="polite"></p>
				</form>
				<div id="catalogMessageList" class="message-list" aria-live="polite">
					<article class="message-card"><div class="message-card-header"><div class="message-author-info"><strong>Armin</strong><span class="message-attendance is-present">Hadir</span></div><time>1 minggu lalu</time></div><p class="message-body">Selamat menempuh hidup baru, Eren dan Mikasa. Semoga selalu bahagia!</p></article>
					<article class="message-card"><div class="message-card-header"><div class="message-author-info"><strong>Levi</strong><span class="message-attendance is-present">Hadir</span></div><time>2 bulan lalu</time></div><p class="message-body">Selamat, semoga menjadi keluarga yang penuh cinta dan berkah.</p></article>
				</div>
			</div>
		</section>

		<section class="closing"></section>
		<section class="thank-you"><div class="thank-you-inner">
			<div class="flower-dekorasi"><img src="<?= base_url('img/undangan-1/dekorasi/top-flow.png') ?>" alt="" class="flower flower-top-left"><img src="<?= base_url('img/undangan-1/dekorasi/bottom-flow.png') ?>" alt="" class="flower flower-bottom"></div>
			<h1 class="great-vibes">Terima Kasih</h1>
			<p class="work-sans">Dengan penuh rasa hormat dan sukacita, kami berharap Bapak/Ibu/Saudara/i berkenan meluangkan waktu untuk hadir serta memberikan doa restu. Kehadiran dan doa yang diberikan merupakan kebahagiaan tersendiri bagi kami.</p>
		</div></section>
		<footer><p class="footer-text work-sans">made with ariesundangan.my.id</p></footer>
		<audio id="weddingMusic" loop><source src="<?= base_url('music/eren-mikasa/suratcintauntukstarlaa.wav') ?>" type="audio/wav"></audio>
	</div>

	<script src="<?= base_url('js/undangan-1/undangan1.js') ?>"></script>
	<script src="<?= base_url('js/tamuLogic.js') ?>"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>AOS.init();</script>
	<script>
		const catalogMessageForm = document.getElementById("catalogMessageForm");
		const catalogMessageList = document.getElementById("catalogMessageList");
		const catalogMessageStatus = document.getElementById("catalogMessageStatus");

		catalogMessageForm.addEventListener("submit", (event) => {
			event.preventDefault();
			const formData = new FormData(catalogMessageForm);
			const card = document.createElement("article");
			card.className = "message-card";
			const header = document.createElement("div");
			header.className = "message-card-header";
			const authorInfo = document.createElement("div");
			authorInfo.className = "message-author-info";
			const name = document.createElement("strong");
			name.textContent = formData.get("name");
			const attendance = document.createElement("span");
			attendance.className = `message-attendance ${formData.get("attendance") === "hadir" ? "is-present" : "is-absent"}`;
			attendance.textContent = formData.get("attendance") === "hadir" ? "Hadir" : "Tidak hadir";
			authorInfo.append(name, attendance);
			const time = document.createElement("time");
			time.textContent = "Baru saja";
			header.append(authorInfo, time);
			const message = document.createElement("p");
			message.className = "message-body";
			message.textContent = formData.get("message");
			card.append(header, message);
			catalogMessageList.prepend(card);
			catalogMessageForm.reset();
			catalogMessageStatus.textContent = "Pesan ditambahkan untuk pratinjau ini saja.";
		});
	</script>
</body>

</html>
