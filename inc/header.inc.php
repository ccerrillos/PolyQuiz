<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PolyQuiz</title>
<script src="bower_components/skel/dist/skel.min.js"></script>
<script src="bower_components/skel/dist/skel-layout.min.js"></script>
<script src="bower_components/skel/dist/skel-panels.min.js"></script>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic">
<script>
skel.breakpoints({
	xlarge: "(max-width: 1680px)",
	large:  "(max-width: 1280px)",
	medium: "(max-width: 980px)",
	small:  "(max-width: 736px)",
	xsmall: "(max-width: 480px)"
});
skel.layout({
	reset: "normalize",
	grid: true,
	containers: true
});
</script>
<script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="import" href="elements/polyquiz-page.html">
<link rel="import" href="bower_components/paper-material/paper-material.html">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.min.js"></script>
<script src="js/config.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/sketch.js"></script>
<script src="js/overlay.js"></script>
<link rel="stylesheet" type="text/css" href="js/mathquill.css">
<script src="js/mathquill.min.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.PluginManager.load('equationeditor', '/build/js/plugin.min.js');
tinymce.init({
	selector: "textarea",
	plugins: [
	<?
	if($page=="takequiz" || $page=="home"){
		?>
		 "autolink link lists charmap spellchecker",
		 "searchreplace wordcount fullscreen",
		 "table contextmenu paste textcolor equationeditor"
		 <?
	} else {
		?>
		 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
		 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		 "save table contextmenu directionality emoticons template paste textcolor equationeditor"
		<?
	}
	?>
   ],
   toolbar: ['undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | equationeditor'],
   content_css: 'build/mathquill.css'
 });
</script>
<script>
	function addCanvas(){
		var canvas = document.getElementById('myCanvas');
		var context = canvas.getContext('2d');
		var dataURL = canvas.toDataURL();
		document.getElementById("canvasValue").value = dataURL;
	}
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("a[rel]").overlay({
		left: 'center',
		top: 50,
		fixed: false});
});
</script>
<style type="text/css">
.simple_overlay {
 
	/* must be initially hidden */
	display:none;
	/*position:absolute;
	/* place overlay on top of other elements */
	/*top:50%;
	left: 50%;*/
	z-index:10000;
	/* styling */
	background-color:#333;
	width:675px;
	min-height:200px;
	border:1px solid #666;
	color:#FFF;
	/* CSS3 styling for latest browsers */
	-moz-box-shadow:0 0 90px 5px #000;
	-webkit-box-shadow: 0 0 90px #000;
}
 
/* close button positioned on upper right corner */
.simple_overlay .close {
	background-image:url(images/close_popup.png);
	position:absolute;
	right:-15px;
	top:-15px;
	cursor:pointer;
	height:35px;
	width:35px;
}
.row {
	margin-top: 20px;
	margin-bottom: 20px;
}
paper-material {
	padding: 10px;
}
</style>
<link href="css/lightbox.css" rel="stylesheet" />
<noscript>
	<link rel="stylesheet" href="css/skel-noscript.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-desktop.css" />
</noscript>
<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
<style is="custom-style">
	body{
		font-family: Roboto;
	}
	@import "skel";
	@include skel-layout((
		reset: "normalize",
		containers: true,
		grid: true,
		breakpoints: (
			medium: (
				/*containers: 90%*/
			),
			small: (
				/*containers: 95%,*/
				grid: ( gutters: 20px )
			),
			xsmall: (
				grid: ( gutters: 10px )
			)
		)
	));
	:root {
		--dark-primary-color:       #1976D2;
		--default-primary-color:    #2196F3;
		--light-primary-color:      #BBDEFB;
		--text-primary-color:       #FFFFFF;
		--accent-color:             #8BC34A;
		--primary-background-color: #BBDEFB;
		--primary-text-color:       #212121;
		--secondary-text-color:     #727272;
		--disabled-text-color:      #BDBDBD;
		--divider-color:            #B6B6B6;
		
		
		/* Components */
		
		/* paper-drawer-panel */
		--drawer-menu-color:           #ffffff;
		--drawer-border-color:         1px solid #ccc;
		--drawer-toolbar-border-color: 1px solid rgba(0, 0, 0, 0.22);
		
		/* paper-menu */
		--paper-menu-background-color: #fff;
		--menu-link-color:             #111111;
		
		/* paper-input */
		--paper-input-container-color:       rgba(255, 255, 255, 0.64);
		--paper-input-container-focus-color: rgba(255, 255, 255, 1);
		--paper-input-container-input-color: #fff;
	}
	.list {
		padding-top: 12px;
		background-color: white;
		display: inline-block;
		width: 240px;
		height: 228px;
		margin: 12px;
		@apply(--shadow-elevation-2dp);
	}
	.sidebarlist {
		/* @apply(--shadow-elevation-2dp); */
	}
	.homepagecontent {
		padding: 10px;
		margin: 10px;
	}
	paper-material {
		background-color: white;
	}
		
</style>
</head>
<body>
<polyquiz-page sidebarpage="0">