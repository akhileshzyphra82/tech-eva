<?php
$basePath       = '';
$pageTitle       = 'Our Services — Complete IT Solutions Portfolio | Tech Evangelist Pvt. Ltd.';
$pageDescription = 'Explore six core IT service lines by Tech Evangelist: CCTV & Surveillance, IT Infrastructure, Smart Classroom, Digital E-Books, Printing & Barcode, and System Integration — delivered with OEM-grade quality.';
include 'header.php';
?>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?= $basePath ?>index">Home</a>
      <i class="ti ti-chevron-right"></i>
      <span>Our Services</span>
    </div>
    <div class="eyebrow">Our Services</div>
    <h1>Complete IT Solutions Portfolio</h1>
    <p class="lead">Six core service lines delivered with OEM-grade quality and lifecycle support.</p>
    <div class="page-hero-ctas">

      <a href="#service-infra" class="btn btn-secondary"><i class="ti ti-server"></i> IT Infrastructure</a>
      <a href="#service-smart" class="btn btn-secondary"><i class="ti ti-school"></i> Smart Classroom</a>
            <a href="#service-cctv" class="btn btn-primary"><i class="ti ti-shield-check"></i> CCTV &amp; Surveillance</a>
      <a href="<?= $basePath ?>index#contact" class="btn btn-ghost"><i class="ti ti-file-text"></i> Request a Quote</a>
    </div>
  </div>
</section>

