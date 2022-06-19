<?php get_header(); ?>
<div class="ly_section hp_paTop0 hp_paTopsp50">
    <div class="ly_inner">
      <h2 class="el_sectionTtl hp_txtLeft">Blog</h2>
      <!-- ループ始まり -->
      <ul class="bl_blog_list hp_flex">
      <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <li class="bl_blog_item">
          <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail();?>
          </a>
          <?php echo get_the_date('Y.m.d'); ?>
          <br>
          <?php the_title(); ?>
          <br>
          <a class="bl_blog_btn" href="<?php the_permalink();?>">more</a>
        </li>
      <?php endwhile;endif; ?>
      </div>
      <!-- ループ終わり -->
    </div>
  </div>
<?php get_footer(); ?>