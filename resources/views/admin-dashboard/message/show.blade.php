<x-my-layouts.admin-main>
  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-8 p-6 sm:p-8 w-full max-w-full overflow-x-hidden">
      
      <div id="msgShowConsoleHeader" class="gsap-show-fade flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="flex items-center gap-3.5">
          <a href="#back-to-messages" class="group inline-flex items-center justify-center w-10 h-10 rounded-xl border transition-all duration-300 bg-white/[0.02] light:bg-black/[0.02] hover:bg-[rgba(124,58,237,0.12)] hover:scale-105" style="border-color: var(--ob); color: var(--tx2);" title="Back to Inbox">
            <span class="transform group-hover:-translate-x-1 transition-transform duration-300 text-sm">🩵</span>
          </a>
          <div>
            <span class="font-syne font-bold text-[0.65rem] tracking-[0.2em] uppercase block" style="color: var(--p2)">
              Inbound Ledger Inspection
            </span>
            <h1 class="font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.4rem, 2.8vw, 1.8rem); line-height: 1.2;">
              Message Node Document
            </h1>
          </div>
        </div>

        <div class="flex items-center gap-2 shrink-0">
          <a href="https://wa.me/9230000757641" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl font-syne font-bold text-xs uppercase tracking-wider border bg-emerald-500/5 hover:bg-emerald-500 text-emerald-400 hover:text-white transition-all duration-300" style="border-color: rgba(16,185,129,0.2);">
            <span>💬 WhatsApp Sync</span>
          </a>
          <button class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-red-500/5 hover:bg-red-500 hover:text-white text-[#ef4444] border transition-all duration-300" style="border-color: rgba(239,68,68,0.15)">
            🗑️
          </button>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        <div class="gsap-show-card space-y-6 rounded-[24px] border p-6 backdrop-blur-md" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
          <div class="border-b pb-4" style="border-color: var(--ob)">
            <h3 class="font-syne font-bold text-xs uppercase tracking-widest" style="color: var(--p3)">Transmission Metadata</h3>
          </div>

          <div class="space-y-4">
            <div class="space-y-1">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">Sender Name</span>
              <p class="text-sm font-syne font-extrabold" style="color: var(--tx)">Ali Ahmed</p>
            </div>

            <div class="space-y-1">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">Email Address</span>
              <p class="text-xs font-mono font-medium truncate select-all" style="color: var(--tx2)">ali.ahmed@matrix.com</p>
            </div>

            <div class="space-y-1">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">WhatsApp Secure Route</span>
              <p class="text-xs font-mono font-semibold" style="color: var(--tx2)">+92 300 1234567</p>
            </div>

            <div class="space-y-1">
              <span class="text-[10px] uppercase font-bold tracking-wider block" style="color: var(--tx3)">Received Timestamp</span>
              <p class="text-xs font-mono" style="color: var(--tx3)">June 22, 2026 • 02:10 PM</p>
            </div>
          </div>
        </div>

        <div class="gsap-show-body lg:col-span-2 space-y-6 rounded-[24px] border p-6 sm:p-8 backdrop-blur-md" style="background: var(--card); border-color: var(--cb); box-shadow: var(--sh-card);">
          
          <div class="space-y-2 border-b pb-6" style="border-color: var(--ob)">
            <span class="inline-block text-[9px] font-bold px-2 py-0.5 rounded-md bg-purple-500/10 border uppercase tracking-wider text-purple-400" style="border-color: rgba(168,85,247,0.2);">
              Inquiry Subject Node
            </span>
            <h2 class="font-syne font-extrabold text-base sm:text-lg tracking-tight" style="color: var(--tx)">
              Solar Array Integration & Matrix Core Sync Assistance
            </h2>
          </div>

          <div class="space-y-4 text-xs sm:text-sm font-medium leading-relaxed" style="color: var(--tx2)">
            <p class="whitespace-pre-line bg-white/[0.01] light:bg-slate-50/40 p-4 rounded-xl border font-sans" style="border-color: var(--ob)">
              I need assistance deploying customized advanced schemas into my industrial enterprise dashboard node grid panel safely. 
              
              The linear layout stabilizers are causing unexpected layout shifts during horizontal container rendering. Looking forward to structuring standard deceleration paths inside the production environment setup. Please review the transmission request logs.
            </p>
          </div>

          <div class="pt-4 flex items-center gap-2 text-[10px] font-mono border-t" style="border-color: var(--ob); color: var(--tx3)">
            <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
            Node Status: Unresolved / Awaiting System Response Team Dispatch
          </div>

        </div>

      </div>

    </div>
  </div>

  <style>
    .gsap-show-fade, .gsap-show-card, .gsap-show-body {
      opacity: 0;
    }
    .gsap-show-active {
      transition: none !important;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      gsap.registerPlugin(ScrollTrigger);

      const showHeader = document.querySelector(".gsap-show-fade");
      const showMetaCard = document.querySelector(".gsap-show-card");
      const showBodyCard = document.querySelector(".gsap-show-body");

      // Inject runtime state animation anchors
      if (showHeader) showHeader.classList.add("gsap-show-active");
      if (showMetaCard) showMetaCard.classList.add("gsap-show-active");
      if (showBodyCard) showBodyCard.classList.add("gsap-show-active");

      // Set elegant starting elevations
      gsap.set(showHeader, { y: -20, opacity: 0 });
      gsap.set(showMetaCard, { x: -30, opacity: 0 });
      gsap.set(showBodyCard, { x: 30, opacity: 0 });

      // Build main view orchestration timeline that runs immediately on load
      const msgShowTimeline = gsap.timeline();

      // 1. Top action console fades down smoothly
      msgShowTimeline.to(showHeader, {
        y: 0,
        opacity: 1,
        duration: 0.6,
        ease: "power3.out"
      });

      // 2. Twin Columns execute cross-fade sliding architecture together with cinematic ease
      msgShowTimeline.to([showMetaCard, showBodyCard], {
        x: 0,
        opacity: 1,
        stagger: 0.12,          // Slight split second gap between left metadata and right content loading
        duration: 0.85,
        ease: "power4.out",
        onComplete: () => {
          // Release layout tracking grids for maximum DOM execution power
          if (showHeader) showHeader.classList.remove("gsap-show-active");
          if (showMetaCard) showMetaCard.classList.remove("gsap-show-active");
          if (showBodyCard) showBodyCard.classList.remove("gsap-show-active");
        }
      }, "-=0.35");

    });
  </script>
</x-my-layouts.admin-main>