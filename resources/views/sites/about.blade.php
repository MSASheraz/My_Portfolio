    <x-my-layouts.user-main>
    <!-- INCLUDE SCRIPTS DIRECTLY TO BYPASS LAYOUT DEPENDENCY ENGINE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>

    <!-- HERO SECTION (FIXED TOP SPACING & PREMIUM VISUAL BALANCE) -->
    <section id="hero" style="min-height: 88vh; display: flex; flex-direction: column; justify-content: center; position: relative; overflow: hidden; padding-top: 8rem; padding-bottom: 5rem;">
        <div class="hero-grid"></div>
        <div class="hero-nebula"></div>
        
        <div class="wrap" style="position: relative; z-index: 10;">
            <div class="hero-inner" style="text-align: center;">
                
                <!-- PRECISE MOUNT: Spacing configured to prevent layout crowding -->
                <div class="hero-pill scroll-reveal-pill" style="margin: 2.5rem auto 1.8rem auto; opacity: 0; transform: translateY(20px); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);">
                    <span class="pdot"></span> About The Engineer
                </div>

                <!-- MAIN HEADER (TARGETED BY SCROLLTRIGGER SPLIT ENGINE) -->
                <h1 class="hero-h1 text-split-trigger" style="text-align: center; font-family: 'Syne', sans-serif; line-height: 1.15; margin-bottom: 1.5rem;">
                    Architecting Pure <br><span class="out">Digital Logic.</span>
                </h1>

                <!-- SUBTITLE DESCRIPTION -->
                <p class="hero-sub scroll-reveal-sub" style="max-width: 620px; margin: 0 auto 3.5rem auto; text-align: center; opacity: 0; transform: translateY(20px); line-height: 1.6;">
                    A deep dive into execution workflows, premium frontend mechanics, and core server architecture rules.
                </p>
                
                <!-- COUNTERS ENGINE -->
                <div class="hero-stats" style="margin-top: 2rem; opacity: 0; transform: translateY(30px);" id="aboutStatsContainer">
                    <div class="hstat">
                        <div class="hstat-n memory-counter" data-target="5">0</div>
                        <div class="hstat-l">Years Experience</div>
                    </div>
                    <div class="hstat">
                        <div class="hstat-n memory-counter" data-target="50">0</div>
                        <div class="hstat-l">Systems Built</div>
                    </div>
                    <div class="hstat">
                        <div class="hstat-n memory-counter" data-target="100">0</div>
                        <div class="hstat-l">Happy Clients</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BIOGRAPHY SECTION -->
    <section id="about" style="padding: 6rem 0;">
        <div class="wrap">
