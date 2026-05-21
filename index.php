<?php
$basePath        = '';
$pageTitle       = 'Tech Evangelist Pvt. Ltd. — ISO 9001:2015 Certified IT System Integrator | techeva.in';
$pageDescription = 'Tech Evangelist Pvt. Ltd. is an ISO 9001:2015 certified IT System Integrator with 10+ years of experience delivering CCTV, IT infrastructure, smart classroom, printing, and system integration across India.';
include 'header.php';
?>

<!-- ===== HERO ===== -->
<section class="hero" id="home">
  <div class="hero-glow g1"></div>
  <div class="hero-glow g2"></div>
  <div class="container hero-container">
    <div class="hero-grid">

      <!-- LEFT: Content -->
      <div class="hero-content">
        <h1>Your Trusted <span class="highlight">IT System Integration</span> Partner</h1>
        <p class="lead">With <strong>10+ years of deep domain expertise</strong>, Tech Evangelist is India's trusted IT System Integrator — delivering enterprise-grade infrastructure, surveillance, smart education &amp; managed services to clients nationwide.<br><span class="lead-sub">Powered further by <a href="https://canexxa.com" target="_blank" rel="noopener" class="lead-link"><strong>Canexxa Solutions</strong></a> — our in-house software division — bringing custom applications &amp; digital products under one roof.</span></p>
        <div class="hero-ctas">
          <a href="#contact" class="btn btn-primary"><i class="ti ti-file-text"></i> Request a Quote</a>
          <a href="our-services" class="btn btn-secondary-dark"><i class="ti ti-layout-grid"></i> Our Services</a>
          <a href="#contact" class="btn btn-ghost-dark"><i class="ti ti-calendar"></i> Book a Demo</a>
        </div>
        <div class="hero-trust">
          <i class="ti ti-circle-check-filled"></i> T2 Partner with Cisco, Lenovo, HP &amp; more
        </div>
      </div>

      <!-- RIGHT: 3D Network Visual -->
      <div class="hero-right">
        <div class="net-visual">
          <!-- SVG connecting lines: Earth (center 200,200 r=75) to each satellite -->
          <svg class="net-svg" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <radialGradient id="lgrad1" cx="0%" cy="0%"><stop offset="0%" stop-color="#34d399" stop-opacity=".05"/><stop offset="100%" stop-color="#34d399" stop-opacity=".5"/></radialGradient>
              <radialGradient id="lgrad2" cx="100%" cy="0%"><stop offset="0%" stop-color="#34d399" stop-opacity=".05"/><stop offset="100%" stop-color="#34d399" stop-opacity=".5"/></radialGradient>
            </defs>
            <!-- lines earth-edge (r=85 from center 200,200) → satellite icon center -->
            <line class="nsvg-line" x1="200" y1="115" x2="200" y2="71"/>
            <line class="nsvg-line" x1="271" y1="153" x2="322" y2="118"/>
            <line class="nsvg-line" x1="274" y1="241" x2="322" y2="276"/>
            <line class="nsvg-line" x1="200" y1="285" x2="200" y2="343"/>
            <line class="nsvg-line" x1="124" y1="238" x2="70"  y2="276"/>
            <line class="nsvg-line" x1="127" y1="157" x2="70"  y2="118"/>
            <!-- signal dots travelling earth → satellite -->
            <circle class="sig-dot" r="3" fill="#2eb872"><animateMotion dur="3s" repeatCount="indefinite" path="M200,115 L200,71"/></circle>
            <circle class="sig-dot" r="3" fill="#1a3c6e"><animateMotion dur="3s" repeatCount="indefinite" begin="0.5s" path="M271,153 L322,118"/></circle>
            <circle class="sig-dot" r="3" fill="#2eb872"><animateMotion dur="3s" repeatCount="indefinite" begin="1s"   path="M274,241 L322,276"/></circle>
            <circle class="sig-dot" r="3" fill="#1a3c6e"><animateMotion dur="3s" repeatCount="indefinite" begin="1.5s" path="M200,285 L200,343"/></circle>
            <circle class="sig-dot" r="3" fill="#2eb872"><animateMotion dur="3s" repeatCount="indefinite" begin="2s"   path="M124,238 L70,276"/></circle>
            <circle class="sig-dot" r="3" fill="#1a3c6e"><animateMotion dur="3s" repeatCount="indefinite" begin="2.5s" path="M127,157 L70,118"/></circle>
          </svg>
          <!-- Earth Globe (Three.js WebGL) -->
          <canvas id="earthCanvas" class="earth-canvas-3d"></canvas>
          <!-- Service nodes -->
          <div class="net-node nn-1"><div class="nn-icon"><i class="ti ti-server"></i></div><div class="nn-lbl">Infrastructure</div></div>
          <div class="net-node nn-2"><div class="nn-icon"><i class="ti ti-shield-check"></i></div><div class="nn-lbl">Surveillance</div></div>
          <div class="net-node nn-3"><div class="nn-icon"><i class="ti ti-school"></i></div><div class="nn-lbl">Smart Class</div></div>
          <div class="net-node nn-4"><div class="nn-icon"><i class="ti ti-books"></i></div><div class="nn-lbl">E-Books</div></div>
          <div class="net-node nn-5"><div class="nn-icon"><i class="ti ti-printer"></i></div><div class="nn-lbl">Printing</div></div>
          <div class="net-node nn-6"><div class="nn-icon"><i class="ti ti-topology-ring"></i></div><div class="nn-lbl">IT Integration</div></div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Three.js WebGL Earth -->
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>
<script>
(function(){
  var canvas = document.getElementById('earthCanvas');
  if(!canvas || typeof THREE === 'undefined') return;

  var W = 200, H = 200;
  var renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
  renderer.setSize(W, H);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setClearColor(0x000000, 0);

  var scene = new THREE.Scene();
  var camera = new THREE.PerspectiveCamera(42, 1, 0.1, 100);
  camera.position.z = 3.5;

  var loader = new THREE.TextureLoader();
  var BASE = 'https://raw.githubusercontent.com/mrdoob/three.js/r160/examples/textures/planets/';

  /* Earth — green water + greenery tint */
  var earthMat = new THREE.MeshPhongMaterial({
    map:         loader.load(BASE + 'earth_atmos_2048.jpg'),
    color:       new THREE.Color(0.38, 1.0, 0.42), /* multiplies texture → turns ocean green, land vivid green */
    specularMap: loader.load(BASE + 'earth_specular_2048.jpg'),
    specular:    new THREE.Color(0x1a4a1a),
    shininess:   14,
    bumpMap:     loader.load(BASE + 'earth_normal_2048.jpg'),
    bumpScale:   0.05
  });
  var earth = new THREE.Mesh(new THREE.SphereGeometry(1, 64, 64), earthMat);
  scene.add(earth);

  /* Clouds */
  var cloudMat = new THREE.MeshPhongMaterial({
    map:         loader.load(BASE + 'earth_clouds_1024.png'),
    transparent: true, opacity: 0.38, depthWrite: false
  });
  var clouds = new THREE.Mesh(new THREE.SphereGeometry(1.022, 64, 64), cloudMat);
  scene.add(clouds);

  /* Atmospheric haze — green glow ring */
  var atmMat = new THREE.MeshPhongMaterial({
    color: 0x2eb872, transparent: true, opacity: 0.18,
    side: THREE.BackSide, depthWrite: false
  });
  scene.add(new THREE.Mesh(new THREE.SphereGeometry(1.18, 64, 64), atmMat));

  /* Inner atmosphere rim — green */
  var rimMat = new THREE.MeshPhongMaterial({
    color: 0x22c55e, transparent: true, opacity: 0.07,
    side: THREE.FrontSide, depthWrite: false
  });
  scene.add(new THREE.Mesh(new THREE.SphereGeometry(1.06, 64, 64), rimMat));

  /* Lights */
  var sun = new THREE.DirectionalLight(0xffffff, 1.4);
  sun.position.set(5, 3, 5);
  scene.add(sun);
  scene.add(new THREE.AmbientLight(0x0a2a12, 1.0));

  /* Stars */
  var sv = [];
  for(var i = 0; i < 1000; i++){
    var th = Math.random() * Math.PI * 2;
    var ph = Math.acos(Math.random() * 2 - 1);
    var r  = 9 + Math.random() * 4;
    sv.push(r*Math.sin(ph)*Math.cos(th), r*Math.sin(ph)*Math.sin(th), r*Math.cos(ph));
  }
  var sg = new THREE.BufferGeometry();
  sg.setAttribute('position', new THREE.Float32BufferAttribute(sv, 3));
  scene.add(new THREE.Points(sg, new THREE.PointsMaterial({ color: 0x1a3c6e, size: 0.03, transparent: true, opacity: 0.35 })));

  function animate(){
    requestAnimationFrame(animate);
    earth.rotation.y  += 0.0018;
    clouds.rotation.y += 0.0022;
    renderer.render(scene, camera);
  }
  animate();
})();
</script>

