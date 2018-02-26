<?php
  $user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "MSIE") !== false){
  	$browser = "В этом браузере сайт может отображаться не корректно!";
    echo "<script> alert(\"$browser\"); </script>";
  }
 ?>  
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    
    <title>Заметки веб-разработчи</title>

   
 
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

  
    <link rel="stylesheet" href="style/style.css" media="screen">
    <!--[if lt IE 12]><link rel="stylesheet" href="style/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style/style.responsive.css" media="all">

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>
    
<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }.art-content .art-postcontent-1 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }.art-content .art-postcontent-2 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }.art-content .post-layout-item-0 { margin-top: 5px;margin-right: 5px;margin-left: 5px;  }
.art-content .post-layout-item-1 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style>

<style type="text/css">
	.foc {
	width: 150px; 
	cursor:pointer; 
	display:inline;
	}
	.foc:focus {
	width: auto; 
	z-index: 100;
	}
</style>


</head>

<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header clearfix">


 <div class="art-shapes">
<h1 class="art-headline sba-head" data-left="49.12%">
    Заметки веб-разработчика
</h1>
<h2 class="art-slogan sba-slog" data-left="46.75%">Рабочая тетрадь</h2>
</div>


