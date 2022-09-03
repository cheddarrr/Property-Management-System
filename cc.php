<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add/Modify Employee Data</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- <style>
        .container{
            background:linear-gradient(#bdc3c7,#2c3e50);
            height:100vh;
            margin-right:300px;
            margin-left:100px;
            width:100%;
        }
    </style> -->
</head>
<body class="bg-secondary text-white">
    <div class = "container d-flex justify-content-center align-items-center"
    style="min-height: 150vh">
        <form class="border shadow p-3 rounded"
        action="Untitled-9.php"
        method="post"
        style="width: 650px;">
        <h2 class="text-center p-3">Add/Modify Employee Data</h2>
        <?php if(isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-dark">Create New Employee</button><br><br>
        </form>
    </div>
</body>
</html>