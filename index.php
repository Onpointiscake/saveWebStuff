<?php

try{
    // Conexión a la base de datos
    include('config/db_connection.php');

// Sacar todos los resultados de la base de datos
$sql = $connect->prepare('SELECT * FROM sites');
$sql->execute();
$sites = $sql->fetchAll();

}catch(PDOException $e){
echo "ERROR: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Your Sites</h4>
    <h6 class="center grey-text">
        You have saved <?php echo count($sites) ?> so far
    </h6>
    <div class="container">
        <div class="row">
            <?php foreach($sites as $site): ?>
                
              <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($site['name']); ?></h6>
                            <a href="<?php $site['url'] ?>"><?php echo htmlspecialchars($site['url']); ?></a>
                        </div>
                        <?php include('delete.php'); ?>
                    </div>
              </div>  

            <?php endforeach; ?>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</html>