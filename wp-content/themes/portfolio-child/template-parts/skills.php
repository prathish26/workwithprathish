<?php
/**
 * Primary Reference Section: Skills (#skills)
 * 12 Cascading Stacked Capability Cards - Prathish Raj Design System
 */
if (!defined('ABSPATH')) exit;

$capabilities = array(
    array(
        'index'       => '1',
        'number'      => '01.',
        'dot'         => 'cyan',
        'category'    => 'Architecture & UI',
        'title'       => 'Web Architecture & Frontend Systems',
        'descriptor'  => 'High-Performance Platforms',
        'description' => 'Engineering pixel-perfect, ultra-fast web experiences with responsive layouts, modern frameworks, and SEO-first performance. Built from the ground up for speed, scalability, and high conversion.',
        'tools'       => array('WordPress', 'Next.js', 'Avada & Core', 'Elementor Pro', 'Webflow', 'TypeScript', 'Tailwind CSS', 'Vercel')
    ),
    array(
        'index'       => '2',
        'number'      => '02.',
        'dot'         => 'amber',
        'category'    => 'Product & UX',
        'title'       => 'UI/UX & Digital Product Design',
        'descriptor'  => 'User-Centric & Conversion-Led',
        'description' => 'Architecting end-to-end user journeys, wireframes, interactive prototypes, and design contracts. Grounding every interaction in behavioral analytics, usability testing, and business ROI.',
        'tools'       => array('Figma', 'FigJam', 'Prototyping', 'User Research', 'Journey Mapping', 'Design Contracts', 'Usability Audits')
    ),
    array(
        'index'       => '3',
        'number'      => '03.',
        'dot'         => 'cyan',
        'category'    => 'Systems & Tokens',
        'title'       => 'Scalable Design Systems & Tokens',
        'descriptor'  => 'Atomic Multi-Brand Infrastructure',
        'description' => 'Building unified, token-based design systems that bridge design and engineering. Standardizing typography scales, color ramps, component variants, and interactive states across multi-platform teams.',
        'tools'       => array('Design Tokens', 'Figma Variables', 'Storybook', 'Component Libraries', 'Atomic Design', 'WCAG 2.2 Accessibility')
    ),
    array(
        'index'       => '4',
        'number'      => '04.',
        'dot'         => 'emerald',
        'category'    => 'Cyber Defense',
        'title'       => 'Cybersecurity & Security Support',
        'descriptor'  => 'Zero-Trust Defense & 24/7 Security',
        'description' => 'Comprehensive vulnerability assessments, penetration testing, application hardening, and zero-trust perimeter defense. Shielding platforms against OWASP Top 10 exploits, DDoS, and security breaches with 24/7 proactive defense.',
        'tools'       => array('OWASP Hardening', 'Penetration Testing', 'Cloudflare Zero Trust', 'IAM & OAuth2', 'SSL/TLS & Headers', 'WAF Configuration', '24/7 Threat Support')
    ),
    array(
        'index'       => '5',
        'number'      => '05.',
        'dot'         => 'violet',
        'category'    => 'Voice AI & Telephony',
        'title'       => 'AI Voice Agents & Call Assistance',
        'descriptor'  => 'Seamless Real-Time Client Connection',
        'description' => 'Engineering autonomous enterprise voice agents and intelligent call assistants that connect clients seamlessly to businesses. Handling natural real-time calls, smart IVR qualification, appointment scheduling, and automated CRM routing.',
        'tools'       => array('Voice AI Agents', 'Telephony (Twilio / WebRTC)', 'Retell AI & Vapi', 'ElevenLabs Neural Voice', 'Gemini Live 3.8', 'Function Calling', 'CRM Webhooks')
    ),
    array(
        'index'       => '6',
        'number'      => '06.',
        'dot'         => 'amber',
        'category'    => 'Cloud & Infrastructure',
        'title'       => 'Legacy Modernization & Data Migration',
        'descriptor'  => 'Zero-Downtime Infrastructure Evolution',
        'description' => 'Refactoring aging monolithic legacy codebases into resilient, high-speed modern cloud architectures. Executing lossless, zero-downtime database and schema migrations with automated verification.',
        'tools'       => array('Legacy Refactoring', 'Monolith to Microservices', 'Database ETL Pipelines', 'Cloud Architecture (GCP / AWS)', 'Schema Mapping', 'Zero-Downtime Rollout')
    ),
    array(
        'index'       => '7',
        'number'      => '07.',
        'dot'         => 'violet',
        'category'    => 'Autonomous Operations',
        'title'       => 'Intelligent Automation & AI Agents',
        'descriptor'  => 'Autonomous Operations & Multi-Agents',
        'description' => 'Architecting end-to-end multi-agent orchestration and automated business logic. Connecting webhooks, transactional triggers, and internal tools so organizations scale 10x without repetitive human overhead.',
        'tools'       => array('Multi-Agent Orchestration', 'n8n & Make', 'LangChain', 'Custom Webhooks', 'Python Automation', 'Autonomous Chatbots', 'Enterprise APIs')
    ),
    array(
        'index'       => '8',
        'number'      => '08.',
        'dot'         => 'cyan',
        'category'    => 'Motion & WebGL',
        'title'       => 'Creative Development & 3D Motion',
        'descriptor'  => 'Award-Winning Interactive Experiences',
        'description' => 'Crafting bespoke web environments with fluid scroll physics, 3D card transformations, canvas particle systems, and award-winning motion design that captivate visitors and elevate brand perception.',
        'tools'       => array('GSAP & ScrollTrigger', 'Three.js / WebGL', 'HTML5 Canvas API', 'Lenis Smooth Scroll', 'Interactive Haptics', 'Micro-Interactions')
    ),
    array(
        'index'       => '9',
        'number'      => '09.',
        'dot'         => 'amber',
        'category'    => 'Brand & Strategy',
        'title'       => 'Brand Identity & Creative Direction',
        'descriptor'  => 'Distinctive Brand Positioning',
        'description' => 'Forging compelling visual identities, editorial typography, brand guidelines, and distinctive market positioning that differentiate modern ventures from generic competitors.',
        'tools'       => array('Brand Identity', 'Editorial Typography', 'Brand Guidelines', 'Art Direction', 'Vector Graphics', 'Asset Toolkits')
    ),
    array(
        'index'       => '10',
        'number'      => '10.',
        'dot'         => 'cyan',
        'category'    => 'Cinematic Media',
        'title'       => 'Video Direction & Motion Systems',
        'descriptor'  => 'Cinematic Storytelling & Explainers',
        'description' => 'Directing high-impact promotional films, product walkthroughs, and animated explainer systems. Combining cinematic pacing, sound design, and motion graphics to drive user engagement.',
        'tools'       => array('After Effects', 'Premiere Pro', 'Motion Graphics', 'Sound Engineering', 'Color Grading', '4K Upscaling', 'AI Motion Synthesis')
    ),
    array(
        'index'       => '11',
        'number'      => '11.',
        'dot'         => 'amber',
        'category'    => 'Growth & Data',
        'title'       => 'Growth Engineering & Performance Marketing',
        'descriptor'  => 'Data-Backed ROI & Conversion Rate Ops',
        'description' => 'Optimizing full-funnel acquisition, conversion rates (CRO), and multi-channel campaigns. Implementing advanced tracking analytics, A/B testing frameworks, and search engine domination strategies.',
        'tools'       => array('Google Analytics 4', 'Meta Ads', 'Google Ads', 'Technical SEO', 'Conversion Rate Optimization (CRO)', 'Funnel Analytics')
    ),
    array(
        'index'       => '12',
        'number'      => '12.',
        'dot'         => 'violet',
        'category'    => 'Applied Intelligence',
        'title'       => 'Applied AI Engineering & LLM Solutions',
        'descriptor'  => 'Frontier AI Engineering Since 2020',
        'description' => 'Pioneering hands-on artificial intelligence workflows and generative product integrations since 2020. Developing bespoke custom agent tools, prompt architectures, and intelligent copilots tailored to client domain needs.',
        'tools'       => array('Claude Systems', 'Claude Code', 'Gemini API', 'OpenAI Assistants', 'Vector DBs', 'RAG Architectures', 'Multimodal Prototyping')
    )
);
?>

<section class="section-skills" id="skills">
  <div class="skills-header">
    <span class="section-label">/ Capabilities &amp; Technical Systems</span>
    <h2 class="section-title">Core Systems &amp; <span class="accent-word">Specializations</span></h2>
    <p class="skills-subtitle">From enterprise cybersecurity and zero-downtime cloud migration to autonomous AI voice agents and bespoke design systems, building resilient, high-impact digital experiences for forward-thinking organizations.</p>
  </div>

  <div class="skills-deck-container">
    <?php foreach ($capabilities as $cap): ?>
      <div class="skill-card" data-card="<?php echo esc_attr($cap['index']); ?>">
        <div class="skill-card-descriptor"><?php echo esc_html($cap['descriptor']); ?></div>
        <h3 class="skill-card-title"><?php echo esc_html($cap['number'] . ' ' . $cap['title']); ?></h3>
        <p class="skill-card-description"><?php echo esc_html($cap['description']); ?></p>
        <div class="skill-tools-wrapper">
          <ul class="skill-tools-list">
            <?php foreach ($cap['tools'] as $tool): ?>
              <li class="tool-pill"><?php echo esc_html($tool); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="card-glare" aria-hidden="true"></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
