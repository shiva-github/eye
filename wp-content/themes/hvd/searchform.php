<form role="search" method="get" id="searchform" class="searchform w-100 float-left" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-box float-left" style="width: 80%;"> 
		<input type="search" name="s" id="header-search-box" class="field w-100" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search', 'fire' ); ?>" /> 
	</div>
	<div style="width: 20%;" class="search-btn float-left">
		<button id="click-search" class="search-button" type="submit">
			<img src="<?php echo site_url(); ?>/wp-content/themes/hvd/assets/images/screenshot.png" height="20px" width="20px" alt="search" />
		</button>
	</div>
</form>
