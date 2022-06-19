<?php get_header(); ?>
<div class="ly_section hp_paTop0 hp_paTopsp50">
    <div class="ly_inner">
        <h2 class="el_sectionTtl hp_txtLeft">Works</h2>
        <div class="bl_works">
            <?php
				$args = array(//サブクエリで新しくクエリを定義。パラメータで取得するデータを操作できる
					'post_type' => 'works', // 投稿タイプスラッグ
					'posts_per_page' => 20 //1ページに表示する件数の設定
				);
				$the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$args)で必要な情報を配列にして渡している）。WP_queryというクラス（設計図）にどんな情報をとってくるか配列いれて$the_queryというオブジェクトを生成している。			
			?>
            <!-- サブループ始まり -->
            <ul class="bl_works_list hp_flex">
                <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
                <li class="bl_works_list_card">
                    <a href="<?php the_permalink() ;?>">
                        <div class="bl_works_img"><img src="<?php echo CFS()->get('thumbnail') ;?>" alt=""></div>
                        <div class="bl_works_type"><?php
                            $values = CFS()->get( 'type' );
                            foreach ( $values as $key => $label ):
                            ?>
                            <span><?php echo $label; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="bl_works_client"><?php echo CFS()->get('client') ;?>様</div>
                    </a>
                </li>
                <?php endwhile; ?>
                <!-- サブループ終わり -->
            </ul>
            <?php wp_reset_postdata(); ?>
            <!-- 新しく定義したクエリをリセットする必要がある -->
            <?php else: ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>