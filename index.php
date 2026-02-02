
<!-- 
<?php
session_start();
include 'connect.php';

if (isset($_POST['register']))
 {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO project (Username, Email, Password)
               VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $insert))
     {
        echo "<script> alert('Data inserted successfully')</script>";
    } 
    else
     {
       echo"error:".mysqli_error($conn);
     }
       //mysqli_close($conn);    
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = "SELECT * FROM project 
              WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($conn, $insert);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: index1.php");
        exit();
    } else {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?> -->



<?php
session_start();
include 'connect.php';


if (isset($_POST['register'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $insert = "INSERT INTO project (Username, Email, Password)
               VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $insert)) {
        echo "<script>
                alert('Registration successful! Please login');
                window.location.href='index.html';
              </script>";
        exit();
    } else {
        echo "<script>alert('Registration failed');</script>";
    }
}


elseif (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM project WHERE Username='$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['Password'])) {

            $_SESSION['username'] = $row['Username'];
            header("Location: index1.php");
            exit();

        } else {
            echo "<script>alert('Wrong password');</script>";
        }

    } else {
        echo "<script>alert('Invalid login details');</script>";
    }
}
?>