<!-- ===== SERVICE DETAIL BLOCKS ===== -->
<section class="bg-gray services-page-body">
  <div class="container">

    <!-- Service 1: CCTV -->
    <div class="service-block" id="service-cctv">
      <div class="head-row">
        <div class="badge blue"><i class="ti ti-shield-check"></i></div>
        <h2>CCTV &amp; Surveillance Solutions</h2>
        <span class="tag">Service 01</span>
      </div>
      <div class="body-grid">
        <div>
          <p>Modern surveillance demands more than cameras. We design end-to-end IP CCTV ecosystems combining high-resolution imaging, intelligent video analytics, network-level redundancy, and centralized command for facilities of any scale.</p>
          <p>From perimeter security in industrial campuses to multi-site retail monitoring and access-controlled enterprise buildings, our surveillance deployments are engineered for 24x7 reliability and forensic-grade evidence integrity.</p>
          <div class="brand-row">
            <span class="label">Brand Partners:</span>
            <span class="brand-pill bosch">BOSCH</span>
            <span class="brand-pill dlink">D-Link</span>
            <span class="brand-pill" style="color:#dc1f26;border-color:#dc1f26;">HIKVISION</span>
          </div>
          <a href="<?= $basePath ?>index#contact" class="btn btn-primary" style="margin-top:20px;">Request a Quote for CCTV <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="solutions-list">
          <h4><i class="ti ti-list-check"></i> Solutions Include</h4>
          <ul>
            <li>IP CCTV Cameras (Indoor / Outdoor / PTZ)</li>
            <li>Video Surveillance &amp; Recording (NVR / DVR)</li>
            <li>Access Control &amp; Intrusion Detection</li>
            <li>Video Analytics (AI-based)</li>
            <li>Centralized Command &amp; Monitoring</li>
            <li>Structured Cabling &amp; PoE Switching</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Service 2: IT Infrastructure -->
    <div class="service-block gray-bg" id="service-infra">
      <div class="head-row">
        <div class="badge teal"><i class="ti ti-server"></i></div>
        <h2>IT Infrastructure</h2>
        <span class="tag">Service 02</span>
      </div>
      <div class="body-grid">
        <div>
          <p>Build the digital backbone your business depends on. We deliver fully integrated IT infrastructure &mdash; from endpoint devices to enterprise data centers &mdash; engineered for high uptime, performance, and scalable growth.</p>
          <p>Our engineers handle structured cabling, PoE switching, wireless AP design, server virtualization, backup, and disaster-recovery readiness, ensuring every layer is configured to OEM and ISO standards.</p>
          <div class="brand-row">
            <span class="label">Brand Partners:</span>
            <span class="brand-pill lenovo">Lenovo</span>
            <span class="brand-pill hp">HP</span>
            <span class="brand-pill cisco">CISCO</span>
            <span class="brand-pill dlink">D-Link</span>
          </div>
          <a href="<?= $basePath ?>index#contact" class="btn btn-primary" style="margin-top:20px;">Request a Quote for Infrastructure <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="solutions-list">
          <h4><i class="ti ti-list-check"></i> Solutions Include</h4>
          <ul>
            <li>Laptops, Desktops &amp; Workstations</li>
            <li>Servers, Storage &amp; Virtualization</li>
            <li>Data Center Solutions</li>
            <li>Interactive Displays &amp; Kiosks</li>
            <li>Enterprise Computing &amp; Backup</li>
            <li>WiFi APs, Switching &amp; Routing</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Service 3: Smart Classroom -->
    <div class="service-block" id="service-smart">
      <div class="head-row">
        <div class="badge orange"><i class="ti ti-school"></i></div>
        <h2>Smart Classroom Solutions</h2>
        <span class="tag">Service 03</span>
      </div>
      <div class="body-grid">
        <div>
          <span class="highlight-tag"><i class="ti ti-trophy"></i> Deployed across 120+ schools</span>
          <p>Transform every classroom into a connected, engaging, and outcome-driven learning environment. Our integrated smart-education stack combines Interactive Flat Panels (IFP), LMS &amp; ERP integration, digital content, and language lab solutions &mdash; all backed by teacher training.</p>
          <p>From CBSE/ICSE schools to large university campuses, we deliver future-ready ed-tech ecosystems that improve learning outcomes and simplify administration.</p>
          <a href="<?= $basePath ?>index#contact" class="btn btn-primary" style="margin-top:8px;">Request a Quote for Smart Education <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="solutions-list">
          <h4><i class="ti ti-list-check"></i> Solutions Include</h4>
          <ul>
            <li>Interactive Flat Panels (IFP)</li>
            <li>Digital Smart Classrooms</li>
            <li>LMS Integration &amp; Training</li>
            <li>ERP Systems for Schools</li>
            <li>Language Lab Solutions</li>
            <li>Digital Assessment Tools</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Service 4: Digital E-Books -->
    <div class="service-block gray-bg" id="service-ebooks">
      <div class="head-row">
        <div class="badge purple"><i class="ti ti-books"></i></div>
        <h2>Digital Content &amp; E-Books</h2>
        <span class="tag">Service 04</span>
      </div>
      <div class="body-grid">
        <div>
          <span class="highlight-tag" style="background:#f3eafd;color:var(--color-purple);"><i class="ti ti-library"></i> 70,000+ titles &middot; 72 publishers</span>
          <p>India's most comprehensive school and library digital reading ecosystem. Our curated digital library brings together 70,000+ titles from 72 leading Indian publishers, all licensed for copyright-compliant institutional use.</p>
          <p>Students and educators access content across web, tablet, and mobile, while administrators manage usage, licensing, and analytics through a unified dashboard.</p>
          <a href="<?= $basePath ?>index#contact" class="btn btn-primary" style="margin-top:8px;">Request a Quote for E-Books <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="solutions-list">
          <h4><i class="ti ti-list-check"></i> Solutions Include</h4>
          <ul>
            <li>70,000+ Digital E-Books Library</li>
            <li>72 Leading Indian Publishers</li>
            <li>Copyright-Compliant Content</li>
            <li>Multi-Device Access (Web/Mobile)</li>
            <li>Digital Learning Ecosystem</li>
            <li>Usage Analytics &amp; Reporting</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Service 5: Printing -->
    <div class="service-block" id="service-print">
      <div class="head-row">
        <div class="badge green"><i class="ti ti-printer"></i></div>
        <h2>Printing &amp; Barcode Solutions</h2>
        <span class="tag">Service 05</span>
      </div>
      <div class="body-grid">
        <div>
          <p>Reliable printing, labeling, and identification technology for retail, manufacturing, logistics, healthcare, and enterprise workflows. We supply, install, and service the full range of barcode, thermal, and laser printing infrastructure.</p>
          <p>Complete consumables fulfillment &mdash; toners, ribbons, labels, and spare parts &mdash; ensures uninterrupted operations across every shift.</p>
          <div class="brand-row">
            <span class="label">Brand Partners:</span>
            <span class="brand-pill hp">HP</span>
            <span class="brand-pill brother">brother</span>
            <span class="brand-pill xerox">Xerox</span>
            <span class="brand-pill lexmark">Lexmark</span>
            <span class="brand-pill ricoh">RICOH</span>
            <span class="brand-pill samsung">SAMSUNG</span>
          </div>
          <a href="<?= $basePath ?>index#contact" class="btn btn-primary" style="margin-top:20px;">Request a Quote for Printing <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="solutions-list">
          <h4><i class="ti ti-list-check"></i> Solutions Include</h4>
          <ul>
            <li>Thermal Printers (Desktop / Industrial)</li>
            <li>Barcode Printers &amp; Scanners</li>
            <li>Labels, Stickers &amp; P-Touch Labels</li>
            <li>Toners &amp; Inkjet Cartridges</li>
            <li>Dot Matrix Ribbons</li>
            <li>Line Matrix Ribbons</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Service 6: System Integration -->
    <div class="service-block gray-bg" id="service-integration">
      <div class="head-row">
        <div class="badge coral"><i class="ti ti-topology-ring"></i></div>
        <h2>System Integration</h2>
        <span class="tag">Service 06</span>
      </div>
      <div class="body-grid">
        <div>
          <p>The discipline of bringing every technology layer together &mdash; networks, surveillance, cloud, endpoints, and applications &mdash; under a single, well-managed deployment. Our system integration practice is the connective tissue across every Tech Evangelist project.</p>
          <p>We handle design, supply, installation, configuration, commissioning, and ongoing AMC &mdash; single accountability for the entire technology lifecycle.</p>
          <a href="<?= $basePath ?>index#contact" class="btn btn-primary" style="margin-top:8px;">Request a Quote for Integration <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="solutions-list">
          <h4><i class="ti ti-list-check"></i> Solutions Include</h4>
          <ul>
            <li>IT Infrastructure Integration</li>
            <li>Network Integration &amp; Optimization</li>
            <li>Surveillance Integration</li>
            <li>Cloud Connectivity &amp; Hybrid Setup</li>
            <li>Centralized Management Platforms</li>
            <li>Enterprise Deployment &amp; AMC</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="cta-banner">
  <div class="container">
    <h2>Ready to Transform Your Technology?</h2>
    <p>Talk to our solutions team — we'll design the right stack for your requirements and budget.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;margin-top:8px;">
      <a href="<?= $basePath ?>index#contact" class="btn btn-white"><i class="ti ti-file-text"></i> Request a Quote</a>
      <a href="<?= $basePath ?>index#contact" class="btn btn-ghost-white"><i class="ti ti-phone"></i> Talk to Us</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
