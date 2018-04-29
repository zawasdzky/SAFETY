<!doctype html>
<html>

<style type="text/css">
.wrapper{display:none;}
.loader {
  width: 40px;
  height: 40px;
  position: relative;
  margin: 200px auto;
}
.double-bounce1, .double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #C40001;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
    -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
  animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

@-webkit-keyframes sk-bounce {
  0%, 100% { -webkit-transform: scale(0.0) }
  50% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bounce {
  0%, 100% { 
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 50% { 
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}

</style>
<div class="loader">
  <div class="double-bounce1"></div>
  <div class="double-bounce2"></div>
</div>

<head>
<meta charset="utf-8">
<title>Safetywork</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>assets/css/color-<?php echo $color; ?>.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<link href='<?php echo base_url();?>assets/css/chart.css' rel='stylesheet'/>
<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/flexslider.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/jquery.bxslider.css" rel="stylesheet">
<link href='<?php echo base_url();?>assets/css/fullcalendar.css' rel='stylesheet'/>
<link href="<?php echo base_url();?>assets/css/skin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/weather.css" rel="stylesheet" type="text/css"  />
<link href="<?php echo base_url();?>assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet"  type="text/css" media="screen">
<link href="<?php echo base_url();?>assets/css/jquery.paginate.css" rel="stylesheet"  type="text/css" media="screen">
<!-- Pulled from http://code.google.com/p/html5shiv/ -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>