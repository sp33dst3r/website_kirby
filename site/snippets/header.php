<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>
  <?= $site->google_tag()->value();?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <title>
      <?php
        if($page->headline()->value()){
            echo $page->headline()->value();
        }
        else{
            echo $page->title();
        }
      ?>
  </title>
    <?php if($page->description()->value()): ?>
        <meta name="description" content="<?=$page->description()->value()?>">
    <?php endif; ?>
  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file. 
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?php //echo css(['assets/css/index.css', '@auto']) ?>
  
  <?= css(['assets/css/styles.css', '@auto']) ?>
  <?= css(['assets/css/colourtag-page0.css', '@auto']) ?>

  <?= js(['assets/js/javascript.js', '@auto']) ?>
  <?= js(['assets/js/jquery-1.7.1.min.js', '@auto']) ?>
  <?= js(['assets/js/function.js', '@auto']) ?>
  <?php // echo js(['assets/js/index.js', '@auto']) ?>

  <?= js(['assets/js/jquery.fitvids.js', '@auto']) ?>
  <?= js(['assets/js/jquery.flexslider.js', '@auto']) ?>
  <?= js(['assets/js/stacks_page_page0.js', '@auto']) ?>
  
<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
      adroll_adv_id = "3ALUZKCJMFDS7KLVY2OWE2";
      adroll_pix_id = "YSN7W5KEY5FFBLKG45XIAS";
      (function () {
      var oldonload = window.onload;
      window.onload = function(){
        __adroll_loaded=true;
        var scr = document.createElement("script");
        var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
        scr.setAttribute('async', 'true');
        scr.type = "text/javascript";
        scr.src = host + "/j/roundtrip.js";
        ((document.getElementsByTagName('head') || [null])[0] ||
          document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        if(oldonload){oldonload()}};
      }());
    </script>
    <?php if($page->robots()->toBool()): ?>
        <meta name="robots" content="noindex" />
    <?php endif; ?>
    <?= $site->facebook_pixel()->value();?>
</head>
<body>
<?php 
if(!$kirby->user()){
    header('Location: http://speedst3r.ru/panel/site');
}
?>


<?php // var_dump($page->robots()->toBool()); ?>
  <div class="page">
    <?php /*
    <header class="header">
      <!-- In this link we call `$site->url()` to create a link back to the homepage -->
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">
        <?php 
        // In the menu, we only fetch listed pages, i.e. the pages that have a prepended number in their foldername
        // We do not want to display links to unlisted `error`, `home`, or `sandbox` pages
        // More about page status: https://getkirby.com/docs/reference/panel/blueprints/page#statuses
        foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header>
    */ ?>

      <header class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
          <div id="headwrap">

              <div id="titlelogo">
                  <a href="http://cdainterview.com/">
                      <div id="logo"><img src="<?= url('assets/images/bemo-logo2.png') ?>" width="167" height="100" alt="Site logo" /></div>
                      <h1></h1>
                  </a>
                  <h2></h2>
              </div>

              <div id="mwrap">
                  <div id="lt"></div>
                  <div id="lm"></div>
                  <div id="lb"></div>
              </div>

              <div id="nwrap">
                  <div id="menuBtn"></div>
                  <nav>
                      <ul class="navigation">

                          <?php foreach ($site->children()->listed() as $item): ?>
                              <li <?php e($item->isOpen(), ' id="current"') ?>>
                                  <?= $item->title()->link() ?>
                              </li>
                          <?php endforeach ?>
                      </ul>

                  </nav>
              </div>
          </div>
      </header>
