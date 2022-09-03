<!-- Untitled-3.php -->
<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['id']))
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('https://images.pexels.com/photos/3182784/pexels-photo-3182784.jpeg?cs=srgb&dl=pexels-fauxels-3182784.jpg&fm=jpg');
  background-repeat: no-repeat;
  background-size: 1500px 1001px;
  
}

</style>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!--<div class="jumbotron  " style="background: url('https://images.pexels.com/photos/84506/pexels-photo-84506.jpeg?cs=srgb&dl=pexels-irene-lasus-84506.jpg&fm=jpg')">
  <div class="container text-white">
    <h2>Hey <?=$_SESSION['name']?>! Welcome to the Admin Page :)</h2>     
    <p>Coffee in a mug, sounds amazing right? Don't hesitate to pick some up - when you're free.</p>
    <div class="container">
        <p style="text-align:right">
            &nbsp
        <a href="Untitled-2.php" class="btn btn-dark">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </p>    
    </div>
  </div>
</div>-->
<!--<div class="container text-white" style="margin-top:20px;">
    <h2>Hey <?=$_SESSION['name']?>! Welcome to the Admin Page :)</h2>     
    <p>Coffee in a mug, sounds amazing right? Don't hesitate to pick some up - when you're free.</p>
    <div class="container">
        <p style="text-align:right">
            &nbsp
        <a href="Untitled-2.php" class="btn btn-dark">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </p>    
    </div>
  </div>-->
<div class="jumbotron jumbotron-fluid " style="background: url('https://images.pexels.com/photos/5863359/pexels-photo-5863359.jpeg?cs=srgb&dl=pexels-nataliya-vaitkevich-5863359.jpg&fm=jpg')">
  <div class="container text-white">
    <h2>Hey <?=$_SESSION['name']?>! Welcome to the Admin Page :)</h2>     
    <p>Coffee in a mug, sounds amazing right? Don't hesitate to pick some up - when you're free.</p>
    <div class="container">
        <p style="text-align:right">
            &nbsp
        <a href="Untitled-2.php" class="btn btn-dark">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </p>    
    </div>
  </div>
</div>
<!-- <div class="container p-3 my-3 bg-dark text-white">
  <h1>Hey <?=$_SESSION['name']?>!<br> Welcome to the Admin Page :)</h1>
  <p>Coffee in a mug, sounds amazing right? Don't hesitate to pick some up - when you're free.</p>
  <div class="container">
        <p style="text-align:right">
            &nbsp
        <a href="Untitled-2.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </p>    
    </div>
</div> -->
<div class="container" style="margin-top:50px;">
  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <img src="https://www.pcma.org/wp-content/uploads/2021/08/Employees-2.png" style="width:300px;height:170px;"><br><br>
        <button type="button" onclick="location.href = 'createemp.php';" class="btn btn-outline-dark">Add/Modify Employee data</button>
      </div>
    </div><br><br>
    <div class="card bg-light">
      <div class="card-body text-center">
        <img src="https://reba.global/files/image/11057/1541970265_HowtoassesstheprosandconsMAIN.jpg" style="width:300px;height:190px;"><br><br>
        <button type="button" onclick="location.href = 'payslip-1.php';" class="btn btn-outline-dark">Generate Pay Slip</button>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <img src="https://www.fas-research.com/fileadmin/_processed_/e/e/csm_FAS514-Top1000Manager-dasRanking-Industriemagazin-112108_cba847c8f7.jpeg" style="width:300px;height:170px;"><br><br>
        <button type="button" onclick="location.href = 'ranking-1.php';" class="btn btn-outline-dark">Ranking</button>
      </div>
    </div><br><br>
    <div class="card bg-light">
      <div class="card-body text-center">
        <img src="https://www.callcentrehelper.com/images/stories/2014/02/chasing-clock-businessperson-760.png" alt="Attendance" style="width:300px;height:190px;"><br><br>
        <button type="button" onclick="location.href = 'attendance-1.php';" class="btn btn-outline-dark">Attendance</button>
      </div>
    </div> 
    <div class="card bg-light">
      <div class="card-body text-center">
        <img src="https://cdn.searchenginejournal.com/wp-content/uploads/2020/03/shutterstock_1688819260-5e83fdb7cfe9a.png" style="width:300px;height:170px;"><br><br>
        <button type="button" onclick="location.href = 'announcement-1.php';" class="btn btn-outline-dark">Announcements</button>
      </div>
    </div><br><br>
    <div class="card bg-light">
      <div class="card-body text-center">
        <img src="https://media.npr.org/assets/img/2021/08/20/gettyimages-1220117316_slide-47b27d38c435b670f4e3389a2b897b8929a396ba-s1100-c50.jpg" style="width:300px;height:190px;"><br><br>
        <button type="button" onclick="location.href = 'feedback-3.php';" class="btn btn-outline-dark">Feedback</button>
      </div>
    </div> 
  </div>
</div>
</body>
</html>
