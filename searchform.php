<?php /* The template for the Search form. */ ?>
<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <div class="search-con">
    	<div class="search-form">
			<input type="text" value="" name="s" class="search-input" placeholder="Search">
    		<input type="submit" value="Go" name="search-button" class="search-button">
    	</div>
    </div>
</form>