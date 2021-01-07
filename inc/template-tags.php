<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package raythompsonwebdev-com
 */

if ( ! function_exists( 'raythompsonwebdev_com_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function raythompsonwebdev_com_posted_on() {
		$raythompsonwebdev_com_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$raythompsonwebdev_com_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$raythompsonwebdev_com_time_string = sprintf(
			$raythompsonwebdev_com_time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$raythompsonwebdev_com_posted = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'raythompsonwebdev-com' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $raythompsonwebdev_com_time_string . '</a>'
		);

		$raythompsonwebdev_com_byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'raythompsonwebdev-com' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		// Display the author avatar if the author has a Gravatar.
		$raythompsonwebdev_com_author_id = get_the_author_meta( 'ID' );

		if ( raythompsonwebdev_com_validate_gravatar( $raythompsonwebdev_com_author_id ) ) {
			echo '<div class="meta-content has-avatar">';
			echo '<div class="author-avatar">' . get_avatar( $raythompsonwebdev_com_author_id ) . '</div>';
		} else {
			echo '<div class="meta-content">';
			//echo '<div class="no-author-avatar"> <img src="'. esc_url (get_template_directory_uri() . '/images/raythompsonwebdev.jpg') .'" /></div>';
		}

		echo '<span class="posted-on">' . $raythompsonwebdev_com_posted . '</span><span class="byline"> ' . $raythompsonwebdev_com_byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'raythompsonwebdev-com' ), esc_html__( '1 Comment', 'raythompsonwebdev-com' ), esc_html__( '% Comments', 'raythompsonwebdev-com' ) );
			echo '</span>';
		}
		echo '</div><!-- .meta-content -->';

	}
endif;

if ( ! function_exists( 'raythompsonwebdev_com_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function raythompsonwebdev_com_index_posted_on() {

		//$raythompsonwebdev_com_index_author_id = get_the_author_meta( 'ID' );

		$raythompsonwebdev_com_index_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$raythompsonwebdev_com_index_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		$raythompsonwebdev_com_index_time_string = sprintf(
			$raythompsonwebdev_com_index_time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$raythompsonwebdev_com_index_posted = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Published %s', 'post date', 'raythompsonwebdev-com' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $raythompsonwebdev_com_index_time_string . '</a>'
		);

		$raythompsonwebdev_com_index_byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'raythompsonwebdev-com' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<div class="meta-content-index">';

		echo '<span class="byline">' . $raythompsonwebdev_com_index_byline . ' </span><span class="posted-on"> ' . $raythompsonwebdev_com_index_posted . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'raythompsonwebdev-com' ), esc_html__( '1 Comment', 'raythompsonwebdev-com' ), esc_html__( '% Comments', 'raythompsonwebdev-com' ) );
			echo '</span>';
		}
		echo '</div><!-- .meta-content -->';
	}

endif;

if ( ! function_exists( 'raythompsonwebdev_com_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function raythompsonwebdev_com_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$raythompsonwebdev_com_categories_list = get_the_category_list( esc_html__( ', ', 'raythompsonwebdev-com' ) );
			if ( $raythompsonwebdev_com_categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'raythompsonwebdev-com' ) . '</span>', $raythompsonwebdev_com_categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$raythompsonwebdev_com_tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'raythompsonwebdev-com' ) );
			if ( $raythompsonwebdev_com_tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'raythompsonwebdev-com' ) . '</span>', $raythompsonwebdev_com_tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'raythompsonwebdev-com' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'raythompsonwebdev-com' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'raythompsonwebdev_com_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function raythompsonwebdev_com_post_thumbnail() {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :   ?>

			<figure class="featured-image">

					<?php the_post_thumbnail( 'featured-image' ); ?>

	</figure><!-- .post-thumbnail -->

	<?php	elseif ( is_search() ) : ?>

	<a class="search-thumbnail" href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;" aria-hidden="true">
			<?php the_post_thumbnail( 'search-image' ); ?>
	</a>


	<?php	else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;" aria-hidden="true">
			<?php the_post_thumbnail( 'post-thumbnail' ); ?>
		</a>

		<?php

		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'raythompsonwebdev_com_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function raythompsonwebdev_com_body_open() {
		do_action( 'raythompsonwebdev_com_body_open' );
	}
endif;


if ( ! function_exists( 'raythompsonwebdev_com_validate_gravatar' ) ) :
	/**
	 * Utility function to check if a gravatar exists for a given email or id
	 *
	 * @param  int|string|object $id_or_email A user ID,  email address, or comment object.
	 * @return bool if the gravatar exists or not.
	 * Original found at https://gist.github.com/justinph/5197810.
	 */
	function raythompsonwebdev_com_validate_gravatar( $id_or_email ) {

			// id or email code borrowed from wp-includes/pluggable.php.
			$email = '';
		if ( is_numeric( $id_or_email ) ) {
			$id   = (int) $id_or_email;
			$user = get_userdata( $id );
			if ( $user ) {
				$email = $user->user_email;
			}
		} elseif ( is_object( $id_or_email ) ) {
			// No avatar for pingbacks or trackbacks.
			$allowed_comment_types = apply_filters( 'get_avatar_comment_types', array( 'comment' ) );
			if ( ! empty( $id_or_email->comment_type ) && ! in_array( $id_or_email->comment_type, (array) $allowed_comment_types, true ) ) {
				return false;
			}

			if ( ! empty( $id_or_email->user_id ) ) {
				$id   = (int) $id_or_email->user_id;
				$user = get_userdata( $id );
				if ( $user ) {
					$email = $user->user_email;
				}
			} elseif ( ! empty( $id_or_email->comment_author_email ) ) {
				$email = $id_or_email->comment_author_email;
			}
		} else {
			$email = $id_or_email;
		}

			$hashkey = md5( strtolower( trim( $email ) ) );
			$uri     = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';

			$data = wp_cache_get( $hashkey );
		if ( false === $data ) {
			$response = wp_remote_head( $uri );
			if ( is_wp_error( $response ) ) {
				$data = 'not200';
			} else {
				$data = $response['response']['code'];
			}
						wp_cache_set( $hashkey, $data, $group = '', $expire = 60 * 5 );

		}
		if ( $data == '200' ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Replaces the excerpt "Read More" text by a link.
 *
 * @param mixed $more variable added.
 * @return $more
 */
function new_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more', 21 );

/**
 * Replaces the excerpt more "Read More" text by a link.
 *
 * @param mixed $excerpt variable added.
 * @return $excerpt
 */
function the_excerpt_more_link( $excerpt ) {
	$post     = get_post();
	$excerpt .= '<div class="continue-reading"><a href="' . get_permalink( $post->ID ) . '">continue reading : ' . get_the_title( $post->ID ) . '</a></div>';
	return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );
