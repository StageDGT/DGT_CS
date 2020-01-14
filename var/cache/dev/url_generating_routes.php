<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'back_office' => [[], ['_controller' => 'App\\Controller\\BackOfficeController::index'], [], [['text', '/backoffice']], [], []],
    'creerAdmin' => [[], ['_controller' => 'App\\Controller\\BackOfficeController::creerAdmin'], [], [['text', '/backoffice/creerAdmin']], [], []],
    'creerUtilisateur' => [[], ['_controller' => 'App\\Controller\\BackOfficeController::creerUtilisateur'], [], [['text', '/backoffice/creerUtilisateur']], [], []],
    'supprimerAdmin' => [['id'], ['_controller' => 'App\\Controller\\BackOfficeController::supprimerAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/supprimerAdmin']], [], []],
    'supprimerUtilisateur' => [['id'], ['_controller' => 'App\\Controller\\BackOfficeController::supprimerUtilisateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/supprimerUtilisateur']], [], []],
    'modifierAdmin' => [['id'], ['_controller' => 'App\\Controller\\BackOfficeController::modifierAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/modifierAdmin']], [], []],
    'modifierUtilisateur' => [['id'], ['_controller' => 'App\\Controller\\BackOfficeController::modifierUtilisateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/modifierUtilisateur']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'menu' => [[], ['_controller' => 'App\\Controller\\HomeController::menu'], [], [['text', '/menu']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'tslms' => [[], ['_controller' => 'App\\Controller\\TSLMSController::index'], [], [['text', '/tslms']], [], []],
];
