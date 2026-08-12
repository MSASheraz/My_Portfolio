<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>MSASheraz — Full-Stack Developer</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<style>
/* ================================================================
   DESIGN TOKENS
================================================================ */
:root {
  --p: #7c3aed;
  --p2: #a855f7;
  --p3: #c084fc;
  --p4: #e9d5ff;
  --pg: rgba(124,58,237,.22);
  --ps: rgba(124,58,237,.10);

  /* ── DARK BG: Deep multi-layer gradient ── */
  --bg:    #05050e;
  --bg2:   #08081a;
  --bg3:   #0b0b20;
  --bg4:   #0e0e28;

  --ob:  rgba(124,58,237,.18);
  --ob2: rgba(168,85,247,.38);
  --tx:  #eeeeff;
  --tx2: #7878a0;
  --tx3: #3e3e60;
  --card: rgba(255,255,255,.04);
  --cb:   rgba(255,255,255,.07);
  --nav-h: 68px;

  /* ── DARK CARD SHADOWS: purple-tinted glows ── */
  --sh-svc:       0 4px 24px rgba(124,58,237,.22), 0 0 0 1px rgba(124,58,237,.12);
  --sh-proj:      0 8px 40px rgba(124,58,237,.28), 0 0 0 1px rgba(168,85,247,.14);
  --sh-blog:      0 4px 24px rgba(168,85,247,.20), 0 0 0 1px rgba(124,58,237,.10);
  --sh-prof:      0 16px 56px rgba(124,58,237,.32), 0 0 0 1px rgba(168,85,247,.16);
  --sh-hover-svc: 0 16px 52px rgba(124,58,237,.42), 0 0 32px rgba(168,85,247,.18);
  --sh-hover-proj:0 20px 64px rgba(124,58,237,.48), 0 0 40px rgba(168,85,247,.22);
  --sh-hover-blog:0 16px 52px rgba(168,85,247,.38), 0 0 28px rgba(124,58,237,.16);
}
html.light {
  --bg: #ffffff; --bg2: #f5f3ff; --bg3: #ede9ff; --bg4: #e8e2ff;
  --ob: rgba(124,58,237,.14); --ob2: rgba(124,58,237,.28);
  --tx: #0a0a1a; --tx2: #5a5a80; --tx3: #9898bb;
  --card: rgba(124,58,237,.04); --cb: rgba(124,58,237,.10);
  --pg: rgba(124,58,237,.09); --ps: rgba(124,58,237,.05);
  --sh-svc:       0 4px 16px rgba(0,0,0,.07);
  --sh-proj:      0 4px 20px rgba(0,0,0,.08);
  --sh-blog:      0 4px 16px rgba(0,0,0,.07);
  --sh-prof:      0 4px 20px rgba(0,0,0,.09);
  --sh-hover-svc: 0 12px 36px rgba(124,58,237,.16);
  --sh-hover-proj:0 14px 44px rgba(124,58,237,.18);
  --sh-hover-blog:0 12px 36px rgba(124,58,237,.14);
}

/* ================================================================
   RESET & BASE
================================================================ */
*,*::before,*::after { box-sizing:border-box; margin:0; padding:0; }
html { scroll-behavior:smooth; }
body {
  font-family:'DM Sans',sans-serif;
  /* ── BEAUTIFUL DARK BG: layered radial gradients ── */
  background: var(--bg);
  color: var(--tx);
  overflow-x: hidden;
  transition: background .5s, color .5s;
}
/* Dark mode body gets a gorgeous deep multi-color gradient background */
html.dark body {
  background:
    radial-gradient(ellipse 80% 50% at 0% 0%,    rgba(76,29,149,.38) 0%, transparent 55%),
    radial-gradient(ellipse 60% 40% at 100% 20%,  rgba(109,40,217,.22) 0%, transparent 50%),
    radial-gradient(ellipse 50% 35% at 50% 100%,  rgba(139,92,246,.14) 0%, transparent 55%),
    radial-gradient(ellipse 40% 30% at 80% 60%,   rgba(124,58,237,.10) 0%, transparent 50%),
    #05050e;
}
html.light body { background: var(--bg); }

h1,h2,h3,h4,h5,h6 { font-family:'Syne',sans-serif; }
a { text-decoration:none; color:inherit; }
::-webkit-scrollbar { width:3px; }
::-webkit-scrollbar-track { background:var(--bg); }
::-webkit-scrollbar-thumb { background:var(--p); border-radius:2px; }

/* ================================================================
   NAVBAR
================================================================ */
#navbar {
  position:fixed; inset:0 0 auto 0; z-index:300;
  height:var(--nav-h);
  /* ── PROFESSIONAL PADDING ── */
  padding: 0 clamp(1.5rem, 4vw, 4rem);
  display:flex; align-items:center; justify-content:space-between; gap:1rem;
  background: rgba(5,5,14,.88);
  backdrop-filter: blur(28px) saturate(180%);
  -webkit-backdrop-filter: blur(28px) saturate(180%);
  border-bottom: 1px solid var(--ob);
  transition: background .45s, border-color .45s, box-shadow .3s;
}
html.light #navbar { background: rgba(255,255,255,.92); }

.nav-logo {
  font-family:'Syne',sans-serif; font-size:1.2rem; font-weight:800;
  letter-spacing:-0.045em; color:var(--tx); flex-shrink:0; white-space:nowrap;
}
.nav-logo em { color:var(--p2); font-style:normal; }

.nav-links {
  display:flex; align-items:center; list-style:none; gap:0;
  flex:1; justify-content:center;
}
.nav-links li a {
  display:block; padding:.46rem .85rem;
  font-size:.74rem; font-weight:600;
  color:var(--tx2); text-transform:uppercase; letter-spacing:.07em;
  white-space:nowrap; position:relative; transition:color .25s;
}
.nav-links li a::after {
  content:''; position:absolute; bottom:2px; left:.85rem; right:.85rem;
  height:1.5px; background:linear-gradient(90deg,var(--p),var(--p2));
  transform:scaleX(0); transform-origin:right; transition:transform .3s;
}
.nav-links li a:hover, .nav-links li a.active { color:var(--p2); }
.nav-links li a:hover::after, .nav-links li a.active::after { transform:scaleX(1); transform-origin:left; }

.nav-r { display:flex; align-items:center; gap:.65rem; flex-shrink:0; }

