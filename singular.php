<?php get_header(); ?>

    <main class="main">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <div class="content-wrapper">
        <div class="content">
          <article class="single-article">
            <div class="title-area">
              <h1 class="article-title"><?php the_title(); ?></h1>
              <div class="entry-date">"><?php the_date(); ?></div>
              <?php
              $cats = get_the_category();
              if($cats):
              ?>
                <ul>
                <?php foreach($cats as $cat): ?>
                  <li><?php echo $cat->name; ?></li>
                <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
            <?php if(has_post_thumbnail()): ?>
              <div class="eyecatch-area"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>
            
            <div class="main-content">
              <h2 class="article-h2">見出しが入ります</h2>
              <p class="article-p">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
              <h3 class="article-h3">見出しが入ります</h3>
              <p class="article-p">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
              <div class="article-img-area">
                <img src="./img/fluffy-mountain-goat.jpg" alt="ヤギヤギ男">
              </div>
              <p class="article-p">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
            </div>
            <div class="page-link">
              <p class="prev-page-link"><a href="">前の記事</a></p>
              <p class="next-page-link"><a href="">次の記事</a></p>
            </div>
          </article>
          <section class="latest-pages">
            <h2 class="latest-pages-title">最新の記事</h2>
            <ul>
              <li><a href="">ここにタイトルが入ります</a></li>
              <li><a href="">ここにタイトルが入ります</a></li>
              <li><a href="">ここにタイトルが入ります</a></li>
              <li><a href="">ここにタイトルが入ります</a></li>
              <li><a href="">ここにタイトルが入ります</a></li>
            </ul>
          </section>
          <section class="profile-area">
            <h2 class="profile-top">プロフィール</h2>
            <div class="profile-img-area">
              <img src="./img/fluffy-mountain-goat.jpg" alt="プロフィール画像">
              <div class="profile-name-wrapper">
                <p class="profile-name">アル</p>
              </div>
            </div>
            <p class="profile-description">ここにプロフィール文が入りますここにプロフィール文が入りますここにプロフィール文が入りますここにプロフィール文が入ります</p>
          </section>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </main>
    <footer class="footer">
      <a href="./index.html" class="footer-logo">アルブログ</a>
      <p class="copyright">2025 arublog.com all right reserved.</p>
    </footer>

    <!-- JavaScript -->

      <!-- ハンバーガーメニュー -->
      <script src="./js/btn-menu.js"></script>

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