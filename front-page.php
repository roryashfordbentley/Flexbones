<?php get_header(); ?>

<section class="content-container">
	<section class="content">
		<section class="main-content"> 
		
			<?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<header>
					<h1>This is a Heading (h1)</h1>
				</header>
			
				<?php //the_content(); ?>
				
				<h2>This is the subheading (h2)</h2>
				<h3>This is the subheading (h3)</h3>
				<h4>This is the subheading (h4)</h4>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<ul>
					<li>This is an unordered list item</li>
					<li>This is an unordered list item</li>
					<li>This is an unordered list item</li>
					<li>This is an unordered list item</li>
					<li>This is an unordered list item
						<ul>
							<li>This is a subset list item</li>
							<li>This is a subset list item</li>
							<li>This is a subset list item</li>
						</ul>
				</ul>
				
				<ol>
					<li>This is an ordered list item</li>
					<li>This is an ordered list item</li>
					<li>This is an ordered list item</li>
					<li>This is an ordered list item</li>
					<li>This is an ordered list item
						<ol>
							<li>This is an ordered subset list item</li>
							<li>This is an ordered subset list item</li>
							<li>This is an ordered subset list item</li>
						</ol>
				</ol>
				
				<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></blockquote>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
			in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
			exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>This is a text <a href="#">Link</a></p>
					
				<a href="#" class="button icon-button">This is a button <span aria-hidden="true" class="icon-arrow-right"></span></a>
				
				<form>
					<fieldset>
						
						<legend>Contact Form</legend>
						<div>
							<label>First Name</label>
							<input type="text" name="first_name" />
						</div>
						<div>
							<label>Last Name</label>
							<input type="text" name="last_name" />
						</div>
						<div>
							<label>Message</label>
							<textarea name="message"></textarea>
						</div>
												
						<div>
							<input type="radio" name="radio_1" /><label>Radio 1</label>
							<input type="radio" name="radio_1" /><label>Radio 2</label>
							<input type="radio" name="radio_1" /><label>Radio 3</label>
							<input type="radio" name="radio_1" /><label>Radio 4</label>
							<input type="radio" name="radio_1" /><label>Radio 5</label>
						</div>
						
						<div>
							<input type="checkbox" name="checkbox_1" /><label>Checkbox 1</label>
							<input type="checkbox" name="checkbox_2" /><label>Checkbox 2</label>
							<input type="checkbox" name="checkbox_3" /><label>Checkbox 3</label>
						</div>
						
						
					</fieldset>
				</form>

				
				<footer>
					<!-- author/ social etc -->
				</footer>
				
			<?php //endwhile; ?>
		
		</section>
		
		<?php get_sidebar(); ?>	
	
	</section>

</section>

<?php get_footer(); ?>