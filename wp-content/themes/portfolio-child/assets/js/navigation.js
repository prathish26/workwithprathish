/**
 * Prathish Raj Portfolio - navigation.js
 * Multi-layer glassmorphism blur backdrop, active scrollspy, mobile navigation
 */

(function () {
  const NAV_SELECTOR = '.main-navbar-inside, .bottom-fixed-nav-wrap';
  const LAYERS = [
    [42, 60],  // stronger at bottom
    [30, 74],
    [20, 88],
    [12, 96]
  ];

  const opts = {
    height: 95,
    minWidth: 1000,
    zBelowNav: 9998,
    ink: 'rgba(0,0,0,0.001)'
  };

  function ensureBlurBackdrop() {
    let wrap = document.getElementById('nik-bottom-blur');

    if (window.innerWidth < opts.minWidth) {
      if (wrap) wrap.style.display = 'none';
      return;
    }

    if (!wrap) {
      wrap = document.createElement('div');
      wrap.id = 'nik-bottom-blur';
      wrap.setAttribute('aria-hidden', 'true');
      document.body.appendChild(wrap);
    }

    Object.assign(wrap.style, {
      position: 'fixed',
      left: '0',
      right: '0',
      bottom: '0px',
      height: opts.height + 'px',
      pointerEvents: 'none',
      zIndex: String(opts.zBelowNav),
      display: 'block'
    });

    wrap.innerHTML = '';
    LAYERS.forEach(([blurPx, topStop]) => {
      const layer = document.createElement('div');
      layer.className = 'nik-blur-layer';
      const bf = `blur(${blurPx}px) saturate(1.05) contrast(1.02)`;
      Object.assign(layer.style, {
        position: 'absolute',
        inset: '0',
        backdropFilter: bf,
        WebkitBackdropFilter: bf,
        willChange: 'backdrop-filter',
        background: opts.ink,
        maskImage: `linear-gradient(to top, rgba(0,0,0,1) 0%, rgba(0,0,0,0) ${topStop}%)`,
        WebkitMaskImage: `linear-gradient(to top, rgba(0,0,0,1) 0%, rgba(0,0,0,0) ${topStop}%)`
      });
      wrap.appendChild(layer);
    });
  }

  const refreshBlur = () => {
    ensureBlurBackdrop();
    setTimeout(ensureBlurBackdrop, 250);
  };

  window.addEventListener('resize', refreshBlur);
  window.addEventListener('orientationchange', refreshBlur);

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', refreshBlur);
  } else {
    refreshBlur();
  }

  // Active section scroll-spy
  document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.main-navbar-inside .menu-btn');
    const sections = [
      { id: 'skills', el: document.getElementById('skills') || document.querySelector('.section-skills') },
      { id: 'about', el: document.getElementById('about') || document.querySelector('.section-about') },
      { id: 'experience', el: document.getElementById('experience') || document.querySelector('.section-experience') },
      { id: 'contact', el: document.getElementById('contact') || document.querySelector('.section-contact') }
    ];

    function updateActiveNav() {
      const scrollY = window.pageYOffset;
      const viewportMid = scrollY + (window.innerHeight * 0.4);

      let currentSectionId = '';
      sections.forEach(({ id, el }) => {
        if (!el) return;
        const top = el.offsetTop;
        const height = el.offsetHeight;
        if (viewportMid >= top && viewportMid < top + height) {
          currentSectionId = id;
        }
      });

      navLinks.forEach(link => {
        const href = link.getAttribute('href') || '';
        if (currentSectionId && href.includes('#' + currentSectionId)) {
          link.classList.add('active');
        } else if (href !== '#' && !href.startsWith('http')) {
          link.classList.remove('active');
        }
      });
    }

    window.addEventListener('scroll', updateActiveNav, { passive: true });
    updateActiveNav();

    // Mobile Drawer Toggle
    const mobileTrigger = document.querySelector('.mobile-menu-trigger');
    const mobileDrawer = document.getElementById('mobile-menu-drawer');
    const closeDrawerBtn = document.querySelector('.drawer-close-btn');

    if (mobileTrigger && mobileDrawer) {
      mobileTrigger.addEventListener('click', () => {
        mobileDrawer.classList.toggle('is-open');
      });
    }
    if (closeDrawerBtn && mobileDrawer) {
      closeDrawerBtn.addEventListener('click', () => {
        mobileDrawer.classList.remove('is-open');
      });
    }
    // Close on drawer link click
    if (mobileDrawer) {
      mobileDrawer.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => {
          mobileDrawer.classList.remove('is-open');
        });
      });
    }
  });
})();

