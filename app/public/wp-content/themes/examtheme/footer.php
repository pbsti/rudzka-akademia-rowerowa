    <footer>
      <?php 
      $logo_url = get_stylesheet_directory_uri() . '/original/images/logo.png'; 
      $phone = get_field ('phone');
      $email = get_field ('email');
      ?>

        <div class="footer-content">
          <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($logo_url); ?>" alt="Rudzka Akademia Rowerowa Logo" style="height: 8rem;">
          </a>
          <div class="contact-info">
            <h3>Kontakt</h3>
            <a href="mailto:<?php echo esc_url($email); ?>">
              <i class="fa-solid fa-envelope" style="font-size: 2rem; color: #1E212B;"></i>
              <p><?php echo esc_html($email); ?></p>
            </a>
            <a href="tel:<?php echo esc_html($phone); ?>">
              <i class="fa-solid fa-phone" style="font-size: 2rem; color: #1E212B;"></i>
              <p><?php echo esc_html($phone); ?></p>
            </a>
          </div>
          <div class="quick-links">
            <h3>Skróty</h3>
            <p><a href="<?php echo esc_url(get_permalink(get_page_by_path('strona-glowna'))); ?>">Strona główna</a></p>
            <p><a href="<?php echo esc_url(get_permalink(get_page_by_path('o-nas'))); ?>">O nas</a></p>
            <p><a href="<?php echo esc_url(get_permalink(get_page_by_path('wydarzenia'))); ?>">Wydarzenia</a></p>
            <p><a href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt'))); ?>">Kontakt</a></p>
          </div>
          <div class="social-icons">
            <h3>Zaobserwuj nas</h3>
            <div class="footer-icons">
            <a href="https://www.instagram.com/rudzka_akademia_rowerowa/"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.tiktok.com/@rudzkaakademiarow"><i class="fa-brands fa-tiktok" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/RudzkaAkademiaRowerowa"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <p class="copyright">© 2026 Rudzka Akademia Rowerowa. Wszelkie prawa zastrzeżone.</p>
    </footer>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          var header = document.querySelector('.nav-header');
          var toggle = document.querySelector('.nav-toggle');
          var nav = document.querySelector('.navigation-area');
            if (!header || !toggle || !nav) {
              return;
            }

          toggle.addEventListener('click', function () {
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!expanded));
            header.classList.toggle('nav-open');
            nav.classList.toggle('open');
            var icon = this.querySelector('i');
              if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-xmark');
              }
          });
        });
      </script>
<?php wp_footer()?>
</body>
</html>