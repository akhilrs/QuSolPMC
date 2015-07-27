<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-Frame-Options" content="deny">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo HTTP_ROOT;?>img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo HTTP_ROOT;?>img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo HTTP_ROOT;?>img/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo HTTP_ROOT;?>img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo HTTP_ROOT;?>img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo HTTP_ROOT;?>img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?php echo HTTP_ROOT;?>img/favicon/mstile-144x144.png">
<meta name="robots" content="noindex,nofollow" />
<title>QuSol PMC</title>
<?php 
echo $this->Html->meta('icon'); 
echo $this->Html->css('style_outer.css?v='.RELEASE);
?>
<script type="text/javascript">
    var PROTOCOL = '<?php echo PROTOCOL;?>';
    var DOMAIN = '<?php echo DOMAIN;?>';
    var HTTP_APP = "<?php echo HTTP_APP; ?>";
    var DOMAIN_COOKIE = "<?php echo DOMAIN_COOKIE; ?>";
    
    //For google login and signup start
    var CLIENT_ID = "<?php echo CLIENT_ID; ?>";
    var CLIENT_ID_SIGNUP = "<?php echo CLIENT_ID_SIGNUP; ?>";
    var REDIRECT = "<?php echo REDIRECT_URI; ?>";
    var REDIRECT_SIGNUP = "<?php echo REDIRECT_URI_SIGNUP; ?>";
    //For google login and signup end
</script>  
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH; ?>index/common_outer.js"></script>

</head>
<?php flush(); ?>
<body class="head_back" id="headbody">
	<div id="cover" class="outer" style="filter:alpha(opacity=50);"></div>
	<?php echo $content_for_layout; ?>
</body>
</html>
