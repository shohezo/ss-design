<?php get_header(); ?>
    <div class="ly_section hp_paTop0 hp_paTopsp50">
        <div class="ly_inner">
        <h2 class="el_sectionTtl hp_txtLeft">Blog</h2>
        <!-- ループ始まり -->
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="bl_blog_container">
                <h3 class="bl_blog_ttl"><?php the_title(); ?></h3>
                <p class="bl_blog_date"><?php the_date('Y.m.d'); ?></p>
                <p class="bl_blog_fvImg"><?php the_post_thumbnail(); ?></p>
                <p class="bl_blog_cont"><?php the_content(); ?></p>
            </div>
        <?php endwhile;endif; ?>
            <!-- ループ終わり -->
        </div>
    </div>
<?php get_footer(); ?>