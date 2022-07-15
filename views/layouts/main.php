<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <title>Lolwork</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Lolwork</a></h1>
      <p>Fusce iaculis feugiat</p>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="<?= Url::to(['biodata/index']) ?>" class="nav-item nav-link">Biodata</a></li>
            <li> <a href="<?= Url::to(['cuti/index'])?>" class="nav-item nav-link">Cuti</a></li>
            <li> <a href="<?= Url::to(['jabatan/index'])?>" class="nav-item nav-link">Jabatan</a></li>
            <li> <a href="<?= Url::to(['pegawai/index'])?>" class="nav-item nav-link">Pegawai</a></li>
            <li> <a href="<?= Url::to(['site/index'])?>" class="nav-item nav-link">Bilangan prima</a></li>
            
        </li>
    </nav>
    <!-- ################################################################################################ -->
  </header>
  <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">Dapibus feugiat vestibulum molestie</h2>
      <p>Rutrum cras sapien nisl mattis non facilisis sed iaculis at neque nunc facilisis mattis leo ut ornare eros pellentesque blandit turpis vel lacinia sagittis quisque eu faucibus dui.</p>
      <footer><a class="btn" href="#">Pellentesque</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Libero semper nec</h6>
      <p>Eros et magna ut vitae faucibus dui nec fermentum mauris nunc molestie venenatis metus et porttitor nisi faucibus ut cras non sem facilisis.</p>
      <p>Hendrerit ligula ut blandit sem nulla non ipsum rutrum tempor dolor non faucibus eros cras imperdiet cursus sapien.</p>
    </div>
    <div class="one_quarter">
      <h6 class="title">Nisi ornare aliquet</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Donec at tellus eu</h6>
      <ul class="nospace linklist">
        <li><a href="#">Mauris in condimentum lacus</a></li>
        <li><a href="#">Sed hendrerit est praesent</a></li>
        <li><a href="#">Tempor dapibus enim phasellus</a></li>
        <li><a href="#">Convallis lectus a tristique</a></li>
        <li><a href="#">Lectus nisi sodales sem at</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">ac urna morbi rutrum</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">dignissim libero augue</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">aenean non egestas urna curabitur vitae aliquam felis&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">et nisl id pretium</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">eros vehicula eros nec lacinia sem tellus vel turpis vivamus&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
