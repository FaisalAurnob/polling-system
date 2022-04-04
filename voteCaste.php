<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "","studentVote") or die(mysqli_error($conn));
$vid = $_SESSION['vid'];
echo '<br><h1><center>Online Polling System</center></h1>';
echo "<div class='c1'>";
ECHO "Your vote was successfully recorded.<br>";
$cand_id=$_POST['chosen_candidate'];
echo "voted to candidate with id= ".$cand_id;

echo "</div>";
$sql1 = "update users set voted='1' where id='$vid'";
$query1_result = mysqli_query( $conn, $sql1) or die(mysqli_error($conn));
//echo "Done.<br>";

$sql2 = "update candidate set voteCount = voteCount+1 where id='$cand_id' ";
$query2_result = mysqli_query( $conn, $sql2) or die(mysqli_error($conn));
//echo "<br>All Set.<br>";
 ?>
 <h2><a href="user.php">Goto Dashboard</a></h2>
 <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<style type="text/css">
	*{
		text-align: center;
	}
	body{
		background-image: url("image/votecast.jpg");
		font-size: 30px;
		color: white;
	}
	.c1{
		border: 2px solid yellow;
		display: inline-block;
		padding: 10px 20px;
	}
	a{
		background-color: yellow;
border: 5px double #FF672A;

	}
	h1{
		color: yellow;
	}
</style>