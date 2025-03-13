    <footer class="footer">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo"><?php bloginfo('name'); ?></a>
      <p class="copyright">2025 arublog.com all right reserved.</p>
    </footer>

    <?php wp_footer(); ?>

    <!-- JavaScript -->

      <!-- adobeフォント -->
      <script>
        (function (d) {
          var config = {
            kitId: 'rbl8mgc',
            scriptTimeout: 3000,
            async: true
          },
            h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
        })(document);
      </script>

      <!-- fontawesome(をいちおういれておく) -->
      <script src="https://kit.fontawesome.com/9ab3ae9094.js" crossorigin="anonymous"></script>

    <!--#JS-->
  </body>
</html>