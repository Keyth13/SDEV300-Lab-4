<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Purr-Fection Research Project's Page </title>
	</head>
	<body>
		<?php 
			// Retrieve Post Data
			$username = $_POST["username"];
			$email = $_POST["emailaddr"];
			$password = $_POST["passwd"];
			
				// Set the session information
				session_start();  
				$_SESSION['appUsername'] = $username; 
				$_SESSION['appEmail'] = $email;
				$_SESSION['appPassword'] = $password;
				if(!isset($_SESSION['appUsername'])) {
					header("Location: Lab4LoginPage.html");
				}
				setcookie('appUsername', $_POST['username'], time() + (60), "/");
				
				echo "<h3> Session Data </h3>";
				echo "<table border='1'>";
				echo "<tr>";
				echo "<td>Username </td>";
				echo "<td>Email</td>
				   </tr>";
				echo "<tr>
						<td>" . $_SESSION['appUsername'] . "</td>";
				echo "<td>" . $_SESSION['appEmail']. "</td>";
				echo "</tr>";
				echo "</table>";
				echo "<form name='login' method='post' action='Lab4LoginPage.html'>
					<input name='btnsubmit' type='submit' value='Login'>";
				echo "<form name='logout' method='post' action='Lab4LogoutPage.php'>
					<input name='btnsubmit' type='submit' value='Logout'>
				</form>";
			?>
			<br>
			<br>
			<h3> Welcome <?php echo $username ?>.  Please add any comments you my have for any of the research project below, in the last column.  Press the "Submit" button when done. </h3>
			<?php echo "<form name='commit' method='post' action='Lab4SummaryPage.php'>
				<input name='btnsubmit' type='submit' value='Commit'>"; ?>
			<?php echo "<form name='reset' method='post' action='Lab4CommentsPage.php'>
				<input name='btnsubmit' type='reset' value='Reset'>";	?>
			<table border='1'>
				<form action="summaryPage.php" method="post">
					<tr>
						<td> Project </td>
						<td> Completion </td>
						<td> Comments </td>
					</tr>
					<tr>
						<td> Feline coronavirus as a cause of upper <br> respiratory infection in shelter cats </td>
						<td> 55% </td>
						<td> 
							<textarea name="project_1_comments" class="form-control w-100" id="project_1_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Canine distemper virus as a threat to <br> tiger conservation in tropical range states </td>
						<td> 12% </td>
						<td>
							<textarea name="project_2_comments" class="form-control w-100" id="project_2_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Applying novel pathogen discovery to <br> the investigation of infectious causes of heart disease in cats </td>
						<td> 37% </td>
						<td>
							<textarea name="project_3_comments" class="form-control w-100" id="project_3_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Entry and Egress of the novel feline <br> morbillivirus (FeMV) </td>
						<td> 78% </td>
						<td>
							<textarea name="project_4_comments" class="form-control w-100" id="project_4_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Cat and Human Personality Interaction <br> Project </td>
						<td> 23% </td>
						<td>
							<textarea name="project_5_comments" class="form-control w-100" id="project_5_comments" placeholder="Leave a comment about this project"></textarea>
						</td>	
					</tr>
					<tr>
						<td> Feline Genetics and Comparative Medicine <br> Research Project </td>
						<td> 94% </td>
						<td>
							<textarea name="project_6_comments" class="form-control w-100" id="project_6_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Feline sensitivity to human body language <br> cues </td>
						<td> 08% </td>
						<td>
							<textarea name="project_7_comments" class="form-control w-100" id="project_7_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Feline human voice recognition </td>
						<td> 82% </td>
						<td>
							<textarea name="project_8_comments" class="form-control w-100" id="project_8_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Feline vocal communication </td>
						<td> 69% </td>
						<td>
							<textarea name="project_9_comments" class="form-control w-100" id="project_9_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
					<tr>
						<td> Feline attachment to owner </td>
						<td> 41% </td>
						<td>
							<textarea name="project_0_comments" class="form-control w-100" id="project_0_comments" placeholder="Leave a comment about this project"></textarea>
						</td>
					</tr>
				</form>
			</table>
			<?php echo "<form name='commit' method='post' action='Lab4SummaryPage.php'>
					<input name='btnsubmit' type='submit' value='Commit'>"; ?>
			<?php echo "<form name='reset' method='post' action='Lab4CommentsPage.php'>
					<input name='btnsubmit' type='reset' value='Reset'>";	?>	
	</body>
</html>