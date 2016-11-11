

<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search', 'label', 'raythompwebdesign-com' ); ?></span>
		
	</label>
	<input type="search" class="search-field"  value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search', 'label', 'raythompwebdesign-com' ); ?>" />
	<input type="submit" class="search-submit" value="Find"></input>
	</div>
</form>
          




