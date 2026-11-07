(() => {
  'use strict';
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.primary-nav');

  const setHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 12);
  setHeader();
  window.addEventListener('scroll', setHeader, { passive: true });

  const closeMenu = () => {
    toggle?.setAttribute('aria-expanded', 'false');
    nav?.classList.remove('is-open');
    document.body.classList.remove('menu-open');
  };
  toggle?.addEventListener('click', () => {
    const open = toggle.getAttribute('aria-expanded') !== 'true';
    toggle.setAttribute('aria-expanded', String(open));
    nav?.classList.toggle('is-open', open);
    document.body.classList.toggle('menu-open', open);
  });
  nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
  document.addEventListener('keydown', event => { if (event.key === 'Escape') closeMenu(); });

  const revealItems = document.querySelectorAll('.reveal');
  if (reduceMotion || !('IntersectionObserver' in window)) {
    revealItems.forEach(item => item.classList.add('is-revealed'));
  } else {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });
    revealItems.forEach(item => observer.observe(item));
  }

  // Accessible FAQ accordion: native details elements remain usable without JavaScript.
  document.querySelectorAll('.accordion-item').forEach(item => {
    item.addEventListener('toggle', () => {
      if (item.open) {
        document.querySelectorAll('.accordion-item[open]').forEach(other => {
          if (other !== item) other.open = false;
        });
      }
    });
  });

  // Gallery lightbox
  const lightbox = document.querySelector('.lightbox');
  const lightboxImage = lightbox?.querySelector('img');
  const lightboxCaption = lightbox?.querySelector('p');
  const closeLightbox = () => {
    lightbox?.classList.remove('is-open');
    lightbox?.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('lightbox-open');
    if (lightboxImage) lightboxImage.src = '';
  };
  document.querySelectorAll('[data-lightbox]').forEach(trigger => {
    trigger.addEventListener('click', () => {
      if (!lightbox || !lightboxImage) return;
      const source = trigger.getAttribute('data-lightbox');
      if (!source) return;
      lightboxImage.src = source;
      lightboxImage.alt = trigger.getAttribute('data-alt') || 'Gallery photograph';
      if (lightboxCaption) lightboxCaption.textContent = trigger.getAttribute('data-caption') || '';
      lightbox.classList.add('is-open');
      lightbox.setAttribute('aria-hidden', 'false');
      document.body.classList.add('lightbox-open');
      lightbox.querySelector('.lightbox-close')?.focus();
    });
  });
  lightbox?.querySelector('.lightbox-close')?.addEventListener('click', closeLightbox);
  lightbox?.addEventListener('click', event => { if (event.target === lightbox) closeLightbox(); });
  document.addEventListener('keydown', event => { if (event.key === 'Escape') closeLightbox(); });

  const backTop = document.querySelector('.back-to-top');
  backTop?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' }));

  document.querySelectorAll('form[data-validate]').forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        form.reportValidity();
        return;
      }
      const submit = form.querySelector('[type="submit"]');
      if (submit) {
        submit.disabled = true;
        submit.setAttribute('aria-busy', 'true');
      }
    });
  });
  
// ==========================================
// PREMIUM 3 IMAGE HERO SLIDER
// ==========================================

const heroSlides = document.querySelectorAll('.hero-slide');
const heroDots = document.querySelectorAll('.hero-slider-dots button');

if (heroSlides.length > 0) {

    let currentHeroSlide = 0;
    let heroSliderTimer;

    function showHeroSlide(index) {

        currentHeroSlide = index;

        heroSlides.forEach((slide, i) => {
            slide.classList.toggle('is-active', i === index);
        });

        heroDots.forEach((dot, i) => {
            dot.classList.toggle('is-active', i === index);
        });
    }

    function nextHeroSlide() {
        const nextIndex =
            (currentHeroSlide + 1) % heroSlides.length;

        showHeroSlide(nextIndex);
    }

    function startHeroSlider() {

        clearInterval(heroSliderTimer);

        if (reduceMotion) return;

        heroSliderTimer = setInterval(nextHeroSlide, 5000);
    }

    heroDots.forEach((dot, index) => {

        dot.addEventListener('click', () => {

            showHeroSlide(index);
            startHeroSlider();

        });

    });

    document.addEventListener('visibilitychange', () => {

        if (document.hidden) {
            clearInterval(heroSliderTimer);
        } else {
            startHeroSlider();
        }

    });

    showHeroSlide(0);
    startHeroSlider();
}

})();
