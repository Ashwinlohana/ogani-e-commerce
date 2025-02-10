<?php
session_start();
$msg="";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'ashii' && $password == 'admin1122'){
        $_SESSION['loggedin'] = true;
        header("Location: admin_front.php");
        exit;
    } else {    
        $_SESSION['msg'] ="Invalid Username or password";
        ?>
        <script>
            alert('invalid username & password');
        </script>
        
        <?php
        header("Location: admin_home.php");
        
        exit;
    }
}
?>
