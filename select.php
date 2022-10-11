<?php
    if (empty($_GET["language"])) {
        echo "กรุณาเลือกภาษา";
    }
    else{
        echo $_GET["language"];
        if($_GET["language"]=="en")
        {
            setcookie("lang","en",time()+3600*24);
        }
        else if($_GET["language"]=="th")
        {
            setcookie("lang","th",time()+3600*24);
        }
    }
    
?>

