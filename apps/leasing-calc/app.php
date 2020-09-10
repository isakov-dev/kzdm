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
    <v-nus :config="cost_config" :value="cost_value" @update="cost_value = $event" ></v-nus>
    <p style="margin-top:2rem">{{ cost_value }}</p>

    <v-nus :config="percent_config" :value="percent_value" @update="percent_value = $event" ></v-nus>
    <p style="margin-top:2rem">{{ percent_value }}</p>

    <v-nus :config="term_config" :value="term_value" @update="term_value = $event" ></v-nus>
    <p style="margin-top:2rem">{{ term_value }}</p>
</div>