/* ── THEME BTN ── */
#themeBtn {
  width:38px; height:38px; min-width:38px; border-radius:50%;
  background: rgba(124,58,237,.18);
  border: 2px solid rgba(168,85,247,.5);
  color: #c084fc; cursor:pointer; font-size:.95rem;
  display:inline-flex; align-items:center; justify-content:center;
  transition:background .3s, transform .3s, border-color .3s;
  flex-shrink:0; line-height:1;
  box-shadow: 0 0 14px rgba(124,58,237,.28);
}
html.light #themeBtn {
  background:rgba(124,58,237,.07); border-color:rgba(124,58,237,.35);
  color:var(--p); box-shadow:0 0 8px rgba(124,58,237,.12);
}
#themeBtn:hover { background:rgba(124,58,237,.32); transform:rotate(28deg) scale(1.08); border-color:var(--p2); }

.btn-hire {
  padding:.48rem 1.4rem; border-radius:8px;
  background:linear-gradient(135deg,var(--p),var(--p2)); color:#fff;
  font-family:'Syne',sans-serif; font-size:.75rem; font-weight:700;
  text-transform:uppercase; letter-spacing:.06em;
  border:none; cursor:pointer; white-space:nowrap;
  transition:transform .3s, box-shadow .3s;
}
.btn-hire:hover { transform:translateY(-2px); box-shadow:0 8px 28px rgba(124,58,237,.45); }

/* hamburger */
#hamburger {
  display:none; flex-direction:column; gap:5px;
  background:none; border:none; cursor:pointer; padding:4px; flex-shrink:0;
}
#hamburger span { display:block; width:22px; height:2px; background:var(--tx); border-radius:2px; transition:all .35s; }
#hamburger.open span:nth-child(1) { transform:rotate(45deg) translate(5px,5px); }
#hamburger.open span:nth-child(2) { opacity:0; transform:scaleX(0); }
#hamburger.open span:nth-child(3) { transform:rotate(-45deg) translate(5px,-5px); }

#mobileMenu {
  position:fixed; top:var(--nav-h); left:0; right:0; z-index:299;
  background:rgba(5,5,14,.97); backdrop-filter:blur(28px);
  border-bottom:1px solid var(--ob);
  padding:1.5rem 2rem; display:flex; flex-direction:column; gap:.4rem;
  transform:translateY(-110%); opacity:0; pointer-events:none;
  transition:transform .4s cubic-bezier(.16,1,.3,1), opacity .35s;
}
html.light #mobileMenu { background:rgba(255,255,255,.97); }
#mobileMenu.open { transform:translateY(0); opacity:1; pointer-events:all; }
#mobileMenu a {
  font-family:'Syne',sans-serif; font-size:1rem; font-weight:700;
  color:var(--tx2); text-transform:uppercase; letter-spacing:.1em;
  padding:.65rem 0; border-bottom:1px solid var(--ob); transition:color .2s;
}
#mobileMenu a:hover { color:var(--p2); }

/* ================================================================
   HERO — professional padding, fixed font size
================================================================ */
#hero {
  min-height:100vh;
  display:flex; align-items:center; justify-content:center;
  position:relative; overflow:hidden;
  /* ── PROFESSIONAL SIDE PADDING ── */
  padding: calc(var(--nav-h) + 3rem) clamp(2rem, 6vw, 8rem) 5rem;
}
.hero-grid {
  position:absolute; inset:0; z-index:0;
  background-image:
    linear-gradient(rgba(124,58,237,.12) 1px, transparent 1px),
    linear-gradient(90deg, rgba(124,58,237,.12) 1px, transparent 1px);
  background-size:72px 72px;
  mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 5%, transparent 72%);
  -webkit-mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 5%, transparent 72%);
}
/* Extra dark-mode shimmer layer */
.hero-nebula {
  position:absolute; inset:0; z-index:0; pointer-events:none;
  background:
    radial-gradient(ellipse 55% 45% at 55% 38%, rgba(109,40,217,.26) 0%, transparent 60%),
    radial-gradient(ellipse 38% 28% at 10% 75%,  rgba(168,85,247,.15) 0%, transparent 55%),
    radial-gradient(ellipse 28% 22% at 90% 10%,  rgba(124,58,237,.12) 0%, transparent 52%),
    radial-gradient(ellipse 22% 18% at 20% 20%,  rgba(192,132,252,.08) 0%, transparent 50%);
}
#ptCanvas { position:absolute; inset:0; z-index:2; pointer-events:none; }

.hero-inner {
  position:relative; z-index:3;
  width:100%; max-width:900px; margin:0 auto; text-align:center;
}

.hero-pill {
  display:inline-flex; align-items:center; gap:.5rem;
  padding:.38rem 1.15rem; border-radius:100px;
  background:rgba(124,58,237,.12); border:1px solid rgba(168,85,247,.3);
  font-size:.7rem; font-weight:700; letter-spacing:.12em;
  text-transform:uppercase; color:var(--p3); margin-bottom:2rem;
  box-shadow: 0 0 20px rgba(124,58,237,.15);
}
.pdot { width:7px; height:7px; border-radius:50%; background:#22c55e; flex-shrink:0; animation:pdot 2s infinite; }
@keyframes pdot { 0%,100%{box-shadow:0 0 0 0 rgba(34,197,94,.55)} 60%{box-shadow:0 0 0 7px rgba(34,197,94,0)} }

/* ── HERO H1: controlled size so "Products" never clips ── */
.hero-h1 {
  font-family:'Syne',sans-serif;
  font-weight:800; line-height:.95; letter-spacing:-0.045em;
  color:var(--tx); margin-bottom:.3em;
  /* Max size keeps the whole line inside container */
  font-size:clamp(2.6rem, 6.5vw, 5.8rem);
}
.h1-line1 { display:block; }
.h1-line2 {
  display:flex; align-items:baseline;
  justify-content:center; gap:.22em;
  white-space:nowrap; /* never wraps mid-word */
}
.h1-line2 .acc { color:var(--p2); }
.h1-line2 .out {
  -webkit-text-stroke:2px var(--p); color:transparent;
  display:inline-block;
}
html.light .h1-line2 .out { -webkit-text-stroke:2.5px var(--p); }

.hero-sub {
  font-size:clamp(.88rem, 1.6vw, 1.05rem); color:var(--tx2);
  max-width:560px; margin:.9rem auto 2.4rem; font-weight:300; line-height:1.84;
}
#typeSpan { color:var(--p3); }
.caret {
  display:inline-block; width:2.5px; height:.9em;
  background:var(--p2); vertical-align:middle; margin-left:2px;
  animation:blink .75s step-end infinite;
}
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0} }

