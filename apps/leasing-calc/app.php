<?php
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/nouislider.min.css');
\Bitrix\Main\Page\Asset::getInstance()->addCss('/apps/leasing-calc/style.css');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/nouislider.min.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/vue/dist/vue.js");
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/vue-nouislider.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs('/apps/leasing-calc/script.js');
?>

<h2>Предварительный расчет условий лизинга</h2>

<div id="leasing-app">
    <div class="container">
        <div class="row">
            <div class="col col--md-6">
                <div class="range">
                    <div class="range__info">
                        <div class="range__title">
                            Стоимость техники
                        </div>
                        <div class="range__value">
                            {{ formatPrice(cost_value[0]) }}&nbsp;<span class="range__rub">₽</span>
                        </div>
                    </div>
                    <v-nus :config="cost_config" :value="cost_value" @update="cost_value = $event"
                           class="range__input"></v-nus>
                    <div class="range__boundaries">
                        <span>{{ formatPrice(cost_config.range['min']) }}&nbsp;₽</span>
                        <span>{{ formatPrice(cost_config.range['max']) }}&nbsp;₽</span>
                    </div>
                </div>
                <div class="range">
                    <div class="range__info">
                        <div class="range__title">
                            Первоначальный взнос
                        </div>
                        <div class="range__value">
                            <span class="range__rub">{{ formatPrice(percent_value[0]) }}% /</span>
                            {{ formatPrice(initialFee) }}&nbsp;<span class="range__rub">₽</span>
                        </div>
                    </div>
                    <v-nus :config="percent_config" :value="percent_value" @update="percent_value = $event"
                           class="range__input"></v-nus>
                    <div class="range__boundaries">
                        <span>{{ formatPrice(percent_config.range['min']) }}&nbsp;%</span>
                        <span>{{ formatPrice(percent_config.range['max']) }}&nbsp;%</span>
                    </div>
                </div>
                <div class="range">
                    <div class="range__info">
                        <div class="range__title">
                            Срок
                        </div>
                        <div class="range__value">
                            {{ formatPrice(term_value[0]) }}&nbsp;
                            {{ declOfNum(Number(term_value[0]), ['месяц', 'месяца', 'месяцев']) }}
                        </div>
                    </div>
                    <v-nus :config="term_config" :value="term_value" @update="term_value = $event"
                           class="range__input"></v-nus>
                    <div class="range__boundaries">
                        <span>
                            {{ formatPrice(term_config.range['min']) }}&nbsp;
                            {{ declOfNum(Number(term_config.range['min']), ['месяц', 'месяца', 'месяцев']) }}
                        </span>
                        <span>
                            {{ formatPrice(term_config.range['max']) }}&nbsp;
                            {{ declOfNum(Number(term_config.range['max']), ['месяц', 'месяца', 'месяцев']) }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col col--md-6">
                <div class="leasing-result">
                    <div class="leasing-result__title h3">
                        Результаты расчета:
                    </div>
                    <div class="leasing-result__line leasing-result__line_small-margin">
                        <div class="leasing-result__monthly-desc">
                            Сумма договора лизинга:
                        </div>
                        <div class="leasing-result__monthly-sum">
                            596 196&nbsp;₽
                        </div>
                    </div>
                    <div class="leasing-result__line">
                        <div class="leasing-result__contract-desc">
                            Сумма договора лизинга:
                        </div>
                        <div class="leasing-result__contract-sum">
                            596 196&nbsp;₽
                        </div>
                    </div>
                    <div class="leasing-result__line">
                        <div class="leasing-result__profit-desc">
                            Суммарная выгода до:
                        </div>
                        <div class="leasing-result__profit-sum">
                            596 196&nbsp;₽
                        </div>
                    </div>
                    <div class="leasing-result__submit-line">
                        <div class="leasing-result__policy">
                            Расчет является примерным, точная сумма ежемесячного
                            платежа рассчитывается при формировании коммерческого
                            предложения менеджером.
                        </div>
                        <a href="#" class="leasing-result__submit btn btn_box btn_orange">
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>