<?php
require_once 'cms/config/db-config/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cms/templates/main/css/main.css" />
    <title>
        <?php
        $query_select = 'select * from shop_title';
        $result = mysqli_query($conn, $query_select);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['shop_title'];
            print $title;
        }
        ?>
    </title>
</head>

<body>
    <div class="main">
        <?php
        require_once 'cms\templates\main\header.php';
        require_once 'cms\templates\main\footer.php';
        ?>
    </div>
</body>

</html>