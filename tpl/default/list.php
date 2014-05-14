<?php
/**
 * small list template
 *
 * This template is used by the <blog list> syntax and can be chosen
 * using the 'tpl' attribute. It is used to display a single entry in
 * the list and is called multiple times (once for each shown entry)
 *
 * This example shows full entries and add a footer with info
 * on tags and comments.
 *
 * @var $entry helper_plugin_blogtng_entry
 */
?>
<div class="blogtng_list">
  <h1>
    <a href="<?php $entry->tpl_link()?>" class="blogtng_permalink">
      [<?php $entry->tpl_created('%Y-%m-%d')?>]
      <?php $entry->tpl_title()?>
    </a>
  </h1>
  <p>
    <?php $entry->tpl_abstract(0, true)?><br />
  </p>
  <div class="blogtng_footer level1">
    <a href="<?php $entry->tpl_link()?>" class="wikilink1 blogtng_permalink">Read more...</a>
    &middot;
    <?php $entry->tpl_created('%Y-%m-%d %H:%M:%S')?>
    &middot;
    <?php $entry->tpl_author()?>
  </div>
</div>
