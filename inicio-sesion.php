<?php  
    $error;
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        # code...
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == "admin@admin.com" && $password == "1234") {
            # code...
            header("Location: /laboratorio_1/views/index.php");
        }
        else{
            $error = "Incorrecto";
            header("Location: /index.php");
        }
    }else{
        header("Location: /index.php");
    }
?>