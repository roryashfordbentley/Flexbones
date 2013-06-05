barebones current markup
=========



	Body
		div.mobile-top-bar
			div.mobile-search
			div.mobile-nav-toggle
				a.button	
		nav.mobile-nav
			ul.m-nav-block
	
	// HEADER	
	section.header-container
		header.site-header
			nav.horizontal-nav
				ul
			div.main-header
				div.logo
					a.img[logo]	
		
	// SLIDER
	section.slider-container
		section.slider
			imgs[slides]
			
	// CONTENT
	section.content-container
		section.content
			section.main-content
				>>LOOP
					header
						h1[title]
					[wp-content]				
					footer
						[social links,dates,whatever]
		
	// FOOTER
	section.footer-container
		footer.site-footer
			
