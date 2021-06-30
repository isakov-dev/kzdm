$(document).ready(function () {

    let leasing = new Vue({
        el: '#leasing-app',
        components: {
            VueSlider: window['vue-slider-component']
        },
        data: {
            rate: 0.1159,
            cost_format: {
                decimal: ',',
                thousands: ' ',
                prefix: '',
                suffix: '',
                precision: 0,
                max: 50000000,
                min: 270000,
                masked: false
            },
            cost_value: 270000,
            percent_format: {
                decimal: ',',
                thousands: ' ',
                prefix: '',
                suffix: '',
                precision: 0,
                max: 49,
                min: 10,
                masked: false
            },
            percent_value: 10,
            term_format: {
                max: 60,
                min: 6,
            },
            term_value: 6,
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
                let initialFeePercent =  parseInt(this.percent_value);
                if (initialFeePercent !== 0) {
                    return Math.ceil(parseInt(this.cost_value) / 100 * initialFeePercent);
                } else {
                    return 0;
                }
            },
            summary: function() { //сумма, которая берется в лизинг
                return parseInt(this.cost_value) - this.advance;
            },
            leasing: function() { //сумма договора лизинга
                return Math.ceil(parseInt(this.term_value) * this.payment + this.advance);
            },
            payment: function() { //ежемесячный платеж
                let a = this.rate / 12 *
                    (this.summary * Math.pow(1 + this.rate / 12, parseInt(this.term_value)));
                let b = Math.pow(1 + this.rate / 12, parseInt(this.term_value)) - 1;
                return Math.ceil(a / b);
            },
            VAT: function() { //сумма НДС
                return Math.ceil(this.leasing / 120 * 20);
            },
            tax_profit: function() { //суммарная выгода
                return Math.ceil((this.leasing - this.VAT) * 0.2);
            },
        },
        watch: {
            cost_value: function(val) {
                if (val > this.cost_format.max)
                    this.cost_value = this.cost_format.max;
                else if (val < this.cost_format.min)
                    this.cost_value = this.cost_format.min;
            },
            percent_value: function(val) {
                if (val > this.percent_format.max)
                    this.percent_value = this.percent_format.max;
                else if (val < this.percent_format.min)
                    this.percent_value = this.percent_format.min;
            }
        },
    });

});