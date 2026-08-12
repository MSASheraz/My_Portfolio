<x-my-layouts.user-main>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:opsz,wght@9..40;300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Tailwind Config for exact Design System Overrides -->
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
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom Complex Ambient Layer Background Styles -->
    <style>
        :root {
            --bg-base: #05050e;
            --bg-main-from: #07071a;
            --bg-main-to: #0a0a1e;
            --tx: #eeeeff; --tx2: #7878a0; --tx3: #3e3e60;
            --sh-card: 0 8px 32px rgba(124,58,237,.22), 0 0 0 1px rgba(124,58,237,.10);
            --sh-hover: 0 20px 60px rgba(124,58,237,.38), 0 0 0 1px rgba(168,85,247,.18);
            --sh-proj: 0 12px 48px rgba(124,58,237,.28), 0 0 0 1px rgba(168,85,247,.14);
            --sh-hover-proj: 0 24px 72px rgba(124,58,237,.48), 0 0 40px rgba(168,85,247,.22);
            --card-bg: rgba(255, 255, 255, 0.04);
            --hatch-bg: #0b0b20;
        }
        html.light {
            /* Light Mode Variables precisely matched with parent canvas headers */
            --bg-base: #fbfaff;
            --bg-main-from: #fbfaff;
            --bg-main-to: #f6f4fa;
            --tx: #0a0a1a; --tx2: #5a5a80; --tx3: #8a8ab0;
            --sh-card: 0 4px 24px rgba(124,58,237,.05);
            --sh-hover: 0 12px 32px rgba(124,58,237,.12);
            --sh-proj: 0 4px 20px rgba(124,58,237,.06);
            --sh-hover-proj: 0 14px 40px rgba(124,58,237,.14);
            --card-bg: rgba(255, 255, 255, 0.75);
            --hatch-bg: #f3effa;
        }

        /* Fluid Multi-layer Background Engine */
        body {
            background-color: var(--bg-base);
            transition: background-color 0.4s ease;
        }
        html.dark body {
            background:
                radial-gradient(ellipse 80% 50% at 0% 0%, rgba(76,29,149,.38) 0%, transparent 55%),
                radial-gradient(ellipse 60% 40% at 100% 20%, rgba(109,40,217,.22) 0%, transparent 50%),
                radial-gradient(ellipse 50% 35% at 50% 100%, rgba(139,92,246,.14) 0%, transparent 55%),
                radial-gradient(ellipse 40% 30% at 80% 60%, rgba(124,58,237,.10) 0%, transparent 50%),
                var(--bg-base);
        }
        html.light body {
            background:
                radial-gradient(ellipse 80% 50% at 0% 0%, rgba(168,85,247,.08) 0%, transparent 55%),
                radial-gradient(ellipse 60% 40% at 100% 20%, rgba(124,58,237,.05) 0%, transparent 50%),
                var(--bg-base);
        }

        /* Custom Project Hatching Mask */
        .hatching-pattern {
            background-color: var(--hatch-bg);
            background-image: repeating-linear-gradient(45deg, rgba(124,58,237,.04) 0, rgba(124,58,237,.04) 1px, transparent 0, transparent 50%);
            background-size: 16px 16px;
        }
        
        /* Applied Core Injectable Styles */
        .custom-tx { color: var(--tx); }
        .custom-tx2 { color: var(--tx2); }
        .custom-tx3 { color: var(--tx3); }
        .sh-card { box-shadow: var(--sh-card); }
        .sh-proj { box-shadow: var(--sh-proj); }
        
        .proj-card {
            background-color: var(--card-bg);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .proj-card:hover {
            box-shadow: var(--sh-hover-proj);
            border-color: rgba(168,85,247,.35);
        }
        .stat-card {
            background-color: var(--card-bg);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .stat-card:hover {
            box-shadow: var(--sh-hover);
            border-color: rgba(124,58,237,.25);
        }
        .detail-card {
            background-color: var(--card-bg);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        .active-nav-link {
            color: #a855f7 !important;
        }
        .active-nav-link::after {
            transform: scaleX(1) !important;
            transform-origin: left !important;
        }
    </style>

    <!-- FIXED HERO AMBIENT NEBULA -->
    <div class="absolute inset-0 z-0 pointer-events-none opacity-100 light:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 55% 45% at 55% 38%, rgba(109,40,217,.26), transparent 60%), radial-gradient(ellipse 38% 28% at 10% 75%, rgba(168,85,247,.15), transparent 55%), radial-gradient(ellipse 28% 22% at 90% 10%, rgba(124,58,237,.12), transparent 52%);"></div>
    </div>
  
    <!-- HERO SECTION WITH FLOATING MATRIX (HEADER) -->
    <header id="hero" class="relative min-h-[60vh] flex items-center justify-center pt-[calc(68px+3rem)] px-[clamp(2rem,6vw,8rem)] pb-12 overflow-hidden z-10">
        <!-- Grid overlay with radial mask fade -->
        <div class="absolute inset-0 z-0 bg-[linear-gradient(rgba(124,58,237,0.12)_1px,transparent_1px),linear-gradient(90deg,rgba(124,58,237,0.12)_1px,transparent_1px)] bg-[size:72px_72px]" style="mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 5%, transparent 72%); -webkit-mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 5%, transparent 72%);"></div>
        
        <!-- Interactive Particle Elements Layer -->
        <canvas id="ptCanvas" class="absolute inset-0 w-full h-full z-10 pointer-events-none"></canvas>

        <div class="relative w-full max-w-[950px] mx-auto text-center z-20">
            <!-- Pulsing Active Project Label Badge -->
            <div id="hPill" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-purple-600/12 border border-purple-500/30 text-[0.7rem] font-bold tracking-[0.12em] uppercase text-brand-p3 mb-6 shadow-[0_0_20px_rgba(124,58,237,0.15)]">
                <span class="w-[6px] h-[6px] rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Case Study Discovery</span>
            </div>

            <!-- Header Showcase Text Stack (Project Title) -->
            <h1 id="hH1" class="font-syne font-extrabold tracking-[-0.045em] leading-[0.95] mb-6 text-[clamp(2rem,5vw,4.5rem)] custom-tx">
                <span class="block">AZ E-Commerce</span>
                <span class="inline-flex items-baseline justify-center gap-[0.22em] whitespace-nowrap">
                    <span class="text-[#a855f7]">Solar Platform</span><span class="inline-block transparent text-transparent" style="-webkit-text-stroke: 2px #7c3aed;">.</span>
                </span>
            </h1>

            <!-- Short Description Layer -->
            <p id="hSub" class="text-[clamp(0.88rem,1.4vw,1.1rem)] custom-tx2 max-w-[650px] mx-auto font-light leading-[1.8] mt-[0.9rem]">
                Bespoke enterprise architecture engineered for high-efficiency inverters, solar tracking matrices, custom array calculators, and continuous fast-checkout channels.
            </p>
        </div>
    </header>

    <!-- CASE STUDY INSIGHTS GRID & CONTENT -->
    <main class="relative z-20 px-[clamp(1.5rem,5vw,6rem)] py-12 border-t border-purple-900/14 transition-colors duration-500" style="background: linear-gradient(to bottom, var(--bg-main-from), var(--bg-main-to));">
        <div class="max-w-[1100px] mx-auto">
            
            <!-- PROJECT ARCHITECTURAL HIGHLIGHT METRICS -->
            <div id="metaGrid" class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
                <div class="detail-card p-6 rounded-2xl border border-purple-600/12 sh-card custom-tx">
                    <span class="text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] font-medium block mb-1">Role Type</span>
                    <span class="font-syne text-[1.1rem] font-bold text-brand-p3">Lead Full-Stack Eng</span>
                </div>
                <div class="detail-card p-6 rounded-2xl border border-purple-600/12 sh-card custom-tx">
                    <span class="text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] font-medium block mb-1">Target Speed</span>
                    <span class="font-syne text-[1.1rem] font-bold text-emerald-400">98/100 Lighthouse</span>
                </div>
                <div class="detail-card p-6 rounded-2xl border border-purple-600/12 sh-card custom-tx">
                    <span class="text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] font-medium block mb-1">Database Scope</span>
                    <span class="font-syne text-[1.1rem] font-bold text-brand-p3">50k+ Live SKUs</span>
                </div>
                <div class="detail-card p-6 rounded-2xl border border-purple-600/12 sh-card custom-tx">
                    <span class="text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] font-medium block mb-1">Stack Controls</span>
                    <span class="font-syne text-[1.1rem] font-bold text-brand-p3">Laravel / MySQL</span>
                </div>
            </div>

            <!-- MAIN BREAKDOWN STRUCTURAL COLUMNS -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
                
                <!-- CONTENT TRACK (LEFT/CENTER COLS) -->
                <div class="lg:col-span-2 space-y-12 custom-tx">
                    
                    <!-- DISPLAY VISUAL NODE (Image Sandbox / Hatching Frame) -->
                    <div id="showcaseView" class="w-full h-[320px] md:h-[420px] rounded-3xl overflow-hidden border border-purple-600/14 sh-proj hatching-pattern relative flex items-center justify-center">
                        <div class="absolute inset-0 bg-gradient-to-tr from-purple-600/15 via-transparent to-transparent z-10"></div>
                        <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-[#05050e]/50 to-transparent z-10"></div>
                        <div class="z-20 p-6 border border-purple-600/12 rounded-2xl backdrop-blur-md font-mono text-xs text-[#7878a0] light:text-[#3e3e60] text-center max-w-[70%] shadow-lg">
                            [ Solar Products &amp; Spare Parts Engine Interface Sandbox Frame ]
                        </div>
                    </div>

                    <!-- LONG DESCRIPTION SECTION BLOCK -->
                    <div class="section-block space-y-6">
                        <h2 class="font-syne font-bold text-2xl tracking-tight text-brand-p2">Architectural Overview</h2>
                        <p class="custom-tx2 font-light leading-relaxed text-sm sm:text-base">
                            The project demanded a highly specialized container infrastructure capable of loading nested operational parameters for industrial solar matrices. Standard e-commerce logic introduces excessive payload bloat when querying deep variant trees (inverters, solar panel selectors, and multi-tier battery connections). To solve this, a pure custom state routing matrix was initialized on top of the backend architecture.
                        </p>
                        <p class="custom-tx2 font-light leading-relaxed text-sm sm:text-base">
                            Through structured query optimizations, precise execution layers, and index validation structures inside MySQL, complex relational grids serve processing data parameters instantly. Caching pipelines backed by Redis ensure rapid server response times for real-time customer parameter adjustments under load cycles.
                        </p>
                    </div>

                    <!-- STRATEGIC CHALLENGES LAYER -->
                    <div class="section-block space-y-6">
                        <h2 class="font-syne font-bold text-2xl tracking-tight text-brand-p2">Operational Challenges</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                            <div class="p-6 border border-purple-600/12 rounded-xl bg-white/5 backdrop-blur-sm shadow-sm">
                                <h4 class="font-syne font-semibold text-[0.95rem] mb-2 text-current">Nested Grid Parameters</h4>
                                <p class="text-xs custom-tx2 font-light leading-relaxed">Solar configuration formulas cross-reference massive variables of industrial hardware nodes, physical limits, and voltage adapters sequentially.</p>
                            </div>
                            <div class="p-6 border border-purple-600/12 rounded-xl bg-white/5 backdrop-blur-sm shadow-sm">
                                <h4 class="font-syne font-semibold text-[0.95rem] mb-2 text-current">Continuous Fast-Checkout</h4>
                                <p class="text-xs custom-tx2 font-light leading-relaxed">High-frequency inventory mapping routines validate availability scripts right prior to authorization loops, avoiding deadlocks seamlessly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- METRIC & IMPLEMENTATION LOGIC -->
                    <div class="section-block space-y-4">
                        <h2 class="font-syne font-bold text-2xl tracking-tight text-brand-p2">Execution Blueprints</h2>
                        <p class="custom-tx2 font-light leading-relaxed text-sm sm:text-base">
                            Separating standard database interactions into specialized Repository Layer architectures minimized server memory saturation points. The presentation grid applies unified styles inside utility Tailwind structures, maintaining responsive layout clarity across strict data breakouts.
                        </p>
                    </div>

                </div>

                <!-- SPECIFICATIONS COLUMN TRACK (RIGHT SIDEBAR) -->
                <div id="sidebarTrack" class="space-y-8 lg:sticky lg:top-24">
                    
                    <!-- TECH SPECS BOX -->
                    <div class="detail-card p-6 rounded-2xl border border-purple-600/14 sh-card custom-tx space-y-5">
                        <h3 class="font-syne font-bold text-[1.1rem] tracking-tight border-b border-purple-600/12 pb-3">System Blueprint</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <span class="text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] block font-semibold">Core Technologies</span>
                                <div class="flex flex-wrap gap-1.5 mt-2">
                                    <span class="text-[0.64rem] font-semibold bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2.5 py-1 rounded-full">Laravel Core</span>
                                    <span class="text-[0.64rem] font-semibold bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2.5 py-1 rounded-full">MySQL Engine</span>
                                    <span class="text-[0.64rem] font-semibold bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2.5 py-1 rounded-full">Tailwind CSS</span>
                                </div>
                            </div>

                            <div>
                                <span class="text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] block font-semibold">Interface Parameters</span>
                                <div class="flex flex-wrap gap-1.5 mt-2">
                                    <span class="text-[0.64rem] font-semibold bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2.5 py-1 rounded-full">Obsidian Vibe</span>
                                    <span class="text-[0.64rem] font-semibold bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2.5 py-1 rounded-full">Fluid Vectors</span>
                                </div>
                            </div>

                            <div class="pt-3 border-t border-purple-600/12 space-y-2">
                                <div class="flex justify-between items-center text-xs py-1">
                                    <span class="custom-tx2 font-light">Client Matrix</span>
                                    <span class="font-medium text-current">AZ Power Distribution</span>
                                </div>
                                <div class="flex justify-between items-center text-xs py-1">
                                    <span class="custom-tx2 font-light">Environment</span>
                                    <span class="font-medium text-current">Production Release</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- INTERACTIVE LIVE ANCHOR ACTION -->
                    <div class="detail-card p-4 rounded-2xl border border-purple-500/20 shadow-lg text-center bg-gradient-to-br from-purple-900/10 to-transparent">
                        <button class="btn-prim w-full py-3.5 rounded-xl bg-gradient-to-br from-brand-p to-brand-p2 text-white font-syne text-[0.85rem] font-bold tracking-wide flex items-center justify-center gap-2 border-none cursor-pointer overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_32px_rgba(124,58,237,0.4)]">
                            <span>Launch Live Application →</span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- PREMIUM CALL TO ACTION BLOCK -->
    <section class="relative z-20 px-[clamp(1.5rem,5vw,6rem)] py-16 transition-colors duration-500" style="background: linear-gradient(to bottom, var(--bg-main-from), var(--bg-main-to));">
        <div class="max-w-[1100px] mx-auto">
            <div id="ctaContainer" class="p-8 sm:p-14 text-center rounded-[24px] bg-gradient-to-br from-purple-900/25 via-purple-600/8 to-purple-800/15 border border-purple-500/22 shadow-[0_16px_60px_rgba(124,58,237,0.24)] backdrop-blur-[20px] custom-tx">
                <span class="inline-flex items-center gap-2 text-[0.68rem] font-bold tracking-[0.16em] uppercase text-[#a855f7] mb-3.5">
                    <span class="w-[26px] h-[1.5px] bg-[#a855f7] block"></span> NEXT PROJECT ARCHITECTURE
                </span>
                <h2 class="font-syne font-extrabold text-[clamp(1.6rem,3.5vw,2.6rem)] tracking-tight mb-4">Bespoke Portfolio Node</h2>
                <p class="text-xs sm:text-sm custom-tx2 font-light max-w-lg mx-auto leading-relaxed mb-6">
                    Navigate to the next interactive system build layer showing clean transitions and advanced layout parameters.
                </p>
                <div class="flex justify-center">
                    <button class="btn-ghost px-8 py-3 rounded-xl bg-transparent text-current border-[1.5px] border-purple-500/35 font-syne text-[0.82rem] font-bold tracking-wide flex items-center gap-2 cursor-pointer transition-all duration-300 hover:border-brand-p2 hover:text-[#c084fc] hover:bg-purple-600/10 hover:-translate-y-1">
                        <span>Explore Next Case Study</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ENGINE SCRIPTS -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        /* ── INTERACTIVE CANVAS PARTICLES MATRIX ── */
        const cvs = document.getElementById('ptCanvas');
        if(cvs) {
            const ctx = cvs.getContext('2d');
            function rsz() { cvs.width = cvs.offsetWidth; cvs.height = cvs.offsetHeight; }
            window.addEventListener('resize', rsz); rsz();
            
            const pts = Array.from({ length: 60 }, () => ({
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

            const heroSec = document.getElementById('hero');
            if(heroSec) {
                heroSec.addEventListener('mousemove', e => {
                    const r = cvs.getBoundingClientRect();
                    const mx = (e.clientX - r.left - r.width / 2) * .012;
                    const my = (e.clientY - r.top - r.height / 2) * .012;
                    pts.forEach(p => { p.x += mx * p.r * .15; p.y += my * p.r * .15; });
                });
            }
        }

        /* ── GSAP MOUNT TIMELINE SEQUENCING ── */
        const heroTimeline = gsap.timeline({ delay: 0.2 });
        heroTimeline.fromTo('#hPill', { opacity: 0, y: -24 }, { opacity: 1, y: 0, duration: 0.65, ease: 'power3.out' })
            .fromTo('#hH1', { opacity: 0, y: 65 }, { opacity: 1, y: 0, duration: 1.05, ease: 'power3.out' }, '-=0.25')
            .fromTo('#hSub', { opacity: 0, y: 32 }, { opacity: 1, y: 0, duration: 0.75, ease: 'power3.out' }, '-=0.55')
            .fromTo('#metaGrid', { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out' }, '-=0.3');

        /* ── SCRUB CONTENT ELEMENTS TRIGGER ── */
        gsap.fromTo('#showcaseView', 
            { opacity: 0, y: 50, scale: 0.98 },
            { 
                opacity: 1, y: 0, scale: 1, ease: 'power2.out',
                scrollTrigger: {
                    trigger: '#showcaseView', 
                    start: 'top 92%', 
                    end: 'top 65%',
                    scrub: 1, 
                    toggleActions: 'play reverse play reverse'
                }
            }
        );

        const sections = document.querySelectorAll('.section-block');
        sections.forEach((sec) => {
            gsap.fromTo(sec, 
                { opacity: 0, y: 40 },
                { 
                    opacity: 1, y: 0, ease: 'power2.out',
                    scrollTrigger: {
                        trigger: sec, 
                        start: 'top 90%', 
                        end: 'top 70%',
                        scrub: 1, 
                        toggleActions: 'play reverse play reverse'
                    }
                }
            );
        });

        /* ── CTA CONTAINER PARALLAX REVEAL ── */
        gsap.fromTo('#ctaContainer',
            { opacity: 0, y: 50, scale: 0.96 },
            {
                opacity: 1, y: 0, scale: 1,
                scrollTrigger: {
                    trigger: '#ctaContainer',
                    start: 'top 92%', 
                    end: 'top 65%',
                    scrub: 1, 
                    toggleActions: 'play reverse play reverse'
                }
            }
        );

        /* ── MAGNETIC COMPONENT HOVER ENGINE ── */
        document.querySelectorAll('.btn-prim, .btn-ghost').forEach(btn => {
            btn.addEventListener('mousemove', e => {
                const rect = btn.getBoundingClientRect();
                gsap.to(btn, { 
                    x: (e.clientX - rect.left - rect.width / 2) * 0.24, 
                    y: (e.clientY - rect.top - rect.height / 2) * 0.24, 
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