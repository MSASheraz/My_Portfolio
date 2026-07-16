<footer id="siteFooter">
  <div class="f-glow"></div>

  <div class="footer-inner">
    <div class="footer-grid">

      <div class="f-col" id="fc0">
        <a href="{{ route('site.laynding') }}" class="f-logo">
          MSASheraz<em>.</em>
        </a>

        <p class="f-desc">
          High-performance system development, technical blueprints, and clean responsive interfaces tailored to modern environments.
        </p>
      </div>

      <div class="f-col" id="fc1">
        <div class="f-head">Navigation</div>

        <ul class="f-list">
          <li><a href="{{ route('site.laynding') }}">Home</a></li>
          <li><a href="{{ route('site.about') }}">About</a></li>
          <li><a href="{{ route('site.services') }}">Services</a></li>
          <li><a href="{{ route('site.portfolio') }}">Portfolio</a></li>
          <li><a href="{{ route('site.blogs') }}">Blogs</a></li>
          <li><a href="{{ route('site.contact-us') }}">Contact Us</a></li>
        </ul>
      </div>

      <div class="f-col" id="fc2">
        <div class="f-head">Contact &amp; Social</div>

        <ul class="f-list">
          <li>
            <a href="mailto:contact@msasheraz.com">
              contact@msasheraz.com
            </a>
          </li>

          <li>
            <a href="https://github.com/MSASheraz" target="_blank" rel="noopener">
              GitHub
            </a>
          </li>

          <li>
            <a href="https://www.linkedin.com/in/muhammad-sheraz-ahmad-aheer-050245219/"
               target="_blank"
               rel="noopener">
              LinkedIn
            </a>
          </li>

          <li>
            <a href="https://wa.me/923000757641" target="_blank" rel="noopener">
              WhatsApp
            </a>
          </li>
        </ul>
      </div>

      <div class="f-col" id="fc3">
        <div class="f-head">Newsletter</div>

        <p class="f-desc" style="margin-bottom:.75rem">
          Get dev tips &amp; project updates.
        </p>

        <div class="nl-wrap">
          <input
            type="email"
            class="nl-inp"
            placeholder="Email address"
          >
          <button class="nl-btn">Join</button>
        </div>
      </div>

    </div>

    <div class="f-divider" id="fDivider"></div>

    <div class="footer-bottom" id="fBottom">
      <div>&copy; {{ date('Y') }} MSASheraz. All rights reserved.</div>

      <div class="fb-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>