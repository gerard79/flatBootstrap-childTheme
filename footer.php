<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flat-bootstrap
 */
?>
	</div><!-- #content -->
<?php
/*
	<?php // Page bottom (before footer) widget area 
	get_sidebar( 'pagebottom' ); 
	?>
*/
?>
	<?php // Start the footer area ?>
	<footer id="colophon" class="site-footer" role="contentinfo">

	<!-- social media links -->

        <div class="social-media-icons">
            <a class="fb social-blue" href="http://www.facebook.com/dpulibraries">Facebook</a>
            <a class="twitter social-blue" href="http://twitter.com/intent/follow?screen_name=dpulibrarian">Twitter</a>
            <a class="youtube social-blue" href="http://www.youtube.com/user/DePaulLibraries">Youtube</a>
            <a class="pinterest social-blue" href="http://www.pinterest.com/dpulibrarian/">Pinterest</a>
        </div>
		
	<?php // Footer "sidebar" widget area (1 to 4 columns supported)
	get_sidebar( 'footer' );
	?>

	<?php // Check for footer navbar (optional)
	global $xsbf_theme_options; 
	$nav_menu = null; 
	if ( function_exists('has_nav_menu') AND has_nav_menu( 'footer' ) ) {
		$nav_menu = wp_nav_menu( 
			array( 'theme_location' => 'footer',
			'container_div' 		=> 'div', //'nav' or 'div'
			'container_class' 		=> '', //class for <nav> or <div>
			'menu_class' 			=> 'list-inline dividers', //class for <ul>
			'walker' 				=> new wp_bootstrap_navwalker(),
			'fallback_cb'			=> '',
			'echo'					=> false, // we'll output the menu later
			'depth'					=> 1,
			) 
		);
		
	// If not, default one
	} elseif ( $xsbf_theme_options['sample_footer_menu'] ) {
		$nav_menu = '
		<div class="sample-menu-footer-container">
		<ul id="sample-menu-footer" class="list-inline dividers">
		<li id="menu-item-sample-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-sample-1"><a class="smoothscroll" title="'
		.__( 'Back to top of page', 'flat-bootstrap' )
		//.'" href="#page"><span class="fa fa-angle-up"></span> '
		.'" href="#page">';
		
		// Load a different up arrow icon, depending on what font icon set is loaded
		if ( wp_style_is( 'font-awesome', 'done' ) ) {
			$nav_menu .= '<span class="fa fa-angle-up"></span> ';
		} else {
			$nav_menu .= '<span class="glyphicon glyphicon-menu-up"></span> ';
		}
		$nav_menu .= __( 'Top', 'flat-bootstrap' )
		.'</a></li>';
		
		$nav_menu .= '<li id="menu-item-sample-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sample-2"><a title="'
		.__( 'Home', 'flat-bootstrap' )
		.'" href="' . get_home_url() . '">'
		.__( 'Home', 'flat-bootstrap' )
		.'</a></li>
		</ul>
		</div>';
	} //endif has_nav_menu()
?>

	<?php // Check for site credits (can be overriden in a child theme)
	$theme = wp_get_theme();
	$site_credits = sprintf( __( '<span class="credits-copyright">&copy; %1$s %2$s. </span><span class="credits-theme">Theme by %3$s.</span>', 'flat-bootstrap' ), 
		date ( 'Y' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>',
		'<a href="' . $theme->get( 'ThemeURI' ) . '" rel="profile" target="_blank">' . $theme->get( 'Author' ) . '</a>'
	);
	$site_credits = apply_filters( 'xsbf_credits', $site_credits );
 	?>

	<?php // If either footer nav or site credits, display them
	if ( $nav_menu OR $site_credits ) : ?>	  
	<?php // <div class="after-footer"> ?>	
        
        <div class="site-info">
	   <div class="container">


		<!-- start custom footer for news.library.depaul.press website -->
                <div class="university-address">
                    <h5>DePaul University Library</h5>
                    <ul class="no-bullets">
                        <li>Administrative Offices</li>
                        <li>2350 N Kenmore Ave.</li>
                        <li>Chicago, IL 60614</li>
                        <li><a href="tel:773-325-7862">(773) 325-7862</a></li>
                    </ul>
                </div>
                <div class="footer-external-links">
                    <ul class="no-bullets">
                        <a href="http://libguides.depaul.edu/GovernmentInformation">
                            <li>
                                <div class="footer-logos"><img alt="Federal Depository Library Program" src="/wp-content/themes/flat-bootstrap-newChild/images/logo-fdlp.png"> </div>
                            </li>
                        </a>
                        <a href="http://chicagocollections.org/">
                            <li>
                                <div class="footer-logos"><img alt="Chicago Collections Consortium" src="/wp-content/themes/flat-bootstrap-newChild/images/logo-CC_member_badge_color.png"> </div>
                            </li>
                        </a>
                    </ul>
                </div>


                <!-- end custom footer for news.library.depaul.press website -->

<?php
/*
		<?php // Footer nav menu
		if ( $nav_menu ) : ?>
			<div class="footer-nav-menu pull-left">
			<nav id="footer-navigation" class="secondary-navigation" role="navigation">
				<h1 class="menu-toggle sr-only"><?php _e( 'Footer Menu', 'flat-bootstrap' ); ?></h1>
				<?php echo $nav_menu; ?>
			</nav>
			</div><!-- .footer-nav-menu -->
		<?php endif; ?>

		<?php // Footer site credits
		if ( $site_credits AND $nav_menu ) : ?>
			<div id="site-credits" class="site-credits pull-right">
			<?php echo $site_credits; ?>
			</div><!-- .site-credits -->
		<?php elseif ( $site_credits ) : ?>
			<div id="site-credits" class="site-credits pull-left">
			<?php echo $site_credits; ?>
			</div><!-- .site-credits -->
		<?php endif; ?>
*/
?>
	</div><!-- .container -->

	<div class="footer-links">
                <p class="unit size5of5 small"><a href="http://www.depaul.edu/Pages/copyright.aspx">© 2001-2017</a> DePaul University | <a href="http://www.depaul.edu/Pages/disclaimer.aspx">Disclaimer</a> | <a href="http://www.depaul.edu/Pages/contact-us.aspx">Contact Us</a> | <a href="http://emergencyplan.depaul.edu/Pages/default.aspx">Emergency Plan</a> | <a href="http://www.depaul.edu/Pages/consumer-info.aspx">Consumer Information</a> | <a href="http://go.depaul.edu/privacy">Privacy Statement</a></p>
            </div>

	<?php // </div><!-- .after-footer --> ?>
	<?php endif; ?>
		
        </div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>