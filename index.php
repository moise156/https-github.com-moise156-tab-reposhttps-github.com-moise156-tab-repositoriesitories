<?php
require_once 'modeles/modeles.classe.php';
$request=new Modeles($_GET['url']);
require_once("views/asset/partis/header.php");
require_once 'controleurs/controleur.classe.php';
if(isset($_GET['url']) AND !empty($_GET['url'])){
    $controleur=new Controleur($_GET['url']);
}else{
    echo "404 not found";
}

require_once("views/asset/partis/footer.php");