<?php 

include('config/db_connection.php');

if(isset($_POST['submit'])){
    $site_id=$_GET['site_id'];
    $sql = "DELETE FROM `sites` where id = '$site_id'";
    $connect->exec($sql);
}
    
?>

<form action="delete.php" class="delete-form" method="POST">
                            <input type="hidden" name="site_id" value="<?php echo $site['id'] ?>" class="btn brand z-depth-0">
                            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
</form>