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
if ( preg_match('/href="([^"]+)"/', $fields['field_link']->content, $match) ) {
  $url = $match[1];
} else {
  $url = null;
}
?>
<div class="image">
  <a href="<?php print $url;?>"><?php print $fields['field_image']->content; ?></a>
</div>
<div class="info">
  <div class="texto">
    <?php print $fields['field_texto']->content; ?>
  </div>
<?php if(!is_null($url)):?>
  <div class="link">
    <?php print $fields['field_link']->content; ?>
  </div>
<?php endif; ?>
<?php if(isset($fields['edit_node'])):?>
  <div class="edit_link">
    <?php print $fields['edit_node']->content; ?>
  </div>
<?php endif; ?>
</div>
