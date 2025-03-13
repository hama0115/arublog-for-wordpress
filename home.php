<?php get_header(); ?>

    <main class="main">    
      <div class="content-wrapper">
        <div class="content">
          <h1 class="page-title">ホーム</h1>
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

          <section class="profile-area"> <!-- 著者のプロフィール情報 「CFT」使用 -->
            <h2 class="profile-top">プロフィール</h2>
            <div class="profile-img-area">
              <?php //プロフィール画像を取得
              $img_attr = wp_get_attachment_image_src(post_custom('profile-image'), 'full');
              if($img_attr):
              ?>
              <img src="<?php echo $img_attr[0]; ?>">
              <?php endif; ?>
              <div class="profile-name-wrapper">
                <?php if(post_custom('profile-name')): //著者の名前を取得 ?>
                <p class="profile-name"><?php echo esc_html(post_custom('profile-name')); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <?php if(post_custom('profile-description')): //著者の概要を取得 ?>
            <p class="profile-description"><?php echo esc_html(post_custom('profile-description')); ?></p>
            <?php endif; ?>
          </section>
        </div>
      </div>  
    </main>

<?php get_footer(); ?>