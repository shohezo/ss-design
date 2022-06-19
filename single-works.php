<?php get_header(); ?>
<div class="ly_section hp_paTop0">
    <div class="ly_inner">
        <h2 class="el_sectionTtl hp_txtLeft">Works</h2>
        <!-- ループ始まり -->
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="bl_works_container" id="single-works">
            <div class="bl_works_img"><img src="<?php echo CFS()->get('preview') ;?>" alt=""></div>
            <div class="bl_works_description">
                <dl class="bl_works_client">
                    <dt>CLIENT</dt>
                    <dd><?php echo CFS()->get('client') ;?>様</dd>
                </dl>
                <dl class="bl_works_type">
                    <dt>TYPE</dt>
                    <dd><?php
                $values = CFS()->get( 'type' );
                foreach ( $values as $key => $label ):
                ?>
                        <span><?php echo $label; ?></span>
                        <?php endforeach; ?>
                    </dd>

                </dl>
                <dl class="bl_works_service">
                    <dt>
                        SERVICE
                    </dt>
                    <dd>
                        <?php
                    $values = CFS()->get( 'service' );
                    foreach ( $values as $key => $label ):
                    ?>
                        <span><?php echo $label; ?></span>
                        <?php endforeach; ?>
                    </dd>
                </dl>
                <dl class="bl_works_job">
                    <dt>
                        JOB
                    </dt>
                    <dd>
                        <?php echo CFS()->get('job') ;?>
                    </dd>
                </dl>
                <dl class="bl_works_workflow">
                    <dt>
                        WORKFLOW
                    </dt>
                    <dd>
                        <?php echo CFS()->get('workflow') ;?>
                    </dd>
                </dl>
                <dl class="bl_works_link">
                    <dt>
                        URL
                    </dt>
                    <dd>
                        <?php echo CFS()->get('link') ;?>
                    </dd>
                </dl>
            </div>
        </div>
        <?php endwhile;endif; ?>
        <!-- ループ終わり -->
    </div>
</div>
<?php get_footer(); ?>