<x-my-layouts.admin-main>
  <!-- Content Block perfectly pushed away from sidebar with overflow safety -->
  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-8 p-6 w-full max-w-full overflow-x-hidden"> 
      
      <!-- Header Console - Target classes added for structural staging -->
      <div id="blogHeaderConsole" class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="space-y-1.5">
          <span class="gsap-header-item font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase block" style="color: var(--p2)">
            Operational Matrix Logs
          </span>
          <h1 class="gsap-header-item font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.8rem, 3.5vw, 2.4rem); line-height: 1.15;">
            Blogs Database
          </h1>
          <p class="gsap-header-item text-xs font-medium" style="color: var(--tx2)">
            Inspect, modify, and restructure deployed architecture node records inside a data matrix grid.
          </p>
        </div>
        
        <div class="shrink-0 gsap-header-btn">
          <a href="{{route('admin.blogs.create')}}" class="group relative inline-flex items-center gap-2 px-5 py-3 rounded-xl font-syne font-bold text-xs uppercase tracking-wider overflow-hidden transition-all duration-300 border border-[rgba(168,85,247,0.3)] shadow-[0_0_20px_rgba(124,58,237,0.15)] hover:shadow-[0_0_30px_rgba(124,58,237,0.35)]" style="background: linear-gradient(135deg, var(--p) 0%, var(--p2) 100%); color: #ffffff;">
            <span>✍️ Create New Blog</span>
            <span class="transform group-hover:translate-x-1 transition-transform duration-300">➔</span>
          </a>
        </div>
      </div>

      <!-- Table Container Structure - Controlled via Master Layout Trigger -->
      <div id="blogTableEngineContainer" class="gsap-table-container w-full overflow-x-hidden rounded-[22px] border" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
        <table class="w-full text-left border-collapse table-fixed">
          
          <thead>
            <tr class="border-b font-syne text-[11px] uppercase tracking-wider font-bold" style="border-color: var(--ob); background: rgba(124,58,237,0.02);">
              <th class="py-5 px-4 w-[10%] text-center">Preview</th>
              <th class="py-5 px-4 w-[30%]">Blog Architecture</th>
              <th class="py-5 px-4 w-[36%]">Description Node</th>
              <th class="py-5 px-4 w-[12%] text-center">Category</th>
              <th class="py-5 px-4 text-right w-[12%] pr-6">Actions</th>
            </tr>
          </thead>
          
          <tbody id="blogTableEngineBody" class="divide-y font-sans text-xs" style="border-color: var(--cb);">
            
            <!-- Row 1 -->
            <tr class="blog-table-row group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200">
              <td class="py-5 px-4 align-middle text-center">
                <div class="relative w-14 h-10 rounded-lg overflow-hidden bg-slate-900 border mx-auto" style="border-color: var(--ob)">
                  <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=200&auto=format&fit=crop" alt="GSAP Layout" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
              </td>
              <td class="py-5 px-4 align-middle">
                <div class="flex flex-col gap-1 justify-center overflow-hidden">
                  <span class="font-syne font-bold text-xs sm:text-sm tracking-tight leading-snug truncate group-hover:text-[#a855f7] transition-colors duration-200" style="color: var(--tx)">
                    Mastering GSAP ScrollTrigger Architecture Engine Rules
                  </span>
                  <span class="font-mono text-[10px]" style="color: var(--tx3)">June 22, 2026 • 5 min read</span>
                </div>
              </td>
              <td class="py-5 px-4 align-middle text-xs font-medium leading-relaxed" style="color: var(--tx2)">
                <p class="line-clamp-2">Unlock linear layout stabilizers, sequential execution tracking rigs, and standard web deceleration paths safely inside modern viewport matrix arrays.</p>
              </td>
              <td class="py-5 px-4 align-middle text-center whitespace-nowrap">
                <span class="inline-block text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#08081a]/80 dark:bg-[#05050e]/90 border uppercase tracking-wider" style="border-color: var(--ob); color: var(--p3);">
                  Animations
                </span>
              </td>
              <td class="py-5 px-4 align-middle text-right pr-6 whitespace-nowrap">
                <div class="flex items-center justify-end gap-1.5">
                  <a href="#view" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)">👁️</a>
                  <a href="#edit" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-amber-500/10 text-amber-400 border transition-all duration-200" style="border-color: rgba(245,158,11,0.15)">✏️</a>
                  <button class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-200" style="border-color: rgba(239,68,68,0.15)">🗑️</button>
                </div>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr class="blog-table-row group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200">
              <td class="py-5 px-4 align-middle text-center">
                <div class="relative w-14 h-10 rounded-lg overflow-hidden bg-slate-900 border mx-auto" style="border-color: var(--ob)">
                  <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?q=80&w=200&auto=format&fit=crop" alt="Laravel System" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
              </td>
              <td class="py-5 px-4 align-middle">
                <div class="flex flex-col gap-1 justify-center overflow-hidden">
                  <span class="font-syne font-bold text-xs sm:text-sm tracking-tight leading-snug truncate group-hover:text-[#a855f7] transition-colors duration-200" style="color: var(--tx)">
                    Advanced Database Factories inside Laravel Platforms
                  </span>
                  <span class="font-mono text-[10px]" style="color: var(--tx3)">June 18, 2026 • 8 min read</span>
                </div>
              </td>
              <td class="py-5 px-4 align-middle text-xs font-medium leading-relaxed" style="color: var(--tx2)">
                <p class="line-clamp-2">Automate schema deployment blueprints and clean relationship states for commercial solar product filtering matrix modules safely.</p>
              </td>
              <td class="py-5 px-4 align-middle text-center whitespace-nowrap">
                <span class="inline-block text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#08081a]/80 dark:bg-[#05050e]/90 border uppercase tracking-wider" style="border-color: var(--ob); color: var(--p3);">
                  Backend
                </span>
              </td>
              <td class="py-5 px-4 align-middle text-right pr-6 whitespace-nowrap">
                <div class="flex items-center justify-end gap-1.5">
                  <a href="#view" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)">👁️</a>
                  <a href="#edit" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-amber-500/10 text-amber-400 border transition-all duration-200" style="border-color: rgba(245,158,11,0.15)">✏️</a>
                  <button class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-200" style="border-color: rgba(239,68,68,0.15)">🗑️</button>
                </div>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr class="blog-table-row group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200">
              <td class="py-5 px-4 align-middle text-center">
                <div class="relative w-14 h-10 rounded-lg overflow-hidden bg-slate-900 border mx-auto" style="border-color: var(--ob)">
                  <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=200&auto=format&fit=crop" alt="UI Components" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
              </td>
              <td class="py-5 px-4 align-middle">
                <div class="flex flex-col gap-1 justify-center overflow-hidden">
                  <span class="font-syne font-bold text-xs sm:text-sm tracking-tight leading-snug truncate group-hover:text-[#a855f7] transition-colors duration-200" style="color: var(--tx)">
                    Design Philosophy: Isolation of Component UI Channels
                  </span>
                  <span class="font-mono text-[10px]" style="color: var(--tx3)">June 12, 2026 • 4 min read</span>
                </div>
              </td>
              <td class="py-5 px-4 align-middle text-xs font-medium leading-relaxed" style="color: var(--tx2)">
                <p class="line-clamp-2">Why stripping down extraneous reactive functional logic during early structural prototyping rounds ensures highly clean design layout values.</p>
              </td>
              <td class="py-5 px-4 align-middle text-center whitespace-nowrap">
                <span class="inline-block text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#08081a]/80 dark:bg-[#05050e]/90 border uppercase tracking-wider" style="border-color: var(--ob); color: var(--p3);">
                  UI Eng
                </span>
              </td>
              <td class="py-5 px-4 align-middle text-right pr-6 whitespace-nowrap">
                <div class="flex items-center justify-end gap-1.5">
                  <a href="#view" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)">👁️</a>
                  <a href="#edit" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-amber-500/10 text-amber-400 border transition-all duration-200" style="border-color: rgba(245,158,11,0.15)">✏️</a>
                  <button class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-200" style="border-color: rgba(239,68,68,0.15)">🗑️</button>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>

  <!-- Unified FOUC Protection & Engine States -->
  <style>
    .gsap-header-item, .gsap-header-btn, .gsap-table-container, .blog-table-row { 
      opacity: 0; 
    }
    .gsap-animating-nodes { 
      transition: none !important; 
    }
    #blogTableEngineContainer::-webkit-scrollbar { 
      display: none !important; 
      width: 0px; 
      height: 0px; 
    }
  </style>

  <!-- Premium Unified Index Scroller Engine -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      gsap.registerPlugin(ScrollTrigger);

      // Select layout groupings cleanly
      const headerItems = gsap.utils.toArray(".gsap-header-item");
      const headerBtn = document.querySelector(".gsap-header-btn");
      const tableBox = document.querySelector(".gsap-table-container");
      const tableRows = gsap.utils.toArray(".blog-table-row");

      // Inject strict animation safety tracking
      if (headerBtn) headerBtn.classList.add("gsap-animating-nodes");
      if (tableBox) tableBox.classList.add("gsap-animating-nodes");
      
      headerItems.forEach(el => el.classList.add("gsap-animating-nodes"));
      tableRows.forEach(row => {
        row.classList.add("gsap-animating-nodes");
        row.style.willChange = "transform, opacity";
      });

      // Map uniform initial dimensional parameters
      gsap.set(headerItems, { y: -15, opacity: 0 });
      gsap.set(headerBtn, { scale: 0.92, opacity: 0 });
      gsap.set(tableBox, { y: 30, opacity: 0 });
      gsap.set(tableRows, { x: -25, opacity: 0 });

      // Orchestrate the master view dashboard timeline and run immediately on load
      const indexDashboardTimeline = gsap.timeline();

      // 1. Header Text Sequence (Staggers titles, subtitle smoothly)
      indexDashboardTimeline.to(headerItems, {
        y: 0,
        opacity: 1,
        stagger: 0.08,
        duration: 0.6,
        ease: "power3.out"
      });

      // 2. Action Create Button scales up cleanly in parallel
      indexDashboardTimeline.to(headerBtn, {
        scale: 1,
        opacity: 1,
        duration: 0.5,
        ease: "back.out(1.4)"
      }, "-=0.35");

      // 3. Main Data Table Box slides up to frame anchors
      indexDashboardTimeline.to(tableBox, {
        y: 0,
        opacity: 1,
        duration: 0.7,
        ease: "power4.out"
      }, "-=0.4");

      // 4. Rows execute internal cascade logic from left to right smoothly
      indexDashboardTimeline.to(tableRows, {
        x: 0,
        opacity: 1,
        stagger: 0.09,
        duration: 0.75,
        ease: "power3.out",
        onComplete: () => {
          // Unbind transformation states from processing pipeline safely
          if (headerBtn) {
            headerBtn.classList.remove("gsap-animating-nodes");
            headerBtn.style.willChange = "auto";
          }
          if (tableBox) {
            tableBox.classList.remove("gsap-animating-nodes");
            tableBox.style.willChange = "auto";
          }
          headerItems.forEach(el => el.classList.remove("gsap-animating-nodes"));
          tableRows.forEach(row => {
            row.classList.remove("gsap-animating-nodes");
            row.style.willChange = "auto";
          });
        }
      }, "-=0.45");
    });
  </script>
</x-my-layouts.admin-main>