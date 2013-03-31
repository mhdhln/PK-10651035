<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<!-- General meta information -->
	<title><?php echo $title; ?></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>berkas/js/js_login/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>berkas/js/js_login/js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>berkas/js/js_login/js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>berkas/css/css_login/style.css" media="screen" />
	<!-- // Load stylesheets -->
	
<script>


	$(document).ready(function(){
 
	$("#submit1").hover(
	function() {
	$(this).animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).animate({"opacity": "1"}, "slow");
	});
 	});


</script>
	
</head>
<body>

	<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<h2>Login</h2>

			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				
					<?php echo form_open('admin_web/c_login'); ?>
					<input type="text" name="username" id="url" value="<?php echo set_value('username'); ?>" onclick="this.value = ''">
					<img id="url_user" src="<?php echo base_url(); ?>berkas/images/img_login/mailicon.png" alt="">
					<font color="#ef4423"><?php echo form_error('username'); ?></font>
				
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
				
					<input type="password" name="password" id="url" value="<?php echo set_value('password'); ?>" onclick="this.value = ''">
					<img id="url_password" src="<?php echo base_url(); ?>berkas/images/img_login/passicon.png" alt="">
					<font color="#ef4423"><?php echo form_error('password'); ?></font>
				
				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
				<form>
				<input type="image" src="<?php echo base_url(); ?>berkas/images/img_login/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="<?php echo base_url(); ?>berkas/images/img_login/submit.png" id="submit2" value="Sign In">
				</form>
			</div>

<?php echo form_close(); ?>

			<div id="links_left">

			<a href="#">Forgot your Password?</a>

			</div>

			<div id="links_right"><a href="#">Not a Member Yet?</a></div>

		</div>

		<div id="wrapperbottom"></div>
		
		<div id="powered">
		<p>Powered by <a href="http://www.premiumfreebies.eu">Premiumfreebies Control Panel</a></p>
		</div>
	</div>

</body>
</html>