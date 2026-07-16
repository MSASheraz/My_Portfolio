<x-my-layouts.user-main>
  <!-- MASTERS SCRIPTS FOR GSAP, SCROLLTRIGGER & TEXT SPLITTING -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/split-type"></script>
  
  <!-- HERO SECTION -->
  <section id="hero" style="position: relative; overflow: hidden;">
    <div class="hero-grid"></div>
    <div class="hero-nebula"></div>
    <canvas id="ptCanvas"></canvas>
    
    <div class="hero-inner">
      <!-- 1. Pill Element -->
      <div class="hero-pill gsap-hero-element" id="hPill" style="opacity: 0; transform: translateY(30px);">
        <span class="pdot"></span> Available for New Projects
      </div>
      
      <!-- 2. Animated H1 Headlines with Custom Split Hooks -->
      <h1 class="hero-h1 text-hero-split" id="hH1" style="font-family: 'Syne', sans-serif;">
        <span class="h1-line1 d-block">Building</span>
        <span class="h1-line2 d-block"><span class="acc">Digital</span> <span class="out">Products</span></span>
      </h1>
      
      <!-- 3. Subtitle Description -->
      <p class="hero-sub gsap-hero-element" id="hSub" style="opacity: 0; transform: translateY(30px);">
        Full-Stack Developer crafting scalable web apps &amp; clean APIs — <span id="typeSpan"></span><span class="caret"></span>
      </p>
      
      <!-- 4. CTA Buttons Group -->
      <div class="hero-btns gsap-hero-element" id="hBtns" style="opacity: 0; transform: translateY(30px); display: flex; gap: 1rem; justify-content: center;">
        <a href="#portfolio" class="btn-prim"><span>View Portfolio →</span></a>
        <a href="#contactus" class="btn-ghost">Let's Talk</a>
      </div>
      
      <!-- 5. Numeric System Counters Stack -->
      <div class="hero-stats gsap-hero-element" id="hStats" style="opacity: 0; transform: translateY(30px);">
        <div class="hstat"><div class="hstat-n home-counter" data-target="5">0<em>+</em></div><div class="hstat-l">Years Exp</div></div>
        <div class="hstat"><div class="hstat-n home-counter" data-target="50">0<em>+</em></div><div class="hstat-l">Projects Done</div></div>
        <div class="hstat"><div class="hstat-n home-counter" data-target="100">0<em>+</em></div><div class="hstat-l">Happy Clients</div></div>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION (RESTORED WITH FLOATING BADGES & ALIGNED TO MATRIX) -->
  <section id="about" style="padding: 8rem 0; position: relative;">
    <div class="wrap">
      <div class="about-grid" style="align-items: center; gap: 5rem;">
        
        <!-- Left Visual Identity Frame with Experience Badges -->
        <div class="about-fig scroll-zoom-card" id="aboutFig" style="height: 100%; display: flex; flex-direction: column; justify-content: center; position: relative; opacity: 0; transform: scale(0.95);">
          <div class="about-card" style="position: relative; z-index: 10; display: block; overflow: hidden; border-radius: 12px;">
            <img src="{{ asset('build/assets/images/portfolio_1.jpg') }}" alt="Muhammad Sheraz Ahmad Aheer" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 10;">
            <div class="about-initials" style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; z-index: 11;">MS</div>
          </div>
          
          <!-- Premium Experience Floating Badge Elements -->
          <div class="about-badge-exp classmorphism" style="position: absolute; bottom: 20px; left: -20px; z-index: 20; background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1); padding: 12px 20px; border-radius: 8px; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
            <span style="font-family: 'Syne', sans-serif; font-size: 1.5rem; font-weight: 800; color: var(--p2); display: block; line-height: 1;">5+</span>
            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: #888;">Years Experience</span>
          </div>

          <div class="anim-ring"></div>
          <div class="anim-sq"></div>
        </div>
        
        <!-- Right Description & Typography Stack -->
        <div class="scroll-text-reveal" id="aboutTxt" style="opacity: 0; transform: translateY(40px);">
          <div class="s-eye">About Me</div>
          <h2 class="s-title" style="font-family: 'Syne', sans-serif;">Turning ideas into <span style="color:var(--p2)">scalable reality</span></h2>
          
          <p class="s-desc" style="margin-bottom: 1.25rem;">
            I'm Muhammad Sheraz Ahmad Aheer — a Full-Stack Developer from Pakistan delivering high-performance web apps, RESTful APIs, and pixel-perfect UIs to clients worldwide.
          </p>
          <p class="s-desc" style="margin-bottom: 2rem;">
            Every line of code is intentional — optimized for speed, scalability, and long-term maintainability.
          </p>
          
          <!-- Technical Chip Array Container -->
          <div class="chip-row" style="margin-bottom: 1.5rem;">
            <span class="chip">⚡ React / Next.js</span><span class="chip">🛠 Node.js</span>
            <span class="chip">🐘 PHP / Laravel</span><span class="chip">🗄 MySQL / MongoDB</span>
            <span class="chip">☁️ AWS / Docker</span><span class="chip">🎨 Tailwind / GSAP</span>
          </div>
          
          <div class="about-ctas" style="display: flex; gap: 1rem; align-items: center;">
            <a href="#contactus" class="btn-prim"><span>Get In Touch →</span></a>
            <a href="#portfolio" class="btn-ghost" style="padding: 0.75rem 1.5rem;">Explore Work</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section id="services">
    <div class="wrap">
      <div id="svcHdr" style="text-align:center">
        <div class="s-eye" style="justify-content:center">What I Do</div>
        <h2 class="s-title">Services I Offer</h2>
        <p class="s-desc" style="max-width:500px;margin:0 auto">End-to-end solutions for modern business needs.</p>
      </div>
      <div class="svc-grid">
        <div class="svc-card"><div class="svc-icon">🌐</div><div class="svc-name">Full-Stack Web Apps</div><div class="svc-text">Complete development from DB architecture to pixel-perfect UI using React, Next.js, Node.js, and Laravel.</div></div>
        <div class="svc-card"><div class="svc-icon">⚙️</div><div class="svc-name">API Development</div><div class="svc-text">Scalable RESTful and GraphQL APIs with auth, rate-limiting, documentation and performance optimized.</div></div>
        <div class="svc-card"><div class="svc-icon">🎨</div><div class="svc-name">UI/UX Development</div><div class="svc-text">Responsive, animated interfaces with Tailwind CSS and GSAP — built to impress and convert.</div></div>
        <div class="svc-card"><div class="svc-icon">🗄️</div><div class="svc-name">Database Architecture</div><div class="svc-text">Schema design, query optimization and caching for MySQL, PostgreSQL and MongoDB at scale.</div></div>
        <div class="svc-card"><div class="svc-icon">☁️</div><div class="svc-name">Cloud &amp; DevOps</div><div class="svc-text">Docker, AWS/VPS deployment, CI/CD pipelines and server management for production apps.</div></div>
        <div class="svc-card"><div class="svc-icon">🔒</div><div class="svc-name">Code Audit &amp; Review</div><div class="svc-text">Security audits, performance profiling, legacy refactoring and technical consultation.</div></div>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO SECTION -->
  <section id="portfolio">
    <div class="wrap">
      <div id="pfHdr" style="text-align:center;margin-bottom:3rem">
        <div class="s-eye" style="justify-content:center">My Work</div>
        <h2 class="s-title">Featured Portfolio</h2>
        <p class="s-desc" style="max-width:500px;margin:0 auto">Projects built with precision, shipped with pride.</p>
      </div>
    </div>
    <div class="portfolio-scroll-outer" id="pfOuter">
      <div class="portfolio-track" id="pfTrack">
        <div class="proj-card"><div class="proj-thumb"><div class="thumb-lines"></div><div class="proj-thumb-txt">SaaS</div><div class="thumb-grad"></div><span class="proj-badge">Live</span></div><div class="proj-body"><div class="proj-name">Multi-Tenant SaaS Platform</div><div class="proj-about">Complete SaaS dashboard with billing, role-based access, and real-time analytics for SMBs.</div><div class="tag-row"><span class="tag">Next.js</span><span class="tag">Node.js</span><span class="tag">PostgreSQL</span><span class="tag">Stripe</span></div><a href="#" class="proj-link">View Project →</a></div></div>
        <div class="proj-card"><div class="proj-thumb"><div class="thumb-lines"></div><div class="proj-thumb-txt">API</div><div class="thumb-grad"></div><span class="proj-badge">Open Source</span></div><div class="proj-body"><div class="proj-name">Laravel API Boilerplate</div><div class="proj-about">Modular API framework with JWT, filtering, rate limiting, and auto Swagger docs.</div><div class="tag-row"><span class="tag">Laravel</span><span class="tag">MySQL</span><span class="tag">Redis</span><span class="tag">Docker</span></div><a href="#" class="proj-link">View Project →</a></div></div>
        <div class="proj-card"><div class="proj-thumb"><div class="thumb-lines"></div><div class="proj-thumb-txt">E-COM</div><div class="thumb-grad"></div><span class="proj-badge">Client</span></div><div class="proj-body"><div class="proj-name">E-Commerce Platform</div><div class="proj-about">High-traffic ecommerce with cart, payments, inventory tracking and order management.</div><div class="tag-row"><span class="tag">React</span><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">AWS</span></div><a href="#" class="proj-link">View Project →</a></div></div>
        <div class="proj-card"><div class="proj-thumb"><div class="thumb-lines"></div><div class="proj-thumb-txt">CRM</div><div class="thumb-grad"></div><span class="proj-badge">Enterprise</span></div><div class="proj-body"><div class="proj-name">Custom CRM System</div><div class="proj-about">Customer management with pipeline tracking, email automation and reporting dashboard.</div><div class="tag-row"><span class="tag">Vue.js</span><span class="tag">Laravel</span><span class="tag">MySQL</span><span class="tag">Chart.js</span></div><a href="#" class="proj-link">View Project →</a></div></div>
        <div class="proj-card"><div class="proj-thumb"><div class="thumb-lines"></div><div class="proj-thumb-txt">APP</div><div class="thumb-grad"></div><span class="proj-badge">Mobile</span></div><div class="proj-body"><div class="proj-name">React Native Delivery App</div><div class="proj-about">Cross-platform delivery app with GPS tracking, push notifications and driver portal.</div><div class="tag-row"><span class="tag">React Native</span><span class="tag">Node.js</span><span class="tag">MongoDB</span><span class="tag">Socket.io</span></div><a href="#" class="proj-link">View Project →</a></div></div>
      </div>
    </div>
  </section>

  <!-- SKILLS SECTION -->
  <section id="skills">
    <div class="wrap">
      <div id="skHdr"><div class="s-eye">Expertise</div><h2 class="s-title">Technical Skills</h2><p class="s-desc">Each skill line slides in and bar fills as you scroll.</p></div>
      <div class="skills-cols">
        <div>
          <div class="sk"><div class="sk-row"><span class="sk-name">React / Next.js</span><span class="sk-pct">92%</span></div><div class="sk-track"><div class="sk-fill" data-p="92"></div></div></div>
          <div class="sk"><div class="sk-row"><span class="sk-name">Node.js / Express</span><span class="sk-pct">88%</span></div><div class="sk-track"><div class="sk-fill" data-p="88"></div></div></div>
          <div class="sk"><div class="sk-row"><span class="sk-name">PHP / Laravel</span><span class="sk-pct">90%</span></div><div class="sk-track"><div class="sk-fill" data-p="90"></div></div></div>
          <div class="sk"><div class="sk-row"><span class="sk-name">TypeScript</span><span class="sk-pct">82%</span></div><div class="sk-track"><div class="sk-fill" data-p="82"></div></div></div>
        </div>
        <div>
          <div class="sk"><div class="sk-row"><span class="sk-name">MySQL / PostgreSQL</span><span class="sk-pct">87%</span></div><div class="sk-track"><div class="sk-fill" data-p="87"></div></div></div>
          <div class="sk"><div class="sk-row"><span class="sk-name">MongoDB</span><span class="sk-pct">78%</span></div><div class="sk-track"><div class="sk-fill" data-p="78"></div></div></div>
          <div class="sk"><div class="sk-row"><span class="sk-name">AWS / Docker</span><span class="sk-pct">80%</span></div><div class="sk-track"><div class="sk-fill" data-p="80"></div></div></div>
          <div class="sk"><div class="sk-row"><span class="sk-name">Tailwind / GSAP</span><span class="sk-pct">95%</span></div><div class="sk-track"><div class="sk-fill" data-p="95"></div></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPERIENCE SECTION -->
  <section id="experience">
    <div class="wrap">
      <div id="expHdr"><div class="s-eye">Journey</div><h2 class="s-title">Work Experience</h2><p class="s-desc">Building products that matter, one commit at a time.</p></div>
      <div class="tl">
        <div class="tl-row" id="tlr0"><div class="tl-dot"></div><div class="tl-date">2023 — Present</div><div class="tl-role">Senior Full-Stack Developer</div><div class="tl-company">Freelance / Remote</div><div class="tl-text">Leading SaaS products, e-commerce platforms, and custom CRM systems for international clients. End-to-end delivery from architecture to production deployment.</div></div>
        <div class="tl-row" id="tlr1"><div class="tl-dot"></div><div class="tl-date">2021 — 2023</div><div class="tl-role">Full-Stack Developer</div><div class="tl-company">Tech Agency — Pakistan</div><div class="tl-text">Built client-facing web apps using Laravel, React, MySQL. Optimized backend performance by 60% and introduced Docker-based CI/CD workflows.</div></div>
        <div class="tl-row" id="tlr2"><div class="tl-dot"></div><div class="tl-date">2020 — 2021</div><div class="tl-role">Junior Web Developer</div><div class="tl-company">Startup — Lahore</div><div class="tl-text">Built PHP/jQuery web applications. Implemented responsive UIs and integrated third-party payment gateways for client projects.</div></div>
      </div>
    </div>
  </section>

  <!-- BLOGS SECTION -->
  <section id="blogs">
    <div class="wrap">
      <div id="blgHdr" style="text-align:center">
        <div class="s-eye" style="justify-content:center">Insights</div>
        <h2 class="s-title">Latest Blog Posts</h2>
        <p class="s-desc" style="max-width:500px;margin:0 auto">Thoughts on development, architecture, and modern web.</p>
      </div>
      <div class="blog-grid">
        <div class="blog-card"><div class="blog-thumb"><div class="blog-lines"></div><div class="blog-thumb-txt">01</div><div class="blog-grad"></div><span class="blog-cat">Next.js</span></div><div class="blog-body"><div class="blog-meta">June 2026 · 8 min read</div><div class="blog-title">Building Scalable Multi-Tenant Architecture with Next.js</div><div class="blog-excerpt">How I structured a SaaS platform to serve thousands of tenants with isolated data and zero-downtime deployments.</div><a href="#" class="blog-link">Read More →</a></div></div>
        <div class="blog-card"><div class="blog-thumb"><div class="blog-lines"></div><div class="blog-thumb-txt">02</div><div class="blog-grad"></div><span class="blog-cat">Laravel</span></div><div class="blog-body"><div class="blog-meta">May 2026 · 6 min read</div><div class="blog-title">Laravel API Performance: From 2s to 120ms Response Time</div><div class="blog-excerpt">Deep-dive into query optimization, Redis caching, eager loading and indexing strategies that transformed a slow API.</div><a href="#" class="blog-link">Read More →</a></div></div>
        <div class="blog-card"><div class="blog-thumb"><div class="blog-lines"></div><div class="blog-thumb-txt">03</div><div class="blog-grad"></div><span class="blog-cat">GSAP</span></div><div class="blog-body"><div class="blog-meta">April 2026 · 5 min read</div><div class="blog-title">GSAP ScrollTrigger: Scrub, Pin &amp; Stagger Explained</div><div class="blog-excerpt">Practical scroll-driven animation techniques covering scrub timelines, pinned sections and stagger sequences.</div><a href="#" class="blog-link">Read More →</a></div></div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contactus">
    <div class="wrap">
      <div id="ctHdr" style="text-align:center;margin-bottom:.5rem">
        <div class="s-eye" style="justify-content:center">Get In Touch</div>
        <h2 class="s-title">Let's Work Together</h2>
        <p class="s-desc" style="max-width:480px;margin:0 auto">Have a project in mind? I'd love to hear about it.</p>
      </div>
      <div class="contact-grid">
        <div id="ctLeft">
          <div class="ci"><div class="ci-ico">📧</div><div><div class="ci-lbl">Email</div><div class="ci-val">contact@msasheraz.com</div></div></div>
          <div class="ci"><div class="ci-ico">📱</div><div><div class="ci-lbl">WhatsApp</div><div class="ci-val">+92 300 0000000</div></div></div>
          <div class="ci"><div class="ci-ico">📍</div><div><div class="ci-lbl">Location</div><div class="ci-val">Pakistan · Remote Worldwide</div></div></div>
          <div class="ci"><div class="ci-ico">⏱️</div><div><div class="ci-lbl">Response Time</div><div class="ci-val">Within 24 hours</div></div></div>
          <div class="socials">
            <a href="#" class="soc">GitHub</a>
            <a href="#" class="soc">LinkedIn</a>
            <a href="https://wa.me/923000000000" class="soc wa">💬 WhatsApp</a>
          </div>
        </div>
        <div id="ctRight">
          <div class="fg"><label class="fl">Your Name</label><input type="text" class="fi" placeholder="Muhammad Ali"/></div>
          <div class="fg"><label class="fl">Email Address</label><input type="email" class="fi" placeholder="you@example.com"/></div>
          <div class="fg"><label class="fl">Subject</label><input type="text" class="fi" placeholder="Project Inquiry"/></div>
          <div class="fg"><label class="fl">Message</label><textarea class="fi" placeholder="Tell me about your project…"></textarea></div>
          <button class="submit"><span>Send Message ✉️</span></button>
        </div>
      </div>
    </div>
  </section>

  <!-- GSAP ENGINE CONTROL ARCHITECTURE -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        gsap.registerPlugin(ScrollTrigger);

        // 1. TIMELINE MASTER: HERO ELEMENTS STAGGER SEQUENCE
        const heroTL = gsap.timeline();
        
        heroTL.to("#hPill", { opacity: 1, y: 0, duration: 0.5, ease: "power3.out" });

        const targetH1 = document.querySelector('.text-hero-split');
        if(targetH1) {
            const splitH1 = new SplitType(targetH1, { types: 'words, chars' });
            heroTL.from(splitH1.chars, {
                opacity: 0,
                y: 25,
                duration: 0.5,
                stagger: 0.02,
                ease: "back.out(1.5)"
            }, "-=0.2");
        }

        heroTL.to(".gsap-hero-element:not(#hPill)", {
            opacity: 1,
            y: 0,
            duration: 0.6,
            stagger: 0.15,
            ease: "power2.out",
            onComplete: () => {
                // Interactive Counter Engine Trigger
                document.querySelectorAll('.home-counter').forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    let current = 0;
                    const runCounter = () => {
                        const step = target / 25;
                        if (current < target) {
                            current = Math.ceil(current + step);
                            counter.innerHTML = `${current}<em>+</em>`;
                            setTimeout(runCounter, 35);
                        } else {
                            counter.innerHTML = `${target}<em>+</em>`;
                        }
                    };
                    runCounter();
                });
            }
        }, "-=0.3");

        // 2. SCROLL ANIMATION RULES FOR RESTORED ABOUT MATRIX
        gsap.to(".scroll-zoom-card", {
            scrollTrigger: {
                trigger: "#about",
                start: "top 85%",
                end: "bottom 15%",
                toggleActions: "play reverse play reverse"
            },
            opacity: 1,
            scale: 1,
            duration: 0.8,
            ease: "power3.out"
        });

        // Left Floating Experience Badge bounce/fade stagger interaction
        gsap.from(".about-badge-exp", {
            scrollTrigger: {
                trigger: "#about",
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            x: -40,
            scale: 0.9,
            duration: 1,
            delay: 0.3,
            ease: "back.out(1.7)"
        });

        gsap.to(".scroll-text-reveal", {
            scrollTrigger: {
                trigger: "#about",
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play reverse play reverse"
            },
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out"
        });
    });
  </script>
</x-my-layouts.user-main>