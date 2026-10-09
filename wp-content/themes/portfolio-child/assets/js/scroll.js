/**
 * Prathish Raj Portfolio - scroll.js
 * GSAP ScrollTrigger timeline for 3D hero card, Lenis smooth scrolling, work experience blur
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Initialize Lenis Smooth Scrolling
  let lenis = null;
  if (typeof Lenis !== 'undefined') {
    lenis = new Lenis({
      smoothWheel: true,
      lerp: 0.1,
      duration: 1.2
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Sync with GSAP ScrollTrigger if present
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    }

    // Anchor smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const hash = this.getAttribute('href');
        if (hash === '#' || !hash) return;
        const target = document.querySelector(hash);
        if (target) {
          e.preventDefault();
          lenis.scrollTo(target, { offset: 0 });
        }
      });
    });
  }

  // 2. GSAP ScrollTrigger 3D Card Pin Animation
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.config({ ignoreMobileResize: true });

    function xRight() {
      return Math.min(800, window.innerWidth * 0.52);
    }
    function yDown1() {
      return 70;
    }

    ScrollTrigger.matchMedia({
      // Desktop / Tablet (> 500px)
      "(min-width: 501px)": function () {
        const cardPin = document.querySelector('.card-pin');
        const introSection = document.querySelector('.intro-section');
        const skillsSection = document.querySelector('.section-skills');
        const aboutSection = document.querySelector('#about, .section-about');
        const awardsSection = document.querySelector('#awards, .section-awards');

        if (cardPin && introSection) {
          const tl = gsap.timeline({
            scrollTrigger: {
              trigger: introSection,
              start: "top top",
              end: "+=7800",
              scrub: 1.2,
              pin: cardPin,
              pinSpacing: false,
              anticipatePin: 1,
              invalidateOnRefresh: true
            }
          });

          // Hold initial hero position during early scroll
          tl.to(".scroll-card", {
            x: 0,
            y: 0,
            duration: 0.12
          })
          // Phase 1: subtle tilt and translation to right
          .to(".scroll-card", {
            x: () => xRight(),
            y: () => yDown1(),
            rotationZ: 8,
            rotationY: 0,
            scale: 1,
            ease: "power1.inOut",
            duration: 0.22
          })
          // Phase 2: flip 180 degrees to reveal video/poster back
          .to(".scroll-card", {
            rotationY: 180,
            rotationZ: 0,
            ease: "power2.inOut",
            duration: 0.45
          })
          // Phase 3: scale-up
          .to(".scroll-card", {
            scale: 1.15,
            ease: "power1.inOut",
            duration: 1.2
          })
          // Phase 4: smooth scale-down
          .to(".scroll-card", {
            scale: 1,
            ease: "power1.inOut",
            duration: 0.4
          })
          // Phase 5: hold position on right through skills and into about
          .to(".scroll-card", {
            x: () => xRight(),
            y: () => yDown1(),
            rotationY: 180,
            ease: "none",
            duration: 1.6
          });

          // About section card state: swap video to revolving slideshow, hide name & subtext
          function setAboutCardActive(isActive) {
            const card = document.querySelector('.scroll-card');
            const slideshow = document.getElementById('card-about-slideshow');
            if (isActive) {
              if (card) card.classList.add('card-in-about');
              if (slideshow) slideshow.classList.add('is-active');
              if (window.prathishCardSlideshow) window.prathishCardSlideshow.start();
            } else {
              if (card) card.classList.remove('card-in-about');
              if (slideshow) slideshow.classList.remove('is-active');
              if (window.prathishCardSlideshow) window.prathishCardSlideshow.stop();
            }
          }

          if (aboutSection) {
            ScrollTrigger.create({
              id: 'cardAboutMode',
              trigger: aboutSection,
              start: 'top 70%',
              end: 'bottom 35%',
              onEnter: () => setAboutCardActive(true),
              onEnterBack: () => setAboutCardActive(true),
              onLeave: () => setAboutCardActive(false),
              onLeaveBack: () => setAboutCardActive(false)
            });
          }

          // Card fade out when scrolling past About into Awards / Key Works
          const nextSection = awardsSection || document.querySelector('.manifesto-section, #experience');
          if (nextSection) {
            gsap.fromTo(
              cardPin,
              { autoAlpha: 1 },
              {
                autoAlpha: 0,
                ease: 'power1.out',
                scrollTrigger: {
                  id: 'cardFadeAwards',
                  trigger: nextSection,
                  start: 'top 85%',
                  end: 'top 55%',
                  scrub: true,
                  onLeave: () => gsap.set(cardPin, { autoAlpha: 0 }),
                  onLeaveBack: () => gsap.set(cardPin, { autoAlpha: 1 }),
                  onEnterBack: self => {
                    gsap.set(cardPin, { autoAlpha: gsap.utils.mapRange(0, 1, 0, 1, self.progress) });
                  }
                }
              }
            );
          }
        }

        // Work experience rows blur-to-sharp scrub
        gsap.utils.toArray('.experience-row, .experience-divider').forEach((el) => {
          gsap.fromTo(
            el,
            { opacity: 0, filter: 'blur(8px)' },
            {
              opacity: 1,
              filter: 'blur(0px)',
              ease: 'none',
              scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                end: 'bottom 70%',
                scrub: true
              }
            }
          );
        });

        // Refresh triggers on full layout ready
        requestAnimationFrame(() => {
          ScrollTrigger.refresh();
          const params = new URLSearchParams(window.location.search);
          if (params.has('scroll')) {
            const scrollPos = parseFloat(params.get('scroll'));
            if (lenis) {
              lenis.scrollTo(scrollPos, { immediate: true });
            } else {
              window.scrollTo(0, scrollPos);
            }
          }
        });
      }
    });
  }
});