<!-- ===== TRUST BAR ===== -->
<div class="trust-bar" id="partners">
  <div class="container">
    <div class="trust-label">Authorized Technology Partner for:</div>
  </div>
  <div class="marquee-wrapper">
    <div class="marquee-track">
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/cisco.jpg"       alt="Cisco"      /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/hp.jpg"          alt="HP"         /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/lenovo.jpg"      alt="Lenovo"     /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/acer.jpg"        alt="Acer"       /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/dell.png"        alt="Dell"       /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/dlink.png"       alt="D-Link"     /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/microsoft.png"   alt="Microsoft"  /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/redhat.jpg"      alt="Red Hat"    /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/tplink.png"      alt="TP-Link"    /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/zebra.png"       alt="Zebra"      /></div>
      <div class="marquee-item"><img src="<?= $basePath ?>asset/partner/hashicorp.png"   alt="HashiCorp"  /></div>
      <!-- duplicate set for seamless infinite loop -->
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/cisco.jpg"       alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/hp.jpg"          alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/lenovo.jpg"      alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/acer.jpg"        alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/dell.png"        alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/dlink.png"       alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/microsoft.png"   alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/redhat.jpg"      alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/tplink.png"      alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/zebra.png"       alt="" /></div>
      <div class="marquee-item" aria-hidden="true"><img src="<?= $basePath ?>asset/partner/hashicorp.png"   alt="" /></div>
    </div>
  </div>
