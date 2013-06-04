<?php
/**
 * @file
 * Zen theme's implementation to display a block.
 *
 * Available variables:
 * - $title: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be "block-user".
 *   - first: The first block in the region.
 *   - last: The last block in the region.
 *   - odd: An odd-numbered block in the region's list of blocks.
 *   - even: An even-numbered block in the region's list of blocks.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see zen_preprocess_block()
 * @see template_process()
 * @see zen_process_block()
 */
?><div class="footer-plan">
  <?php if ($title): ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
	
	<ul>
  		<li><a href="<?php print ($elements['597']['#href']);?>" ><?php print ($elements['597']['#title']);?></a></li>
		<li><a href="<?php print ($elements['598']['#href']);?>" ><?php print ($elements['598']['#title']);?></a>
			<ul>
				<li><a href="<?php print ($elements['598']['#below']['599']['#href']);?>" ><?php print ($elements['598']['#below']['599']['#title']);?></a></li>
				<li><a href="<?php print ($elements['598']['#below']['600']['#href']);?>" ><?php print ($elements['598']['#below']['600']['#title']);?></a></li>
				<li><a href="<?php print ($elements['598']['#below']['601']['#href']);?>" ><?php print ($elements['598']['#below']['601']['#title']);?></a></li>
				<li><a href="<?php print ($elements['598']['#below']['602']['#href']);?>" ><?php print ($elements['598']['#below']['602']['#title']);?></a></li>
			</ul>
		</li>
		<li>
			<a href="<?php print ($elements['603']['#href']);?>" ><?php print ($elements['603']['#title']);?></a>
		</li>
	</ul>
		<ul>
  		<li><a href="<?php print ($elements['604']['#href']);?>" ><?php print ($elements['604']['#title']);?></a>
		<ul>
				<li><a href="<?php print ($elements['604']['#below']['605']['#href']);?>" ><?php print ($elements['604']['#below']['605']['#title']);?></a></li>
				<li><a href="<?php print ($elements['604']['#below']['606']['#href']);?>" ><?php print ($elements['604']['#below']['606']['#title']);?></a></li>
  		</ul>
  		</li>
		<li><a href="<?php print ($elements['607']['#href']);?>" ><?php print ($elements['607']['#title']);?></a></li>
		<li>
			<a href="<?php print ($elements['608']['#href']);?>" ><?php print ($elements['608']['#title']);?></a>
			<ul>
				<li><a href="<?php print ($elements['608']['#below']['610']['#href']);?>" ><?php print ($elements['608']['#below']['610']['#title']);?></a></li>
				<li><a href="<?php print ($elements['608']['#below']['611']['#href']);?>" ><?php print ($elements['608']['#below']['611']['#title']);?></a></li>
				<li><a href="<?php print ($elements['608']['#below']['612']['#href']);?>" ><?php print ($elements['608']['#below']['612']['#title']);?></a></li>
  			</ul>
		</li>
	</ul>
</div>