	<footer class="site-footer">
		<p>All content &copy; Code Blue Group 2012</p>
	</footer>
</section>

<pre><?php //print_r( debug_backtrace() ); ?></pre>

<!-- Application Javascript, safe to override -->
<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	
	/* JPanel Menu */
	
	//instantiate
	var jPM = jQuery.jPanelMenu({
	    menu: '.mobile-nav',
	    trigger: '.mobile-header--button',
	    keyboardShortcuts: false
	});
	
	jPM.on();
});

</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("XX-XXXXXX-X");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php wp_footer(); //important! ?>
</body>
</html>