</div>

<!-- ===== ABOUT SNIPPET ===== -->
<section class="bg-white" id="who-we-are">
  <div class="container">
    <div class="about-grid">
      <div>
        <div class="section-head section-head--left">
          <div class="eyebrow">Who We Are</div>
          <h2>End-to-End Technology Integration for Modern Enterprises</h2>
        </div>
        <p>Tech Evangelist Pvt. Ltd. is a professionally managed ISO 9001:2015 certified IT System Integrator with 10+ years of experience. We design, deploy, and manage end-to-end technology infrastructure across Education, Enterprise, and Government sectors.</p>
        <p>From IP surveillance and structured cabling to interactive flat panels and managed AMC services, we deliver every layer of the technology stack with verified OEM partnerships and pan-India deployment capability.</p>
        <a href="#about" class="btn btn-secondary" style="margin-top:8px;">Learn More About Us <i class="ti ti-arrow-right"></i></a>
      </div>
      <div class="about-features">
        <div class="feature-card">
          <i class="ti ti-check"></i>
          <h4>Proven Expertise</h4>
          <p>10+ years of large-scale IT integration experience.</p>
        </div>
        <div class="feature-card">
          <i class="ti ti-certificate"></i>
          <h4>OEM Certified</h4>
          <p>Authorized T2 partner of 10+ leading global brands.</p>
        </div>
        <div class="feature-card">
          <i class="ti ti-refresh"></i>
          <h4>Lifecycle Services</h4>
          <p>From design and supply to AMC and managed support.</p>
        </div>
        <div class="feature-card">
          <i class="ti ti-map-pin"></i>
          <h4>Pan-India Reach</h4>
          <p>Nationwide deployment from metros to remote sites.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CORE SERVICES GRID ===== -->
