<x-my-layouts.user-main>
    <!-- INCLUDE SCRIPTS DIRECTLY FOR CORE PIPELINE ANIMATIONS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>

    <style>
        /* Contact Architecture Custom Tokens */
        .premium-middle-workspace {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 3.5rem;
            align-items: stretch;
            margin-bottom: 4rem;
        }
        .form-glassmorphic-card {
            background: rgba(255, 255, 255, 0.01);
            border: 1px solid var(--ob);
            border-radius: 24px;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 2.5rem;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .pipelines-glass-card {
            background: rgba(255, 255, 255, 0.005);
            border: 1px solid var(--ob);
            border-radius: 24px;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
        }
        .input-node-wrapper {
            margin-bottom: 1.4rem;
        }
        .label-node-token {
            display: block;
            font-size: 10px;
            color: var(--tx3);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .field-input-component {
            width: 100%;
            padding: 1rem 1.2rem;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--ob);
            border-radius: 12px;
            color: var(--tx);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            outline: none;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .field-input-component:focus {
            border-color: var(--p2);
            background: var(--ps);
            box-shadow: 0 0 0 4px rgba(168, 85, 247, 0.15);
        }
        .pipeline-card-node {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            background: rgba(255, 255, 255, 0.01);
            border: 1px solid rgba(255, 255, 255, 0.03);
            padding: 1.2rem;
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        .pipeline-card-node:hover {
            border-color: var(--p3);
            background: var(--ps);
            transform: translateY(-2px);
        }
        
        /* Bottom FAQ Section Styling */
        .bottom-faq-wrapper {
            margin-top: 2rem;
            border-top: 1px solid var(--ob);
            padding-top: 4rem;
        }
        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        .faq-accordion-box {
            background: rgba(255, 255, 255, 0.01);
            border: 1px solid var(--ob);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .faq-accordion-box:hover {
            border-color: rgba(168, 85, 247, 0.3);
            background: rgba(255, 255, 255, 0.015);
        }
        .faq-head-trigger {
            width: 100%;
            padding: 1.4rem;
            background: transparent;
            border: none;
            color: var(--tx);
            font-family: 'Syne', sans-serif;
            font-weight: 600;
            font-size: 15px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }
        .faq-body-drawer {
            padding: 0 1.4rem 1.4rem 1.4rem;
            color: var(--tx2);
            font-size: 13.5px;
            line-height: 1.6;
        }

        @media(max-width: 992px) {
            .premium-middle-workspace {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }
            .faq-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- MAIN ROOT WORKSPACE -->
    <section id="contact-workspace" style="min-height: 100vh; position: relative; overflow: hidden; padding-top: 8rem; padding-bottom: 6rem;">
        <div class="hero-grid"></div>
        <div class="hero-nebula" style="top: 10%; left: 50%; transform: translateX(-50%); filter: blur(160px); opacity: 0.12; width: 600px; height: 300px;"></div>
        
        <div class="wrap" style="position: relative; z-index: 10;">
            
            <!-- 1. TOP HERO HEADER (CENTERED) -->
            <div id="contactHeroHeader" style="text-align: center; max-width: 800px; margin: 0 auto 4rem auto; opacity: 0; transform: translateY(30px);">
                <div class="hero-pill" style="margin: 0 auto 1.5rem auto; display: inline-flex; backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);">
                    <span class="pdot"></span> Get In Touch
                </div>

                <!-- TEXT SIZE REDUCED HERE USING CLAMP -->
                <h1 class="hero-h1 text-split-trigger" style="text-align: center; font-family: 'Syne', sans-serif; font-size: clamp(2.5rem, 5vw, 3.6rem); line-height: 1.15; margin-bottom: 1.2rem;">
                    Let's Connect <br><span class="out" style="color: var(--p2);">& Collaborate.</span>
                </h1>

                <p class="hero-sub" style="text-align: center; line-height: 1.6; color: var(--tx2); font-size: 15px; max-width: 580px; margin: 0 auto;">
                    Have an idea or want to work together? Fill out the form below, and I'll get back to you as soon as possible.
                </p>
            </div>

            <!-- 2. MIDDLE BLOCK: FORM (LEFT) & PIPELINES (RIGHT) -->
            <div class="premium-middle-workspace">
                
                <!-- LEFT PILLAR: FORM CARD -->
                <div id="leftFormBlock" class="form-glassmorphic-card" style="opacity: 0; transform: translateX(-40px);">
                    <form action="{{ route('contact.store') }}" method="POST" autocomplete="off" style="width: 100%;">
                        @csrf
                        
                        <div class="input-node-wrapper">
                            <label class="label-node-token">Full Name *</label>
                            <input type="text" name="name" required placeholder="John Doe" class="field-input-component" />
                            @error('name')
                                <p style="color: #ff4757; font-size: 12px; margin-top: 0.5rem;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="input-node-wrapper">
                            <label class="label-node-token">Email Address *</label>
                            <input type="email" name="email" required placeholder="john@example.com" class="field-input-component" />
                            @error('email')
                                <p style="color: #ff4757; font-size: 12px; margin-top: 0.5rem;">{{ $message }}</p>
                            @enderror
                        </div>

                       <div class="input-node-wrapper">
    <label class="label-node-token">Subject *</label>
    <input
        type="text"
        name="subject"
        required
        placeholder="Project Inquiry"
        class="field-input-component"
    />
    @error('subject')
        <p style="color: #ff4757; font-size: 12px; margin-top: 0.5rem;">{{ $message }}</p>
    @enderror
</div>

<div class="input-node-wrapper">
    <label class="label-node-token">Phone Number</label>
    <input
        type="text"
        name="phone"
        placeholder="+92 300 1234567 (Optional)"
        class="field-input-component"
    />
</div>

                        <div class="input-node-wrapper" style="margin-bottom: 2rem;">
                            <label class="label-node-token">Message *</label>
                            <textarea name="message" required placeholder="Tell me about your amazing project targets, features and timelines..." class="field-input-component" style="min-height: 120px; resize: vertical;"></textarea>
                        </div>

                        <button type="submit" class="btn-prim" style="width: 100%; justify-content: center; padding: 1.1rem; border: none; cursor: pointer; background: linear-gradient(135deg, var(--p), var(--p2)); font-family: 'Syne', sans-serif; font-weight: 700;">
                            <span>Send Message →</span>
                        </button>
                    </form>

                    <!-- SUCCESS ACKNOWLEDGEMENT FRAME -->
                     @if(session('success'))
                    <div style="margin-top: 1.5rem; display: flex; align-items: center; gap: 0.8rem; background: rgba(37, 211, 102, 0.04); border: 1px solid rgba(37, 211, 102, 0.15); padding: 0.9rem 1.2rem; border-radius: 12px; width: 100%;">
                        <span style="color: #25d366; font-size: 14px;">&check;</span>
                        <div>
                            <p style="font-size: 10px; font-weight: 700; color: #25d366; text-transform: uppercase; letter-spacing: 0.05em; margin: 0;">Message Completed</p>
                            <p style="font-size: 12px; color: var(--tx2); margin: 2px 0 0 0;">{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- RIGHT PILLAR: PIPELINES COMPONENT -->
                <div id="rightPipelinesBlock" class="pipelines-glass-card" style="opacity: 0; transform: translateX(40px);">
                    <h3 style="font-family: 'Syne', sans-serif; font-size: 18px; margin-bottom: 0.5rem; color: var(--tx);">Communication Pipelines</h3>
                    <p style="color: var(--tx3); font-size: 13px; margin-bottom: 2rem;">Direct channels for instant sync-ups and ongoing projects.</p>
                    
                    <div style="display: flex; flex-direction: column; gap: 1.2rem; flex-grow: 1; justify-content: center;">
                        
                        <div class="pipeline-card-node">
                            <div style="font-size: 1.4rem;">📧</div>
                            <div>
                                <p style="font-size: 9px; color: var(--tx3); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 2px;">On the Connect</p>
                                <p style="font-weight: 600; font-size: 14px; color: var(--tx); word-break: break-all; margin: 0;">contact@msasheraz.com</p>
                            </div>
                        </div>

                        <div class="pipeline-card-node">
                            <div style="font-size: 1.4rem;">💬</div>
                            <div>
                                <p style="font-size: 9px; color: var(--tx3); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 2px;">Phone Number</p>
                                <p style="font-weight: 600; font-size: 14px; color: var(--tx); margin: 0;">+92 300 0757641</p>
                            </div>
                        </div>

                        <div class="pipeline-card-node">
                            <div style="font-size: 1.4rem;">🌐</div>
                            <div>
                                <p style="font-size: 9px; color: var(--tx3); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 2px;">Connect Globally</p>
                                <div style="display: flex; gap: 12px;">
                                    <a href="#" style="font-weight: 600; font-size: 13px; color: var(--p3); text-decoration: none;">LinkedIn Profile</a>
                                    <span style="color: var(--ob);">|</span>
                                    <a href="#" style="font-weight: 600; font-size: 13px; color: var(--p3); text-decoration: none;">GitHub Hub</a>
                                </div>
                            </div>
                        </div>

                        <div class="pipeline-card-node" style="border-color: rgba(168, 85, 247, 0.2); background: rgba(168, 85, 247, 0.02); margin-top: auto;">
                            <div style="font-size: 1.4rem;">🎥</div>
                            <div>
                                <p style="font-size: 9px; color: var(--p2); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 2px;">Prefer a Video Call?</p>
                                <a href="#" style="font-family: 'Syne', sans-serif; font-weight: 700; font-size: 13px; color: var(--tx); text-decoration: underline; margin: 0;">Schedule Call →</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- 3. BOTTOM SECTION: COMMON QUESTIONS -->
            <div id="bottomFaqBlock" class="bottom-faq-wrapper" style="opacity: 0; transform: translateY(40px);">
                <div style="max-width: 600px;">
                    <h2 style="font-family: 'Syne', sans-serif; font-size: 24px; color: var(--tx); margin-bottom: 0.5rem;">Common Questions</h2>
                    <p style="color: var(--tx3); font-size: 14px;">Quick answers to frequently asked structural and operational questions.</p>
                </div>

                <div class="faq-grid">
                    
                    <div class="faq-accordion-box">
                        <div class="faq-head-trigger">What type of projects do you accept? <span style="font-size: 11px; color: var(--p2);">▼</span></div>
                        <div class="faq-body-drawer">I build modern, high-performance web applications using Laravel, React JS, Tailwind CSS, and sophisticated UI/UX design structures.</div>
                    </div>

                    <div class="faq-accordion-box">
                        <div class="faq-head-trigger">What is your typical turnaround time? <span style="font-size: 11px; color: var(--p2);">▼</span></div>
                        <div class="faq-body-drawer">Depending on the overall complexity and asset architecture, typical design prototypes take 3–5 days, while complete modular applications range from 2–4 weeks.</div>
                    </div>

                    <div class="faq-accordion-box">
                        <div class="faq-head-trigger">Do you offer post-launch support? <span style="font-size: 11px; color: var(--p2);">▼</span></div>
                        <div class="faq-body-drawer">Yes, I provide deployment optimization, bug tracking cycles, and performance auditing monitoring setups based on project SLAs.</div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- RUNTIME GSAP LIFECYCLE SCRIPTS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            gsap.registerPlugin(ScrollTrigger);

            // 1. HEADER ANIMATION SEQUENCE (Fixed: play reverse play reverse)
            gsap.to("#contactHeroHeader", {
                scrollTrigger: {
                    trigger: "#contact-workspace",
                    start: "top 85%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power3.out"
            });

            // SPLIT TYPE TEXT ANIMATION (Made smoother)
            const targetH1 = document.querySelector('.text-split-trigger');
            if(targetH1) {
                const textObj = new SplitType(targetH1, { types: 'words, chars' });
                gsap.from(textObj.chars, {
                    scrollTrigger: {
                        trigger: ".text-split-trigger",
                        start: "top 85%",
                        toggleActions: "play reverse play reverse"
                    },
                    opacity: 0,
                    y: 30,
                    duration: 0.8,
                    stagger: 0.03,
                    ease: "power3.out"
                });
            }

            // 2. MIDDLE GRID ROW STAGGER (Fixed toggles & smooth ease)
            gsap.to("#leftFormBlock", {
                scrollTrigger: {
                    trigger: ".premium-middle-workspace",
                    start: "top 80%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                x: 0,
                duration: 1,
                ease: "power3.out"
            });

            gsap.to("#rightPipelinesBlock", {
                scrollTrigger: {
                    trigger: ".premium-middle-workspace",
                    start: "top 80%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                x: 0,
                duration: 1,
                ease: "power3.out",
                delay: 0.15
            });

            // 3. BOTTOM FAQ CONTAINER (Fixed toggles)
            gsap.to("#bottomFaqBlock", {
                scrollTrigger: {
                    trigger: "#bottomFaqBlock",
                    start: "top 85%",
                    toggleActions: "play reverse play reverse"
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power3.out"
            });
        });
    </script>
</x-my-layouts.user-main>