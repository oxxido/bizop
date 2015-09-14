<div class="search_sec">
<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'sage'); ?></button>
    </span>
  </div>
</form>
</div>

<!--<div class="search_sec">
    <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/search_butt.jpg" alt="" title="" class="search_btn" /></a>
    <input class="search_box" name="search" id="search" value="Search" type="text">
</div>-->