<section id="services" class="bg-gray">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">What We Do</div>
      <h2>Our Technology Solutions</h2>
      <p>A complete portfolio of IT system integration services engineered for reliability, scale, and long-term ROI.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="ti ti-shield-check"></i></div>
        <h3>CCTV &amp; Surveillance</h3>
        <p>IP CCTV, NVR/DVR systems, video analytics, and access control for facility-wide security.</p>
        <a href="our-services#service-cctv" class="learn-more">Learn More <i class="ti ti-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="ti ti-server"></i></div>
        <h3>IT Infrastructure</h3>
        <p>Servers, storage, structured networking, and data center solutions built to enterprise standards.</p>
        <a href="our-services#service-infra" class="learn-more">Learn More <i class="ti ti-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="ti ti-school"></i></div>
        <h3>Smart Classroom</h3>
        <p>Interactive flat panels, LMS, ERP, language lab, and digital content for modern education.</p>
        <a href="our-services#service-smart" class="learn-more">Learn More <i class="ti ti-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="ti ti-printer"></i></div>
        <h3>Printing &amp; Barcode</h3>
        <p>Thermal &amp; barcode printers, labels, ribbons, and consumables from leading OEMs.</p>
        <a href="our-services#service-print" class="learn-more">Learn More <i class="ti ti-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="ti ti-topology-ring"></i></div>
        <h3>System Integration</h3>
        <p>Unified network, cloud, and enterprise deployment with comprehensive AMC coverage.</p>
        <a href="our-services#service-integration" class="learn-more">Learn More <i class="ti ti-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="ti ti-books"></i></div>
        <h3>Digital E-Books</h3>
        <p>70,000+ titles from 72 publishers with multi-device, copyright-compliant access.</p>
        <a href="our-services#service-ebooks" class="learn-more">Learn More <i class="ti ti-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ===== STATS BAR ===== -->
<div class="stats-bar">
  <div class="container">
    <div class="stat">
      <div class="num"><span class="counter" data-target="10">0</span><span>+</span></div>
      <div class="label">Years Experience</div>
    </div>
    <div class="stat">
      <div class="num"><span class="counter" data-target="120">0</span><span>+</span></div>
      <div class="label">Schools Deployed</div>
    </div>
    <div class="stat">
      <div class="num"><span class="counter" data-target="70000">0</span><span>+</span></div>
      <div class="label">E-Books Available</div>
    </div>
    <div class="stat">
      <div class="num"><span class="counter" data-target="10">0</span><span>+</span></div>
      <div class="label">OEM Partnerships</div>
    </div>
  </div>
</div>

<!-- ===== INDUSTRIES WE SERVE ===== -->
<section class="bg-white" id="sectors-we-serve">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Where We Deliver</div>
      <h2>Sectors We Serve</h2>
      <p>Vertical-specialized integration experience across India's most demanding industries.</p>
    </div>
    <div class="industries-row">
      <div class="industry-card"><i class="ti ti-school"></i><span>Education</span></div>
      <div class="industry-card"><i class="ti ti-building-skyscraper"></i><span>Enterprise</span></div>
      <div class="industry-card"><i class="ti ti-building-bank"></i><span>Government</span></div>
      <div class="industry-card"><i class="ti ti-shopping-bag"></i><span>Retail</span></div>
      <div class="industry-card"><i class="ti ti-heart-rate-monitor"></i><span>Healthcare</span></div>
      <div class="industry-card"><i class="ti ti-building-factory-2"></i><span>Manufacturing</span></div>
      <div class="industry-card"><i class="ti ti-bed"></i><span>Hospitality</span></div>
    </div>
  </div>
