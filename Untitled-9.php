<!-- Untitled-9.php -->
<?php

session_start();
include "Untitled-4.php";


if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['phone']) && isset($_POST['DOB']) && isset($_POST['DOJ']) && isset($_POST['username']) && isset($_POST['password']))
{
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id=test_input($_POST['id']);
    $name=test_input($_POST['name']);
    $email=test_input($_POST['email']);
    $age=test_input($_POST['age']);
    $phone=test_input($_POST['phone']);
    $DOB=test_input($_POST['DOB']);
    $DOJ=test_input($_POST['DOJ']);
    $username=test_input($_POST['username']);
    $password=test_input($_POST['password']);

    if(empty($id))
    {
        header("Location: Untitled-8.php?error=Invalid ID");
    }
    else if(empty($name))
    {
        header("Location: Untitled-8.php?error=Invalid Username");
    }
    else if(empty($email))
    {
        header("Location: Untitled-8.php?error=Invalid Username");
    }
    else if(empty($age))
    {
        header("Location: Untitled-8.php?error=Invalid Username");
    }    
    else if(empty($phone))
    {
        header("Location: Untitled-8.php?error=Invalid Username");
    }
    else if(empty($DOB))
    {
        header("Location: Untitled-8.php?error=Invalid Username");
    }
    else if(empty($DOJ))
    {
        header("Location: Untitled-8.php?error=Invalid Username");
    }
    else if(empty($password))
    {
        header("Location: Untitled-8.php?error=Invalid Password");
    }
    else
    {
        $sql="INSERT INTO modify (id,name,email,age,phone,DOB,DOJ,username,password) Values($id, '$name', '$email', $age, $phone, '$DOB', '$DOJ', '$username','$password')";
    
        if(mysqli_query($conn,$sql))
        {
            echo 'Successfully saved.';
            header("Location: Index.php");
        }
    
        else
        {
          echo 'There were errors while saving the data.';
          header("Location: Untitled-8.php");
        }

        
        $sql1="INSERT INTO users"." (id,role,username,password,name)". "Values($id,'employee', '$username','$password', '$name')";
        mysqli_query($conn,$sql1);
        /*
        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            if($row['password'] === $password && $row['role'] == $role)
            {
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];

                header("Location: ../Untitled-3.php");
            }
            else
            {
                header("Location: ../Index.php?error=Invalid credentials, try again");
            }
        }
        else
        {
            header("Location: ../Index.php?error=Invalid credentials, try again");
        }
        */
    }
}
else 
{
    echo 'There were errors while saving the data.';
    header("Location: Index.php");
}
?>



