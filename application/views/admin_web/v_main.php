<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" href="<?php echo base_url() ?>berkas/css/css_admin/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="<?php echo base_url() ?>berkas/js/js_admin/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>berkas/js/js_admin/hideshow.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>berkas/js/js_admin/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>berkas/js/js_admin/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">Halaman Administrator</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><?php echo anchor_popup('main','View Site');?></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?php echo $_SESSION['username']; ?> (<a href="#">3 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><?php echo anchor('admin_web/main','Website Admin'); ?><div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Content</h3>
		<ul class="toggle">
			<li class="icn_new_article"><?php echo anchor('admin_web/c_content/tambah_artikel','New Articles'); ?></li>
			<li class="icn_edit_article"><?php echo anchor('admin_web/c_content/lihat_artikel','Edit Articles'); ?></li>
			<li class="icn_categories"><a href="#">Categories</a></li>
			<li class="icn_tags"><a href="#">Tags</a></li>
		</ul>
		<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><?php echo anchor('admin_web/c_users/tambah_users','Add New User'); ?></li>
			<li class="icn_view_users"><?php echo anchor('admin_web/c_users','View Users'); ?></li>
			<li class="icn_profile"><?php echo anchor('admin_web/c_users/you_profile','Your Profile'); ?></li>
		</ul>
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><?php echo anchor('admin_web/c_slide','File Manager');?></li>
			<li class="icn_photo"><?php echo anchor('admin_web/c_gallery','Gallery'); ?></li>
			<li class="icn_audio"><a href="#">Audio</a></li>
			<li class="icn_video"><a href="#">Video</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Security</a></li>
			<li class="icn_jump_back"><?php echo anchor('admin_web/c_login/logout','Logout'); ?></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<?php $this->load->view($main);?>
		
		<div class="clear"></div>
		

		
		<!-- end of post new article
		
		
		<h4 class="alert_warning">A Warning Alert</h4>
		
		<h4 class="alert_error">An Error Message</h4>
		
		<h4 class="alert_success">A Success Message</h4> -->
		

		
		<!-- end of styles article -->
		
		
		<div class="spacer"></div>
	</section>


</body>

</html>