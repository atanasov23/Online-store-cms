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
                    <a href="">
                        <i class="fa fa-bars 1" aria-hidden="true"></i>
                        <strong>Меню</strong>
                    </a>
                </div>
            </div>

            <div class="search-box">
                <a href="" id="search">
                    <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                    <strong>Търсене</strong>
                </a>
                <form action="/search.php" class="search-form" id="search-form">
                    <div class="field-box">
                        <input type="text" name="search" id="search-filed" class="text-field" placeholder="Търсене">
                        <button><i class="fa fa-search fa-1x" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>

            <div id="cart-header" class="cart"> <a href="/shopping-cart.html" class="add-to-cart">
                    <i class="fa fa-cart-plus 1 fa-2x" aria-hidden="true"></i>
                    <em class="cart-sum">(0)</em>
                </a>

            </div>
        </div>
    </div>

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

</header>