<div class="about-grid" style="align-items:center; gap:5rem;">
                
                <!-- Left Visual Identity -->
                <div class="about-fig scroll-zoom-card" style="opacity: 0; transform: scale(0.9); height:100%; display:flex; flex-direction:column; justify-content:center;">
                        <div class="about-card" style="position:relative; z-index:10; display:block; overflow:hidden;">
                        <img
                            src="{{ asset('build/assets/images/portfolio_1.jpg') }}"
                            alt="Muhammad Sheraz Ahmad Aheer"
                            loading="lazy"
                            style="width:100%; height:100%; object-fit:cover; display:block; position:relative; z-index:10;"
                        />
                        <div class="about-initials" style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; z-index:11;">MS</div>
                    </div>
                    <div class="anim-ring"></div>
                    <div class="anim-sq"></div>
                </div>

                <!-- Right Description -->
                <div class="scroll-text-reveal" style="opacity: 0; transform: translateY(30px);">
                    <div class="s-eye">The Identity</div>
                    <h2 class="s-title" style="font-family: 'Syne', sans-serif;">Muhammad Sheraz Ahmad Aheer</h2>
                    
                    <p class="s-desc" style="margin-bottom: 1.25rem;">
                        I build highly sophisticated web apps that keep pixel-perfect designs integrated seamlessly with optimized server engines. I specialize in developing clear, scalable, and responsive structural solutions.
                    </p>
                    <p class="s-desc" style="margin-bottom: 2rem;">
                        Every build line is planned carefully to maintain fluid rendering speeds, strict type validation rules, and high-quality performance. No unnecessary clutter—just optimal execution patterns.
                    </p>

                    <!-- Core Matrix Parameters -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 1rem; margin: 1.5rem 0; border-top: 1px solid var(--ob); border-bottom: 1px solid var(--ob); padding: 1.25rem 0;">
                        <div>
                            <p style="font-size: 10px; color: var(--tx3); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 4px;">Main Focus</p>
                            <p style="font-family: 'Syne', sans-serif; font-weight: 600; font-size: 13px; color: var(--tx);">Laravel & React Matrix</p>
                        </div>
                        <div>
                            <p style="font-size: 10px; color: var(--tx3); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 4px;">UX Architecture</p>
                            <p style="font-family: 'Syne', sans-serif; font-weight: 600; font-size: 13px; color: var(--tx);">Obsidian Glassmorphism</p>
                        </div>
                        <div>
                            <p style="font-size: 10px; color: var(--tx3); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 4px;">Availability</p>
                            <p style="font-family: 'Syne', sans-serif; font-weight: 600; font-size: 13px; color: var(--tx);">Production Contracts</p>
                        </div>
                    </div>

                    <div class="about-ctas">
                        <a href="{{route('site.contact-us')}}" class="btn-prim"><span>Connect Now →</span></a>
                       
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MODULE STAGGER CARDS -->
    <section id="services" style="padding: 6rem 0; background: rgba(255,255,255,0.01);">
        <div class="wrap">
            <div style="text-align:center; margin-bottom: 4rem;">
                <div class="s-eye" style="justify-content:center">Specialization</div>
                <h2 class="s-title">Development Competencies</h2>
            </div>
            
            <div class="svc-grid">
                <div class="svc-card scroll-stagger-card" style="opacity: 0; transform: translateY(40px);">
                    <div class="svc-icon">💡</div>
                    <div class="svc-name">Full-Stack Control</div>
                    <p class="svc-text">Designing complete frontend and backend state workflows using proper architecture principles for high-traffic networks.</p>
                </div>

                <div class="svc-card scroll-stagger-card" style="opacity: 0; transform: translateY(40px);">
                    <div class="svc-icon">⚡</div>
                    <div class="svc-name">Fluid UI Engineering</div>
                    <p class="svc-text">Implementing smooth layouts with advanced Tailwind style parameters, clean animations, and responsive components.</p>
                </div>

                <div class="svc-card scroll-stagger-card" style="opacity: 0; transform: translateY(40px);">
                    <div class="svc-icon">🛡️</div>
                    <div class="svc-name">Database Strategy</div>
                    <p class="svc-text">Setting up database queries, schema configurations, and background operations for clean data handling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERTISE PROGRESS TRACKS -->
    <section id="skills" style="padding: 6rem 0;">
        <div class="wrap">
            <div style="margin-bottom: 3rem;">
                <div class="s-eye">Metrics</div>
                <h2 class="s-title">Execution Controls</h2>
            </div>

            <div class="skills-cols">
                <div>
                    <div class="sk scroll-skill-trigger">
                        <div class="sk-row">
                            <span class="sk-name">Laravel Framework Architecture</span>
                            <span class="sk-pct">92%</span>
                        </div>
                        <div class="sk-track"><div class="sk-fill" style="width: 0%; transition: none;" data-progress="92%"></div></div>
                    </div>
                    <div class="sk scroll-skill-trigger">
                        <div class="sk-row">
                            <span class="sk-name">React JS Frontend Components</span>
                            <span class="sk-pct">90%</span>
                        </div>
                        <div class="sk-track"><div class="sk-fill" style="width: 0%; transition: none;" data-progress="90%"></div></div>
                    </div>
                </div>
                <div>
                    <div class="sk scroll-skill-trigger">
                        <div class="sk-row">
                            <span class="sk-name">Tailwind CSS Custom Design UI</span>
                            <span class="sk-pct">95%</span>
                        </div>
                        <div class="sk-track"><div class="sk-fill" style="width: 0%; transition: none;" data-progress="95%"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TIMELINE MAP -->
    <section id="experience" style="padding: 6rem 0;">
        <div class="wrap">
            <div style="text-align: center; margin-bottom: 4rem;">
                <div class="s-eye" style="justify-content:center">History</div>
                <h2 class="s-title">Development Path</h2>
            </div>

            <div class="tl">
                <div class="tl-row scroll-timeline-row" style="opacity: 0; transform: translateX(-30px);">
                    <div class="tl-dot"></div>
                    <div class="tl-date">2024 — PRESENT</div>
                    <div class="tl-role">Lead Full-Stack Consultant</div>
                    <p class="tl-text">Building specialized administration systems, e-commerce stores with technical parameters, and custom database web engines.</p>
                </div>

                <div class="tl-row scroll-timeline-row" style="opacity: 0; transform: translateX(-30px);">
                    <div class="tl-dot"></div>
                    <div class="tl-date">2022 — 2024</div>
                    <div class="tl-role">Senior Software Engineer</div>
                    <p class="tl-text">Maintained complex web assets, streamlined data structures, and configured secure application views for maximum performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- INJECTED RUNTIME GSAP SCROLL-TRIGGER CONTEXT -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Register GSAP Plugin Safely
            gsap.registerPlugin(ScrollTrigger);

            // FUNCTION: Resets counters to 0 so they can recount on scroll up/down
            const resetCounterElements = () => {
                document.querySelectorAll('.memory-counter').forEach(counter => {
                    counter.innerText = "0";
                });
            };

            // 1. HERO PILL TRIGGER ON SCROLL UP/DOWN
            gsap.to(".scroll-reveal-pill", {
                scrollTrigger: {
                    trigger: "#hero",
                    start: "top 20%",
                    end: "bottom 20%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: "power2.out"
            });

            // 2. HERO H1 SPLIT TEXT TRIGGER ON SCROLL UP/DOWN
            const targetH1 = document.querySelector('.text-split-trigger');
            if(targetH1) {
                const textObj = new SplitType(targetH1, { types: 'words, chars' });
                
                gsap.from(textObj.chars, {
                    scrollTrigger: {
                        trigger: ".text-split-trigger",
                        start: "top 85%",
                        end: "bottom 15%",
                        toggleActions: "play reverse play reverse"
                    },
                    opacity: 0,
                    y: 30,
                    transformOrigin: "0% 50% -50",
                    duration: 0.6,
                    stagger: 0.03,
                    ease: "back.out(1.4)"
                });
            }

            // 3. HERO SUBTITLE TRIGGER ON SCROLL UP/DOWN
            gsap.to(".scroll-reveal-sub", {
                scrollTrigger: {
                    trigger: ".text-split-trigger",
                    start: "bottom 80%",
                    end: "bottom 0%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: "power2.out"
            });

            // 4. STATS COUNTER TRIGGER ON SCROLL UP/DOWN
            gsap.to("#aboutStatsContainer", {
                scrollTrigger: {
                    trigger: "#aboutStatsContainer",
                    start: "top 85%",
                    end: "bottom 10%",
                    toggleActions: "play reverse play reverse",
                    onLeave: resetCounterElements,
                    onLeaveBack: resetCounterElements,
                    onEnterBack: () => {
                        // Re-trigger counter loop when scrolling back up into view
                        document.querySelectorAll('.memory-counter').forEach(counter => {
                            const target = +counter.getAttribute('data-target');
                            let count = 0;
                            const updateCount = () => {
                                const speed = target / 30;
                                if (count < target) {
                                    count = Math.ceil(count + speed);
                                    counter.innerText = count;
                                    setTimeout(updateCount, 30);
                                } else {
                                    counter.innerText = target;
                                }
                            };
                            updateCount();
                        });
                    },
                    onEnter: () => {
                        // Trigger counter loop when scrolling down into view
                        document.querySelectorAll('.memory-counter').forEach(counter => {
                            const target = +counter.getAttribute('data-target');
                            let count = 0;
                            const updateCount = () => {
                                const speed = target / 30;
                                if (count < target) {
                                    count = Math.ceil(count + speed);
                                    counter.innerText = count;
                                    setTimeout(updateCount, 30);
                                } else {
                                    counter.innerText = target;
                                }
                            };
                            updateCount();
                        });
                    }
                },
                opacity: 1,
                y: 0,
                duration: 0.6
            });

            // 5. BIOGRAPHY FIG CARD SCROLL UP/DOWN
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

            // 6. BIOGRAPHY TEXT SECTION SCROLL UP/DOWN
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

            // 7. SERVICES CARD STAGGER REVEAL ON SCROLL UP/DOWN
            gsap.to(".scroll-stagger-card", {
                scrollTrigger: {
                    trigger: ".svc-grid",
                    start: "top 85%",
                    end: "bottom 15%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                y: 0,
                duration: 0.6,
                stagger: 0.1,
                ease: "power2.out"
            });

            // 8. SKILLS TRACK PROGRESS FILLING ON SCROLL UP/DOWN
            document.querySelectorAll('.scroll-skill-trigger').forEach(item => {
                const fillBar = item.querySelector('.sk-fill');
                const pct = fillBar.getAttribute('data-progress');
                gsap.to(fillBar, {
                    scrollTrigger: {
                        trigger: item,
                        start: "top 90%",
                        end: "bottom 10%",
                        toggleActions: "play reverse play reverse"
                    },
                    width: pct,
                    duration: 1.2,
                    ease: "power2.out"
                });
            });

            // 9. TIMELINE ENTRIES REVEAL FLOW ON SCROLL UP/DOWN
            gsap.to(".scroll-timeline-row", {
                scrollTrigger: {
                    trigger: ".tl",
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                x: 0,
                duration: 0.6,
                stagger: 0.15,
                ease: "power2.out"
            });
        });
    </script>
</x-my-layouts.user-main>