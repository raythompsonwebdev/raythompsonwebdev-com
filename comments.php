<?php
/**
 * *PHP version 7.2.
 *
 * Comments | core/comments.php.
 *
 * @category   Comments
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 *
 *  Comments themplate - Adapted Version of Kubrick's
 *
 *  There are 2 distinct sections after the protection area :
 *  Display Comments is a loop surrounding the wp_list_comments() function
 *  The Form/Login section uses comment_form() to do everything
 *  ( Finally the RSS link is at the end of the page )
 */

// ##########  Do not delete these lines


if ( isset( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) ) {

	die( 'Please do not load this page directly. Thanks!' );
}
if ( post_password_required() ) { ?>
	<p class="nocomments"><?php esc_html_e( 'This post is password protected. Enter the password to view comments.', 'raythompsonwebdev-com' ); ?></p>
	<?php
	return;
}
// ##########  End do not delete section
// Display Comments Section
if ( have_comments() ) :
	?>

	<!--Comment List Header-->
	<h3 class="comments-title">
  <?php
			$raythompsonwebdev_com_comment_count = get_comments_number();
			if ( '1' === $raythompsonwebdev_com_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'raythompsonwebdev-com' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $raythompsonwebdev_com_comment_count, 'comments title', 'raythompsonwebdev-com' ) ),
					number_format_i18n( $raythompsonwebdev_com_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
	</h3>

	<!--Comment List-->
	<ol class="commentlist">
		<?php
			wp_list_comments(
				array(
					// See http://codex.wordpress.org/Function_Reference/wp_list_comments.
					'short_ping'  => true,
          'avatar_size' => 74,
          'style'      => 'ol',

				)
			);
		?>
	</ol>
	<?php
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
	<!--Comment Navigation-->

	<nav class="navigation">
	  <h3 class="section-heading"><?php esc_html_e( 'Comment navigation', 'raythompsonwebdev-com' ); ?></h3>
		<div class="nav-links">
			<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'raythompsonwebdev-com' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'raythompsonwebdev-com' ) ); ?></div>
		</div>
	</nav>
	<?php endif; // Check for comment navigation. ?>


	<?php
	if ( ! comments_open() ) : // There are comments but comments are now closed.
		echo "<p class='nocomments'>Comments are closed.</p>";
	endif;

	else : // I.E. There are no Comments
		// Comments are open, but there are none yet.
		if ( comments_open() ) :
			echo '<p>Be the first to write a comment.</p>';
		else : // comments are closed.
			echo "<p class='nocomments'>Comments are closed.</p>";
		endif;
	endif;

	// Display Form/Login info Section.
	// the comment_form() function handles this and can be used without any paramaters simply as "comment_form()".
	comment_form(
		array(
			// see codex http://codex.wordpress.org/Function_Reference/comment_form for default values.
			// tutorial here http://blogaliving.com/wordpress-adding-comment_form-theme/.
			'comment_field'       => '<p><textarea name="comment" id="comment" cols="58" rows="7" tabindex="4" aria-required="true"></textarea></p>',
			'label_submit'        => 'Submit Comment',
			'comment_notes_after' => '',
		)
	);



	?>
