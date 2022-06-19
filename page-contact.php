<?php get_header(); ?>

<?php
/* 
Template Name: コンタクトページ
*/
?>

<!-- ループ始まり -->
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="ly_section hp_paTop0 hp_paTopsp50">
            <div class="ly_inner">
            <h2 class="el_sectionTtl hp_txtLeft"><?php the_title(); ?></h2>
            <p>お仕事の依頼・お問い合わせはこちらからお願いします。</p>
            <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;endif; ?>
<!-- ループ終わり -->
<?php get_footer(); ?>