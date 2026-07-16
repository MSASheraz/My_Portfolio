<x-my-layouts.admin-main>
  <!-- Content Block perfectly pushed away from sidebar with overflow safety -->
  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-10 p-6 sm:p-8 w-full max-w-full overflow-x-hidden">
      
      <!-- Top Actions Navigation Panel -->
      <div id="blogCreateConsoleHeader" class="gsap-header-fade flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="flex items-center gap-3.5">
          <a href="#back-to-index" class="group inline-flex items-center justify-center w-10 h-10 rounded-xl border transition-all duration-300 bg-white/[0.02] light:bg-black/[0.02] hover:bg-[rgba(124,58,237,0.12)] hover:scale-105" style="border-color: var(--ob); color: var(--tx2);" title="Back to Database">
            <span class="transform group-hover:-translate-x-1 transition-transform duration-300 text-sm">🩵</span>
          </a>
          <div>
            <span class="font-syne font-bold text-[0.65rem] tracking-[0.2em] uppercase block" style="color: var(--p2)">
              Architecture Deployment
            </span>
            <h1 class="font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.5rem, 3vw, 2rem); line-height: 1.2;">
              Deploy New Blog Node
            </h1>
          </div>
        </div>
      </div>

      <!-- Main Form Container Sheet - Multi-Theme Master Adaptive Design -->
      <div id="blogFormEngineContainer" class="gsap-form-card w-full max-w-4xl rounded-[28px] border p-6 sm:p-10 relative overflow-hidden backdrop-blur-md transition-colors duration-300" 
           style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
        
        <!-- Decorative subtle accent background glows - Optimized for visibility modes -->
        <div class="absolute -top-24 -right-24 w-48 h-48 rounded-full bg-purple-600/10 light:bg-purple-500/5 blur-[80px] pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 rounded-full bg-blue-600/5 light:bg-indigo-500/5 blur-[80px] pointer-events-none"></div>

      

      </div>

    </div>
  </div>

  <!-- Initial FOUC State Handling to eliminate white flashes -->
  <style>
    .gsap-header-fade, .gsap-form-card, .gsap-form-row {
      opacity: 0;
    }
    .gsap-form-active {
      transition: none !important;
    }
  </style>

  <!-- Ultimate Premium GSAP Animation Engine -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      gsap.registerPlugin(ScrollTrigger);

      const formHeader = document.querySelector(".gsap-header-fade");
      const formCard = document.querySelector(".gsap-form-card");
      const formRows = gsap.utils.toArray(".gsap-form-row");

      // Inject strict animation protection class
      if (formHeader) formHeader.classList.add("gsap-form-active");
      if (formCard) formCard.classList.add("gsap-form-active");
      formRows.forEach(row => {
        row.classList.add("gsap-form-active");
        row.style.willChange = "transform, opacity";
      });

      // Subtle tilt and drop down start positions
      gsap.set(formHeader, { y: -20, opacity: 0 });
      gsap.set(formCard, { y: 45, rotationX: 2, opacity: 0 });
      gsap.set(formRows, { y: 25, opacity: 0 });

      // Master Timeline orchestration that runs immediately on load
      const createFormTimeline = gsap.timeline();

      // 1. Header Title Text Animation
      createFormTimeline.to(formHeader, {
        y: 0,
        opacity: 1,
        duration: 0.6,
        ease: "power3.out"
      });

      // 2. Main Form Sheet unfolds with fluid perspective deceleration
      createFormTimeline.to(formCard, {
        y: 0,
        rotationX: 0,
        opacity: 1,
        duration: 0.85,
        ease: "power4.out"
      }, "-=0.35");

      // 3. Form elements flow in sequentially
      createFormTimeline.to(formRows, {
        y: 0,
        opacity: 1,
        stagger: 0.08,
        duration: 0.7,
        ease: "power3.out",
        onComplete: () => {
          // Release memory maps safely for full runtime input smoothness
          if (formHeader) formHeader.classList.remove("gsap-form-active");
          if (formCard) formCard.classList.remove("gsap-form-active");
          formRows.forEach(row => {
            row.classList.remove("gsap-form-active");
            row.style.willChange = "auto";
          });
        }
      }, "-=0.45");

    });
  </script>
</x-my-layouts.admin-main>