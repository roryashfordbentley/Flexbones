<?php get_header(); ?>
<div class="wrapper content">
	<?php get_sidebar(); ?>
	<section class="main main-index" role="main"> 
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			
			<?php //the_title(); ?>
			<?php //the_content(); ?>

		<?php endwhile; ?>			
		<?php endif; ?>	

		<h1>Flexbones Wordpress Theme</h1>

		<p>Thanks for trying the Flexbones Wordpress theme!</p>

		<h2>H2. Return Of The Jedi</h2>
		<h3>H3. The Empire Strikes Back</h3>
		<h4>H4. Xwing vs Tiefighter</h4>

		<p>What good is a reward if you ain't around to use it? Besides, attacking that battle station ain't my idea of courage. It's more like&hellip;suicide. What!? Don't underestimate the Force. I find your lack of faith disturbing. I can't get involved! I've got work to do! It's not that I like the Empire, I hate it, but there's nothing I can do about it right now. It's such a long way from here.</p>

		<p>Don't underestimate the Force. Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force. You're all clear, kid. Let's blow this thing and go home! What good is a reward if you ain't around to use it? Besides, attacking that battle station ain't my idea of courage. It's more like &hellip;suicide.</p>

		<p>Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force. I'm surprised you had the courage to take the responsibility yourself. Dantooine. They're on Dantooine. Don't act so surprised, Your Highness. You weren't on any mercy mission this time. Several transmissions were beamed to this ship by Rebel spies. I want to know what happened to the plans they sent you.</p>
		
		<ul>
			<li>You mean it controls your actions?</li>
			<li>I'm surprised you had the courage to take the responsibility yourself.</li>
			<li>Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going.</li>
			<li>I have traced the Rebel spies to her. Now she is my only link to finding their secret base.</li>
			<li>Remember, a Jedi can feel the Force flowing through him.</li>
		</ul>

		<ol>
			<li>The plans you refer to will soon be back in our hands.</li>
			<li>I find your lack of faith disturbing.</li>
		</ol>

		<p>Hokey religions and ancient weapons are no match for a good blaster at your side, kid. Hey, Luke! May the Force be with you. Hokey religions and ancient weapons are no match for a good blaster at your side, kid.</p>

	</section>
</div>

<?php get_footer(); ?>