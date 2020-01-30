<?php 

include('config/db_connection.php');

$site_url = $site_name = '';

if(isset($_POST['update'])){
 
    $site_name = $_POST['site_name'];
    $site_url = $_POST['site_url'];
    $id = $_POST['site_id'];
    $pdoEditQuery = "UPDATE `sites` SET name=:name, url=:url WHERE id=:id";
    #Metemos los datos en un array
    $params=array(":name"=>$site_name ,":url"=>$site_url , ":id"=>$id);
    $pdoEditQuery_run = $connect->prepare($pdoEditQuery);
    #Pasamos $params en el execute
    $pdoEditQuery_exec = $pdoEditQuery_run->execute($params);

    if($pdoEditQuery_exec){
        echo '<script>alert("Funcionó!")</script>';
        header('Location: index.php');
    }else{
        echo '<script>alert("No se pudo realizar la acción, intentelo de nuevo en unos minutos")</script>';
        header('Location: index.php');
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('templates/header.php'); ?>

    <section class="container white-text">
        <h4 class="center">Edit a Site</h4>
        <form action="update.php" method="POST" class="white add-form">
            <label for="">New Name:</label>
            <input type="text" name="site_name" value="<?php echo htmlspecialchars($site_name) ?>">
            
            <label for="">New Link:</label>
            <input type="text" name="site_url" value="<?php echo htmlspecialchars($site_url) ?>" >
           
            <div class="center">
                <input type="submit" name="update" value="save" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>