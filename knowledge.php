<?php
/**
 * Eva-AI Knowledge Base — Tech Evangelist Pvt. Ltd.
 * All knowledge is defined here and exported as JSON for the chatbot.
 */

$EVA_KNOWLEDGE = [

  /* ── GREETING ── */
  [
    'id'      => 'greeting',
    'patterns'=> ['hi','hello','hey','good morning','good afternoon','good evening','start','help','hii','helo','namaste'],
    'answer'  => "<strong>Hi! I'm Eva-AI</strong> 👋 — your virtual assistant for <strong>Tech Evangelist Pvt. Ltd.</strong><br><br>I'm here to help you with our services, solutions, partnerships, and anything else about TechEva. What can I assist you with today?",
    'suggest' => ['What services do you offer?','Tell me about TechEva','How to get a quote?','About Canexxa Software Division']
  ],

  /* ── COMPANY OVERVIEW ── */
  [
    'id'      => 'company_overview',
    'patterns'=> ['about techeva','who are you','about tech evangelist','company','tell me about','what is techeva','overview','background','founded','history'],
    'answer'  => "<strong>Tech Evangelist Pvt. Ltd.</strong> is an <strong>ISO 9001:2015 Certified IT System Integrator</strong> headquartered in Thane, Maharashtra.<br><br>With <strong>10+ years of experience</strong>, we serve schools, enterprises, and government bodies across India — providing end-to-end technology solutions including CCTV surveillance, IT infrastructure, smart classrooms, digital content, printing solutions, and complete system integration.<br><br>We are also a <strong>Tier-2 Authorized Partner</strong> for Cisco, Lenovo, HP, Hikvision, Bosch, and 10+ other OEM brands.",
    'suggest' => ['What services do you offer?','Who are your OEM partners?','How many projects completed?','Contact TechEva']
  ],

  /* ── ISO CERTIFICATION ── */
  [
    'id'      => 'certification',
    'patterns'=> ['iso','certified','certification','9001','quality','standard','accredited'],
    'answer'  => "Tech Evangelist Pvt. Ltd. is proudly <strong>ISO 9001:2015 Certified</strong> — the internationally recognized standard for Quality Management Systems.<br><br>This certification ensures that every project we deliver meets consistent quality benchmarks, from design and procurement to installation and after-sales support. It's our commitment to excellence on every engagement.",
    'suggest' => ['What services do you offer?','Why choose TechEva?','How to get a quote?']
  ],

  /* ── ALL SERVICES ── */
  [
    'id'      => 'services_all',
    'patterns'=> ['services','what do you do','solutions','offerings','service list','all services','what you offer','service portfolio'],
    'answer'  => "We offer <strong>6 core IT service lines</strong>:<br><br>
      <b>1. 🎥 CCTV &amp; Surveillance</b> — IP cameras, NVR/DVR, AI analytics, access control<br>
      <b>2. 🖥 IT Infrastructure</b> — Servers, networking, workstations, data centers<br>
      <b>3. 🏫 Smart Classroom</b> — IFP panels, LMS, ERP, language labs<br>
      <b>4. 📚 Digital E-Books</b> — 70,000+ titles from 72 Indian publishers<br>
      <b>5. 🖨 Printing &amp; Barcode</b> — Thermal, barcode printers, toners, labels<br>
      <b>6. 🔗 System Integration</b> — End-to-end IT deployment &amp; AMC<br><br>
      All services are delivered with <strong>OEM-grade quality and full lifecycle support</strong>.",
    'suggest' => ['Tell me about CCTV','IT Infrastructure details','Smart Classroom solutions','Request a quote']
  ],

  /* ── CCTV ── */
  [
    'id'      => 'cctv',
    'patterns'=> ['cctv','surveillance','camera','security camera','nvr','dvr','ip camera','access control','video analytics','hikvision','bosch','monitoring','intrusion','ptz'],
    'answer'  => "<strong>CCTV &amp; Surveillance Solutions</strong> 🎥<br><br>We design end-to-end IP surveillance ecosystems for facilities of any scale — from small offices to large industrial campuses.<br><br><b>What's included:</b><br>• IP CCTV Cameras (Indoor / Outdoor / PTZ)<br>• NVR / DVR Video Recording Systems<br>• AI-Based Video Analytics<br>• Access Control &amp; Intrusion Detection<br>• Centralized Command &amp; Monitoring<br>• Structured Cabling &amp; PoE Switching<br><br><b>Brand Partners:</b> Hikvision, Bosch, D-Link<br><br>Engineered for <strong>24×7 reliability and forensic-grade evidence integrity</strong>.",
    'suggest' => ['Get CCTV quote','IT Infrastructure details','System Integration','Talk to our team']
  ],

  /* ── IT INFRASTRUCTURE ── */
  [
    'id'      => 'it_infra',
    'patterns'=> ['it infrastructure','networking','server','wifi','wireless','access point','switch','router','data center','storage','virtualization','backup','laptop','desktop','workstation','lenovo','cisco','hp','dlink','network','lan','wan','structured cabling'],
    'answer'  => "<strong>IT Infrastructure Solutions</strong> 🖥<br><br>We build the complete digital backbone — from endpoint devices to enterprise data centers.<br><br><b>Solutions Include:</b><br>• Laptops, Desktops &amp; Workstations<br>• Servers, Storage &amp; Virtualization<br>• Data Center Design &amp; Deployment<br>• Enterprise Networking (WiFi APs, Switching, Routing)<br>• Interactive Displays &amp; Kiosks<br>• Backup &amp; Disaster Recovery<br><br><b>Brand Partners:</b> Cisco, Lenovo, HP, D-Link<br><br>Every layer is configured to <strong>OEM and ISO standards</strong> for maximum uptime.",
    'suggest' => ['Get Infrastructure quote','CCTV solutions','Smart Classroom','Talk to our team']
  ],

  /* ── SMART CLASSROOM ── */
  [
    'id'      => 'smart_classroom',
    'patterns'=> ['smart classroom','smart class','interactive','ifp','flat panel','lms','erp','school','education','teacher','student','language lab','digital classroom','cbse','icse','e learning','elearning','edtech','university','college'],
    'answer'  => "<strong>Smart Classroom Solutions</strong> 🏫<br><br>Deployed in <strong>120+ schools</strong> across India — we transform classrooms into connected, outcome-driven learning environments.<br><br><b>Solutions Include:</b><br>• Interactive Flat Panels (IFP)<br>• Digital Smart Classroom Setup<br>• LMS Integration &amp; Teacher Training<br>• ERP Systems for Schools<br>• Language Lab Solutions<br>• Digital Assessment Tools<br><br>Compatible with CBSE, ICSE, and university curricula. We provide <strong>installation, training, and ongoing AMC support</strong>.",
    'suggest' => ['Get Smart Classroom quote','Digital E-Books for schools','System Integration','Talk to our team']
  ],

  /* ── EBOOKS ── */
  [
    'id'      => 'ebooks',
    'patterns'=> ['ebook','e-book','digital content','digital library','publisher','library','reading','book','title','digital book','content platform','70000','72 publisher'],
    'answer'  => "<strong>Digital Content &amp; E-Books</strong> 📚<br><br>India's most comprehensive school and institutional digital reading ecosystem.<br><br><b>Key Highlights:</b><br>• <strong>70,000+ Digital Titles</strong> in one platform<br>• Content from <strong>72 leading Indian publishers</strong><br>• 100% Copyright-Compliant licensed content<br>• Multi-Device Access — Web, Tablet &amp; Mobile<br>• Centralized Admin Dashboard with Analytics<br>• Usage reporting &amp; licensing management<br><br>Perfect for schools, colleges, and institutional libraries seeking to go digital.",
    'suggest' => ['Get E-Books quote','Smart Classroom solutions','Talk to our team']
  ],

  /* ── PRINTING ── */
  [
    'id'      => 'printing',
    'patterns'=> ['printing','printer','barcode','thermal','label','toner','inkjet','ribbon','dot matrix','line matrix','xerox','brother','ricoh','samsung','lexmark','consumable','sticker'],
    'answer'  => "<strong>Printing &amp; Barcode Solutions</strong> 🖨<br><br>Complete printing infrastructure for retail, manufacturing, logistics, healthcare, and enterprise workflows.<br><br><b>Solutions Include:</b><br>• Thermal Printers (Desktop &amp; Industrial)<br>• Barcode Printers &amp; Scanners<br>• Labels, Stickers &amp; P-Touch Labels<br>• Toners &amp; Inkjet Cartridges<br>• Dot Matrix &amp; Line Matrix Ribbons<br><br><b>Brand Partners:</b> HP, Brother, Xerox, Lexmark, Ricoh, Samsung<br><br>We also supply <strong>full consumables fulfillment</strong> — ensuring uninterrupted operations.",
    'suggest' => ['Get Printing quote','IT Infrastructure','System Integration','Talk to our team']
  ],

  /* ── SYSTEM INTEGRATION ── */
  [
    'id'      => 'integration',
    'patterns'=> ['system integration','integration','amc','managed services','annual maintenance','deployment','commissioning','lifecycle','turnkey','end to end','single vendor','it deployment'],
    'answer'  => "<strong>System Integration &amp; AMC</strong> 🔗<br><br>We bring every technology layer together — networks, surveillance, cloud, endpoints, and applications — under <strong>single-vendor accountability</strong>.<br><br><b>What We Handle:</b><br>• IT Infrastructure Integration<br>• Network Integration &amp; Optimization<br>• Surveillance System Integration<br>• Cloud Connectivity &amp; Hybrid Setup<br>• Centralized Management Platforms<br>• Enterprise Deployment, Commissioning &amp; AMC<br><br>From design to go-live and beyond — <strong>one partner, complete ownership</strong>.",
    'suggest' => ['Get Integration quote','What is AMC?','CCTV solutions','Talk to our team']
  ],

  /* ── AMC ── */
  [
    'id'      => 'amc',
    'patterns'=> ['amc','annual','maintenance contract','support','after sales','warranty','repair','service contract','managed','uptime'],
    'answer'  => "<strong>AMC &amp; Managed Services</strong> 🛠<br><br>We offer Annual Maintenance Contracts (AMC) for all installed systems — ensuring maximum uptime and prompt resolution.<br><br><b>AMC Coverage Includes:</b><br>• Preventive maintenance visits<br>• On-call technical support<br>• Spare parts management<br>• Remote monitoring &amp; diagnostics<br>• Software updates &amp; patches<br>• Priority response SLAs<br><br>Available for CCTV, IT infrastructure, smart classrooms, printers, and complete IT environments.",
    'suggest' => ['Get AMC quote','System Integration','Talk to our support team']
  ],

  /* ── OEM PARTNERS ── */
  [
    'id'      => 'partners',
    'patterns'=> ['partner','oem','brand','cisco','lenovo','hp','hikvision','bosch','dlink','d-link','dell','acer','benq','canon','brother','xerox','ricoh','samsung','lexmark','intel','ibm','hcl','epson','authorized','t2','tier'],
    'answer'  => "Tech Evangelist is an <strong>Authorized OEM Partner</strong> for 10+ leading technology brands:<br><br>
      🌐 <b>Networking:</b> Cisco, D-Link<br>
      💻 <b>Computing:</b> Lenovo, HP, Dell, Acer, HCL, Intel<br>
      🎥 <b>Surveillance:</b> Hikvision, Bosch, D-Link<br>
      🖨 <b>Printing:</b> HP, Canon, Brother, Xerox, Ricoh, Samsung, Lexmark, Epson<br>
      📺 <b>Display:</b> BenQ, Sony<br>
      🔒 <b>Security Software:</b> Kaspersky<br><br>
      Being an authorized partner means we supply <strong>genuine products with valid warranties and OEM-certified installation</strong>.",
    'suggest' => ['Services we offer','Get a quote','Why choose TechEva?']
  ],

  /* ── CANEXXA ── */
  [
    'id'      => 'canexxa',
    'patterns'=> ['canexxa','software','software division','app','application','custom software','web development','digital product','mobile app','erp','crm','product','tech group','subsidiary','software company'],
    'answer'  => "<strong>Canexxa Solutions Pvt. Ltd.</strong> 💻 is the <strong>in-house Software Division</strong> of the Tech Evangelist Group.<br><br>While TechEva handles hardware, infrastructure &amp; integration — Canexxa powers the software side:<br><br>• Custom Web &amp; Mobile Applications<br>• ERP, CRM &amp; Business Software<br>• School &amp; Institutional Management Systems<br>• Digital Products &amp; Platforms<br>• API Integrations &amp; Cloud Solutions<br><br>Together, we offer a <strong>complete technology ecosystem</strong> — hardware + software under one roof.<br><br>🌐 <a href='https://canexxa.com' target='_blank' style='color:#2eb872;'>Visit canexxa.com</a>",
    'suggest' => ['TechEva IT services','Get a quote','Contact us']
  ],

  /* ── SECTORS ── */
  [
    'id'      => 'sectors',
    'patterns'=> ['sector','industry','vertical','school','hospital','government','retail','manufacturing','corporate','enterprise','bank','real estate','logistics','warehouse','hotel','hospitality','healthcare','pharma'],
    'answer'  => "We serve clients across <strong>diverse sectors</strong> throughout India:<br><br>
      🏫 <b>Education</b> — Schools, Colleges, Universities<br>
      🏥 <b>Healthcare</b> — Hospitals, Clinics, Pharma<br>
      🏛 <b>Government</b> — Municipal, State departments<br>
      🏭 <b>Manufacturing</b> — Factories, Industrial units<br>
      🏪 <b>Retail</b> — Chains, Warehouses, Showrooms<br>
      🏢 <b>Corporate</b> — Offices, IT Parks, Co-working<br>
      🏨 <b>Hospitality</b> — Hotels, Resorts<br>
      🚚 <b>Logistics</b> — Warehouses, Distribution centers<br><br>
      Our solutions are <strong>vertical-specialized</strong> — not generic deployments.",
    'suggest' => ['Services offered','Smart Classroom for schools','CCTV for retail','Get a quote']
  ],

  /* ── LOCATION ── */
  [
    'id'      => 'location',
    'patterns'=> ['location','address','office','where','thane','mumbai','maharashtra','visit','map','directions','naupada','tara niwas','vishnu nagar'],
    'answer'  => "Our office is located at:<br><br>📍 <strong>Office No. 1, Tara Niwas,<br>Vishnu Nagar, Naupada,<br>Thane West — 400602,<br>Maharashtra, India</strong><br><br>We're easily accessible from Thane Railway Station (Western Line) and well-connected by road from Mumbai.",
    'suggest' => ['Call us','Email us','WhatsApp us','Working hours']
  ],

  /* ── CONTACT ── */
  [
    'id'      => 'contact',
    'patterns'=> ['contact','reach','call','phone','number','email','mail','touch','support','helpdesk','enquiry','inquiry','connect'],
    'answer'  => "You can reach our team through any of these channels:<br><br>📞 <strong>Phone:</strong> <a href='tel:+912241315610' style='color:#2eb872;'>+91-22-4131-5610</a><br>📧 <strong>Email:</strong> <a href='mailto:support@techeva.in' style='color:#2eb872;'>support@techeva.in</a><br>🌐 <strong>Website:</strong> <a href='https://www.techeva.in' style='color:#2eb872;' target='_blank'>www.techeva.in</a><br>💬 <strong>WhatsApp:</strong> <a href='https://wa.me/919004386567' style='color:#25D366;' target='_blank'>+91 9004386567</a><br><br>📍 Office No. 1, Tara Niwas, Vishnu Nagar, Naupada, Thane West — 400602",
    'suggest' => ['Request a quote','WhatsApp us','Working hours','Services offered']
  ],

  /* ── WORKING HOURS ── */
  [
    'id'      => 'hours',
    'patterns'=> ['hours','timing','time','working hours','office hours','open','closed','when','availability','business hours'],
    'answer'  => "🕐 <strong>Business Hours:</strong><br><br>📅 <b>Monday – Saturday:</b> 9:30 AM – 6:30 PM<br>🚫 <b>Sunday:</b> Closed<br><br>For urgent support, you can always <strong>WhatsApp us</strong> and our team will respond at the earliest.",
    'suggest' => ['WhatsApp us','Call us','Request a quote']
  ],

  /* ── QUOTE / PRICING ── */
  [
    'id'      => 'quote',
    'patterns'=> ['quote','pricing','price','cost','rate','budget','how much','proposal','estimate','tender','procurement'],
    'answer'  => "We provide <strong>customized quotes</strong> based on your specific requirements — there's no one-size-fits-all pricing.<br><br>To get your free quote:<br><br>📋 <b>Option 1:</b> Fill the <a href='index#contact' style='color:#2eb872;'>Request a Quote form</a> on our website<br>💬 <b>Option 2:</b> WhatsApp us with your requirement<br>📞 <b>Option 3:</b> Call us at <a href='tel:+912241315610' style='color:#2eb872;'>+91-22-4131-5610</a><br><br>Our team typically responds within <strong>1 business day</strong>.",
    'suggest' => ['WhatsApp for quote','Call us','What services do you offer?','Contact info']
  ],

  /* ── WHY TECHEVA ── */
  [
    'id'      => 'why_techeva',
    'patterns'=> ['why techeva','why choose','benefits','advantage','different','unique','better','trust','reliable','experience','expertise'],
    'answer'  => "<strong>Why choose Tech Evangelist?</strong> ✅<br><br>
      🏆 <b>10+ Years</b> of proven IT integration experience<br>
      📜 <b>ISO 9001:2015 Certified</b> — quality you can count on<br>
      🤝 <b>10+ OEM Authorizations</b> — genuine products, valid warranties<br>
      🏫 <b>120+ Schools</b> and hundreds of enterprises served<br>
      🔧 <b>Single-Vendor Accountability</b> — design to AMC, one partner<br>
      🇮🇳 <b>Pan-India Reach</b> with local expertise<br>
      💻 <b>In-house Software Division</b> (Canexxa) for digital needs<br>
      ⚡ <b>Fast Response</b> — 1 business day quote turnaround",
    'suggest' => ['Get a quote','Our services','Our OEM partners','Contact us']
  ],

  /* ── PROJECTS ── */
  [
    'id'      => 'projects',
    'patterns'=> ['projects','case study','portfolio','work','clients','deployed','installation','completed','track record','achievements'],
    'answer'  => "Over 10+ years, Tech Evangelist has completed <strong>hundreds of successful deployments</strong> across India:<br><br>
      🏫 <b>120+ Smart Classroom</b> projects in CBSE/ICSE schools<br>
      🏢 <b>Enterprise IT</b> deployments for corporates &amp; IT parks<br>
      🏛 <b>Government projects</b> — municipal &amp; state level<br>
      🏥 <b>Healthcare IT</b> — hospital infrastructure &amp; surveillance<br>
      🏭 <b>Industrial CCTV</b> — factory &amp; warehouse security<br>
      🚚 <b>Logistics &amp; Retail</b> — barcode &amp; printing deployments<br><br>
      Want to see specific project details? <a href='index#contact' style='color:#2eb872;'>Contact our team</a>.",
    'suggest' => ['Our services','Why choose TechEva?','Request a quote']
  ],

];

// Output JSON for chatbot JS
if (isset($_GET['json'])) {
  header('Content-Type: application/json');
  echo json_encode($EVA_KNOWLEDGE);
  exit;
}
?>
