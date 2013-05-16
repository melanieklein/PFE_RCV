<?php

/**
 * @file
 *
 * Theme implementation: Template for each forum forum statistics section.
 *
 * Available variables:
 * - $current_total: Total number of users currently online.
 * - $current_users: Number of logged in users.
 * - $current_guests: Number of anonymous users.
 * - $online_users: List of logged in users.
 * - $topics: Total number of nodes (threads / topics).
 * - $posts: Total number of nodes + comments.
 * - $users: Total number of registered active users.
 * - $latest_users: Linked user names of latest active users.
 */
?>

<div class="forum-statistics">
  <div class="forum-statistics-header"><?php print t("En savoir plus"); ?></div>

  <div id="forum-statistics-active-header" class="forum-statistics-sub-header">
    <?php print t('Utilisateurs actuellement actifs: !current_total (!current_users utilisateur(s) et !current_guests invité(s))', array('!current_total' => $current_total, '!current_users' => $current_users, '!current_guests' => $current_guests)); ?>
  </div>

  <div id="forum-statistics-active-body" class="forum-statistics-sub-body">
    <?php print $online_users; ?>
  </div>

  <div id="forum-statistics-statistics-header" class="forum-statistics-sub-header">
    <?php print t('Statistiques'); ?>
  </div>

  <div id="forum-statistics-statistics-body" class="forum-statistics-sub-body">
    <div id="forum-statistics-topics">
      <?php print t('Sujets: !topics, Réponses: !posts, Utilisateurs: !users', array('!topics' => $topics, '!posts' => $posts, '!users' => $users)); ?>
    </div>
    <div id="forum-statistics-latest-users">
      <?php print t('Bienvenue à nos nouveaux membres: !users', array('!users' => $latest_users)); ?>
    </div>
  </div>
</div>
