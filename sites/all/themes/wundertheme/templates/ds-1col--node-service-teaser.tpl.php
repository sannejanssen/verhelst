<?php

/**
 * @file
 * Display Suite 1 column template.
 */
if(isset($variables['field_class']['und'][0]['safe_value'])) {
  $classes .= ' ' . $variables['field_class']['und'][0]['safe_value'];
}

// dsm($variables);
// $variables['classes_array'][] = ;
// dsm($variables['classes_array']);
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php print $ds_content; ?>
</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
