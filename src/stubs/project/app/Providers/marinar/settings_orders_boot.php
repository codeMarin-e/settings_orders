<?php
if(!\Illuminate\Support\Facades\Schema::hasTable('sites')) return;
if(!($chSite = app()->make("Site"))) return;
app()->make("Site")->config = [
    'app.MINUS_QUANTITIES' => (bool)$chSite->minus_quantities,
    'app.CURRENCY' => $chSite->currency,
    'app.VAT' => (float)$chSite->vat,
    'app.VAT_IN_PRICE' => (bool)$chSite->vat_in_price,
    'app.VAT_IN_DELIVERY' => (bool)$chSite->vat_in_delivery,
    'app.VAT_IN_PAYMENT' => (bool)$chSite->vat_in_payment,
];
