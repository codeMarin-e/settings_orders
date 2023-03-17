<?php
	return [
		'install' => [
            'php artisan db:seed --class="\Marinar\SettingsOrders\Database\Seeders\MarinarSettingsOrdersInstallSeeder"',
		],
		'remove' => [
            'php artisan db:seed --class="\Marinar\SettingsOrders\Database\Seeders\MarinarSettingsOrdersRemoveSeeder"',
        ]
	];
