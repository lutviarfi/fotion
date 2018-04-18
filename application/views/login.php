<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<form id="parsingvariable" action="<?php echo blink('Login/auth');?>" method="post">
<div id="container">
	<h1>Parsing Variable CodeIgniter!</h1>

	<div id="body">
		Username <input type="text" name="username" id="username" /> <br>
        passowrd <input type="password" name="password" id="password" />
        <button type="submit" name="submit">Submit</button>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
</form>

</body>
</html>