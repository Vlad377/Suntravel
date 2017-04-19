<?php
/**
 * Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
	<iframe src="https://calendar.google.com/calendar/embed?src=vladzhulavskij%40gmail.com&ctz=Europe/Kiev" style="border: 0" width="800" height="450" frameborder="0" scrolling="no"></iframe>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>