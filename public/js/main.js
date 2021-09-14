'use strict';

{
    let sum_total = 0;

    const sums = document.querySelectorAll('.sum');
    sums.forEach(sum => {
        sum_total += Number(sum.textContent);
    });

    const sum = document.getElementById('sum');
    sum.textContent = sum_total;

    const tax = document.getElementById('tax');
    tax.textContent = Math.round(sum_total/10);

    let sub_total = 0;

    const sum_1s = document.querySelectorAll('.sum_1');
    sum_1s.forEach(sum_1 => {
        sum_1.addEventListener('change', () => {
            sub_total = 0;
            sum_1s.forEach(sum_1 => {
                sub_total += Number(sum_1.value);
            });
            sum_total = 0;
            sums.forEach(sum => {
                sum_total += Number(sum.textContent);
            });
            sum_total += sub_total;
            sum.textContent = sum_total;
            tax.textContent = 0;
            tax.textContent = Math.round(sum_total/10);
            max_total.textContent = sum.textContent;
            excluded_tax.textContent = Math.round(Number(max_total.textContent/1.1));
            consumption_tax.textContent = Number(max_total.textContent) - Number(excluded_tax.textContent);
        });
    });

    let max_total = document.getElementById('max_total');
    max_total.textContent = sum.textContent;
    let excluded_tax = document.getElementById('excluded_tax');
    let consumption_tax = document.getElementById('consumption_tax');

    const discount = document.getElementById('discount');
    discount.addEventListener('change', () => {
        max_total.textContent = Number(max_total.textContent) - Number(discount.value);
        excluded_tax.textContent = Math.round(Number(max_total.textContent/1.1));
        consumption_tax.textContent = Number(max_total.textContent) - Number(excluded_tax.textContent);
    });

    excluded_tax.textContent = Math.round(Number(max_total.textContent/1.1));
    consumption_tax.textContent = Number(max_total.textContent) - Number(excluded_tax.textContent);
}
