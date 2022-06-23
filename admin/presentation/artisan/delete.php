<?php
require_once "../../manager/artisanManager.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

$artisanManager = new ArtisanManager();
$artisanManager->deleteArtisan($id);
header('Location: ../index.php');

}

?>