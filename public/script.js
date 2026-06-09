const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const navLinks = document.querySelectorAll('.nav-menu a');
const form = document.querySelector('#contact-form');
const note = document.querySelector('#form-note');
const year = document.querySelector('#year');
const progressBar = document.querySelector('#scroll-progress');
const languageToggle = document.querySelector('#language-toggle');
const menuBackdrop = document.querySelector('#menu-backdrop');

const splashScreen = document.querySelector('#splash-screen');
const splashWord = document.querySelector('#splash-word');
const typingTitle = document.querySelector('.typing-title');
const typingName = document.querySelector('#typing-name');

/* =========================================================
   ## SPLASH SCREEN WELCOME MULTIBAHASA
   Teks sambutan berganti otomatis seperti layar pembuka iPhone.
   Klik atau tap splash screen untuk mempercepat masuk ke halaman.
========================================================= */
const splashGreetings = [
  'Hello',
  'Halo',
  'Bonjour',
  'Hola',
  'Ciao',
  'Olá',
  'Hallo',
  'Welkom',
  'Välkommen',
  'Bienvenido',
  'Willkommen',
  'Hoş geldiniz',
  'Selamat Datang',
  'مرحبا',
  'स्वागत है',
  'こんにちは',
  '안녕하세요',
  '你好',
  'สวัสดี',
  'Привет'
];

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
let typingTimer = null;
let typingCycleTimer = null;
let splashInterval = null;
let splashFinished = false;

/* =========================================================
   ## KONFIGURASI DURASI ANIMASI
   Pergantian bahasa dibuat cepat agar lebih banyak sapaan muncul dalam 5 detik.
========================================================= */
const SPLASH_GREETING_DURATION = 210;
const SPLASH_TRANSITION_DURATION = 70;
const SPLASH_TOTAL_DURATION = 5000;
const SPLASH_EXIT_DURATION = 920;
const TYPING_SPEED = 120;
const TYPING_REPEAT_DELAY = 5000;
const TYPING_ERASE_SPEED = 58;
const TYPING_RESTART_DELAY = 650;

const clearTypingTimers = () => {
  window.clearTimeout(typingTimer);
  window.clearTimeout(typingCycleTimer);
};

const scheduleTypingRepeat = (fullName) => {
  if (reducedMotion) return;

  typingCycleTimer = window.setTimeout(() => {
    let characterIndex = fullName.length;
    typingTitle?.classList.remove('is-complete');

    const eraseNextCharacter = () => {
      if (!typingName) return;

      if (characterIndex <= 0) {
        typingName.textContent = '';
        typingTimer = window.setTimeout(startTypingTitle, TYPING_RESTART_DELAY);
        return;
      }

      characterIndex -= 1;
      typingName.textContent = fullName.slice(0, characterIndex);
      typingTimer = window.setTimeout(eraseNextCharacter, TYPING_ERASE_SPEED);
    };

    eraseNextCharacter();
  }, TYPING_REPEAT_DELAY);
};

const startTypingTitle = () => {
  if (!typingName || !typingTitle) return;

  const fullName = typingName.dataset.text || typingName.textContent.trim();
  clearTypingTimers();
  typingTitle.classList.remove('is-complete');

  if (reducedMotion) {
    typingName.textContent = fullName;
    typingTitle.classList.add('is-complete');
    return;
  }

  typingName.textContent = '';
  let characterIndex = 0;

  const typeNextCharacter = () => {
    typingName.textContent += fullName.charAt(characterIndex);
    characterIndex += 1;

    if (characterIndex >= fullName.length) {
      typingTitle.classList.add('is-complete');
      scheduleTypingRepeat(fullName);
      return;
    }

    typingTimer = window.setTimeout(typeNextCharacter, TYPING_SPEED);
  };

  typingTimer = window.setTimeout(typeNextCharacter, 280);
};

const closeSplashScreen = () => {
  if (!splashScreen || splashFinished) return;

  splashFinished = true;
  window.clearInterval(splashInterval);
  splashScreen.classList.add('is-hidden');

  // Splash screen bergerak ke atas dahulu, lalu halaman mulai aktif.
  window.setTimeout(() => {
    document.body.classList.remove('splash-active');
    startTypingTitle();
  }, Math.max(420, SPLASH_EXIT_DURATION - 180));

  window.setTimeout(() => {
    splashScreen.remove();
  }, SPLASH_EXIT_DURATION + 120);
};

const runSplashScreen = () => {
  if (!splashScreen || !splashWord) {
    startTypingTitle();
    return;
  }

  document.body.classList.add('splash-active');

  if (reducedMotion) {
    window.setTimeout(closeSplashScreen, 400);
    return;
  }

  let greetingIndex = 0;
  splashWord.textContent = splashGreetings[greetingIndex];

  splashInterval = window.setInterval(() => {
    splashWord.classList.add('is-changing');

    window.setTimeout(() => {
      greetingIndex = (greetingIndex + 1) % splashGreetings.length;
      splashWord.textContent = splashGreetings[greetingIndex];
      splashWord.classList.remove('is-changing');
    }, SPLASH_TRANSITION_DURATION);
  }, SPLASH_GREETING_DURATION);

  window.setTimeout(closeSplashScreen, Math.max(0, SPLASH_TOTAL_DURATION - SPLASH_EXIT_DURATION));
  splashScreen.addEventListener('click', closeSplashScreen, { once: true });
};

