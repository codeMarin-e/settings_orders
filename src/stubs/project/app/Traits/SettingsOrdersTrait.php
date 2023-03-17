<?php
    namespace App\Traits;

    trait SettingsOrdersTrait {

        public static function bootSettingsOrdersTrait() {
            static::$addonFillable[] = 'currency';
            static::$addonFillable[] = 'vat';
            static::$addonFillable[] = 'vat_in_price';
            static::$addonFillable[] = 'vat_in_delivery';
            static::$addonFillable[] = 'vat_in_payment';
            static::$addonFillable[] = 'minus_quantities';
        }
    }
