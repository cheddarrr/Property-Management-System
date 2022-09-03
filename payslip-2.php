<!-- Untitled-9.php -->
<?php

session_start();
include "Untitled-4.php";


if(isset($_POST['id']) && isset($_POST['DA']) && isset($_POST['HRA']) && isset($_POST['basic']) )
{
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id=test_input($_POST['id']);
    $DA=test_input($_POST['DA']);
    $HRA=test_input($_POST['HRA']);
    $basic=test_input($_POST['basic']);
    $gross=$DA+$HRA+$basic;

    if(empty($id))
    {
        header("Location: Untitled-8.php?error=ID is Required");
    }
    else if(empty($DA))
    {
        header("Location: Untitled-8.php?error=DA is Required");
    }
    else
    {
        $sql="INSERT INTO payslip (id,DA,HRA,basic,gross) Values($id, $DA,$HRA,$basic,$gross)";
    
        if(mysqli_query($conn,$sql))
        {
            echo 'Successfully saved.';
            header("Location: payslip-1.php?error=Successfully updated");
        }
    
        else
        {
          echo 'There were errors while saving the data.';
          header("Location: payslip-1.php?error=Updation unsuccessful");
        }

        /*
        $sql1="INSERT INTO users"." (id,role,username,password,name)". "Values($id,'employee', '$username','$password', '$name')";
        mysqli_query($conn,$sql1);
        
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
    header("Location: Index.php?error=Invalid details");
    /*
    echo 'There were errors while saving the data.';
    header("Location: Index.php");
    */
}




