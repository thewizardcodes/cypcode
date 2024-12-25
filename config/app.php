<?php
/**
 *   1Stake iGaming Platform
 *   -----------------------
 *   app.php
 * 
 *   @copyright  Copyright (c) 1stake, All rights reserved
 *   @author     1stake <sales@1stake.app>
 *   @see        https://1stake.app
*/

return [

    'version' => '2.9.0',

    

    'name' => env('APP_NAME', '1Stake'),

    

    'logo' => env('APP_LOGO', '/images/logo/logo.png'),

    'og_image' => env('APP_OG_IMAGE', 'images/logo/og-image.jpg'),

    

    'env' => env('APP_ENV', 'production'),

    

    'debug' => (bool) env('APP_DEBUG', false),

    

    'url' => env('APP_URL', ''),

    'asset_url' => env('ASSET_URL'),

    'force_ssl' => env('FORCE_SSL', FALSE),

    

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    

    'locale' => env('LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    
    
    'default_locale' => env('LOCALE', 'en'),

    'locales' => [
        'en' => [
            'flag'  => 'us',
            'title' => 'English'
        ],
        'ru' => [
            'title' => 'Русский'
        ],
        'de' => [
            'title' => 'Deutsch',
        ],
        'es' => [
            'title' => 'Español',
        ],
        'fr' => [
            'title' => 'Français',
        ],
        'pt' => [
            'title' => 'Português',
        ],
        'nl' => [
            'title' => 'Nederlands',
        ],
        'cs' => [
            'flag'  => 'cz',
            'title' => 'Česky',
        ],
        'it' => [
            'title' => 'Italiano',
        ],
        'fi' => [
            'title' => 'Suomi',
        ],
        'sv' => [
            'flag'  => 'se',
            'title' => 'Svenska',
        ],
        'hu' => [
            'title' => 'Magyar',
        ],
        'el' => [
            'flag'  => 'gr',
            'title' => 'Ελληνικά',
        ],
        'da' => [
            'flag'  => 'dk',
            'title' => 'Dansk',
        ],
        'lv' => [
            'title' => 'Latviešu',
        ],
        'lt' => [
            'title' => 'Lietuvių',
        ],
        'et' => [
            'flag'  => 'ee',
            'title' => 'Eesti',
        ],
        'sk' => [
            'title' => 'Slovenčina',
        ],
        'sl' => [
            'flag'  => 'si',
            'title' => 'Slovenščina',
        ],
        'ko' => [
            'flag'  => 'kr',
            'title' => '한국어',
        ],
        
        'zh-cn' => [
            'flag'  => 'cn',
            'title' => '简体',
        ],
        
        'zh-tw' => [
            'flag'  => 'tw',
            'title' => '繁体',
        ],
        'ja' => [
            'flag'  => 'jp',
            'title' => '日本語',
        ],
    ],

    'translation_files_folder' => env('TRANSLATION_FILES_FOLDER', 'lang'), 

    

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'hash' => 'da34b0aa975fddd5a90a1eb2bb8cb9d2',

    'hashb' => '0dcd235baec3bed9c8374828935afa0d',

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    

    'api' => [
        'releases' => [
            'base_url' => env('API_RELEASES_BASE_URL', 'https://demo.1stake.app/api/')
        ],
        'products' => [
            'base_url' => env('API_PRODUCTS_BASE_URL', 'https://financialplugins.com/api/')
        ],
    ],

    

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

    

    'csp_allowed_urls' => json_decode(env('CSP_ALLOWED_URLS', '[]')),
];
