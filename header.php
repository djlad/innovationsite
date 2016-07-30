<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AcmeThemes
 * @subpackage SuperNews
 */

/**
 * supernews_action_before_head hook
 * @since supernews 1.0.0
 *
 * @hooked supernews_set_global -  0
 * @hooked supernews_doctype -  10
 */
do_action( 'supernews_action_before_head' );?>
	<head>

		<?php
		/**
		 * supernews_action_before_wp_head hook
		 * @since supernews 1.0.0
		 *
		 * @hooked supernews_before_wp_head -  10
		 */
		do_action( 'supernews_action_before_wp_head' );

		wp_head();
		?>


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
<body <?php body_class();
/**
 * supernews_action_body_attr hook
 * @since supernews 1.0.0
 *
 * @hooked supernews_body_attr- 10
 */
do_action( 'supernews_action_body_attr' );?>>

<?php
/**
 * supernews_action_before hook
 * @since supernews 1.0.0
 *
 * @hooked supernews_page_start - 10
 * @hooked supernews_page_start - 15
 */
do_action( 'supernews_action_before' );

/**
 * supernews_action_before_header hook
 * @since supernews 1.0.0
 *
 * @hooked supernews_skip_to_content - 10
 */
do_action( 'supernews_action_before_header' );


/**
 * supernews_action_header hook
 * @since supernews 1.0.0
 *
 * @hooked supernews_after_header - 10
 */
do_action( 'supernews_action_header' );


/**
 * supernews_action_after_header hook
 * @since supernews 1.0.0
 *
 * @hooked null
 */
do_action( 'supernews_action_after_header' );


/**
 * supernews_action_before_content hook
 * @since supernews 1.0.0
 *
 * @hooked supernews_before_content - 10
 */
do_action( 'supernews_action_before_content' );
