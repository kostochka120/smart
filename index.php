<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

\Bitrix\Main\Page\Asset::getInstance()->addCss('/css/common_style.min.css');

global $meta_arr;

$contacts = CIBlockElement::GetList([], ['IBLOCK_ID' => 112, 'CODE' => 'contacts'], false, false, ['IBLOCK_ID', 'ID', 'PROPERTY_*']);
while($elem = $contacts->GetNextElement()){
	$meta = $elem->GetProperties();
    $meta_arr['EMAIL'] = $meta['EMAIL']['VALUE'];
    $meta_arr['PHONE'] = $meta['PHONE']['VALUE'];
    $meta_arr['ADRESS'] = $meta['ADRESS']['VALUE'];
    $meta_arr['WORKING_TIME'] = $meta['WORKING_TIME']['VALUE'];
}

?>
	<header class="header">
        <div class="wrapper">
            <div class="flex-container">
                <div class="logo-container">
                        <div class="logo">
                            <img src="logo-black.svg">
                        </div>
                        <div class="site-name">СТОЛЕШНИЦЫ МАТРАСЫ</div>
                </div>
                <div class="header-contact-container">
                    <div class="phone-btn">
                        <img src="image/phone-black.svg">
                        <div class="phone"><?echo $meta_arr['PHONE']?></div>
                    </div>
                    <div class="form-btn">Сделать заказ</div>
                </div>
            </div>
            <div class="nav-container"></div>
        </div>
	</header>
    <header class="header header-scroller">
        <div class="wrapper">
            <div class="flex-container">
                <div class="logo-container">
                        <div class="logo">
                            <img src="logo-black.svg">
                        </div>
                        <div class="site-name">СТОЛЕШНИЦЫ МАТРАСЫ</div>
                </div>
                <div class="header-contact-container">
                    <div class="phone-btn">
                        <img src="image/phone-black.svg">
                        <div class="phone"><?echo $meta_arr['PHONE']?></div>
                    </div>
                    <div class="form-btn">Сделать заказ</div>
                </div>
            </div>
            <div class="nav-container"></div>
        </div>
	</header>
        <div class="slider"></div>

        <div class="description">
            <div class="wrapper">
        <?
        $APPLICATION->IncludeComponent("bitrix:news.detail","smart_detail",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "USE_SHARE" => "Y",
            "SHARE_HIDE" => "N",
            "SHARE_TEMPLATE" => "",
            "SHARE_HANDLERS" => array("delicious"),
            "SHARE_SHORTEN_URL_LOGIN" => "",
            "SHARE_SHORTEN_URL_KEY" => "",
            "AJAX_MODE" => "Y",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_ID" => 113,
            "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
            "ELEMENT_CODE" => "matras_po_pravilnoy_cene",
            "CHECK_DATES" => "Y",
            "FIELD_CODE" => Array("ID"),
            "PROPERTY_CODE" => Array("DESCRIPTION"),
            "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
            "DETAIL_URL" => "",
            "SET_TITLE" => "Y",
            "SET_CANONICAL_URL" => "Y",
            "SET_BROWSER_TITLE" => "Y",
            "BROWSER_TITLE" => "-",
            "SET_META_KEYWORDS" => "Y",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "Y",
            "META_DESCRIPTION" => "-",
            "SET_STATUS_404" => "Y",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "USE_PERMISSIONS" => "Y",
            "GROUP_PERMISSIONS" => Array("1"),
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "Y",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Страница",
            "PAGER_TEMPLATE" => "",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "STRICT_SECTION_CHECK" => "Y",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N"
            )
        );?>
        </div>
        </div>

        <div class="catalog">
            <div class="wrapper">
                <h2 class="catalog-header">Матрасы</h2>
                <?
                $GLOBALS['arrFilter']=array("IBLOCK_SECTION_ID" => 1256);

                $APPLICATION->IncludeComponent("bitrix:news.list","smart_landing",Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => 110,
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "arrFilter",
                    "FIELD_CODE" => Array("ID"),
                    "PROPERTY_CODE" => Array("PRICE"),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => ""
                )
            );
                ?>
            </div>
        </div>
        <div class="catalog">
            <div class="wrapper">
                <h2 class="catalog-header">Кровати</h2>
                <?
                $GLOBALS['arrFilter']=array("IBLOCK_SECTION_ID" => 1257);

                $APPLICATION->IncludeComponent(
                    'bitrix:news.list',
                    'smart_landing',
                    array(
                        'IBLOCK_ID' => 110,
                        'FILTER_NAME' => 'arrFilter',
                    ),
                );
                // while($elem = $arr->GetNextElement()){
                //     var_dump($elem);
                // }
                ?>
            </div>
        </div>
        <div class="catalog">
            <div class="wrapper">
                <h2 class="catalog-header">Товары для сна</h2>
                <?
                $GLOBALS['arrFilter']=array("IBLOCK_SECTION_ID" => 1258);

                $APPLICATION->IncludeComponent(
                    'bitrix:news.list',
                    'smart_landing',
                    array(
                        'IBLOCK_ID' => 110,
                        'FILTER_NAME' => 'arrFilter',
                    ),
                );
                // while($elem = $arr->GetNextElement()){
                //     var_dump($elem);
                // }
                ?>
            </div>
        </div>
        
        <div class="description-form"></div>
        <div class="catalog"></div>
        <div class="description-brands">
            <div class="brand">
                <div class="brand-text">
                    <div class="wrapper">
                    <?

                    $APPLICATION->IncludeComponent("bitrix:news.list","smart_landing_brands",Array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "news",
                        "IBLOCK_ID" => 111,
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "DESC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => Array("ID"),
                        "PROPERTY_CODE" => Array("DESCRIPTION"),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => ""
                    )
                );
                    ?>
                </div>
            </div>
        </div>
        <div class="catalog">
            <div class="wrapper">
                <h2 class="catalog-header">Ручки, крючки, ящики, выдвижные корзины, механизмы и т.д.</h2>
                <?
                $GLOBALS['arrFilter']=array("IBLOCK_SECTION_ID" => 1259);

                $APPLICATION->IncludeComponent(
                    'bitrix:news.list',
                    'smart_landing',
                    array(
                        'IBLOCK_ID' => 110,
                        'FILTER_NAME' => 'arrFilter',
                    ),
                );
                // while($elem = $arr->GetNextElement()){
                //     var_dump($elem);
                // }
                ?>
            </div>
        </div>


        <div class="benefits">
            <div class="wrapper">
                <h2>Почему имеет смысл обратиться именно к нам?</h2>
                <div class="benefits-container">
                    <div class="benefit">
                        <img src="image/chat.svg">
                        <p>Клиентский сервис</p>
                        <p>Расскажем о товаре, поможем с выбором</p>
                    </div>
                    <div class="benefit">
                        <img src="image/layers.svg">
                        <p>Большой ассортимент</p>
                        <p>У нас вы найдете именно то, что нужно, а не что-то похожее</p>
                    </div>
                    <div class="benefit">
                        <img src="image/bonus.svg">
                        <p>Бонусы и скидки</p>
                        <p>Мы регулярно проводим акции и распродажи</p>
                    </div>
                    <div class="benefit">
                        <img src="image/wallet.svg">
                        <p>Лучшая цена</p>
                        <p>Большинство мебельных фабрик Санкт-Петербурга это наши покупатели</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog"></div>
        <div class="contacts">
            <div class="wrapper">
                <h2>Контакты</h2>
                <div class="contact-container">
                    <div class="contact-text-container">
                        <div class="contact-text-flex-container">
                            <div class="column">
                                <div class="adress-container">
                                    <p>Адрес</p>
                                    <span><?echo $meta_arr['ADRESS']?></span>
                                </div>
                                <div class="email-container">
                                    <p>E-mail</p>
                                    <span><?echo $meta_arr['EMAIL']?></span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="phone-container">
                                    <p>Телефон</p>
                                    <span><?echo $meta_arr['PHONE']?></span>
                                </div>
                                <div class="work-container">
                                    <p>Режим работы</p>
                                    <span>
                                        <?echo $meta_arr['WORKING_TIME']?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="contact-formBtn-flex-container">
                            <div class="logo-container">
                                <div class="logo">
                                    <img src="logo-black.svg">
                                </div>
                                <div class="logo-name">Шоу-рум и пункт оформления заказов ООО «СМАРТ СПб»</div>
                            </div>
                            <div class="form-btn">Написать сообщение</div>
                        </div>
                    </div>
                    <div class="contact-map-container">
                        <img src="image/map.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="form">
            <div calss="wrapper">
                <div class="form-container">
                    <h2>Остались вопросы?</h2>
                    <p>Оставьте заявку и наш менеджер свяжется с Вами в ближайшее время</p>
                    <form class="footer-form">
                        <div class="input-container">
                            <div class="name-container">
                                <label for="name-input">Как вас зовут?<span>*</span></label>
                                <input id="name-input" name="NAME" type="text" placeholder="Иванов Иван Иванович">
                            </div>
                            <div class="phone-container">
                                <label for="phone-input">Ваш номер телефона<span>*</span></label>
                                <input id="phone-input" name="PHONE" type="text" placeholder="+ 7 (987) 654-32-10">
                            </div>
                        </div>
                        <div class="conf">
                            <input type="checkbox">
                            <span>Я согласен с <a href="#">политикой конфиденциальности<a></span>
                        </div>
                        <input type="submit" value="Оставить заявку">
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="wrapper">
                <div class="flex-container">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="logo.svg">
                        </div>
                        <div class="footer-contacts-container">
                            <div class="footer-email">
                                <img width="14px" height="14px" src="image/email.svg">
                                <?echo $meta_arr['EMAIL']?>
                            </div>
                            <div class="footer-phone">
                                <img width="14px" height="14px" src="image/phone.svg">
                                <?echo $meta_arr['PHONE']?>
                            </div>
                        </div>
                    </div>
                    <div class="telegram-button">
                        <span>Подписаться на рассылку</span>
                        <img src="image/telegram.svg">
                    </div>
                </div>
                <div class="footer-copy-container">
                    <div class="copy">2022 © Магазин мебельной фурнитуры "СМАРТ"</div>
                    <div class="poly"><a href="#">Политика обработки персональных данных</a></div>
                    <div class="buy-type">
                        <span>Принимает к оплате:</span>
                        <img src="image/pay-icon.svg">
                    </div>
                </div>
            </div>
        </footer>




<script src="/js/common_script.js" defer></script>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>