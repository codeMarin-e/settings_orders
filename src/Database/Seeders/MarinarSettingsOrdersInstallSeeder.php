<?php
    namespace Marinar\SettingsOrders\Database\Seeders;

    use Illuminate\Database\Seeder;
    use Marinar\SettingsOrders\MarinarSettingsOrders;

    class MarinarSettingsOrdersInstallSeeder extends Seeder {

        use \Marinar\Marinar\Traits\MarinarSeedersTrait;

        public static function configure() {
            static::$packageName = 'marinar_settings_orders';
            static::$packageDir = MarinarSettingsOrders::getPackageMainDir();
        }

        public function run() {

            if(!in_array(env('APP_ENV'), ['dev', 'local'])) return;

            $this->autoInstall();

            $this->refComponents->info("Done!");
        }
    }
