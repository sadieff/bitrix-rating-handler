<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оценка");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/rating.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/rating.js');
$APPLICATION->SetAdditionalCSS('/reviews/reviewsUni.css');
$APPLICATION->AddHeadScript('/reviews/reviewsUni.js');
?>

    <div class="rating">
        <form class="rating-wrapper">
            <div class="rating-side">
                <div class="rating-side_title">
                    Оцените работу нашей компании<br> по 5-бальной шкале
                </div>
                <div class="rating-side_dsc">
                    чтобы получить<br> <a href="#">бонус</a>
                </div>
                <div class="rating-side_input">
                    <input type="text" name="name" placeholder="Ваше имя" required="required">
                </div>
                <div class="rating-side_input">
                    <input type="text" name="num" placeholder="Номер договора">
                </div>
                <div class="rating-side_input">
                    <input type="text" name="model" placeholder="Модель двери">
                </div>

            </div>
            <div class="rating-main">
                <div class="rating-main_item item-main">
                    <div class="rating-main_title title-bold">
                        Общая оценка
                    </div>
                    <div class="rating-main_input">
                        <label>
                            <input type="radio" name="main-rating" value="1">
                            <span><i>1</i></span>
                        </label>
                        <label>
                            <input type="radio" name="main-rating" value="2">
                            <span><i>2</i></span>
                        </label>
                        <label>
                            <input type="radio" name="main-rating" value="3">
                            <span><i>3</i></span>
                        </label>
                        <label>
                            <input type="radio" name="main-rating" value="4">
                            <span><i>4</i></span>
                        </label>
                        <label>
                            <input type="radio" name="main-rating" value="5">
                            <span><i>5</i></span>
                        </label>
                    </div>
                </div>
                <div class="rating-main_item">
                    <div class="rating-main_title">
                        Консультирование
                    </div>
                    <div class="rating-main_input">
                        <label>
                            <input type="radio" name="consultation-rating" value="1">
                            <span><i>1</i></span>
                        </label>
                        <label>
                            <input type="radio" name="consultation-rating" value="2">
                            <span><i>2</i></span>
                        </label>
                        <label>
                            <input type="radio" name="consultation-rating" value="3">
                            <span><i>3</i></span>
                        </label>
                        <label>
                            <input type="radio" name="consultation-rating" value="4">
                            <span><i>4</i></span>
                        </label>
                        <label>
                            <input type="radio" name="consultation-rating" value="5">
                            <span><i>5</i></span>
                        </label>
                    </div>
                </div>
                <div class="rating-main_item">
                    <div class="rating-main_title">
                        Замер, заключение договора
                    </div>
                    <div class="rating-main_input">
                        <label>
                            <input type="radio" name="dogovor" value="1">
                            <span><i>1</i></span>
                        </label>
                        <label>
                            <input type="radio" name="dogovor" value="2">
                            <span><i>2</i></span>
                        </label>
                        <label>
                            <input type="radio" name="dogovor" value="3">
                            <span><i>3</i></span>
                        </label>
                        <label>
                            <input type="radio" name="dogovor" value="4">
                            <span><i>4</i></span>
                        </label>
                        <label>
                            <input type="radio" name="dogovor" value="5">
                            <span><i>5</i></span>
                        </label>
                    </div>
                </div>
                <div class="rating-main_item">
                    <div class="rating-main_title">
                        Доставка
                    </div>
                    <div class="rating-main_input">
                        <label>
                            <input type="radio" name="delivery" value="1">
                            <span><i>1</i></span>
                        </label>
                        <label>
                            <input type="radio" name="delivery" value="2">
                            <span><i>2</i></span>
                        </label>
                        <label>
                            <input type="radio" name="delivery" value="3">
                            <span><i>3</i></span>
                        </label>
                        <label>
                            <input type="radio" name="delivery" value="4">
                            <span><i>4</i></span>
                        </label>
                        <label>
                            <input type="radio" name="delivery" value="5">
                            <span><i>5</i></span>
                        </label>
                    </div>
                </div>
                <div class="rating-main_item">
                    <div class="rating-main_title">
                        Монтаж
                    </div>
                    <div class="rating-main_input">
                        <label>
                            <input type="radio" name="mounting" value="1">
                            <span><i>1</i></span>
                        </label>
                        <label>
                            <input type="radio" name="mounting" value="2">
                            <span><i>2</i></span>
                        </label>
                        <label>
                            <input type="radio" name="mounting" value="3">
                            <span><i>3</i></span>
                        </label>
                        <label>
                            <input type="radio" name="mounting" value="4">
                            <span><i>4</i></span>
                        </label>
                        <label>
                            <input type="radio" name="mounting" value="5">
                            <span><i>5</i></span>
                        </label>
                    </div>
                </div>
                <div class="rating-main_textarea">
                    <textarea name="msg" placeholder="Опишите ваши впечатления" required="required"></textarea>
                </div>
                <div class="rating-files">
                    <div class="rating-files_image">
                        <input type="file" name="images[]">
                    </div>
                    <div class="rating-files_image">
                        <input type="file" name="images[]">
                    </div>
                    <div class="rating-files_image">
                        <input type="file" name="images[]">
                    </div>
                    <div class="rating-files_image">
                        <input type="file" name="images[]">
                    </div>
                    <div class="rating-files_image">
                        <input type="file" name="images[]">
                    </div>
                </div>
                <div class="rating-agreement">
                    <label>
                        <input type="checkbox" checked="" name="agreement" id="agreement">
                        <span>Я согласен(на) на размещение отзыва на сайте.</span>
                    </label>
                </div>
                <div class="rating-btn_box">
                    <button class="product-form__button-submit product-button-3d product-button-3d_size_lg product-button-3d_xs-small product-button-3d_fluid form_rating_submit" type="submit">
                        Отправить отзыв
                    </button>
                </div>
            </div>
        </form>
    </div> <!-- rating -->

    <div class="rating-hidden">
        <div class="rating-hidden_title">
            Оставьте отзыв с фотографией в одном из сервисов
        </div>
        <div class="rating-hidden_dsc">
            и получите ещё 400 руб. на счёт телефона!
        </div>
        <div class="rating-hidden_enum">
            <a class="rating-hidden_item">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/yandex.png" alt="">
                Яндекс карты
            </a>
            <a class="rating-hidden_item">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/google.png" alt="">
                Google Maps
            </a>
            <a class="rating-hidden_item">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/2gis.png" alt="">
                2GIS
            </a>
        </div>
    </div> <!-- rating-hidden -->

    <span data-modal-open="#rating-success" style="display: none;" id="rating-success-button"></span>
    <div class="modal fade" id="rating-success" tabindex="-1" role="dialog">
        <div class="modal__dialog modal-dialog" role="document">
            <div class="modal__content modal-content product-white-card">
                <div class="product-white-card__inner">
                    <a class="modal__button-close" href="#" data-dismiss="modal" aria-label="Close">
                        <svg class="icon__ic-close" width="12px" height="12px">
                            <use xlink:href="#ic-close"></use>
                        </svg>
                    </a>
                    <div class="modal__body modal-body">
                        <div>
                            <form class="product-form form-send" action="/local/ajax/rating-addphone.php">

                                <div class="product-form__title">
                                    Спасибо за ваш отзыв!
                                </div>
                                <div class="product-form__desc">
                                    примите бонус от нашей компании — 200 руб. на счет телефона
                                </div>


                                <div class="product-form__group">
                                    <div class="product-input product-input_icon-before form-element">
                                        <div class="product-input__container">
                                            <label class="product-input__icon-before lnr lnr-phone-handset">
                                            </label>
                                            <input type="text" data-sid="PHONE"  class="phone" name="phone" placeholder="Введите номер телефона"  required="required" />
                                        </div>
                                        <div class="product-input__message">
                                        </div>
                                    </div>
                                </div>

                                <div class="product-form__message">
                                </div>

                                <input type="hidden" name="element">

                                <div class="product-form__controls">
                                    <button class="product-form__button-submit product-button-3d product-button-3d_size_lg product-button-3d_xs-small product-button-3d_fluid form_button_submit" type="submit">
                                        Отправить
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>