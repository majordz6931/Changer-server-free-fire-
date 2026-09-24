<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<meta name="theme-color" content="#08090d">
<meta name="color-scheme" content="dark">
<meta name="description" content="A clean, multilingual interface for Free Fire server change requests.">
<title>Free Fire Server Change</title>
<link rel="stylesheet" href="style-v4.css?v=20260922-2">
<link rel="icon" type="image/jpeg" href="site-logo.jpg">
</head>
<body>
<div class="ambient ambient-a"></div><div class="ambient ambient-b"></div>
<header class="header" id="top">
  <a class="brand" href="#home" aria-label="Free Fire Server Change">
    <span class="brand-mark"><svg class="brand-svg" viewBox="0 0 48 48" aria-hidden="true"><defs><linearGradient id="lg" x1="8" y1="4" x2="40" y2="44"><stop stop-color="#FFE66B"/><stop offset=".5" stop-color="#FFC21A"/><stop offset="1" stop-color="#FF8A00"/></linearGradient></defs><path d="M24 3 40 9v12c0 10.5-6.4 19.3-16 24C14.4 40.3 8 31.5 8 21V9l16-6Z" fill="#10141B" stroke="url(#lg)" stroke-width="2"/><path d="m27.5 9-9 13h6l-3 12 10-15h-6l2-10Z" fill="url(#lg)"/></svg></span>
    <span class="brand-copy">FREE FIRE <b>SERVER CHANGE</b></span>
  </a>
  <nav id="nav" aria-label="Primary navigation">
    <a href="#home" data-i18n="home">Home</a>
    <a href="#service" data-i18n="service">Service</a>
    <a href="#how" data-i18n="how">How it works</a>
    <a href="track.html" data-i18n="trackNav">Track</a>
    <a href="#faq" data-i18n="faq">FAQ</a>
    <a href="#contact" data-i18n="contact">Contact</a>
  </nav>
  <div class="header-tools">
    <select id="language" aria-label="Language" data-i18n-aria="languageLabel">
      <option value="en">English</option><option value="fr">Français</option><option value="pt">Português</option><option value="es">Español</option>
    </select>
    <button class="menu" id="menu" aria-label="Open menu" aria-expanded="false">☰</button>
  </div>
</header>

<main id="home">
<section class="banner-wrap">
  <img class="site-banner" src="site-banner.jpg" alt="Free Fire Server Change">
</section>

<section class="hero wrap">
  <div class="hero-copy">
    <div class="eyebrow"><span class="pulse"></span><span data-i18n="eyebrow">SERVER CHANGE SERVICE</span></div>
    <h1 data-i18n="heroTitle">A cleaner way to submit your <em>server change</em> request.</h1>
    <p data-i18n="heroText">Choose your current region, select a destination, review your details and receive a request reference before payment.</p>
    <div class="actions">
      <a class="btn primary" href="#service" data-i18n="start">Start a request <span>→</span></a>
      <a class="btn ghost" href="track.html" data-i18n="trackCta">Track a request</a>
    </div>
    <div class="hero-note"><span>✓</span><span data-i18n="heroNote">Guided form • Request reference • Multilingual interface</span></div>
  </div>
  <aside class="hero-panel">
    <div class="panel-top"><span data-i18n="status">Service status</span><span class="status-pill"><i></i> <b>ONLINE</b></span></div>
    <div class="panel-number">01</div>
    <h3 data-i18n="panelTitle">Start with the basics</h3>
    <p data-i18n="panelText">Your request is reviewed before you continue to the payment step.</p>
    <div class="mini-progress"><span></span></div>
    <div class="mini-labels"><span>01 <small data-i18n="stepMini1">Request</small></span><span>02 <small data-i18n="stepMini2">Review</small></span><span>03 <small data-i18n="stepMini3">Payment</small></span></div>
  </aside>
</section>

<section class="stats wrap" aria-label="Service features">
  <div class="stat"><strong>23</strong><span data-i18n="regionsCount">regions available</span></div>
  <div class="stat"><strong>4</strong><span data-i18n="languages">languages available</span></div>
  <div class="stat"><strong>3</strong><span data-i18n="stepsCount">simple steps</span></div>
  <div class="stat"><strong>24/7</strong><span data-i18n="access">website access</span></div>
</section>

