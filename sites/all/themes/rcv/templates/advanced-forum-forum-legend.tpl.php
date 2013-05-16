<?php

/**
 * @file
 * Theme implementation to show forum legend.
 *
 */
?>

<div class="forum-list-icon-legend clearfix">
  <div class="forum-list-legend-item">
    <span class="forum-list-icon-wrapper">
      <span class="forum-list-icon-new-posts">
      </span>
    </span>

    <span class="forum-list-text-legend-new-posts">
      <?php print t('Nouvelles réponses'); ?>
    </span>
  </div>

  <div class="forum-list-legend-item">
    <span class="forum-list-icon-wrapper">
      <span class="forum-list-icon-default">
      </span>
    </span>

    <span class="forum-list-text-legend-default">
      <?php print t('0 nouvelles réponses'); ?>
    </span>
  </div>
</div>
