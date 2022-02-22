<?php if ( is_active_sidebar( 'primary-widget-area' )  ) : ?>
	<div class="content sidebar">
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
        <?php endif; ?>

        <h2>Categories</h2>
        <select name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
            <option value=""><?php echo esc_attr(__('Select Category')); ?></option>
            <?php
                $option = '<option value="' . get_option('home') . '/category/">All Categories</option>'; // change category to your custom page slug
                $categories = get_categories();
                foreach ($categories as $category) {
                    $option .= '<option value="'.get_option('home').'/category/'.$category->slug.'">';
                    $option .= $category->cat_name;
                    $option .= ' ('.$category->category_count.')';
                    $option .= '</option>';
                }
                echo $option;
            ?>
        </select>

        <h2>Archives</h2>
        <select name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
        <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
        <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> </select>

        <h2>Recent Posts</h2>
        <?php
        //Recent posts - function in functions.php
        wpb_recentposts_dropdown(); ?>

    </div><!-- .sidebar  -->
