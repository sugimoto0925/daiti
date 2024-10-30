<!DOCTYPE html>
<html>

<head>
  <title>Toraryu Sugimoto Portfolio</title>
  <meta charset="UTF-8" />
  <meta name="description" content="TORARYU ポートフォリオ" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <?php wp_head(); ?>
</head>

<body>

  <!-- ヘッダー -->
  <header>
    <div class="title">
      <img class="TR" src="<?php echo get_template_directory_uri(); ?>/image/header/TRLogo.png" alt="Toraryu Sugimoto Logo">

      <!-- メニューボタン（PC用） -->
      <nav id="menu-pc">
        <ul class="menu-li">
          <li><a href="<?php echo esc_url(home_url('/')); ?>  #works" class="link1">Works</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>  #profile" class="link2">Profile</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>  #contact" class="link3">Contact</a></li>
        </ul>
      </nav>

      <!-- スマホ用メニューアイコン -->
      <div id="menu-sp">
        <div class="btn-trigger" id="btn07">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>


      <!-- スマホ用ナビゲーション -->
      <nav id="nav-sp">

        <a id="logo-sp" href="index.html" onclick="document.getElementById('nav-sp').style.display = 'none'">
          <img src="<?php echo get_template_directory_uri(); ?>/image/images/TRlogo_black.png" alt="トップページに戻る"></a>
        <a class="menu" href="#works" onclick="document.getElementById('nav-sp').style.display = 'none'">Works</a>
        <a class="menu" href="#profile" onclick="document.getElementById('nav-sp').style.display = 'none'">Profile</a>
        <a class="menu" href="#contact" onclick="document.getElementById('nav-sp').style.display = 'none'">Contact</a>
      </nav>
    </div>
  </header>