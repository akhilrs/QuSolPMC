<?php
/*********************************************************************************
 * Orangescrum Community Edition is a web based Project Management software developed by
 * Orangescrum. Copyright (C) 2013-2014
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact Orangescrum, 2059 Camden Ave. #118, San Jose, CA - 95124, US. 
   or at email address support@qusol.org.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * Orangescrum" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by Orangescrum".
 ********************************************************************************/
 
include("database.php");
$config= new DATABASE_CONFIG();
$name = 'default';
$settings = $config->{$name};
if(trim($settings['database']) == "") {
    ?>
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
		<title>Orangescrum Setup Wizard</title>
		<style>
		*{
			padding:5;
			margin:5;	
			font-family:Tahoma, Verdana;
		}
		.link:hover {
			text-decoration:underline;
		}
		h4 {
			font-size:14px;
		}
		</style>
	</head>
	<body>
		<div id="container">
			<div id="content">
				<table width="100%" align="center"><tr><td align="center">
				<table cellpadding="8" cellspacing="8" style="border:1px solid #999999;color:#000000" align="center" width="520px">
					<tr>
						<td align="center" style="border-bottom:1px solid #999999">
							<h3 style="color:#245271">4 simple steps to get started with Orangescrum</h3>
						</td>
					</tr>
					<tr>
						<td align="left" style="padding-top:10px">
							<h4>Step1: <span style="font-weight:normal;">Create a new MySQL database (`utf8_unicode_ci` collation)</span></h4>
							<h4>Step2: <span style="font-weight:normal;">Add your database connection details and the database name in `app/Config/database.php` page</span></h4>
							<h4>Step3: <span style="font-weight:normal;">Get the `database.sql` file from the root directory and import that to your database.</span></h4>
							<h4>Step4: <span style="font-weight:normal;">Provide the details of SMTP email sending options in `app/Config/constants.php`</span></h4>
						</td>
					</tr>
                    <tr>
						<td align="center">
							<h4 style="color:#FF0000">Make sure that you have write permission (777) to `app/tmp` and `app/webroot` folders</h4>
						</td>
					</tr>
				</table>
				</td></tr></table>
			</div>
		</div>
	</body>
	</html>
	<?php
	exit;
}
?>