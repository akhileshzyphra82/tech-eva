<?php include_once __DIR__ . '/knowledge.php'; ?>

<!-- ===== EVA-AI CHATBOT WIDGET ===== -->
<div class="eva-fab" id="evaFab" onclick="evaToggle()" aria-label="Chat with Eva-AI">
  <div class="eva-fab-inner">
    <span class="eva-fab-icon"><i class="ti ti-message-chatbot"></i></span>
    <span class="eva-fab-label">Eva-AI</span>
  </div>
  <span class="eva-pulse"></span>
  <span class="eva-badge" id="evaBadge">1</span>
</div>

<div class="eva-window" id="evaWindow" role="dialog" aria-modal="true" aria-label="Eva-AI Chat">

  <!-- Header -->
  <div class="eva-header">
    <div class="eva-header-info">
      <div class="eva-avatar"><i class="ti ti-robot"></i></div>
      <div>
        <div class="eva-name">Eva-AI</div>
        <div class="eva-status"><span class="eva-dot"></span> Online · Tech Evangelist Support</div>
      </div>
    </div>
    <div class="eva-header-actions">
      <button class="eva-header-btn" onclick="evaClear()" title="Clear chat"><i class="ti ti-trash"></i></button>
      <button class="eva-header-btn" onclick="evaToggle()" title="Close"><i class="ti ti-x"></i></button>
    </div>
  </div>

  <!-- Messages -->
  <div class="eva-body" id="evaBody"></div>

  <!-- Input -->
  <div class="eva-footer">
    <div class="eva-input-row">
      <input type="text" id="evaInput" class="eva-input" placeholder="Type your question…" autocomplete="off" maxlength="200" onkeydown="if(event.key==='Enter')evaSend()">
      <button class="eva-send" onclick="evaSend()" aria-label="Send"><i class="ti ti-send"></i></button>
    </div>
    <div class="eva-powered">Powered by <strong>Canexxa</strong> · Software Division of TechEva</div>
  </div>

</div>

