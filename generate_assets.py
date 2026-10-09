import os

img_dir = "d:/nikolaradeski-reconstruction/wp-content/themes/portfolio-child/assets/images"
os.makedirs(img_dir, exist_ok=True)

# 1. Hero Portrait Replacement (1200 x 1600)
hero_portrait_svg = """<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="1600" viewBox="0 0 1200 1600">
  <defs>
    <linearGradient id="bgGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#1c1d1f"/>
      <stop offset="50%" stop-color="#2a2c30"/>
      <stop offset="100%" stop-color="#121315"/>
    </linearGradient>
    <linearGradient id="accentGrad" x1="0" y1="1" x2="1" y2="0">
      <stop offset="0%" stop-color="#e27500"/>
      <stop offset="100%" stop-color="#ff9933"/>
    </linearGradient>
    <radialGradient id="spot" cx="50%" cy="35%" r="45%">
      <stop offset="0%" stop-color="#3d4047"/>
      <stop offset="100%" stop-color="#121315" stop-opacity="0"/>
    </radialGradient>
  </defs>
  <rect width="1200" height="1600" fill="url(#bgGrad)"/>
  <circle cx="600" cy="560" r="480" fill="url(#spot)"/>
  
  <!-- Stylized Editorial Portrait Silhouette -->
  <g fill="#2e3138" stroke="#3e434d" stroke-width="2">
    <!-- Body / Shoulders -->
    <path d="M 320 1600 C 320 1200, 420 1020, 600 1020 C 780 1020, 880 1200, 880 1600 Z"/>
    <!-- Head -->
    <ellipse cx="600" cy="720" rx="200" ry="260" fill="#353941"/>
    <!-- Hair / Accent Silhouette -->
    <path d="M 400 680 C 420 480, 520 420, 600 420 C 680 420, 780 480, 800 680 C 740 600, 660 560, 600 560 C 540 560, 460 600, 400 680 Z" fill="#202227"/>
  </g>
  
  <!-- Subtle Badge -->
  <rect x="420" y="1380" width="360" height="70" rx="35" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.12)" stroke-width="2"/>
  <text x="600" y="1424" fill="#ffffff" font-family="'General Sans', sans-serif" font-size="24" font-weight="600" text-anchor="middle" letter-spacing="2">CREATIVE LEADER</text>
  
  <!-- Monogram Watermark -->
  <text x="600" y="800" fill="rgba(255,255,255,0.04)" font-family="'Clash Display', sans-serif" font-size="340" font-weight="700" text-anchor="middle">PR</text>
  
  <text x="600" y="1530" fill="#8e8e8e" font-family="'General Sans', sans-serif" font-size="20" text-anchor="middle" letter-spacing="1">13+ YEARS DESIGN EXPERIENCE</text>
</svg>"""

with open(os.path.join(img_dir, "hero-portrait.svg"), "w", encoding="utf-8") as f:
    f.write(hero_portrait_svg)

# 2. Hero Card Video Poster / Back (1200 x 1600)
hero_back_svg = """<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="1600" viewBox="0 0 1200 1600">
  <defs>
    <linearGradient id="backGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#0f0f10"/>
      <stop offset="50%" stop-color="#18181b"/>
      <stop offset="100%" stop-color="#000000"/>
    </linearGradient>
    <radialGradient id="glow" cx="50%" cy="50%" r="50%">
      <stop offset="0%" stop-color="#e27500" stop-opacity="0.25"/>
      <stop offset="100%" stop-color="#e27500" stop-opacity="0"/>
    </radialGradient>
  </defs>
  <rect width="1200" height="1600" fill="url(#backGrad)"/>
  <circle cx="600" cy="800" r="500" fill="url(#glow)"/>
  
  <!-- Play Symbol & Motion Design Aesthetic -->
  <circle cx="600" cy="800" r="100" fill="none" stroke="#e27500" stroke-width="4"/>
  <polygon points="580,750 645,800 580,850" fill="#ffffff"/>
  
  <text x="600" y="980" fill="#ffffff" font-family="'Clash Display', sans-serif" font-size="44" font-weight="600" text-anchor="middle" letter-spacing="1">SHOWREEL 2026</text>
  <text x="600" y="1030" fill="#8e8e8e" font-family="'General Sans', sans-serif" font-size="22" text-anchor="middle">Art Direction • Motion • Systems</text>
</svg>"""

