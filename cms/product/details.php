<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Електронен магазин - контролен панел</title>
    <link rel="stylesheet" href="/cms/css/main.css" />
    <script src="https://kit.fontawesome.com/7f6d4e14e7.js" crossorigin="anonymous"></script>

</head>

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

    <div class="details-main-container">
        <section class="page-section">
            <div class="container-md">
                <div class="mb-2 pb-2">
                    <div class="main-desc">

                        <div class="col-10">
                            <h3 class="mb-0">Описание на продукта</h3>
                        </div>

                        <div class="col-2 text-end">
                            <span class="rounded text-light gs-toggle-icon p-1 rounded " id="gs-toggle-icon">
                                <i class="far fa-eye" style="display: flex; align-items: center; justify-content: center; border-radius: 5px; color: white; background-color: #7fba00; height: 25px; width: 25px; text-align: center;"></i>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <form action="addPageForm">

            <section class="section-base-info">
                <div class="container-md">
                    <div class="card-box">

                        <h4>Основна информация</h4>

                        <div class="row-description">

                            <div class="col-sm-8">
                                <div class="row gx-1">
                                    <div class="col-sm-8 mb-3">
                                        <label class="form-label">Име:</label>
                                        <input type="text" class="form-control" name="frm[name]" data-lng="title" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row gx-1">

                                    <!--      <div class="col-6 mb-3">
                                        <label class="form-label">Стара цена:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="frm[oldPrice]" value="">
                                            <span class="input-group-text"> лв.</span>
                                        </div>
                                    </div> -->

                                    <div class="col-6 mb-3">
                                        <label class="form-label">Цена:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="frm[price]" value="">
                                            <span class="input-group-text"> лв.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col">
                                <label class="form-label">Описание на продукта:</label>
                                <div id="mceu_14" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;">
                                    <!--      <div id="mceu_14-body" class="mce-container-body mce-stack-layout">
                                        <div id="mceu_15" class="mce-top-part mce-container mce-stack-layout-item mce-first">
                                            <div id="mceu_15-body" class="mce-container-body">
                                                <div id="mceu_16" class="mce-toolbar-grp mce-container mce-panel mce-first mce-last" hidefocus="1" tabindex="-1" role="group">
                                                    <div id="mceu_16-body" class="mce-container-body mce-stack-layout">
                                                        <div id="mceu_17" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar">
                                                            <div id="mceu_17-body" class="mce-container-body mce-flow-layout">
                                                                <div id="mceu_18" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group">
                                                                    <div id="mceu_18-body">
                                                                        <div id="mceu_0" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Bold"><button id="mceu_0-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div>
                                                                        <div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Italic"><button id="mceu_1-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div>
                                                                        <div id="mceu_2" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Underline"><button id="mceu_2-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div>
                                                                    </div>
                                                                </div>
                                                                <div id="mceu_19" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                                    <div id="mceu_19-body">
                                                                        <div id="mceu_3" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Align left"><button id="mceu_3-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div>
                                                                        <div id="mceu_4" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Align center"><button id="mceu_4-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div>
                                                                        <div id="mceu_5" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Align right"><button id="mceu_5-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div>
                                                                        <div id="mceu_6" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Justify"><button id="mceu_6-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div>
                                                                    </div>
                                                                </div>
                                                                <div id="mceu_20" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                                    <div id="mceu_20-body">
                                                                        <div id="mceu_7" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Bullet list"><button id="mceu_7-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div>
                                                                        <div id="mceu_8" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Numbered list"><button id="mceu_8-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div>
                                                                        <div id="mceu_9" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Decrease indent"><button id="mceu_9-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div>
                                                                        <div id="mceu_10" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Increase indent"><button id="mceu_10-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div>
                                                                    </div>
                                                                </div>
                                                                <div id="mceu_21" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group">
                                                                    <div id="mceu_21-body">
                                                                        <div id="mceu_11" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Insert/edit link"><button id="mceu_11-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div>
                                                                        <div id="mceu_12" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Remove link"><button id="mceu_12-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-unlink"></i></button></div>
                                                                        <div id="mceu_13" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Clear formatting"><button id="mceu_13-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-removeformat"></i></button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mceu_22" class="mce-edit-area mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="descr_ifr" frameborder="0" allowtransparency="true" title="Поле за форматиран текст. Натиснете Alt+F9 за меню; Alt+F10 за лента с инструменти; Alt+0 за помощ." style="width: 100%; height: 200px; display: block;" data-mce-style="width: 100%; height: 200px; display: block;"></iframe></div>
                                    </div> -->
                                </div><textarea class="form-control form-tinymce" id="descr" name="frm[descr]" data-lng="descr" rows="12" data-mode="basic" aria-hidden="true"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-upload-file">
                <div class="container-md">

                    <div class="card-box-upload">

                        <h4 class="mb-1">Мултимедия:</h4>
                        <p class="text-muted">Добавете снимка на продукта</p>

                        <div class="cms-detail-photo mt-3">
                            <div class="photo-manager ui-sortable" id="product-upload-photos" data-parent-id="#prdId" data-max-items="100">
                                <div class="upload-photos-btn drop-item bg-light-gray"></div>
                                <label for="image" class="custom-file-upload">
                                <i class="fa fa-light fa-upload fa-xl" style="color: #a1a6af;"></i>
                                </label>
                                <input type="file" name="image" id="image" class="upload-photos-input d-none" accept="image/*">
                            </div>
                        </div>

                        <!-- <div class="cms-content-video mt-4" id="cms-product-video">
                            <div class="video-header">
                                <div class="d-flex align-items-center pe-3">
                                    <div class="yt-logo me-3"></div>
                                    <h6 class="yt-title mb-0">
                                        Добавете видео от YouTube:
                                    </h6>
                                    <div class="yt-remove" data-video-remove="">
                                        <i class="fas fa-times-circle text-danger fs-4"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="video-content p-3 mt-3 bg-white rounded border">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" data-video-url="" class="form-control" name="frm[video]" value="" placeholder="Копирайте адреса на видеото тук">
                                    </div>
                                    <div class="col-12 d-block d-sm-flex align-items-end">
                                        <div class="col-sm-4 col-lg-3 pe-sm-3 mt-3">
                                            <div class="video-thumb bg-light-gray border">
                                                <span class="video-poster" data-video-thumb=""></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-lg-9 mt-3">
                                            <label for="videoTitle">Заглавие:</label>
                                            <input type="text" data-video-title="" class="form-control" name="frm[videoTitle]" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <textarea id="videoDescription" data-video-description="" class="form-control" name="frm[videoDescr]" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!--        <div class="mt-4">
                            <label class="form-label">Прикачете файл</label>
                            <input class="form-control" id="file-upload-inp" name="file" type="file">
                        </div>

                        <div id="attached-file" class="mt-3 d-none">
                            <p class="mb-0" id="prd-existing-file">Прикачен файл:</p>
                            <div class="d-flex align-items-center">
                                <a id="attached-file-link" class="text-muted fw-semibold attached-file-link" href="/media/" target="_blank"></a>
                                <a class="text-danger fs-4 ms-2" href="javascript:void(0)" id="file-remove" title="Изтрий">
                                    <i class="fas fa-times-circle"></i>
                                </a>&nbsp;
                            </div>
                        </div> -->

                    </div>
                </div>
            </section>
            <section class="section-details-action">
                <div class="container-md text-sm-end">
                    <div class="card-box-buttons">
                        <a href="/cms/catalog/products?Id=3" class="btn btn-gray text-dark float-sm-start my-1 me-1" id="list-btn">Назад</a>
                        <a href="javascript:void(0)" class="btn btn-secondary my-1" id="product-save"><i class="fas fa-save"></i> Публикувай</a>
                    </div>
                </div>
            </section>
        </form>
    </div>

</body>

<script src="/cms/js/main.js"></script>

</html>