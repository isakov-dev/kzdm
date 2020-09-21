<?php
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/vue-slider-component.css');
\Bitrix\Main\Page\Asset::getInstance()->addCss('/apps/leasing-calc/style.css');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/nouislider.min.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/vue.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/vue-slider-component.umd.min.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/v-money.min.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs('/apps/leasing-calc/script.js');
?>

<h2 class="leasing-title">Предварительный расчет условий лизинга</h2>

<div id="leasing-app" v-cloak>
    <div class="container">
        <div class="row">
            <div class="col col--lg-6 col--md-5">
                <div class="range">
                    <div class="range__info">
                        <div class="range__title">
                            Стоимость техники
                        </div>
                        <div class="range__value">
                            <money v-model="cost_value" v-bind="cost_format" class="range__cost-input"></money>
                            &nbsp;<span class="range__rub">₽</span>
                        </div>
                    </div>
                    <vue-slider v-model="cost_value" :min="cost_format.min" :max="cost_format.max"
                                tooltip="none" height="2px"></vue-slider>
                    <div class="range__boundaries">
                        <span>{{ formatPrice(cost_format.min) }}&nbsp;₽</span>
                        <span>{{ formatPrice(cost_format.max) }}&nbsp;₽</span>
                    </div>
                </div>
                <div class="range">
                    <div class="range__info">
                        <div class="range__title">
                            Первоначальный взнос
                        </div>
                        <div class="range__value">
                            <span class="range__rub">
                                <money v-model="percent_value" v-bind="percent_format" class="range__percent-input"></money>% /
                            </span>
                            {{ formatPrice(advance) }}&nbsp;<span class="range__rub">₽</span>
                        </div>
                    </div>
                    <vue-slider v-model="percent_value" :min="percent_format.min" :max="percent_format.max"
                                tooltip="none" height="2px"></vue-slider>
                    <div class="range__boundaries">
                        <span>{{ formatPrice(percent_format.min) }}&nbsp;%</span>
                        <span>{{ formatPrice(percent_format.max) }}&nbsp;%</span>
                    </div>
                </div>
                <div class="range">
                    <div class="range__info">
                        <div class="range__title">
                            Срок
                        </div>
                        <div class="range__value">
                            {{ formatPrice(term_value) }}&nbsp;
                            {{ declOfNum(Number(term_value), ['месяц', 'месяца', 'месяцев']) }}
                        </div>
                    </div>
                    <vue-slider v-model="term_value" :min="term_format.min" :max="term_format.max"
                                tooltip="none" height="2px"></vue-slider>
                    <div class="range__boundaries">
                        <span>
                            {{ formatPrice(term_format.min) }}&nbsp;
                            {{ declOfNum(Number(term_format.min), ['месяц', 'месяца', 'месяцев']) }}
                        </span>
                        <span>
                            {{ formatPrice(term_format.max) }}&nbsp;
                            {{ declOfNum(Number(term_format.max), ['месяц', 'месяца', 'месяцев']) }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col col--lg-6 col--md-7">
                <div class="leasing-result">
                    <div class="leasing-result__title h3">
                        Результаты расчета:
                    </div>
                    <div class="leasing-result__line leasing-result__line_small-margin">
                        <div class="leasing-result__monthly-desc">
                            Ежемесячный платеж от:
                        </div>
                        <div class="leasing-result__monthly-sum">
                            {{ formatPrice(payment) }}&nbsp;₽
                        </div>
                    </div>
                    <div class="leasing-result__line">
                        <div class="leasing-result__contract-desc">
                            Сумма договора лизинга:
                        </div>
                        <div class="leasing-result__contract-sum">
                            {{ formatPrice(leasing) }}&nbsp;₽
                        </div>
                    </div>
                    <div class="leasing-result__line">
                        <div class="leasing-result__profit-desc">
                            Суммарная выгода до:
                            <div class="leasing-result__profit">
                                <img src="<?=SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/info-icon.svg'?>"
                                     alt="" class="leasing-result__profit-icon">
                                <span class="leasing-result__profit-popup">
                                    {{ formatPrice(VAT) }} - зачет 20% НДС для компаний на основной
                                    системе налогообложения.
                                    {{ formatPrice(tax_profit) }} - Экономия по налогу на прибыль для компаний
                                    на основной системе налогообложения
                                </span>
                            </div>
                        </div>
                        <div class="leasing-result__profit-sum">
                            {{ formatPrice(tax_profit + VAT) }}&nbsp;₽
                        </div>
                    </div>
                    <div class="leasing-result__submit-line">
                        <div class="leasing-result__policy">
                            Расчет является примерным, точная сумма ежемесячного
                            платежа рассчитывается при формировании коммерческого
                            предложения менеджером.
                        </div>
                        <a data-src="#leasing" href="javascript:;" v-on:click="submit()"
                           class="leasing-result__submit btn btn_box btn_orange">
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>