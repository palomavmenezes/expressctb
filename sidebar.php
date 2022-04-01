<?php

	/**
	 * SIDEBAR
	 */

?>

	<aside class="page-sidebar">
		<?php
			if(is_single()){
				if(is_active_sidebar('sidebar-post')){
					dynamic_sidebar('sidebar-post');
				}else{
					expressctb_get_default_post_widgets();
				}
			}else{
				if(is_active_sidebar('sidebar-page')){
					dynamic_sidebar('sidebar-page');
				}else{
					expressctb_get_default_page_widgets();
				}
			}
		?>
	</aside>
