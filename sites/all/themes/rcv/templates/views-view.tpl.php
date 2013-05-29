<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */

$view = views_get_current_view();

//var_dump($view->name);

if(($view->name == 'comite_organisateur') || ($view->name =='autres_passionnes') || ($view->name == 'calendrier') || ($view->name == 'nouvelles_photos')){

  if($view->name == 'comite_organisateur'){

    ?>
    <ul class="comite-members"><?php print $rows; ?></ul>

    <?php 
  }

  if($view->name == 'autres_passionnes'){
  ?>
  
  <div class="links-fcvb colb6">
    <h3><?php print $view->result[0]->node_title; ?></h3>   

    <?php

    $liens = $view->result[0]->field_field_liens;

    ?>

    <ul>
     <?php foreach($liens as $lien):?>
     <li><a href="<?php print render ($lien['raw']['url']); ?>" target="_blank"><?php print render ($lien['raw']['title']); ?></a></li>
     <?php endforeach;?>
    </ul> 

  </div>

  <div class="links-divers colb6">
    <h3><?php print $view->result[1]->node_title; ?></h3>   

    <?php

    $liens = $view->result[1]->field_field_liens;

    ?>

    <ul>
     <?php foreach($liens as $lien):?>
     <li><a href="<?php print render ($lien['raw']['url']); ?>" target="_blank"><?php print render ($lien['raw']['title']); ?></a></li>
     <?php endforeach;?>
    </ul> 

  </div>

  <?php
  }

    if($view->name == 'calendrier'){

    ?>
    <ul class="calendrier-events"><?php print $rows; ?></ul>

    <?php 
  }

  if($view->name == 'nouvelles_photos'){

    ?>
    <ul><?php print $rows; ?></ul>

    <?php if ($more): ?>
    <?php print $more; ?>
    <?php endif;
  }
}

elseif(($view->name != 'comite_organisateur') || ($view->name != 'autres_passionnes') || ($view->name != 'calendrier') || ($view->name != 'nouvelles_photos'))
{
?>


<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php
} /* class view */
?>