<x-my-layouts.admin-main>

</x-my-layouts.admin-main><x-my-layouts.admin-main>
  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-8 p-6 w-full max-w-full overflow-x-hidden"> 
      
      <div id="messageHeaderConsole" class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="space-y-1.5">
          <span class="gsap-msg-header font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase block" style="color: var(--p2)">
            Inbound Communications Matrix
          </span>
          <h1 class="gsap-msg-header font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.8rem, 3.5vw, 2.4rem); line-height: 1.15;">
            User Messages
          </h1>
          <p class="gsap-msg-header text-xs font-medium" style="color: var(--tx2)">
            Inspect user inquiries, track communication logs, and manage live routing network channels safely.
          </p>
        </div>
      </div>

      <div id="messageTableEngineContainer" class="gsap-msg-container w-full overflow-x-hidden rounded-[22px] border" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
        <table class="w-full text-left border-collapse table-fixed">
          
          <thead>
            <tr class="border-b font-syne text-[11px] uppercase tracking-wider font-bold" style="border-color: var(--ob); background: rgba(124,58,237,0.02);">
              <th class="py-5 px-4 w-[18%]">User Details</th>
              <th class="py-5 px-4 w-[16%]">WhatsApp Node</th>
              <th class="py-5 px-4 w-[20%]">Subject Matrix</th>
              <th class="py-5 px-4 w-[34%]">Message Content</th>
              <th class="py-5 px-4 text-right w-[12%] pr-6">Actions</th>
            </tr>
          </thead>
          
          <tbody id="messageTableEngineBody" class="divide-y font-sans text-xs" style="border-color: var(--cb);">
            
          @if($messages->isNotEmpty())
          @foreach ($messages as $message)
            <tr class="message-table-row group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200">
              <td class="py-5 px-4 align-middle">
                <div class="flex flex-col gap-0.5 justify-center overflow-hidden">
                  <span class="font-syne font-bold text-xs sm:text-[13px] tracking-tight truncate" style="color: var(--tx)">
                    {{ $message->name }}
                  </span>
                  <span class="font-mono text-[10px] truncate" style="color: var(--tx3)">{{$message->email}}</span>
                </div>
              </td>
              <td class="py-5 px-4 align-middle whitespace-nowrap">
                <a href="https://wa.me/923001234567" target="_blank" class="inline-flex items-center gap-1.5 font-mono text-[11px] font-semibold hover:text-emerald-400 transition-colors duration-200" style="color: var(--tx2)">
                  <span class="text-xs">💬</span> +{{$message->phone}}
                </a>
              </td>
              <td class="py-5 px-4 align-middle font-syne font-bold text-xs" style="color: var(--p3)">
                <span class="truncate block">{{$message->subject}}</span>
              </td>
              <td class="py-5 px-4 align-middle text-xs font-medium leading-relaxed" style="color: var(--tx2)">
                <p class="line-clamp-2 italic">"{{$message->message}}"</p>
              </td>
              <td class="py-5 px-4 align-middle text-right pr-6 whitespace-nowrap">
                <div class="flex items-center justify-end gap-1.5">
                  <a href="#view-msg" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)">👁️</a>
                  <button class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-200" style="border-color: rgba(239,68,68,0.15)">🗑️</button>
                </div>
              </td>
            </tr>
            
          @endforeach
          )
          @endif

            <tr class="message-table-row group hover:bg-[rgba(124,58,237,0.02)] transition-colors duration-200">
              <td class="py-5 px-4 align-middle">
                <div class="flex flex-col gap-0.5 justify-center overflow-hidden">
                  <span class="font-syne font-bold text-xs sm:text-[13px] tracking-tight truncate" style="color: var(--tx)">
                    Sara Khan
                  </span>
                  <span class="font-mono text-[10px] truncate" style="color: var(--tx3)">sara.k@uxengine.io</span>
                </div>
              </td>
              <td class="py-5 px-4 align-middle whitespace-nowrap">
                <a href="https://wa.me/923219876543" target="_blank" class="inline-flex items-center gap-1.5 font-mono text-[11px] font-semibold hover:text-emerald-400 transition-colors duration-200" style="color: var(--tx2)">
                  <span class="text-xs">💬</span> +92 321 9876543
                </a>
              </td>
              <td class="py-5 px-4 align-middle font-syne font-bold text-xs" style="color: var(--p3)">
                <span class="truncate block">GSAP Timeline Sync</span>
              </td>
              <td class="py-5 px-4 align-middle text-xs font-medium leading-relaxed" style="color: var(--tx2)">
                <p class="line-clamp-2 italic">"Your layout stagger animations are incredible. Is it possible to integrate clean custom skew triggers inside responsive table nodes?"</p>
              </td>
              <td class="py-5 px-4 align-middle text-right pr-6 whitespace-nowrap">
                <div class="flex items-center justify-end gap-1.5">
                  <a href="#view-msg" class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)">👁️</a>
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
    .gsap-msg-header, .gsap-msg-container, .message-table-row { 
      opacity: 0; 
    }
    .gsap-msg-running { 
      transition: none !important; 
    }
    #messageTableEngineContainer::-webkit-scrollbar { 
      display: none !important; 
      width: 0px; 
      height: 0px; 
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      gsap.registerPlugin(ScrollTrigger);

      // DOM Core Selection
      const headerElements = gsap.utils.toArray(".gsap-msg-header");
      const tableBox = document.querySelector(".gsap-msg-container");
      const rows = gsap.utils.toArray(".message-table-row");

      // Inject strict state animation layer anchors
      if (tableBox) tableBox.classList.add("gsap-msg-running");
      headerElements.forEach(el => el.classList.add("gsap-msg-running"));
      rows.forEach(row => {
        row.classList.add("gsap-msg-running");
        row.style.willChange = "transform, opacity";
      });

      // Coordinates setup mapping
      gsap.set(headerElements, { y: -15, opacity: 0 });
      gsap.set(tableBox, { y: 30, opacity: 0 });
      gsap.set(rows, { x: -25, opacity: 0 });

      // Build integrated dashboard master timeline that runs immediately on load
      const msgDashboardTimeline = gsap.timeline();

      // 1. Cascade top metadata texts smoothly
      msgDashboardTimeline.to(headerElements, {
        y: 0,
        opacity: 1,
        stagger: 0.08,
        duration: 0.6,
        ease: "power3.out"
      });

      // 2. Unfold main message data table sheet
      msgDashboardTimeline.to(tableBox, {
        y: 0,
        opacity: 1,
        duration: 0.7,
        ease: "power4.out"
      }, "-=0.35");

      // 3. Stagger each user log row horizontally from left to right frame
      msgDashboardTimeline.to(rows, {
        x: 0,
        opacity: 1,
        stagger: 0.09,
        duration: 0.75,
        ease: "power3.out",
        onComplete: () => {
          // Safe pipeline teardown for interaction efficiency
          if (tableBox) {
            tableBox.classList.remove("gsap-msg-running");
            tableBox.style.willChange = "auto";
          }
          headerElements.forEach(el => el.classList.remove("gsap-msg-running"));
          rows.forEach(row => {
            row.classList.remove("gsap-msg-running");
            row.style.willChange = "auto";
          });
        }
      }, "-=0.45");

    });
  </script>
</x-my-layouts.admin-main>