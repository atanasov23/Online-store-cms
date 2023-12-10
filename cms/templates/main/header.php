<header class="header">

    <div class="main-nav">

        <div class="logo">
            <div class="logo-img">
                <a href="/">
                    <img src="cms/imgs/logo2.jpg">
                </a>
            </div>
            <div class="head-contacts">
                <ul>
                    <li>
                        <a href="0892375731">
                            <span class="phone_number">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/detelina.i.vie/" target="_blank">
                            <span class="icon_instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=61551918767888&is_tour_completed=true" target="_blank">
                            <span class="icon_facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-menu">
            <div class="menu">
                <div class="mobile-menu" id="mobile-menu">
                    <a>
                        <div class="container-menu">
                            <div class="c-1"></div>
                            <div class="c-2"></div>
                            <div class="c-3"></div>
                            <div>
                                <p>Меню</p>
                    </a>
                </div>
            </div>
            <div class="search-box">
                <form action="/search.php" class="search-form" id="search-form">
                    <div class="field-box">
                        <input type="text" name="search" id="search-filed" class="text-field" placeholder="Търсене">
                        <button><i class="fa fa-sharp fa-thin fa-magnifying-glass fa-sm"></i></button>
                    </div>
                </form>
                <a id="search-btn">
                    <!-- <i class="fa-thin fa-x fa-xl"></i> -->
                    <div class="toogle-search">
                        <!-- <i class="fa fa-thin fa-magnifying-glass fa-xl"></i> -->
                        <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                    </div>
                    <p>Търсене</p>
                </a>
            </div>
            <div id="cart-header" class="cart"> <a href="/shopping-cart.html" class="add-to-cart">
                    <i class="fa fa-thin fa-cart-shopping fa-lg"></i>
                    <em class="cart-sum">(0)</em>
                </a>
            </div>
        </div>

    </div>

</header>

<nav>
    <ul class="main-menu">
        <?php
        $query_select = 'select * from shop_nav_menu';
        $result = mysqli_query($conn, $query_select);
        while ($row = mysqli_fetch_assoc($result)) {
            $li = $row['menu_content'];
            print $li;
        }
        ?>
    </ul>
</nav>