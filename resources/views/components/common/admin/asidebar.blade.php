@php
use App\Models\Message;

$unreadMessages = Message::where('is_read', false)->count();
@endphp 

<style>
  .nav-themed {
    background: rgba(5, 5, 14, 0.75);
    border-color: var(--ob);
  }
  html.light .nav-themed {
    background: rgba(255, 255, 255, 0.85);
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
    border-left: 3px solid #a855f7; 
    color: #a855f7 !important; 
  }
  .sidebar-nav-item.active .icon-box { 
    background: rgba(124, 58, 237, .22) !important;
  }
  .sidebar-nav-item:not(.active):hover { 
    background: rgba(124, 58, 237, .06); 
    color: var(--tx) !important;
  }

  ::-webkit-scrollbar { width: 6px; height: 6px; }
  ::-webkit-scrollbar-track { background: transparent; }
  ::-webkit-scrollbar-thumb { background: var(--ob); border-radius: 10px; }
  ::-webkit-scrollbar-thumb:hover { background: var(--ob2); }

  /* Premium Initial State - CSS handles initial layout opacity to prevent flashing */
  .sidebar-nav-item, .triggerSignOutAction {
    opacity: 0;
    will-change: transform, opacity;
  }

  /* Restricts native CSS transitions during GSAP manipulation to prevent rendering stutter */
  .gsap-animating {
    transition: none !important;
  }
</style>

<aside id="matrixSidebar" class="sidebar-themed fixed top-[68px] bottom-0 left-0 w-[240px] border-r pt-8 pb-6 px-4 z-40 flex flex-col justify-between transition-transform duration-[0.35s] cubic-bezier(0.16, 1, 0.3, 1) max-[960px]:-translate-x-full" style="backdrop-filter: blur(24px);">
  
  <nav class="flex flex-col gap-1.5 w-full">
    <a href="{{ route('admin.dashboard') }}" class="sidebar-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} group flex items-center justify-between p-3 rounded-xl font-semibold text-[0.85rem] tracking-tight transition-all duration-200" style="color: var(--tx2)">
      <div class="flex items-center gap-3">
        <div class="icon-box w-8 h-8 rounded-lg flex items-center justify-center transition-colors" style="background: rgba(124,58,237,.08)">📊</div>
        <span>Dashboard</span>
      </div>
    </a>

    <a href="{{ route('admin.projects') }}" class="sidebar-nav-item {{ request()->routeIs('admin.projects') || request()->routeIs('admin.projects.*') ? 'active' : '' }} group flex items-center justify-between p-3 rounded-xl font-semibold text-[0.85rem] tracking-tight transition-all duration-200" style="color: var(--tx2)">
      <div class="flex items-center gap-3">
        <div class="icon-box w-8 h-8 rounded-lg flex items-center justify-center transition-colors" style="background: rgba(124,58,237,.08)">💼</div>
        <span>Projects</span>
      </div>
    </a>

    <a href="{{ route('admin.blogs') }}" class="sidebar-nav-item {{ request()->routeIs('admin.blogs') || request()->routeIs('admin.blogs.*') ? 'active' : '' }} group flex items-center justify-between p-3 rounded-xl font-semibold text-[0.85rem] tracking-tight transition-all duration-200" style="color: var(--tx2)">
      <div class="flex items-center gap-3">
        <div class="icon-box w-8 h-8 rounded-lg flex items-center justify-center transition-colors" style="background: rgba(124,58,237,.08)">📝</div>
        <span>Blogs</span>
      </div>
    </a>

    <a href="{{ route('admin.messages') }}" class="sidebar-nav-item {{ request()->routeIs('admin.messages') || request()->routeIs('admin.messages.*') ? 'active' : '' }} group flex items-center justify-between p-3 rounded-xl font-semibold text-[0.85rem] tracking-tight transition-all duration-200" style="color: var(--tx2)">
      <div class="flex items-center gap-3">
        <div class="icon-box w-8 h-8 rounded-lg flex items-center justify-center transition-colors" style="background: rgba(124,58,237,.08)">📩</div>
        <span>Messages</span>
      </div>

      @if($unreadMessages > 0)
        <span id="messagesBadgeCounter" class="text-[0.65rem] font-bold text-white px-2 py-0.5 rounded-full shadow-sm bg-gradient-to-r from-[#7c3aed] to-[#a855f7]">
          {{ $unreadMessages }}
        </span>
      @endif
    </a>
  </nav>

  <div class="pt-4 border-t" style="border-color: rgba(124,58,237,.12)">
    <button class="triggerSignOutAction w-full flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-[0.85rem] border transition-all duration-200 text-left text-red-400 bg-red-500/5 hover:bg-red-500 hover:text-white" style="border-color: rgba(239,68,68,0.2)">
      <span>🚪 Disconnect</span>
    </button>
  </div>
</aside>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Select sidebar elements for pristine GSAP linear execution
    const sidebarElements = gsap.utils.toArray(".sidebar-nav-item, .triggerSignOutAction");

    // Friction modifier layer injected safely to handle rendering transition states
    sidebarElements.forEach(el => el.classList.add("gsap-animating"));
    
    // Explicitly enforce 'x: -30' and 'opacity: 0' instantly on load
    gsap.set(sidebarElements, { x: -30, opacity: 0 });

    // Premium Linear Stagger Engine Config (Instant Load / No Scroll Dependency)
    gsap.to(sidebarElements, {
      x: 0,
      opacity: 1,
      stagger: 0.12,           // Professional sequential delay (120ms interval) for a crisp build
      duration: 0.85,           // Fluid cinematic runtime timing parameters
      ease: "power4.out",       // Ultimate mathematical drop deceleration curve
      onComplete: () => {
        // Releases nodes securely to unlock original hover states & CSS path dynamics
        sidebarElements.forEach(el => el.classList.remove("gsap-animating"));
      }
    });
  });
</script>