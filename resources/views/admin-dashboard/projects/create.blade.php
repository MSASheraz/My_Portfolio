<x-my-layouts.admin-main>
  <!-- Content Block perfectly pushed away from sidebar with overflow safety -->
  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-8 p-6 sm:p-8 w-full max-w-full overflow-x-hidden">
      
      <!-- Top Action Navigation Rig -->
      <div id="projectCreateConsoleHeader" class="gsap-proj-create-fade flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="flex items-center gap-3.5">
          <a href="#back-to-projects" class="group inline-flex items-center justify-center w-10 h-10 rounded-xl border transition-all duration-300 bg-white/[0.02] light:bg-black/[0.02] hover:bg-[rgba(124,58,237,0.12)] hover:scale-105" style="border-color: var(--ob); color: var(--tx2);" title="Back to Portfolio Grid">
            <span class="transform group-hover:-translate-x-1 transition-transform duration-300 text-sm">🩵</span>
          </a>
          <div>
            <span class="font-syne font-bold text-[0.65rem] tracking-[0.2em] uppercase block" style="color: var(--p2)">
              Architecture deployment rig
            </span>
            <h1 class="font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.4rem, 2.8vw, 1.8rem); line-height: 1.2;">
              Deploy New Project
            </h1>
          </div>
        </div>
      </div>

      <!-- Main Form Sheet Structure -->
     <form id="projectDeploymentFormNode" class="gsap-proj-create-body max-w-4xl space-y-6 rounded-[24px] border p-6 sm:p-8 backdrop-blur-md" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
        
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    
    <div class="space-y-2">
      <label for="projectTitle" class="text-[11px] font-syne font-bold uppercase tracking-wider block" style="color: var(--tx)">
        Project Title / Architecture Name
      </label>
      <input type="text" id="projectTitle" name="title" required
        placeholder="e.g., Solar Product E-Commerce" 
        class="w-full px-4 py-3 rounded-xl text-xs font-medium border outline-none bg-black/10 light:bg-white/50 focus:border-[var(--p2)] transition-all duration-200"
        style="border-color: var(--ob); color: var(--tx)">
    </div>

    <div class="space-y-2">
      <label for="projectCategory" class="text-[11px] font-syne font-bold uppercase tracking-wider block" style="color: var(--tx)">
        Category Node Layer
      </label>
      <select id="projectCategory" name="category" required
        class="w-full px-4 py-3 rounded-xl text-xs font-medium border outline-none bg-black/10 light:bg-white/50 focus:border-[var(--p2)] transition-all duration-200 appearance-none cursor-pointer"
        style="border-color: var(--ob); color: var(--tx)">
        <option value="" disabled selected class="bg-[var(--bg2)]">Select system stack module...</option>
        <option value="cat-react" class="bg-[var(--bg2)]">React.js Framework Matrix</option>
        <option value="cat-laravel" class="bg-[var(--bg2)]">Laravel Core Pipeline</option>
        <option value="e-commerce" class="bg-[var(--bg2)]">E-Commerce Layer</option>
        <option value="web-app" class="bg-[var(--bg2)]">Web Application</option>
        <option value="api-engine" class="bg-[var(--bg2)]">API Engine Node</option>
        <option value="saas" class="bg-[var(--bg2)]">SaaS Platform Matrix</option>
      </select>
    </div>

    <div class="space-y-2">
      <label for="projectTechStack" class="text-[11px] font-syne font-bold uppercase tracking-wider block" style="color: var(--tx)">
        Tech Stack Framework Chips
      </label>
      <input type="text" id="projectTechStack" name="tech_stack" required
        placeholder="e.g., React.js, Glassmorphism, GSAP, Multi-Role Dashboard" 
        class="w-full px-4 py-3 rounded-xl text-xs font-medium border outline-none bg-black/10 light:bg-white/50 focus:border-[var(--p2)] transition-all duration-200"
        style="border-color: var(--ob); color: var(--tx)">
    </div>

    <div class="space-y-2">
      <label for="projectLiveUrl" class="text-[11px] font-syne font-bold uppercase tracking-wider block" style="color: var(--tx)">
        Live Matrix Target URI (Optional)
      </label>
      <input type="url" id="projectLiveUrl" name="live_url"
        placeholder="https://example-production-grid.com" 
        class="w-full px-4 py-3 rounded-xl text-xs font-medium border outline-none bg-black/10 light:bg-white/50 focus:border-[var(--p2)] transition-all duration-200"
        style="border-color: var(--ob); color: var(--tx)">
    </div>

  </div>

  <div class="space-y-2">
    <label class="text-[11px] font-syne font-bold uppercase tracking-wider block" style="color: var(--tx)">
      Media System Container (Mockup Thumbnail)
    </label>
    <div class="w-full border-2 border-dashed rounded-xl p-6 text-center relative group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200" style="border-color: var(--ob)">
      <input type="file" id="projectThumbnail" name="thumbnail" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">
      <div class="space-y-1">
        <span class="text-2xl block">📤</span>
        <p class="text-xs font-medium" style="color: var(--tx)">Drag portfolio image layer here or <span class="text-[var(--p2)] font-bold">browse system nodes</span></p>
        <p class="text-[10px]" style="color: var(--tx3)">PNG, JPG, or WEBP layout assets up to 5MB</p>
      </div>
    </div>
  </div>

  <div class="space-y-2">
    <label for="projectScope" class="text-[11px] font-syne font-bold uppercase tracking-wider block" style="color: var(--tx)">
      Advanced Blueprint Specifications & System Scope
    </label>
    <textarea id="projectScope" name="scope" rows="5" required
      placeholder="e.g., Advanced presentation terminal featuring clean light/dark transitions, highly optimized course builder dashboard with multi-role permissions configurations, or pharmacy application tracking catalogs..."
      class="w-full px-4 py-3 rounded-xl text-xs font-medium border outline-none bg-black/10 light:bg-white/50 focus:border-[var(--p2)] transition-all duration-200 resize-none leading-relaxed"
      style="border-color: var(--ob); color: var(--tx)"></textarea>
  </div>

  <div class="flex items-center justify-end gap-3 pt-4 border-t" style="border-color: var(--ob)">
    <a href="#back" class="px-5 py-2.5 rounded-xl font-syne font-bold text-xs uppercase tracking-wider border text-center transition-all duration-200" style="border-color: var(--ob); color: var(--tx2)">
      Cancel Matrix
    </a>
    <button type="submit" class="px-5 py-2.5 rounded-xl font-syne font-bold text-xs uppercase tracking-wider text-white shadow-lg bg-gradient-to-r from-[#7c3aed] to-[#a855f7] hover:scale-[1.02] active:scale-[0.98] transition-all duration-200">
      🚀 Deploy Build Node
    </button>
  </div>

