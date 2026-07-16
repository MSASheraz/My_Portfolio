<x-my-layouts.admin-main>
  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-8 p-6 sm:p-8 w-full max-w-full overflow-x-hidden">
      
      <div id="projectShowConsoleHeader" class="gsap-proj-show-fade flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="flex items-center gap-3.5">
          <a href="#back-to-projects" class="group inline-flex items-center justify-center w-10 h-10 rounded-xl border transition-all duration-300 bg-white/[0.02] light:bg-black/[0.02] hover:bg-[rgba(124,58,237,0.12)] hover:scale-105" style="border-color: var(--ob); color: var(--tx2);" title="Back to Portfolio Grid">
            <span class="transform group-hover:-translate-x-1 transition-transform duration-300 text-sm">🩵</span>
          </a>
          <div>
            <span class="font-syne font-bold text-[0.65rem] tracking-[0.2em] uppercase block" style="color: var(--p2)">
              Portfolio Node Document
            </span>
            <h1 class="font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.4rem, 2.8vw, 1.8rem); line-height: 1.2;">
              Project Specifications
            </h1>
          </div>
        </div>

        <div class="flex items-center gap-2 shrink-0">
          <a href="#edit-project" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl font-syne font-bold text-xs uppercase tracking-wider border bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] transition-all duration-300" style="border-color: var(--ob);">
            <span>✏️ Edit Project</span>
          </a>
          <button class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-300" style="border-color: rgba(239,68,68,0.15)">
            🗑️
          </button>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        <div class="gsap-proj-show-card space-y-6 rounded-[24px] border p-6 backdrop-blur-md" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
          <div class="border-b pb-4" style="border-color: var(--ob)">
            <h3 class="font-syne font-bold text-xs uppercase tracking-widest" style="color: var(--p3)">Deployment Blueprint</h3>
          </div>

          <div class="space-y-4">
            <div class="space-y-1">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">Project Identifier</span>
              <p class="text-sm font-syne font-extrabold" style="color: var(--tx)">Solar Product E-Commerce</p>
            </div>

            <div class="space-y-1">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">Category Node</span>
              <p class="text-xs font-mono font-semibold text-blue-400 select-all">E-Commerce Layer</p>
            </div>

            <div class="space-y-2">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">Core Tech Stack</span>
              <div class="flex flex-wrap gap-1.5">
                <span class="font-mono text-[9px] px-2 py-0.5 rounded bg-white/5 border border-white/5" style="color: var(--tx2)">Laravel 11</span>
                <span class="font-mono text-[9px] px-2 py-0.5 rounded bg-white/5 border border-white/5" style="color: var(--tx2)">Tailwind CSS</span>
                <span class="font-mono text-[9px] px-2 py-0.5 rounded bg-white/5 border border-white/5" style="color: var(--tx2)">MySQL</span>
                <span class="font-mono text-[9px] px-2 py-0.5 rounded bg-white/5 border border-white/5" style="color: var(--tx2)">GSAP Core</span>
              </div>
            </div>

            <div class="space-y-1">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">Release Timeline</span>
              <p class="text-xs font-mono" style="color: var(--tx3)">June 18, 2026 • 09:45 AM</p>
            </div>
          </div>
        </div>

        <div class="gsap-proj-show-body lg:col-span-2 space-y-6 rounded-[24px] border p-6 sm:p-8 backdrop-blur-md" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
          
          <div class="w-full h-48 sm:h-64 rounded-xl border overflow-hidden flex items-center justify-center relative bg-gradient-to-br from-purple-900/10 via-transparent to-transparent" style="border-color: var(--ob)">
            <span class="absolute text-5xl opacity-20">☀️</span>
            <div class="text-center space-y-1 z-10">
              <p class="font-syne font-bold text-xs uppercase tracking-widest text-purple-400">Media System Container</p>
              <p class="text-[10px] font-mono" style="color: var(--tx3)">Portfolio Node Sandbox Mode Enabled</p>
            </div>
          </div>

          <div class="space-y-2 border-b pb-6" style="border-color: var(--ob)">
            <span class="inline-block text-[9px] font-bold px-2 py-0.5 rounded-md bg-emerald-500/10 border uppercase tracking-wider text-emerald-400" style="border-color: rgba(16,185,129,0.2);">
              System Core Scope
            </span>
            <h2 class="font-syne font-extrabold text-base sm:text-lg tracking-tight" style="color: var(--tx)">
              Advanced Solar Spare Parts Filtering Infrastructure Grid
            </h2>
          </div>

          <div class="space-y-4 text-xs sm:text-sm font-medium leading-relaxed" style="color: var(--tx2)">
            <p class="whitespace-pre-line bg-white/[0.01] light:bg-slate-50/40 p-4 rounded-xl border font-sans" style="border-color: var(--ob)">
              This premium e-commerce system architecture features a highly responsive inventory management network tailored exclusively for modern solar applications.

              Integrating utility-first Tailwind UI components with advanced back-end data caching engines allows users to query thousands of technical spares smoothly under 40ms. Scalable layout rows adapt dynamically across all matrix display networks while maintaining strict design standard tokens throughout the application.
            </p>
          </div>

          <div class="pt-4 flex items-center gap-2 text-[10px] font-mono border-t" style="border-color: var(--ob); color: var(--tx3)">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            Status Core: Network Routing Stable / Active Live Production Grid
          </div>

        </div>

      </div>

    </div>
  </div>

  <style>
    .gsap-proj-show-fade, .gsap-proj-show-card, .gsap-proj-show-body {
      opacity: 0;
    }
    .gsap-proj-show-active {
      transition: none !important;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const showHeader = document.querySelector(".gsap-proj-show-fade");
      const showMetaCard = document.querySelector(".gsap-proj-show-card");
      const showBodyCard = document.querySelector(".gsap-proj-show-body");

      // Set active execution token anchors smoothly
      if (showHeader) showHeader.classList.add("gsap-proj-show-active");
      if (showMetaCard) showMetaCard.classList.add("gsap-proj-show-active");
      if (showBodyCard) showBodyCard.classList.add("gsap-proj-show-active");

      // Pre-set matrix locations
      gsap.set(showHeader, { y: -20, opacity: 0 });
      gsap.set(showMetaCard, { x: -30, opacity: 0 });
      gsap.set(showBodyCard, { x: 30, opacity: 0 });

      // Run seamless deployment layout timeline (No ScrollTrigger delay)
      const projShowTimeline = gsap.timeline();

      projShowTimeline.to(showHeader, {
        y: 0,
        opacity: 1,
        duration: 0.6,
        ease: "power3.out"
      });

      projShowTimeline.to([showMetaCard, showBodyCard], {
        x: 0,
        opacity: 1,
        stagger: 0.1,          
        duration: 0.75,
        ease: "power4.out",
        onComplete: () => {
          // Destruct runtime blocks for layout freedom
          if (showHeader) showHeader.classList.remove("gsap-proj-show-active");
          if (showMetaCard) showMetaCard.classList.remove("gsap-proj-show-active");
          if (showBodyCard) showBodyCard.classList.remove("gsap-proj-show-active");
        }
      }, "-=0.35");
    });
  </script>
</x-my-layouts.admin-main>