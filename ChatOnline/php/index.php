<?php header("Content-type: text/javascript"); 
session_start();

$bdd = new PDO("mysql:host=localhost;dbname=chat;charset=utf8", 'root', 'root');

if (empty($_SESSION['id']))
{
    header('locaction:connexion.php');
}

?>

function actualiser()
{
        
    var divP = document.getElementById('pMessages');
    divP.textContent = '';
    console.log('actualisé ^^')
        
        <?php

        $req = $bdd->prepare('SELECT * FROM messages WHERE id_membre != ? ORDER BY id');
        $req->execute(array(0));
        $nb_req = $req->rowcount();
        
        

        while ($r = $req->fetch())
        {
            $req_membre = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
            $req_membre->execute(array($r['id_membre']));
            $membre = $req_membre->fetch();
        ?>
                var message = document.createElement('p');
                message.innerHTML = '<div <?php if ($r['id_membre']==$_SESSION['id']) {echo 'style="text-align:right;"';} ?>><i><p><b><?= $membre['pseudo'] ?></b> à <?= $r['date'] ?></p></i><?= $r['message'] ?><hr></div>';
                document.getElementById('pMessages').appendChild(message);
        <?php
        }
        ?>

    
}
actualiser()

//alert('<?= $_SESSION['id']; ?>');