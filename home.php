<?php

session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}

try{
    
    include('config/db_connection.php');
    // CAMBIAR A DINÁMICO
    $userId = '19';

    $sql = $connect->prepare("SELECT * FROM sites WHERE id = $userId");
    $sql->execute();
    $sites = $sql->fetchAll();

    }catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('templates/header.php'); ?>

    <h5 class="center white-text">
        You have saved <?php echo count($sites) ?> sites so far
        <li><a href="add.php" class="btn brand z-depth-2 grey darken-1 save-btn">Save a Site</a></li>
    </h5>
    
    <div class="container">
        <div class="row">
            <?php foreach($sites as $site): ?>
                
              <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($site['name']); ?></h6>
                            
                            <a href="<?php $site['url'] ?>"><?php echo htmlspecialchars($site['url']); ?></a>
                        </div>
                        <div class="forms-container">
                        <form action="delete.php" class="delete-form" method="POST">
                            <input type="hidden" name="site_id" value="<?php echo $site['id'] ?>" class="btn brand z-depth-0">
                            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
                        </form>
            
                                <li><a href="update.php" class="btn brand z-depth-0">Edit</a></li>
                 
                        </div>
                    </div>
              </div>  

            <?php endforeach; ?>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</html>