with open(os.path.join(img_dir, "hero-reel-poster.svg"), "w", encoding="utf-8") as f:
    f.write(hero_back_svg)

# 3. Portfolio Work 1 (AOJ Web - 1282 x 962)
work_1_svg = """<svg xmlns="http://www.w3.org/2000/svg" width="1282" height="962" viewBox="0 0 1282 962">
  <defs>
    <linearGradient id="w1g" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#f0f1f4"/>
      <stop offset="100%" stop-color="#e3e5eb"/>
    </linearGradient>
  </defs>
  <rect width="1282" height="962" fill="url(#w1g)"/>
  <g transform="translate(141, 131)">
    <!-- Browser Mockup Window -->
    <rect width="1000" height="700" rx="16" fill="#ffffff" filter="drop-shadow(0 20px 40px rgba(0,0,0,0.08))"/>
    <rect width="1000" height="48" rx="16" fill="#f8f9fa"/>
    <circle cx="30" cy="24" r="6" fill="#ff5f56"/>
    <circle cx="50" cy="24" r="6" fill="#ffbd2e"/>
    <circle cx="70" cy="24" r="6" fill="#27c93f"/>
    <rect x="110" y="12" width="780" height="24" rx="12" fill="#eeeeee"/>
    <!-- Mockup content -->
    <rect x="60" y="90" width="380" height="42" rx="6" fill="#141617"/>
    <rect x="60" y="150" width="280" height="20" rx="4" fill="#a5a5a5"/>
    <rect x="60" y="200" width="150" height="46" rx="23" fill="#e27500"/>
    <rect x="520" y="90" width="420" height="520" rx="12" fill="#e9ecef"/>
  </g>
  <text x="641" y="900" fill="#71717a" font-family="'General Sans', sans-serif" font-size="24" font-weight="600" text-anchor="middle">AOJ Web Experience • Architecture Platform</text>
</svg>"""

with open(os.path.join(img_dir, "work-1.svg"), "w", encoding="utf-8") as f:
    f.write(work_1_svg)

# 4. Portfolio Work 2 (1148 x 904)
work_2_svg = """<svg xmlns="http://www.w3.org/2000/svg" width="1148" height="904" viewBox="0 0 1148 904">
  <defs>
    <linearGradient id="w2g" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#141617"/>
      <stop offset="100%" stop-color="#24282e"/>
    </linearGradient>
  </defs>
  <rect width="1148" height="904" fill="url(#w2g)"/>
  <g transform="translate(124, 102)">
    <rect width="900" height="700" rx="18" fill="#1e2126" stroke="#333842" stroke-width="2"/>
    <rect x="60" y="60" width="340" height="38" rx="8" fill="#ffffff"/>
    <rect x="60" y="120" width="220" height="18" rx="4" fill="#8e8e8e"/>
    <rect x="60" y="180" width="380" height="200" rx="12" fill="#2d60ce" fill-opacity="0.2" stroke="#2d60ce" stroke-width="2"/>
    <rect x="480" y="180" width="360" height="200" rx="12" fill="#00512f" fill-opacity="0.2" stroke="#00512f" stroke-width="2"/>
    <rect x="60" y="420" width="780" height="220" rx="12" fill="#282c34"/>
  </g>
  <text x="574" y="860" fill="#a1a1aa" font-family="'General Sans', sans-serif" font-size="22" font-weight="500" text-anchor="middle">Prathish Raj Digital System &amp; Product Interface</text>
</svg>"""

