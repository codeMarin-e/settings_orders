<?php
return [
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'app', 'Models', 'Site.php']) => [
        "// @HOOK_TRAITS" => "\tuse \\App\\Traits\\SettingsOrdersTrait; \n",
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'config','marinar.php']) => [
        "// @HOOK_CONFIGS_ADDONS" => "\t\t\\Marinar\\SettingsOrders\\MarinarSettingsOrders::class, \n",
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'app', 'Http', 'Requests', 'Admin', 'SettingsRequest.php']) => [
        "// @HOOK_REQUEST_RULES" => implode(DIRECTORY_SEPARATOR, [__DIR__, 'HOOK_REQUEST_RULES.php']),
        "// @HOOK_REQUEST_PREPARE" => implode(DIRECTORY_SEPARATOR, [__DIR__, 'HOOK_REQUEST_PREPARE.php']),
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'resources', 'views', 'admin', 'settings', 'settings.blade.php']) => [
        "{{-- @HOOK_AFTER_ADDRESS --}}" => implode(DIRECTORY_SEPARATOR, [__DIR__, 'HOOK_AFTER_ADDRESS.blade.php']),
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'lang', 'en', 'admin', 'settings', 'settings.php']) => [
        "// @HOOK_LANG" => implode(DIRECTORY_SEPARATOR, [__DIR__, 'HOOK_SETTINGS_LANG.php_tpl']),
    ],
    implode(DIRECTORY_SEPARATOR, [ base_path(), 'config','marinar_settings.php']) => [
        "// @HOOK_CONFIGS_ADDONS" => "\t\t\\Marinar\\SettingsOrders\\MarinarSettingsOrders::class, \n",
    ],
];
