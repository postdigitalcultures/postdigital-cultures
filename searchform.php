<!-- Search Button Outline Secondary Right -->
<form class="searchform input-group" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="site-search" hidden>Search</label>
  <input type="text" id="site-search" name="s" class="form-control" placeholder="<?php _e('Search', 'bootscore'); ?>">
  <button type="submit" class="input-group-text btn btn-outline-primary"><i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span></button>
</form>
