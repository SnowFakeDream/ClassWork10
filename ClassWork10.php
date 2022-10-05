<?php 
function dateForF(){
   return date('l jS \of F Y h:i:s A');
}
?>
<head>Time</head>
<form method="get">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="dateOfBirth">Date of birth:</label><br>
  <input type="text" id="dateOfBirth" name="dateOfBirth" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
<ul>
    <li>
        <p><?php echo $_GET['fname']; ?></p>
        <p><?php echo $_GET['lname']; ?></p>
        <p><?php echo $_GET['dateOfBirth']; ?></p>
    </li>
</ul>
<footer><?php echo "Copyright " , dateForF() ?><footer>