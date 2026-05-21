<?php
// $pageTitle can be set before including this file; falls back to the default.
$pageTitle       = $pageTitle       ?? 'Tech Evangelist Pvt. Ltd. — ISO 9001:2015 Certified IT System Integrator | techeva.in';
$pageDescription = $pageDescription ?? 'Tech Evangelist Pvt. Ltd. is an ISO 9001:2015 certified IT System Integrator with 10+ years of experience delivering CCTV, IT infrastructure, smart classroom, printing, and system integration across India.';

// $basePath is set by the calling page: '' for root pages, '../' for pages/ subfolder.
$basePath = $basePath ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<link rel="stylesheet" href="<?= $basePath ?>css/style.css?v=<?= time() ?>">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="navbar">
  <div class="nav-inner">
    <a href="<?= $basePath ?>index#home" class="brand">
      <img src="<?= $basePath ?>asset/Logo.png" alt="Tech Evangelist Private Limited" class="brand-logo-img">
    </a>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
    <div class="nav-links" id="navLinks">
      <a href="<?= $basePath ?>index#home">Home</a>
      <a href="<?= $basePath ?>index#partners">Partner</a>
      <div class="dropdown">
        <a href="<?= $basePath ?>index#about" class="dropdown-toggle">
          Company <i class="ti ti-chevron-down"></i>
        </a>
        <div class="dropdown-menu">
          <a href="<?= $basePath ?>index#who-we-are">Who We Are</a>
          <a href="<?= $basePath ?>index#services">What We Do</a>
          <a href="<?= $basePath ?>index#sectors-we-serve">Sectors We Serve</a>
          <a href="<?= $basePath ?>index#subsidiary">Subsidiary &middot; Software Division</a>
          <a href="<?= $basePath ?>index#about">About Us</a>
          <a href="<?= $basePath ?>index#vision">Direction / Vision</a>
          <a href="<?= $basePath ?>index#why-techeva">Why TechEva</a>
          <a href="<?= $basePath ?>index#certifications">Certifications</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="<?= $basePath ?>our-services" class="dropdown-toggle">
          Services <i class="ti ti-chevron-down"></i>
        </a>
        <div class="dropdown-menu">
          <a href="<?= $basePath ?>our-services#service-cctv">CCTV &amp; Surveillance</a>
          <a href="<?= $basePath ?>our-services#service-infra">IT Infrastructure</a>
          <a href="<?= $basePath ?>our-services#service-smart">Smart Classroom Solutions</a>
          <a href="<?= $basePath ?>our-services#service-ebooks">Digital Content &amp; E-Books</a>
          <a href="<?= $basePath ?>our-services#service-print">Printing &amp; Barcode Solutions</a>
          <a href="<?= $basePath ?>our-services#service-integration">System Integration</a>
        </div>
      </div>
      <a href="<?= $basePath ?>index#projects">Projects</a>
      <a href="<?= $basePath ?>index#contact">Contact Us</a>
      <a href="<?= $basePath ?>index#contact" class="nav-cta">Request Quote</a>
      <a href="https://wa.me/919004386567?text=Hi%20Techeva%2C%20I%20am%20looking%20for%20the%20following%20service%3A%0A%E2%80%A2%20CCTV%20%26%20Surveillance%0A%E2%80%A2%20IT%20Infrastructure%0A%E2%80%A2%20Smart%20Classroom%20Solutions%0A%E2%80%A2%20Digital%20Content%20%26%20E-Books%0A%E2%80%A2%20Printing%20%26%20Barcode%20Solutions%0A%E2%80%A2%20System%20Integration%0A%E2%80%A2%20AMC%20%26%20Managed%20Services" class="nav-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <i class="ti ti-brand-whatsapp"></i>
      </a>
    </div>
  </div>
</nav>
