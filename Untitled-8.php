
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
    style="min-height: 150vh ">
        <form class="border shadow p-3 rounded"
        action="Untitled-9.php"
        method="post"
        style="width: 650px;">
        <h2 class="text-center p-3"><p style="color:black ">Add/Modify Employee Data</p></h2>
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
                <label for="name" class="form-label"><h6><p style="color:black ">Name</p></h6></label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"><h6><p style="color:black ">Email -ID</p></h6></label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label"><h6><p style="color:black ">Age</p></h6></label>
                <input type="number" class="form-control" name="age" id="age">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label"><h6><p style="color:black ">Phone number:</p></h6></label>
                <input type="number" class="form-control" name="phone" id="phone">
            </div>
            <div class="mb-3">
                <label for="DOB" class="form-label"><h6><p style="color:black ">DOB</p></h6></label>
                <input type="date" class="form-control" name="DOB" id="DOB">
            </div>
            <div class="mb-3">
                <label for="DOJ" class="form-label"><h6><p style="color:black ">DOJ</p></h6></label>
                <input type="date" class="form-control" name="DOJ" id="DOJ">
            </div>
            
            <div class="mb-3">
                <label for="username" class="form-label"><h6><p style="color:black ">Username</p></h6></label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><h6><p style="color:black ">Password</p></h6></label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-dark">Create New Employee</button><br><br>
        </form>
    </div>
</body>
</html>