<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
<div class="pictureurl"> 
</div>
<div class="footerinfo">

</div>
			<?php
				/*
				 * A sidebar in the footer? Yep. You can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
<div class="site-generator">
<div class="logo">
<div>
              <ul class="list-unstyled">
                <h3>Ми у соцмережах</h3>
               <a href="https://www.facebook.com/suntravelutsk/" target="_blank"> <img src="/wp-content/uploads/2017/05/facebook.png" title="Сторінка на Facebook"></a>
               <a href="https://www.instagram.com/suntravel7997/" target="_blank"> <img src="/wp-content/uploads/2017/05/instagram-2.png" title="Сторінка на Instagram"></a>
<a href="https://vk.com/suntravel7997" target="_blank"> <img src="/wp-content/uploads/2017/05/vk-2.png" title="Сторінка на Вконтакте"></a>
              </ul>
            </div>
</div>
<div class="contact">
<ul>
 <li>Ми працюємо:<br>
	  Пн-Пт:09.00-19.00
	  <br>Менеджер на сайті доступний щодня</li>   
<li><a href="tel:+380332727355">+38(0332)72 73 55</a>
	  <br><a href="tel:+380953905640">+38(095)390-5640</a>
	  <br><a href="tel:+380982177344">+38(098)217-7344</a></li>
</ul>
</div>				
<div class="suntravel">
Туристична агенція "SunTravel" м. Луцьк © 2017
</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>