<!-- Index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
  background-image: url('https://images.pexels.com/photos/3184427/pexels-photo-3184427.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
  background-repeat: no-repeat;
  background-size: 1920px 1080px;
  
}

    </style> 
</head>
<body class="bg-secondary text-white">
    <div class = "container d-flex justify-content-center align-items-center"
    style="min-height: 90vh">
        <form class="border shadow p-3 rounded"
        action="php/Untitled-7.php"
        method="post"
        style="width: 450px;">
        <h2 class="text-center p-3"><p style="color:black">Login</p></h2>
        <?php if(isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label for="username" class="form-label"><h6><p style="color:black">Username</p></h6></label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><h6><p style="color:black">Password</p></h6></label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <h6><p style="color:black">User Type</p></h6>
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option selected value="admin">Admin</option>
                <option value="employee">Employee</option>
            </select>
            <button type="submit" class="btn btn-dark">Submit</button><br><br>
            <a href="#" class="link-light"><p style="color:black">Forgot Password?</p></a>
        </form>
    </div>
</body>
</html>