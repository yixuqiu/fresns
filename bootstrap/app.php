<?php

use App\Helpers\ConfigHelper;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// cookie name
try {
    $cookiePrefix = ConfigHelper::fresnsConfigByItemKey('website_cookie_prefix') ?? 'fresns_';
} catch (\Exception $e) {
    $cookiePrefix = 'fresns_';
}

$encryptCookies = [
    'fresns_panel_locale',
    'fresns_post_message_key',
    'fresns_redirect_url',
    'fresns_timezone',
    "{$cookiePrefix}lang_tag",
    "{$cookiePrefix}aid",
    "{$cookiePrefix}aid_token",
    "{$cookiePrefix}uid",
    "{$cookiePrefix}uid_token",
];

return Application::configure(basePath: dirname(__DIR__))
    ->withMiddleware(function (Middleware $middleware) use ($encryptCookies) {
        $middleware->encryptCookies(except: $encryptCookies);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
