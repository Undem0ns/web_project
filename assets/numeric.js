"use strict";

function NumericInput(inp, locale) {
    var numericKeys = '0123456789';

    // restricts input to numeric keys 0-9
    inp.addEventListener('keypress', function (e) {
        var event = e || window.event;
        var target = event.target;

        if (event.charCode == 0) {
            return;
        }

        if (-1 == numericKeys.indexOf(event.key)) {
            // Could notify the user that 0-9 is only acceptable input.
            event.preventDefault();
            return;
        }
    });

    // add the thousands separator when the user blurs
    inp.addEventListener('blur', function (e) {
        var event = e || window.event;
        var target = event.target;

        var tmp = target.value.replace(/,/g, '');
        var val = Number(tmp).toLocaleString(locale);

        if (tmp == '') {
            target.value = '';
        } else {
            target.value = val;
        }
    });

    // strip the thousands separator when the user puts the input in focus.
    inp.addEventListener('focus', function (e) {
        var event = e || window.event;
        var target = event.target;
        var val = target.value.replace(/[,.]/g, '');

        target.value = val;
    });
}

var budget_province_plan = new NumericInput(document.getElementById('budget_province_plan', 'de-DE'));
var budget_province_receive = new NumericInput(document.getElementById('budget_province_receive', 'de-DE'));
var budget_province_use = new NumericInput(document.getElementById('budget_province_use', 'de-DE'));
var budget_department_plan = new NumericInput(document.getElementById('budget_department_plan', 'de-DE'));
var budget_department_receive = new NumericInput(document.getElementById('budget_department_receive', 'de-DE'));
var budget_department_use = new NumericInput(document.getElementById('budget_department_use', 'de-DE'));
var budget_local_plan = new NumericInput(document.getElementById('budget_local_plan', 'de-DE'));
var budget_local_receive = new NumericInput(document.getElementById('budget_local_receive', 'de-DE'));
var budget_local_use = new NumericInput(document.getElementById('budget_local_use', 'de-DE'));
var budget_private_plan = new NumericInput(document.getElementById('budget_private_plan', 'de-DE'));
var budget_private_receive = new NumericInput(document.getElementById('budget_private_receive', 'de-DE'));
var budget_private_use = new NumericInput(document.getElementById('budget_private_use', 'de-DE'));
