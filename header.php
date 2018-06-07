<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<?php
ob_start();
session_start();
//session_start();
if(isset($_POST['logout']))
{
 unset($_SESSION['user_session']);
} 
?>
	<title>Invoice Manager</title>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/scripts.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/new/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="js/dataTables.tableTools1.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/new/general.js"></script>
<script src="js/new/jquery.validate.js"></script>
	<!-- CSS -->
	
	 <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
	<link href="css/dataTables.tableTools.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link href='css/priventive.css' rel='stylesheet'>
	<link rel="stylesheet" href="css/styles.css">
	
	
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="css/charisma-app.css" rel="stylesheet">

	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
		body, h1, h2, h3, h4, h5, h6{
			font-family: 'Open Sans', sans-serif;
		}
	</style>
	
</head>
<body>
<div class="navbar navbar-default" role="navigation">
  <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span></span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $_SESSION['user_session'] ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="profile.php">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
			</div>
</div>




