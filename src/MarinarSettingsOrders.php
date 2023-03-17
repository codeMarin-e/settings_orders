<?php
namespace Marinar\SettingsOrders;

use Marinar\SettingsOrders\Database\Seeders\MarinarSettingsOrdersInstallSeeder;

class MarinarSettingsOrders {

    public static function getPackageMainDir() {
        return __DIR__;
    }

    public static function injects() {
        return MarinarSettingsOrdersInstallSeeder::class;
    }
}
