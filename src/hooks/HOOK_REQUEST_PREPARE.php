<?php
$inputs = $inputs?? []; $inputBag = $inputBag?? 'settings';
$inputs[$inputBag]['vat'] = (float)str_replace(',', '.', $inputs[$inputBag]['vat']);
$inputs[$inputBag]['vat_in_price'] = isset($inputs[$inputBag]['vat_in_price']);
$inputs[$inputBag]['vat_in_delivery'] = isset($inputs[$inputBag]['vat_in_delivery']);
$inputs[$inputBag]['vat_in_payment'] = isset($inputs[$inputBag]['vat_in_payment']);
$inputs[$inputBag]['minus_quantities'] = isset($inputs[$inputBag]['minus_quantities']);
