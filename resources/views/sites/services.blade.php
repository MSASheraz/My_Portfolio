<x-my-layouts.user-main>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        syne: ['Syne', 'sans-serif'],
                        sans: ['DM Sans', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            p: '#7c3aed',
                            p2: '#a855f7',
                            p3: '#c084fc',
                            p4: '#e9d5ff'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        :root {
            --p: #7c3aed; --p2: #a855f7; --p3: #c084fc; --p4: #e9d5ff;
            --bg: #05050e; --bg2: #08081a; --bg3: #0b0b20; --bg4: #0e0e28;
            --ob: rgba(124,58,237,.18); --ob2: rgba(168,85,247,.38);
            --tx: #eeeeff; --tx2: #7878a0; --tx3: #3e3e60;
            --card: rgba(255,255,255,.04); --cb: rgba(255,255,255,.07);
            --sh-svc: 0 4px 24px rgba(124,58,237,.22), 0 0 0 1px rgba(124,58,237,.12);
            --sh-hover-svc: 0 16px 52px rgba(124,58,237,.42), 0 0 32px rgba(168,85,247,.18);
        }
        html.light {
            --bg: #ffffff; --bg2: #f5f3ff; --bg3: #ede9ff; --bg4: #e8e2ff;
            --ob: rgba(124,58,237,.14); --ob2: rgba(124,58,237,.28);
            --tx: #0a0a1a; --tx2: #5a5a80; --tx3: #9898bb;
            --card: rgba(124,58,237,.04); --cb: rgba(124,58,237,.10);
            --sh-svc: 0 4px 16px rgba(0,0,0,.07);
            --sh-hover-svc: 0 12px 36px rgba(124,58,237,.16);
        }
        body {
            background-color: var(--bg);
            color: var(--tx);
            overflow-x: hidden;
            transition: background-color .5s, color .5s;
        }
        
        /* Premium Smooth Interactive Matrix Style */
        html.dark body {
            background:
                radial-gradient(ellipse 80% 50% at 0% 0%, rgba(76,29,149,.38) 0%, transparent 55%),
                radial-gradient(ellipse 60% 40% at 100% 20%, rgba(109,40,217,.22) 0%, transparent 50%),
                radial-gradient(ellipse 50% 35% at 50% 100%, rgba(139,92,246,.14) 0%, transparent 55%),
                radial-gradient(ellipse 40% 30% at 80% 60%, rgba(124,58,237,.10) 0%, transparent 50%),
                #05050e;
            background-attachment: fixed;
        }
        html.light body {
            background: var(--bg);
        }
        
        .service-card {
            background-color: var(--card);
            border: 1px solid var(--ob);
            box-shadow: var(--sh-svc);
            transform-style: preserve-3d;
            perspective: 1000px;
            will-change: transform, opacity;
            transition: background-color 0.4s, border-color 0.4s, box-shadow 0.4s;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .service-card:hover {
            background-color: var(--cb);
            border-color: var(--ob2);
            box-shadow: var(--sh-hover-svc);
        }
        .grid-mask {
            background-image: linear-gradient(var(--ob) 1px, transparent 1px), linear-gradient(90deg, var(--ob) 1px, transparent 1px);
            background-size: 56px 56px;
            mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 10%, transparent 100%);
            -webkit-mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 10%, transparent 100%);
        }
        
        /* Interactive Dot Particle Canvas Layer Config */
        #dotParticleCanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 2;
        }
    </style>

    <canvas id="dotParticleCanvas"></canvas>

    <header id="servicesHero" class="relative min-h-[85vh] flex items-center justify-center pt-[140px] pb-24 px-6 overflow-hidden z-10">
        <div class="grid-mask absolute inset-0 z-0"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[var(--bg)] z-0"></div>
        
        <div id="heroTextContainer" class="relative w-full max-w-[950px] flex flex-col items-center text-center z-10">
            <div id="heroPill" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[rgba(124,58,237,0.08)] border border-[rgba(124,58,237,0.2)] text-[0.68rem] font-bold uppercase tracking-widest text-brand-p3 mb-8">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-p2 shadow-[0_0_8px_#a855f7]"></span>
                Specialized Engineering Solutions
            </div>
            <h1 id="heroH1" class="font-syne font-extrabold text-[clamp(2.5rem,6.8vw,5.5rem)] leading-[1.02] tracking-tight text-[var(--tx)] mb-6">
                Professional <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-p2 via-brand-p3 to-brand-p4">Development</span> <br>& Architecture
            </h1>
            <p id="heroSub" class="font-sans text-[clamp(0.95rem,1.6vw,1.15rem)] text-[var(--tx2)] max-w-[620px] font-light leading-relaxed">
                Empowering brands with production-ready, security-first architectures and pixel-perfect dynamic interactions.
            </p>
        </div>
    </header>

    <main class="relative z-20 px-6 sm:px-12 lg:px-24 py-24 bg-transparent">
        <div class="max-w-[1240px] mx-auto">
            
            <div id="servicesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="service-card rounded-[22px] p-8 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-[rgba(124,58,237,0.08)] to-transparent rounded-bl-full pointer-events-none"></div>
                    <div>
                        <div class="w-14 h-14 rounded-[14px] bg-[rgba(124,58,237,0.08)] border border-[rgba(124,58,237,0.15)] flex items-center justify-center text-2xl text-brand-p3 mb-8 group-hover:scale-110 group-hover:border-brand-p2 transition-transform duration-300">
                            💻
                        </div>
                        <h3 class="font-syne font-bold text-xl text-[var(--tx)] tracking-tight mb-3">Custom Web Application Development</h3>
                        <p class="font-sans text-[0.88rem] leading-relaxed text-[var(--tx2)] font-light mb-6">
                            Building fully scalable, responsive, and performance-optimized web architectures using Laravel, React, and modern micro-frontends tailored precisely to user requirements.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between text-brand-p3 text-xs font-bold font-syne tracking-wider uppercase">
                        <span>Enterprise Quality</span>
                        <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                    </div>
                </div>

                <div class="service-card rounded-[22px] p-8 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-[rgba(124,58,237,0.08)] to-transparent rounded-bl-full pointer-events-none"></div>
                    <div>
                        <div class="w-14 h-14 rounded-[14px] bg-[rgba(124,58,237,0.08)] border border-[rgba(124,58,237,0.15)] flex items-center justify-center text-2xl text-brand-p3 mb-8 group-hover:scale-110 group-hover:border-brand-p2 transition-transform duration-300">
                            🛡️
                        </div>
                        <h3 class="font-syne font-bold text-xl text-[var(--tx)] tracking-tight mb-3">Secure RESTful API Architecture</h3>
                        <p class="font-sans text-[0.88rem] leading-relaxed text-[var(--tx2)] font-light mb-6">
                            Designing resilient and completely secure API integrations, including complete OAuth2 endpoints, token authentications, webhooks, and scalable cloud request flows.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between text-brand-p3 text-xs font-bold font-syne tracking-wider uppercase">
                        <span>Security First</span>
                        <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                    </div>
                </div>

                <div class="service-card rounded-[22px] p-8 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-[rgba(124,58,237,0.08)] to-transparent rounded-bl-full pointer-events-none"></div>
                    <div>
                        <div class="w-14 h-14 rounded-[14px] bg-[rgba(124,58,237,0.08)] border border-[rgba(124,58,237,0.15)] flex items-center justify-center text-2xl text-brand-p3 mb-8 group-hover:scale-110 group-hover:border-brand-p2 transition-transform duration-300">
                            🗄️
                        </div>
                        <h3 class="font-syne font-bold text-xl text-[var(--tx)] tracking-tight mb-3">Database Design & Optimization</h3>
                        <p class="font-sans text-[0.88rem] leading-relaxed text-[var(--tx2)] font-light mb-6">
                            Structuring and scaling high-throughput SQL relational engines, index configurations, deep data migrations, caching optimizations, and custom real-time structures.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between text-brand-p3 text-xs font-bold font-syne tracking-wider uppercase">
                        <span>Optimized Flows</span>
                        <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                    </div>
                </div>

                <div class="service-card rounded-[22px] p-8 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-[rgba(124,58,237,0.08)] to-transparent rounded-bl-full pointer-events-none"></div>
                    <div>
                        <div class="w-14 h-14 rounded-[14px] bg-[rgba(124,58,237,0.08)] border border-[rgba(124,58,237,0.15)] flex items-center justify-center text-2xl text-brand-p3 mb-8 group-hover:scale-110 group-hover:border-brand-p2 transition-transform duration-300">
                            ⚡
                        </div>
                        <h3 class="font-syne font-bold text-xl text-[var(--tx)] tracking-tight mb-3">Premium UI/UX & Interaction Design</h3>
                        <p class="font-sans text-[0.88rem] leading-relaxed text-[var(--tx2)] font-light mb-6">
                            Crafting beautiful, interaction-heavy digital layers with advanced scrolling structures, premium layouts, glassmorphism systems, and immersive modern responsive aesthetics.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between text-brand-p3 text-xs font-bold font-syne tracking-wider uppercase">
                        <span>Pixel Perfect</span>
                        <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                    </div>
                </div>

                <div class="service-card rounded-[22px] p-8 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-[rgba(124,58,237,0.08)] to-transparent rounded-bl-full pointer-events-none"></div>
                    <div>
                        <div class="w-14 h-14 rounded-[14px] bg-[rgba(124,58,237,0.08)] border border-[rgba(124,58,237,0.15)] flex items-center justify-center text-2xl text-brand-p3 mb-8 group-hover:scale-110 group-hover:border-brand-p2 transition-transform duration-300">
                            🛒
                        </div>
                        <h3 class="font-syne font-bold text-xl text-[var(--tx)] tracking-tight mb-3">High-Conversion E-Commerce Engines</h3>
                        <p class="font-sans text-[0.88rem] leading-relaxed text-[var(--tx2)] font-light mb-6">
                            Developing powerful shopping storefronts equipped with highly granular custom dynamic filtering mechanisms, checkout flows, and lightning-fast item categorization.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between text-brand-p3 text-xs font-bold font-syne tracking-wider uppercase">
                        <span>Scale Ready</span>
                        <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                    </div>
                </div>

                <div class="service-card rounded-[22px] p-8 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-[rgba(124,58,237,0.08)] to-transparent rounded-bl-full pointer-events-none"></div>
                    <div>
                        <div class="w-14 h-14 rounded-[14px] bg-[rgba(124,58,237,0.08)] border border-[rgba(124,58,237,0.15)] flex items-center justify-center text-2xl text-brand-p3 mb-8 group-hover:scale-110 group-hover:border-brand-p2 transition-transform duration-300">
                            🚀
                        </div>
                        <h3 class="font-syne font-bold text-xl text-[var(--tx)] tracking-tight mb-3">DevOps & Cloud Systems Deployment</h3>
                        <p class="font-sans text-[0.88rem] leading-relaxed text-[var(--tx2)] font-light mb-6">
                            Handling production servers, optimization configurations, continuous integrations, secure SSL, automated workflows, and environment architectures.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between text-brand-p3 text-xs font-bold font-syne tracking-wider uppercase">
                        <span>Production Standard</span>
                        <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                    </div>
                </div>

            </div>

            <section class="mt-32 pt-20 border-t border-[var(--ob)]">
                <h2 id="processHeading" class="font-syne font-extrabold text-3xl sm:text-4xl text-center text-[var(--tx)] tracking-tight mb-16">
                    The Development <span class="text-brand-p2">Workflow Architecture</span>
                </h2>
                
                <div id="processContainer" class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                    <div class="process-step flex flex-col items-center text-center group">
                        <div class="w-12 h-12 rounded-full bg-[rgba(124,58,237,0.1)] border border-[var(--ob)] text-brand-p3 flex items-center justify-center font-syne font-bold mb-4 group-hover:bg-brand-p group-hover:text-white transition-colors duration-300">01</div>
                        <h4 class="font-syne font-bold text-base text-[var(--tx)] mb-2">Discovery & Spec</h4>
                        <p class="font-sans text-[0.8rem] text-[var(--tx2)] font-light leading-relaxed">Deep analysis of data tables models and client functional objectives.</p>
                    </div>
                    <div class="process-step flex flex-col items-center text-center group">
                        <div class="w-12 h-12 rounded-full bg-[rgba(124,58,237,0.1)] border border-[var(--ob)] text-brand-p3 flex items-center justify-center font-syne font-bold mb-4 group-hover:bg-brand-p group-hover:text-white transition-colors duration-300">02</div>
                        <h4 class="font-syne font-bold text-base text-[var(--tx)] mb-2">Architecture Schema</h4>
                        <p class="font-sans text-[0.8rem] text-[var(--tx2)] font-light leading-relaxed">Mapping scalable database relations, API schemas, and interface structures.</p>
                    </div>
                    <div class="process-step flex flex-col items-center text-center group">
                        <div class="w-12 h-12 rounded-full bg-[rgba(124,58,237,0.1)] border border-[var(--ob)] text-brand-p3 flex items-center justify-center font-syne font-bold mb-4 group-hover:bg-brand-p group-hover:text-white transition-colors duration-300">03</div>
                        <h4 class="font-syne font-bold text-base text-[var(--tx)] mb-2">Clean Execution</h4>
                        <p class="font-sans text-[0.8rem] text-[var(--tx2)] font-light leading-relaxed">Writing highly secure controller architectures coupled with modular layouts.</p>
                    </div>
                    <div class="process-step flex flex-col items-center text-center group">
                        <div class="w-12 h-12 rounded-full bg-[rgba(124,58,237,0.1)] border border-[var(--ob)] text-brand-p3 flex items-center justify-center font-syne font-bold mb-4 group-hover:bg-brand-p group-hover:text-white transition-colors duration-300">04</div>
                        <h4 class="font-syne font-bold text-base text-[var(--tx)] mb-2">Optimization Run</h4>
                        <p class="font-sans text-[0.8rem] text-[var(--tx2)] font-light leading-relaxed">Executing query tuning, layer minifications, and deployment parameters.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // --- Hyper Professional Ultra Visible Canvas Dot Engine ---
        const canvas = document.getElementById('dotParticleCanvas');
        const ctx = canvas.getContext('2d');
        let particlesArray = [];
        const numberOfParticles = 85; 

        let mouse = {
            x: null,
            y: null,
            radius: 160 
        };

        window.addEventListener('mousemove', (event) => {
            mouse.x = event.clientX;
            mouse.y = event.clientY;
        });

        window.addEventListener('mouseleave', () => {
            mouse.x = null;
            mouse.y = null;
        });

        function setCanvasSize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        setCanvasSize();
        window.addEventListener('resize', setCanvasSize);

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.baseSize = Math.random() * 1.8 + 0.8; 
                this.size = this.baseSize;
                this.speedX = Math.random() * 0.5 - 0.25; 
                this.speedY = Math.random() * 0.5 - 0.25;
                this.opacity = Math.random() * 0.5 + 0.3; 
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                if (this.x > canvas.width) this.x = 0;
                else if (this.x < 0) this.x = canvas.width;
                if (this.y > canvas.height) this.y = 0;
                else if (this.y < 0) this.y = canvas.height;

                // FIXED: Attraction code removed completely. Dots will not trace or pull towards mouse.
                // Proximity smooth size expansion remains intact for beautiful interaction layer.
                if (mouse.x != null && mouse.y != null) {
                    let dx = mouse.x - this.x;
                    let dy = mouse.y - this.y;
                    let distance = Math.sqrt(dx * dx + dy * dy);
                    
                    if (distance < mouse.radius) {
                        let force = (mouse.radius - distance) / mouse.radius;
                        this.size = this.baseSize * (1 + force * 0.8); 
                    } else {
                        if (this.size > this.baseSize) this.size -= 0.1;
                    }
                } else {
                    if (this.size > this.baseSize) this.size -= 0.1;
                }
            }
            draw() {
                const isDark = document.documentElement.classList.contains('dark');
                
                ctx.fillStyle = isDark 
                    ? `rgba(168, 85, 247, ${this.opacity})` 
                    : `rgba(109, 40, 217, ${this.opacity * 0.95})`; 

                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function initParticles() {
            particlesArray = [];
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }
        initParticles();

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
                particlesArray[i].draw();
            }
            // Proximity Lines Logic (Mesh Structure Simulation)
            for (let a = 0; a < particlesArray.length; a++) {
                for (let b = a; b < particlesArray.length; b++) {
                    let dx = particlesArray[a].x - particlesArray[b].x;
                    let dy = particlesArray[a].y - particlesArray[b].y;
                    let distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 95) {
                        const isDark = document.documentElement.classList.contains('dark');
                        let alpha = (1 - (distance / 95)) * 0.12;
                        ctx.strokeStyle = isDark ? `rgba(168, 85, 247, ${alpha})` : `rgba(124, 58, 237, ${alpha * 1.5})`;
                        ctx.lineWidth = 0.6;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                        ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                        ctx.stroke();
                    }
                }
            }
            requestAnimationFrame(animateParticles);
        }
        animateParticles();


        // 1. Theme Logic Controller
        const themeBtn = document.getElementById('themeBtn');
        const htmlElement = document.documentElement;

        if (localStorage.theme === 'light') {
            htmlElement.classList.remove('dark');
            htmlElement.classList.add('light');
            if(themeBtn) themeBtn.innerText = '☀️';
        } else {
            htmlElement.classList.remove('light');
            htmlElement.classList.add('dark');
            if(themeBtn) themeBtn.innerText = '🌙';
        }

        if(themeBtn) {
            themeBtn.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    htmlElement.classList.add('light');
                    themeBtn.innerText = '☀️';
                    localStorage.theme = 'light';
                } else {
                    htmlElement.classList.remove('light');
                    htmlElement.classList.add('dark');
                    themeBtn.innerText = '🌙';
                    localStorage.theme = 'dark';
                }
            });
        }

        // 2. Responsive Mobile Dropdown Drawer Menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if(hamburger && mobileMenu) {
            hamburger.addEventListener('click', () => {
                mobileMenu.classList.toggle('translate-y-[-110%]');
                mobileMenu.classList.toggle('opacity-0');
                mobileMenu.classList.toggle('pointer-events-none');
            });
        }

        // 3. Premium Hero Header Text Alignment + Body Scroller Scrub Animation
        gsap.to('#heroTextContainer', {
            scrollTrigger: {
                trigger: '#servicesHero',
                start: 'top top',
                end: 'bottom 15%',
                scrub: 1,
            },
            y: -60,
            opacity: 0.1,
            scale: 0.96,
            ease: "none"
        });

        // 4. Services Cards Smooth Body Scroller Animation with Scrubbing
        const cards = document.querySelectorAll('.service-card');
        cards.forEach((card) => {
            gsap.fromTo(card, 
                { opacity: 0, y: 70, rotationX: -15 }, 
                {
                    opacity: 1,
                    y: 0,
                    rotationX: 0,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 92%',
                        end: 'top 65%',
                        scrub: 1.2,
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // 5. Workflow Step Engine Intersection Controller (Scrub-Enabled)
        gsap.fromTo('#processHeading',
            { opacity: 0, scale: 0.95 },
            {
                opacity: 1,
                scale: 1,
                scrollTrigger: {
                    trigger: '#processHeading',
                    start: 'top 90%',
                    end: 'top 75%',
                    scrub: 1
                }
            }
        );

        gsap.fromTo('.process-step',
            { opacity: 0, y: 40 },
            {
                opacity: 1,
                y: 0,
                stagger: 0.1,
                scrollTrigger: {
                    trigger: '#processContainer',
                    start: 'top 85%',
                    end: 'top 60%',
                    scrub: 1
                }
            }
        );

        // 6. Professional Structured Footer Element Reveal on Scroller
        if(document.querySelector('.footer-col')) {
            gsap.fromTo('.footer-col',
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    stagger: 0.08,
                    scrollTrigger: {
                        trigger: '#footerGrid',
                        start: 'top 95%',
                        end: 'top 80%',
                        scrub: 0.8
                    }
                }
            );
        }

        // 7. Infinite WhatsApp Loop Controller Animation
        if(document.getElementById('whatsappFloat')) {
            gsap.fromTo('#whatsappFloat', 
                { y: 0 }, 
                { y: -8, duration: 1.5, repeat: -1, yoyo: true, ease: "sine.inOut" }
            );
        }

        // 8. Advanced Magnetic Button Hover Physics Engine
        document.querySelectorAll('.btn-hire, #themeBtn, #whatsappFloat').forEach(btn => {
            btn.addEventListener('mousemove', e => {
                const bounds = btn.getBoundingClientRect();
                const mouseX = e.clientX - bounds.left - bounds.width / 2;
                const mouseY = e.clientY - bounds.top - bounds.height / 2;
                gsap.to(btn, {
                    x: mouseX * 0.24,
                    y: mouseY * 0.24,
                    duration: 0.28,
                    ease: 'power2.out'
                });
            });
            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, { x: 0, y: 0, duration: 0.6, ease: 'elastic.out(1, 0.65)' });
            });
        });
    </script>
</x-my-layouts.user-main>