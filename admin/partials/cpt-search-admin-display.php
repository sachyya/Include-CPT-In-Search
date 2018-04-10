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
// gh_print( $custom_post_types ); 
?>
<div class="wrap">
	<form>
		
	<table class="form-table">
		<tbody>
			<tr>
				<th>Select the custom post types to be included on search:</th>
				<td>
					<fieldset>
						<label>
							<input type="checkbox" name="">Post type
						</label>
					</fieldset>
				</td>
			</tr>
		</tbody>
	</table>
	</form>
</div>
