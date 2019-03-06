<?php header("Content-type: text/javascript"); 
session_start();

$bdd = new PDO("mysql:host=localhost;dbname=chat;charset=utf8", 'root', 'root');

if (!empty($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $ins = $bdd->prepare('INSERT INTO messages(id_membre,date,message) VALUES(?,?,?)');
    $ins->execute(array($_SESSION['id'],'06/05/2018',$message));
}


?>

    

//alert('<?= $_SESSION['id']; ?>');