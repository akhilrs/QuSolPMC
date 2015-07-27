<!DOCTYPE html>
<html>
<head>
	<meta name="robots" content="noindex,nofollow" />
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
	<title>An error occurred</title>
	<?php 
	echo $this->Html->meta('icon');
	?>
	<style>
	*{
	padding:5;
	margin:5;	
	font-family:Tahoma, Verdana;
	}
	body{
	padding:5;
	margin:5;	
	}
	h2 {
		padding:2px;
		margin:2px;
	}
	h3 {
		font-weight:normal;
		padding:2px;
		margin:2px;
	}
	.link:hover {
		text-decoration:underline;
	}
	</style>
</head>
<body>
	<div id="container">
		<div id="content">
			<?php //echo $this->fetch('content'); ?>
			<table width="100%" align="center"><tr><td align="center">
			<table cellpadding="8" cellspacing="8" style="border:1px solid #999999;color:#000000" align="center" width="520px">
				<tr>
					<td align="center" style="border-bottom:1px solid #999999">
						<h2 style="color:#245271">There is some Problem</h2>
					</td>
				</tr>
				<tr>
					<td align="center" style="padding-top:10px">
						<h3>Please check you database connection in `app/Config/database.php` or may be some syntax error</h3>
					</td>
				</tr>
			</table>
			</td></tr></table>
		</div>
	</div>
</body>
</html>
