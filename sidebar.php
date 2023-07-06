<div class="sidebar-main position_sticky">
  <div><h2 class="blog-title">カテゴリから探す</h2></div>
  <div class="sidebar-box">
    <?php
      $categories = get_categories();
      foreach($categories as $category) :
    ?>
    <div class="category_tag">
      <a href="<?php echo get_category_link($category->term_id); ?>"
      title="<?php echo $category->name;?>">
        <?php echo $category->name; ?>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
