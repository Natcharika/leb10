<html>

<body>
<?php
    if($_GET["language"] == "en"){
        setcookie("lang","en",time()+60);
    }
    else if($_GET["language"] == "th"){
        setcookie("lang","th",time()+60);
    }
?>
</body>
</html>