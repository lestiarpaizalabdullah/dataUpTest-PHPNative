<?php
if(isset($_GET['x']) && $_GET['x']=='home'){
    $page = "home.php";
    include "main.php";
} elseif(isset($_GET['x']) && $_GET['x']=='data'){
    $page = "data.php";
    include "main.php";
} elseif(isset($_GET['x']) && $_GET['x']=='tambahdata'){
    $page = "tambahdata.php";
    include "main.php";
} elseif(isset($_GET['x']) && $_GET['x']=='user') {
    $page = "user.php";
    include "main.php";
} elseif(isset($_GET['x']) && $_GET['x']=='report'){
    $page = "report.php";
    include "main.php";
}
?>