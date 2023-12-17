<?php

function createCategorie()
{
    require_once '/xampp/htdocs/shop/cms/config/db-config/db_connect.php';

    if (isset($_POST)) {
        $data = file_get_contents('php://input');

        $inputData = json_decode($data);

        $table = "CREATE TABLE $inputData (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(255) NOT NULL,
        product_price VARCHAR(255) NOT NULL,
        product_description VARCHAR(255) NOT NULL,
        product_image VARCHAR(255) NOT NULL,
        product_page_url VARCHAR(255) NOT NULL,
        product_meta VARCHAR(255) NOT NULL,
        product_seo_description VARCHAR(255) NOT NULL
    )";

        if (mysqli_query($conn, $table)) {
            $htmlString = "<?php
        require_once 'cms/config/db-config/db_connect.php';
        ?>
        <!DOCTYPE html>
        <html lang='en'>
        
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='description' content='Онлайн магазин за гоблени и гердани.  Бърза и сигурна доставка. Ниски цени. Поръчай сега.' />
            <meta property='og:title' content='$inputData' />
            <meta property='og:site_name' content='Ръчно изработени гердани и гоблени! - Детелина и Вие | detelinaivie.com' />
            <meta property='og:description' content='Онлайн магазин за гоблени и гердани.  Бърза и сигурна доставка. Ниски цени. Поръчай сега.' />
            <link rel='stylesheet' href='cms/templates/main/css/main.css' />
            <script src='https://kit.fontawesome.com/7f6d4e14e7.js' crossorigin='anonymous'></script>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
            <title>$inputData</title>
        </head>
        
        <body>
            <div class='main'>
                <?php
                require_once 'cms\templates\main\header.php';
                ?>
        
                <div class='galeryContainer'>
        
                    <div class='wrapper'>
                        <img class='galeryImage' src='/cms/templates/main/imgs/hobi-gobleni_3_1920x500.jpg'>
                        <img class='galeryImage' src='/cms/templates/main/imgs/goblen_1_1920x500.jpg'>
                        <img class='galeryImage' src='/cms/templates/main/imgs/ezgif.com-resize.jpg'>
                    </div>
        
                </div>
        
                <div class='gs-grid-wrap gs-anim-block animated'>
                    <div class='gs-grid-item with-hover gs-elem done' data-pid='31'>
                        <div class='gs-item-data'>
                            <div class='gs-item-image'>
                                <span class='gs-tags'>
                                </span>
                                <a href='/gerdan-zvezda.html' class='gs-item-view gs-single-view'>
                                    <img src='/media/8/43.png' alt='Гердан Звезда'>
                                </a>
                                <a data-quick-view-btn='' href='#' onclick='QuickView.showInfo(event, this)' class='gs-qw-button' data-id='31'>
                                    <span class='icon-ico_search'></span>
                                    <em>Бърз преглед</em>
                                </a>
                            </div>
                            <div class='gs-item-text'>
                                <a href='/gerdan-zvezda.html'>
                                    Гердан Звезда
                                </a>
                                <div class='gs-item-price'>
                                    <a href='/gerdan-zvezda.html'>
                                        <span class='gs-new-price'>22,00 лв.</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <button id=test>test</button>
                <?php
                require_once ''cms/templates/mainfooter.php';
                ?>
            </div>
        </body>
        
        <script src='/cms/templates/main/js/main.js' type='module'></script>
        
        </html>";

            $textcyr = $inputData;
            $cyr = [
                'Љ', 'Њ', 'Џ', 'џ', 'ш', 'ђ', 'ч', 'ћ', 'ж', 'љ', 'њ', 'Ш', 'Ђ', 'Ч', 'Ћ', 'Ж', 'Ц', 'ц', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
            ];
            $lat = [
                'Lj', 'Nj', 'Dž', 'dž', 'š', 'đ', 'č', 'ć', 'ž', 'lj', 'nj', 'Š', 'Đ', 'Č', 'Ć', 'Ž', 'C', 'c', 'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'ts', 'ch', 'sh', 'sht', 'a', 'i', 'y', 'e', 'yu', 'ya', 'A', 'B', 'V', 'G', 'D', 'E', 'Io', 'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'Ts', 'Ch', 'Sh', 'Sht', 'A', 'I', 'Y', 'e', 'Yu', 'Ya'
            ];

            $textLat = str_replace($cyr, $lat, $textcyr);
            $createFile = fopen('/xampp/htdocs/shop/' . $textLat . '.html', 'w', './');
            $writeFile = fwrite($createFile, $htmlString);
            fclose($createFile);

            $insertCategorieName = "INSERT INTO categories_name (id, name) VALUES ('', '$inputData')";
            mysqli_query($conn, $insertCategorieName);
        } else {
            echo 'Възникна грешка при създаването на таблица: ' . mysqli_error($conn);
        }

        mysqli_close($conn);

        /* href='/cms/catalog/products?Id=2' */
        /*   $html = '<a class='category-link' title='$jsonData'><span class='cat-link-name fw-semibold'>'$jsonData'</span></a>';

    $encodeHTML = base64_encode($html);

    $query = 'INSERT INTO shop_categories (id, category_name, categories_content, visible) VALUES('', '$jsonData', '$encodeHTML', true)';

    if (mysqli_query($conn, $query)) {
        echo 'New record created successfully !';
    }

    $select = 'SELECT * FROM shop_categories';
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          echo base64_decode($row['categories_content']);
        }
      } else {
        echo '0 results';
      } */
    }
}

createCategorie();
