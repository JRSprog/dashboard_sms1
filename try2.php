
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student/style.css">
    <link rel="shortcut icon" href="blogo.png" type="x-icon">
    <title>profile</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
      <img src="student/blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight: bold;">x</a>
        <br>
        
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">STUDENT DASHBOARD</p>
          <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold; background-color: rgba(0,0,0,0);">SMS Account Fundamentals</p>
          
          <a href="dashboard.php?id=" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Dashboard</a>
          <a href="stprofile.php?id=" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">SMS Profile </a><br><br>
           
          
    </div>
<div id="main">
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1515px; font-size: 35px; padding: 7px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 #0000001a; border: none; font-weight: bold;"><p style="font-size: 13px; color: blue; margin-top: 4px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SMS Profile</p>
    <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">SMS Profile</p>
    </div>

    
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "280px";
  document.getElementById("main").style.marginLeft = "280px";
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>