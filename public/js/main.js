'use strict';

{
    const num = new Intl.NumberFormat('ja-JP');
    const tbody = document.querySelector('tbody');
    const total_sum = document.getElementById('total_sum');
    const tax = document.getElementById('tax');
    const main_price = document.getElementById('main_price');
    const sub_price = document.getElementById('sub_price');
    const input_datas = document.querySelectorAll('.input_data');
    const discount = document.getElementById('discount');
    const tax_excluded = document.getElementById('tax_excluded');
    const consumption_tax = document.getElementById('consumption_tax');
    const tax_included = document.getElementById('tax_included');
    const butu_prices = document.querySelectorAll('.butu_price');
    const butu_click = document.getElementById('butu_click');
    const butu_total_1 = document.getElementById('butu_total_1');
    const good_num_1 = document.getElementById('good_num_1');
    const good_num_2 = document.getElementById('good_num_2');
    const good_num_3 = document.getElementById('good_num_3');
    const good_num_4 = document.getElementById('good_num_4');
    const good_num_5 = document.getElementById('good_num_5');
    const good_num_6 = document.getElementById('good_num_6');
    const good_num_7 = document.getElementById('good_num_7');
    const good_num_8 = document.getElementById('good_num_8');
    const good_num_9 = document.getElementById('good_num_9');
    const good_num_10 = document.getElementById('good_num_10');
    const good_num_11 = document.getElementById('good_num_11');
    const good_num_12 = document.getElementById('good_num_12');
    const good_num_13 = document.getElementById('good_num_13');

    butu_click.addEventListener('click', () => {
        let butu_total = 0;

        butu_prices.forEach(butu_price => {
            butu_total += Number(butu_price.textContent);
        });

        butu_total_1.textContent = butu_total;
        sub_price.textContent = butu_total;

        let total = 0;
        let sub_total = 0;
        let now_tax = 0;

        input_datas.forEach((input_data) => {
            sub_total += Number(input_data.value);
        });


        total = Number(main_price.textContent) + sub_total - Number(discount.value) + Number(sub_price.textContent);
        total_sum.textContent = num.format(total);
        now_tax = Math.round(total / 1.1 / 10);
        tax.textContent = num.format(now_tax);

        tax_excluded.textContent = num.format(total - now_tax);
        consumption_tax.textContent = num.format(now_tax);
        tax_included.textContent = num.format(total);
    });

    tbody.addEventListener('change', () => {
        let total = 0;
        let sub_total = 0;
        let now_tax = 0;

        input_datas.forEach((input_data) => {
            sub_total += Number(input_data.value);
        });


        total = Number(main_price.textContent) + sub_total - Number(discount.value) + Number(sub_price.textContent);
        total_sum.textContent = num.format(total);
        now_tax = Math.round(total / 1.1 / 10);
        tax.textContent = num.format(now_tax);

        tax_excluded.textContent = num.format(total - now_tax);
        consumption_tax.textContent = num.format(now_tax);
        tax_included.textContent = num.format(total);

    });

    good_num_1.addEventListener('change', () => {
        good_num_2.focus();
    });

    good_num_2.addEventListener('change', () => {
        good_num_3.focus();
    });

    good_num_3.addEventListener('change', () => {
        good_num_4.focus();
    });

    good_num_4.addEventListener('change', () => {
        good_num_5.focus();
    });

    good_num_5.addEventListener('change', () => {
        good_num_6.focus();
    });

    good_num_6.addEventListener('change', () => {
        good_num_7.focus();
    });

    good_num_7.addEventListener('change', () => {
        good_num_8.focus();
    });

    good_num_8.addEventListener('change', () => {
        good_num_9.focus();
    });

    good_num_9.addEventListener('change', () => {
        good_num_10.focus();
    });

    good_num_10.addEventListener('change', () => {
        good_num_11.focus();
    });

    good_num_11.addEventListener('change', () => {
        good_num_12.focus();
    });

    good_num_12.addEventListener('change', () => {
        good_num_13.focus();
    });
}