.hero-btns { display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-bottom:4rem; }
.btn-prim {
  padding:.875rem 2.2rem; border-radius:10px;
  background:linear-gradient(135deg,var(--p),var(--p2)); color:#fff;
  font-family:'Syne',sans-serif; font-size:.88rem; font-weight:700; letter-spacing:.04em;
  display:inline-flex; align-items:center; gap:.5rem;
  border:none; cursor:pointer; position:relative; overflow:hidden;
  transition:transform .3s, box-shadow .3s;
}
.btn-prim::before { content:''; position:absolute; inset:0; background:linear-gradient(135deg,var(--p2),var(--p3)); opacity:0; transition:opacity .3s; }
.btn-prim:hover { transform:translateY(-3px); box-shadow:0 16px 44px rgba(124,58,237,.52); }
.btn-prim:hover::before { opacity:1; }
.btn-prim > * { position:relative; z-index:1; }

.btn-ghost {
  padding:.875rem 2.2rem; border-radius:10px;
  background:transparent; color:var(--tx);
  font-family:'Syne',sans-serif; font-size:.88rem; font-weight:700; letter-spacing:.04em;
  display:inline-flex; align-items:center; gap:.5rem;
  border:1.5px solid rgba(168,85,247,.35); cursor:pointer; transition:all .3s;
}
.btn-ghost:hover { border-color:var(--p2); color:var(--p3); background:var(--ps); transform:translateY(-3px); }

/* STATS */
.hero-stats { display:flex; gap:3.5rem; justify-content:center; flex-wrap:wrap; }
.hstat-n {
  font-family:'Syne',sans-serif;
  font-size:clamp(1.9rem, 4.5vw, 2.8rem);
  font-weight:800; color:var(--tx); letter-spacing:-0.055em; line-height:1;
  min-width:80px; display:block;
}
.hstat-n em { color:var(--p2); font-style:normal; }
.hstat-l { font-size:.64rem; color:var(--tx3); text-transform:uppercase; letter-spacing:.14em; margin-top:.28rem; }

/* ================================================================
   SECTION SCAFFOLD
================================================================ */
section { padding:7rem clamp(2rem, 6vw, 8rem); }
.wrap { max-width:1100px; margin:0 auto; }
.s-eye {
  display:inline-flex; align-items:center; gap:.65rem;
  font-size:.68rem; font-weight:700; text-transform:uppercase;
  letter-spacing:.16em; color:var(--p2); margin-bottom:.9rem;
}
.s-eye::before { content:''; width:26px; height:1.5px; background:var(--p2); display:block; }
.s-title { font-size:clamp(1.9rem,4.2vw,3rem); font-weight:800; line-height:1.06; letter-spacing:-0.04em; color:var(--tx); margin-bottom:.9rem; }
.s-desc { font-size:.93rem; color:var(--tx2); line-height:1.85; font-weight:300; }

/* Dark sections get subtle gradient overlays */
html.dark #about     { background: linear-gradient(135deg, #07071a 0%, #0a0a1e 100%); }
html.dark #services  { background: linear-gradient(135deg, #05050f 0%, #080818 100%); }
html.dark #portfolio { background: linear-gradient(135deg, #080820 0%, #0b0b22 100%); overflow:hidden; padding-bottom:0; }
html.dark #skills    { background: linear-gradient(135deg, #06061a 0%, #090920 100%); }
html.dark #experience{ background: linear-gradient(135deg, #05050e 0%, #08081a 100%); }
html.dark #blogs     { background: linear-gradient(135deg, #080820 0%, #0a0a22 100%); }
html.dark #contactus { background: linear-gradient(135deg, #06061a 0%, #090920 100%); }

html.light #about     { background:var(--bg2); }
html.light #services  { background:var(--bg); }
html.light #portfolio { background:var(--bg3); overflow:hidden; padding-bottom:0; }
html.light #skills    { background:var(--bg2); }
html.light #experience{ background:var(--bg); }
html.light #blogs     { background:var(--bg3); }
html.light #contactus { background:var(--bg2); }

/* ================================================================
   ABOUT
================================================================ */
.about-grid { display:grid; grid-template-columns:1fr 1.15fr; gap:5rem; align-items:center; }
.about-fig { position:relative; }
.about-card {
  border-radius:22px; border:1px solid var(--cb); aspect-ratio:4/5;
  background:linear-gradient(135deg,rgba(76,29,149,.12),rgba(124,58,237,.06));
  display:flex; align-items:center; justify-content:center;
  position:relative; overflow:hidden;
  box-shadow: var(--sh-prof);
  transition:box-shadow .4s;
}
.about-card::after { content:''; position:absolute; inset:0; background:linear-gradient(135deg,var(--ps),transparent 55%); }
.about-initials { font-family:'Syne',sans-serif; font-size:7rem; font-weight:800; color:var(--p2); opacity:.15; letter-spacing:-0.07em; position:relative; z-index:1; }
.about-badge {
  position:absolute; bottom:-1.5rem; right:-1.5rem;
  padding:1rem 1.3rem; border-radius:16px;
  background:rgba(8,8,24,.9); border:1px solid rgba(124,58,237,.25);
  backdrop-filter:blur(20px); display:flex; align-items:center; gap:.85rem;
  box-shadow:0 8px 32px rgba(124,58,237,.24),0 2px 8px rgba(0,0,0,.5); z-index:2;
}
html.light .about-badge { background:rgba(255,255,255,.9); box-shadow:0 4px 20px rgba(0,0,0,.12); }
.badge-ico { font-size:1.5rem; }
.badge-t { font-size:.76rem; font-weight:700; color:var(--tx); }
.badge-s { font-size:.64rem; color:var(--tx3); margin-top:.1rem; }
.anim-ring { position:absolute; top:-1.4rem; left:-1.4rem; width:74px; height:74px; border-radius:50%; border:1.5px dashed var(--p2); opacity:.2; animation:spin 20s linear infinite; }
@keyframes spin { to{transform:rotate(360deg)} }
.anim-sq { position:absolute; bottom:4rem; left:-2.2rem; width:46px; height:46px; border-radius:10px; background:linear-gradient(135deg,var(--p),var(--p2)); opacity:.14; transform:rotate(22deg); }
.chip-row { margin-top:1.5rem; display:flex; flex-wrap:wrap; gap:.35rem; }
.chip { display:inline-flex; align-items:center; gap:.35rem; padding:.3rem .85rem; border-radius:100px; background:var(--ps); border:1px solid var(--ob); font-size:.73rem; color:var(--p3); font-weight:500; }
.about-ctas { display:flex; gap:.875rem; margin-top:2rem; flex-wrap:wrap; }