</section>

<!-- ===== CANEXXA SUBSIDIARY SPOTLIGHT ===== -->
<section class="bg-gray" id="subsidiary">
  <div class="container">
    <div class="canexxa-card">
      <div>
        <div class="label-pill"><i class="ti ti-code"></i> Subsidiary &middot; Software Division</div>
        <h2>Meet Our Software Division</h2>
        <div class="subname">Canexxa Solutions Private Limited</div>
        <p>While Tech Evangelist leads hardware and infrastructure integration, our software arm &mdash; Canexxa Solutions Pvt. Ltd. &mdash; delivers custom software development, SaaS products, enterprise applications, and digital transformation services. Together, we offer complete end-to-end technology solutions.</p>
        <div class="canexxa-pills">
          <span>Custom Software Development</span>
          <span>Enterprise SaaS</span>
          <span>Digital Transformation</span>
        </div>
        <a href="https://canexxa.com" class="btn btn-outline" target="_blank" rel="noopener">Explore Canexxa Solutions <i class="ti ti-arrow-right"></i></a>
      </div>
      <div class="canexxa-visual">
        <div class="ctitle">Canexxa Solutions</div>
        <a href="https://canexxa.com" target="_blank" rel="noopener"><img src="<?= $basePath ?>asset/canexxa-logo.png" alt="Canexxa Solutions" class="logo canexxa-logo-center"></a>
        <div class="ctag">Software &middot; SaaS &middot; Digital Transformation</div>
        <div class="badge-row">
          <span class="accent-text">SaaS</span>
          <span class="primary-text">Enterprise</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ABOUT US ===== -->
<section id="about" class="bg-gray">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">About Us</div>
      <h2>About Tech Evangelist Pvt. Ltd.</h2>
      <p>A professionally managed IT System Integrator on a mission to bridge India's technology gap.</p>
    </div>
    <div class="about-intro-grid">
      <div>
        <p style="font-size:var(--fs-md);">Founded with a mission to bridge the technology gap for Indian businesses and institutions, Tech Evangelist Pvt. Ltd. has grown over 10+ years to become one of India's trusted IT System Integrators.</p>
        <p style="margin-top:12px;">We specialize in infrastructure deployment, smart education ecosystems, enterprise security, and managed technology services &mdash; serving clients from tier-1 metros to remote locations.</p>
        <p style="margin-top:12px;">Our strength lies in deep OEM relationships, in-house technical talent, and a project management discipline that has powered 120+ school deployments, enterprise data centers, and pan-India surveillance rollouts.</p>
        <div style="display:flex;gap:12px;margin-top:24px;flex-wrap:wrap;">
          <a href="our-services" class="btn btn-secondary"><i class="ti ti-layout-grid"></i> Our Services</a>
          <a href="#contact" class="btn btn-outline"><i class="ti ti-phone"></i> Talk to Us</a>
        </div>
      </div>
      <div class="about-image">
        <div class="big-num"><span class="counter" data-target="10">0</span>+</div>
        <div class="divider"></div>
        <div class="label">Years of Excellence</div>
        <div class="sub">Trusted by enterprises, schools, and government bodies across India.</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== VISION & MISSION ===== -->
