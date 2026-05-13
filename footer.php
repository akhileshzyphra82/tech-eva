<!-- ===== FOOTER ===== -->
<footer>
  <div class="container">
    <div class="footer-grid">

      <!-- Brand column -->
      <div class="footer-col footer-brand">
        <a href="<?= $basePath ?>index#home" class="brand">
          <img src="<?= $basePath ?>asset/Logo.png" alt="Tech Evangelist Private Limited" class="brand-logo-img brand-logo-img--footer">
        </a>
        <div class="tagline">"Transforming Businesses Through Smart Technology Solutions"</div>
        <div class="iso-badge"><i class="ti ti-rosette-discount-check"></i> ISO 9001:2015 Certified</div>
        <p style="font-size:0.875rem;color:var(--muted);">India's trusted IT System Integrator with 10+ years of experience in infrastructure, surveillance, smart education, and managed services.</p>
      </div>

      <!-- Quick links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?= $basePath ?>index#home">Home</a></li>
          <li><a href="<?= $basePath ?>index#partners">Partner</a></li>
          <li><a href="<?= $basePath ?>index#who-we-are">Who We Are</a></li>
          <li><a href="<?= $basePath ?>index#services">What We Do</a></li>
          <li><a href="<?= $basePath ?>index#sectors-we-serve">Sectors We Serve</a></li>
          <li><a href="<?= $basePath ?>index#subsidiary">Subsidiary &middot; Software Division</a></li>
          <li><a href="<?= $basePath ?>index#vision">Direction / Vision</a></li>
          <li><a href="<?= $basePath ?>index#why-techeva">Why TechEva</a></li>
          <li><a href="<?= $basePath ?>index#certifications">Certifications</a></li>
          <li><a href="<?= $basePath ?>our-services">Services</a></li>
          <li><a href="<?= $basePath ?>index#projects">Projects</a></li>
          <li><a href="<?= $basePath ?>index#contact">Contact Us</a></li>
        </ul>
      </div>

      <!-- Services links -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="<?= $basePath ?>our-services#service-cctv">CCTV &amp; Surveillance</a></li>
          <li><a href="<?= $basePath ?>our-services#service-infra">IT Infrastructure</a></li>
          <li><a href="<?= $basePath ?>our-services#service-smart">Smart Classroom</a></li>
          <li><a href="<?= $basePath ?>our-services#service-ebooks">Digital E-Books</a></li>
          <li><a href="<?= $basePath ?>our-services#service-print">Printing &amp; Barcode</a></li>
          <li><a href="<?= $basePath ?>our-services#service-integration">System Integration</a></li>
        </ul>
      </div>

      <!-- Contact info -->
      <div class="footer-col">
        <h4>Contact</h4>
        <div class="footer-contact-row"><i class="ti ti-map-pin"></i><span>Office No.1, Tara Niwas, Vishnu Nagar, Naupada, Thane West — 400602</span></div>
        <div class="footer-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.7254380794825!2d72.9671209744472!3d19.191712048331205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b922006c3269%3A0x9bdc06d58b5cd81e!2sTech%20Evangelist%20Pvt%20Ltd!5e1!3m2!1sen!2sin!4v1778669181629!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer-contact-row"><i class="ti ti-phone"></i><a href="tel:+912241315610">+91-22-4131-5610</a></div>
        <div class="footer-contact-row"><i class="ti ti-mail"></i><a href="mailto:support@techeva.in">support@techeva.in</a></div>
        <div class="footer-contact-row"><i class="ti ti-world"></i><a href="https://www.techeva.in" target="_blank" rel="noopener">www.techeva.in</a></div>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; <?= date('Y') ?> Tech Evangelist Pvt. Ltd. All Rights Reserved. &nbsp;|&nbsp;
      A Tech Evangelist Group Company &nbsp;|&nbsp;
      <a href="https://canexxa.com" target="_blank" rel="noopener" style="color:inherit;">Canexxa Solutions Pvt. Ltd. &mdash; Software Division</a>
    </div>
  </div>
</footer>

<!-- ===== TOAST ===== -->
<div class="toast" id="toast">
  <i class="ti ti-circle-check-filled"></i>
  <span>Inquiry sent! Our team will reply within 1 business day.</span>
</div>

<!-- ===== SCRIPTS ===== -->
<script src="<?= $basePath ?>js/main.js"></script>

<!-- ===== EVA-AI CHATBOT ===== -->
<?php include_once __DIR__ . '/chatbot-widget.php'; ?>
</body>
</html>