/* ================================================================
   SERVICES
================================================================ */
.svc-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(290px,1fr)); gap:1.5rem; margin-top:3.5rem; }
.svc-card {
  background: rgba(255,255,255,.03);
  border:1px solid rgba(124,58,237,.14);
  border-radius:18px; padding:2.2rem; position:relative; overflow:hidden;
  backdrop-filter:blur(14px); cursor:default;
  box-shadow: var(--sh-svc);
  transition:transform .4s, box-shadow .4s, border-color .4s;
}
.svc-card::before { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:linear-gradient(90deg,var(--p),var(--p2),var(--p3)); transform:scaleX(0); transform-origin:left; transition:transform .45s; }
.svc-card::after { content:''; position:absolute; width:200px; height:200px; border-radius:50%; background:radial-gradient(circle,rgba(124,58,237,.14),transparent 70%); top:-80px; right:-60px; opacity:0; transition:opacity .4s; pointer-events:none; }
.svc-card:hover { transform:translateY(-8px); border-color:rgba(168,85,247,.28); box-shadow:var(--sh-hover-svc); }
.svc-card:hover::before { transform:scaleX(1); }
.svc-card:hover::after { opacity:1; }
.svc-icon { width:52px; height:52px; border-radius:14px; background:rgba(124,58,237,.12); border:1px solid rgba(124,58,237,.22); display:flex; align-items:center; justify-content:center; font-size:1.4rem; margin-bottom:1.3rem; position:relative; z-index:1; }
.svc-name { font-size:1.05rem; font-weight:700; color:var(--tx); margin-bottom:.5rem; position:relative; z-index:1; }
.svc-text { font-size:.83rem; color:var(--tx2); line-height:1.8; font-weight:300; position:relative; z-index:1; }

