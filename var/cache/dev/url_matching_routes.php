<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/backoffice' => [[['_route' => 'back_office', '_controller' => 'App\\Controller\\BackOfficeController::index'], null, null, null, false, false, null]],
        '/backoffice/creerAdmin' => [[['_route' => 'creerAdmin', '_controller' => 'App\\Controller\\BackOfficeController::creerAdmin'], null, null, null, false, false, null]],
        '/backoffice/creerUtilisateur' => [[['_route' => 'creerUtilisateur', '_controller' => 'App\\Controller\\BackOfficeController::creerUtilisateur'], null, null, null, false, false, null]],
        '/backoffice/modifierParametres' => [[['_route' => 'modifierParametres', '_controller' => 'App\\Controller\\BackOfficeController::modifierParametres'], null, null, null, false, false, null]],
        '/backoffice/supprParamLCMS' => [[['_route' => 'supprParamLCMS', '_controller' => 'App\\Controller\\BackOfficeController::supprParamLCMS'], null, null, null, false, false, null]],
        '/backoffice/supprParamLMS' => [[['_route' => 'supprParamLMS', '_controller' => 'App\\Controller\\BackOfficeController::supprParamLMS'], null, null, null, false, false, null]],
        '/backoffice/supprParamSuperAdmin' => [[['_route' => 'supprParamSuperAdmin', '_controller' => 'App\\Controller\\BackOfficeController::supprParamSuperAdmin'], null, null, null, false, false, null]],
        '/dispatcher' => [[['_route' => 'dispatcher', '_controller' => 'App\\Controller\\DispatcherController::index'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'help', '_controller' => 'App\\Controller\\HelpController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'menu', '_controller' => 'App\\Controller\\HomeController::menu'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tsa' => [[['_route' => 'tsa', '_controller' => 'App\\Controller\\TSAController::index'], null, null, null, false, false, null]],
        '/tslcms' => [[['_route' => 'tslcms', '_controller' => 'App\\Controller\\TSLCMSController::index'], null, null, null, false, false, null]],
        '/tslms' => [[['_route' => 'tslms', '_controller' => 'App\\Controller\\TSLMSController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/backoffice/(?'
                    .'|supprimer(?'
                        .'|Admin/([^/]++)(*:210)'
                        .'|Utilisateur/([^/]++)(*:238)'
                    .')'
                    .'|modifier(?'
                        .'|Admin/([^/]++)(*:272)'
                        .'|Utilisateur/([^/]++)(*:300)'
                    .')'
                    .'|verrouAdmin/([^/]++)(*:329)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        210 => [[['_route' => 'supprimerAdmin', '_controller' => 'App\\Controller\\BackOfficeController::supprimerAdmin'], ['id'], ['DELETE' => 0], null, false, true, null]],
        238 => [[['_route' => 'supprimerUtilisateur', '_controller' => 'App\\Controller\\BackOfficeController::supprimerUtilisateur'], ['id'], ['DELETE' => 0], null, false, true, null]],
        272 => [[['_route' => 'modifierAdmin', '_controller' => 'App\\Controller\\BackOfficeController::modifierAdmin'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'modifierUtilisateur', '_controller' => 'App\\Controller\\BackOfficeController::modifierUtilisateur'], ['id'], null, null, false, true, null]],
        329 => [
            [['_route' => 'verrouAdmin', '_controller' => 'App\\Controller\\BackOfficeController::verrouAdmin'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
