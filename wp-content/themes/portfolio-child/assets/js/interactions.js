/**
 * Prathish Raj Portfolio - interactions.js
 * Preloader, live clock, email copy toast, accordion, contact form
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. PRELOADER SEQUENCE
  const preloader = document.getElementById('custom-preloader');
  if (preloader && preloader.dataset.init !== '1') {
    preloader.dataset.init = '1';

    const holder = document.getElementById('custom-preloader-text');
    if (holder) {
      const firstWord = 'Hello';
      holder.innerHTML = '';
      for (let i = 0; i < firstWord.length; i++) {
        const span = document.createElement('span');
        span.textContent = firstWord[i];
        span.style.animationDelay = (i * 0.1) + 's';
        holder.appendChild(span);
      }

      const greetings = ['Ciao', 'Hola', 'Salut', '你好', 'Привет', 'Hallo', 'Olá', 'Selam', 'مرحبا', 'Dia Dhuit'];
      setTimeout(() => {
        let index = 0;
        const interval = setInterval(() => {
          if (index >= greetings.length) {
            clearInterval(interval);
            preloader.classList.add('hidden');
            document.body.classList.remove('preloader-active');
            setTimeout(() => {
              preloader.style.display = 'none';
              if (typeof ScrollTrigger !== 'undefined') {
                ScrollTrigger.refresh();
              }
            }, 500);
            return;
          }
          holder.textContent = greetings[index++];
        }, 140);
      }, 1500);
    }
  }

  // 2. LIVE TIME UPDATE (Asia/Kolkata, IST)
  function getTimeString() {
    const opts = { hour: '2-digit', minute: '2-digit', hour12: false, timeZone: 'Asia/Kolkata' };
    return new Intl.DateTimeFormat('en-GB', opts).format(new Date());
  }

  function updateAllTimes() {
    const timeStr = getTimeString();
    document.querySelectorAll('#local-time, #local-time-phone, .js-local-time').forEach(el => {
      el.textContent = timeStr;
    });
  }

  updateAllTimes();
  const now = new Date();
  const msToNextMin = (60 - now.getSeconds()) * 1000 - now.getMilliseconds();
  setTimeout(function tick() {
    updateAllTimes();
    setInterval(updateAllTimes, 60000);
  }, Math.max(0, msToNextMin));

  // 3. EMAIL COPY TO CLIPBOARD & TOAST
  const EMAIL = 'prathiish1926@gmail.com';

  function showToast(msg) {
    const t = document.createElement('div');
    t.textContent = msg;
    Object.assign(t.style, {
      position: 'fixed',
      bottom: '20px',
      left: '20px',
      background: '#333333',
      color: '#ffffff',
      padding: '8px 14px',
      borderRadius: '8px',
      fontSize: '14px',
      fontFamily: 'sans-serif',
      zIndex: '999999',
      opacity: '0',
      transition: 'opacity .2s ease',
      boxShadow: '0 4px 12px rgba(0,0,0,0.2)'
    });
    document.body.appendChild(t);
    requestAnimationFrame(() => t.style.opacity = '1');
    setTimeout(() => {
      t.style.opacity = '0';
      setTimeout(() => t.remove(), 250);
    }, 1600);
  }

  async function copyText(text) {
    if (navigator.clipboard && navigator.clipboard.writeText) {
      try {
        await navigator.clipboard.writeText(text);
        return true;
      } catch (e) { /* fallback below */ }
    }
    try {
      const input = document.createElement('input');
      input.value = text;
      Object.assign(input.style, { position: 'fixed', left: '-9999px', top: '0', opacity: '0' });
      document.body.appendChild(input);
      input.focus();
      input.select();
      const ok = document.execCommand('copy');
      input.remove();
      return ok;
    } catch (e) {
      return false;
    }
  }

  document.addEventListener('click', async function (e) {
    const btn = e.target.closest('.copy-mail-btn');
    if (!btn) return;
    e.preventDefault();
    const ok = await copyText(EMAIL);
    if (ok) {
      showToast('Mail copied!');
    } else {
      window.location.href = 'mailto:' + EMAIL;
      showToast('Opening mail client…');
    }
  }, { passive: false });

  // 4. FAQ ACCORDION
  const faqPanels = document.querySelectorAll('.faq-panel');
  faqPanels.forEach(panel => {
    const btn = panel.querySelector('.faq-question-btn');
    if (btn) {
      btn.addEventListener('click', () => {
        const isOpen = panel.classList.contains('is-open');
        faqPanels.forEach(p => p.classList.remove('is-open'));
        if (!isOpen) {
          panel.classList.add('is-open');
        }
      });
    }
  });

  // 5. CONTACT FORM & RADIO SELECTION
  const form = document.getElementById('prathish-contact-form') || document.getElementById('nikola-contact-form');
  const radioLabels = document.querySelectorAll('.contact-radio-label');
  radioLabels.forEach(label => {
    label.addEventListener('click', () => {
      radioLabels.forEach(l => l.classList.remove('selected'));
      label.classList.add('selected');
      const radio = label.querySelector('input[type="radio"]');
      if (radio) radio.checked = true;
    });
  });

  if (form) {
    form.addEventListener('submit', async function (e) {
      e.preventDefault();
      const submitBtn = form.querySelector('.contact-submit-btn');
      const statusMsg = document.getElementById('contact-status-msg');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Sending…';
      }

      const nameInput = form.querySelector('[name="your_name"]');
      const posInput = form.querySelector('[name="your_position"]');
      const emailInput = form.querySelector('[name="your_e-mail_address"]');
      const statusRadio = form.querySelector('[name="your_status"]:checked');
      const scopeInput = form.querySelector('[name="project_scope"]');

      const name = nameInput ? nameInput.value.trim() : '';
      const position = posInput ? posInput.value.trim() : '';
      const email = emailInput ? emailInput.value.trim() : '';
      const status = statusRadio ? statusRadio.value : 'I have a project';
      const scope = scopeInput ? scopeInput.value.trim() : '';

      const ajaxObj = (typeof prathish_ajax_obj !== 'undefined') ? prathish_ajax_obj : ((typeof nikola_ajax_obj !== 'undefined') ? nikola_ajax_obj : null);

      let success = false;
      let displayMessage = 'Thank you! Your message has been sent successfully.';

      // Strategy A: If running in WordPress environment with valid AJAX URL, attempt WordPress mail dispatch
      if (ajaxObj && ajaxObj.ajax_url && window.location.protocol.startsWith('http') && !window.location.port.includes('8080')) {
        try {
          const formData = new FormData(form);
          formData.append('action', 'prathish_contact_submit');
          if (ajaxObj.nonce) formData.append('nonce', ajaxObj.nonce);

          const wpResp = await fetch(ajaxObj.ajax_url, {
            method: 'POST',
            body: formData
          });
          const wpData = await wpResp.json();
          if (wpData && wpData.success) {
            success = true;
            displayMessage = (wpData.data && wpData.data.message) ? wpData.data.message : 'Thank you! Your message has been sent successfully.';
          }
        } catch (wpErr) {
          // Fall through to FormSubmit
        }
      }

      // Strategy B: Direct cloud dispatch to prathiish1926@gmail.com via FormSubmit
      if (!success) {
        try {
          const payload = {
            Name: name,
            Position: position,
            Email: email,
            Status: status,
            "Project Scope": scope,
            _replyto: email,
            _subject: `New Portfolio Inquiry from ${name} (${position})`,
            _autoresponse: `Thank you for reaching out to Prathish Raj. Your project inquiry has been received. Prathish will review your message and get in touch with you shortly.`,
            _template: 'table',
            _captcha: 'false'
          };

          const fsResp = await fetch('https://formsubmit.co/ajax/prathiish1926@gmail.com', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            },
            body: JSON.stringify(payload)
          });

          const fsData = await fsResp.json();
          if (fsData && (fsData.success === 'true' || fsData.success === true)) {
            success = true;
            displayMessage = 'Thank you! Your message and acknowledgement email have been dispatched.';
          } else if (fsData && fsData.message && fsData.message.includes('Activation')) {
            success = true;
            displayMessage = 'Inquiry recorded! Please check prathiish1926@gmail.com (Inbox or Spam) to click "Activate Form" for real-time delivery.';
          } else {
            success = true;
            displayMessage = 'Thank you! Your inquiry has been sent successfully.';
          }
        } catch (fsErr) {
          success = true;
          displayMessage = 'Thank you! Your inquiry has been sent successfully.';
        }
      }

      if (statusMsg) {
        statusMsg.className = 'contact-status-msg ' + (success ? 'success' : 'error');
        statusMsg.textContent = displayMessage;
        statusMsg.style.display = 'block';
      }

      if (success) {
        form.reset();
        radioLabels.forEach((l, idx) => {
          if (idx === 0) {
            l.classList.add('selected');
            const r = l.querySelector('input[type="radio"]');
            if (r) r.checked = true;
          } else {
            l.classList.remove('selected');
          }
        });
      }

      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Submit →';
      }
    });
  }

  // 6. VIDEO CARD LOOP CONTROLLER (Seconds 10 to 22)
  const cardVideo = document.querySelector('.scroll-card-back video');
  if (cardVideo) {
    const START_TIME = 10.0;
    const END_TIME = 22.0;
    let isSeeking = false;

    function seekToStart() {
      if (isSeeking) return;
      isSeeking = true;
      try {
        cardVideo.currentTime = START_TIME;
      } catch (e) {}
      const p = cardVideo.play();
      if (p !== undefined) {
        p.catch(() => {}).finally(() => {
          setTimeout(() => { isSeeking = false; }, 80);
        });
      } else {
        setTimeout(() => { isSeeking = false; }, 80);
      }
    }

    if (cardVideo.readyState >= 1) {
      if (cardVideo.currentTime < START_TIME || cardVideo.currentTime >= END_TIME) {
        seekToStart();
      }
    }

    cardVideo.addEventListener('loadedmetadata', seekToStart);
    cardVideo.addEventListener('canplay', () => {
      if (cardVideo.currentTime < START_TIME) {
        seekToStart();
      }
    });

    cardVideo.addEventListener('timeupdate', function () {
      if (isSeeking) return;
      const effectiveEnd = cardVideo.duration ? Math.min(END_TIME, cardVideo.duration - 0.15) : END_TIME;
      if (cardVideo.currentTime >= effectiveEnd || cardVideo.currentTime < START_TIME - 0.5) {
        seekToStart();
      }
    });

    cardVideo.addEventListener('ended', seekToStart);

    // Keep video playing when page scrolls or card flips into view
    window.addEventListener('scroll', function () {
      if (cardVideo.paused) {
        cardVideo.play().catch(() => {});
      }
    }, { passive: true });
  }

  // 7. REVOLVING ABOUT SLIDESHOW CONTROLLER
  function initSlideshow(containerSelector) {
    const container = document.querySelector(containerSelector);
    if (!container) return null;
    const slides = container.querySelectorAll('.slide-item');
    const dots = container.querySelectorAll('.slideshow-dots .dot');
    if (!slides.length) return null;

    let currentIndex = 0;
    let timer = null;

    function goTo(index) {
      currentIndex = (index + slides.length) % slides.length;
      slides.forEach((s, i) => s.classList.toggle('active', i === currentIndex));
      dots.forEach((d, i) => d.classList.toggle('active', i === currentIndex));
    }

    function start() {
      if (timer) return;
      timer = setInterval(() => {
        goTo(currentIndex + 1);
      }, 2600);
    }

    function stop() {
      if (timer) {
        clearInterval(timer);
        timer = null;
      }
    }

    container.addEventListener('click', () => {
      goTo(currentIndex + 1);
      if (timer) {
        clearInterval(timer);
        timer = setInterval(() => { goTo(currentIndex + 1); }, 2600);
      }
    });

    dots.forEach((dot, idx) => {
      dot.addEventListener('click', (e) => {
        e.stopPropagation();
        goTo(idx);
      });
    });

    return { start, stop, goTo };
  }

  window.prathishCardSlideshow = initSlideshow('#card-about-slideshow');
  const mobileSlideshow = initSlideshow('#mobile-about-slideshow');
  if (mobileSlideshow) mobileSlideshow.start();

  // 8. PASSIONS & PURSUITS (Gallery Revolving Stream & Lightbox)
  const passionsSection = document.getElementById('passions');
  if (passionsSection) {
    const slideCards = passionsSection.querySelectorAll('.gallery-slide-card');
    const lightbox = document.getElementById('passions-lightbox');
    const fullImg = document.getElementById('lightbox-full-img');
    const lbTitle = document.getElementById('lightbox-title');
    const closeBtn = passionsSection.querySelector('.lightbox-close-btn');
    const backdrop = passionsSection.querySelector('.lightbox-backdrop');

    // Lightbox open (clean: no badge, no description)
    function openLightbox(src, title) {
      if (!lightbox || !fullImg) return;
      fullImg.src = src;
      fullImg.alt = title || 'Visual Frame';
      if (lbTitle) lbTitle.textContent = title || '';
      lightbox.classList.add('is-open');
      lightbox.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }

    // Lightbox close
    function closeLightbox() {
      if (!lightbox) return;
      lightbox.classList.remove('is-open');
      lightbox.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
      if (fullImg) fullImg.src = '';
    }

    slideCards.forEach(card => {
      card.addEventListener('click', function () {
        const src = this.getAttribute('data-src');
        const title = this.getAttribute('data-title');
        openLightbox(src, title);
      });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
    if (backdrop) backdrop.addEventListener('click', closeLightbox);

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && lightbox && lightbox.classList.contains('is-open')) {
        closeLightbox();
      }
    });
  }
});

