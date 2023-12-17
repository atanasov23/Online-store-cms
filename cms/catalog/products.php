<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Електронен магазин - контролен панел</title>
    <link rel="stylesheet" href="/cms/css/main.css" />
    <script src="https://kit.fontawesome.com/7f6d4e14e7.js" crossorigin="anonymous"></script>

</head>

<?php
if(isset($_POST)){
    $data = file_get_contents("php://input");

    $jsonData = json_decode($data);

    echo $jsonData;
}
?>
<body>
    <div class="main-container">
        <div class="header">
            <nav class="navBarTopmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-mail" id="nav-link-mail" aria-current="page">detelina_shop@abv.bg</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/cms/main/index">Начало</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/cms/messages/list">Съобщения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://help.superhosting.bg/category/shopiko" target="_blank">Помощ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/cms/index/logout">Изход</a>
                    </li>
                </ul>
            </nav>
            <nav class="nav-mainMenu">
                <div class="navbar-collapse" id="navbarMainMenu">
                    <!--   <div class="navbar-settings-mobile p-2 d-lg-none">
                        <a href="http://detelinaivie.com" target="_blank" class="content bg-white rounded d-flex align-items-center justify-content-between text-decoration-none">
                            <div class="settings-user">
                                <span class="nav-icon c-icon-preview"></span>
                                <span class="nav-link-text">Преглед</span>
                            </div>
                            <div class="setting-btn">
                                <i class="fas fa-eye"></i>
                            </div>
                        </a>
                    </div> -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/cms/catalog/products">
                                <!-- <span class="nav-icon c-icon-catalog"></span> -->
                                <i class="fa-sharp fa-solid fa-table-cells fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Каталог</span>
                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item active" href="/cms/catalog/products">Продукти</a></li>
                                <li><a class="dropdown-item " href="/cms/catalog/import">Импортиране на продукти</a></li>
                                <li><a class="dropdown-item " href="/cms/catalog/parameters">Параметри</a></li>
                                <li><a class="dropdown-item " href="/cms/catalog/brands">Марки</a></li>
                                <li><a class="dropdown-item " href="/cms/catalog/homePage">Продукти на начална страница</a></li>
                                <li><a class="dropdown-item " href="/cms/catalog/settings">Настройки</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/content/index">
                                <i class="fa fa-light fa-file-lines fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Страници</span>

                            </a>
                            <!--  <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/content/index">Основни</a></li>
                                <li><a class="dropdown-item " href="/cms/faq/index">FAQ</a></li>
                                <li><a class="dropdown-item " href="/cms/news/index">Блог</a></li>
                                <li><a class="dropdown-item " href="/cms/content/menu">Управление на менюта</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/design/templates">
                                <i class="fa fa-solid fa-palette fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Дизайн</span>
                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/design/templates">Дизайн шаблони</a></li>
                                <li><a class="dropdown-item " href="/cms/design/logos">Лога</a></li>
                                <li><a class="dropdown-item " href="/cms/design/colors">Цветови схеми</a></li>
                                <li><a class="dropdown-item " href="/cms/settings/design">Дизайн Настройки</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/settings/basicNew">
                                <i class="fa fa-sharp fa-light fa-gear fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Настройки</span>

                            </a>
                            <!--  <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/settings/basicNew">Основни</a></li>
                                <li><a class="dropdown-item " href="/cms/payment/index">Плащане</a></li>
                                <li><a class="dropdown-item " href="/cms/settings/shipment">Доставка</a></li>
                                <li><a class="dropdown-item " href="/cms/settings/smi">Социални мрежи</a></li>
                                <li><a class="dropdown-item " href="/cms/settings/mobile">Мобилна версия</a></li>
                                <li><a class="dropdown-item " href="/cms/settings/security">Сигурност и GDPR</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/orders/list">
                                <i class="fa fa-sharp fa-light fa-cart-shopping fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Поръчки</span>

                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/orders/list">Поръчки</a></li>
                                <li><a class="dropdown-item " href="/cms/orders/abandonedCarts">Изоставени колички</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/customer/index">
                                <i class="fa-solid fa-people-group fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Клиенти</span>

                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/customer/index">Клиенти</a></li>
                                <li><a class="dropdown-item " href="/cms/customer/import">Импорт на клиенти</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/marketing/discounts">
                                <i class="fa-solid fa-bullhorn fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Маркетинг</span>

                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/marketing/discounts">Отстъпки и промоции</a></li>
                                <li><a class="dropdown-item " href="/cms/subscribers/list">Нюзлетър абонати</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/reports/summary">
                                <i class="fa fa-solid fa-money-bill-trend-up fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Отчети</span>

                            </a>
                            <!--  <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/reports/summary">Обобщен отчет</a></li>
                                <li><a class="dropdown-item " href="/cms/reports/orders">Поръчки</a></li>
                                <li><a class="dropdown-item active" href="/cms/reports/products">Продукти</a></li>
                                <li><a class="dropdown-item " href="/cms/reports/customers">Клиенти</a></li>
                                <li><a class="dropdown-item " href="/cms/reports/operations">Операции</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/plugins/all">
                                <i class="fa-solid fa-box-open fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Допълнения</span>

                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMainMenu">
                                <li><a class="dropdown-item " href="/cms/plugins/all">Всички</a></li>
                                <li><a class="dropdown-item " href="/cms/plugins/installed">Инсталирани</a></li>

                            </ul> -->
                        </li>
                    </ul>
                    <div class="nav-preview-shop">
                        <a href="http://detelinaivie.com" target="_blank" class="nav-preview-link bg-primary rounded">
                            <span>
                                <i class="fa fa-sharp fa-solid fa-shop fa-2xl" style="color: #ffffff;"></i>
                                <span class="pr-text">Преглед</span>
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="products-main-container">
        <aside class="category-tree-wrapper " id="categoryTreeWrapper">
            <h2 class="catalog-title">Категории</h2>
            <div class="category-tree" id="categoryTree">

                <ul class="sortable-list ui-sortable">
                    <li class="cat-list-item">
                        <div id="cat_0" class="link-wrapper " data-id="0">
                            <a href="/cms/catalog/products?Id=0" class="category-link" title="Некатегоризирани продукти"><b>Некатегоризирани продукти</b></a>
                        </div>
                    </li>

                    <!--        <li id="cat_3" class="cat-list-item sortable-item ">
                        <div class="link-wrapper  " data-id="3">
                            <i class="fas fa-sort sort-icon ui-sortable-handle"></i>
                            <a href="/cms/catalog/products?Id=3" class="category-link" title="Гердани"><span class="cat-link-name fw-semibold">Гердани</span></a>
                            <a href="/cms/catalog/details?Id=&amp;editId=3" class="btn btn-primary btn-sm settings-icon" title="Редакция на категория">Редакция</a>
                            <i class="fas fa-eye view-icon" title="Направи невидима"></i>

                        </div>


                    </li>
                    <li id="cat_2" class="cat-list-item sortable-item opened">
                        <div class="link-wrapper  active " data-id="2">
                            <i class="fas fa-sort sort-icon ui-sortable-handle"></i>
                            <a href="/cms/catalog/products?Id=2" class="category-link" title="Гоблени"><span class="cat-link-name fw-semibold">Гоблени</span></a>
                            <a href="/cms/catalog/details?Id=&amp;editId=2" class="btn btn-primary btn-sm settings-icon" title="Редакция на категория">Редакция</a>
                            <i class="fas fa-eye view-icon" title="Направи невидима"></i>

                        </div>
                        <ul class="sortable-list ui-sortable">
                        </ul>
                        <a href="/cms/catalog/details?Id=2&amp;editId=0&amp;parentId=2" class="btn-add-new-small">
                            Добави подкатегория </a>
                    </li> -->

                </ul>
            </div>
            <form class="add-new-category my-3 me-2 pt-4" id="addNewCategory" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control fst-italic new-category" placeholder="Име на категорията" name="newCategory" data-validation="presence">
                    <input class="btn btn-primary btn-sm" type="submit" value="Създай">
                </div>
            </form>
        </aside>

        <div class="items-container">
            <a href="/cms/product/details?catId=3" class="btn-add-new">
                <div class="add-product">
                    добави продукт
                </div>
            </a>
        </div>
    </div>

</body>

<script src="/cms/js/main.js"></script>

</html>