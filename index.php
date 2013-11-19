<?php get_header(); ?>
	<section class="main main-index" role="main"> 
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			
			<?php //the_title(); ?>
			<?php //the_content(); ?>

		<?php endwhile; ?>			
		<?php endif; ?>	

		<h1>Flexbones Wordpress Theme</h1>

		<p class="lead">Thanks for trying the Flexbones <a href="http://wordpress.org">Wordpress</a> theme! Out of the box Flexbones is fully responsive, It is very minimal and built on Sass.</p>

		<p>This isn't a framework and you won't find the kind of kitchen sink UI patterns you get from the fantastic <a href="http://getbootstrap.com/">Twitter Bootstrap</a> and <a href="http://foundation.zurb.com/">Zurb Foundation</a></p>
		
		<h2>Download</h2>

		<p>You can download the latest version from GitHub: <a href="https://github.com/roikles/flexbones-wp-theme">https://github.com/roikles/flexbones-wp-theme</a></p>

		<h2>Features</h2>

		<ul>
			<li>The Superb responsive <a href="http//www.susy.oddbird.net">Susy Grid System</a></li>
			<li>Responsive Baseline Grid</li>
			<li>Gridtacular responsive development tool</li>
			<li>Grunt file for creating Builds</li>
			<li>Sass stylesheets, logically organised</li>
		</ul>

		<h2>Images</h2>

		<p>Images are responsive out of the box using max-width, this can be disabled for static sites. Below is a regular image and an image with a caption using the <em>figure</em> &amp; <em>figcation</em> elements.</p>
		
		<div class="example-image-container clear">
			<figure class="example-image">
	  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/example/community.jpg" alt="Community Cast">
			</figure>

			<figure class="example-image example-image--last">
	  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/example/community.jpg" alt="Community Cast">
	  			<figcaption class="example-image__caption small">The cast of Dan Harmon's Community.</figcaption>
			</figure>
		</div>
		

		<h2>Grid</h2>

		<p>Using Eric Mayer's brilliant grid system it takes seconds to create beautiful, nested, responsive grid systems utilising inline media queries and device agnostic breakpoints.</p>

		<h3>Examples</h3>

		<div class="example-grid clear">
			<div class="col">8/8 Column (no style needed XD)</p></div>
			<div class="col col--1">1 col</div>
			<div class="col col--1">1 col</div>
			<div class="col col--1">1 col</div>
			<div class="col col--1">1 col</div>
			<div class="col col--1">1 col</div>
			<div class="col col--1">1 col</div>
			<div class="col col--1">1 col</div>
			<div class="col col--1 col--1--last">1 col</div>

			<div class="col col--2">2 col</div>
			<div class="col col--2">2 col</div>
			<div class="col col--2">2 col</div>
			<div class="col col--2 col--2--last">2 col</div>

			<div class="col col--4">4 col</div>
			<div class="col col--4 col--4--last">4 col</div>
		</div>

		<h3>Usage</h3>

		<p>This example page's 2 column layout was built using the following simple Sass:</p>

		<pre class="prettyprint lang-scss linenums">
.wrapper{
    @include container;
}

.sidebar{
    @include at-breakpoint(){
        @include span-columns(3, 12);
    }
}

.content{
    @include at-breakpoint(){
        @include span-columns(8 omega, 12);
    }
}</pre>	
		<h2>Forms</h2>
		
		<form class="form">
			<div>
				<label>First name.</label>
				<input type="text"></input>
			</div>

			<div>
				<label>Last name.</label>
				<input type="text"></input>
			</div>

			<div>
				<label>Message.</label>
				<textarea></textarea>
			</div>
			<div>
				<input type="submit" name="submit" value="Submit">
			</div>	
		</form>
		
	</section>
<?php get_footer(); ?>