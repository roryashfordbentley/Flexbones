<?php /* The template for the Search form. */ ?>
<div class="search-form">
	<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
		<input type="text" value="" name="s" class="search-input" placeholder="Search">
		<input type="submit" value="Go" name="search-button" class="search-button">
	</form>
</div>