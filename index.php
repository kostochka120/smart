<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

\Bitrix\Main\Page\Asset::getInstance()->addCss('/css/common_style.min.css');
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
                <div class="contact-container">
                    <div class="phone-btn">
                        <img src="#">
                        <div class="phone">+7 812-611-12-16</div>
                    </div>
                    <div class="form-btn"></div>
                </div>
            </div>
            <div class="nav-container"></div>
        </div>
	</header>
        <div class="slider"></div>
        <div class="description"></div>
        <div class="catalog">
            <div class="wrapper">
                <div class="catalog-flex-container">
                <?
                $GLOBALS['arrFilter']=array("SECTION_ID" => 1256);

                $APPLICATION->IncludeComponent(
                    'bitrix:news.list',
                    '',
                    array(
                        'IBLOCK_ID' => 110,
                        'FILTER_NAME' => $GLOBALS['arrFilter'],
                    ),
                );
                // while($elem = $arr->GetNextElement()){
                //     var_dump($elem);
                // }
                ?>
                </div>
            </div>
        </div>
        
        <div class="description-form"></div>
        <div class="catalog"></div>
        <div class="description-brands">
            <div class="brand">
                <div class="brand-text">
                    <div class="wrapper">
                    <div class="catalog-flex-container">
                    <?
                    $APPLICATION->IncludeComponent(
                        'bitrix:news.list',
                        '',
                        array(
                            'IBLOCK_ID' => 111,
                        ),
                    );
                    // while($elem = $arr->GetNextElement()){
                    //     var_dump($elem);
                    // }
                    ?>
                    </div>
                </div>
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
                    <div class="column">
                        <div class="adress-container">
                            <p>Адрес</p>
                            <span>г. Санкт-Петербург, пр. Славы 52/1</span>
                        </div>
                        <div class="email-container">
                            <p>E-mail</p>
                            <span>slava52@smart812.ru</span>
                        </div>
                    </div>
                    <div class="column">
                        <div class="phone-container">
                            <p>Телефон</p>
                            <span>+7 812 611-12-16</span>
                        </div>
                        <div class="work-container">
                            <p>Режим работы</p>
                            <span>
                                <p>Пн-Сб: 10:00-20:00</p>
                                <p>Вс: выходной</p>
                            </span>
                        </div>
                    </div>
                    <div class="contact-footer">
                        <div class="logo-container">
                            <img src="#">
                            <p>Шоу-рум и пункт оформления заказов ООО «СМАРТ СПб»</p>
                        </div>
                        <div class="form-button">Написать сообщение</div>
                    </div>
                </div>
            </div>
            <div class="form"></div>
        </div>




<script src="/js/common_script.js" defer></script>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>