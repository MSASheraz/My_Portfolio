<style>
  /* GSAP Initial State Settings - Elements hidden top offset -30px */
/* elements ko initial state mein hide rakhne ke liye taake load par jhatka na lage */
.nav-logo, 
.nav-links li, 
.nav-r #themeBtn, 
.nav-r .btn-hire, 
.nav-r #hamburger {
  opacity: 0;
  transform: translateY(-30px);
  will-change: transform, opacity;
}

/* GSAP ke chalte waqt kisi bhi CSS transition ko block karne ke liye */
.gsap-animating {
  transition: none !important;
}
</style>
<nav id="navbar">
  <a href="#hero" class="nav-logo">MSASheraz<em>.</em></a>
  <ul class="nav-links" id="navLinks">
    <li><a href="{{route('site.laynding')}}">Home</a></li>
    <li><a href="{{route('site.about')}}">About</a></li>
    <li><a href="{{route('site.services')}}">Services</a></li>
    <li><a href="{{route('site.portfolio')}}">Portfolio</a></li>
    <li><a href="{{route('site.blogs')}}">Blogs</a></li>
    <li><a href="{{route('site.contact-us')}}">Contact Us</a></li>
  </ul>
  <div class="nav-r">
    <button id="themeBtn" aria-label="Toggle theme" title="Toggle dark/light mode">☀️</button>
    <button class="btn-hire" onclick="document.querySelector('#contactus').scrollIntoView({behavior:'smooth'})">Hire Me</button>
    <button id="hamburger" aria-label="Open menu"><span></span><span></span><span></span></button>
  </div>
</nav>

<div id="mobileMenu">
  <a href="{{route('site.laynding')}}">Home</a>
  <a href="{{route('site.about')}}">About</a>
  <a href="{{route('site.services')}}">Services</a>
  <a href="{{route('site.portfolio')}}">Portfolio</a>
  <a href="{{route('site.blogs')}}">Blogs</a>
  <a href="{{route('site.contact-us')}}">Contact Us</a>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
  // Elements ko sequential order (left to right) mein target kiya
  const logoElement = gsap.utils.toArray(".nav-logo");
  const linkElements = gsap.utils.toArray(".nav-links li");
  const actionElements = gsap.utils.toArray(".nav-r #themeBtn, .nav-r .btn-hire, .nav-r #hamburger");

  // Saare elements ko ek hi array mein merge kiya
  const allNavbarItems = [...logoElement, ...linkElements, ...actionElements];

  // Animation shuru hone se pehle conflict handler class lagayi
  allNavbarItems.forEach(el => el.classList.add("gsap-animating"));

  // Web load hote hi bina scroll ke smoothly stagger shuru hoga
  gsap.to(allNavbarItems, {
    y: 0,
    opacity: 1,
    stagger: 0.08,         // Ek link ke baad dusre link ka delay (80ms)
    duration: 0.75,        // Entry speed nihayat smooth aur premium hai
    ease: "power4.out",    // High-end UI deceleration curve
    delay: 0.1,            // Page load hone ke exact 100ms baad animation shuru hogi
    onComplete: () => {
      // Animation poori hote hi class remove taake aapke baaki hover effects sahi kaam karein
      allNavbarItems.forEach(el => el.classList.remove("gsap-animating"));
    }
  });
});
</script>