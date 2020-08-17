<?php
    if (isset($_GET)) {
        echo "<div style='color:blue; padding:20%'><h1>" . $_GET['user_name']. "</h1>";
        echo "<br><a href='mailto:".$_GET['user_mail']. "'>" . $_GET['user_mail']. "</a></div>";}
    else {
        echo "Abonkele";
    }
?>