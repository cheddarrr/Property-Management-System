
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add/Modify Employee Data</title>
    
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
    <div class = "container d-flex justify-content-center align-items-center"
    style="min-height: 80vh ">
        <form class="border shadow p-3 rounded"
        action="ranking-2.php"
        method="post"
        style="width: 650px;">
        <h2 class="text-center p-3"><p style="color:black ">Ranking</p></h2>
        <?php if(isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label for="id" class="form-label"><h6><p style="color:black ">ID</p></h6></label>
                <input type="number" class="form-control" name="id" id="id">
            </div>
            <div class="mb-3">
                <label for="rank" class="form-label"><h6><p style="color:black ">Rank the employee from 1 to 10 (1 for very bad and 10 for very good)</p></h6></label>
                <input type="number" class="form-control" name="rank" id="rank">
            </div>             
            <button type="submit" class="btn btn-dark">Submit Rank</button><br><br>
        </form>
    </div>
</body>
</html>
