<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main2">
  <div class="container">

    <div class="content">
    	<div class="content-active">
    		<?php get_template_part( 'loop', 'index' );	?>
    	</div>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>