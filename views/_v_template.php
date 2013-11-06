<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

   <link href="/css/index.css" rel="stylesheet" type="text/css">

					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
	<a href="/users/signup">Sign Up</a>
    <a href="/users/profile">Profile</a>
    <a href="/users/login">Log In</a>
    <a href="/users/logout">Log Out</a>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>