<x-my-layouts.admin-main>
  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-8 p-6 w-full max-w-full overflow-x-hidden"> 
      
      <div id="projectHeaderConsole" class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="space-y-1.5">
          <span class="gsap-proj-header font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase block" style="color: var(--p2)">
            Production Portfolio Matrix
          </span>
          <h1 class="gsap-proj-header font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.8rem, 3.5vw, 2.4rem); line-height: 1.15;">
            Manage Projects
          </h1>
          <p class="gsap-proj-header text-xs font-medium" style="color: var(--tx2)">
            Deploy new structural builds, track engineering workflows, and configure system portfolio nodes seamlessly.
          </p>
        </div>
        <div class="gsap-proj-header shrink-0">
          <a href="{{route('admin.projects.create')}}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl font-syne font-bold text-xs uppercase tracking-wider text-white shadow-lg bg-gradient-to-r from-[#7c3aed] to-[#a855f7] hover:scale-[1.02] transition-transform duration-200">
            <span>➕ Create Project</span>
          </a>
        </div>
      </div>

      <div id="projectTableEngineContainer" class="gsap-proj-container w-full overflow-x-hidden rounded-[22px] border" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
        <table class="w-full text-left border-collapse table-fixed">
          
          <thead>
            <tr class="border-b font-syne text-[11px] uppercase tracking-wider font-bold" style="border-color: var(--ob); background: rgba(124,58,237,0.02);">
              <th class="py-5 px-4 w-[28%]">Project Architecture</th>
              <th class="py-5 px-4 w-[16%]">Category Node</th>
              <th class="py-5 px-4 w-[14%]">Tech Stack</th>
              <th class="py-5 px-4 w-[16%]">Status Matrix</th>
              <th class="py-5 px-4 w-[14%]">Deployment Date</th>
              <th class="py-5 px-4 text-right w-[12%] pr-6">Actions</th>
            </tr>
          </thead>
          
          <tbody id="projectTableEngineBody" class="divide-y font-sans text-xs" style="border-color: var(--cb);">
            
            <tr class="project-table-row group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200">
              <td class="py-5 px-4 align-middle">
                <div class="flex items-center gap-3 overflow-hidden">
                  <div class="w-10 h-10 rounded-xl shrink-0 border flex items-center justify-center font-mono text-base bg-purple-500/5" style="border-color: var(--ob)">
                    ☀️
                  </div>
                  <div class="flex flex-col gap-0.5 overflow-hidden">
                    <span class="font-syne font-bold text-xs sm:text-[13px] tracking-tight truncate" style="color: var(--tx)">
                      Solar Product E-Commerce
                    </span>
                    <span class="text-[10px] truncate" style="color: var(--tx2)">Advanced filtering grid ecosystem</span>
                  </div>
                </div>
              </td>
              <td class="py-5 px-4 align-middle whitespace-nowrap">
                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-blue-500/10 text-blue-400 border border-blue-500/20">
                  E-Commerce Layer
                </span>
              </td>
              <td class="py-5 px-4 align-middle">
                <div class="flex flex-wrap gap-1 max-w-full">
                  <span class="font-mono text-[9px] px-1.5 py-0.5 rounded bg-white/5" style="color: var(--tx2)">Laravel</span>
                  <span class="font-mono text-[9px] px-1.5 py-0.5 rounded bg-white/5" style="color: var(--tx2)">Tailwind</span>
                </div>
              </td>
              <td class="py-5 px-4 align-middle whitespace-nowrap">
                <div class="flex items-center gap-1.5 font-mono text-[11px] font-semibold text-emerald-400">
                  <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Live Production
                </div>
              </td>
              <td class="py-5 px-4 align-middle font-mono text-[10px]" style="color: var(--tx3)">
                June 18, 2026
              </td>
              <td class="py-5 px-4 align-middle text-right pr-6 whitespace-nowrap">
                <div class="flex items-center justify-end gap-1.5">
                  <a href="#view-project" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)">👁️</a>
                  <a href="#edit-project" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-amber-400 border transition-colors duration-200" style="border-color: var(--ob)">✏️</a>
                  <button class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-200" style="border-color: rgba(239,68,68,0.15)">🗑️</button>
                </div>
              </td>
            </tr>

            <tr class="project-table-row group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200">
              <td class="py-5 px-4 align-middle">
                <div class="flex items-center gap-3 overflow-hidden">
                  <div class="w-10 h-10 rounded-xl shrink-0 border flex items-center justify-center font-mono text-base bg-purple-500/5" style="border-color: var(--ob)">
                    ☁️
                  </div>
                  <div class="flex flex-col gap-0.5 overflow-hidden">
                    <span class="font-syne font-bold text-xs sm:text-[13px] tracking-tight truncate" style="color: var(--tx)">
                      Weather API Engine Node
                    </span>
                    <span class="text-[10px] truncate" style="color: var(--tx2)">Real-time weather telemetry logs</span>
                  </div>
                </div>
              </td>
              <td class="py-5 px-4 align-middle whitespace-nowrap">
                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-purple-500/10 text-purple-400 border border-purple-500/20">
                  Web Application
                </span>
              </td>
              <td class="py-5 px-4 align-middle">
                <div class="flex flex-wrap gap-1 max-w-full">
                  <span class="font-mono text-[9px] px-1.5 py-0.5 rounded bg-white/5" style="color: var(--tx2)">React.js</span>
                  <span class="font-mono text-[9px] px-1.5 py-0.5 rounded bg-white/5" style="color: var(--tx2)">GSAP</span>
                </div>
              </td>
              <td class="py-5 px-4 align-middle whitespace-nowrap">
                <div class="flex items-center gap-1.5 font-mono text-[11px] font-semibold text-amber-400">
                  <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span> Development
                </div>
              </td>
              <td class="py-5 px-4 align-middle font-mono text-[10px]" style="color: var(--tx3)">
                May 22, 2026
              </td>
              <td class="py-5 px-4 align-middle text-right pr-6 whitespace-nowrap">
                <div class="flex items-center justify-end gap-1.5">
                  <a href="#view-project" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)">👁️</a>
                  <a href="#edit-project" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-amber-400 border transition-colors duration-200" style="border-color: var(--ob)">✏️</a>
                  <button class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-200" style="border-color: rgba(239,68,68,0.15)">🗑️</button>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>

  <style>
    .gsap-proj-header, .gsap-proj-container, .project-table-row { 
      opacity: 0; 
    }
    .gsap-proj-running { 
      transition: none !important; 
    }
    #projectTableEngineContainer::-webkit-scrollbar { 
      display: none !important; 
      width: 0px; 
      height: 0px; 
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const headerElements = gsap.utils.toArray(".gsap-proj-header");
      const tableBox = document.querySelector(".gsap-proj-container");
      const rows = gsap.utils.toArray(".project-table-row");

      if (tableBox) tableBox.classList.add("gsap-proj-running");
      headerElements.forEach(el => el.classList.add("gsap-proj-running"));
      rows.forEach(row => {
        row.classList.add("gsap-proj-running");
        row.style.willChange = "transform, opacity";
      });

      gsap.set(headerElements, { y: -15, opacity: 0 });
      gsap.set(tableBox, { y: 30, opacity: 0 });
      gsap.set(rows, { x: -25, opacity: 0 });

      const projDashboardTimeline = gsap.timeline();

      projDashboardTimeline.to(headerElements, {
        y: 0,
        opacity: 1,
        stagger: 0.08,
        duration: 0.6,
        ease: "power3.out"
      });

      projDashboardTimeline.to(tableBox, {
        y: 0,
        opacity: 1,
        duration: 0.7,
        ease: "power4.out"
      }, "-=0.35");

      projDashboardTimeline.to(rows, {
        x: 0,
        opacity: 1,
        stagger: 0.06,
        duration: 0.65,
        ease: "power3.out",
        onComplete: () => {
          if (tableBox) {
            tableBox.classList.remove("gsap-proj-running");
            tableBox.style.willChange = "auto";
          }
          headerElements.forEach(el => el.classList.remove("gsap-proj-running"));
          rows.forEach(row => {
            row.classList.remove("gsap-proj-running");
            row.style.willChange = "auto";
          });
        }
      }, "-=0.45");
    });
  </script>
</x-my-layouts.admin-main>