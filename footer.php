	<footer>
		<div class="wrapper">
			<div class="grid">
				<div class="span--1-2  span--1-4--m">
					<div class="footer__col">
						<h2>Pages</h2>
						<?php $args = array("posts_per_page"=>"-1","order"=>"ASC","order_by"=>"title","post_status","title_li"=>""); ?>
						<ul>
							<?php wp_list_pages($args); ?>
							<li><br></li>
							<li><a href="<?php echo get_permalink(); ?>">Terms &amp; Conditions</a></li>
						</ul>
					</div>
				</div>
				<div class="span--1-2  span--1-4--m">
					<div class="footer__col">
						<h2>Main Office</h2>
						<h3>Newgen</h3>
						<p>Unit A</p>
						<p>Sovereign Business Park</p>
						<p>Barnsley Road</p>
						<p>Shepley</p>
						<p>Huddersfield</p>
						<p>West Yorkshire</p>
						<p>HD8 8BL</p>
					</div>
				</div>
				<div class="span--1-2  span--1-4--m">
					<div class="footer__col">
						<h2>Contact</h2>
						<p>Email: info@newgen.uk.net</p>
						<p>Phone: 01484 766165</p>
						<br>
						<h3>Key Contacts</h3>
						<p><strong>Dean Staveley</strong></p>
						<p>Managing Director</p>
						<br>
						<p><strong>Matt Hulsey</strong></p>
						<p>Business Development Manager</p>
					</div>
				</div>
				<div class="span--1-1  span--1-4--m">
					<img src="<?php assets('imgs'); ?>/ewp.png" alt="Endurance Wind Power; Authorised Dealer">
				</div>
			</div>
		</div>
	</footer>
</section>
<?php wp_footer(); ?>
</body>
</html>