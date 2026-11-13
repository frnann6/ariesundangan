<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan-1</title>
    <link rel="shortcut icon" href="../img/logo/fananda-v2.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS : Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= base_url('css/undangan-1/undangan-1.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/undangan-1/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/undangan-1/responsive.css') ?>">
</head>

<body>
    <div class="cover" id="coverScreen">
        <img src="" alt="">

        <img src="<?= base_url('img/undangan-1/dekorasi/top-flow.png') ?>" alt="" class="flower flower-top-left">

        <img src="<?= base_url('img/undangan-1/dekorasi/bottom-flow.png') ?>" alt="" class="flower flower-bottom">

        <div class="text-center second-cover animate__animated animate__zoomIn animate__delay-1s">
            <span class="work-sans wedding-text animate__animated animate__zoomIn animate__delay-1s">THE WEDDING
                OF</span>

            <h1 class="great-vibes animate__animated animate__zoomIn animate__delay-1s">
                <?= esc($invitation['groom_nickname']) ?>&nbsp;&nbsp;&&nbsp;&nbsp;<?= esc($invitation['bride_nickname']) ?>
            </h1>

            <span class="work-sans kepada animate__animated animate__zoomIn animate__delay-1s">Kepada
                Bapak/Ibu/Saudara/i</span>

            <h4 id="namaTamu" class="work-sans animate__animated animate__zoomIn animate__delay-1s"></h4>

            <p id="btnOpen" class="work-sans animate__animated animate__zoomIn animate__delay-1s"><i
                    class="bi bi-envelope-open-fill"></i> Buka
                Undangan
            </p>
        </div>
    </div>

    <div class="invitation" id="invitation">
        <span id="musicToggle" class="music-toggle" type="button" aria-pressed="false"></span>

        <!-- 1. Save Date -->
        <section class="save-date">

            <div class="ftl animate__animated animate__slideInLeft animate__delay-1s">
                <img src="<?= base_url('img/undangan-1/dekorasi/top-flow.png') ?>" alt=""
                    class="flower flower-top-left">
            </div>

            <div class="fbr animate__animated animate__slideInRight animate__delay-1s">
                <img src="<?= base_url('img/undangan-1/dekorasi/bottom-flow.png') ?>" alt=""
                    class="flower flower-bottom">
            </div>

            <span class="animate__animated animate__zoomIn animate__delay-1s wedding-text work-sans">THE WEDDING
                OF</span>
            <img src="<?= base_url('img/cover-photo/' . $invitation['slug'] . '/' . $invitation['cover_photo']) ?>"
                class="foto animate__animated animate__zoomIn animate__delay-1s" alt="">
            <h1 class="great-vibes animate__animated animate__zoomIn animate__delay-1s">
                <?= esc($invitation['groom_nickname']) ?>&nbsp;&nbsp;&&nbsp;&nbsp;<?= esc($invitation['bride_nickname']) ?>
            </h1>
            <span
                class="paragph text-center work-sans animate__animated animate__zoomIn animate__delay-1s work-sans">Kami
                berharap Anda menjadi
                bagian dari hari istimewa kami.</span>
            <p class="date text-center work-sans animate__animated animate__zoomIn animate__delay-1s">
                <?= esc($formattedMainEventDate) ?></p>
            <a href="#date-locate"
                class="btn-save-date text-center animate__animated animate__zoomIn animate__delay-1s">Save The
                Date</a>
        </section>

        <!-- 2. Opening Couple -->
        <section class="opening-couple">
            <div class="card">
                <div class="container text-center">
                    <p data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="600" class="work-sans"><i>
                            <?= esc($invitation['quote']) ?>
                            <br><br>
                            (Qs. Ar-Rum : 21)</i>
                    </p>
                </div>
            </div>

            <div class="content text-center">
                <div>
                    <p data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600" class="great-vibes">بِسْمِ
                        ٱللَّهِ ٱلرَّحْمَـٰنِ ٱلرَّحِيمِ</p>

                    <p data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="800" class="salam-pembuka work-sans">
                        Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara/i
                        serta
                        kerabat
                        sekalian untuk
                        menghadiri acara
                        pernikahan kami.</p>
                </div>

                <div>
                    <!-- PENGANTIN PRIA -->
                    <img data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1000" src="<?= base_url('img/couple/' . $invitation['slug'] . '/' . $invitation['groom_photo']) ?>" alt="">
                    <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1100" class="great-vibes">
                        <?= esc($invitation['groom_name']) ?>
                    </h1>
                    <span data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="1200" class="work-sans">Putra
                        pertama dari <?= esc($invitation['groom_father']) ?> <br> dan
                        <?= esc($invitation['groom_mother']) ?></span>

                    <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1300" class="great-vibes and">&</h1>

                    <!-- PENGANTIN WANITA -->
                    <img data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1400" src="<?= base_url('img/couple/' . $invitation['slug'] . '/' . $invitation['bride_photo']) ?>""
                        alt="">
                    <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1500" class="great-vibes">
                    <?= esc($invitation['bride_name']) ?></h1>
                    <span data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1500" class="work-sans">Putri
                        pertama dari <?= esc($invitation['bride_father']) ?><br> dan
                        <?= esc($invitation['bride_mother']) ?></span>
                </div>
            </div>

            <div class="wave-stack">
                <svg class="wave wave-back" viewBox="0 0 390 80" preserveAspectRatio="none">
                    <path d="
                                        M0,35
                                        C40,50 70,55 110,48
                                        C160,40 190,18 240,22
                                        C290,26 330,48 390,40
                                        L390,80
                                        L0,80
                                        Z" />
                </svg>

                <svg class="wave wave-front" viewBox="0 0 390 80" preserveAspectRatio="none">
                    <path d="
                                        M0,50
                                        C45,65 90,68 140,58
                                        C190,48 230,28 280,30
                                        C330,32 360,52 390,48
                                        L390,80
                                        L0,80
                                        Z" />
                </svg>
            </div>
        </section>

        <!-- 3. Date Locate -->
        <section id="date-locate" class="date-locate">

            <div class="text-center content">
                <h1 class="great-vibes" data-aos="zoom-in-up" data-aos-duration="1600" data-aos-delay="500">Save The
                    Date
                </h1>

                <div class="time work-sans" data-countdown-target="<?= esc($countdownTarget, 'attr') ?>"
                    data-aos="zoom-in-up" data-aos-duration="1600" data-aos-delay="600">
                    <div class="border">
                        <h1>00</h1>
                        <p>Hari</p>
                    </div>
                    <div class="border">
                        <h1>00</h1>
                        <p>Jam</p>
                    </div>
                    <div class="border">
                        <h1>00</h1>
                        <p>Menit</p>
                    </div>
                    <div class="border">
                        <h1>00</h1>
                        <p>Detik</p>
                    </div>
                </div>

                <div class="akad">
                    <div class="card">
                        <?php if (!$hasEvent): ?>
                            <p class="work-sans">Informasi acara belum tersedia.</p>
                        <?php else: ?>
                            <?php if ($eventPhotoUrl): ?>
                                <img src="<?= esc($eventPhotoUrl, 'attr') ?>" alt="Foto acara">
                            <?php endif; ?>

                            <div>
                                <h1 class="great-vibes" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                                    <?= esc($akad['title']) ?>
                                </h1>
                                <?php if ($akad['date'] !== ''): ?>
                                    <p class="date" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                                        <?= esc($akad['date']) ?>
                                    </p>
                                <?php endif; ?>
                                <?php if ($akad['time'] !== ''): ?>
                                    <p class="time" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
                                        Pukul: <?= esc($akad['time']) ?> WIB
                                    </p>
                                <?php endif; ?>
                                <p class="locate" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
                                    Tempat: <strong><?= esc($akad['venue']) ?></strong>
                                    <?php if (!empty($akad['address'])): ?>
                                        <br><?= nl2br(esc($akad['address'])) ?>
                                    <?php endif; ?>
                                </p>
                                <?php if ($akad['maps_url'] !== ''): ?>
                                    <div class="save-locate">
                                        <a href="<?= esc($akad['maps_url'], 'attr') ?>" target="_blank"
                                            rel="noopener noreferrer" class="btn-save-locate text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900">
                                            Lihat Lokasi
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="divider-cont">
                                <div class="divider" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                                </div>
                            </div>

                            <div class="clone">
                                <h1 class="great-vibes" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1100">
                                    <?= esc($reception['title']) ?>
                                </h1>
                                <?php if (!$reception['has_data']): ?>
                                    <p class="work-sans">Informasi resepsi belum tersedia.</p>
                                <?php else: ?>
                                    <?php if ($reception['date'] !== ''): ?>
                                        <p class="date" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1200">
                                            <?= esc($reception['date']) ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($reception['time'] !== ''): ?>
                                        <p class="time" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1300">
                                            Pukul: <?= esc($reception['time']) ?> WIB
                                        </p>
                                    <?php endif; ?>
                                    <p class="locate" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1400">
                                        Tempat: <strong><?= esc($reception['venue']) ?></strong>
                                        <?php if (!empty($reception['address'])): ?>
                                            <br><?= nl2br(esc($reception['address'])) ?>
                                        <?php endif; ?>
                                    </p>
                                    <?php if ($reception['maps_url'] !== ''): ?>
                                        <div class="save-locate">
                                            <a href="<?= esc($reception['maps_url'], 'attr') ?>" target="_blank"
                                                rel="noopener noreferrer" class="btn-save-locate text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1500">
                                                Lihat Lokasi
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Gallery -->
        <section class="gallery">
            <div class="text-center">
                <h1 class="great-vibes">Gallery</h1>
            </div>
            <div class="gallery-grid">
                <?php if (empty($galleryImages)): ?>
                    <p class="work-sans">Belum ada foto galeri.</p>
                <?php else: ?>
                    <?php foreach ($galleryImages as $galleryImage): ?>
                        <figure class="gallery-item <?= esc($galleryImage['layout_class'], 'attr') ?>">
                            <img src="<?= esc($galleryImage['url'], 'attr') ?>" alt="<?= esc($galleryImage['caption'], 'attr') ?>"
                                loading="lazy">
                        </figure>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>

        <div class="divider-cont">
            <!-- <div class="divider" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
            </div> -->
        </div>

        <section class="story">
            <div class="text-center">
                <h1 class="great-vibes">Love Story</h1>
            </div>

            <?php if ($storyPhotoUrl): ?>
                <img src="<?= esc($storyPhotoUrl, 'attr') ?>" alt="Foto kisah pasangan" loading="lazy">
            <?php endif; ?>

            <div class="story-timeline">
                <?php if (empty($stories)): ?>
                    <p class="work-sans">Belum ada kisah yang ditambahkan.</p>
                <?php else: ?>
                    <?php foreach ($stories as $story): ?>
                        <div class="story-item">
                            <div class="story-dot"></div>
                            <div class="story-card">
                                <span class="story-year"><?= esc($story['year']) ?></span>
                                <h3><?= esc($story['title']) ?></h3>
                                <?php if (!empty($story['description'])): ?>
                                    <p><?= nl2br(esc($story['description'])) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>

        <section class="gift">
            <div class="text-center card">
                <h1 class="great-vibes">Amplop Digital</h1>
                <p class="work-sans"><i>Doa restu Anda merupakan karunia yang sangat berarti bagi kami, dan jika memberi
                        adalah ungkapan tanda kasih, Anda dapat memberi kado secara cashless.</i></p>
                <?php if (!empty($gifts)): ?>
                    <button class="btn" id="toggleBtn"><i class="bi bi-gift-fill"></i> Kirim Hadiah</button>
                <?php endif; ?>
            </div>

            <div class="accordion-content<?= !empty($gifts) ? '' : ' active' ?>" id="content">
                <div class="accordion-inner">
                    <?php if (empty($gifts)): ?>
                        <p class="gift-empty work-sans">Informasi amplop digital belum tersedia.</p>
                    <?php else: ?>
                        <div class="gift-cards">
                            <?php foreach ($gifts as $gift): ?>
                                <div class="gift-item">
                                    <div class="gift-item-top">
                                        <?php if (!empty($gift['logo_url'])): ?>
                                            <img class="gift-logo" src="<?= esc($gift['logo_url'], 'attr') ?>" alt="<?= esc($gift['display_name'], 'attr') ?>" loading="lazy" onerror="this.style.display='none'">
                                        <?php endif; ?>
                                        <div class="gift-item-info">
                                            <span class="gift-provider work-sans"><?= esc($gift['display_name']) ?></span>
                                            <span class="gift-account-name work-sans"><?= esc($gift['account_name']) ?></span>
                                        </div>
                                    </div>
                                    <div class="gift-account-row">
                                        <span class="gift-account-number work-sans" data-account="<?= esc($gift['account_number'], 'attr') ?>"><?= esc($gift['account_number']) ?></span>
                                        <button type="button" class="gift-copy-btn work-sans" data-copy="<?= esc($gift['account_number'], 'attr') ?>">
                                            <i class="bi bi-copy"></i> Salin
                                        </button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="message">
            <div class="message-inner">
                <div class="text-center message-heading">
                    <!-- <span class="wedding-text work-sans">BUKU TAMU</span> -->
                    <h1 class="great-vibes">Kirim Pesan</h1>
                    <p class="work-sans">Tinggalkan doa dan pesan untuk kedua mempelai.</p>
                </div>

                <form id="messageForm" class="message-form"
                    data-message-endpoint="<?= esc(base_url('api/invitations/' . rawurlencode($invitation['slug']) . '/messages'), 'attr') ?>">
                    <label class="work-sans" for="messageName">Nama</label>
                    <input id="messageName" name="name" type="text" maxlength="60" placeholder="Nama Anda" required>
                    <label class="work-sans" for="messageText">Pesan</label>
                    <textarea id="messageText" name="message" maxlength="500" rows="4"
                        placeholder="Tulis ucapan dan doa Anda..." required></textarea>
                    <span class="attendance-label work-sans">Konfirmasi kehadiran</span>
                    <select class="attendance-select work-sans" name="attendance" required>
                        <option value="" selected disabled>Pilih konfirmasi kehadiran</option>
                        <option value="hadir">Hadir</option>
                        <option value="tidak_hadir">Tidak hadir</option>
                    </select>
                    <button class="message-submit work-sans" type="submit"><i class="bi bi-send-fill"></i> Kirim
                        Pesan</button>
                    <p id="messageStatus" class="message-status work-sans" role="status" aria-live="polite"></p>
                </form>

                <div id="messageList" class="message-list" aria-live="polite">
                    <p class="message-empty work-sans">Memuat pesan...</p>
                </div>
            </div>
        </section>

        <section class="closing"></section>

        <section class="thank-you">
            <div class="thank-you-inner">
                <div class="flower-dekorasi">
                    <img src="<?= base_url('img/undangan-1/dekorasi/top-flow.png') ?>" alt="" class="flower flower-top-left">
                    <img src="<?= base_url('img/undangan-1/dekorasi/bottom-flow.png') ?>" alt="" class="flower flower-bottom">
                </div>
                <h1 class="great-vibes">Terima Kasih</h1>
                <p class="work-sans">Dengan penuh rasa hormat dan sukacita, kami berharap Bapak/Ibu/Saudara/i berkenan meluangkan waktu untuk hadir serta memberikan doa restu kepada kami. Kehadiran dan doa yang diberikan merupakan kebahagiaan tersendiri bagi kami. Atas segala perhatian dan kehadirannya, kami ucapkan terima kasih.</p>
            </div>
        </section>

        <footer>
            <p class="footer-text work-sans">made with ariesundangan.my.id</p>
        </footer>

        <audio id="weddingMusic" loop>
            <source src="<?= base_url('music/eren-mikasa/suratcintauntukstarlaa.wav') ?>" type="audio/mp3">
        </audio>

    </div>

    <script src="<?= base_url('js/undangan-1/undangan1.js') ?>"></script>
    <script src="<?= base_url('js/tamuLogic.js') ?>"></script>
    <script src="<?= base_url('js/undangan-1/messages.js') ?>"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>