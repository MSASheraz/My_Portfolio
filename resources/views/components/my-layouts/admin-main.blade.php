<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premium Admin Dashboard | MSASheraz Portfolio</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            syne: ['Syne', 'sans-serif'],
            sans: ['DM Sans', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <style>
    /* Public Design System Variable Configurations - Synced with main.txt Content */
    :root {
      /* Accent Colors */
      --p: #7c3aed;
      --p2: #a855f7; 
      --p3: #c084fc;
      --p4: #e9d5ff;
      --pg: rgba(124, 58, 237, .22);
      --ps: rgba(124, 58, 237, .10);

      /* Dark Background Layers */
      --bg: #05050e; 
      --bg2: #08081a; 
      --bg3: #0b0b20;
      --bg4: #0e0e28;

      /* Overlays & Borders */
      --ob: rgba(124, 58, 237, .18); 
      --ob2: rgba(168, 85, 247, .38);
      
      /* Typography System */
      --tx: #eeeeff; 
      --tx2: #7878a0; 
      --tx3: #3e3e60;
      
      /* Card Layout Nodes */
      --card: rgba(255, 255, 255, .04); 
      --cb: rgba(255, 255, 255, .07);
      --nav-h: 68px;

      /* Premium Purple Glow Shadows */
      --sh-card: 0 4px 24px rgba(124, 58, 237, .22), 0 0 0 1px rgba(124, 58, 237, .12);
      --sh-hover: 0 16px 52px rgba(124, 58, 237, .42), 0 0 32px rgba(168, 85, 247, .18);
    }
    
    html.light {
      /* Light Background Layers */
      --bg: #ffffff; 
      --bg2: #f5f3ff; 
      --bg3: #ede9ff;
      --bg4: #e8e2ff;

      /* Overlays & Borders */
      --ob: rgba(124, 58, 237, .14); 
      --ob2: rgba(124, 58, 237, .28);
      
      /* Typography System */
      --tx: #0a0a1a; 
      --tx2: #5a5a80; 
      --tx3: #9898bb;
      
      /* Card Layout Nodes & Core Chips */
      --card: rgba(124, 58, 237, .04); 
      --cb: rgba(124, 58, 237, .10);
      --pg: rgba(124, 58, 237, .09); 
      --ps: rgba(124, 58, 237, .05);

      /* Subtle Clean Light Shadows */
      --sh-card: 0 4px 16px rgba(0, 0, 0, .07);
      --sh-hover: 0 12px 36px rgba(124, 58, 237, .16);
    }

    /* Core Architectural Alignment Styles */
    html.dark body {
      background:
        radial-gradient(ellipse 80% 50% at 0% 0%, rgba(76, 29, 149, .38) 0%, transparent 55%),
        radial-gradient(ellipse 60% 40% at 100% 20%, rgba(109, 40, 217, .22) 0%, transparent 50%),
        radial-gradient(ellipse 50% 35% at 50% 100%, rgba(139, 92, 246, .14) 0%, transparent 55%),
        radial-gradient(ellipse 40% 30% at 80% 60%, rgba(124, 58, 237, .10) 0%, transparent 50%),
        var(--bg);
    }
    html.light body { 
      background: var(--bg); 
    }
    
    body {
      color: var(--tx);
      transition: background-color 0.5s ease, color 0.5s ease;
      overflow-x: hidden;
    }

    /* Global Panel & Interactive Rules */
    .premium-panel {
      background: var(--card);
      border: 1px solid var(--cb);
      box-shadow: var(--sh-card);
      transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.3s cubic-bezier(0.25, 1, 0.5, 1), border-color 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    }
    
    .stat-card::before {
      content: '';
      position: absolute;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(124, 58, 237, .14), transparent 70%);
      top: -50px;
      right: -40px;
      pointer-events: none;
    }

    .stat-card::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--p), var(--p2), var(--p3));
      transform: scaleX(0);
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .stat-card:hover::after { transform: scaleX(1); }

    /* Panel Views Layout Rule Matrix */
    .admin-panel {
      display: none;
      opacity: 0;
    }
    .admin-panel.active {
      display: block;
    }

    /* Navigation/Sidebar Dynamic Theming Rules */
    .nav-themed {
      background: rgba(5, 5, 14, 0.88);
      backdrop-filter: blur(28px) saturate(180%);
      -webkit-backdrop-filter: blur(28px) saturate(180%);
      border-color: var(--ob);
    }
    html.light .nav-themed {
      background: rgba(255, 255, 255, 0.92);
      border-color: var(--ob);
    }

    .sidebar-themed {
      background: rgba(8, 8, 24, 0.85);
      border-color: var(--ob);
    }
    html.light .sidebar-themed {
      background: rgba(245, 243, 255, 0.9);
      border-color: var(--ob);
    }

    .sidebar-nav-item.active { 
      background: rgba(124, 58, 237, .14);
      border-left: 3px solid var(--p2); 
      color: var(--p2) !important; 
    }
    .sidebar-nav-item.active .icon-box { 
      background: rgba(124, 58, 237, .22) !important;
    }
    .sidebar-nav-item:not(.active):hover { 
      background: rgba(124, 58, 237, .06); 
      color: var(--tx) !important;
    }

    ::-webkit-scrollbar { width: 4px; height: 4px; }
    ::-webkit-scrollbar-track { background: var(--bg); }
    ::-webkit-scrollbar-thumb { background: var(--p); border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: var(--p2); }
  </style>
