<?php get_header(); ?>

<div class="main">

  <?php if ( has_post_thumbnail() ) :?>
    <section class="featuredImg">
    <!-- // check if the post has a Post Thumbnail assigned to it.-->
      <?php the_post_thumbnail('full'); ?>
    </section><!-- .entry-content -->
  <?php endif;?>
  <div class="container2">

    <div class="content2">
    <div class="entry-meta-single">
      <?php echo get_avatar( get_the_author_meta('user_email'), 36); ?>
      <?php hackeryou_posted_on(); ?>
    </div><!-- .entry-meta -->
    <div class="posting">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
          <h1 class="entry-title"><?php the_title(); ?></h1>
          
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
      </div>
    </div> <!-- /.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>