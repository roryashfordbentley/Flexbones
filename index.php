<?php get_header(); ?>
<div class="wrapper">
	<section class="main main--styleguide">
		
	<!-- Headings -->

	<h1>Headings</h1>
	<hr><br>

	<h1>Heading 1 (h1) <a href="#">link</a></h1>
	<h2>Heading 2 (h2) <a href="#">link</a></h2>
	<h3>Heading 3 (h3) <a href="#">link</a></h3>
	<h4>Heading 4 (h4) <a href="#">link</a></h4>
	<h5>Heading 5 (h5) <a href="#">link</a></h5>

	<!-- Headings + text -->

	<h1>Headings &amp; Text</h1>
	<hr><br>

	<h1>Heading 1 (h1)</h1>
	<p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

	<h2>Heading 2 (h2)</h2>
	<p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

	<h3>Heading 3 (h3)</h3>
	<p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

	<h4>Heading 4 (h4)</h4>
	<p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

	<h5>Heading 5 (h5)</h5>
	<p>Oh, so they have Internet on computers now! I prefer a vehicle that doesn't hurt Mother Earth. It's a go-cart, powered by my own sense of self-satisfaction. Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box… When I held that gun in my hand, I felt a surge of power…like God must feel when he's holding a gun.</p>

	<!-- Text -->

	<h1>Text</h1>
	<hr><br>

	<p>Oh, so they have <i>Internet</i> on <strong>computers</strong> now! <del>where is my coat</del> <a href="#">I'd Click that</a></p>

	<!-- Images -->

	<h1>Images</h1>
	<hr><br>

	<div class="clear">
		<div class="grid__6-12">
			<figure>
				<a href="#"><img src="http://placekitten.com/600/400" alt="KITTEH KITTEH KITTEH"></a>
			</figure>
		</div>
		<div class="grid__6-12--omega">
			<figure>
				<img src="http://placekitten.com/600/400" alt="KITTEH KITTEH KITTEH">
				<figcaption>With <del>cat</del> caption</figcaption>
			</figure>
		</div>
	</div>

	

	<!-- Buttons -->

	<h1>Buttons</h1>
	<hr><br>

	<button class="btn">
		Normal
	</button>

	<button class="btn btn--success">
		Success
	</button>

	<button class="btn btn--warning">
		Warning
	</button>

	<button class="btn btn--problem">
		Problem
	</button>

	<!-- Alerts -->

	<h1>Alerts</h1>
	<hr><br>

	<div class="alert">
		<p>This is a standard alert flash, for general use.</p>
	</div>

	<div class="alert alert--success">
		<p>This is a standard alert flash, for general use.</p>
	</div>

	<div class="alert alert--warning">
		<p>This is a standard alert flash, for general use.</p>
	</div>

	<div class="alert alert--error">
		<p>This is a standard alert flash, for general use.</p>
	</div>

	<!-- Forms -->

	<h1>Forms</h1>
	<hr><br>

	<div class="flexform clear">
		<form>
			<div class="clear">
				<div class="flexform-group grid__6-12--m_up">
					<label>First Name</label>
					<input type="text" name="name">
				</div>

				<div class="flexform-group grid__6-12--m_up--omega">
					<label>Last Name</label>
					<input type="text" name="name">
				</div>
			</div>
			
			<div class="clear">
				<div class="flexform-group grid__6-12--m_up">
					<label>Age</label>
					<input type="number" min="12" max="100" step="2" value="21">
				</div>

				<div class="flexform-group grid__6-12--m_up--omega">
					<label>Email</label>
					<input type="email" name="email">
				</div>
			</div>

			<div class="flexform-group">
				<label>Description</label>
				<textarea></textarea>
			</div>

			<div class="flexform-group">
				<input type="submit" name="confirm" value="Confirm" class="btn btn--success">
				<input type="submit" name="confirm" value="Cancel" class="btn btn--error">
			</div>

		</form>

	</div>

	<!-- Tables -->

	<h1>Tables</h1>
	<hr><br>

	<table class="flextable">
		<thead>
			<tr>
				<th>Animal</th>
				<th>Name</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Dog</td>
				<td>Spot</td>
				<td>3</td>
			</tr>
			<tr>
				<td>Cat</td>
				<td>Colin</td>
				<td>9</td>
			</tr>
			<tr>
				<td>Rabbit</td>
				<td>Flopsy</td>
				<td>1</td>
			</tr>
			<tr>
				<td>Spider</td>
				<td>Cecil</td>
				<td>12</td>
			</tr>
			<tr>
				<td>Parrot</td>
				<td>Percy</td>
				<td>35</td>
			</tr>
			<tr>
				<td>Goat</td>
				<td>Billy</td>
				<td>4</td>
			</tr>
			<tr>
				<td>Otter</td>
				<td>Oscar</td>
				<td>5</td>
			</tr>
			<tr>
				<td>Bear</td>
				<td>Softie</td>
				<td>22</td>
			</tr>
		</tbody>
	</table>


	</section>


	<section class="main main--index" role="main"> 
		<?php while(have_posts()) : the_post(); ?>
			<h1><?php //the_title(); ?></h1>
			<?php //the_content(); ?>
		<?php endwhile; ?>
	</section>
</div>
<?php get_footer(); ?>