</head>
<body class="font-sans antialiased min-h-screen pt-[68px]">

 <x-common.admin.nav />

<x-common.admin.asidebar />

  <div id="sidebarShieldBackdrop" class="fixed inset-0 z-30 bg-black/40 backdrop-blur-sm hidden min-[960px]:hidden"></div>

{{$slot}}

  <div id="signOutModalBackdropNode" class="fixed inset-0 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300">
    <div class="absolute inset-0 bg-[rgba(5,5,14,.72)] backdrop-blur-[8px]"></div>
    <div id="signOutModalCapsuleBody" class="relative w-full max-w-sm rounded-[24px] p-8 border text-center transform scale-95 transition-all duration-300 shadow-2xl" style="background: var(--bg2); border-color: var(--ob)">
      <div class="w-14 h-14 rounded-2xl bg-red-500/10 flex items-center justify-center text-xl mx-auto mb-5">🚪</div>
      <h3 class="font-syne font-bold text-lg mb-2" style="color: var(--tx)">Terminate Session?</h3>
      <p class="text-xs font-medium mb-6 leading-relaxed" style="color: var(--tx2)">Are you sure you want to sign out? You will need to re-verify credentials to access data nodes.</p>
      <div class="grid grid-cols-2 gap-3">
        <button id="closeSignOutModalTrigger" class="btn-ghost px-4 py-2.5 rounded-xl text-xs font-bold border transition-colors" style="border-color: var(--ob); color: var(--tx)">Cancel</button>
        <button id="confirmSignOutActionTrigger" class="px-4 py-2.5 rounded-xl text-xs font-bold text-white tracking-wide shadow-lg bg-gradient-to-r from-[#ef4444] to-[#dc2626]">Disconnect</button>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      
      // ------------------------------------------------------------
      // A. STORAGE DRIVEN SYSTEM THEME MEMORY PRESERVE LOOKUP LOGIC
      // ------------------------------------------------------------
      const currentPersistedThemeSystemState = localStorage.getItem("dashboardTheme") || "dark";
      document.documentElement.className = currentPersistedThemeSystemState;

      // Theme toggle hook mechanics
      document.getElementById("masterThemeToggle").addEventListener("click", () => {
        const root = document.documentElement;
        const targetThemeState = root.classList.contains("dark") ? "light" : "dark";
        root.className = targetThemeState;
        localStorage.setItem("dashboardTheme", targetThemeState);
      });

      // ------------------------------------------------------------
      // B. PROFILE SELECTION RUNTIME INTERACTION ENGINE DROP CAP
      // ------------------------------------------------------------
      const avatarAnchor = document.getElementById("avatarAnchor");
      const avatarDropdown = document.getElementById("avatarDropdown");
      
      avatarAnchor.addEventListener("click", (e) => {
        e.stopPropagation();
        avatarDropdown.classList.toggle("pointer-events-none");
        avatarDropdown.classList.toggle("opacity-0");
        avatarDropdown.classList.toggle("scale-95");
      });
      document.addEventListener("click", () => {
        avatarDropdown.classList.add("opacity-0", "scale-95", "pointer-events-none");
      });

      // ------------------------------------------------------------
      // C. RE-ENGINEERED STRUCTURAL SIDEBAR MODULE LAYOUT SYSTEM PANEL ROUTER
      // ------------------------------------------------------------
      const sidebarNavItems = document.querySelectorAll(".sidebar-nav-item");
      const structuralPanels = document.querySelectorAll(".admin-panel");

      sidebarNavItems.forEach(item => {
        // Only intercept clicks for non-route sidebar controls.
        if (item.tagName.toLowerCase() === 'a' && item.getAttribute('href') && item.getAttribute('href') !== '#') {
          return;
        }

        item.addEventListener("click", (e) => {
          e.preventDefault();
          if (item.classList.contains("active")) return;

          sidebarNavItems.forEach(nav => nav.classList.remove("active"));
          item.classList.add("active");

          structuralPanels.forEach(p => p.classList.remove("active"));
          const targetActiveNodePanelID = "panel-" + item.dataset.panel;
          const targetActiveNodePanelInstance = document.getElementById(targetActiveNodePanelID);
          
          if(targetActiveNodePanelInstance) {
            targetActiveNodePanelInstance.classList.add("active");
            gsap.fromTo(targetActiveNodePanelInstance, 
              { opacity: 0, y: 15 }, 
              { opacity: 1, y: 0, duration: 0.45, ease: 'power2.out' }
            );
            
            // Re-trigger numbers rendering for smooth interactive transitions
            const localCounters = targetActiveNodePanelInstance.querySelectorAll(".stat-num");
            if(localCounters.length > 0) initNumericalMicroCounters(localCounters);
          }

          // Mobile responsive collapse fallback trigger logic auto sync
          if(!document.getElementById("matrixSidebar").classList.contains("max-[960px]:-translate-x-full")) {
            toggleMobileResponsiveSidebarDrawerShell();
          }
        });
      });

      // ------------------------------------------------------------
      // D. GSAP STATISTICAL MICROCOUNTERS DATA MATRIX PACK RENDERER
      // ------------------------------------------------------------
      function initNumericalMicroCounters(elements) {
        elements.forEach(num => {
          const numericalTerminalBoundValue = parseInt(num.dataset.target, 10) || 0;
          gsap.fromTo(num, 
            { innerText: 0 },
            {
              innerText: numericalTerminalBoundValue,
              duration: 1.5,
              snap: { innerText: 1 },
              ease: "power2.out"
            }
          );
        });
      }
      initNumericalMicroCounters(document.querySelectorAll(".stat-num"));

      // ------------------------------------------------------------
      // E. SESSION DISCONNECT CONFIRMATION INTERACTIVE VIEW MODULE SIGN OUT
      // ------------------------------------------------------------
      const modalBackdropNode = document.getElementById("signOutModalBackdropNode");
      const modalCapsuleBody = document.getElementById("signOutModalCapsuleBody");

      document.querySelectorAll(".triggerSignOutAction").forEach(btn => {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
          modalBackdropNode.classList.remove("pointer-events-none", "opacity-0");
          gsap.fromTo(modalCapsuleBody, 
            { scale: 0.92, opacity: 0 }, 
            { scale: 1, opacity: 1, duration: 0.3, ease: "power2.out" }
          );
        });
      });

      function hideSignOutConfirmationModalContainerSystemNode() {
        gsap.to(modalCapsuleBody, {
          scale: 0.92, opacity: 0, duration: 0.25, ease: "power2.in", onComplete: () => {
            modalBackdropNode.classList.add("pointer-events-none", "opacity-0");
          }
        });
      }
      document.getElementById("closeSignOutModalTrigger").addEventListener("click", hideSignOutConfirmationModalContainerSystemNode);
      document.getElementById("confirmSignOutActionTrigger").addEventListener("click", () => {
        alert("Session terminated successfully.");
        hideSignOutConfirmationModalContainerSystemNode();
      });

      // ------------------------------------------------------------
      // F. RESPONSIVE COMPONENT MOBILE DRAWER DISPATCH MECHANICS
      // ------------------------------------------------------------
      const hamburgerTrigger = document.getElementById("hamburgerTrigger");
      const matrixSidebarShell = document.getElementById("matrixSidebar");
      const sidebarShieldBackdrop = document.getElementById("sidebarShieldBackdrop");

      function toggleMobileResponsiveSidebarDrawerShell() {
        const isHidden = matrixSidebarShell.classList.contains("max-[960px]:-translate-x-full");
        if (isHidden) {
          matrixSidebarShell.classList.remove("max-[960px]:-translate-x-full");
          sidebarShieldBackdrop.classList.remove("hidden");
        } else {
          matrixSidebarShell.classList.add("max-[960px]:-translate-x-full");
          sidebarShieldBackdrop.classList.add("hidden");
        }
      }
      hamburgerTrigger.addEventListener("click", toggleMobileResponsiveSidebarDrawerShell);
      sidebarShieldBackdrop.addEventListener("click", toggleMobileResponsiveSidebarDrawerShell);
    });
  </script>
</body>
</html>