</form>

    </div>
  </div>

  <!-- FOUC Protection styles -->
  <style>
    .gsap-proj-create-fade, .gsap-proj-create-body {
      opacity: 0;
    }
    .gsap-proj-create-active {
      transition: none !important;
    }
  </style>

  <!-- Premium Unified GSAP View Engine (Fixed & Corrected Timeline) -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const createHeader = document.querySelector(".gsap-proj-create-fade");
      const createBody = document.querySelector(".gsap-proj-create-body");

      // Set active execution token anchors smoothly
      if (createHeader) createHeader.classList.add("gsap-proj-create-active");
      if (createBody) createBody.classList.add("gsap-proj-create-active");

      // Pre-set matrix locations
      gsap.set(createHeader, { y: -20, opacity: 0 });
      gsap.set(createBody, { y: 30, opacity: 0 });

      // Run seamless deployment layout timeline (Fixed for projCreateTimeline)
      const projCreateTimeline = gsap.timeline();

      projCreateTimeline.to(createHeader, {
        y: 0,
        opacity: 1,
        duration: 0.55,
        ease: "power3.out"
      });

      projCreateTimeline.to(createBody, {
        y: 0,
        opacity: 1,      
        duration: 0.7,
        ease: "power4.out",
        onComplete: () => {
          // Destruct runtime blocks for layout freedom
          if (createHeader) createHeader.classList.remove("gsap-proj-create-active");
          if (createBody) createBody.classList.remove("gsap-proj-create-active");
        }
      }, "-=0.3");
    });
  </script>
</x-my-layouts.admin-main>