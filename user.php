<?php
session_start();
if(!isset($_SESSION['vid'])) 
{ 
   header("location: login.php"); 

} 
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to User</title>
    <link rel="icon" href="image/logo.ico">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

  </head>
  <body>

    <?php 
//$id=$_GET['a'];
$id = $_SESSION['vid'];
$db = mysqli_connect("localhost","jc","1549100","StudentVote");
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$amt = $row['amt'];

?>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Poll <span>System</span></h3>
      </div>
      <div class="right_area">
        <a href="index.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="image/user.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a onclick="pro1();" href="javascript:void(0);"></i><span>Dashboard</span></a>
        
        <a onclick="pro2();" href="javascript:void(0);"><i class="fas fa-table"></i><span>Tables</span></a>
        <a href="contact.php"><i class="fas fa-th"></i><span>Mail</span></a>
        <a onclick="pro4();" href="javascript:void(0);"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a onclick="pro5();" href="javascript:void(0);"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="image/user.jpg" class="profile_image" alt="">
        <h4><span style="text-transform: uppercase;"><?php echo $row['name']; ?></span></h4>
      </div>
      <a onclick="pro1();" href="javascript:void(0);"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      
      <a onclick="pro2();" href="javascript:void(0);"><i class="fas fa-vote-yea"></i><span>Vote</span></a>
      <a href="contact.php"><i class="fas fa-mail-bulk"></i><span>Mail</span></a>
      <a onclick="pro4();" href="javascript:void(0);"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a onclick="pro5();" href="javascript:void(0);"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->














    <div class="content">
      <div class="card">
        <div class="but1" id="profile1">


        <h1 style='text-align:center;'>Online Polling System </h1>
<?php 


$conn = mysqli_connect("localhost", "jc", "1549100", "studentVote") or die(mysqli_error($conn));
$query = "Select id, name, email, voteCount FROM candidate";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$totalRows = mysqli_num_rows($result);
echo "<h2 style='text-align:center;'>Voting Result</h2>";
echo "<h2 style='text-align:center;'>Total Number of candidates: ".$totalRows."</h5>";

//finding total casted vote
$sum2=0;
while ($row2 = mysqli_fetch_assoc($result)){
    $sum2 += $row2['voteCount'];
}

echo "<h2 style='text-align:center;'>Total Number of casted vote till Now: <b>$sum2</b></h5> <br><br>";

// set the pointer back to the beginning
mysqli_data_seek($result, 0);
?>

<table class="table table-striped table-bordered table-hover">
    <tr> <th>ID</th> <th>Name</th> <th>Email</th> <th>Total Votes (casted)</th> <th>Vote Percentage</th></tr>

<?php
  if($totalRows>0){
    while($row = mysqli_fetch_array($result)){
?>
    <tr>
      <td><?php echo $row['id'];?> </td>
      <td><?php echo $row['name'];?> </td>
      <td><?php echo $row['email'];?> </td>
      <td><b><?php echo $row['voteCount'];?></b> </td>
      <td><?php echo round(votePercent($row['voteCount']),2)." %"; ?></td>
    </tr>

<?php
    }
  }
  else{
    echo "No results. No registered candidate.";
  }
  //echo "sum2 = $sum2";
  function votePercent($castedVote){
    global $sum2;
    $percent = $castedVote * 100 /$sum2; // sum2 is total casted vote
    return $percent;
  }
 ?>
    
</table> 
      </div>









<div class="but2" id="profile2">
<?php 
//$id=$_GET['a'];
$id = $_SESSION['vid'];
$db = mysqli_connect("localhost","jc","1549100","StudentVote");
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$amt = $row['amt'];

?>


