<?php get_header(); ?>
<!-- ループ始まり -->
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="ly_section hp_paTop0">
            <div class="ly_inner">
            <h2 class="el_sectionTtl hp_txtLeft"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;endif; ?>
<!-- ループ終わり -->
<?php get_footer(); ?>