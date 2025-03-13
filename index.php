<?php get_header(); ?>

    <main class="main">    
      <div class="content-wrapper">
        <div class="content">
          <h1 class="title">最新の記事</h1>
          <div class="article-list-wrapper">
            <ul class="article-list">
              <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

              <li>
                <a href="<?php the_permalink(); ?>" >
                
                <div class="thumbnail-area">
                  <?php
                  if(has_post_thumbnail()):
                    the_post_thumbnail('full');

                  else: ?>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/post-thumbnail.jpg" alt="ダミーのサムネイル">

                  <?php endif; ?>
                </div>
                
                  <div class="text">
                    <time class="entry-date"><?php echo get_the_date(); ?></time>
                    <p class="article-title"><?php the_title(); ?></p>

                    <?php /* カテゴリーをリンクなしで表示 */
                    $cats = get_the_category();
                    if($cats):
                    ?>
                      <ul class="category-list">
                      <?php foreach($cats as $cat): ?>
                        <li class="article-category"><?php echo $cat->name; ?></li>
                      <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </a>
              </li>

              <?php endwhile; else: ?>

              <?php endif; ?>
            </ul>
          </div>
          <section class="profile-area">
            <h2 class="profile-top">プロフィール</h2>
            <div class="profile-img-area">
              <img src="<?php echo get_template_directory_uri(); ?>/img/fluffy-mountain-goat.jpg" alt="プロフィール画像">
              <div class="profile-name-wrapper">
                <p class="profile-name">アル</p>
              </div>
            </div>
            <p class="profile-description">ここにプロフィール文が入りますここにプロフィール文が入りますここにプロフィール文が入りますここにプロフィール文が入ります</p>
          </section>
        </div>
      </div>  
    </main>

<?php get_footer(); ?>