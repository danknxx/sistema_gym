<?php
    require_once("c://wamp64/www/sistema_gym/controller/usersController.php");
    $obj = new usersController();
    $obj->update($_POST['id'],$_POST['nombre']);
?>