<?php get_header(); ?>
	<section class="main main-index" role="main"> 
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			
			<?php //the_title(); ?>
			<?php //the_content(); ?>

		<?php endwhile; ?>			
		<?php endif; ?>	

		<h1>Flexbones Wordpress Theme</h1>

		<p class="lead">Thanks for trying the Flexbones <a href="http://wordpress.org">Wordpress</a> theme! Out of the box Flexbones is fully responsive, including images and typography. Its super minimal and built on Sass.</p>

		<h2>Features</h2>

		<ul>
			<li>The Superb responsive <a href="http//www.susy.oddbird.net">Susy Grid System</a></li>
			<li>Responsive Typography</li>
			<li>Responsive Baseline Grid</li>
			<li>Gridtacular responsive development tool</li>
			<li>Grunt file for creating Builds</li>
			<li>Sass stylesheets, logically organised</li>
		</ul>

		<h3>Grid</h3>

		<p>Using Eric Mayer's brilliant grid system it takes seconds to create beautiful, nested, responsive grid systems utilising inline media queries and device agnostic breakpoints.</p>

		<h3>Examples</h3>

		<div class="example-grid clear">
			<div class="col"><p>8/8 Column (no style needed XD)</p></div>
			<div class="col col--1"><p>1 col</p></div>
			<div class="col col--1"><p>1 col</p></div>
			<div class="col col--1"><p>1 col</p></div>
			<div class="col col--1"><p>1 col</p></div>
			<div class="col col--1"><p>1 col</p></div>
			<div class="col col--1"><p>1 col</p></div>
			<div class="col col--1"><p>1 col</p></div>
			<div class="col col--1 col--1--last"><p>1 col</p></div>

			<div class="col col--2"><p>2 col</p></div>
			<div class="col col--2"><p>2 col</p></div>
			<div class="col col--2"><p>2 col</p></div>
			<div class="col col--2 col--2--last"><p>2 col</p></div>

			<div class="col col--4"><p>4 col</p></div>
			<div class="col col--4 col--4--last"><p>4 col</p></div>
		</div>

		<h3>Usage</h3>

		<pre>
.wrapper{
    @include container;
}

.sidebar{
    @include at-breakpoint(){
        @include p-columns(3, 12);
    }
}

.content{
    @include at-breakpoint(){
        @include p-columns(9 omega, 12);
    }
}
		</pre>	
	</section>

<?php get_footer(); ?>