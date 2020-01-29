<?php

include('config/db_connection.php');

$site_url = $site_name = '';
$errors = array('site_url_error' => '', 'site_name_error' => '');

if(isset($_POST['submit'])){
 
    // check url
    if(empty($_POST['site_url'])){
        $errors['site_url_error'] = 'A link is required <br />';
    } else{
        $site_url = $_POST['site_url'];
        if(!filter_var($site_url, FILTER_VALIDATE_URL)){
            $errors['site_url_error'] = 'Link must be valid';
        }
    }
    // check name
    if(empty($_POST['site_name'])){
        $errors['site_name_error'] = 'A name is required <br />';
    } else{
        $site_name = $_POST['site_name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $site_name)){
            $errors['site_name_error'] = 'Name must be letters and spaces only';
        }
    }
    // Add data to db
    if(array_filter($errors)){
        echo 'errors in the form';
    } else { 
        try{
            $sql = "INSERT INTO `sites` (`id`, `name`, `url`, `created_at`) VALUES (NULL, '$site_name', '$site_url', current_timestamp())";
            $connect->exec($sql);

            header('Location: index.php'); 

        } catch(PDOException $e){
			echo $e->getMessage();
        }
		$connect = null;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Site</h4>
        <form action="add.php" method="POST" class="white">
            <label for="">Name:</label>
            <input type="text" name="site_name" value="<?php echo htmlspecialchars($site_name) ?>">
            <div class="red-text">
                <?php echo $errors['site_name_error'] ?>
            </div>
            <label for="">Link:</label>
            <input type="text" name="site_url" value="<?php echo htmlspecialchars($site_url) ?>" >
            <div class="red-text">
                <?php echo $errors['site_url_error'] ?>
            </div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>