<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buat undangan digital elegan yang berkesan untuk hari istimewa Anda.">
    <title>Aries Undangan Digital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/landing.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/catalog.css') ?>">
</head>

<body>
    <header class="site-header" id="beranda">
        <nav class="navbar shell" aria-label="Navigasi utama">
            <a class="brand" href="#beranda" aria-label="Aries Undangan Digital">
                <span class="brand-mark"><i class="bi bi-stars"></i></span>
                <span>aries<small>undangan digital</small></span>
            </a>
            <div class="nav-links">
                <a href="#keunggulan">Keunggulan</a>
                <a href="#katalog">Katalog</a>
                <a class="nav-cta" href="#katalog">Pilih tema <i class="bi bi-arrow-up-right"></i></a>
            </div>
            <a class="mobile-menu" href="#katalog" aria-label="Lihat katalog"><i class="bi bi-grid"></i></a>
        </nav>

        <section class="hero shell">
            <div class="hero-copy">
                <p class="eyebrow"><span></span> Undangan yang terasa personal</p>
                <h1>Rayakan kisahmu dengan cara yang <em>indah.</em></h1>
                <p class="hero-description">Undangan digital yang dirancang hangat, elegan, dan mudah dibagikan untuk
                    mengawali hari istimewa bersama orang-orang terkasih.</p>
                <div class="hero-actions">
                    <a class="button button-dark" href="#katalog">Jelajahi katalog <i class="bi bi-arrow-right"></i></a>
                    <a class="text-link" href="#keunggulan">Kenapa kami? <i class="bi bi-arrow-down-right"></i></a>
                </div>
                <div class="hero-note"><i class="bi bi-check2-circle"></i> Dibuat untuk momen yang tak terlupakan</div>
            </div>
            <div class="hero-art" aria-label="Pratinjau undangan digital">
                <div class="art-orbit orbit-one"></div>
                <div class="art-orbit orbit-two"></div>
                <div class="paper-card">
                    <span class="paper-kicker">The wedding of</span>
                    <div class="paper-flower">✦</div>
                    <h2>Eddy <i>&amp;</i> Onny</h2>
                    <p>18 · 08 · 2025</p>
                    <span class="paper-line"></span>
                    <small>Save the date</small>
                </div>
                <div class="floating-tag tag-top"><i class="bi bi-heart-fill"></i> made with love</div>
                <div class="floating-tag tag-bottom">scroll to explore <i class="bi bi-arrow-down"></i></div>
            </div>
        </section>
    </header>

    <main>
        <section class="intro-band">
            <div class="shell intro-grid">
                <p class="section-label">01 / THE EXPERIENCE</p>
                <div>
                    <h2>Satu tautan untuk<br><em>semua cerita.</em></h2>
                    <p class="section-copy">Hadirkan informasi acara, kisah kalian, galeri, hingga ucapan tamu dalam
                        satu pengalaman yang rapi dan berkesan.</p>
                </div>
            </div>
        </section>

        <section class="features shell" id="keunggulan">
            <div class="section-heading">
                <p class="section-label">02 / FITUR &amp; KEUNGGULAN</p>
                <h2>Dirancang untuk membuat<br><em>momen lebih berarti.</em></h2>
            </div>
            <div class="feature-grid">
                <article class="feature-item">
                    <span class="feature-number">01</span>
                    <i class="bi bi-phone feature-icon"></i>
                    <h3>Elegan di setiap layar</h3>
                    <p>Tampilan responsif yang tetap cantik saat dibuka dari ponsel, tablet, maupun desktop.</p>
                </article>
                <article class="feature-item feature-item-accent">
                    <span class="feature-number">02</span>
                    <i class="bi bi-send feature-icon"></i>
                    <h3>Mudah dibagikan</h3>
                    <p>Satu link sederhana untuk dikirim ke keluarga dan sahabat lewat WhatsApp atau media sosial.</p>
                </article>
                <article class="feature-item">
                    <span class="feature-number">03</span>
                    <i class="bi bi-chat-heart feature-icon"></i>
                    <h3>Lebih dari sekadar undangan</h3>
                    <p>Hadirkan RSVP, pesan tamu, galeri, cerita cinta, dan detail acara dalam satu tempat.</p>
                </article>
            </div>
        </section>

        <section class="catalog-section" id="katalog">
            <div class="shell">
                <div class="catalog-heading catalog-heading-centered">
                    <p class="section-label">03 / KATALOG UNDANGAN DIGITAL</p>
                    <h2>Temukan tema untuk<br><em>cerita istimewamu.</em></h2>
                    <p class="section-copy">Lihat koleksi tampilan undangan yang bisa menjadi rumah kecil bagi kabar
                        bahagiamu.</p>
                </div>
                <div class="catalog-filters" aria-label="Kategori katalog">
                    <a class="catalog-filter active" href="#koleksi-spesial">Romantic</a>
                    <a class="catalog-filter" href="#koleksi-spesial">Minimalis</a>
                    <a class="catalog-filter" href="#koleksi-spesial">Gallery</a>
                    <a class="catalog-filter" href="#koleksi-spesial">Modern</a>
                    <a class="catalog-filter" href="#koleksi-spesial">Dengan Foto</a>
                    <a class="catalog-filter" href="#koleksi-spesial">Tanpa Foto</a>
                </div>
                <div class="catalog-collection-title" id="koleksi-spesial"><span>Koleksi Spesial</span><i
                        class="bi bi-arrow-down-right"></i></div>
                <div class="catalog-grid">
                    <a class="catalog-card catalog-card-bloom" href="<?= base_url('eren-mikasa') ?>" target="_blank">
                        <div class="catalog-preview">
                            <span class="preview-badge">SPECIAL 01</span>
                            <img src="<?= base_url('img/catalog-design/undangan-1.png') ?>"
                                alt="Preview tema undangan Romantic Bloom">
                            <div class="preview-overlay"><span>Lihat contoh <i class="bi bi-arrow-up-right"></i></span>
                            </div>
                        </div>
                        <div class="catalog-info"><span>Romantic · Soft</span>
                            <h3>SPECIAL 01</h3>
                            <p>Hangat, lembut, dan penuh detail manis.</p><span class="catalog-action">Lihat contoh <i
                                    class="bi bi-arrow-up-right"></i></span>
                        </div>
                    </a>
                    <a class="catalog-card catalog-card-editorial" href="<?= base_url('eren-mikasa') ?>">
                        <div class="catalog-preview">
                            <span class="preview-badge">Tema 02</span>
                            <img src="<?= base_url('img/catalog-design/undangan-1.png') ?>"
                                alt="Preview tema undangan Soft Editorial">
                            <div class="preview-overlay"><span>Lihat contoh <i class="bi bi-arrow-up-right"></i></span>
                            </div>
                        </div>
                        <div class="catalog-info"><span>Editorial · Calm</span>
                            <h3>Soft Editorial</h3>
                            <p>Minimal, modern, dan tenang untuk kisah yang timeless.</p><span
                                class="catalog-action">Lihat contoh <i class="bi bi-arrow-up-right"></i></span>
                        </div>
                    </a>
                    <a class="catalog-card catalog-card-photo" href="<?= base_url('eren-mikasa') ?>">
                        <div class="catalog-preview"><span class="preview-badge">Tema 03</span><img
                                src="<?= base_url('img/catalog-design/undangan-1.png') ?>"
                                alt="Preview tema undangan Gallery Story">
                            <div class="preview-overlay"><span>Lihat contoh <i class="bi bi-arrow-up-right"></i></span>
                            </div>
                        </div>
                        <div class="catalog-info"><span>Gallery · Story</span>
                            <h3>Gallery Story</h3>
                            <p>Biarkan foto-foto kalian bercerita lebih banyak.</p><span class="catalog-action">Lihat
                                contoh <i class="bi bi-arrow-up-right"></i></span>
                        </div>
                    </a>
                    <a class="catalog-card catalog-card-night" href="<?= base_url('eren-mikasa') ?>">
                        <div class="catalog-preview"><span class="preview-badge">Tema 04</span><img
                                src="<?= base_url('img/catalog-design/undangan-1.png') ?>"
                                alt="Preview tema undangan Midnight Vow">
                            <div class="preview-overlay"><span>Lihat contoh <i class="bi bi-arrow-up-right"></i></span>
                            </div>
                        </div>
                        <div class="catalog-info"><span>Midnight · Modern</span>
                            <h3>Midnight Vow</h3>
                            <p>Berani, dramatis, dan berbeda dari yang lain.</p><span class="catalog-action">Lihat
                                contoh <i class="bi bi-arrow-up-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="shell footer-main">
            <div><a class="brand footer-brand" href="#beranda"><span class="brand-mark"><i
                            class="bi bi-stars"></i></span><span>aries<small>undangan digital</small></span></a>
                <p>Menjaga cerita baik tetap dekat,<br>kapan pun dan di mana pun.</p>
            </div>
            <div class="footer-links"><a href="#beranda">Beranda</a><a href="#keunggulan">Keunggulan</a><a
                    href="#katalog">Katalog</a></div>
            <a class="back-top" href="#beranda" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></a>
        </div>
        <div class="shell footer-bottom"><span>© <?= date('Y') ?> Aries Undangan Digital</span><span>Made for meaningful
                moments</span></div>
    </footer>
</body>

</html>