<?php get_header(); ?>

    <main class="main">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <h1 data-title="Privacy Policy" class="page-title"><?php the_title(); ?></h1>        
        <div class="box-white">
          <div class="privacy-wrapper">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </main>

<?php get_footer(); ?>