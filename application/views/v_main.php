<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>berkas/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>berkas/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>berkas/css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url() ?>berkas/js/jquery-1.7.min.js"></script>
    <script src="<?php echo base_url() ?>berkas/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url() ?>berkas/js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:500,
				preset:'fade',
				pagination:true,//'.pagination',true,'<ul></ul>'
				pagNums:false,
				slideshow:8000,
				numStatus:false,
				banners:'fromBottom',// fromLeft, fromRight, fromTop, fromBottom
				waitBannerAnimation:false,
				progressBar:false
			})
			
	 	}) 
		$(function(){
		  if($(window).width() <= 1066)
			{
			  $("#slider .prev").css("left", "55px")
			  $("#slider .next").css("right", "55px")
			}
		})
	</script>
<style type="text/css">

nav{
font:bold 16px Calibri,Arial,Sans-Serif;
}

nav *{margin:0 0 0 0;padding:0 0 0 0;list-style:none;}

nav ul{
background:url(../images/li.jpg) right 0 no-repeat;
height:60px;
-webkit-box-shadow:inset 0px 1px 0px rgba(0,0,0,0.4), inset 0px 2px 0px rgba(255,255,255,0.2), 0px 1px 3px rgba(0,0,0,0.4);
-moz-box-shadow:inset 0px 1px 0px rgba(0,0,0,0.4), inset 0px 2px 0px rgba(255,255,255,0.2), 0px 1px 3px rgba(0,0,0,0.4);
box-shadow:inset 0px 1px 0px rgba(0,0,0,0.4), inset 0px 2px 0px rgba(255,255,255,0.2), 0px 1px 3px rgba(0,0,0,0.4);
}

nav li{float:left;display:inline;}

nav li a{
padding:0px 15px;
line-height:40px;
color:#111;
text-shadow:0px 1px 0px rgba(255,255,255,0.3);
display:block;
text-decoration:none;
-webkit-box-shadow:inset 1px 0px 0px rgba(255,255,255,0.1), inset -1px 0px 0px rgba(0,0,0,0.1);
-moz-box-shadow:inset 1px 0px 0px rgba(255,255,255,0.1), inset -1px 0px 0px rgba(0,0,0,0.1);
box-shadow:inset 1px 0px 0px rgba(255,255,255,0.1), inset -1px 0px 0px rgba(0,0,0,0.1);
}

nav li a:hover{
background:rgba(0,0,0,0.1);
}

nav li ul{
display:block;
width:170px;
position:absolute;
left:auto;
z-index:10;
height:auto;
visibility:hidden;
opacity:0;
-webkit-transition:all 0.26s ease-out 0.2s;
-moz-transition:all 0.26s ease-out 0.2s;
-ms-transition:all 0.26s ease-out 0.2s;
-o-transition:all 0.26s ease-out 0.2s;
transition:all 0.26s ease-out 0.2s;
}

nav li li{
display:block;
float:none;
width:100%;
}

nav li:hover > ul{
visibility:visible;
width:200px;
opacity:1;
}

nav li li ul{
left:200px;
margin-top:-40px;
}

nav li.sub > a{
position:relative;
padding-right:30px;
}

nav li.sub > a:after{
content:"";
width:0px;
height:0px;
border-width:4px;
border-style:solid;
border-color:#F1B215 transparent transparent transparent;
position:absolute;
top:20px;
right:10px;
}
nav li.sub li.sub > a:after{
content:"";
width:0px;
height:0px;
border-width:4px;
border-style:solid;
border-color:transparent transparent transparent #F1B215;
position:absolute;
top:18px;
right:10px;
}

.clear{clear:both;}

