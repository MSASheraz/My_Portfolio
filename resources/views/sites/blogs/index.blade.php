<x-my-layouts.user-main>
    <script src="https://cdn.tailwindcss.com"></script>
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
                            p4: '#e9d5ff',
                            bgDark: '#05050e',
                            bgDark2: '#08081a',
                            bgDark3: '#0b0b20',
                        }
                    },
                    letterSpacing: {
                        tightest: '-0.045em',
                    }
                }
            }
        }
    </script>

    <style>
        /* Dark-First Interactive Gradient Canvas Backdrop */
        html.dark body {
            background:
                radial-gradient(ellipse 80% 50% at 0% 0%, rgba(76, 29, 149, 0.38) 0%, transparent 55%),
                radial-gradient(ellipse 60% 40% at 100% 20%, rgba(109, 40, 217, 0.22) 0%, transparent 50%),
                radial-gradient(ellipse 50% 35% at 50% 100%, rgba(139, 92, 246, 0.14) 0%, transparent 55%),
                radial-gradient(ellipse 40% 30% at 80% 60%, rgba(124, 58, 237, 0.10) 0%, transparent 50%),
                #05050e;
        }
        html.light body {
            background: #ffffff;
        }

        /* Ambient Dynamic Shadows System Integration */
        .premium-blog-shadow {
            box-shadow: 0 8px 32px rgba(168, 85, 247, 0.20), 0 0 0 1px rgba(124, 58, 237, 0.10);
        }
        .dark .premium-blog-shadow:hover {
            box-shadow: 0 20px 60px rgba(168, 85, 247, 0.38), 0 0 0 1px rgba(168, 85, 247, 0.18);
        }
        .light .premium-blog-shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        .light .premium-blog-shadow:hover {
            box-shadow: 0 12px 40px rgba(124, 58, 237, 0.16);
        }

        /* Self-Contained Pulsating Aura Animation Engine (Unattached to Mouse Pointer) */
        .premium-portal-dot {
            position: relative;
            display: inline-block;
            width: 7px;
            height: 7px;
            border-radius: 99px;
            background: linear-gradient(135deg, #a855f7, #6366f1);
            box-shadow: 0 0 10px rgba(168, 85, 247, 0.8);
        }
        .premium-portal-dot::before {
            content: '';
            position: absolute;
            top: -4px; left: -4px; right: -4px; bottom: -4px;
            border-radius: 99px;
            border: 1px solid rgba(168, 85, 247, 0.4);
            animation: ringPulseTransform 1.8s cubic-bezier(0.25, 0, 0, 1) infinite;
        }
        @keyframes ringPulseTransform {
            0% { transform: scale(0.7); opacity: 1; }
            100% { transform: scale(2.2); opacity: 0; }
        }
    </style>

    <header id="blogsHero" class="relative pt-[calc(68px+3rem)] pb-16 px-[clamp(2rem,6vw,8rem)] overflow-hidden flex flex-col items-center text-center">
        <div class="absolute inset-0 z-0 bg-[linear-gradient(rgba(124,58,237,0.06)_1px,transparent_1px),linear-gradient(90deg,rgba(124,58,237,0.06)_1px,transparent_1px)] bg-[size:72px_72px] [mask-image:radial-gradient(ellipse_65%_65%_at_50%_50%,black_10%,transparent_100%)]"></div>
        
        <canvas id="ptCanvas" class="absolute inset-0 pointer-events-none z-0 opacity-80"></canvas>

        <div id="heroContent" class="relative z-10 max-w-[840px] mt-8 flex flex-col items-center">
            <div id="heroPill" class="inline-flex items-center gap-3 px-4 py-1.5 rounded-full bg-[rgba(124,58,237,0.06)] border border-[rgba(124,58,237,0.18)] text-[0.68rem] font-bold uppercase tracking-widest text-brand-p3 mb-8 transition-all duration-300 hover:border-[rgba(124,58,237,0.35)]">
                <span class="premium-portal-dot"></span>
                Insightful Tech Journals
            </div>
            
            <h1 class="font-syne font-extrabold text-[clamp(2.5rem,6.5vw,5rem)] leading-[1.05] tracking-tight text-[#eeeeff] dark:text-[#eeeeff] light:text-[#0a0a1a] mb-6">
                Technical Articles, <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-p via-brand-p2 to-brand-p3">Guides & Snippets</span>
            </h1>
            <p class="font-sans text-[clamp(0.95rem,1.5vw,1.1rem)] text-[#7878a0] light:text-[#5a5a80] font-light max-w-[600px] leading-relaxed">
                Exploring scalable web architectures, full-stack design patterns, clean code methodologies, and structural micro-frontends engineering insights.
            </p>
        </div>
    </header>

  
    <main class="relative z-20 px-[clamp(1.5rem,4vw,4rem)] py-16 max-w-[1320px] mx-auto w-full">
        <div id="magazineGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <article class="blog-card premium-blog-shadow group relative flex flex-col justify-between rounded-[24px] overflow-hidden bg-[rgba(255,255,255,0.04)] border border-[rgba(124,58,237,0.18)] transition-all duration-300 light:bg-[rgba(124,58,237,0.04)] light:border-[rgba(124,58,237,0.14)]">
                <div>
                    <div class="relative aspect-[16/10] overflow-hidden bg-[rgba(124,58,237,0.08)]">
                        <div class="absolute inset-0 bg-gradient-to-t from-[rgba(5,5,14,0.85)] to-transparent z-10"></div>
                        <div class="w-full h-full flex items-center justify-center text-4xl group-hover:scale-110 transition-transform duration-500 select-none">⚡</div>
                        <span class="absolute top-4 left-4 z-20 px-3 py-1 text-[0.65rem] font-bold font-syne tracking-wider uppercase bg-brand-p text-white rounded-md">Architecture</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 font-sans text-xs text-[#7878a0] light:text-[#5a5a80] mb-3">
                            <span>June 12, 2026</span>
                            <span class="w-1 h-1 bg-[rgba(124,58,237,0.4)] rounded-full"></span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="font-syne font-bold text-xl leading-snug text-[#eeeeff] dark:text-[#eeeeff] light:text-[#0a0a1a] mb-3 group-hover:text-brand-p3 transition-colors">
                            Scaling Multi-Tenant Database Structures In Complex Laravel Micro-Systems
                        </h3>
                        <p class="font-sans text-sm text-[#7878a0] light:text-[#5a5a80] font-light line-clamp-3 leading-relaxed">
                            An architectural walkthrough mapping out high-throughput schema separation matrices, custom global scope database migrations orchestration, and caching strategies.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between">
                    <span class="font-syne text-xs uppercase font-bold tracking-wider text-brand-p3">Read Blueprint</span>
                    <span class="text-brand-p3 text-sm transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                </div>
            </article>

            <article class="blog-card premium-blog-shadow group relative flex flex-col justify-between rounded-[24px] overflow-hidden bg-[rgba(255,255,255,0.04)] border border-[rgba(124,58,237,0.18)] transition-all duration-300 light:bg-[rgba(124,58,237,0.04)] light:border-[rgba(124,58,237,0.14)]">
                <div>
                    <div class="relative aspect-[16/10] overflow-hidden bg-[rgba(124,58,237,0.08)]">
                        <div class="absolute inset-0 bg-gradient-to-t from-[rgba(5,5,14,0.85)] to-transparent z-10"></div>
                        <div class="w-full h-full flex items-center justify-center text-4xl group-hover:scale-110 transition-transform duration-500 select-none">🌌</div>
                        <span class="absolute top-4 left-4 z-20 px-3 py-1 text-[0.65rem] font-bold font-syne tracking-wider uppercase bg-brand-p2 text-white rounded-md">UI/UX Engine</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 font-sans text-xs text-[#7878a0] light:text-[#5a5a80] mb-3">
                            <span>May 28, 2026</span>
                            <span class="w-1 h-1 bg-[rgba(124,58,237,0.4)] rounded-full"></span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="font-syne font-bold text-xl leading-snug text-[#eeeeff] dark:text-[#eeeeff] light:text-[#0a0a1a] mb-3 group-hover:text-brand-p3 transition-colors">
                            Mastering GSAP ScrollTrigger Matrix Calculations for High-Fidelity Layouts
                        </h3>
                        <p class="font-sans text-sm text-[#7878a0] light:text-[#5a5a80] font-light line-clamp-3 leading-relaxed">
                            Eliminating scrolling recalculation friction by fine-tuning intersection loops, custom coordinate systems initialization, and building immersive scrub animations.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between">
                    <span class="font-syne text-xs uppercase font-bold tracking-wider text-brand-p3">Read Blueprint</span>
                    <span class="text-brand-p3 text-sm transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                </div>
            </article>

            <article class="blog-card premium-blog-shadow group relative flex flex-col justify-between rounded-[24px] overflow-hidden bg-[rgba(255,255,255,0.04)] border border-[rgba(124,58,237,0.18)] transition-all duration-300 light:bg-[rgba(124,58,237,0.04)] light:border-[rgba(124,58,237,0.14)]">
                <div>
                    <div class="relative aspect-[16/10] overflow-hidden bg-[rgba(124,58,237,0.08)]">
                        <div class="absolute inset-0 bg-gradient-to-t from-[rgba(5,5,14,0.85)] to-transparent z-10"></div>
                        <div class="w-full h-full flex items-center justify-center text-4xl group-hover:scale-110 transition-transform duration-500 select-none">🛡️</div>
                        <span class="absolute top-4 left-4 z-20 px-3 py-1 text-[0.65rem] font-bold font-syne tracking-wider uppercase bg-brand-p3 text-white rounded-md">Security APIs</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 font-sans text-xs text-[#7878a0] light:text-[#5a5a80] mb-3">
                            <span>April 14, 2026</span>
                            <span class="w-1 h-1 bg-[rgba(124,58,237,0.4)] rounded-full"></span>
                            <span>12 min read</span>
                        </div>
                        <h3 class="font-syne font-bold text-xl leading-snug text-[#eeeeff] dark:text-[#eeeeff] light:text-[#0a0a1a] mb-3 group-hover:text-brand-p3 transition-colors">
                            Building Resilient Resilience Patterns into OAuth2 Token Endpoint Pipelines
                        </h3>
                        <p class="font-sans text-sm text-[#7878a0] light:text-[#5a5a80] font-light line-clamp-3 leading-relaxed">
                            How to bulletproof your infrastructure controllers using advanced cryptographic handshakes, dynamic state verification systems, and server route optimization.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-4 border-t border-[rgba(124,58,237,0.08)] flex items-center justify-between">
                    <span class="font-syne text-xs uppercase font-bold tracking-wider text-brand-p3">Read Blueprint</span>
                    <span class="text-brand-p3 text-sm transform group-hover:translate-x-1.5 transition-transform duration-300">➔</span>
                </div>
            </article>

        </div>

        <div id="paginationTrack" class="mt-20 flex items-center justify-center gap-2 font-syne font-bold text-xs uppercase tracking-wider">
            <button class="w-10 h-10 rounded-xl flex items-center justify-center bg-[rgba(255,255,255,0.03)] border border-[rgba(124,58,237,0.12)] text-[#eeeeff] light:text-[#0a0a1a] opacity-50 cursor-not-allowed">◀</button>
            <button class="w-10 h-10 rounded-xl flex items-center justify-center bg-gradient-to-br from-brand-p to-brand-p2 text-white shadow-md">1</button>
            <button class="w-10 h-10 rounded-xl flex items-center justify-center bg-[rgba(255,255,255,0.03)] border border-[rgba(124,58,237,0.12)] text-[#eeeeff] light:text-[#0a0a1a] hover:bg-[rgba(124,58,237,0.08)] transition-colors">2</button>
            <button class="w-10 h-10 rounded-xl flex items-center justify-center bg-[rgba(255,255,255,0.03)] border border-[rgba(124,58,237,0.12)] text-[#eeeeff] light:text-[#0a0a1a] hover:bg-[rgba(124,58,237,0.08)] transition-colors">3</button>
            <button class="w-10 h-10 rounded-xl flex items-center justify-center bg-[rgba(255,255,255,0.03)] border border-[rgba(124,58,237,0.12)] text-[#eeeeff] light:text-[#0a0a1a] hover:bg-[rgba(124,58,237,0.08)] transition-colors">▶</button>
        </div>
    </main>

   

   

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Mobile Hamburger Drawer Toggle Logic
            const burger = document.getElementById('mobileBurger');
            const drawer = document.getElementById('mobileDrawer');
            if(burger && drawer) {
                burger.addEventListener('click', () => {
                    drawer.classList.toggle('hidden');
                    drawer.classList.toggle('flex');
                    const lines = burger.querySelectorAll('span');
                    lines[0].classList.toggle('rotate-45');
                    lines[0].classList.toggle('translate-y-2');
                    lines[1].classList.toggle('opacity-0');
                    lines[2].classList.toggle('-rotate-45');
                    lines[2].classList.toggle('-translate-y-2');
                });
            }

            // Canvas Background Particle Dynamics Physics Controller Simulation
            const canvas = document.getElementById('ptCanvas');
            if(canvas) {
                const ctx = canvas.getContext('2d');
                let pts = [];
                let m = { x: null, y: null };

                function resize() {
                    canvas.width = canvas.offsetWidth;
                    canvas.height = canvas.offsetHeight;
                }
                resize();
                window.addEventListener('resize', resize);
                window.addEventListener('mousemove', (e) => {
                    const r = canvas.getBoundingClientRect();
                    m.x = e.clientX - r.left;
                    m.y = e.clientY - r.top;
                });

                for(let i=0; i<80; i++) {
                    pts.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height,
                        r: Math.random() * 2.5 + 1,
                        vx: (Math.random() - 0.5) * 0.4,
                        vy: (Math.random() - 0.5) * 0.4,
                        o: Math.random() * 0.5 + 0.2
                    });
                }

                function loop() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    pts.forEach(p => {
                        p.x += p.vx; p.y += p.vy;
                        if(p.x < 0 || p.x > canvas.width) p.vx *= -1;
                        if(p.y < 0 || p.y > canvas.height) p.vy *= -1;

                        if(m.x && m.y) {
                            const dx = m.x - p.x;
                            const dy = m.y - p.y;
                            const dist = Math.sqrt(dx*dx + dy*dy);
                            if(dist < 120) {
                                p.x -= (dx / dist) * 0.6;
                                p.y -= (dy / dist) * 0.6;
                            }
                        }

                        ctx.beginPath();
                        ctx.arc(p.x, p.y, p.r, 0, Math.PI*2);
                        ctx.fillStyle = `rgba(168, 85, 247, ${p.o})`;
                        ctx.fill();
                    });
                    requestAnimationFrame(loop);
                }
                loop();
            }

            // GSAP 3.12.5 Component Entrance And Scroll Orchestration Transitions
            if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
                gsap.registerPlugin(ScrollTrigger);

                // Navbar Stagger Deployment
                const tlNav = gsap.timeline({ delay: 0.1 });
                tlNav.from('#navbar a[href="/"]', { x: -30, opacity: 0, duration: 0.6, ease: "power2.out" })
                     .from('#navbar .hidden.md\\:flex a, #navbar .relative', { y: -18, opacity: 0, stagger: 0.07, duration: 0.5, ease: "power2.out" }, "-=0.4")
                     .from('#themeBtn, .btn-hire', { x: 18, opacity: 0, stagger: 0.09, duration: 0.5, ease: "power2.out" }, "-=0.3");

                // Hero Content Structural Reveal
                gsap.from('#heroContent', { opacity: 0, y: 40, duration: 0.85, ease: "power2.out", delay: 0.2 });

                // Magazine Cards Stagger Layout Elevations Matrix Tracking
                const cards = document.querySelectorAll('.blog-card');
                cards.forEach((card, i) => {
                    gsap.fromTo(card, 
                        { opacity: 0, y: 60, rotationX: -10 },
                        {
                            opacity: 1, y: 0, rotationX: 0,
                            duration: 0.8,
                            ease: "power2.out",
                            scrollTrigger: {
                                trigger: card,
                                start: 'top 90%',
                                end: 'top 65%',
                                scrub: 1.2,
                                toggleActions: 'play none none reverse'
                            }
                        }
                    );
                });

                // Footer Scroll Trigger Automation System Orchestration
             

                // Infinite Static Floating WhatsApp Loop Bounce Animation Controls
                gsap.fromTo('#whatsappFloat', 
                    { y: 0 }, 
                    { y: -8, duration: 1.5, repeat: -1, yoyo: true, ease: "sine.inOut" }
                );

                // Magnetic Button Hover Physics Engine Controls Integration
                document.querySelectorAll('.btn-hire, .nl-btn, #themeBtn, #whatsappFloat').forEach(btn => {
                    btn.addEventListener('mousemove', e => {
                        const bounds = btn.getBoundingClientRect();
                        const mouseX = e.clientX - bounds.left - bounds.width / 2;
                        const mouseY = e.clientY - bounds.top - bounds.height / 2;
                        gsap.to(btn, { x: mouseX * 0.24, y: mouseY * 0.24, duration: 0.28, ease: 'power2.out' });
                    });
                    btn.addEventListener('mouseleave', () => {
                        gsap.to(btn, { x: 0, y: 0, duration: 0.6, ease: 'elastic.out(1, 0.65)' });
                    });
                });
            }
        });
    </script>
</x-my-layouts.user-main>