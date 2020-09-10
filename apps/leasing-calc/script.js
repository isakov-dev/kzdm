$(document).ready(function () {

    let leasing = new Vue({
        el: '#leasing-app',
        data: {
            rate: 0.1159,
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
            },
            submit() {
                $.fancybox.open({
                    src  : '#leasing',
                    opts : {
                        baseClass: "phone-popup",
                        touch: false,
                        animationEffect: false,
                        beforeShow: function (instance, current) {
                            $('.header').addClass('deep');
                        },
                        beforeClose: function (instance, current) {
                            $('.header').removeClass('deep');
                        }
                    }
                });

            },
        },
        computed: {
            advance: function() { //аванс
                let initialFeePercent =  parseInt(this.percent_value[0]);
                if (initialFeePercent !== 0) {
                    return Math.ceil(parseInt(this.cost_value[0]) / 100 * initialFeePercent);
                } else {
                    return 0;
                }
            },
            summary: function() { //сумма, которая берется в лизинг
                return parseInt(this.cost_value[0]) - this.advance;
            },
            leasing: function() { //сумма договора лизинга
                return Math.ceil(parseInt(this.term_value[0]) * this.payment + this.advance);
            },
            payment: function() { //ежемесячный платеж
                let a = this.rate / 12 *
                    (this.summary * Math.pow(1 + this.rate / 12, parseInt(this.term_value[0])));
                let b = Math.pow(1 + this.rate / 12, parseInt(this.term_value[0])) - 1;
                return Math.ceil(a / b);
            },
            VAT: function() { //сумма НДС
                return Math.ceil(this.leasing / 120 * 20);
            },
            tax_profit: function() { //суммарная выгода
                return Math.ceil((this.leasing - this.VAT) * 0.2);
            },
        },
    });

});