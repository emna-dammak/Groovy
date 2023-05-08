<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) // if the request is an ajax request
{
    if(isset($_GET['userLoggedIn']))
    {
        $username=$_GET['userLoggedIn'];
    }
    else
    {
        echo "failed";
        exit();
    }
    include_once("config.php");
    include_once("isAuthentificated.php");
    include_once("autoload.php");
    $con=ConnexionBD::getInstance();


}
else
    {
        include("includes/header.php");
        include("includes/footer.php");
        $url = $_SERVER['REQUEST_URI'];
        
        echo "<script>
        openPage('$url',true); 
        history.pushState(null, null, '$url'); // Use the History API to update the browser's history
        </script>";
        exit();
}
?>
