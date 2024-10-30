<?php get_header();?>
 <!-- メイン -->
  <main>
    <!-- ファーストイメージ -->
    <section class="first">
      <div class="firstimage">
        <img class="sugi" src="<?php echo get_template_directory_uri(); ?>/image/main/TORARYU.png" alt="toraryu">
        <div class="catch">
          <h1 class="name">
            TORARYU SUGIMOTO
          </h1>
          <p class="sub">
            PORTFOLIO SITE
          </p>
        </div>
      </div>
    </section>

    <!-- コンセプト -->
    <section class="goal">
      <div>
        <div class="inter">
          <h2 class="mind">
            「組織の可能性と成長の伴走者」
          </h2>
          <p class="belief">
            　私は「組織の可能性と成長の伴走者」として、クライアントの目標達成を支援することを自らの「GOAL」としています。<br>
            　コーチングを通じて、自分の強みや理想を理解し、そこから導き出されたのは「感動を与え、共に成長する」という信念です。<br>
            　WEB制作を通じ共に未来を築き上げるパートナーとして、私は全力でサポートいたします。
          </p>
        </div>
      </div>
    </section>

<!-- ワーク チャットGPT-->
<section id="works" class="work">
  <div>
    <h2 class="noto">Works</h2>
  </div>
  <div class="content">
    <div class="inter">
      <ul class="main_works_list">
        <?php 
          $works = [
            ['image' => '01_Logo1.png', 'title' => '「大学サイト/架空」', 'category' => 'WordPress'],
            ['image' => '02_Logo2.png', 'title' => '「美容室サイト/架空」', 'category' => 'WordPress'],
            ['image' => '03_Logo3.png', 'title' => '「ポートフォリオサイト/架空」', 'category' => 'HTML/CSS'],
            ['image' => '04_Logo4.png', 'title' => '「コーポレートサイト/架空」', 'category' => 'HTML/CSS'],
            ['image' => '05_Logo5.png', 'title' => '「ポートフォリオサイト／本サイト」', 'category' => 'WordPress'],
            ['image' => '06_Logo6.png', 'title' => '「京都ツアー宣伝用画像作成/架空」', 'category' => 'Photoshop'],
          ];

          foreach ($works as $work) : ?>
            <li class="main_works_listItem">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/image/works/<?php echo $work['image']; ?>" class="main_works_listItem_eyecatch fadein scrollin">
                <div class="main_works_listItem_textblock">
                  <h3 class="main_works_title"><?php echo $work['title']; ?></h3>
                  <p class="main_works_category"><?php echo $work['category']; ?></p>
                </div>
              </a>
            </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

    <!-- ワーク -->
    <section id="works" class="work">
      <div>
        <h2 class="noto">
          Works
        </h2>
      </div>
      <div class="content">
        <div class="inter">
          <ul class="main_works_list">
            <li class="main_works_listItem">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/image/works/01_Logo1.png" class="main_works_listItem_eyecatch fadein scrollin">
                <div class="main_works_listItem_textblock">
                  <h3 class="main_works_title">「大学サイト/架空」</h3>
                  <p class="main_works_category">WordPress</p>
                </div>
              </a>
            </li>
            <li class="main_works_listItem">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/image/works/02_Logo2.png" class="main_works_listItem_eyecatch fadein scrollin">
                <div class="main_works_listItem_textblock">
                  <h3 class="main_works_title">「美容室サイト/架空」</h3>
                  <p class="main_works_category">WordPress</p>
                </div>
              </a>
            </li>
            <li class="main_works_listItem">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/image/works/03_Logo3.png" class="main_works_listItem_eyecatch fadein scrollin">
                <div class="main_works_listItem_textblock">
                  <h3 class="main_works_title">「ポートフォリオサイト/架空」</h3>
                  <p class="main_works_category">HTML/CSS</p>
                </div>
              </a>
            </li>
            <li class="main_works_listItem">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/image/works/04_Logo4.png" class="main_works_listItem_eyecatch fadein scrollin">
                <div class="main_works_listItem_textblock">
                  <h3 class="main_works_title">「コーポレートサイト/架空」</h3>
                  <p class="main_works_category">HTML/CSS</p>
                </div>
              </a>
            </li>
            <li class="main_works_listItem">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/image/works/05_Logo5.png" class="main_works_listItem_eyecatch fadein scrollin">
                <div class="main_works_listItem_textblock">
                  <h3 class="main_works_title">「ポートフォリオサイト／本サイト」</h3>
                  <p class="main_works_category">WordPress</p>
                </div>
              </a>
            </li>
            <li class="main_works_listItem">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/image/works/06_Logo6.png" class="main_works_listItem_eyecatch fadein scrollin">
                <div class="main_works_listItem_textblock">
                  <h3 class="main_works_title">「京都ツアー宣伝用画像作成/架空」</h3>
                  <p class="main_works_category">Photoshop</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- プロフィール -->
    <section id="profile" class="about">
      <div>
        <h2 class="noto">
          Profile
        </h2>
      </div>
      <div class="pro">
        <div>
          <img class="pro_img" src="<?php echo get_template_directory_uri(); ?>/image/portfolio/TORARYUimg.png" alt="toraryusugimoto">
        </div>
        <div class="profile">
          <h3 class="profile_h3">TORARYU SUGIMOTO</h3>
          <ul class="profile_list">
            <li>1983年 鳥取県生まれ</li>
            <li>2001年 工業高校卒業</li>
            <li>2002年 鉄道関係の会社に就職</li>
            <li>2023年 コーチングに出会う</li>
            <li>2024年 SAMURAI入学</li>
          </ul>
        </div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>

  