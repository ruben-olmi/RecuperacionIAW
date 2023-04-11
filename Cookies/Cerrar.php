<?php
        setcookie("nombre",false,time()-1);
        setcookie("password",false,time()-1);
        header("location:formulario.php");
?>