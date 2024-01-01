<?PHP
    session_start();
    if(!isset($_SESSION['username'])){
        header("Locaion: index.php");
        exit();
    }
?>