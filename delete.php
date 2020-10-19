<?php
include 'index.php';
include 'database.php';
?>



<?php if(isset($_GET['id'])&&is_numeric($_GET['id'])):?>
<?php
$star=new connect();
$raw=$star->delete($_GET['id']);
header("Refresh:0;url=show.php");

?>
<?php endif;?>
