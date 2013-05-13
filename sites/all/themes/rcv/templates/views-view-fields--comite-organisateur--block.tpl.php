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
<li>
	<div>
		<?php print render($row->field_field_photo); ?>
	</div>
	<?php if ($row->field_field_adresse_email): ?>
	<div class="member-email">
		<button  type="button"></button>
		<a href="mailto:<?php print render($row->field_field_adresse_email); ?>"><?php print render($row->field_field_adresse_email); ?></a>
	</div>
	<?php endif;?>

	<?php if ($row->field_field_numero_telephone):?>
	<div class="member-phone">
		<button  type="button"></button>
		<em><?php print render($row->field_field_numero_telephone); ?></em>
	</div>
	<?php endif;?>
	
	<div class="member-nom-fonction">
		<h3><?php print render($row->field_field_prenom);?>&nbsp;<?php print render($row->node_title); ?></h3>
		<h4><?php print render($row->field_field_fonction); ?></h4>
	</div>
</li>