<section class="bg-white" id="vision">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Direction &amp; Purpose</div>
      <h2>Vision &amp; Mission</h2>
      <p>The principles that drive every decision, deployment, and partnership we undertake.</p>
    </div>

    <!-- Vision Banner -->
    <div class="vision-banner">
      <div class="vision-icon"><i class="ti ti-eye"></i></div>
      <div class="vision-label">Our Vision</div>
      <blockquote class="vision-statement">
        To be India's most trusted technology integration partner — empowering enterprises, schools, and institutions with reliable, scalable, and future-ready IT infrastructure.
      </blockquote>
    </div>

    <!-- Mission Points -->
    <div class="mission-block">
      <div class="mission-header">
        <i class="ti ti-target-arrow"></i> Our Mission
      </div>
      <div class="mission-grid">
        <div class="mission-point">
          <div class="mp-icon"><i class="ti ti-server-2"></i></div>
          <h4>Build Reliable Infrastructure</h4>
          <p>Deliver secure, scalable, and high-performance technology infrastructure engineered for enterprise-grade uptime and long-term ROI.</p>
        </div>
        <div class="mission-point">
          <div class="mp-icon"><i class="ti ti-school"></i></div>
          <h4>Transform Education</h4>
          <p>Empower schools and universities with next-generation digital learning ecosystems that measurably improve student outcomes at scale.</p>
        </div>
        <div class="mission-point">
          <div class="mp-icon"><i class="ti ti-handshake"></i></div>
          <h4>Build Lasting Partnerships</h4>
          <p>Maintain long-term OEM and client relationships rooted in transparency, trust, and consistent delivery performance.</p>
        </div>
        <div class="mission-point">
          <div class="mp-icon"><i class="ti ti-map-2"></i></div>
          <h4>Expand Pan-India Reach</h4>
          <p>Grow deployment capability across metros and tier-2/3 cities with dedicated AMC teams and on-ground engineering support.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== CORE STRENGTHS ===== -->
<section class="bg-gray" id="why-techeva">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Why TechEva</div>
      <h2>Our Core Strengths</h2>
      <p>What makes us a long-term technology partner rather than a one-time vendor.</p>
    </div>
    <div class="strengths-grid">
      <div class="strength-card"><div class="ic"><i class="ti ti-users"></i></div><h4>Experienced Technical Team</h4><p>Certified network, surveillance, and infrastructure engineers in-house.</p></div>
      <div class="strength-card"><div class="ic"><i class="ti ti-map-2"></i></div><h4>Nationwide Deployment</h4><p>Logistics &amp; engineering coverage across metros and tier-2/3 cities.</p></div>
      <div class="strength-card"><div class="ic"><i class="ti ti-certificate"></i></div><h4>OEM-Certified Partnerships</h4><p>Authorized T2 partner of Cisco, Lenovo, HP, D-Link, Bosch &amp; more.</p></div>
      <div class="strength-card"><div class="ic"><i class="ti ti-clipboard-list"></i></div><h4>Strong Project Management</h4><p>PMO-driven execution with documented SOPs and SLA tracking.</p></div>
      <div class="strength-card"><div class="ic"><i class="ti ti-tool"></i></div><h4>Comprehensive AMC Support</h4><p>Onsite, remote, and preventive maintenance backed by spare inventory.</p></div>
      <div class="strength-card"><div class="ic"><i class="ti ti-building"></i></div><h4>Large-Scale Implementation</h4><p>Proven across 120+ schools and multi-site enterprise rollouts.</p></div>
    </div>
  </div>
</section>

<!-- ===== CERTIFICATIONS & PARTNERS ===== -->
<section class="bg-white" id="certifications">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Credentials</div>
      <h2>Certifications &amp; Partnerships</h2>
    </div>
    <div class="cert-grid">
      <div class="cert-iso">
        <div class="seal"><i class="ti ti-rosette-discount-check"></i></div>
        <h4>ISO 9001:2015</h4>
        <p>Certified Quality Management System</p>
      </div>
      <div class="partner-block">
        <h4>Authorized T2 OEM Partnerships</h4>
        <p>Direct OEM partnerships ensure genuine products, factory warranty, and authorized technical support across our complete portfolio.</p>
        <div class="trust-logos" style="margin-top:8px;">
          <span class="brand-pill cisco">CISCO</span>
          <span class="brand-pill lenovo">Lenovo</span>
          <span class="brand-pill hp">HP</span>
          <span class="brand-pill dlink">D-Link</span>
          <span class="brand-pill bosch">BOSCH</span>
          <span class="brand-pill brother">brother</span>
          <span class="brand-pill xerox">Xerox</span>
          <span class="brand-pill ricoh">RICOH</span>
        </div>
      </div>
    </div>
    <div style="margin-top:40px;">
      <div class="subsidiary-box">
        <img src="<?= $basePath ?>asset/canexxa-logo.png" alt="Canexxa Solutions" class="icon-wrap">
        <div class="info">
          <h3>Canexxa Solutions Private Limited</h3>
          <div class="role">Software &amp; Digital Solutions Arm of Tech Evangelist Group</div>
          <p>Custom Application Development &middot; Enterprise Software &middot; SaaS Products &middot; Mobile Applications &middot; Business Process Automation.</p>
        </div>
        <div>
          <a href="https://canexxa.com" class="btn btn-primary" target="_blank" rel="noopener">Know More <i class="ti ti-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== PROJECTS / CASE STUDIES ===== -->
