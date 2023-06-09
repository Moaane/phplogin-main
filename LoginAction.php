<?php 
//  tambah session dan jalankan session
    
    if(isset($_POST['submit'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        $_SESSION['login'] = $username;

        if($username == "admin" && $password == "admin"){

            echo "<script>
                window.location.href='Dashboard.php'
            </script>";
       
        }else{
            echo "<script>
            alert('wrong username & password')
            window.location.href='Login.php'
            </script>";  
        }

    }
?>