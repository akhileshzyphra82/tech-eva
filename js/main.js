(function () {
  'use strict';

  // ===== Sticky navbar shrink =====
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 60) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
  });

  // ===== Mobile hamburger =====
  const hamburger = document.getElementById('hamburger');
  const navLinks  = document.getElementById('navLinks');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('open');
  });
  navLinks.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navLinks.classList.remove('open');
    });
  });

  // ===== Animated counters via IntersectionObserver =====
  const counters    = document.querySelectorAll('.counter');
  const counterObs  = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el       = entry.target;
      const target   = parseInt(el.dataset.target, 10);
      const duration = 1500;
      const start    = performance.now();
      const isLarge  = target >= 1000;
      const step = (now) => {
        const elapsed  = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const eased    = 1 - Math.pow(1 - progress, 3);
        const value    = Math.floor(eased * target);
        el.textContent = isLarge ? value.toLocaleString('en-IN') : value;
        if (progress < 1) requestAnimationFrame(step);
        else el.textContent = isLarge ? target.toLocaleString('en-IN') : target;
      };
      requestAnimationFrame(step);
      counterObs.unobserve(el);
    });
  }, { threshold: 0.3 });
  counters.forEach(c => counterObs.observe(c));

  // ===== Fade-in sections =====
  const fadeTargets = document.querySelectorAll(
    'section, .case-card, .service-card, .strength-card, .feature-card, ' +
    '.industry-card, .client-type-col, .canexxa-card, .subsidiary-box'
  );
  fadeTargets.forEach(el => el.classList.add('fade-in'));
  const fadeObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        fadeObs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  fadeTargets.forEach(el => fadeObs.observe(el));

  // ===== Active nav link highlighting =====
  const sections   = ['home', 'about', 'services', 'projects', 'clients', 'contact']
    .map(id => document.getElementById(id)).filter(Boolean);
  const navAnchors = document.querySelectorAll('.nav-links > a, .nav-links .dropdown > a');
  const setActive  = (id) => {
    navAnchors.forEach(a => {
      const href = a.getAttribute('href');
      if (href === '#' + id) a.classList.add('active');
      else a.classList.remove('active');
    });
  };
  const sectionObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) setActive(entry.target.id);
    });
  }, { rootMargin: '-40% 0px -55% 0px' });
  sections.forEach(s => sectionObs.observe(s));

  // ===== Form validation =====
  const form    = document.getElementById('inquiryForm');
  const toast   = document.getElementById('toast');
  const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const phoneRe = /^[+\d][\d\s\-()]{6,}$/;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    let valid = true;
    form.querySelectorAll('.form-group').forEach(fg => fg.classList.remove('invalid'));

    const name    = form.name.value.trim();
    const company = form.company.value.trim();
    const phone   = form.phone.value.trim();
    const email   = form.email.value.trim();

    if (!name)                     { form.name.closest('.form-group').classList.add('invalid');    valid = false; }
    if (!company)                  { form.company.closest('.form-group').classList.add('invalid'); valid = false; }
    if (!phoneRe.test(phone))      { form.phone.closest('.form-group').classList.add('invalid');   valid = false; }
    if (!emailRe.test(email))      { form.email.closest('.form-group').classList.add('invalid');   valid = false; }

    if (!valid) {
      const firstInvalid = form.querySelector('.form-group.invalid');
      if (firstInvalid) firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }

    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 3500);
    form.reset();
  });

  // ===== Smooth scroll fallback for older browsers =====
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href.length > 1) {
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          const top = target.getBoundingClientRect().top + window.pageYOffset - 70;
          window.scrollTo({ top, behavior: 'smooth' });
        }
      }
    });
  });

})();