<!-- ===== KNOWLEDGE DATA ===== -->
<script>
const EVA_KB = <?= json_encode($EVA_KNOWLEDGE, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
const EVA_WA  = "https://wa.me/919004386567?text=Hi%20Techeva%2C%20I%20am%20looking%20for%20the%20following%20service%3A%0A%E2%80%A2%20CCTV%20%26%20Surveillance%0A%E2%80%A2%20IT%20Infrastructure%0A%E2%80%A2%20Smart%20Classroom%20Solutions%0A%E2%80%A2%20Digital%20Content%20%26%20E-Books%0A%E2%80%A2%20Printing%20%26%20Barcode%20Solutions%0A%E2%80%A2%20System%20Integration%0A%E2%80%A2%20AMC%20%26%20Managed%20Services";
const EVA_FALLBACK_SUGGEST = ['Our services','Get a quote','Contact us','WhatsApp us'];
</script>

<!-- ===== CHATBOT LOGIC ===== -->
<script>
(function(){

/* ── State ── */
var open    = false;
var history = [];
var typing  = null;
var LS_KEY  = 'eva_closed';

/* ── Toggle ── */
window.evaToggle = function(){
  open = !open;
  var fab = document.getElementById('evaFab');
  var win = document.getElementById('evaWindow');
  win.classList.toggle('eva-open', open);
  fab.classList.toggle('eva-fab--hidden', open);
  document.getElementById('evaBadge').style.display = 'none';
  if(!open) localStorage.setItem(LS_KEY, '1');
  if(open && history.length === 0) evaGreet();
  if(open) setTimeout(function(){ document.getElementById('evaInput').focus(); }, 300);
};

/* ── Clear ── */
window.evaClear = function(){
  history = [];
  document.getElementById('evaBody').innerHTML = '';
  evaGreet();
};

/* ── Greet ── */
function evaGreet(){
  var entry = EVA_KB.find(function(k){ return k.id === 'greeting'; });
  if(entry) evaShowBot(entry.answer, entry.suggest);
}

/* ── Auto-open on first visit (no LS_KEY set) ── */
window.addEventListener('load', function(){
  if(!localStorage.getItem(LS_KEY)){
    setTimeout(function(){
      open = true;
      document.getElementById('evaWindow').classList.add('eva-open');
      document.getElementById('evaFab').classList.add('eva-fab--hidden');
      document.getElementById('evaBadge').style.display = 'none';
      evaGreet();
      setTimeout(function(){ document.getElementById('evaInput').focus(); }, 400);
    }, 1500);
  }
});

/* ── Send ── */
window.evaSend = function(text){
  var input = document.getElementById('evaInput');
  var msg   = (text || input.value).trim();
  if(!msg) return;
  input.value = '';
  evaShowUser(msg);
  evaShowTyping();
  setTimeout(function(){ evaRespond(msg); }, 800 + Math.random()*400);
};

/* ── Match ── */
function evaRespond(msg){
  var q     = msg.toLowerCase();
  var best  = null;
  var score = 0;

  /* WhatsApp shortcut */
  if(/whatsapp|wa|watsapp|chat live|live chat/.test(q)){
    evaHideTyping();
    evaShowBot(
      "Sure! Click below to start a <strong>live WhatsApp chat</strong> with our team. We typically respond within minutes during business hours. 💬",
      ['Our services','Get a quote','Contact info']
    );
    return;
  }

  EVA_KB.forEach(function(entry){
    var hits = 0;
    entry.patterns.forEach(function(p){
      if(q.indexOf(p) !== -1) hits += (p.split(' ').length > 1 ? 3 : 1);
    });
    if(hits > score){ score = hits; best = entry; }
  });

  evaHideTyping();

  if(best && score >= 1){
    evaShowBot(best.answer, best.suggest);
  } else {
    evaShowBot(
      "I'm not sure I have a specific answer for that. 🤔<br><br>For detailed assistance, please reach out to our support team directly:<br><br>" +
      "📞 <a href='tel:+912241315610' style='color:#2eb872;'>+91-22-4131-5610</a><br>" +
      "📧 <a href='mailto:support@techeva.in' style='color:#2eb872;'>support@techeva.in</a><br>" +
      "💬 <a href='" + EVA_WA + "' target='_blank' style='color:#25D366;'>Chat on WhatsApp</a>",
      EVA_FALLBACK_SUGGEST
    );
  }
}

/* ── Render: user bubble ── */
function evaShowUser(text){
  var body = document.getElementById('evaBody');
  var row  = document.createElement('div');
  row.className = 'eva-row eva-row--user';
  row.innerHTML = '<div class="eva-bubble eva-bubble--user">' + escHtml(text) + '</div><div class="eva-time">' + evaTime() + '</div>';
  body.appendChild(row);
  history.push({role:'user', text: text});
  evaScroll();
}

/* ── Render: bot bubble + suggestions ── */
function evaShowBot(html, suggest){
  var body = document.getElementById('evaBody');
  var row  = document.createElement('div');
  row.className = 'eva-row eva-row--bot';

  var chips = '';
  /* Always add WhatsApp chip last */
  var showSuggest = (suggest || EVA_FALLBACK_SUGGEST).slice(0,4);
  showSuggest.forEach(function(s){
    chips += '<button class="eva-chip" onclick="evaSend(\'' + s.replace(/'/g,"\\'") + '\')">' + escHtml(s) + '</button>';
  });
  chips += '<a class="eva-chip eva-chip--wa" href="' + EVA_WA + '" target="_blank" rel="noopener"><i class="ti ti-brand-whatsapp"></i> Live Chat</a>';

  row.innerHTML =
    '<div class="eva-bot-row">' +
      '<div class="eva-bot-avatar"><i class="ti ti-robot"></i></div>' +
      '<div>' +
        '<div class="eva-bubble eva-bubble--bot">' + html + '</div>' +
        '<div class="eva-time">' + evaTime() + '</div>' +
        '<div class="eva-chips">' + chips + '</div>' +
      '</div>' +
    '</div>';

  body.appendChild(row);
  history.push({role:'bot', html: html});
  evaScroll();
}

/* ── Typing indicator ── */
function evaShowTyping(){
  evaHideTyping();
  var body = document.getElementById('evaBody');
  var row  = document.createElement('div');
  row.id = 'evaTyping';
  row.className = 'eva-row eva-row--bot';
  row.innerHTML =
    '<div class="eva-bot-row">' +
      '<div class="eva-bot-avatar"><i class="ti ti-robot"></i></div>' +
      '<div class="eva-bubble eva-bubble--bot eva-bubble--typing">' +
        '<span class="eva-dot-anim"></span><span class="eva-dot-anim"></span><span class="eva-dot-anim"></span>' +
      '</div>' +
    '</div>';
  body.appendChild(row);
  evaScroll();
}
function evaHideTyping(){
  var t = document.getElementById('evaTyping');
  if(t) t.remove();
}

/* ── Helpers ── */
function evaScroll(){
  var b = document.getElementById('evaBody');
  setTimeout(function(){ b.scrollTop = b.scrollHeight; }, 60);
}
function evaTime(){
  var d = new Date();
  return ('0'+d.getHours()).slice(-2) + ':' + ('0'+d.getMinutes()).slice(-2);
}
function escHtml(s){
  return s.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
}

/* ── Show badge after delay only if not auto-opened ── */
setTimeout(function(){
  if(!open) document.getElementById('evaBadge').style.display = 'flex';
}, 6000);

})();
</script>

<!-- ===== CHATBOT STYLES ===== -->
<style>
/* ── FAB ── */
.eva-fab {
  position: fixed; bottom: 28px; right: 28px; z-index: 9990;
  display: flex; align-items: center; gap: 8px;
  background: linear-gradient(135deg, #1a3c6e, #2eb872);
  color: #fff; border-radius: 50px; padding: 12px 18px 12px 14px;
  cursor: pointer; box-shadow: 0 6px 24px rgba(26,60,110,.45);
  transition: transform .25s ease, box-shadow .25s ease, opacity .25s ease;
  user-select: none;
}
.eva-fab:hover { transform: translateY(-3px); box-shadow: 0 10px 32px rgba(26,60,110,.55); }
.eva-fab--hidden {
  opacity: 0; pointer-events: none;
  transform: translateY(16px) scale(0.85);
}
.eva-fab-inner { display: flex; align-items: center; gap: 8px; }
.eva-fab-icon i { font-size: 24px; line-height: 1; }
.eva-fab-label { font-size: 0.85rem; font-weight: 600; letter-spacing: .02em; }
.eva-pulse {
  position: absolute; inset: -4px; border-radius: 50px;
  border: 2px solid rgba(46,184,114,.5);
  animation: eva-pulse 2.5s ease-out infinite;
  pointer-events: none;
}
@keyframes eva-pulse {
  0%   { transform: scale(1);   opacity: .8; }
  70%  { transform: scale(1.18); opacity: 0; }
  100% { transform: scale(1.18); opacity: 0; }
}
.eva-badge {
  position: absolute; top: -6px; right: -6px;
  width: 20px; height: 20px; border-radius: 50%;
  background: #ef4444; color: #fff; font-size: 0.7rem; font-weight: 700;
  display: none; align-items: center; justify-content: center;
  border: 2px solid #fff; animation: eva-bounce .6s ease infinite alternate;
}
@keyframes eva-bounce { from { transform: scale(1); } to { transform: scale(1.2); } }

/* ── Window ── */
.eva-window {
  position: fixed; bottom: 28px; right: 28px; z-index: 9991;
  width: 380px; height: 540px; max-height: calc(100vh - 48px);
  background: #fff; border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0,0,0,.18), 0 4px 16px rgba(0,0,0,.1);
  display: flex; flex-direction: column; overflow: hidden;
  transform: scale(.88) translateY(24px); transform-origin: bottom right;
  opacity: 0; pointer-events: none;
  transition: transform .28s cubic-bezier(.34,1.56,.64,1), opacity .22s ease;
}
.eva-window.eva-open {
  transform: scale(1) translateY(0);
  opacity: 1; pointer-events: all;
}

/* ── Header ── */
.eva-header {
  background: linear-gradient(135deg, #0e2048, #1a3c6e);
  padding: 14px 16px; display: flex; align-items: center;
  justify-content: space-between; flex-shrink: 0;
}
.eva-header-info { display: flex; align-items: center; gap: 12px; }
.eva-avatar {
  width: 42px; height: 42px; border-radius: 50%;
  background: linear-gradient(135deg, #2eb872, #0ea968);
  display: flex; align-items: center; justify-content: center;
  color: #fff; font-size: 20px; flex-shrink: 0;
  box-shadow: 0 0 0 2px rgba(46,184,114,.4);
}
.eva-name { font-size: 1rem; font-weight: 700; color: #fff; line-height: 1.2; }
.eva-status { font-size: 0.72rem; color: rgba(255,255,255,.65); display: flex; align-items: center; gap: 5px; margin-top: 2px; }
.eva-dot {
  width: 7px; height: 7px; border-radius: 50%;
  background: #2eb872; display: inline-block;
  box-shadow: 0 0 5px #2eb872;
  animation: eva-blink 2s ease infinite;
}
@keyframes eva-blink { 0%,100%{opacity:1} 50%{opacity:.4} }
.eva-header-actions { display: flex; gap: 4px; }
.eva-header-btn {
  width: 30px; height: 30px; border-radius: 8px;
  background: rgba(255,255,255,.1); border: none;
  color: rgba(255,255,255,.8); font-size: 15px;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; transition: background .2s;
}
.eva-header-btn:hover { background: rgba(255,255,255,.22); color: #fff; }

/* ── Body ── */
.eva-body {
  flex: 1; overflow-y: auto; padding: 16px 14px 8px;
  background: #f5f7fb; display: flex; flex-direction: column; gap: 14px;
  scroll-behavior: smooth;
}
.eva-body::-webkit-scrollbar { width: 4px; }
.eva-body::-webkit-scrollbar-track { background: transparent; }
.eva-body::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }

/* ── Message rows ── */
.eva-row { display: flex; flex-direction: column; }
.eva-row--user { align-items: flex-end; }
.eva-row--bot  { align-items: flex-start; }
.eva-bot-row   { display: flex; align-items: flex-start; gap: 8px; }
.eva-bot-avatar {
  width: 30px; height: 30px; border-radius: 50%; flex-shrink: 0;
  background: linear-gradient(135deg, #1a3c6e, #2eb872);
  display: flex; align-items: center; justify-content: center;
  color: #fff; font-size: 14px; margin-top: 2px;
}

/* ── Bubbles ── */
.eva-bubble {
  max-width: 270px; border-radius: 16px;
  padding: 10px 14px; font-size: 0.84rem; line-height: 1.55;
  word-break: break-word;
}
.eva-bubble--bot {
  background: #fff; color: #2d3748;
  border-bottom-left-radius: 4px;
  box-shadow: 0 1px 4px rgba(0,0,0,.08);
}
.eva-bubble--user {
  background: linear-gradient(135deg, #1a3c6e, #2563eb);
  color: #fff; border-bottom-right-radius: 4px;
  box-shadow: 0 2px 8px rgba(26,60,110,.3);
}
.eva-bubble a { color: #2eb872; }
.eva-bubble--user a { color: #93c5fd; }
.eva-time { font-size: 0.68rem; color: #9ca3af; margin-top: 3px; padding: 0 4px; }
.eva-row--user .eva-time { text-align: right; }

/* ── Typing ── */
.eva-bubble--typing {
  padding: 12px 16px; display: flex; gap: 5px; align-items: center;
  min-width: 56px;
}
.eva-dot-anim {
  width: 7px; height: 7px; border-radius: 50%; background: #9ca3af;
  animation: eva-typing .9s ease infinite;
}
.eva-dot-anim:nth-child(2) { animation-delay: .18s; }
.eva-dot-anim:nth-child(3) { animation-delay: .36s; }
@keyframes eva-typing { 0%,60%,100%{ transform:translateY(0); opacity:.5; } 30%{ transform:translateY(-5px); opacity:1; } }

/* ── Suggestion chips ── */
.eva-chips { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 8px; max-width: 290px; }
.eva-chip {
  padding: 5px 11px; border-radius: 20px; font-size: 0.74rem; font-weight: 500;
  border: 1.5px solid #cbd5e1; background: #fff; color: #1a3c6e;
  cursor: pointer; transition: all .18s ease; line-height: 1.4;
  text-decoration: none; display: inline-flex; align-items: center; gap: 4px;
}
.eva-chip:hover { background: #1a3c6e; color: #fff; border-color: #1a3c6e; }
.eva-chip--wa {
  border-color: #25D366; color: #25D366; background: #f0fdf4;
}
.eva-chip--wa:hover { background: #25D366; color: #fff; border-color: #25D366; }
.eva-chip--wa i { font-size: 14px; }

/* ── Footer ── */
.eva-footer {
  border-top: 1px solid #e5e7eb; padding: 10px 12px 10px;
  background: #fff; flex-shrink: 0;
}
.eva-input-row { display: flex; gap: 8px; align-items: center; }
.eva-input {
  flex: 1; border: 1.5px solid #e2e8f0; border-radius: 24px;
  padding: 9px 16px; font-size: 0.84rem; outline: none;
  transition: border-color .2s ease; background: #f8fafc;
  font-family: inherit; color: #1a202c;
}
.eva-input:focus { border-color: #2eb872; background: #fff; }
.eva-send {
  width: 38px; height: 38px; border-radius: 50%;
  background: linear-gradient(135deg, #1a3c6e, #2eb872);
  border: none; color: #fff; font-size: 16px;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; flex-shrink: 0;
  transition: transform .2s ease, box-shadow .2s ease;
}
.eva-send:hover { transform: scale(1.1); box-shadow: 0 4px 12px rgba(46,184,114,.4); }
.eva-powered {
  text-align: center; font-size: 0.68rem; color: #9ca3af; margin-top: 6px;
}

/* ── Responsive ── */
@media (max-width: 480px) {
  .eva-window {
    width: calc(100vw - 16px); right: 8px; bottom: 16px;
    height: calc(100vh - 32px); max-height: none; border-radius: 16px;
  }
  .eva-fab { right: 16px; bottom: 20px; }
}
</style>
