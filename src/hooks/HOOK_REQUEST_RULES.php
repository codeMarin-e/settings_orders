<?php
$rules = $rules?? [];
$rules = array_merge([
    'currency' => ['nullable'],
    'vat' => ['nullable'],
    'vat_in_price' => ['boolean'],
    'vat_in_delivery' => ['boolean'],
    'vat_in_payment' => ['boolean'],
    'minus_quantities' => ['boolean'],
], $rules);
