<?php
/**
 * small list template
 *
 * This template is used by the <blog list> syntax and can be chosen
 * using the 'tpl' attribute. It is used to display a single entry in
 * the list and is called multiple times (once for each shown entry)
 *
 * This example shows only entry abstracts with comment numbers
 */
?>
<div class="blogtng_list">
  <h1>
    <a href="<?php $entry->tpl_link()?>" class="blogtng_permalink">
      [<?php $entry->tpl_created('%F')?>]
      <?php $entry->tpl_title()?>
    </a>
  </h1>
  <p>
    <?php $entry->tpl_abstract()?><br />
  </p>
  <div class="blogtng_footer level1">
    <a href="<?php $entry->tpl_link()?>" class="wikilink1 blogtng_permalink">Read more...</a>
    &middot;
    <?php $entry->tpl_created('%F %T')?>
    &middot;
    <?php $entry->tpl_author()?>
  </div>
</div>
