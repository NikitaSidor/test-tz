<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet">
    <script type="module" crossorigin src="<?= SITE_TEMPLATE_PATH ?>/assets/main11.js"></script>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/main.css">
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<? $APPLICATION->ShowPanel() ?>

<div class="overlay"></div>
<div class="header-wrapper header-wrapper--dark">
    <div class="osio-header">
        <div class="osio-header__content">
            <a href="#" class="osio-header__logo">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="" class="osio-header__logo-image">
            </a>
            <div class="osio-header__wrapper">
                <div class="osio-header__scroll-wrapper">


                    <div class="osio-header__wrapper-inner">


                        <div class="osio-header__top">
                            <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "",
                                array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => ""
                                ),
                                false,
                                array(
                                    "ACTIVE_COMPONENT" => "Y"
                                )
                            ); ?>

                            <a href="tel:+78002011178" class="osio-header__phone">8 800 201 11 78</a>
                            <a href="#" class="osio-header__lang">
                                RU
                            </a>
                            <div class="osio-header__social">
                                <ul class="osio-header__social-list">
                                    <li class="osio-header__social-list-item">
                                        <a href="#" class="osio-header__social-link">
                                            <svg width="14" height="14" aria-hidden="true">
                                                <use xlink:href="#youtube"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="osio-header__social-list-item">
                                        <a href="#" class="osio-header__social-link">
                                            <svg width="14" height="14" aria-hidden="true">
                                                <use xlink:href="#vk"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="osio-header__buy">
                                Купить
                            </a>
                        </div>
                        <div class="osio-header__bottom">
                            <div class="osio-header__categories">
                                <ul class="osio-header__categories-list">
                                    <li class="osio-header__categories-list-item">
                                        <a href="#" class="osio-header__categories-link">
                                            Ноутбуки
                                        </a>
                                        <div class="osio-header__categories-dropdown">
                                            <div class="osio-header__categories-dropdown-inner">
                                                <button class="osio-header__categories-dropdown-back" type="button">
                                                    <svg width="14" height="14" aria-hidden="true">
                                                        <use xlink:href="#back"></use>
                                                    </svg>
                                                    <span class="osio-header__categories-dropdown-back-text">
                                                            Ноутбуки
                                                        </span>

                                                </button>
                                                <div class="osio-header__categories-subcategories-nav">
                                                    <a href="#"
                                                       class="osio-header__categories-subcategories-nav-link active">
                                                        Все Ноутбуки
                                                    </a>
                                                    <a href="#" class="osio-header__categories-subcategories-nav-link">
                                                        baseline
                                                    </a>
                                                    <a href="#" class="osio-header__categories-subcategories-nav-link">
                                                        FocusLine
                                                    </a>
                                                </div>
                                                <div class="osio-header__categories-subcategories">


                                                    <div class="osio-header__categories-subcategory active">
                                                        <button class="osio-header__categories-subcategory-btn">
                                                            Все Ноутбуки
                                                            <svg width="14" height="14" aria-hidden="true">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="osio-header__categories-subcategory-content">
                                                            <div class="osio-header__categories-subcategory-content-inner">
                                                                <ul class="osio-header__categories-subcategory-list">
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <div class="osio-header__categories-subcategory-links">
                                                                    <a href="#"
                                                                       class="osio-header__categories-subcategory-link">
                                                                        Подробнее о серии
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="osio-header__categories-subcategory">
                                                        <button class="osio-header__categories-subcategory-btn">
                                                            baseline
                                                            <svg width="14" height="14" aria-hidden="true">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="osio-header__categories-subcategory-content">
                                                            <div class="osio-header__categories-subcategory-content-inner">
                                                                <ul class="osio-header__categories-subcategory-list">
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <div class="osio-header__categories-subcategory-links">
                                                                    <a href="#"
                                                                       class="osio-header__categories-subcategory-link">
                                                                        Подробнее о серии
                                                                    </a>
                                                                    <a href="#"
                                                                       class="osio-header__categories-subcategory-link">
                                                                        Все ноутбуки
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="osio-header__categories-subcategory">
                                                        <button class="osio-header__categories-subcategory-btn">
                                                            focusline
                                                            <svg width="14" height="14" aria-hidden="true">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="osio-header__categories-subcategory-content">
                                                            <div class="osio-header__categories-subcategory-content-inner">
                                                                <ul class="osio-header__categories-subcategory-list">
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li
                                                                            class="osio-header__categories-subcategory-list-item">
                                                                        <a href="#"
                                                                           class="osio-header__categories-subcategory-card">
                                                                            <h3
                                                                                    class="osio-header__categories-subcategory-card-title">
                                                                                FocusLine 140i-001
                                                                            </h3>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/subcategory.webp"
                                                                                     alt=""
                                                                                     class="osio-header__categories-subcategory-card-image">
                                                                            </div>
                                                                            <div
                                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                                15.6”<br>
                                                                                AMD Ryzen 5 5560u<br>
                                                                                16GB · SSD 512GB
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <div class="osio-header__categories-subcategory-links">
                                                                    <a href="#"
                                                                       class="osio-header__categories-subcategory-link">
                                                                        Подробнее о серии
                                                                    </a>
                                                                    <a href="#"
                                                                       class="osio-header__categories-subcategory-link">
                                                                        Все ноутбуки
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="osio-header__categories-list-item">
                                        <a href="#" class="osio-header__categories-link">
                                            Моноблоки
                                        </a>
                                    </li>
                                    <li class="osio-header__categories-list-item">
                                        <a href="#" class="osio-header__categories-link">
                                            Системные блоки
                                        </a>
                                    </li>
                                    <li class="osio-header__categories-list-item">
                                        <a href="#" class="osio-header__categories-link">
                                            Мониторы
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="osio-header__search-wrapper">


                                <a href="#" class="osio-header__search">
                                    <svg width="14" height="14" aria-hidden="true">
                                        <use xlink:href="#search"></use>
                                    </svg>
                                </a>
                                <div class="osio-header__search-dropdown">
                                    <div class="osio-header__search-dropdown-inner">
                                        <h3 class="osio-header__search-title">
                                            Поиск
                                        </h3>
                                        <form action="/" method="GET" class="osio-header__search-form">
                                            <input type="search" name="q" class="osio-header__search-input"
                                                   placeholder="Поиск по сайту">
                                            <button class="osio-header__search-submit" type="submit">
                                                Найти
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="osio-header__mobile-search">
                <button class="osio-header__mobile-search-btn" type="button">
                    <svg width="14" height="14" aria-hidden="true">
                        <use xlink:href="#search"></use>
                    </svg>
                </button>
                <div class="osio-header__mobile-search-dropdown">
                    <div class="osio-header__mobile-search-dropdown-inner">
                        <form action="/" method="GET" class="osio-header__mobile-search-dropdown-form">
                            <input type="search" class="osio-header__mobile-search-dropdown-form-input"
                                   placeholder="Поиск">
                        </form>
                    </div>
                </div>
            </div>
            <button class="osio-header__burger">

            </button>
        </div>

    </div>
</div>
<main class="page-main">