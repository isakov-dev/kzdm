$(document).ready(function () {

    let leasing = new Vue({
        el: '#leasing-app',
        data: {
            cost_config: {
                step: 1,
                connect: 'lower',
                range: {
                    'min': 270000,
                    'max': 50000000
                }
            },
            cost_value: [270000],
            percent_config: {
                step: 1,
                connect: 'lower',
                range: {
                    'min': 10,
                    'max': 49
                }
            },
            percent_value: [19],
            term_config: {
                step: 1,
                connect: 'lower',
                range: {
                    'min': 12,
                    'max': 60
                }
            },
            term_value: [22]
        },
        methods: {
            formatPrice(price) {
                return parseFloat(price).toLocaleString('ru-RU');
            },
            declOfNum(n, text_forms) {
                n = Math.abs(n) % 100;
                let n1 = n % 10;
                if (n > 10 && n < 20) return text_forms[2];
                if (n1 > 1 && n1 < 5) return text_forms[1];
                if (n1 == 1) return text_forms[0];
                return text_forms[2];
            }
        },
        computed: {
            initialFee() {
                let initialFeePercent =  parseInt(this.percent_value[0]);
                if (initialFeePercent !== 0) {
                    return Math.ceil(parseFloat(this.cost_value[0]) / 100 * initialFeePercent);
                } else {
                    return 0;
                }
            }
        },
    });

});