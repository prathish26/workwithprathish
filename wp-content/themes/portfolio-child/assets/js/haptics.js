/**
 * Prathish Raj Design System - haptics.js
 * Generative Ambient Mesh Canvas, 3D Card Tilt Physics & Magnetic Haptics
 */

(function () {
  'use strict';

  // 1. GENERATIVE AMBIENT CANVAS
  function initAmbientCanvas() {
    const canvas = document.getElementById('ambient-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = 0;
    let height = 0;
    let dpr = window.devicePixelRatio || 1;

    let mouseX = 0;
    let mouseY = 0;
    let curMouseX = 0;
    let curMouseY = 0;

    function resize() {
      width = canvas.parentElement ? canvas.parentElement.offsetWidth : window.innerWidth;
      height = canvas.parentElement ? canvas.parentElement.offsetHeight : window.innerHeight;
      canvas.width = width * dpr;
      canvas.height = height * dpr;
      canvas.style.width = width + 'px';
      canvas.style.height = height + 'px';
      ctx.scale(dpr, dpr);

      if (mouseX === 0 && mouseY === 0) {
        mouseX = width * 0.5;
        mouseY = height * 0.35;
        curMouseX = mouseX;
        curMouseY = mouseY;
      }
    }

    resize();
    window.addEventListener('resize', resize, { passive: true });

    // Track mouse coordinates with inertia
    window.addEventListener('pointermove', function (e) {
      const rect = canvas.getBoundingClientRect();
      mouseX = e.clientX - rect.left;
      mouseY = e.clientY - rect.top;
    }, { passive: true });

    // Floating chromatic nodes
    const nodes = [
      { x: 0.3, y: 0.25, r: 0.45, color: [238, 160, 70], alpha: 0.18, vx: 0.0006, vy: 0.0008, phase: 0 },
      { x: 0.7, y: 0.45, r: 0.5,  color: [180, 205, 235], alpha: 0.25, vx: -0.0007, vy: 0.0005, phase: 2.1 },
      { x: 0.5, y: 0.75, r: 0.4,  color: [245, 232, 218], alpha: 0.35, vx: 0.0005, vy: -0.0006, phase: 4.2 }
    ];

    let time = 0;
    function render() {
      time += 0.012;

      // Smooth mouse lerp
      curMouseX += (mouseX - curMouseX) * 0.045;
      curMouseY += (mouseY - curMouseY) * 0.045;

      // Base off-white studio background
      ctx.fillStyle = '#f8f8f7';
      ctx.fillRect(0, 0, width, height);

      // Render ambient chromatic orbs
      for (let i = 0; i < nodes.length; i++) {
        const n = nodes[i];
        const driftX = Math.sin(time * 0.8 + n.phase) * (width * 0.08);
        const driftY = Math.cos(time * 0.6 + n.phase) * (height * 0.08);

        // Interactive pointer deflection
        const mouseInfluenceX = (curMouseX - width * 0.5) * 0.12 * (i === 0 ? 1.5 : 0.8);
        const mouseInfluenceY = (curMouseY - height * 0.35) * 0.12 * (i === 0 ? 1.5 : 0.8);

        const cx = n.x * width + driftX + mouseInfluenceX;
        const cy = n.y * height + driftY + mouseInfluenceY;
        const radius = Math.max(width, height) * n.r;

        const grad = ctx.createRadialGradient(cx, cy, 0, cx, cy, radius);
        const [r, g, b] = n.color;
        grad.addColorStop(0, `rgba(${r}, ${g}, ${b}, ${n.alpha})`);
        grad.addColorStop(0.5, `rgba(${r}, ${g}, ${b}, ${n.alpha * 0.5})`);
        grad.addColorStop(1, `rgba(${r}, ${g}, ${b}, 0)`);

        ctx.fillStyle = grad;
        ctx.beginPath();
        ctx.arc(cx, cy, radius, 0, Math.PI * 2);
        ctx.fill();
      }

      requestAnimationFrame(render);
    }

    render();
  }

  // 2. 3D CARD INTERACTIVE TILT PHYSICS & DYNAMIC SPECULAR GLARE
  function initCardHaptics() {
    const cards = document.querySelectorAll('.skill-card, .card-pin');

    cards.forEach(function (card) {
      card.addEventListener('pointermove', function (e) {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        // Set CSS custom properties for dynamic specular glare
        card.style.setProperty('--glare-x', x + 'px');
        card.style.setProperty('--glare-y', y + 'px');
        card.style.setProperty('--glare-opacity', '1');

        // Tilt angles (bounded between -7 and +7 degrees)
        const dx = (x - rect.width / 2) / (rect.width / 2);
        const dy = (y - rect.height / 2) / (rect.height / 2);
        const rotX = -dy * 5.5;
        const rotY = dx * 5.5;

        card.style.transform = `perspective(1000px) rotateX(${rotX.toFixed(2)}deg) rotateY(${rotY.toFixed(2)}deg) translateZ(6px)`;
      });

      card.addEventListener('pointerleave', function () {
        card.style.setProperty('--glare-opacity', '0');
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
      });
    });
  }

  // 3. MAGNETIC PILL NAVIGATION HAPTICS
  function initMagneticButtons() {
    const btns = document.querySelectorAll('.menu-btn');

    btns.forEach(function (btn) {
      btn.addEventListener('mousemove', function (e) {
        const rect = btn.getBoundingClientRect();
        const relX = e.clientX - rect.left - rect.width / 2;
        const relY = e.clientY - rect.top - rect.height / 2;
        btn.style.transform = `translate(${relX * 0.22}px, ${relY * 0.22}px)`;
      });

      btn.addEventListener('mouseleave', function () {
        btn.style.transform = 'translate(0px, 0px)';
      });
    });
  }

  // Initialize on DOM load
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initAmbientCanvas();
      initCardHaptics();
      initMagneticButtons();
    });
  } else {
    initAmbientCanvas();
    initCardHaptics();
    initMagneticButtons();
  }
})();

