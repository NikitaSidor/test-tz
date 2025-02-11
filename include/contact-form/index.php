<section class="contact-form">
    <div class="contact-form__content">
        <div class="contact-form__top">
            <h2 class="contact-form__heading">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR . "include/contact-form/title.php",
                    array(),
                    array("MODE" => "text",
                        "NAME" => "Загаловок с лева формы обратной связи",)
                );
                ?>
            </h2>
        </div>
        <form method="POST" class="contact-form__form">
            <h3 class="contact-form__form-heading">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR . "include/contact-form/title_h3.php",
                    array(),
                    array(
                        "NAME" => "Подзагаловок по центру формы обратной связи",
                        "MODE" => "text"
                    )
                );
                ?>
            </h3>
            <div class="contact-form__form-text">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR . "include/contact-form/form-text.php",
                    array(),
                    array(
                        "MODE" => "text",
                        "NAME" => "Текст формы обратной связи"
                    )
                );
                ?>
            </div>
            <div class="contact-form__form-fields">
                <div class="contact-form__form-field">
                    <div class="contact-form__form-select" data-placeholder="Тема обращения">
                        <button class="contact-form__form-select-btn" type="button"><span
                                    class="contact-form__form-select-btn-text js-btn-text"> </span></button>
                        <div class="contact-form__form-select-dropdown">
                            <div class="contact-form__form-select-dropdown-inner">
                                <ul class="contact-form__form-select-dropdown-list">
                                    <li class="contact-form__form-select-dropdown-list-item">
                                        <label class="contact-form__form-select-choice">
                                            <input type="radio"
                                                   name="theme"
                                                   class="contact-form__form-select-choice-input"
                                                   value="Тема 1">
                                            <span class="contact-form__form-select-choice-text"> Тема 1</span>
                                        </label>
                                    </li>
                                    <li class="contact-form__form-select-dropdown-list-item">
                                        <label class="contact-form__form-select-choice">
                                            <input type="radio"
                                                   name="theme"
                                                   class="contact-form__form-select-choice-input"
                                                   value="Тема 2">
                                            <span class="contact-form__form-select-choice-text"> Тема 2 </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form__form-field">
                    <div class="contact-form__form-input-wrapper">
                        <input type="text" class="contact-form__form-text-input" placeholder="Сообщение"
                               name="message">
                    </div>
                </div>
                <div class="contact-form__form-field">
                    <div class="contact-form__form-input-wrapper">
                        <input type="text" class="contact-form__form-text-input" placeholder="Имя" name="name">
                    </div>
                </div>
                <div class="contact-form__form-field">
                    <div class="contact-form__form-input-wrapper">
                        <input type="email" class="contact-form__form-text-input" placeholder="Email" name="email">
                    </div>
                </div>
            </div>
            <div class="contact-form__form-policy">
                <label class="contact-form__form-policy-checkbox"> <input type="checkbox" name="policy" value="Y"
                                                                          required=""
                                                                          class="contact-form__form-checkbox-input">
                    <span class="contact-form__form-checkbox-mark"> </span> <span
                            class="contact-form__form-checkbox-text">
        Даю согласие на обработку <a href="#">персональных данных</a> </span> </label>
            </div>
            <button class="contact-form__form-submit" type="submit">
                Отправить
            </button>
        </form>
    </div>
</section>