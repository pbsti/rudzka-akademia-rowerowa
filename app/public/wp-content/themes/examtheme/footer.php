    <footer>
        <?php
        $logoimage = get_field('logo_image');
        ?>

        <div class="footer-content">
        <div class="footer-logo">
            <img src="<?php echo esc_url($logoimage['url']) ?>" alt="Rudzka Akademia Rowerowa Logo" style="height: 8rem;">
        </div>
        <div class="contact-info">
            <h3>Contact</h3>
            <p>email</p>
            <p>phone</p>
            <p>address</p>
        </div>
        <div class="quick-links">
            <h3>Quick Links</h3>
            <p><a href="index.php">Home</a></p>
            <p><a href="about-page.php">About</a></p>
            <p><a href="contact.php">Contact</a></p>
        </div>
        <div class="social-icons">
            <h3>Follow Us</h3>
            <div class="footer-icons">
            <a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa-brands fa-tiktok" aria-hidden="true"></i></a>
            <a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
            </div>
        </div>
        </div>
        <p class="copyright">© 2026 Rudzka Akademia Rowerowa. All rights reserved.</p>
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