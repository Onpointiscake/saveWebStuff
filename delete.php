<?php 
include('config/db_connection.php');

if(isset($_POST['delete'])){
    $id = $_POST['site_id'];
    $pdoDeleteQuery = "DELETE FROM sites WHERE id=:id ";
    $pdoDeleteQuery_run = $connect->prepare($pdoDeleteQuery);
    $pdoDeleteQuery_exec = $pdoDeleteQuery_run->execute(array(":id"=>$id));

    if($pdoDeleteQuery_exec){
        echo '<script>alert("Funcionó!")</script>';
        header('Location: index.php');
    }else{
        echo '<script>alert("No se pudo realizar la acción, intentelo de nuevo en unos minutos")</script>';
        header('Location: index.php');
    }
}

?>