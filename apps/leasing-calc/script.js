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
        }
    });

});