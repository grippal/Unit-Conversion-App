<?php
	/**
	 * HTML skeleton for the webpage.
	 *
	 * @package ${NAMESPACE}
	 * @since   1.0.0
	 * @author  Luke Grippa
	 * @link    https://github.com/grippal?tab=repositories
	 * @license GNU General Public License 2.0+
	 */

	?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Unit Conversion Tool</title>
</head>
<body>
<div>
	<h1>Unit Conversion Tool</h1>
</div>
<main>
	<p>Convert units of your choice!</p>
	<form class="uc-form" action="conversion.php" method="post">
		<input type="text" name="name" placeholder="0.00">
		<input type="text" name="name" placeholder="0.00">
		<input type="text" name="name" placeholder="0.00">
		<button type="submit" name="submit">Convert</button>
	</form>
</main>

</body>
</html>