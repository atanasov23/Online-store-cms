<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Електронен магазин - контролен панел</title>
    <link rel="stylesheet" href="/shop/cms/css/main.css" />
    <script src="https://kit.fontawesome.com/7f6d4e14e7.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main-container">
        <div class="header">
            <nav class="navBarTopmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-mail" aria-current="page">detelina_shop@abv.bg</a>
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
</body>

</html>