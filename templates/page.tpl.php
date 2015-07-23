<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="wrapper">

  <nav role="navigation" id="navigation">
    <?php print render($page['navigation']); ?>
  </nav>
  
  <header role="banner">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>
    <?php if ($site_name): ?>
      <h1 class="header__site-name" id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><?php print $site_name; ?></a>
      </h1>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </header>

  <main id="main" role="main" tabindex="0">
    <?php print render($page['highlighted']); ?>
    <?php print $breadcrumb; ?>
    <a name="main-content" tabindex="-1"></a>
    
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <!-- A preprocess page function prevents the title being printed here if this is a node page, so we can print the title inside the node markup (&tpl) instead -->
      <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>  
    
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>

  </main>

</div>

<?php if ($page['prefooter']): ?>
  <div id="pre-footer" class="clearfix">
    <?php print render($page['prefooter']); ?>
  </div> <!-- /#pre-footer -->
<?php endif; ?>


<?php print render($page['footer']); ?>

<?php print render($page['bottom']); ?>
