<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
</main>
<footer class="page-footer">
    <div class="page-footer__content">
        <div class="page-footer__top">
            <h3 class="page-footer__top-heading">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR . "include/footer/top-heading.php",
                    array(),
                    array("MODE" => "html")
                );
                ?>

            </h3>
            <ul class="page-footer__social-list">
                <li class="page-footer__social-list-item">
                    <a href="#" class="page-footer__social-link">
                        <svg width="14" height="14" aria-hidden="true">
                            <use xlink:href="#youtube"></use>
                        </svg>
                    </a>
                </li>
                <li class="page-footer__social-list-item">
                    <a href="#" class="page-footer__social-link">
                        <svg width="14" height="14" aria-hidden="true">
                            <use xlink:href="#vk"></use>
                        </svg>
                    </a>
                </li>
            </ul>
            <nav class="page-footer__nav">
                <?php $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "podmenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "footer"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);
                ?>
            </nav>
        </div>
        <a href="#" class="page-footer__logo">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/footer-logo.svg" alt="" class="page-footer__logo-image">
        </a>
        <div class="page-footer__bottom">
            <div class="page-footer__bottom-left">
                <div class="page-footer__copyright">
                    <?
                    $APPLICATION->IncludeFile(
                        SITE_DIR . "include/footer/copyright.php",
                        array(),
                        array("MODE" => "text")
                    );
                    ?>
                </div>
                <a href="#" class="page-footer__policy">
                    Политика конфиденциальности
                </a>
            </div>

            <div class="page-footer__bottom-right">
                <a href="#" class="page-footer__made-by">
                        <span class="page-footer__made-by-text">
                            Создание сайта<br> Mark Weber
                        </span>

                    <img src="<?=SITE_TEMPLATE_PATH?>/images/mw-logo.svg" alt="" class="page-footer__made-by-logo">
                </a>
            </div>
            <picture>
                <source srcset="<?=SITE_TEMPLATE_PATH?>/images/footer-decor-mobile.svg" media="(max-width: 640px)" />
                <img src="<?=SITE_TEMPLATE_PATH?>/images/footer-decor.svg" alt="MDN" class="page-footer__decor" />
            </picture>
        </div>
    </div>
</footer>
</body>

</html>