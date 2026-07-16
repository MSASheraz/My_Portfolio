<x-my-layouts.admin-main>

@php
    $totalProjects = \App\Models\Portfolio::count();
    $totalBlogs = \App\Models\Blog::count();
    $totalMessages = \App\Models\Message::count();
    $unreadMessages = \App\Models\Message::where('is_read', false)->count();

    $latestBlogs = \App\Models\Blog::latest()->take(5)->get();
    $latestMessages = \App\Models\Message::latest()->take(5)->get();
@endphp



  <div class="pl-0 min-[960px]:pl-[240px] w-full max-w-full overflow-x-hidden transition-all duration-300">
    <div class="space-y-8 p-6 w-full max-w-full overflow-x-hidden">

      <!-- Header Console -->
      <div id="dashboardHeaderConsole" class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b pb-6" style="border-color: var(--ob)">
        <div class="space-y-1.5">
          <span class="gsap-dash-header font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase block" style="color: var(--p2)">
            Admin Command Center
          </span>
          <h1 class="gsap-dash-header font-syne font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-[#c084fc] to-[#7c3aed] light:from-[#0a0a1a] light:to-[#7c3aed]" style="font-size: clamp(1.8rem, 3.5vw, 2.4rem); line-height: 1.15;">
            Dashboard Overview
          </h1>
          <p class="gsap-dash-header text-xs font-medium" style="color: var(--tx2)">
            Professional metrics, quick navigation, and latest activity—fully synced with your purple admin design system.
          </p>
        </div>

        <div class="shrink-0 gsap-dash-header-btn">
          <a href="{{ route('admin.projects') }}" class="group relative inline-flex items-center gap-2 px-5 py-3 rounded-xl font-syne font-bold text-xs uppercase tracking-wider overflow-hidden transition-all duration-300 border border-[rgba(168,85,247,0.3)] shadow-[0_0_20px_rgba(124,58,237,0.15)] hover:shadow-[0_0_30px_rgba(124,58,237,0.35)]" style="background: linear-gradient(135deg, var(--p) 0%, var(--p2) 100%); color: #ffffff;">
            <span>🚀 Open Projects</span>
            <span class="transform group-hover:translate-x-1 transition-transform duration-300">➔</span>
          </a>
        </div>
      </div>

      <!-- KPI Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
        <div class="premium-panel stat-card relative rounded-[20px] p-5 overflow-hidden">
          <div class="absolute -right-10 -top-10 w-28 h-28 rounded-full bg-gradient-to-br from-[#7c3aed]/20 to-[#a855f7]/0 blur-2xl"></div>
          <div class="flex items-start justify-between gap-4">
            <div class="space-y-2">
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--tx2)">Total Projects</span>
              <div class="stat-num font-syne font-extrabold text-3xl" style="color: var(--tx)" data-target="{{ $totalProjects }}">0</div>
            </div>
            <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center text-xl" style="border: 1px solid rgba(168,85,247,0.2);">
              💼
            </div>
          </div>
        </div>

        <div class="premium-panel stat-card relative rounded-[20px] p-5 overflow-hidden">
          <div class="absolute -right-10 -top-10 w-28 h-28 rounded-full bg-gradient-to-br from-[#a855f7]/20 to-[#c084fc]/0 blur-2xl"></div>
          <div class="flex items-start justify-between gap-4">
            <div class="space-y-2">
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--tx2)">Total Blogs</span>
              <div class="stat-num font-syne font-extrabold text-3xl" style="color: var(--tx)" data-target="{{ $totalBlogs }}">0</div>
            </div>
            <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center text-xl" style="border: 1px solid rgba(168,85,247,0.2);">
              📝
            </div>
          </div>
        </div>

        <div class="premium-panel stat-card relative rounded-[20px] p-5 overflow-hidden">
          <div class="absolute -right-10 -top-10 w-28 h-28 rounded-full bg-gradient-to-br from-[#7c3aed]/20 to-[#e9d5ff]/0 blur-2xl"></div>
          <div class="flex items-start justify-between gap-4">
            <div class="space-y-2">
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--tx2)">Total Messages</span>
              <div class="stat-num font-syne font-extrabold text-3xl" style="color: var(--tx)" data-target="{{ $totalMessages }}">0</div>
            </div>
            <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center text-xl" style="border: 1px solid rgba(168,85,247,0.2);">
              📩
            </div>
          </div>
        </div>

        <div class="premium-panel stat-card relative rounded-[20px] p-5 overflow-hidden">
          <div class="absolute -right-10 -top-10 w-28 h-28 rounded-full bg-gradient-to-br from-[#ef4444]/20 to-[#a855f7]/0 blur-2xl"></div>
          <div class="flex items-start justify-between gap-4">
            <div class="space-y-2">
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--tx2)">Unread Messages</span>
              <div class="stat-num font-syne font-extrabold text-3xl" style="color: #ef4444" data-target="{{ $unreadMessages }}">0</div>
              <span class="block text-[11px] font-semibold" style="color: var(--tx3)">
                {# animated counter via admin layout #}
              </span>
            </div>
            <div class="w-10 h-10 rounded-xl bg-red-500/10 flex items-center justify-center text-xl" style="border: 1px solid rgba(239,68,68,0.22);">
              🔴
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
        <a href="{{ route('admin.projects') }}" class="premium-panel rounded-[22px] p-6 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[var(--sh-hover)] border" style="border-color: var(--cb);">
          <div class="flex items-center justify-between gap-4">
            <div>
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--p2)">Projects</span>
              <h2 class="mt-2 font-syne font-extrabold text-xl" style="color: var(--tx)">Manage your portfolio</h2>
              <p class="mt-1 text-xs font-medium" style="color: var(--tx2)">Create, update, and deploy projects.</p>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-purple-500/10 flex items-center justify-center text-2xl" style="border: 1px solid rgba(168,85,247,0.2);">💼</div>
          </div>
        </a>

        <a href="{{ route('admin.blogs') }}" class="premium-panel rounded-[22px] p-6 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[var(--sh-hover)] border" style="border-color: var(--cb);">
          <div class="flex items-center justify-between gap-4">
            <div>
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--p2)">Blogs</span>
              <h2 class="mt-2 font-syne font-extrabold text-xl" style="color: var(--tx)">Update articles</h2>
              <p class="mt-1 text-xs font-medium" style="color: var(--tx2)">Latest posts and editorial control.</p>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-purple-500/10 flex items-center justify-center text-2xl" style="border: 1px solid rgba(168,85,247,0.2);">📝</div>
          </div>
        </a>

        <a href="{{ route('admin.messages') }}" class="premium-panel rounded-[22px] p-6 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[var(--sh-hover)] border" style="border-color: var(--cb);">
          <div class="flex items-center justify-between gap-4">
            <div>
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--p2)">Messages</span>
              <h2 class="mt-2 font-syne font-extrabold text-xl" style="color: var(--tx)">Inbound communications</h2>
              <p class="mt-1 text-xs font-medium" style="color: var(--tx2)">Unread: <span style="color: #ef4444; font-weight: 800">{{ $unreadMessages }}</span></p>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-red-500/10 flex items-center justify-center text-2xl" style="border: 1px solid rgba(239,68,68,0.22);">📩</div>
          </div>
        </a>
      </div>

      <!-- Latest Activity -->
      <div class="gsap-dash-table-container premium-panel rounded-[26px] border overflow-hidden">

        <div class="p-6 border-b" style="border-color: var(--ob)">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
              <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--p2)">Latest Activity</span>
              <h3 class="mt-2 font-syne font-extrabold text-lg" style="color: var(--tx)">Recent blogs & messages</h3>
              <p class="text-xs mt-1 font-medium" style="color: var(--tx2)">Quick glance at the newest records.</p>
            </div>
            <div class="hidden sm:flex items-center gap-2">
              <span class="px-3 py-1 rounded-full text-[11px] font-bold" style="background: rgba(124,58,237,0.08); color: var(--p2); border: 1px solid rgba(168,85,247,0.2);">✅ Live Metrics</span>
            </div>
          </div>
        </div>

        <div class="p-6">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="rounded-[20px] border" style="border-color: var(--cb); background: rgba(124,58,237,0.02);">
              <div class="p-5 border-b" style="border-color: var(--ob)">
                <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--p3)">Latest Blogs</span>
              </div>
              <div class="divide-y">
                @forelse($latestBlogs as $blog)
                  <div class="p-5 flex items-start justify-between gap-4">
                    <div class="min-w-0">
                      <div class="font-syne font-extrabold text-sm truncate" style="color: var(--tx)">{{ $blog->title ?? 'Untitled' }}</div>
                      <div class="mt-1 text-xs font-mono truncate" style="color: var(--tx3)">
                        {{ $blog->created_at ? $blog->created_at->format('M d, Y') : '—' }}
                      </div>
                    </div>
                    <a href="{{ route('admin.blogs.show') }}" class="shrink-0 inline-flex items-center justify-center w-9 h-9 rounded-xl bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)" aria-label="View blogs">
                      👁️
                    </a>
                  </div>
                @empty
                  <div class="p-5 text-xs font-medium" style="color: var(--tx2)">No blogs found.</div>
                @endforelse
              </div>
            </div>

            <div class="rounded-[20px] border" style="border-color: var(--cb); background: rgba(124,58,237,0.02);">
              <div class="p-5 border-b" style="border-color: var(--ob)">
                <span class="font-syne font-bold text-[0.68rem] tracking-[0.16em] uppercase" style="color: var(--p3)">Latest Messages</span>
              </div>
              <div class="divide-y">
                @forelse($latestMessages as $message)
                  <div class="p-5 flex items-start justify-between gap-4">
                    <div class="min-w-0">
                      <div class="font-syne font-extrabold text-sm truncate" style="color: var(--tx)">{{ $message->name ?? 'User' }}</div>
                      <div class="mt-1 text-xs font-mono truncate" style="color: var(--tx3)">
                        {{ $message->email ?? '' }}
                      </div>
                      <div class="mt-2 inline-flex items-center gap-2">
                        @if(!empty($message->subject))
                          <span class="text-[10px] font-bold px-2 py-0.5 rounded-md" style="border: 1px solid var(--ob); background: rgba(124,58,237,0.06); color: var(--p3);">{{ $message->subject }}</span>
                        @endif
                        @if(empty($message->is_read))
                          <span class="text-[10px] font-bold px-2 py-0.5 rounded-md" style="border: 1px solid rgba(239,68,68,0.25); background: rgba(239,68,68,0.08); color: #ef4444;">Unread</span>
                        @endif
                      </div>
                    </div>
                    <a href="{{ route('admin.messages.show') }}" class="shrink-0 inline-flex items-center justify-center w-9 h-9 rounded-xl bg-[rgba(124,58,237,0.04)] hover:bg-purple-500/10 text-[#c084fc] border transition-colors duration-200" style="border-color: var(--ob)" aria-label="View messages">
                      👁️
                    </a>
                  </div>
                @empty
                  <div class="p-5 text-xs font-medium" style="color: var(--tx2)">No messages found.</div>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- FOUC + animation safety -->
  <style>
    .gsap-dash-header, .gsap-dash-header-btn, .gsap-dash-table-container {
      opacity: 0;
    }
    .gsap-dash-running { transition: none !important; }
    /* Keep scrollbars clean (consistent with other admin pages) */
    .gsap-dash-table-container::-webkit-scrollbar { display: none !important; width: 0px; height: 0px; }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // If GSAP is present, animate; otherwise just show.
      if (typeof gsap === 'undefined') {
        document.querySelectorAll('.gsap-dash-header, .gsap-dash-header-btn, .gsap-dash-table-container').forEach(el => {
          el.style.opacity = 1;
        });
        return;
      }

      const headerItems = gsap.utils.toArray('.gsap-dash-header');
      const headerBtn = document.querySelector('.gsap-dash-header-btn');
      const tableBox = document.querySelector('.gsap-dash-table-container');
      const statNums = gsap.utils.toArray('.stat-num');

      // Mark for micro-counter (admin layout also sets up, but this ensures immediate visual readiness)
      statNums.forEach(n => n.classList.add('stat-num'));

      headerItems.forEach(el => el.classList.add('gsap-dash-running'));
      if (headerBtn) headerBtn.classList.add('gsap-dash-running');
      if (tableBox) tableBox.classList.add('gsap-dash-running');

      gsap.set(headerItems, { y: -14, opacity: 0 });
      if (headerBtn) gsap.set(headerBtn, { y: -10, opacity: 0, scale: 0.93 });
      if (tableBox) gsap.set(tableBox, { y: 22, opacity: 0 });

      const dashTimeline = gsap.timeline();

      dashTimeline.to(headerItems, {
        y: 0,
        opacity: 1,
        stagger: 0.08,
        duration: 0.6,
        ease: 'power3.out'
      });

      if (headerBtn) {
        dashTimeline.to(headerBtn, {
          y: 0,
          opacity: 1,
          scale: 1,
          duration: 0.5,
          ease: 'back.out(1.4)'
        }, '-=0.35');
      }

      dashTimeline.to(tableBox, {
        y: 0,
        opacity: 1,
        duration: 0.75,
        ease: 'power4.out'
      }, '-=0.4');

      // Release transitions
      dashTimeline.eventCallback('onComplete', () => {
        headerItems.forEach(el => el.classList.remove('gsap-dash-running'));
        if (headerBtn) headerBtn.classList.remove('gsap-dash-running');
        if (tableBox) tableBox.classList.remove('gsap-dash-running');
      });
    });
  </script>
</x-my-layouts.admin-main>

