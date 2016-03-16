<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:


if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

// END ENQUEUE PARENT ACTION

function home_page_cta($atts){
	$atts=shortcode_atts(
  	array(
    	'title'=>'',
    	'link'=>'',
	'target'=>''
  	), $atts, 'ctabutton');

	$html.='<a href='.$atts["link"].' class="button-wrapper" target='.$atts["target"].'>';
	$html.='<span class="title">'.$atts["title"].'</span>';
	$html.='</a>';
	return $html;
}
add_shortcode('hpc','home_page_cta');

// bypass password reset for New User Approve plugin

add_filter( 'new_user_approve_bypass_password_reset', '__return_true' );

// bypass password reset for New User Approve plugin


// customize user admin page.

function modify_user_contact_methods( $user_contact ) {

	// Add user contact methods
	   $user_contact['phone']   = __( 'Phone'   );


	// Remove user contact methods
    unset( $user_contact['twitter']    );
    unset( $user_contact['googleplus']    );
    unset( $user_contact['facebook']    );

	return $user_contact;
}
add_filter( 'user_contactmethods', 'modify_user_contact_methods' );

add_action( 'show_user_profile', 'show_extra_profile_fields' );
add_action( 'edit_user_profile', 'show_extra_profile_fields' );

function show_extra_profile_fields( $user ) { ?>
  <h3>Company Information</h3>

	<table class="form-table">

		<tr>
			<th><label for="company">Company Name</label></th>
			<td>
				<input type="text" name="company" id="company"
        value="<?php echo esc_attr( get_the_author_meta( 'company', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="abn">ABN</label></th>
			<td>
				<input type="text" name="abn" id="abn"
        value="<?php echo esc_attr( get_the_author_meta( 'abn', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="description">Business Description</label></th>
			<td>
				<textarea rows="5" cols="30" name="description" id="description"
        class="regular-text" /><?php echo esc_attr( get_the_author_meta( 'description', $user->ID ) ); ?>
        </textarea>
        <br />
			</td>
		</tr>



	</table>

	<h3>Shipping Details</h3>

	<table class="form-table">

		<tr>
			<th><label for="s_first_name">First Name</label></th>
			<td>
				<input type="text" name="s_first_name" id="s_first_name"
        value="<?php echo esc_attr( get_the_author_meta( 's_first_name', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_last_name">Last Name</label></th>
			<td>
				<input type="text" name="s_last_name" id="s_last_name"
        value="<?php echo esc_attr( get_the_author_meta( 's_last_name', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_company">Company</label></th>
			<td>
				<input type="text" name="s_company" id="s_company"
        value="<?php echo esc_attr( get_the_author_meta( 's_company', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_phone">Phone Number</label></th>
			<td>
				<input type="text" name="s_phone" id="s_phone"
        value="<?php echo esc_attr( get_the_author_meta( 's_phone', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_address_line_1">Address Line 1</label></th>
			<td>
				<input type="text" name="s_address_line_1" id="s_address_line_1"
        value="<?php echo esc_attr( get_the_author_meta( 's_address_line_1', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_address_line_2">Address Line 2</label></th>
			<td>
				<input type="text" name="s_address_line_2" id="s_address_line_2"
        value="<?php echo esc_attr( get_the_author_meta( 's_address_line_2', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_suburb">Suburb</label></th>
			<td>
				<input type="text" name="s_suburb" id="s_suburb"
        value="<?php echo esc_attr( get_the_author_meta( 's_suburb', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_city">City</label></th>
			<td>
				<input type="text" name="s_city" id="s_city"
        value="<?php echo esc_attr( get_the_author_meta( 's_city', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_country">Country</label></th>
			<td>
				<input type="text" name="s_country" id="s_country"
        value="<?php echo esc_attr( get_the_author_meta( 's_country', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_state">State Province</label></th>
			<td>
				<input type="text" name="s_state" id="s_state"
        value="<?php echo esc_attr( get_the_author_meta( 's_state', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>
    <tr>
			<th><label for="s_zip">Zip Code</label></th>
			<td>
				<input type="text" name="s_zip" id="s_zip"
        value="<?php echo esc_attr( get_the_author_meta( 's_zip', $user->ID ) ); ?>"
        class="regular-text" /><br />
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_profile_fields' );

function save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 's_first_name', $_POST['s_first_name'] );
}

function remove_row()
{
    echo '<style>
            tr.user-rich-editing-wrap,tr.user-admin-color-wrap,tr.user-comment-shortcuts-wrap,tr.user-admin-bar-front-wrap,
            tr.user-role-wrap,tr.user-nickname-wrap,tr.user-display-name-wrap,
            tr.user-description-wrap,tr.user-profile-picture,
            tr.user-pass1-wrap,
            #your-profile h2:nth-child(5), #your-profile h2:nth-child(11), #your-profile h2:nth-child(13),
            form#your-profile h3#wordpress-seo, form#your-profile h3#wordpress-seo + table
            { display: none; }
          </style>';
}
add_action( 'admin_head-user-edit.php', 'remove_row' );
add_action( 'admin_head-profile.php',   'remove_row' );

add_filter( 'new_user_approve_notification_message_default', 'mytheme_extras_nua_approval_notification_message', 10, 2 );
function mytheme_extras_nua_approval_notification_message($message) {
	$message = __( '{username} — ({user_email}) has requested your approval at {sitename}', 'new-user-approve' ) . "\n\n";
	$message .= "{site_url}\n\n";
	$message .= __( 'To approve or deny this user access to {sitename} go to', 'new-user-approve' ) . "\n\n";
	$message .= "{admin_approve_url}\n\n";

	return $message;
}

add_filter( 'new_user_approve_approve_user_message', 'my_custom_message', 10, 2 );
function my_custom_message( $message, $user ) {
	
	$message = "Congratulation! You have been approved to access Alexander Santorini website" . "\r\n\r\n";
	$message .= 'Login at http://santor.islandmediadevelopment.com/';

	return $message;
}