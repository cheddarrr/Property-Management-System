
<?php
    session_start();
  
    if(isset($_SESSION['username']) && isset($_SESSION['id']))
    
   

    include "Untitled-4.php";
      $a=(int)$_SESSION['id'];
        
        $sql1 = "SELECT * FROM attendance WHERE id=$a";
        $result1 = mysqli_query($conn, $sql1);

    
            $row1 = mysqli_fetch_assoc($result1);

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        /*
        .container{
            background:linear-gradient(#bdc3c7,#2c3e50);
            height:100vh;
            margin-right:300px;
            margin-left:100px;
            width:100%;
        }
        */
        body {
  background-image: url('https://images.pexels.com/photos/1181534/pexels-photo-1181534.jpeg?cs=srgb&dl=pexels-christina-morillo-1181534.jpg&fm=jpg');
  background-repeat: no-repeat;
  background-size: 1800px 1200px;
  
}
    </style>
</head>
<body class="bg-secondary text-white">
  <div class="container">
  <div style="height: 100px"></div>

          <div class="card-header bg-white">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i><p style="color:black">Attendance</p></h3>
          </div>
          <div class="card-body bg-white">
            <table class="table table-bordered">
              <tr>
                <th width="30%">ID</th>
                <td width="2%">:</td>
                <td><?=$row1['id']?></td>
              </tr>
              <tr>
                <th width="30%">Attendance</th>
                <td width="2%">:</td>
                <td><?=$row1['a_date']?></td>
              </tr>

            </table>
          </div>


</div>
</body>
</html>