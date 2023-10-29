<?php $link = get_sub_field('link'); ?>
<?php if ($link) {?>
  <div class="button-cta">
    <a href="<?php the_sub_field('link')?>"><?php the_sub_field('link_text')?></a>
  </div>
<?php }?>
