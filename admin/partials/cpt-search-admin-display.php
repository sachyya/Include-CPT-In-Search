<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/sachyya/
 * @since      1.0.0
 *
 * @package    Cpt_Search
 * @subpackage Cpt_Search/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
$args = array(
   'public'   => true,
   '_builtin' => false,
);

// $args = apply_filters( 'cpt_search_post_types_args', $args );

$custom_post_types = get_post_types( $args, 'object' );
foreach ($custom_post_types as $custom_post_type => $value ) {
	gh_print( get_option( 'cpt_search_setting' ) );
	$slug = $value->name;
	$label = $value->label;
	echo '<input name="cpt_search_setting" id="cpt_search_setting" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'cpt_search_setting' ), false ) . ' />' . $label . '<br />';
}