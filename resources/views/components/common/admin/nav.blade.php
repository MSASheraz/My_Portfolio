<style>
  .admin-panel {
    display: none;
    opacity: 0;
  }
  .admin-panel.active {
    display: block;
  }

  /* Premium GSAP Initial State Settings for Navbar Elements - Prevents Flashing */
  #hamburgerTrigger, #navLogo {
    opacity: 0;
    transform: translateX(-20px); /* Left side sliding start point */
    will-change: transform, opacity;
  }

  #navSearch {
    opacity: 0;
    transform: translateY(-15px); /* Top down subtle entry point */
    will-change: transform, opacity;
  }

  #masterThemeToggle, .relative.group {
    opacity: 0;
    transform: translateX(20px); /* Right side sliding start point */
    will-change: transform, opacity;
  }

  /* Force override CSS transitions during GSAP execution to guarantee 60fps smoothness */
  .gsap-animating {
    transition: none !important;
  }
</style>

<nav class="nav-themed fixed top-0 left-0 right-0 z-50 flex items-center justify-between border-b backdrop-blur-[28px] saturate-[180%] transition-all duration-300" style="height: var(--nav-h); padding: 0 clamp(1.5rem, 4vw, 3rem);">
  
  <div class="flex items-center gap-4">
    <button id="hamburgerTrigger" class="block min-[960px]:hidden text-2xl focus:outline-none transition-transform active:scale-95" style="color: var(--tx)">
      ☰
    </button>
    <div id="navLogo" class="flex items-center gap-3">
      <a href="#" class="font-syne font-extrabold text-xl tracking-tighter" style="color: var(--tx)">
        MSASheraz<span style="color: var(--p2)">.</span>
      </a>
      <span class="font-sans text-[0.7rem] font-bold tracking-[0.1em] uppercase hidden sm:inline-block" style="color: var(--tx3)">
        Admin Panel
      </span>
    </div>
  </div>

  <div id="navSearch" class="hidden md:flex items-center relative">
    <span class="absolute left-3.5 text-sm pointer-events-none" style="color: var(--tx2)">🔍</span>
    <input type="text" placeholder="Search parameters..." class="text-xs font-medium rounded-[10px] pl-9 pr-4 py-2 w-[240px] focus:outline-none focus:border-[rgba(168,85,247,.4)] transition-all duration-300" style="background: rgba(255,255,255,.04); border: 1px solid var(--ob); color: var(--tx);">
  </div>

  <div id="navActions" class="flex items-center gap-4">
    <button id="masterThemeToggle" class="w-[38px] h-[38px] rounded-full flex items-center justify-center border text-sm shadow-[0_0_14px_rgba(124,58,237,.28)] transition-all duration-300 hover:scale-105 active:scale-95" style="border-color: rgba(168,85,247,.5); background: var(--card);">
      <span class="dark:hidden">🌙</span>
      <span class="hidden dark:inline">☀️</span>
    </button>

    <div class="relative group">
      <div id="avatarAnchor" class="w-[38px] h-[38px] rounded-full bg-gradient-to-tr from-[#7c3aed] to-[#c084fc] flex items-center justify-center font-syne font-bold text-white text-xs cursor-pointer shadow-md transform transition-transform duration-300 hover:scale-105">
        MS
      </div>
      <div id="avatarDropdown" class="absolute right-0 mt-2.5 w-48 rounded-xl border p-2 shadow-2xl opacity-0 scale-95 pointer-events-none transition-all duration-300 flex flex-col gap-0.5" style="background: var(--bg2); border-color: var(--ob)">
        <a href="#" class="px-3 py-2 text-xs font-semibold rounded-lg hover:bg-[rgba(124,58,237,.1)] transition-colors" style="color: var(--tx)">👤 Profile Overview</a>
        <hr class="my-1" style="border-color: var(--ob)">
        <button class="triggerSignOutAction px-3 py-2 text-xs font-bold text-left rounded-lg hover:bg-red-500/10 text-[#ef4444] transition-colors">🚪 Sign Out</button>
      </div>
    </div>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Select items safely for linear execution
    const leftElements = gsap.utils.toArray("#hamburgerTrigger, #navLogo");
    const centerElement = gsap.utils.toArray("#navSearch");
    const rightElements = gsap.utils.toArray("#masterThemeToggle, .relative.group");
    const allNavbarItems = [...leftElements, ...centerElement, ...rightElements];

    // CSS class inject karke transition collisions rokein
    allNavbarItems.forEach(el => el.classList.add("gsap-animating"));

    // Unified Master Timeline - Triggers immediately on page load
    const navTimeline = gsap.timeline();

    // 1. Left elements (Hamburger and Logo) smooth cascade from left
    navTimeline.to(leftElements, {
      x: 0,
      opacity: 1,
      stagger: 0.1,
      duration: 0.7,
      ease: "power4.out"
    });

    // 2. Center Search input drops seamlessly from top (Overlapped for fluidity)
    navTimeline.to(centerElement, {
      y: 0,
      opacity: 1,
      duration: 0.6,
      ease: "power3.out"
    }, "-=0.5");

    // 3. Right actions (Theme toggle and Profile avatar) slide from right
    navTimeline.to(rightElements, {
      x: 0,
      opacity: 1,
      stagger: 0.1,
      duration: 0.7,
      ease: "power4.out",
      onComplete: () => {
        // Safe release to restore pristine native hover states, active transitions & dropdown physics
        allNavbarItems.forEach(el => el.classList.remove("gsap-animating"));
      }
    }, "-=0.5");
  });
</script>