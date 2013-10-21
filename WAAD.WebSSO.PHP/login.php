<?php
// uncomment this to display internal server errors.
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
ini_set('include_path', ini_get('include_path').';../../libraries/;');
require_once ('waad-federation/TrustedIssuersRepository.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Login Page</title>
</head>
<body>
	<h2>Login Page</h2>	
	<ul>
<?php 
	$repository = new TrustedIssuersRepository();
	$trustedIssuers = $repository->getTrustedIdentityProviderUrls();

	foreach ($trustedIssuers as $trustedIssuer) {
		$returnUrl = $_GET['returnUrl'];
		print_r('<li><a href="' . $trustedIssuer->getLoginUrl($returnUrl) . '">' . $trustedIssuer->displayName . '</a></li>');
	}
?>
	</ul>
</body>
</html>