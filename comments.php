<!-- Tyler Padrao -->
<!-- 05/09/2021 -->
<!-- Individual Project Final - HTML Structure -->
<!-- A website that displays our country's capitiol, Washington D.C., and -->
<!-- many historical places to visit in D.C. -->
<!-- Include PHP Header and Nav -->
<?php
    $page = "Tell us about your visit";
    include('assets/inc/headercomments.php');
    include('assets/inc/nav.php');
?>
<?php
 /**
 * Connect to the database.
 */
 include "../../../dbCon.php";
    // Funtion for sanatizing HTML
 	function sanitize($str,$length=50) {
		$str = trim($str);
		$str = htmlentities($str, ENT_QUOTES);
		return substr($str,0,$length);
 	}

	if ($mysqli) {
		// If we are adding a new comment
		if ( !empty($_GET['name']) && !empty($_GET['comment']) ) {
			// Sanitize data!
			$name=sanitize($_GET['name']);
			$comment=sanitize($_GET['comment']);
			// Insert name and message into the database (Adding name and comment to "user" and "message" columns in "finalProject" database).
			$stmt=$mysqli->prepare("insert into project (user, message) values (?, ?)");
			// Bind the insert statement
			$stmt->bind_param("ss",$name,$comment);
			// Execute
			$stmt->execute();
			// Close
			$stmt->close();
		}
		// Get contents of database table and send back... using select statement
		$res=$mysqli->query('select id, user, message, date from project');
		if($res) {
			// Put the results in an array
			while($rowHolder=$res->fetch_assoc()) {
				$records[] = $rowHolder;
			}
		}
	}
?>
		<h1>We would love to hear about your visit!</h1>
		<!-- Form for user to input name and comment -->
		<form name="userForm" id="comment_section" action="comments.php" onsubmit="return validate()" method="get">	
			<h2>Name:</h2>	
			<input type="text" id="user" name="name" placeholder="Name"/>
			<h2>Tell us about your trip:</h2>
			<textarea name="comment" id="message" placeholder="Tell us about your trip!"></textarea>
			<input type="submit" id="submit" value="Submit"/>
		</form>
		<!-- List to display user's names and comments - gets them from the database -->
    	<div id="list">
			<h2>Comments</h2>
			<ul>
			<?php
				// Will use for outputting names and messages up top
				foreach($records as $this_row) {
					echo '<li style="color:#e63946;">'. $this_row['user'] . ": " . '<span style="color:#1d3557;">' . $this_row['message'] . " @ " . $this_row['date'].'</span></li>';
				}
			?>
			</ul>
		</div>
<!-- Include PHP footer -->
<?php
    include('assets/inc/footer.php');
?>