with open(os.path.join(img_dir, "work-2.svg"), "w", encoding="utf-8") as f:
    f.write(work_2_svg)

# 5. Portfolio Work 3 (1909 x 1079)
work_3_svg = """<svg xmlns="http://www.w3.org/2000/svg" width="1909" height="1079" viewBox="0 0 1909 1079">
  <defs>
    <linearGradient id="w3g" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#f8f9fa"/>
      <stop offset="100%" stop-color="#e9ecef"/>
    </linearGradient>
  </defs>
  <rect width="1909" height="1079" fill="url(#w3g)"/>
  <g transform="translate(254, 139)">
    <rect width="1400" height="800" rx="24" fill="#ffffff" filter="drop-shadow(0 25px 50px rgba(0,0,0,0.06))"/>
    <circle cx="200" cy="220" r="100" fill="#e27500" fill-opacity="0.15"/>
    <rect x="360" y="160" width="500" height="48" rx="8" fill="#141617"/>
    <rect x="360" y="230" width="340" height="24" rx="4" fill="#8e8e8e"/>
    <rect x="100" y="380" width="380" height="340" rx="16" fill="#f4f5f7"/>
    <rect x="510" y="380" width="380" height="340" rx="16" fill="#f4f5f7"/>
    <rect x="920" y="380" width="380" height="340" rx="16" fill="#f4f5f7"/>
  </g>
  <text x="954" y="1010" fill="#71717a" font-family="'General Sans', sans-serif" font-size="28" font-weight="600" text-anchor="middle">TryHackMe Brand Experience &amp; Interactive Campaign</text>
</svg>"""

with open(os.path.join(img_dir, "work-3.svg"), "w", encoding="utf-8") as f:
    f.write(work_3_svg)

# 6. Portfolio Work 4 (1568 x 914)
work_4_svg = """<svg xmlns="http://www.w3.org/2000/svg" width="1568" height="914" viewBox="0 0 1568 914">
  <defs>
    <linearGradient id="w4g" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#181a1d"/>
      <stop offset="100%" stop-color="#0f1012"/>
    </linearGradient>
  </defs>
  <rect width="1568" height="914" fill="url(#w4g)"/>
  <g transform="translate(184, 107)">
    <rect width="1200" height="700" rx="20" fill="#22252a" stroke="#373b42" stroke-width="2"/>
    <rect x="80" y="80" width="460" height="42" rx="8" fill="#ffffff"/>
    <rect x="80" y="150" width="320" height="20" rx="4" fill="#9ca3af"/>
    <rect x="80" y="240" width="1040" height="380" rx="16" fill="#131417"/>
  </g>
  <text x="784" y="870" fill="#9ca3af" font-family="'General Sans', sans-serif" font-size="26" font-weight="500" text-anchor="middle">Involve Design Systems &amp; Motion Prototype</text>
</svg>"""

with open(os.path.join(img_dir, "work-4.svg"), "w", encoding="utf-8") as f:
    f.write(work_4_svg)

# 7. Portfolio Banner Pattern
banner_bg_svg = """<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="400" viewBox="0 0 1200 400">
  <defs>
    <pattern id="gridPattern" width="40" height="40" patternUnits="userSpaceOnUse">
      <line x1="0" y1="0" x2="40" y2="0" stroke="rgba(0,0,0,0.03)" stroke-width="1"/>
      <line x1="0" y1="0" x2="0" y2="40" stroke="rgba(0,0,0,0.03)" stroke-width="1"/>
    </pattern>
  </defs>
  <rect width="1200" height="400" fill="#ffffff"/>
  <rect width="1200" height="400" fill="url(#gridPattern)"/>
</svg>"""

with open(os.path.join(img_dir, "portfolio-banner-bg.svg"), "w", encoding="utf-8") as f:
    f.write(banner_bg_svg)

print("Generated all 7 replacement media assets.")

