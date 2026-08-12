<x-my-layouts.user-main>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap" rel="stylesheet">
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
    <header id="hero" class="relative min-h-[75vh] flex items-center justify-center pt-[calc(68px+3rem)] px-[clamp(2rem,6vw,8rem)] pb-12 overflow-hidden z-10">
        <!-- Grid overlay with radial mask fade -->
        <div class="absolute inset-0 z-0 bg-[linear-gradient(rgba(124,58,237,0.12)_1px,transparent_1px),linear-gradient(90deg,rgba(124,58,237,0.12)_1px,transparent_1px)] bg-[size:72px_72px]" style="mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 5%, transparent 72%); -webkit-mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 5%, transparent 72%);"></div>
        
        <!-- Interactive Particle Elements Layer -->
        <canvas id="ptCanvas" class="absolute inset-0 w-full h-full z-10 pointer-events-none"></canvas>

        <div class="relative w-full max-w-[900px] mx-auto text-center z-20">
            <!-- Pulsing Active Project Label Badge -->
            <div id="hPill" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-purple-600/12 border border-purple-500/30 text-[0.7rem] font-bold tracking-[0.12em] uppercase text-brand-p3 mb-8 shadow-[0_0_20px_rgba(124,58,237,0.15)]">
                <span class="w-[7px] h-[7px] rounded-full bg-emerald-500 animate-ping"></span>
                <span>Open to New Projects</span>
            </div>

            <!-- Header Showcase Text Stack -->
            <h1 id="hH1" class="font-syne font-extrabold tracking-[-0.045em] leading-[0.95] mb-4 text-[clamp(2.6rem,6.5vw,5.8rem)] custom-tx">
                <span class="block">Work That</span>
                <span class="inline-flex items-baseline justify-center gap-[0.22em] whitespace-nowrap">
                    <span class="text-[#a855f7]">Speaks</span><span class="inline-block transparent text-transparent" style="-webkit-text-stroke: 2px #7c3aed;">.</span>
                </span>
            </h1>

            <p id="hSub" class="text-[clamp(0.88rem,1.6vw,1.05rem)] custom-tx2 max-w-[560px] mx-auto font-light leading-[1.84] mt-[0.9rem]">
                A structured collection of robust software platforms built to handle production-scale environments with clean UI frameworks.
            </p>
        </div>
    </header>

    <!-- MAIN DISPLAY COMPONENT GRID -->
    <main class="relative z-20 px-[clamp(1.5rem,5vw,6rem)] py-16 border-t border-purple-900/14 transition-colors duration-500" style="background: linear-gradient(to bottom, var(--bg-main-from), var(--bg-main-to));">
        <div class="max-w-[1100px] mx-auto">
            
            <!-- CONTROLLER TAB SELECTION FRAME -->
            <div class="w-full max-w-[420px] mx-auto mb-16 p-1.5 bg-white/5 dark:bg-white/5 border border-purple-600/14 rounded-xl flex items-center justify-between gap-1.5 backdrop-blur-md shadow-sm">
                <button data-filter="all" class="tab-btn flex-1 text-center py-2 px-3 font-syne text-[0.75rem] font-bold rounded-lg bg-gradient-to-br from-brand-p to-brand-p2 text-white shadow-md transition-all duration-300">All Systems</button>
                <button data-filter="cat-laravel" class="tab-btn flex-1 text-center py-2 px-3 font-syne text-[0.75rem] font-bold rounded-lg text-[#7878a0] light:text-[#5a5a80] hover:text-[#a855f7] transition-all duration-300">Laravel Core</button>
                <button data-filter="cat-react" class="tab-btn flex-1 text-center py-2 px-3 font-syne text-[0.75rem] font-bold rounded-lg text-[#7878a0] light:text-[#5a5a80] hover:text-[#a855f7] transition-all duration-300">React Layers</button>
            </div>

            <!-- PROJECTS DYNAMIC ROW LAYOUT -->
            <div id="projectsGrid" class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                
                <!-- CARD 1: LARAVEL -->
                <div class="proj-card group relative rounded-[20px] overflow-hidden border border-purple-600/14 shadow-md transform flex flex-col h-full custom-tx" data-category="cat-laravel">
                    <div class="h-[220px] relative w-full overflow-hidden flex items-center justify-center hatching-pattern">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 to-transparent z-10"></div>
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-[#05050e]/30 to-transparent z-10"></div>
                        <div class="z-20 p-4 border border-purple-600/12 rounded-xl backdrop-blur-sm font-mono text-xs text-[#7878a0] light:text-[#3e3e60] text-center max-w-[80%]">
                            [ Solar Products & Spare Parts Engine Interface ]
                        </div>
                        <span class="absolute top-3.5 right-3.5 z-30 bg-gradient-to-br from-brand-p to-brand-p2 text-white px-3 py-1 rounded-full text-[0.58rem] font-bold uppercase tracking-widest">Laravel</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex flex-wrap gap-1.5 mb-3.5">
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">Laravel</span>
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">Tailwind CSS</span>
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">MySQL</span>
                        </div>
                        <h3 class="font-syne font-bold text-[0.97rem] mb-2 text-current group-hover:text-[#a855f7] transition-colors duration-300">AZ E-Commerce Solar Platform</h3>
                        <p class="text-[0.8rem] custom-tx2 font-light leading-relaxed mb-6 flex-1">Bespoke architecture for high-efficiency inverters, panel selectors, tracking matrices, and continuous fast-checkout channels.</p>
                        
                    </div>
                </div>

                <!-- CARD 2: REACT -->
                <div class="proj-card group relative rounded-[20px] overflow-hidden border border-purple-600/14 shadow-md transform flex flex-col h-full custom-tx" data-category="cat-react">
                    <div class="h-[220px] relative w-full overflow-hidden flex items-center justify-center hatching-pattern">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 to-transparent z-10"></div>
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-[#05050e]/30 to-transparent z-10"></div>
                        <div class="z-20 p-4 border border-purple-600/12 rounded-xl backdrop-blur-sm font-mono text-xs text-[#7878a0] light:text-[#3e3e60] text-center max-w-[80%]">
                            [ Hyper-Purple Obsidian UI Portfolio Render ]
                        </div>
                        <span class="absolute top-3.5 right-3.5 z-30 bg-gradient-to-br from-brand-p to-brand-p2 text-white px-3 py-1 rounded-full text-[0.58rem] font-bold uppercase tracking-widest">React.js</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex flex-wrap gap-1.5 mb-3.5">
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">React.js</span>
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">Glassmorphism</span>
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">GSAP</span>
                        </div>
                        <h3 class="font-syne font-bold text-[0.97rem] mb-2 text-current group-hover:text-[#a855f7] transition-colors duration-300">Bespoke Obsidian Portfolio Node</h3>
                        <p class="text-[0.8rem] custom-tx2 font-light leading-relaxed mb-6 flex-1">Advanced presentation terminal featuring clean light/dark transitions, intersection velocity controllers, and fluid visual element styling.</p>
                        
                    </div>
                </div>

                <!-- CARD 3: LARAVEL -->
                <div class="proj-card group relative rounded-[20px] overflow-hidden border border-purple-600/14 shadow-md transform flex flex-col h-full custom-tx" data-category="cat-laravel">
                    <div class="h-[220px] relative w-full overflow-hidden flex items-center justify-center hatching-pattern">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 to-transparent z-10"></div>
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-[#05050e]/30 to-transparent z-10"></div>
                        <div class="z-20 p-4 border border-purple-600/12 rounded-xl backdrop-blur-sm font-mono text-xs text-[#7878a0] light:text-[#3e3e60] text-center max-w-[80%]">
                            [ Course Management Workspace Dashboard ]
                        </div>
                        <span class="absolute top-3.5 right-3.5 z-30 bg-gradient-to-br from-brand-p to-brand-p2 text-white px-3 py-1 rounded-full text-[0.58rem] font-bold uppercase tracking-widest">Laravel</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex flex-wrap gap-1.5 mb-3.5">
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">Laravel</span>
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">Multi-Role Dashboard</span>
                        </div>
                        <h3 class="font-syne font-bold text-[0.97rem] mb-2 text-current group-hover:text-[#a855f7] transition-colors duration-300">AI_Sekho Course Platform</h3>
                        <p class="text-[0.8rem] custom-tx2 font-light leading-relaxed mb-6 flex-1">Highly optimized course builder dashboard with multi-role permissions configurations to map streaming pipelines securely.</p>
                       
                    </div>
                </div>

                <!-- CARD 4: REACT -->
                <div class="proj-card group relative rounded-[20px] overflow-hidden border border-purple-600/14 shadow-md transform flex flex-col h-full custom-tx" data-category="cat-react">
                    <div class="h-[220px] relative w-full overflow-hidden flex items-center justify-center hatching-pattern">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 to-transparent z-10"></div>
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-[#05050e]/30 to-transparent z-10"></div>
                        <div class="z-20 p-4 border border-purple-600/12 rounded-xl backdrop-blur-sm font-mono text-xs text-[#7878a0] light:text-[#3e3e60] text-center max-w-[80%]">
                            [ Medicine Catalog Sync Window ]
                        </div>
                        <span class="absolute top-3.5 right-3.5 z-30 bg-gradient-to-br from-brand-p to-brand-p2 text-white px-3 py-1 rounded-full text-[0.58rem] font-bold uppercase tracking-widest">React</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex flex-wrap gap-1.5 mb-3.5">
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">React</span>
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">JSON</span>
                            <span class="text-[0.64rem] font-semibold tracking-wide bg-purple-600/10 text-brand-p3 border border-purple-600/20 px-2 py-0.5 rounded-full">Pharmacy</span>
                        </div>
                        <h3 class="font-syne font-bold text-[0.97rem] mb-2 text-current group-hover:text-[#a855f7] transition-colors duration-300">EverTime Medicine Gateway</h3>
                        <p class="text-[0.8rem] custom-tx2 font-light leading-relaxed mb-6 flex-1">Pharmacy application tracking catalogs, product details, shopping carts, and dynamic inventory synchronization scripts.</p>
                       
                        <
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- METRIC / STATISTICS ROW -->
    <section class="relative z-20 px-[clamp(1.5rem,5vw,6rem)] py-20 border-t border-b border-purple-900/14 transition-colors duration-500" style="background: linear-gradient(to bottom, var(--bg-main-from), var(--bg-main-to));">
        <div class="max-w-[1100px] mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            
            <!-- STAT Item 1 -->
            <div class="stat-card p-6 sm:p-8 text-center rounded-2xl border border-purple-600/12 sh-card custom-tx flex flex-col justify-center min-h-[140px]">
                <span class="counter-val block font-syne text-[clamp(2rem,4.5vw,3.2rem)] font-extrabold tracking-[-0.04em] leading-none text-current" data-target="7" data-suffix="+">0+</span>
                <span class="block text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] mt-2 font-medium">Projects Done</span>
            </div>

            <!-- STAT Item 2 -->
            <div class="stat-card p-6 sm:p-8 text-center rounded-2xl border border-purple-600/12 sh-card custom-tx flex flex-col justify-center min-h-[140px]">
                <span class="counter-val block font-syne text-[clamp(2rem,4.5vw,3.2rem)] font-extrabold tracking-[-0.04em] leading-none text-current" data-target="7" data-suffix="+">0+</span>
                <span class="block text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] mt-2 font-medium">Happy Clients</span>
            </div>

            <!-- STAT Item 3 -->
            <div class="stat-card p-6 sm:p-8 text-center rounded-2xl border border-purple-600/12 sh-card custom-tx flex flex-col justify-center min-h-[140px]">
                <span class="counter-val block font-syne text-[clamp(2rem,4.5vw,3.2rem)] font-extrabold tracking-[-0.04em] leading-none text-current" data-target="5" data-suffix="+">0+</span>
                <span class="block text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] mt-2 font-medium">Years Matrix</span>
            </div>

            <!-- STAT Item 4: FIXED SUCCESS RATE BOX -->
            <div class="stat-card p-6 sm:p-8 text-center rounded-2xl border border-purple-600/12 sh-card custom-tx flex flex-col justify-center min-h-[140px] overflow-hidden">
                <span class="counter-val block font-syne text-[clamp(1.8rem,4vw,2.8rem)] font-extrabold tracking-[-0.04em] leading-none text-current" data-target="99.9" data-suffix="%">0%</span>
                <span class="block text-[0.62rem] custom-tx3 uppercase tracking-[0.12em] mt-2 font-medium whitespace-nowrap">Success Rate</span>
            </div>

        </div>
    </section>

    <!-- PREMIUM CALL TO ACTION BLOCK -->
    <section class="relative z-20 px-[clamp(1.5rem,5vw,6rem)] py-20 transition-colors duration-500" style="background: linear-gradient(to bottom, var(--bg-main-from), var(--bg-main-to));">
        <div class="max-w-[1100px] mx-auto">
            <div id="ctaContainer" class="p-8 sm:p-16 text-center rounded-[24px] bg-gradient-to-br from-purple-900/25 via-purple-600/8 to-purple-800/15 border border-purple-500/22 shadow-[0_16px_60px_rgba(124,58,237,0.24)] backdrop-blur-[20px] custom-tx">
                <span class="inline-flex items-center gap-2 text-[0.68rem] font-bold tracking-[0.16em] uppercase text-[#a855f7] mb-3.5">
                    <span class="w-[26px] h-[1.5px] bg-[#a855f7] block"></span> READY TO BUILD?
                </span>
                <h2 class="font-syne font-extrabold text-[clamp(1.9rem,4vw,3rem)] tracking-tight mb-4">Have a Project in Mind?</h2>
                <p class="text-sm sm:text-base custom-tx2 font-light max-w-xl mx-auto leading-relaxed mb-8">
                    Let's construct clean, highly professional responsive layouts and modern operational architectures directly matching your objectives.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="btn-prim px-8 py-3.5 rounded-xl bg-gradient-to-br from-brand-p to-brand-p2 text-white font-syne text-[0.88rem] font-bold tracking-wide flex items-center gap-2 border-none cursor-pointer overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_16px_44px_rgba(124,58,237,0.52)]">
                        <span>Start a Project →</span>
                    </button>
                    <button class="btn-ghost px-8 py-3.5 rounded-xl bg-transparent text-current border-[1.5px] border-purple-500/35 font-syne text-[0.88rem] font-bold tracking-wide flex items-center gap-2 cursor-pointer transition-all duration-300 hover:border-brand-p2 hover:text-[#c084fc] hover:bg-purple-600/10 hover:-translate-y-1">
                        <span>Get In Touch</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ENGINE SCRIPTS -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        /* ── THEME SWITCHER CONTROLLER ── */
        const html = document.documentElement;
        const themeBtn = document.getElementById('themeBtn');
        let isDark = true;
        
        if(themeBtn) {
            themeBtn.addEventListener('click', () => {
                isDark = !isDark;
                html.classList.toggle('dark', isDark);
                html.classList.toggle('light', !isDark);
                themeBtn.textContent = isDark ? '☀️' : '🌙';
                ScrollTrigger.refresh();
            });
        }

        /* ── MOBILE NAVBAR HAMBURGER TOGGLE ── */
        const ham = document.getElementById('hamburger');
        const mob = document.getElementById('mobileMenu');
        if(ham && mob) {
            ham.addEventListener('click', () => { 
                mob.classList.toggle('-translate-y-[110%]');
                mob.classList.toggle('opacity-0');
                mob.classList.toggle('pointer-events-none');
            });
        }

        /* ── INTERACTIVE CANVAS PARTICLES MATRIX ── */
        const cvs = document.getElementById('ptCanvas');
        if(cvs) {
            const ctx = cvs.getContext('2d');
            function rsz() { cvs.width = cvs.offsetWidth; cvs.height = cvs.offsetHeight; }
            window.addEventListener('resize', rsz); rsz();
            
            const pts = Array.from({ length: 80 }, () => ({
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
            .fromTo('#hSub', { opacity: 0, y: 32 }, { opacity: 1, y: 0, duration: 0.75, ease: 'power3.out' }, '-=0.55');

        /* ── PROJECT SCRUB INTERSECTION TRIGGER (Up & Down Smooth Trigger) ── */
        const projectCards = document.querySelectorAll('.proj-card');
        projectCards.forEach((card) => {
            gsap.fromTo(card, 
                { opacity: 0, y: 60, scale: 0.95 },
                { 
                    opacity: 1, y: 0, scale: 1, ease: 'power2.out',
                    scrollTrigger: {
                        trigger: card, 
                        start: 'top 92%', 
                        end: 'top 60%',
                        scrub: 1, 
                        toggleActions: 'play reverse play reverse'
                    }
                }
            );
        });

        /* ── SCROLL ACTIVATED STATS COUNTER RUNNER (Up/Down Reset & Smooth Counter) ── */
        const counters = document.querySelectorAll('.counter-val');
        
        counters.forEach(counter => {
            const targetVal = parseFloat(counter.getAttribute('data-target'));
            const suffix = counter.getAttribute('data-suffix');
            
            ScrollTrigger.create({
                trigger: counter,
                start: 'top 90%',
                toggleActions: 'play reverse play reverse',
                onEnter: () => animateCounter(counter, targetVal, suffix),
                onEnterBack: () => animateCounter(counter, targetVal, suffix)
            });
        });

        function animateCounter(el, target, suffix) {
            const countObj = { val: 0 };
            gsap.to(countObj, {
                val: target,
                duration: 1.8,
                ease: 'power3.out',
                onUpdate() {
                    if(target % 1 !== 0) {
                        el.innerHTML = countObj.val.toFixed(1) + suffix;
                    } else {
                        el.innerHTML = Math.round(countObj.val) + suffix;
                    }
                },
                onComplete() {
                    el.innerHTML = target + suffix;
                }
            });
        }

        /* ── CTA CONTAINER PARALLAX REVEAL (Up/Down) ── */
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

        /* ── DYNAMIC ISOTOPE MIX FILTER SYSTEM ── */
        const tabButtons = document.querySelectorAll('.tab-btn');
        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                tabButtons.forEach(b => {
                    b.classList.remove('bg-gradient-to-br', 'from-brand-p', 'to-brand-p2', 'text-white', 'shadow-md');
                    b.classList.add('text-[#7878a0]', 'light:text-[#5a5a80]');
                });
                btn.classList.add('bg-gradient-to-br', 'from-brand-p', 'to-brand-p2', 'text-white', 'shadow-md');
                btn.classList.remove('text-[#7878a0]', 'light:text-[#5a5a80]');

                const selectedFilter = btn.getAttribute('data-filter');
                const targets = [];
                
                projectCards.forEach(card => {
                    if (selectedFilter === 'all' || card.getAttribute('data-category') === selectedFilter) {
                        card.style.display = 'flex';
                        targets.push(card);
                    } else {
                        card.style.display = 'none';
                    }
                });

                if(targets.length > 0) {
                    gsap.fromTo(targets, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.4, stagger: 0.08, ease: 'power2.out' });
                }
                ScrollTrigger.refresh();
            });
        });

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