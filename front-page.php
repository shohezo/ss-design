  <?php get_header(); ?>
  <div class="ly_fv">
      <img class="parallax" src=" https://picsum.photos/2400/900" alt="image" />
  </div>
  <!-- コンセプト -->
  <div class="ly_section">
      <div class="ly_inner">
          <div class="bl_concept hp_flex">
              <h2 class="bl_concept_copy">
                  <span>”</span>こんなのあったらいいな<span>”</span>を<br>
                  カタチにするお手伝いを。
              </h2>
              <img src="<?php bloginfo('template_url');?>/img/profile.png" alt="本人画像" class="bl_concept_img" />
          </div>
      </div>
  </div>
  <!-- サービス -->
  <div class="ly_section">
      <div class="ly_inner">
          <h2 class="el_sectionTtl hp_txtCenter">Service</h2>
          <div class="bl_serviceWrapper hp_flex">
              <div class="bl_serviceWrapper_card">
                  <h3 class="bl_serviceWrapper_ttl">ディレクション</h3>
                  <p class="bl_serviceWrapper_subTtl">direction</p>
                  <img src="<?php bloginfo('template_url');?>/img/B_TENBOSITSU.png" alt=""
                      class="bl_serviceWrapper_img" />
                  <div class="bl_serviceWrapper_txt">
                      <p>まずはそれを作る目的についてヒアリングさせていただきます。
                          作ることが目的ではありません。満たしたいのは”そのさき”です。
                          なぜホームページやLP、ロゴが必要なのか。
                          お客様と何度も擦り合わせをさせていただき
                          その目的と方向性を一緒に定めていきます。</p>
                  </div>
              </div>
              <div class="bl_serviceWrapper_card">
                  <h3 class="bl_serviceWrapper_ttl">デザイン</h3>
                  <p class="bl_serviceWrapper_subTtl">design</p>
                  <img src="<?php bloginfo('template_url');?>/img/sashigane.png" alt="" class="bl_serviceWrapper_img" />
                  <div class="bl_serviceWrapper_txt">
                      <p>目的と方向性に沿ってデザインを構築します。
                          必要なものと同時に、何が必要でないかを見極めたデザインで
                          実際に触れられる方々によりわかりやすく、より使いやすい
                          ものを提案させていただきます。</p>
                  </div>
              </div>
              <div class="bl_serviceWrapper_card">
                  <h3 class="bl_serviceWrapper_ttl">コーディング</h3>
                  <p class="bl_serviceWrapper_subTtl">coding</p>
                  <img src="<?php bloginfo('template_url');?>/img/coding.png" alt="" class="bl_serviceWrapper_img" />
                  <div class="bl_serviceWrapper_txt">
                      <p>ノーコードと呼ばれるコーディングを必要としない
                          サービスが拡大していますが、一人ひとりに見合った
                          Webサイトを制作するにはやはりコーディングが不可欠です。
                          PC・タブレット・スマートフォンなど様々なデバイスへの対応はもちろん
                          Wordpressや動きのあるHPも御用命ください。</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ワークス （カスタム投稿タイプ）-->
  <div class="ly_section">
      <div class="ly_inner hp_txtCenter">
          <h2 class="el_sectionTtl hp_txtCenter">Works</h2>
          <div class="bl_works">
              <?php
				$args = array(//サブクエリで新しくクエリを定義。パラメータで取得するデータを操作できる
					'post_type' => 'works', // 投稿タイプスラッグ
					'posts_per_page' => 12 //1ページに表示する件数の設定
				);
				$the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$args)で必要な情報を配列にして渡している）。WP_queryというクラス（設計図）にどんな情報をとってくるか配列いれて$the_queryというオブジェクトを生成している。			
			?>
              <!-- サブループ始まり -->
              <ul class="bl_works_list hp_flex">
                  <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
                  <li class="bl_works_list_card">
                      <a href="<?php the_permalink() ;?>">
                          <div class="bl_works_img"><img src="<?php echo CFS()->get('thumbnail') ;?>" alt=""></div>
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
          <div class="el_arcBtn hp_mgTop-100"><a href="<?php bloginfo('url')?>/works">一覧を見る</a></div>
      </div>
  </div>
  <!-- ブログ -->
  <div class="ly_section">
      <div class="ly_inner hp_txtCenter">
          <h2 class="el_sectionTtl hp_txtCenter">Blog</h2>
          <ul class="bl_blog_list hp_flex">
              <!-- メインループ始まり -->
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
              <!-- メインループ終わり -->
          </ul>
          <div class="el_arcBtn"><a href="<?php bloginfo('url');?>/blog">一覧を見る</a></div>
      </div>
  </div>
  <?php get_footer(); ?>