runSplashScreen();

/* =========================================================
   ## DUPLIKASI ITEM KEAHLIAN UNTUK ANIMASI LOOP TANPA PUTUS
   HTML cukup memuat satu set item pada setiap baris.
========================================================= */
document.querySelectorAll('.skills-track').forEach((track) => {
  const originalSet = track.querySelector('.skills-set');
  if (!originalSet) return;

  const clonedSet = originalSet.cloneNode(true);
  clonedSet.setAttribute('aria-hidden', 'true');
  track.appendChild(clonedSet);
});

/* =========================================================
   ## FITUR BAHASA OTOMATIS DARI HTML
   Edit teks Indonesia langsung di dalam HTML.
   Edit teks English pada atribut data-en="...".
   Jadi tidak perlu lagi mengubah daftar terjemahan panjang di JavaScript.
========================================================= */
const translatableElements = document.querySelectorAll('[data-en]');
const placeholderElements = document.querySelectorAll('[data-en-placeholder]');
const labelElements = document.querySelectorAll('[data-en-label]');

translatableElements.forEach((element) => {
  if (!element.dataset.id) element.dataset.id = element.textContent.trim();
});

placeholderElements.forEach((element) => {
  if (!element.dataset.idPlaceholder) element.dataset.idPlaceholder = element.placeholder;
});

let currentLanguage = localStorage.getItem('portfolioLanguage') || 'id';

const applyLanguage = (lang) => {
  currentLanguage = lang;
  document.documentElement.lang = lang;

  const titleId = document.body.dataset.titleId || document.title;
  const titleEn = document.body.dataset.titleEn || titleId;
  document.title = lang === 'en' ? titleEn : titleId;

  translatableElements.forEach((element) => {
    element.textContent = lang === 'en' ? element.dataset.en : element.dataset.id;
  });

  placeholderElements.forEach((element) => {
    element.placeholder = lang === 'en' ? element.dataset.enPlaceholder : element.dataset.idPlaceholder;
  });

  labelElements.forEach((element) => {
    const labelId = element.dataset.idLabel || element.getAttribute('aria-label') || '';
    const labelEn = element.dataset.enLabel || labelId;
    element.setAttribute('aria-label', lang === 'en' ? labelEn : labelId);
  });

  if (languageToggle) {
    languageToggle.textContent = lang === 'en' ? 'ID' : 'EN';
    languageToggle.setAttribute('aria-label', lang === 'en' ? 'Ubah bahasa ke Indonesia' : 'Ubah bahasa ke English');
  }

  if (navToggle) {
    navToggle.setAttribute('aria-label', lang === 'en' ? 'Open menu' : 'Buka menu');
  }

  if (menuBackdrop) {
    menuBackdrop.setAttribute('aria-label', lang === 'en' ? 'Close menu' : 'Tutup menu');
  }

  localStorage.setItem('portfolioLanguage', lang);
};

applyLanguage(currentLanguage);

if (languageToggle) {
  languageToggle.addEventListener('click', () => {
    applyLanguage(currentLanguage === 'id' ? 'en' : 'id');
  });
}

/* =========================================================
   ## TAHUN OTOMATIS
========================================================= */
if (year) {
  year.textContent = new Date().getFullYear();
}

/* =========================================================
   ## MENU MOBILE
========================================================= */
const closeMobileMenu = () => {
  navMenu?.classList.remove('active');
  menuBackdrop?.classList.remove('active');
  document.body.classList.remove('menu-open');
  navToggle?.setAttribute('aria-expanded', 'false');
};

if (navToggle && navMenu) {
  navToggle.addEventListener('click', () => {
    const isOpen = navMenu.classList.toggle('active');
    menuBackdrop?.classList.toggle('active', isOpen);
    document.body.classList.toggle('menu-open', isOpen);
    navToggle.setAttribute('aria-expanded', String(isOpen));
  });
}

menuBackdrop?.addEventListener('click', closeMobileMenu);

document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') closeMobileMenu();
});

window.addEventListener('resize', () => {
  if (window.innerWidth > 1024) closeMobileMenu();
});

navLinks.forEach((link) => {
  link.addEventListener('click', closeMobileMenu);
});

/* =========================================================
   ## SCROLL PROGRESS BAR
========================================================= */
const updateProgress = () => {
  if (!progressBar) return;

  const scrollTop = window.scrollY;
  const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
  const progress = documentHeight > 0 ? (scrollTop / documentHeight) * 100 : 0;
  progressBar.style.width = `${progress}%`;
};

