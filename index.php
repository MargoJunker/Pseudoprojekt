<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt</title>
</head>

<body>
    <?php
    if(isset($_GET['page']) && file_exists($_GET['page'].".php")){
        require $_GET['page'].".php";
    };
    ?>
    <p>sakfnsoadng</p>
</body>


</html>