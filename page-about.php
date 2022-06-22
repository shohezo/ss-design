<?php get_header(); ?>

<?php
/* 
Template Name: アバウトページ
*/
?>

<div class="ly_section hp_paTop0 hp_paTopsp50">
    <div class="ly_inner">
        <h2 class="el_sectionTtl hp_txtLeft"><?php the_title(); ?></h2>
        <p class="el_career">
            <?php echo CFS()->get("a_career"); ?>
            <!-- カスタムフィールド・経歴 -->
        </p>
        <div class="bl_profileBox hp_flex">
            <div class="bl_profileBox_img">
                <img src="<?php echo CFS()->get(
                    "a_image"
                ); ?>" /><!-- カスタムフィールド・プロフィール画像 -->
            </div>
            <div class="bl_profileBox_detail">
                <dl>
                    <dt>名称</dt>
                    <dd>SS DESIGN</dd>
                    <dt>所在地</dt>
                    <dd>福岡市内</dd>
                    <dt>お問い合わせ</dt>
                    <dd>s08052346550@gmail.com</dd>
                    <dt>事業内容</dt>
                    <dd>
                        Web制作におけるディレクション、デザイン、HTML・CSSコーディング、スマートフォンサイト、CMS導入、ロゴデザイン,Flutterによるアプリ開発
                    </dd>
                </dl>
                <h3>齊藤 翔平 Saito Shohei</h3>
                <dl>
                    <dt>Instagram</dt>
                    <dd>
                        <a href="https://www.instagram.com/shohezoh" target="_blank"
                            rel="noopener noreferrer">@shohezo</a>
                    </dd>
                    <dt>Twitter</dt>
                    <dd>
                        <a href="http://twitter.com/s_shohei" target="_blank" rel="noopener noreferrer">@s_shohei</a>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
