<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Foundation</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../styles/programs.css"  type="text/css">
	<link rel="stylesheet" href="../styles/menu.css" type="text/css"> 
	<link rel="stylesheet" href="../styles/rss.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../menu/dropdown.js"></script> 

	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:600px;">
	
		<div id="SideMenu">
		<?php include 'menu/communitymenu.php' ?>
		</div>
		
		<div id="TextArea">
		<h1>openEHR RSS</h1>
		<br/>
		
				<!-- start sw-rss-feed code --> 
			<script type="text/javascript"> 
			<!-- 
			rssfeed_url = new Array(); 
			rssfeed_url[0]="http://www.openehr.org/new-ws/site/files/openehrorg.rss";  
			rssfeed_frame_width="800"; 
			rssfeed_frame_height="500"; 
			rssfeed_scroll="on"; 
			rssfeed_scroll_step="6"; 
			rssfeed_scroll_bar="off"; 
			rssfeed_target="_blank"; 
			rssfeed_font_size="14"; 
			rssfeed_font_face=""; 
			rssfeed_border="off"; 
			rssfeed_css_url=""; 
			rssfeed_title="off"; 
			rssfeed_title_name=""; 
			rssfeed_title_bgcolor="#3366ff"; 
			rssfeed_title_color="#fff"; 
			rssfeed_title_bgimage="http://"; 
			rssfeed_footer="off"; 
			rssfeed_footer_name="rss feed"; 
			rssfeed_footer_bgcolor="#fff"; 
			rssfeed_footer_color="#3386AE"; 
			rssfeed_footer_bgimage="http://"; 
			rssfeed_item_title_length="60"; 
			rssfeed_item_title_color="#3386AE"; 
			rssfeed_item_bgcolor="#fff"; 
			rssfeed_item_bgimage="http://"; 
			rssfeed_item_border_bottom="on"; 
			rssfeed_item_source_icon="off"; 
			rssfeed_item_date="off"; 
			rssfeed_item_description="on"; 
			rssfeed_item_description_length="300"; 
			rssfeed_item_description_color="#666"; 
			rssfeed_item_description_link_color="#333"; 
			rssfeed_item_description_tag="off"; 
			rssfeed_no_items="0"; 
			rssfeed_cache = "b519d119bb20642951293db429cda439"; 
			//--> 
			</script> 

			<script type="text/javascript" src="http://feed.surfing-waves.com/js/rss-feed.js"></script> 
			<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
			<div style="text-align:right; width:800px;"><a href="http://www.surfing-waves.com" target="_blank" alt="surfing waves"><img src="http://img.surfing-waves.com/images/swlogo.png" border="0" alt="surfing"></a><a href="http://www.surfing-waves.com/feed.htm" target="_blank" style="color:#ccc;font-size:10px">feed widget</a></div> 
			<!-- end sw-rss-feed code --> 
			</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>

