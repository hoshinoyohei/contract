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
}
