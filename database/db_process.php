<?php
function dbProcess($request) {
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=my_db', 'root', '');
        
        $response = $bdd->exec($request);

        return $response;
    }
    catch(Exception $e) {
        die(header('location: ../index.php?error=Error :' . $e->getMessage()));
    }
}

function dbSelect($qry) {
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=my_db', 'root', '');
        $response = $bdd->query($qry);
        
        return $response;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}
?>