<section id="service" class="section wrap">
  <div class="section-head">
    <div><div class="eyebrow" data-i18n="serviceEyebrow">REQUEST</div><h2 data-i18n="serviceTitle">Tell us where you're moving</h2></div>
    <p data-i18n="serviceText">Use the form below. You will see a review screen before the request is created.</p>
  </div>
  <div class="request-shell">
    <div class="stepper"><span class="active"><b>01</b><i data-i18n="stepLabel1">Details</i></span><span><b>02</b><i data-i18n="stepLabel2">Review</i></span><span><b>03</b><i data-i18n="stepLabel3">Payment</i></span></div>
    <form id="requestForm" class="request-card">
      <div class="grid">
        <label><span data-i18n="current">Current region</span><select id="current" required><option value="" selected disabled data-i18n="selectCurrent">Select current region</option></select></label>
        <label><span data-i18n="destination">Destination region</span><select id="destination" required><option value="" selected disabled data-i18n="selectDestination">Select destination region</option></select></label>
        <label><span data-i18n="player">Player ID</span><input id="player" inputmode="numeric" pattern="[0-9]{5,15}" minlength="5" maxlength="15" required placeholder="Enter your Player ID" data-i18n-placeholder="playerPlaceholder"></label>
        <label><span data-i18n="email">Email</span><input id="email" type="email" autocomplete="email" required placeholder="you@example.com" data-i18n-placeholder="emailPlaceholder"></label>
      </div>
      <label class="check"><input id="confirm" type="checkbox" required><span data-i18n="confirm">I confirm that the information above is correct.</span></label>
      <button class="btn primary full" type="submit"><span data-i18n="continue">Review request</span><span>→</span></button>
      <p id="message" class="message" role="alert"></p>
      <p class="privacy-note">🔒 <span data-i18n="privacy">Only the information required for this request is collected in this browser interface.</span></p>
    </form>

    <div id="reviewPanel" class="review-panel" hidden>
      <div class="review-head"><div><div class="eyebrow" data-i18n="reviewEyebrow">REVIEW</div><h3 data-i18n="reviewTitle">Check your request</h3></div><span class="review-step">02</span></div>
      <div class="review-grid">
        <div><small data-i18n="current">Current region</small><strong id="reviewCurrent"></strong></div>
        <div><small data-i18n="destination">Destination region</small><strong id="reviewDestination"></strong></div>
        <div><small data-i18n="player">Player ID</small><strong id="reviewPlayer"></strong></div>
        <div><small data-i18n="email">Email</small><strong id="reviewEmail"></strong></div>
      </div>
      <div class="review-actions"><button id="editRequest" class="btn ghost" type="button" data-i18n="editRequest">Edit</button><button id="confirmRequest" class="btn primary" type="button" data-i18n="continuePayment">Continue to payment →</button></div>
    </div>
  </div>
</section>

<section id="how" class="section wrap">
  <div class="section-head"><div><div class="eyebrow" data-i18n="processEyebrow">PROCESS</div><h2 data-i18n="howTitle">Three clear steps</h2></div><p data-i18n="processText">Everything is organized so you know what happens next.</p></div>
  <div class="steps">
    <article><div class="step-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v12m0 0 5-5m-5 5-5-5M5 21h14"/></svg></div><h3 data-i18n="step1t">Submit details</h3><p data-i18n="step1">Select the current region, destination, Player ID and email.</p></article>
    <article><div class="step-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 12 2 2 4-5"/><circle cx="12" cy="12" r="9"/></svg></div><h3 data-i18n="step2t">Review</h3><p data-i18n="step2">Check every detail before a request reference is created.</p></article>
    <article><div class="step-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 7h11v11"/><path d="m18 7-6 6"/><path d="M17 17H6V6"/><path d="m6 17 5-5"/></svg></div><h3 data-i18n="step3t">Continue</h3><p data-i18n="step3">Use your reference to track the request and continue with the available payment flow.</p></article>
  </div>
</section>

<section class="section wrap trust-strip">
  <div><span class="trust-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 4 4L19 6"/></svg></span><div><strong data-i18n="trust1t">Guided submission</strong><small data-i18n="trust1">No confusing multi-page form.</small></div></div>
  <div><span class="trust-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h8l3 3v15H7z"/><path d="M15 3v4h4M10 12h5M10 16h5"/></svg></span><div><strong data-i18n="trust2t">Request reference</strong><small data-i18n="trust2">Keep your reference for tracking.</small></div></div>
  <div><span class="trust-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg></span><div><strong data-i18n="trust3t">Five languages</strong><small data-i18n="trust3">English, French, Portuguese and Spanish.</small></div></div>
</section>

<section id="faq" class="section wrap">
  <div class="section-head"><div><div class="eyebrow">FAQ</div><h2 data-i18n="faqTitle">Frequently asked questions</h2></div></div>
  <div class="faq">
    <details open><summary data-i18n="faq1q">What happens after I submit?</summary><p data-i18n="faq1a">You first review the details. After confirmation, a unique request reference is created and you continue to the payment page.</p></details>
    <details><summary data-i18n="faq2q">Can I track my request?</summary><p data-i18n="faq2a">Yes. Keep your request reference and use the Track page. This front-end version stores requests in the current browser.</p></details>
    <details><summary data-i18n="faq3q">Is this an official Garena service?</summary><p data-i18n="faq3a">No official affiliation with Garena is claimed by this website. Service availability depends on the actual authorized service behind the request.</p></details>
  </div>
</section>

<section id="track" class="section wrap track-section">
  <div class="track-cta"><div><div class="eyebrow" data-i18n="trackEyebrow">TRACK REQUEST</div><h2 data-i18n="trackTitle">Already have a reference?</h2><p data-i18n="trackText">Open the tracking page and enter your request reference.</p></div><a class="btn primary" href="track.html" data-i18n="trackButton">Track request →</a></div>
</section>

<section id="contact" class="section wrap">
  <div class="contact"><div><div class="eyebrow" data-i18n="contactEyebrow">SUPPORT</div><h2 data-i18n="contactTitle">Need help?</h2><p><span data-i18n="contactText">Contact our support team at</span> <a href="mailto:changerffserver@support.com">changerffserver@support.com</a></p></div><a class="btn primary" href="mailto:changerffserver@support.com?subject=Free%20Fire%20Server%20Change%20Support" data-i18n="emailSupport">✉ Email support</a></div>
</section>
</main>
<footer><span>© <span id="year"></span> Free Fire Server Change</span><span data-i18n="footer">Request interface • Multilingual • Mobile friendly</span></footer>
<script src="app-v3.js?v=20260922-2"></script>\n<script src="activity.js?v=20260922-2"></script>
</body>
</html>