window.addEventListener('scroll', updateProgress, { passive: true });
updateProgress();

/* =========================================================
   ## REVEAL ANIMATION SAAT SCROLL
========================================================= */
const animatedElements = document.querySelectorAll(`
  .section-heading,
  .highlight-card,
  .about-card,
  .project-card,
  .skill-pill,
  .certificate-card,
  .testimonial-card
`);

animatedElements.forEach((element, index) => {
  element.classList.add('reveal');
  element.style.transitionDelay = `${Math.min(index % 6, 5) * 70}ms`;
});

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.16,
  rootMargin: '0px 0px -40px 0px'
});

animatedElements.forEach((element) => revealObserver.observe(element));

/* =========================================================
   ## SLIDER PROYEK DENGAN TOMBOL PREVIOUS DAN NEXT
========================================================= */
const projectGrid = document.querySelector('#project-grid');
const projectPrev = document.querySelector('.project-prev');
const projectNext = document.querySelector('.project-next');

const getProjectScrollAmount = () => {
  if (!projectGrid) return 0;
  const firstCard = projectGrid.querySelector('.project-card');
  if (!firstCard) return projectGrid.clientWidth;

  const styles = window.getComputedStyle(projectGrid);
  const gap = parseFloat(styles.columnGap || styles.gap || 0) || 0;
  return firstCard.getBoundingClientRect().width + gap;
};

const updateProjectButtons = () => {
  if (!projectGrid || !projectPrev || !projectNext) return;

  const maxScrollLeft = projectGrid.scrollWidth - projectGrid.clientWidth - 2;
  projectPrev.disabled = projectGrid.scrollLeft <= 2;
  projectNext.disabled = projectGrid.scrollLeft >= maxScrollLeft;
};

if (projectGrid && projectPrev && projectNext) {
  projectPrev.addEventListener('click', () => {
    projectGrid.scrollBy({ left: -getProjectScrollAmount(), behavior: 'smooth' });
  });

  projectNext.addEventListener('click', () => {
    projectGrid.scrollBy({ left: getProjectScrollAmount(), behavior: 'smooth' });
  });

  projectGrid.addEventListener('scroll', updateProjectButtons, { passive: true });
  window.addEventListener('resize', updateProjectButtons);
  updateProjectButtons();
}

/* =========================================================
   ## EFEK TILT PADA KARTU
========================================================= */
const canUseTilt = window.matchMedia('(hover: hover) and (pointer: fine)').matches
  && !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (canUseTilt) {
  document.querySelectorAll('.tilt-card:not(.contact-form)').forEach((card) => {
    card.addEventListener('mousemove', (event) => {
      const rect = card.getBoundingClientRect();
      const x = event.clientX - rect.left;
      const y = event.clientY - rect.top;
      const rotateX = ((y / rect.height) - 0.5) * -7;
      const rotateY = ((x / rect.width) - 0.5) * 7;

      card.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-3px)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
}

/* =========================================================
   ## MENU AKTIF SESUAI SECTION
========================================================= */
const sectionLinks = [...document.querySelectorAll('.nav-menu a[href^="#"]')].filter((link) => {
  const href = link.getAttribute('href');
  return href && href.length > 1 && !link.classList.contains('nav-external');
});

const sectionObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) return;

    sectionLinks.forEach((link) => link.classList.remove('is-active'));
    const activeLink = sectionLinks.find((link) => link.getAttribute('href') === `#${entry.target.id}`);
    activeLink?.classList.add('is-active');
  });
}, {
  threshold: 0.35,
  rootMargin: '-20% 0px -60% 0px'
});

sectionLinks.forEach((link) => {
  const target = document.querySelector(link.getAttribute('href'));
  if (target) sectionObserver.observe(target);
});

/* =========================================================
   ## FORM KONTAK KE WHATSAPP TAB BARU
========================================================= */
if (form && note) {
  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const data = new FormData(form);
    const name = data.get('name') || (currentLanguage === 'en' ? 'friend' : 'teman');
    const email = data.get('email') || '-';
    const message = data.get('message') || '-';
    const phone = form.dataset.whatsapp || '6289665392070';

    const whatsappText = currentLanguage === 'en'
      ? `Hello, I am ${name}.\nEmail: ${email}\nMessage: ${message}`
      : `Halo, saya ${name}.\nEmail: ${email}\nPesan: ${message}`;

    const whatsappUrl = `https://wa.me/${phone}?text=${encodeURIComponent(whatsappText)}`;
    window.open(whatsappUrl, '_blank', 'noopener,noreferrer');

    note.textContent = currentLanguage === 'en'
      ? `Thank you, ${name}. The message has been opened in a new WhatsApp tab.`
      : `Terima kasih, ${name}. Pesan dibuka di tab baru melalui WhatsApp.`;

    note.classList.remove('is-visible');
    void note.offsetWidth;
    note.classList.add('is-visible');
    form.reset();
  });
}
