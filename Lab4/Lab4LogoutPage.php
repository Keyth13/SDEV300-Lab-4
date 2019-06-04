<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Form Login</title>
	</head>
		<?php
			session_start();
			if(!isset($_SESSION['appUsername'])) {
				header("Location: Lab4LoginPage.html");
			}
			unset($_SESSION['appUsername']);
			unset($_SESSION['appEmail']);
			
			echo "<h3> Session Data after Logout  </h3>
				<table = border='1'>
					<tr>";
			        echo "<td>Username </td>";
					echo "<td>Email </td>
					</tr>
					<tr>
						<td>" . $_SESSION['appUsername'] . "</td>" .
						"<td>" .$_SESSION['appEmail'] . "</td>
					</tr>
				</table>";
		?>
	</body>
</html>