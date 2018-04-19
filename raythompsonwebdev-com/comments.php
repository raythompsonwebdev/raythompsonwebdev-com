<?php
/**
 * *PHP version 5
 *
 * Comments | core/comments.php.
 *
 * @category   Comments
 * @package    Raythompsonwebdev-com
 * @subpackage Comments
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 * 
 *  Comments themplate - Adapted Version of Kubrick's
 *
 *  There are 2 distinct sections after the protection area ::
 *  Display Comments is a loop surrounding the wp_list_comments() function
 *  The Form/Login section uses comment_form() to do everything
 *  ( Finally the RSS link is at the end of the page )
 * 
 */
 
// ##########  Do not delete these lines
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Please do not load this page directly. Thanks!'); 
}
if (post_password_required() ) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'raythompsonwebdev-com'); ?></p>
<?php
    return; 
}
// ##########  End do not delete section
 
// Display Comments Section
if (have_comments() ) : ?>
    <h3 id="comments">
        <?php comments_number('No Responses', 'One Response', '% Responses');?> <?php printf('to "%s"', the_title('', '', false)); ?></h3>
         <ol class="commentlist">
    
        <?php
        wp_list_comments(
            array(
            //see http://codex.wordpress.org/Function_Reference/wp_list_comments
            //'login_text'        => 'Login to reply',
            //'callback'          => null,
            //'end-callback'      => null,
            //'type'              => 'all',
            //'avatar_size'       => 32,
            //'reverse_top_level' => null,
            //'reverse_children'  =>
            )
        );
        ?>
    </ol>
    <div class="nav-links navigation">
<h1 class="screen-reader-text section-heading"><?php esc_html_e('Comment navigation', 'raythompsonwebdev-com'); ?></h1>
        <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'raythompsonwebdev-com')); ?></div>
        <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'raythompsonwebdev-com')); ?></div>

    </div><!-- .nav-links -->
        
    <?php
    if (! comments_open() ) : // There are comments but comments are now closed
        echo"<p class='nocomments'>Comments are closed.</p>";
    endif;
 
else : // I.E. There are no Comments
    if (comments_open() ) : // Comments are open, but there are none yet
        // echo"<p>Be the first to write a comment.</p>";
    else : // comments are closed
        echo"<p class='nocomments'>Comments are closed.</p>";
    endif;
endif;
 
// Display Form/Login info Section
// the comment_form() function handles this and can be used without any paramaters simply as "comment_form()"
comment_form(
    array(
    // see codex http://codex.wordpress.org/Function_Reference/comment_form for default values
    // tutorial here http://blogaliving.com/wordpress-adding-comment_form-theme/
    'comment_field' => '<p><textarea name="comment" id="comment" cols="58" rows="7" tabindex="4" aria-required="true"></textarea></p>',
    'label_submit' => 'Submit Comment',
    'comment_notes_after' => ''
    )
);
 

 
?>