</style>
</head>
<body>
<div class="bg">
   <header>
       <div class="main wrap">
       		<h1><a href="index.html"><img src="<?php echo base_url() ?>berkas/images/logo.png" alt=""></a></h1> 
            <p>8901 Marmora, Glasgow <span>8 (800) 552 5975</span></p>
       </div>
       <nav>  
          <ul class="menu">
              <li class="current"><a href="<?php anchor(base_url());?>" class="home"><img src="<?php echo base_url() ?>berkas/images/home.jpg" alt=""></a></li>
			  <li class="sub"><a href="#">Profile</a>
			  <ul>
				<li><a href="about.html">2000</a></li>
				<li><a href="#">2001</a></li>
				<li class="sub"><a href="#">2002</a>
					<ul>
						<li><a href="#">21 April</a></li>
						<li class="sub"><a href="#">23 April</a>
							<ul>
								<li><a href="#">Senin</a></li>
								<li><a href="#">Selasa</a></li>
								<li><a href="#">Rabu</a></li>
								<li><a href="locations.html">Kamis</a></li>
							</ul>
						</li>
						<li><a href="#">22 April</a></li>
						<li><a href="#">24 April</a></li>
						<li><a href="#">25 April</a></li>
					</ul>
				</li>
				<li><a href="#">2003</a></li>
				<li><a href="#">2004</a></li>
			 </ul>
		  </li>
              <li><a href="about.html">About</a></li>
              <li><a href="maintenance.html">Maintenance</a></li>
              <li><a href="repair.html">Repair</a></li>
              <li><a href="price-list.html">Price List</a></li>
              <li><a href="locations.html">Locations</a></li>
          </ul>
          <div class="clear"></div>
        </nav>
   </header>
   <div id="slider">
       <div class="slider-block">
          <div class="slider">
			<?php foreach($browse_slide as $row){ ?>
              <ul class="items">
                  <li>
					<img src="<?php echo base_url()?>images/thumbs/<?php echo $row->image; ?>" alt="">
				  <div class="banner">
				  <div>
					  <strong><?php echo $row->nama_slide; ?></strong>
					  <p><?php echo $row->keterangan; ?></p>
					  <a href="#" class="button"><?php echo $row->image; ?></a>
				  </div>
				  </div>
				  </li>
              </ul>
			 <?php  }?>
          </div>
          <a href="#" class="prev"></a>
          <a href="#" class="next"></a>
        </div>
    </div>
   <!--==============================content================================-->
   <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November12, 2012!</div>
      <div class="block-1 box-1">
        <div>
            <img src="<?php echo base_url() ?>berkas/images/page1-img1.jpg" alt="">
            <p class="text-1">Schedule <strong>Services</strong></p>
            <p class="upper"><a href="http://blog.templatemonster.com/free-website-templates/" class="link" rel="nofollow" target="_blank">Click here</a> for more info about this free website templates  by TemplateMonster.com.</p>
            <a href="#" class="button">Read More</a>
        </div>
        <div>
            <img src="<?php echo base_url() ?>berkas/images/page1-img2.jpg" alt="">
            <p class="text-1">Preventive <strong>Maintenance</strong></p>
            <p class="upper">This website template is optimized for 1280X1024 screen res. It is also XHTML & CSS valid.</p>
            <a href="#" class="button">Read More</a>
        </div>
        <div>
            <img src="<?php echo base_url() ?>berkas/images/page1-img3.jpg" alt="">
            <p class="text-1">Repair <strong>Services</strong></p>
            <p class="upper">The PSD source files of this template are available for free for the registered members.</p>
            <a href="#" class="button">Read More</a>
        </div>
        <div class="last">
            <img src="<?php echo base_url() ?>berkas/images/page1-img4.jpg" alt="">
            <p class="text-1">Tire & Wheel <strong>Services</strong></p>
            <p class="upper">Feel free to get this free web template created  by Template Monster Team!</p>
            <a href="#" class="button">Read More</a>
        </div>
      </div>
      <div class="block-2 wrap pad-2">
      	<div class="box-2">
        	<h2 class="clr-1">Reviews</h2>
            <div class="comments">
            	<div>
                	“Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.”
                	<div class="comments-corner"></div>
                </div>
                <a href="#">dolor hendrerit</a>
            </div>
            <div class="comments">
            	<div>
                	“vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.”
                	<div class="comments-corner"></div>
                </div>
                <a href="#">vulputate velit</a>
            </div>
        </div>
        <div class="box-3">
        	<h2 class="clr-1">Our Services</h2>
            <div class="wrap">
            	<ul class="list-1">
                	<li><a href="#">Consetetur sadipscing</a></li>
                    <li><a href="#">elitr sed diam nonumy</a></li>
                    <li><a href="#">tempor invidunt utabore</a></li>
                    <li><a href="#">et dolore magna aliquyam</a></li>
                    <li><a href="#">erat sed diam voluptua</a></li>
                    <li><a href="#">At vero eos et accusam et</a></li>
                </ul>
                <ul class="list-1 last">
                	<li><a href="#">Takimata sanctus est</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Ipsum dolor sit amet</a></li>
                    <li><a href="#">consetetur sadipscing </a></li>
                    <li><a href="#">sed diam nonumy eirmod</a></li>
                    <li><a href="#">tempor invidunt ut labore</a></li>
                </ul>
            </div>
            <a href="#" class="button-2">Read More</a>
        </div>    
      </div>  
   </section> 
  <!--==============================footer=================================-->
    <footer>
        Website Template designed by <a href="http://www.templatemonster.com/" class="link" rel="nofollow" target="_blank">TemplateMonster.com</a>
    </footer>	
</div> 
</body>
</html>