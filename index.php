<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt</title>
</head>

<body>
    <?php

    $page = isset($_GET['page']) && file_exists($_GET['page'].".php")? $_GET['page'] : 'home';
        require $page.".php";

    ?>
    <p>sakfnsoadng</p>
</body>


</html>