<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Tristan</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />

  <!-- Main Style -->
 <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body data-title-id="Portofolio Tristan" data-title-en="Tristan Portfolio">
  <!-- =========================================================
       ## SPLASH SCREEN / WELCOME MULTIBAHASA
       Teks sambutan berganti otomatis seperti layar pembuka iPhone.
  ========================================================== -->
  <div class="splash-screen" id="splash-screen" aria-hidden="true">
    <div class="splash-content">
      <p class="splash-word" id="splash-word">Hello</p>
      <p class="splash-caption">Tristan Dauleate Siburian</p>
    </div>
    <span class="splash-hint">Tap to continue</span>
  </div>

  <div class="scroll-progress" id="scroll-progress" aria-hidden="true"></div>

  <a class="skip-link" href="#home" data-en="Skip to main content">
    Lewati ke konten utama
  </a>

  <!-- =========================================================
       ## NAVBAR / MENU UTAMA
  ========================================================== -->
  <header class="site-header">
    <nav class="navbar" aria-label="Navigasi utama">
      <a class="brand" href="#home" aria-label="Beranda Portofolio">
        <span class="brand-mark">Tristan</span>
        <span data-en="Dauleate Siburian">Dauleate Siburian</span>
      </a>

      <div class="nav-menu" id="nav-menu">
        <a href="#home" data-en="Home">Home</a>
        <a href="#about" data-en="About">Tentang</a>
        <a href="#projects" data-en="Projects">Proyek</a>
        <a href="#skills" data-en="Skills">Keahlian</a>
        <a href="#certificates" data-en="Certificates">Sertifikat</a>
        <a href="#testimonials" data-en="Testimonials">Testimoni</a>
        <a class="nav-external" href="#" target="_blank" rel="noreferrer noopener">Github</a>
        <a href="#contact" data-en="Contact">Kontak</a>
      </div>

      <div class="nav-actions">
        <button
          class="language-toggle"
          id="language-toggle"
          type="button"
          aria-label="Ubah bahasa ke English"
        >
          EN
        </button>

        <button
          class="nav-toggle"
          type="button"
          aria-label="Buka menu"
          aria-expanded="false"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </nav>
  </header>

  <!-- Backdrop khusus menu mobile. Klik area gelap untuk menutup menu. -->
  <button
    class="menu-backdrop"
    id="menu-backdrop"
    type="button"
    aria-label="Tutup menu"
    tabindex="-1"
  ></button>

  <main id="home">
    <!-- =========================================================
         ## KOLOM HERO / PROFIL UTAMA
    ========================================================== -->
    <section class="hero section-shell section-hero" id="hero">
      <div class="hero-content">
        <span class="eyebrow" data-en="Hello, I am">Halo, saya</span>

        <h1 class="typing-title" aria-label="Tristan Dauleate Siburian">
          <span
            class="typing-text"
            id="typing-name"
            data-text="Tristan Dauleate Siburian"
            aria-hidden="true"
          >Tristan Dauleate Siburian</span><span class="typing-cursor" aria-hidden="true"></span>
        </h1>

        <p class="role" data-en="Frontend Developer & UI Enthusiast">
          Frontend Developer & UI Enthusiast
        </p>

        <p
          class="hero-text"
          data-en="As an Information Technology Education student at Universitas Muhammadiyah Palangkaraya, I have worked on various projects during my studies and freelance experience, from simple websites to more complex applications. I enjoy combining technical skills with creative problem solving to deliver effective and visually engaging solutions."
        >
          Sebagai Mahasiswa Pendidikan Teknologi Informasi Universitas Muhammadiyah Palangkaraya,
          saya telah mengerjakan berbagai proyek selama studi dan melalui pekerjaan freelance,
          mulai dari website sederhana hingga aplikasi kompleks. Saya menikmati menggabungkan
          keterampilan teknis dengan pemecahan masalah kreatif untuk memberikan solusi yang efektif
          dan menarik.
        </p>

        <div class="hero-actions">
          <a class="btn btn-primary" href="#projects" data-en="View Works">
            Lihat Karya
          </a>

          <a
            class="btn btn-secondary"
            href="https://wa.me/6289665392070"
            target="_blank"
            rel="noreferrer noopener"
            data-en="Chat on WhatsApp"
          >
            Chat WhatsApp
          </a>
        </div>
      </div>

      <div class="hero-card tilt-card" aria-label="Kartu profil singkat">
        <div class="avatar-frame">
          <div class="profile-photo-wrap">
            <img
              class="profile-photo"
              src="{{ asset('Assets/Foto Diri.jpeg') }}"
              alt="Foto Tristan Dauleate Siburian"
            />
          </div>
        </div>

        <div class="code-chip chip-one">&lt;clean-code /&gt;</div>
        <div class="code-chip chip-two">responsive</div>
        <div class="orbit-dot dot-one"></div>
        <div class="orbit-dot dot-two"></div>

        <div class="status-card yellow tilt-card">
          <strong>6+</strong>
          <span data-en="Completed projects">Proyek selesai</span>
        </div>

        <div class="status-card pink tilt-card">
          <strong>98%</strong>
          <span data-en="Client satisfaction">Kepuasan klien</span>
        </div>
      </div>
    </section>

    <!-- =========================================================
         ## KOLOM HIGHLIGHT / KEUNGGULAN
    ========================================================== -->
    <section class="section-shell highlight-strip" aria-label="Keunggulan layanan">
      <article class="highlight-card tilt-card">
        <span>01</span>
        <strong data-en="Bold Visuals">Visual Berani</strong>
        <p data-en="A neobrutalism style with strong colors, thick borders, and memorable composition.">
          Gaya neobrutalism dengan warna tegas, border kuat, dan komposisi yang mudah diingat.
        </p>
      </article>

      <article class="highlight-card tilt-card">
        <span>02</span>
        <strong data-en="Responsive">Responsif</strong>
        <p data-en="The layout stays clean across desktop, tablet, and mobile devices.">
          Tampilan tetap rapi untuk desktop, tablet, dan perangkat mobile.
        </p>
      </article>

      <article class="highlight-card tilt-card">
        <span>03</span>
        <strong data-en="Interactive">Interaktif</strong>
        <p data-en="Scroll reveal, hover effects, cards, progress bar, and lightweight motion without extra libraries.">
          Animasi scroll, hover, kartu interaktif, progress bar, dan efek gerak ringan tanpa library tambahan.
        </p>
      </article>
    </section>

    <!-- =========================================================
         ## KOLOM TENTANG SAYA
    ========================================================== -->
    <section class="section-shell grid-section" id="about">
      <div class="section-heading">
        <span class="tag" data-en="About Me">Tentang Saya</span>
        <h2 data-en="Brief profile.">Profil singkat.</h2>
      </div>

      <div class="about-card card-heavy tilt-card">
        <p data-en="I am a web developer focused on building interfaces that are comfortable to use, responsive, and visually distinctive. I am used to creating personal websites, landing pages, simple information systems, and data-based dashboards.">
          Saya adalah pengembang web yang fokus pada pembuatan antarmuka yang nyaman digunakan,
          responsif, dan memiliki identitas visual kuat. Saya terbiasa mengerjakan website personal,
          landing page, sistem informasi sederhana, dan dashboard berbasis data.
        </p>

        <ul class="info-list">
          <li>
            <strong data-en="Location">Lokasi</strong>
            <span data-en="Palangka Raya, Indonesia">Palangka Raya, Indonesia</span>
          </li>

          <li>
            <strong>Email</strong>
            <span data-en="tristan3340@gmail.com">tristan3340@gmail.com</span>
          </li>

          <li>
            <strong data-en="Interest">Minat</strong>
            <span data-en="UI Design, Frontend, Web Performance">
              UI Design, Frontend, Web Performance
            </span>
          </li>
        </ul>
      </div>
    </section>

    <!-- =========================================================
         ## KOLOM PROYEK
         Tambah project baru dengan menduplikasi <article class="project-card">.
         Slider bisa digeser dengan tombol previous dan next.
    ========================================================== -->
    <section class="section-shell" id="projects">
      <div class="project-head">
        <div class="section-heading wide">
          <span class="tag blue" data-en="My Projects">Proyek saya</span>
        </div>

        <div class="project-controls" aria-label="Kontrol daftar proyek">
          <button
            class="project-nav-btn project-prev"
            type="button"
            aria-label="Proyek sebelumnya"
            data-id-label="Proyek sebelumnya"
            data-en-label="Previous project"
          >
            &lsaquo;
          </button>

          <button
            class="project-nav-btn project-next"
            type="button"
            aria-label="Proyek berikutnya"
            data-id-label="Proyek berikutnya"
            data-en-label="Next project"
          >
            &rsaquo;
          </button>
        </div>
      </div>

      <div class="project-slider" aria-label="Daftar proyek">
        <div class="project-grid" id="project-grid">
          <!-- Project 01 -->
          <article class="project-card card-heavy tilt-card">
            <div class="project-thumb thumb-one has-image">
              <img src="{{ asset('Assets/Project/biocism.png') }}" alt="Tampilan project Biocism" />
              <span class="thumb-label">01</span>
            </div>

            <div class="project-body">
              <h3 data-en="BioSim Cerna">BioSim Cerna</h3>
              <p data-en="An educational simulation website about the structure of human digestive organs.">
                Website simulasi tentang struktur organ pencernaan manusia.
              </p>

              <div class="stack">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>

              <a
                class="text-link"
                href="https://biosim-cerna.web.app/"
                target="_blank"
                rel="noreferrer noopener"
                data-en="Visit"
              >
                Kunjungi
              </a>
            </div>
          </article>

          <!-- Project 02 -->
          <article class="project-card card-heavy tilt-card">
            <div class="project-thumb thumb-one has-image">
              <img src="{{ asset('Assets/Project/EduConnect.png') }}" alt="Tampilan project EduConnect" />
              <span class="thumb-label">02</span>
            </div>

            <div class="project-body">
              <h3 data-en="EduConnect">EduConnect</h3>
              <p data-en="An integrated web-based application for monitoring student activities at school.">
                Sebuah aplikasi terintegrasi website untuk memonitoring aktivitas siswa di sekolah.
              </p>

              <div class="stack">
                <span>Flutter</span>
                <span>Dart</span>
                <span>Gradle</span>
              </div>

              <a
                class="text-link"
                href="https://user-smaedu.my.id/"
                target="_blank"
                rel="noreferrer noopener"
                data-en="Visit"
              >
                Kunjungi
              </a>
            </div>
          </article>

          <!-- Project 03 -->
          <article class="project-card card-heavy tilt-card">
            <div class="project-thumb thumb-one has-image">
              <img src="{{ asset('Assets/Project/bin.png') }}" alt="Tampilan project Bin" />
              <span class="thumb-label">03</span>
            </div>

            <div class="project-body">
              <h3 data-en="Berkah Ilmu Nusantara">Berkah Ilmu Nusantara</h3>
              <p data-en="A foundation website dedicated to advancing education and skills development in Indonesia, focusing on tutoring services (Berkah Academy), skills training (Berkah Skills Academy), community service, and the management of scientific journal publications.">
                Website yayasan ini didedikasikan untuk memajukan pendidikan dan keterampilan di Indonesia,
                dengan fokus pada layanan bimbingan belajar (Berkah Academy), pelatihan keterampilan
                (Berkah Skills Academy), pengabdian masyarakat, serta pengelolaan publikasi jurnal ilmiah.
              </p>

              <div class="stack">
                <span>Wordpress</span>
                <span>PhP</span>
                <span>MySQL</span>
              </div>

              <a
                class="text-link"
                href="https://www.bin-foundation.org/"
                target="_blank"
                rel="noreferrer noopener"
                data-en="Visit"
              >
                Kunjungi
              </a>
            </div>
          </article>

          <!-- Project 04 -->
          <article class="project-card card-heavy tilt-card">
            <div class="project-thumb thumb-one has-image">
              <img src="{{ asset('Assets/Project/green.png') }}" alt="Tampilan project GreenTech" />
              <span class="thumb-label">04</span>
            </div>

            <div class="project-body">
              <h3 data-en="TansQR">TansQR</h3>
              <p data-en="A simple web assignment project that displays detailed information about a plant.">
                Sebuah proyek tugas web sederhana untuk menampilkan detail suatu tanaman.
              </p>

              <div class="stack">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>

              <a
                class="text-link"
                href="https://greentech-9edd7.web.app/"
                target="_blank"
                rel="noreferrer noopener"
                data-en="Visit"
              >
                Kunjungi
              </a>
            </div>
          </article>

          <!-- Project 05 -->
          <article class="project-card card-heavy tilt-card">
            <div class="project-thumb thumb-one has-image">
              <img src="{{ asset('Assets/Project/ayocerdas.png') }}" alt="Tampilan project Ayocerdas" />
              <span class="thumb-label">05</span>
            </div>

            <div class="project-body">
              <h3 data-en="Ayocerdas">Ayocerdas</h3>
              <p data-en="A web assignment project for class or course registration in coding, informatics, and various other subjects.">
                Sebuah proyek tugas web untuk pendaftaran kelas atau kursus dalam bidang coding,
                informatika, dan berbagai bidang lainnya.
              </p>

              <div class="stack">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>

              <a
                class="text-link"
                href="https://ayocerdas-76e28.web.app/"
                target="_blank"
                rel="noreferrer noopener"
                data-en="Visit"
              >
                Kunjungi
              </a>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- =========================================================
         ## KOLOM KEAHLIAN
    ========================================================== -->
    <section class="section-shell" id="skills">
      <div class="section-heading wide">
        <span class="tag green" data-en="Skills">Keahlian</span>
        <h2 data-en="Main tools and abilities.">Tools dan kemampuan utama.</h2>
      </div>

      <!-- =====================================================
           ## ANIMASI KEAHLIAN BERJALAN
           Baris pertama bergerak dari kanan ke kiri.
           Baris kedua bergerak dari kiri ke kanan.
           Tambahkan keahlian baru di dalam .skills-set yang sesuai.
      ====================================================== -->
      <div class="skills-marquee" aria-label="Daftar bahasa pemrograman dan tools">
        <!-- Baris 01: kanan ke kiri -->
        <div class="skills-row skills-row-left">
          <div class="skills-track">
            <div class="skills-set">
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>HTML5</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>CSS3</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>JavaScript</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>Bootstrap</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>Tailwind</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>PHP</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Baris 02: kiri ke kanan -->
        <div class="skills-row skills-row-right">
          <div class="skills-track">
            <div class="skills-set">
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>MySQL</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>Laravel</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>Figma</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>GitHub</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vercel/vercel-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>Vercel</span>
              </div>
              <div class="skill-pill">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/wordpress/wordpress-original.svg" alt="" aria-hidden="true" loading="lazy" />
                <span>WordPress</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         ## KOLOM SERTIFIKAT
    ========================================================== -->
    <section class="section-shell" id="certificates">
      <div class="section-heading wide">
        <span class="tag orange" data-en="Certificates">Sertifikat</span>
        <h2 data-en="Proof of learning and competence.">
          Bukti pembelajaran dan kompetensi.
        </h2>
      </div>

      <div class="certificate-grid">
        <!-- Sertifikat 01 -->
        <article class="certificate-card card-heavy tilt-card">
          <div class="certificate-image has-image">
            <img src="{{ asset('Assets/Serti/Achive.jpeg') }}" alt="Sertifikat Lomba" />
            <span class="thumb-label cert-label">CERT</span>
          </div>

          <h3 data-en="Achive Indonesia">Achive Indonesia</h3>
          <p data-en="Best Creative Concept Award certificate in a national essay competition.">
            Sertifikat Best Creative Concept Award dalam lomba esai nasional.
          </p>
        </article>

        <!-- Sertifikat 02 -->
        <article class="certificate-card card-heavy tilt-card">
          <div class="certificate-image alt has-image">
            <img
              src="{{ asset('Assets/Serti/Fim2.jpeg') }}"
              alt="Sertifikat Lomba"
            />
            <span class="thumb-label cert-label">CERT</span>
          </div>

          <h3 data-en="Forum Indonesia Muda 2">Forum Indonesia Muda 2</h3>
          <p data-en="Finalist certificate in a national essay competition held in Yogyakarta.">
            Sertifikat sebagai finalis pada ajang lomba esai nasional di Yogyakarta.
          </p>
        </article>

              </div>
    </section>

    <!-- =========================================================
         ## KOLOM TESTIMONI
    ========================================================== -->
    <section class="section-shell" id="testimonials">
      <div class="section-heading wide">
        <span class="tag purple" data-en="Testimonials">Testimoni</span>
        <h2 data-en="What people say about my work.">
          Apa kata mereka tentang hasil kerja saya.
        </h2>
      </div>

      <div class="testimonial-grid">
        <blockquote class="testimonial-card card-heavy tilt-card">
          <p data-en="“The website looks unique, lightweight, and very easy to use. Communication during the project was also clear.”">
            “Website yang dibuat terlihat unik, ringan, dan sangat mudah digunakan.
            Komunikasi selama pengerjaan juga jelas.”
          </p>
          <footer data-en="— Ambatukam, MSME Owner">— Ambatukam, Owner UMKM</footer>
        </blockquote>

        <blockquote class="testimonial-card card-heavy tilt-card">
          <p data-en="“The result fits the needs. The design is bold, but still neat and professional to present.”">
            “Hasilnya sesuai kebutuhan. Desainnya berani, tetapi tetap rapi dan profesional
            untuk ditampilkan.”
          </p>
          <footer data-en="— Jefri Nikhol, Startup Founder">— Jefri Nikhol, Founder Startup</footer>
        </blockquote>
      </div>
    </section>

    <!-- =========================================================
         ## KOLOM KONTAK
    ========================================================== -->
    <section class="section-shell contact-section" id="contact">
      <div class="section-heading">
        <span class="tag red" data-en="Contact">Kontak</span>
        <h2 data-en="Let’s discuss your next project.">Mari diskusi proyek berikutnya.</h2>
        <p data-en="Send a short message through this form or contact me via email and WhatsApp.">
          Kirim pesan singkat melalui form ini atau hubungi saya lewat email dan WhatsApp.
        </p>
      </div>

      <form class="contact-form card-heavy" id="contact-form" data-whatsapp="6289665392070">
        <label>
          <span data-en="Name">Nama</span>
          <input
            type="text"
            name="name"
            placeholder="Nama lengkap"
            data-en-placeholder="Full name"
            required
          />
        </label>

        <label>
          <span>Email</span>
          <input type="email" name="email" placeholder="email@example.com" required />
        </label>

        <label>
          <span data-en="Message">Pesan</span>
          <textarea
            name="message"
            rows="5"
            placeholder="Ceritakan kebutuhan website kamu"
            data-en-placeholder="Tell me about your website needs"
            required
          ></textarea>
        </label>

        <button class="btn btn-primary" type="submit" data-en="Send Message in a New Tab">
          Kirim Pesan di Tab Baru
        </button>

        <p class="form-note" id="form-note" role="status"></p>
      </form>
    </section>
  </main>

  <!-- =========================================================
       ## FOOTER
  ========================================================== -->
  <footer class="footer">
    <p>
      &copy; <span id="year"></span>
      <span data-en="Tristan Dauleate Siburian. Built with care.">
        Tristan Dauleate Siburian. Dibuat dengan Sepenuh Hati.
      </span>
    </p>

    <div class="footer-links">
      <a href="#" target="_blank" rel="noreferrer noopener">GitHub</a>
      <a href="#" target="_blank" rel="noreferrer noopener">LinkedIn</a>
      <a href="https://www.instagram.com/trestan1/" target="_blank" rel="noreferrer noopener">
        Instagram
      </a>
    </div>
  </footer>

  <!-- Main Script -->
  <script src="{{ asset('script.js') }}"></script>
</body>
</html>
