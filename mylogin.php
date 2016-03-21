<?php
/**
 * Template Name: login
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		if(!is_user_logged_in()){
			
			if(isset($_GET['login']) && $_GET['login'] =='failed'  ){
				echo'Your user name or password isnt right.';
				
			}
			
			
			
			?>
			<form name="loginform" id="loginform" action="http://localhost/prm/wp-login.php" method="post">
				<p>
					<label for="user_login">Username<br>
					<input type="text" name="log" id="user_login" aria-describedby="login_error" class="input" value="" size="20"></label>
				</p>
				<p>
					<label for="user_pass">Password<br>
					<input type="password" name="pwd" id="user_pass" aria-describedby="login_error" class="input" value="" size="20"></label>
				</p>
					<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>
				<p class="submit">
					<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
					<input type="hidden" name="redirect_to" value="<?php echo get_the_permalink(); ?>"
					<input type="hidden" name="testcookie" value="1">
				</p>
			</form>
			<?php
			
		}else{
			
			echo'<h2>You are already loggedin <a href="'.wp_logout_url(get_the_permalink()).'">LOGOUT</a></h2>';
		}
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