<center>
        <h1>Online Polling System </h1>
    <h3>  Voter's Dashboard </h3>
    
        <hr>
         <p ><b> Hello, <span style="text-transform: uppercase;"><?php echo $row['name']; ?></span></b></p>
     
    
    <p>Voter ID: <?php echo $row['studentId']; ?> </p>
    <hr>
    <?php 
      $voted = $row['voted'];
      if($voted==1){
        echo "<b>You have already voted.</b>";
      }else{
        echo "You have not voted. Please Vote";
        echo "<h2><a href='javascript:pro3();'>VOTE HERE</a></h2>";
      }
    ?>
      
        <div class="jumbotron">
    
    
    <p>   
    
    
    </p>
    </div>
    <hr>

</div>





<div class="but3" id="profile3">
  

<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentVote";

echo "<h1>Student Election System </h1>";
echo"<h2>Please vote your candidate.</h2>";
echo "<h2>Registed Candidates are:<br></h2>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, email FROM candidate";
$result = $conn->query($sql);

?>
 <form action='voteCaste.php' method='POST'>
    <table class="table">
<?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><label>";
      echo "<input type=\"radio\" name=\"chosen_candidate\" value=\"".$row['id']."\">";
        echo " ID: ". $row["id"]. " ,  Name: ". $row["name"]. " , Email: " . $row["email"] . "<br><hr>";
        echo "</label></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
<p><input type="submit" value="Vote Now" class="btn"></p>
</form>
</div>




<div class="but4" id="profile4">


<h1>What is an online voting system?</h1>
<p><u>A simple definition: </u><br> <br>
 
Online voting systems are software platforms used to securely conduct votes and elections. As a digital platform, they eliminate the need to cast your votes using paper or having to gather in person.
 
They also protect the integrity of your vote by preventing voters from being able to vote multiple times.
 
Many secure voting platform vendors provide supportive vote management consulting services that help organizations design and implement their voting procedures.
 
These services help organizations save time, stick to best practices, and meet internal requirements and/or external regulations, such as third-party vote administration needs.
</p>





</div>


<div class="but5" id="profile5">
  <?php 
//$id=$_GET['a'];
$id = $_SESSION['vid'];
$db = mysqli_connect("localhost","root","","StudentVote");
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$amt = $row['amt'];

?>
  <h3>Update Your Details</h3>
        <form action="update.php" method="post">    
        <input type="text" placeholder="Enter your Registered Email:" name="email3" value="<?php echo $row['studentId']; ?>" readonly >
            <br>
            <input type="text" placeholder=" NEW Name" name="name2" >
           
            <br>
            <input type="password" placeholder=" NEW Password" name="pass2" value="">
            <br><br>
            <input type="submit" name="submitUpd" value="Update">
        </form>
    
</div>






      </div>
     
    </div>



<!-- profile1 script -->

<script type="text/javascript">
  
  function pro1(){
    document.getElementById("profile1").style.display = "block";
    document.getElementById("profile2").style.display = "none";
     document.getElementById("profile3").style.display = "none";
     document.getElementById("profile4").style.display = "none";
     document.getElementById("profile5").style.display = "none";
  }
function pro2(){
    document.getElementById("profile2").style.display = "block";
    document.getElementById("profile1").style.display = "none";
     document.getElementById("profile3").style.display = "none";
     document.getElementById("profile4").style.display = "none";
     document.getElementById("profile5").style.display = "none";
  }
  function pro3(){
    document.getElementById("profile3").style.display = "block";
    document.getElementById("profile2").style.display = "none";
    document.getElementById("profile1").style.display = "none";
    document.getElementById("profile4").style.display = "none";
    document.getElementById("profile5").style.display = "none";
  }
  function pro4(){
    document.getElementById("profile4").style.display = "block";
    document.getElementById("profile3").style.display = "none";
    document.getElementById("profile2").style.display = "none";
    document.getElementById("profile1").style.display = "none";
    document.getElementById("profile5").style.display = "none";
  }
  function pro5(){
    document.getElementById("profile5").style.display = "block";
    document.getElementById("profile4").style.display = "none";
    document.getElementById("profile3").style.display = "none";
    document.getElementById("profile2").style.display = "none";
    document.getElementById("profile1").style.display = "none";
  }

</script>






    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
                           











    
    
 