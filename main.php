<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    if($_COOKIE["lang"] == "en"){
        echo "Welcome";
    }else{
        $_COOKIE["lang"] == "th";
        echo "ยินดีต้อนรับ";
    }
?>
</body>
</html>