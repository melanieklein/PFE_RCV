<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<li class="calendrier-event vevent" itemscope itemtype="http://schema.org/Event">
	<h3 class="with-icon" itemprop="startDate"><?php print render($row->field_field_date_evenement);?></h3>
	<div class="event-infos">
		<span class="event-categorie"><?php print render($row->field_field_categorie_evenement);?></span>
		<p itemprop="name"><?php print render($row->node_title);?></p>
		<span itemprop="place" class="event-place"><?php print render($row->field_field_lieu_evenement);?> - </span>
		<?php print ($fields['field_lien_google_map']->content);?>
	</div>
	<p class="event-description colb6"><?php print render($row->field_field_description_evenement);?></p>
</li>
