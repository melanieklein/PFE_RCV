<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div class="page">

  <header role="banner">

        <?php if ($site_name): ?>
          <h1 class="outliner"><?php print $site_name; ?></h1>
        <?php endif; ?>

        <?php print render($page['header']); ?>

        <?php if ($secondary_menu): ?>
      <nav class="menu-login" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

        <!--<?php print render($page['navigation']); ?>-->
        
        <?php if ($main_menu): ?>
        <nav class="menu-nav" role="navigation">
        <h1 class="outliner">Menu de navigation</h1>
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see http://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

    <?php if ($logo || $site_name): ?>
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" width="200" height="200" alt="<?php print $site_name; ?>" /></a>
    <?php endif; ?>

  </header>

  <div class="content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php /*print $breadcrumb;*/ ?>
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <!--<?php print render($page['help']); ?>-->
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
    
     <p><?php print render($page['content']['system_main']['nodes']['5']['body'][0]['#markup']);?></p>

    <div class="section contact">
        <h2>nous contacter</h2>
        <div class="bloc contact-form col6"><?php print render($page['content']['webform_client-block-31']);?></div>
        <div class="contact-particulars colb6"><?php print render($page['content']['block_10']);?></div>
    </div>  
    
    <div class="section visit">
        <h2>nous rendre visite</h2>
        <div class="visit-acces"><?php print render($page['content']['block_11']);?></div>
        
        <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8OyEue1StkL3D9sFSa5CC3ri3KnWQ_D0&sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(50.6474,5.623878),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("visit-map"),
            mapOptions);

          var image = 'sites/all/themes/rcv/images/icones/map-icon.png';

          var marker = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.6474,5.623878),
          title: "Royal-Cine Vidéo 8/16",
          icon: image
          });

        var styles = [
    {
      featureType: "road",
      elementType: "geometry.fill",
      stylers: [
        { color: "#dfe6e4" }
      ]
    },{
      featureType: "road",
      elementType: "labels.text.stroke",
      stylers: [
        { color: "#dfe6e4" }
      ]
    },{
      featureType: "poi",
      elementType: "all",
      stylers: [
      { color: "#FFFFFF" }
      ]
    },{
      featureType: "all",
      elementType: "labels.text.fill",
      stylers: [
      { color: "#34549D" }
      ]
    },{
      featureType: "poi",
      elementType: "labels.icon",
      stylers: [
        { color: "#34549D" }
      ]
    },{
      featureType: "landscape",
      elementType: "all",
      stylers: [
      { color:"#dfe6e4" }
      ]
    }   
  ];

  map.setOptions({styles: styles});

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

        <div id="visit-map">
          
        </div>
    </div>
    <div class="section inscription">
      <?php print render($page['content']['block_12']);?>
    </div>
  
      <?php print $feed_icons; ?>

  </div><!-- /#content -->
  
  <footer>
  <?php print render($page['footer']); ?>
  </footer>

</div><!-- /#page -->

<?php print render($page['bottom']); ?>