<section id="projects" class="bg-white">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Case Studies</div>
      <h2>Our Proven Project Experience</h2>
      <p>From school deployments to enterprise data centers &mdash; delivering results that matter.</p>
    </div>

    <div class="case-grid">
      <div class="case-card">
        <div class="case-header orange">
          <div class="icons">
            <i class="ti ti-school"></i>
            <i class="ti ti-database"></i>
            <i class="ti ti-chart-bar"></i>
          </div>
        </div>
        <div class="case-body">
          <div class="case-tags">
            <span class="case-tag">Education</span>
            <span class="case-tag">Scale: 120 Schools</span>
          </div>
          <h3>LMS &amp; ERP School Deployment</h3>
          <div class="case-row"><div class="label">Problem</div><div class="val">Educational institutions lacked centralized digital learning management.</div></div>
          <div class="case-row"><div class="label">Solution</div><div class="val">Deployed integrated LMS and ERP across 120 schools with onsite teacher training.</div></div>
          <div class="case-row"><div class="label">Outcome</div><div class="val">Centralized administration, improved learning outcomes, paperless management.</div></div>
        </div>
      </div>

      <div class="case-card">
        <div class="case-header">
          <div class="icons">
            <i class="ti ti-server"></i>
            <i class="ti ti-network"></i>
            <i class="ti ti-shield-check"></i>
          </div>
        </div>
        <div class="case-body">
          <div class="case-tags">
            <span class="case-tag">Enterprise</span>
            <span class="case-tag">Sector: Corporate</span>
          </div>
          <h3>Enterprise IT Infrastructure</h3>
          <div class="case-row"><div class="label">Problem</div><div class="val">Outdated infrastructure causing downtime and scalability bottlenecks.</div></div>
          <div class="case-row"><div class="label">Solution</div><div class="val">End-to-end server, storage, networking and WiFi deployment with managed AMC.</div></div>
          <div class="case-row"><div class="label">Outcome</div><div class="val">99.9% uptime, scalable infrastructure, reduced IT operating overhead.</div></div>
        </div>
      </div>

      <div class="case-card">
        <div class="case-header teal">
          <div class="icons">
            <i class="ti ti-device-tv"></i>
            <i class="ti ti-books"></i>
            <i class="ti ti-users"></i>
          </div>
        </div>
        <div class="case-body">
          <div class="case-tags">
            <span class="case-tag">Smart Education</span>
            <span class="case-tag">Scale: Multi-school</span>
          </div>
          <h3>Smart Classroom Ecosystem</h3>
          <div class="case-row"><div class="label">Problem</div><div class="val">Traditional classrooms with no digital engagement tools or interactivity.</div></div>
          <div class="case-row"><div class="label">Solution</div><div class="val">Interactive panels, digital content library, LMS, and teacher productivity tools.</div></div>
          <div class="case-row"><div class="label">Outcome</div><div class="val">Increased student engagement, structured digital curriculum delivery.</div></div>
        </div>
      </div>
    </div>

    <div class="case-stats-bar">
      <div class="stat"><div class="num"><span class="counter" data-target="120">0</span>+</div><div class="label">Schools Deployed</div></div>
          <div class="stat"><div class="num"><span class="counter" data-target="10">0</span>+</div><div class="label">Years Experience</div></div>
      <div class="stat"><div class="num"><span class="counter" data-target="10">0</span>+</div><div class="label">OEM Brands</div></div>
      <div class="stat"><div class="num">Pan-India</div><div class="label">Reach</div></div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact" class="bg-white">
  <div class="container">
    <div class="section-head">
      <div class="eyebrow">Get In Touch</div>
      <h2>Let's Build Your Technology Roadmap</h2>
      <p>Reach out for a free consultation, RFP response, or AMC quote &mdash; our team responds within one business day.</p>
    </div>

    <div class="contact-grid">
      <div>
        <div class="contact-info-card">
          <div class="ic"><i class="ti ti-building"></i></div>
          <div>
            <h4>Office Address</h4>
            <p>Tech Evangelist Pvt. Ltd.<br>Office No.1, Tara Niwas, Vishnu Nagar,<br>Naupada, Thane West — 400602</p>
          </div>
        </div>
        <div class="contact-info-card">
          <div class="ic"><i class="ti ti-phone"></i></div>
          <div>
            <h4>Phone</h4>
            <a href="tel:+912241315610">+91-22-4131-5610</a>
          </div>
        </div>
        <div class="contact-info-card">
          <div class="ic"><i class="ti ti-mail"></i></div>
          <div>
            <h4>Email</h4>
            <a href="mailto:support@techeva.in">support@techeva.in</a>
          </div>
        </div>
        <div class="contact-info-card">
          <div class="ic"><i class="ti ti-world"></i></div>
          <div>
            <h4>Website</h4>
            <a href="https://www.techeva.in" target="_blank" rel="noopener">www.techeva.in</a>
          </div>
        </div>
        <div class="contact-info-card">
          <div class="ic"><i class="ti ti-clock"></i></div>
          <div>
            <h4>Business Hours</h4>
            <p>Mon &ndash; Sat &nbsp;|&nbsp; 9:30 AM &ndash; 6:30 PM IST</p>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <h3>Send Us an Inquiry</h3>
        <p class="sub">Tell us about your project requirements &mdash; we'll get back to you with a tailored proposal.</p>
        <form id="inquiryForm" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label>Full Name <span class="req">*</span></label>
              <input type="text" name="name" placeholder="Your full name" required>
              <span class="err">Please enter your name.</span>
            </div>
            <div class="form-group">
              <label>Company Name <span class="req">*</span></label>
              <input type="text" name="company" placeholder="Organization name" required>
              <span class="err">Please enter your company name.</span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Phone <span class="req">*</span></label>
              <input type="tel" name="phone" placeholder="+91-xxxxxxxxxx" required>
              <span class="err">Please enter a valid phone number.</span>
            </div>
            <div class="form-group">
              <label>Email <span class="req">*</span></label>
              <input type="email" name="email" placeholder="you@company.com" required>
              <span class="err">Please enter a valid email address.</span>
            </div>
          </div>
          <div class="form-group full">
            <label>Service Interest</label>
            <select name="service">
              <option value="">Select a service</option>
              <option>CCTV &amp; Surveillance</option>
              <option>IT Infrastructure</option>
              <option>Smart Classroom Solutions</option>
              <option>Digital Content &amp; E-Books</option>
              <option>Printing &amp; Barcode Solutions</option>
              <option>System Integration</option>
            </select>
          </div>
          <div class="form-group full">
            <label>Message</label>
            <textarea name="message" rows="4" placeholder="Briefly describe your requirement..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="margin-top:20px;width:100%;justify-content:center;">
            Send Inquiry <i class="ti ti-send"></i>
          </button>
          <div class="form-note">
            <i class="ti ti-circle-check-filled"></i>
            Our team will respond within 1 business day.
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