/* ================================================================
   PORTFOLIO — pinned horizontal scroll
================================================================ */
#portfolio { padding-bottom:0; }
.portfolio-scroll-outer { overflow:hidden; position:relative; width:100%; }
.portfolio-track { display:flex; gap:1.5rem; width:max-content; padding:1rem clamp(2rem,6vw,8rem) 3rem; }
.proj-card {
  width:340px; flex-shrink:0;
  background:rgba(255,255,255,.04);
  border:1px solid rgba(124,58,237,.16);
  border-radius:20px; overflow:hidden;
  backdrop-filter:blur(18px) saturate(160%);
  -webkit-backdrop-filter:blur(18px) saturate(160%);
  box-shadow:var(--sh-proj);
  transition:box-shadow .4s, border-color .4s, transform .4s;
}
html.light .proj-card { background:rgba(255,255,255,.8); border-color:rgba(124,58,237,.12); }
.proj-card:hover { box-shadow:var(--sh-hover-proj); border-color:rgba(168,85,247,.32); transform:translateY(-6px); }
.proj-thumb { height:185px; position:relative; overflow:hidden; background:var(--bg3); }
.proj-thumb img { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; object-position:center top; display:block; z-index:1; transition:transform .5s ease; }
.proj-card:hover .proj-thumb img { transform:scale(1.06); }
.proj-thumb-txt { font-family:'Syne',sans-serif; font-size:4rem; font-weight:800; color:var(--p); opacity:.12; letter-spacing:-0.06em; user-select:none; }
.thumb-lines { position:absolute; inset:0; z-index:2; background-image:repeating-linear-gradient(45deg,rgba(124,58,237,.12) 0,rgba(124,58,237,.12) 1px,transparent 0,transparent 50%); background-size:18px 18px; opacity:.25; pointer-events:none; }
.thumb-grad { position:absolute; inset:0; z-index:3; pointer-events:none; background:linear-gradient(135deg,rgba(124,58,237,.08) 0%,transparent 55%),linear-gradient(to bottom,transparent 62%,rgba(5,5,14,.35)); }
html.light .thumb-grad { background:linear-gradient(135deg,var(--ps),transparent 55%),linear-gradient(to bottom,transparent 62%,rgba(255,255,255,.35)); }
.proj-badge { position:absolute; top:.875rem; right:.875rem; z-index:4; padding:.25rem .75rem; border-radius:100px; background:linear-gradient(135deg,var(--p),var(--p2)); color:#fff; font-size:.58rem; font-weight:700; letter-spacing:.12em; text-transform:uppercase; box-shadow:0 2px 12px rgba(0,0,0,.35); }
.proj-body { padding:1.5rem; }
.proj-name { font-size:.97rem; font-weight:700; color:var(--tx); margin-bottom:.4rem; }
.proj-about { font-size:.8rem; color:var(--tx2); line-height:1.75; font-weight:300; margin-bottom:1rem; }
.tag-row { display:flex; flex-wrap:wrap; gap:.35rem; }
.tag { font-size:.64rem; font-weight:600; letter-spacing:.07em; padding:.2rem .6rem; border-radius:100px; background:rgba(124,58,237,.1); color:var(--p3); border:1px solid rgba(124,58,237,.2); }
.proj-link { display:inline-flex; align-items:center; gap:.4rem; margin-top:.9rem; font-size:.76rem; font-weight:600; color:var(--p2); letter-spacing:.04em; transition:gap .2s,color .2s; }
.proj-link:hover { gap:.7rem; color:var(--p3); }

/* ================================================================
   SKILLS
================================================================ */
.skills-cols { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:3rem; margin-top:3.5rem; }
.sk { margin-bottom:1.1rem; }
.sk-row { display:flex; justify-content:space-between; align-items:baseline; margin-bottom:.48rem; }
.sk-name { font-size:.86rem; font-weight:600; color:var(--tx); }
.sk-pct { font-size:.77rem; font-weight:700; color:var(--p2); }
.sk-track { height:5px; border-radius:3px; background:rgba(124,58,237,.14); overflow:hidden; }
.sk-fill { height:100%; border-radius:3px; width:0; background:linear-gradient(90deg,var(--p),var(--p2),var(--p3)); }

/* ================================================================
   EXPERIENCE
================================================================ */
.tl { position:relative; margin-top:3.5rem; padding-left:2.5rem; }
.tl::before { content:''; position:absolute; left:0; top:0; bottom:0; width:1px; background:linear-gradient(to bottom,var(--p),var(--p2),transparent); }
.tl-row { position:relative; margin-bottom:3rem; padding-left:1.5rem; }
.tl-dot { position:absolute; left:-2.8rem; top:.22rem; width:11px; height:11px; border-radius:50%; background:var(--p2); border:2px solid var(--bg); box-shadow:0 0 0 4px var(--pg); }
.tl-date { font-size:.66rem; font-weight:700; text-transform:uppercase; letter-spacing:.14em; color:var(--p2); margin-bottom:.28rem; }
.tl-role { font-size:1.02rem; font-weight:700; color:var(--tx); margin-bottom:.14rem; }
.tl-company { font-size:.8rem; color:var(--tx3); margin-bottom:.65rem; }
.tl-text { font-size:.82rem; color:var(--tx2); line-height:1.8; font-weight:300; }

/* ================================================================
   BLOGS
================================================================ */
.blog-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:1.5rem; margin-top:3.5rem; }
.blog-card {
  background:rgba(255,255,255,.03); border:1px solid rgba(124,58,237,.14); border-radius:18px; overflow:hidden;
  box-shadow:var(--sh-blog); transition:transform .4s, box-shadow .4s, border-color .4s;
}
.blog-card:hover { transform:translateY(-6px); border-color:rgba(168,85,247,.28); box-shadow:var(--sh-hover-blog); }
.blog-thumb { height:155px; background:var(--bg3); position:relative; display:flex; align-items:center; justify-content:center; overflow:hidden; }
.blog-thumb-txt { font-family:'Syne',sans-serif; font-size:2.8rem; font-weight:800; color:var(--p2); opacity:.12; letter-spacing:-0.05em; }
.blog-lines { position:absolute; inset:0; background-image:repeating-linear-gradient(135deg,rgba(124,58,237,.1) 0,rgba(124,58,237,.1) 1px,transparent 0,transparent 50%); background-size:20px 20px; opacity:.8; }
.blog-grad { position:absolute; inset:0; background:linear-gradient(135deg,rgba(124,58,237,.1),transparent 55%),linear-gradient(to bottom,transparent 60%,rgba(5,5,14,.55)); }
html.light .blog-grad { background:linear-gradient(135deg,var(--ps),transparent 55%),linear-gradient(to bottom,transparent 60%,rgba(255,255,255,.4)); }
.blog-cat { position:absolute; top:.875rem; left:.875rem; padding:.25rem .7rem; border-radius:100px; background:linear-gradient(135deg,var(--p),var(--p2)); color:#fff; font-size:.58rem; font-weight:700; letter-spacing:.1em; text-transform:uppercase; }
.blog-body { padding:1.3rem; }
.blog-meta { font-size:.68rem; color:var(--tx3); letter-spacing:.06em; margin-bottom:.45rem; text-transform:uppercase; }
.blog-title { font-size:.93rem; font-weight:700; color:var(--tx); line-height:1.42; margin-bottom:.55rem; }
.blog-excerpt { font-size:.79rem; color:var(--tx2); line-height:1.72; font-weight:300; margin-bottom:.9rem; }
.blog-link { display:inline-flex; align-items:center; gap:.4rem; font-size:.76rem; font-weight:600; color:var(--p2); transition:gap .2s,color .2s; }
.blog-link:hover { gap:.7rem; color:var(--p3); }

/* ================================================================
   CONTACT
================================================================ */
.contact-grid { display:grid; grid-template-columns:1fr 1.1fr; gap:4.5rem; margin-top:3.5rem; align-items:start; }
.ci { display:flex; align-items:center; gap:1rem; margin-bottom:1.5rem; }
.ci-ico { width:44px; height:44px; border-radius:12px; flex-shrink:0; background:rgba(124,58,237,.12); border:1px solid rgba(124,58,237,.22); display:flex; align-items:center; justify-content:center; font-size:1.15rem; }
.ci-lbl { font-size:.64rem; font-weight:700; text-transform:uppercase; letter-spacing:.12em; color:var(--tx3); }
.ci-val { font-size:.88rem; color:var(--tx); font-weight:500; margin-top:.1rem; }
.socials { display:flex; gap:.5rem; flex-wrap:wrap; margin-top:1.5rem; }
.soc { padding:.48rem 1rem; border-radius:8px; background:rgba(255,255,255,.04); border:1px solid rgba(124,58,237,.16); color:var(--tx2); font-size:.76rem; font-weight:600; transition:all .25s; }
.soc:hover { border-color:var(--p2); color:var(--p3); background:var(--ps); }
.soc.wa { background:#25d366; color:#fff; border-color:#25d366; }
.soc.wa:hover { background:#1db954; border-color:#1db954; }
.fg { margin-bottom:1.2rem; }
.fl { display:block; font-size:.66rem; font-weight:700; text-transform:uppercase; letter-spacing:.12em; color:var(--tx2); margin-bottom:.48rem; }
.fi { width:100%; padding:.82rem 1.05rem; border-radius:10px; background:rgba(255,255,255,.04); border:1px solid rgba(124,58,237,.16); color:var(--tx); font-family:'DM Sans',sans-serif; font-size:.88rem; outline:none; transition:border-color .3s,box-shadow .3s; }
.fi:focus { border-color:var(--p2); box-shadow:0 0 0 3px rgba(168,85,247,.14); }
.fi::placeholder { color:var(--tx3); }
textarea.fi { resize:vertical; min-height:125px; }
.submit { width:100%; padding:.9rem; border-radius:10px; background:linear-gradient(135deg,var(--p),var(--p2)); color:#fff; font-family:'Syne',sans-serif; font-size:.88rem; font-weight:700; letter-spacing:.05em; border:none; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:.6rem; transition:transform .3s,box-shadow .3s; position:relative; overflow:hidden; }
.submit::before { content:''; position:absolute; inset:0; background:linear-gradient(135deg,var(--p2),var(--p3)); opacity:0; transition:opacity .3s; }
.submit:hover { transform:translateY(-2px); box-shadow:0 14px 40px rgba(124,58,237,.48); }
.submit:hover::before { opacity:1; }
.submit span { position:relative; z-index:1; }

/* ================================================================
   FOOTER — dark beautiful gradient
================================================================ */
footer {
  position:relative; z-index:20; overflow:hidden;
  padding: 5rem clamp(2rem,6vw,8rem) 3rem;
  color:var(--tx2);
  transition:background .5s, border-color .5s;
  border-top:1px solid rgba(124,58,237,.18);
}
html.dark footer {
  background:
    radial-gradient(ellipse 70% 60% at 50% -10%, rgba(109,40,217,.2) 0%, transparent 55%),
    radial-gradient(ellipse 40% 30% at 0% 100%,  rgba(124,58,237,.12) 0%, transparent 50%),
    radial-gradient(ellipse 40% 30% at 100% 80%, rgba(168,85,247,.10) 0%, transparent 50%),
    linear-gradient(180deg, #060618 0%, #05050e 100%);
}
html.light footer { background:#fff; border-top-color:rgba(124,58,237,.12); }

/* footer glow orb top center */
.f-glow {
  position:absolute; top:-80px; left:50%; transform:translateX(-50%);
  width:600px; height:300px; border-radius:50%;
  background:radial-gradient(circle, rgba(124,58,237,.14) 0%, transparent 65%);
  pointer-events:none;
}
.footer-inner { max-width:1100px; margin:0 auto; position:relative; z-index:1; }
.footer-grid { display:grid; grid-template-columns:2fr 1fr 1fr 1.5fr; gap:2.5rem; }
.f-col { /* animated by GSAP */ }

.f-logo { font-family:'Syne',sans-serif; font-size:1.15rem; font-weight:800; color:var(--tx); letter-spacing:-0.04em; display:block; margin-bottom:.75rem; }
html.light .f-logo { color:#0a0a1a; }
.f-logo em { color:var(--p2); font-style:normal; }
.f-desc { font-size:.75rem; color:var(--tx3); line-height:1.82; font-weight:300; max-width:255px; }
html.light .f-desc { color:#6b6b90; }
.f-head { font-size:.64rem; font-weight:800; text-transform:uppercase; letter-spacing:.16em; color:var(--tx); margin-bottom:1rem; }
html.light .f-head { color:#0a0a1a; }
.f-list { list-style:none; }
.f-list li { margin-bottom:.58rem; }
.f-list a { font-size:.76rem; color:var(--tx3); transition:color .2s; }
html.light .f-list a { color:#6b6b90; }
.f-list a:hover { color:var(--p2); }
.nl-wrap { position:relative; margin-top:.5rem; }
.nl-inp { width:100%; padding:.68rem 4.5rem .68rem 1rem; border-radius:10px; background:rgba(255,255,255,.05); border:1px solid rgba(124,58,237,.18); color:var(--tx); font-family:'DM Sans',sans-serif; font-size:.75rem; outline:none; transition:border-color .3s; }
html.light .nl-inp { background:rgba(124,58,237,.05); border-color:rgba(124,58,237,.14); color:#0a0a1a; }
.nl-inp:focus { border-color:var(--p2); }
.nl-inp::placeholder { color:var(--tx3); }
.nl-btn { position:absolute; right:4px; top:50%; transform:translateY(-50%); padding:.36rem .88rem; border-radius:7px; background:linear-gradient(135deg,var(--p),var(--p2)); color:#fff; font-size:.64rem; font-weight:700; font-family:'Syne',sans-serif; letter-spacing:.06em; border:none; cursor:pointer; transition:opacity .2s; }
.nl-btn:hover { opacity:.85; }

/* footer divider line */
.f-divider {
  height:1px; margin:3rem 0 0;
  background:linear-gradient(90deg, transparent, rgba(124,58,237,.3) 30%, rgba(168,85,247,.3) 70%, transparent);
}
.footer-bottom { padding-top:1.5rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; font-size:.68rem; color:var(--tx3); }
.fb-links { display:flex; gap:1.5rem; }
.fb-links a { color:var(--tx3); transition:color .2s; }
.fb-links a:hover { color:var(--p2); }

/* ================================================================
   WHATSAPP
================================================================ */
#waBtn { position:fixed; bottom:2rem; right:2rem; z-index:400; width:56px; height:56px; border-radius:50%; background:#25d366; display:flex; align-items:center; justify-content:center; box-shadow:0 6px 24px rgba(37,211,102,.48); animation:wab 3s ease-in-out infinite; }
#waBtn:hover { transform:scale(1.1)!important; box-shadow:0 10px 40px rgba(37,211,102,.65); animation:none; }
@keyframes wab { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }
#waBtn svg { width:28px; height:28px; fill:#fff; }

/* ================================================================
   RESPONSIVE
================================================================ */
@media(max-width:960px) {
  .about-grid, .contact-grid { grid-template-columns:1fr; gap:3rem; }
  .footer-grid { grid-template-columns:1fr 1fr; }
  .nav-links { display:none; }
  #hamburger { display:flex; }
  .hero-stats { gap:2rem; }
}
@media(max-width:600px) {
  .footer-grid { grid-template-columns:1fr; }
  #navbar { padding:0 1.2rem; }
  section { padding:5rem 1.5rem; }
  footer { padding:4rem 1.5rem 2.5rem; }
}
</style>
</head>
<body>

<!-- NAVBAR -->
<x-common.user.navebar />

<!-- HERO -->
{{$slot}}
<!-- FOOTER -->
<x-common.user.footer />
<a id="waBtn" href="https://wa.me/923000000000" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<script>
gsap.registerPlugin(ScrollTrigger);

/* ── THEME ── */
const html = document.documentElement;
const themeBtn = document.getElementById('themeBtn');
let isDark = true;
html.classList.add('dark'); html.classList.remove('light');
themeBtn.textContent = '☀️';
themeBtn.addEventListener('click', () => {
  isDark = !isDark;
  html.classList.toggle('dark', isDark);
  html.classList.toggle('light', !isDark);
  themeBtn.textContent = isDark ? '☀️' : '🌙';
});

/* ── HAMBURGER ── */
const ham = document.getElementById('hamburger');
const mob = document.getElementById('mobileMenu');
ham.addEventListener('click', () => { ham.classList.toggle('open'); mob.classList.toggle('open'); });
mob.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { ham.classList.remove('open'); mob.classList.remove('open'); }));

/* ── PARTICLES ── */
const cvs = document.getElementById('ptCanvas'), ctx = cvs.getContext('2d');
function rsz() { cvs.width = cvs.offsetWidth; cvs.height = cvs.offsetHeight; }
window.addEventListener('resize', rsz); rsz();
const pts = Array.from({ length: 90 }, () => ({
  x: Math.random() * cvs.width, y: Math.random() * cvs.height,
  r: Math.random() * 1.8 + .25,
  vx: (Math.random() - .5) * .25, vy: (Math.random() - .5) * .25,
  o: Math.random() * .28 + .06
}));
(function loop() {
  ctx.clearRect(0, 0, cvs.width, cvs.height);
  pts.forEach(p => {
    ctx.beginPath(); ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
    ctx.fillStyle = `rgba(168,85,247,${p.o})`; ctx.fill();
    p.x += p.vx; p.y += p.vy;
    if (p.x < 0) p.x = cvs.width; if (p.x > cvs.width) p.x = 0;
    if (p.y < 0) p.y = cvs.height; if (p.y > cvs.height) p.y = 0;
  });
  requestAnimationFrame(loop);
})();
document.getElementById('hero').addEventListener('mousemove', e => {
  const r = cvs.getBoundingClientRect();
  const mx = (e.clientX - r.left - r.width / 2) * .012;
  const my = (e.clientY - r.top  - r.height / 2) * .012;
  pts.forEach(p => { p.x += mx * p.r * .15; p.y += my * p.r * .15; });
});

/* ── TYPING ── */
const phrases = ['one line at a time.', 'with React & Node.js.', 'for global clients.', 'fast. clean. scalable.'];
let pi = 0, ci = 0, del = false;
const tEl = document.getElementById('typeSpan');
(function typeLoop() {
  const ph = phrases[pi];
  if (!del) { tEl.textContent = ph.slice(0, ++ci); if (ci === ph.length) { del = true; setTimeout(typeLoop, 2200); return; } }
  else { tEl.textContent = ph.slice(0, --ci); if (ci === 0) { del = false; pi = (pi + 1) % phrases.length; } }
  setTimeout(typeLoop, del ? 38 : 70);
})();

/* ══════════════════════════════════════
   1. NAVBAR stagger on load
══════════════════════════════════════ */
gsap.timeline({ delay: .1 })
  .from('.nav-logo',     { opacity:0, x:-30, duration:.6,  ease:'power3.out' })
  .from('.nav-links li', { opacity:0, y:-18, duration:.5,  stagger:.07, ease:'power3.out' }, '-=.3')
  .from('.nav-r > *',    { opacity:0, x:18,  duration:.45, stagger:.09, ease:'power3.out' }, '-=.35');

/* ══════════════════════════════════════
   2. HERO sequential entrance
══════════════════════════════════════ */
gsap.set(['#hPill','#hH1','#hSub','#hBtns','#hStats'], { opacity:0 });
gsap.set('#hPill',  { y:-24 }); gsap.set('#hH1',  { y:65 });
gsap.set('#hSub',   { y:32  }); gsap.set('#hBtns',{ y:22 });
gsap.set('#hStats', { y:20  });

const heroTl = gsap.timeline({ delay:.55 });
heroTl
  .to('#hPill',  { opacity:1, y:0, duration:.65,  ease:'power3.out' })
  .to('#hH1',    { opacity:1, y:0, duration:1.05, ease:'power3.out' }, '-=.25')
  .to('#hSub',   { opacity:1, y:0, duration:.75,  ease:'power3.out' }, '-=.55')
  .to('#hBtns',  { opacity:1, y:0, duration:.6,   ease:'power3.out' }, '-=.45')
  .to('#hStats', { opacity:1, y:0, duration:.55,  ease:'power3.out' }, '-=.35');

/* ══════════════════════════════════════
   3. HERO STATS: 0 → target counters
══════════════════════════════════════ */
const statDefs = [
  { el: document.getElementById('statExp'),     target:5,  suffix:'+' },
  { el: document.getElementById('statProj'),    target:80, suffix:'+' },
  { el: document.getElementById('statClients'), target:50, suffix:'+' }
];
function animateCounters() {
  statDefs.forEach((s, i) => {
    const obj = { val: 0 };
    gsap.to(obj, {
      val: s.target, duration: 2.5, delay: i * 0.25, ease: 'power2.out',
      onUpdate() { s.el.innerHTML = Math.round(obj.val) + '<em>' + s.suffix + '</em>'; },
      onComplete() { s.el.innerHTML = s.target + '<em>' + s.suffix + '</em>'; }
    });
  });
}
heroTl.call(animateCounters, [], '+=0.3');

/* ══════════════════════════════════════
   SCRUB HELPER — enter: reveal, leave: hide
══════════════════════════════════════ */
function scrubReveal(el, from, scrubSpeed, start, end) {
  gsap.fromTo(el,
    { opacity:0, ...from },
    { opacity:1, x:0, y:0, scale:1, ease:'power2.out',
      scrollTrigger: {
        trigger: el,
        start: start || 'top 88%',
        end:   end   || 'top 42%',
        scrub: scrubSpeed || 1,
        toggleActions: 'play none none reverse'
      }
    }
  );
}

/* ══════════════════════════════════════
   4. ABOUT — parallax scrub
══════════════════════════════════════ */
scrubReveal('#aboutFig', { x:-72 }, 1.6, 'top 85%', 'top 18%');
scrubReveal('#aboutTxt', { x: 72 }, 1.6, 'top 85%', 'top 13%');
ScrollTrigger.create({
  trigger:'#aboutTxt', start:'top 78%', once:true,
  onEnter:() => gsap.from('.chip-row .chip', { opacity:0, scale:.75, duration:.45, stagger:.07, ease:'back.out(1.5)' })
});

/* ══════════════════════════════════════
   5. SECTION HEADERS
══════════════════════════════════════ */
['#svcHdr','#pfHdr','#skHdr','#expHdr','#blgHdr','#ctHdr'].forEach(sel => scrubReveal(sel, { y:50 }, 1.1));

/* ══════════════════════════════════════
   6. SERVICE CARDS — stagger + scrub
══════════════════════════════════════ */
gsap.utils.toArray('.svc-card').forEach((c, i) => {
  gsap.fromTo(c, { opacity:0, y:55, scale:.95 }, {
    opacity:1, y:0, scale:1, ease:'power3.out',
    scrollTrigger: { trigger:c, start:'top 90%', end:'top 48%', scrub:.9, toggleActions:'play none none reverse' },
    delay: i * .07
  });
});

/* ══════════════════════════════════════
   7. PORTFOLIO — cards + horizontal pin
══════════════════════════════════════ */
const track = document.getElementById('pfTrack');
gsap.utils.toArray('.proj-card').forEach((c, i) => {
  gsap.fromTo(c, { opacity:0, x:80 }, {
    opacity:1, x:0, ease:'power3.out',
    scrollTrigger: {
      trigger:'#pfOuter',
      start:`top+=${i*55} 88%`, end:`top+=${i*55+180} 42%`,
      scrub:1, toggleActions:'play none none reverse'
    }
  });
});
const getAmt = () => track.scrollWidth - window.innerWidth + 80;
gsap.to(track, {
  x: () => -(getAmt()), ease:'none',
  scrollTrigger: {
    trigger:'#pfOuter', start:'top top', end:() => '+=' + getAmt(),
    pin:true, scrub:1.2, anticipatePin:1, invalidateOnRefresh:true
  }
});

/* ══════════════════════════════════════
   8. SKILLS — line-by-line + scrub bars
══════════════════════════════════════ */
gsap.utils.toArray('.sk').forEach((sk, i) => {
  gsap.fromTo(sk, { opacity:0, x:-48 }, {
    opacity:1, x:0, ease:'power3.out',
    scrollTrigger: { trigger:sk, start:'top 90%', end:'top 52%', scrub:.9, toggleActions:'play none none reverse' },
    delay: i * .09
  });
  const fill = sk.querySelector('.sk-fill');
  gsap.fromTo(fill, { width:'0%' }, {
    width: fill.dataset.p + '%', ease:'power2.out',
    scrollTrigger: { trigger:sk, start:'top 86%', end:'top 38%', scrub:1.4, toggleActions:'play none none reverse' }
  });
});

/* ══════════════════════════════════════
   9. EXPERIENCE timeline
══════════════════════════════════════ */
['#tlr0','#tlr1','#tlr2'].forEach((id) => {
  const row = document.querySelector(id);
  gsap.fromTo(row, { opacity:0, x:-55 }, {
    opacity:1, x:0, ease:'power3.out',
    scrollTrigger: { trigger:row, start:'top 88%', end:'top 44%', scrub:.85, toggleActions:'play none none reverse' }
  });
  ScrollTrigger.create({
    trigger:row, start:'top 88%', once:true,
    onEnter:() => gsap.from(row.querySelector('.tl-dot'), { scale:0, duration:.5, ease:'back.out(2)' })
  });
});

/* ══════════════════════════════════════
   10. BLOGS — stagger scrub
══════════════════════════════════════ */
gsap.utils.toArray('.blog-card').forEach((c, i) => {
  gsap.fromTo(c, { opacity:0, y:52 }, {
    opacity:1, y:0, ease:'power3.out',
    scrollTrigger: { trigger:c, start:'top 90%', end:'top 50%', scrub:.95, toggleActions:'play none none reverse' },
    delay: i * .1
  });
});

/* ══════════════════════════════════════
   11. CONTACT
══════════════════════════════════════ */
scrubReveal('#ctLeft',  { x:-55 }, 1, 'top 85%', 'top 35%');
scrubReveal('#ctRight', { x: 55 }, 1, 'top 85%', 'top 35%');

/* ══════════════════════════════════════
   12. FOOTER — beautiful stagger animations
══════════════════════════════════════ */
// Glow orb pulses in
gsap.fromTo('.f-glow',
  { opacity:0, scale:.6 },
  { opacity:1, scale:1, duration:1.2, ease:'power2.out',
    scrollTrigger: { trigger:'#siteFooter', start:'top 90%', toggleActions:'play none none none' }
  }
);
// Columns stagger up with scrub
['#fc0','#fc1','#fc2','#fc3'].forEach((id, i) => {
  gsap.fromTo(id,
    { opacity:0, y:50 },
    { opacity:1, y:0, ease:'power3.out',
      scrollTrigger: {
        trigger:'#siteFooter', start:'top 85%', end:'top 45%',
        scrub:.85, toggleActions:'play none none reverse'
      },
      delay: i * .12
    }
  );
});
// Divider line draws from center
gsap.fromTo('#fDivider',
  { scaleX:0, transformOrigin:'center' },
  { scaleX:1, ease:'power2.inOut',
    scrollTrigger: { trigger:'#fDivider', start:'top 92%', end:'top 70%', scrub:1 }
  }
);
// Bottom row fades up
gsap.fromTo('#fBottom',
  { opacity:0, y:22 },
  { opacity:1, y:0, ease:'power3.out',
    scrollTrigger: { trigger:'#fBottom', start:'top 96%', end:'top 72%', scrub:.8 }
  }
);

/* ══════════════════════════════════════
   13. MAGNETIC HOVER
══════════════════════════════════════ */
document.querySelectorAll('.btn-prim,.btn-ghost,.btn-hire,.submit,.soc.wa,.nl-btn').forEach(btn => {
  btn.addEventListener('mousemove', e => {
    const r = btn.getBoundingClientRect();
    gsap.to(btn, { x:(e.clientX-r.left-r.width/2)*.24, y:(e.clientY-r.top-r.height/2)*.24, duration:.28, ease:'power2.out' });
  });
  btn.addEventListener('mouseleave', () => { gsap.to(btn, { x:0, y:0, duration:.6, ease:'elastic.out(1,.65)' }); });
});

/* ══════════════════════════════════════
   14. NAVBAR shadow + active
══════════════════════════════════════ */
ScrollTrigger.create({
  start:'top -50',
  onUpdate: s => {
    document.getElementById('navbar').style.boxShadow = s.progress > 0 ? '0 2px 48px rgba(0,0,0,.4)' : 'none';
  }
});
const secIds = ['hero','about','services','portfolio','skills','experience','blogs','contactus'];
const navAs  = document.querySelectorAll('.nav-links a');
function markActive() {
  let cur = '';
  secIds.forEach(id => { const el = document.getElementById(id); if (el && el.getBoundingClientRect().top <= 80) cur = id; });
  navAs.forEach(a => a.classList.toggle('active', a.getAttribute('href').replace('#','') === cur));
}
window.addEventListener('scroll', markActive, { passive:true });
markActive();
</script>
</body>
</html>