<!DOCTYPE html>
<html lang="ru">
    <? include(TEMPLATES_PATH.'head.php'); ?>

    <body>
        <div class="as-main">
            <header class="as-header container">
                <div class="as-header-logo">
                    <a href="#">LOGO</a>
                </div>

                <nav class="as-header-menu">
                    <div class="as-header-menu-search-wrp">
                        <a class="sprites-search" href="#"></a>
                        <a class="as-header-menu-a a-search" href="#">Поиск</a>
                        <div class="as-header-menu-search-form">
                            <form action="index.html" method="post">
                                <input class="as-header-menu-search" type="search" name="as-header-menu-search" value="" placeholder="Поиск по сайту">
                                <a class="as-header-menu-search-a" href="#"></a>
                            </form>
                        </div>
                    </div>

                    <div class="as-header-menu-favorites-wrp">
                        <a class="sprites-head" href="#"></a>
                        <a class="as-header-menu-a a-favorites" href="#">Избранное</a>
                    </div>

                    <div class="as-header-menu-location-wrp">
                        <a class="sprites-location" href="#"></a>
                        <a class="as-header-menu-a a-location" href="#">Москва</a>

                            <div class="as-header-menu-location-form">
                                <form action="index.html" method="post">
                                    <div class="location-form-city">
                                        <a href="#">Москва</a>
                                        <a class="close" href="#"></a>
                                    </div>

                                    <div class="location-form-serch">
                                        <input type="search" name="location-form-serch-search" value="" placeholder="Область, район, город">
                                        <a class="location-form-serch-a" href="#"></a>
                                    </div>
                                </form>
                            </div>
                    </div>
                </nav>
            </header>
