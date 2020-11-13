<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin.option.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], [], [['text', '/admin/option/']], [], []],
    'admin.option.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], [], [['text', '/admin/option/new']], [], []],
    'admin.option.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/option']], [], []],
    'admin.option.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/option']], [], []],
    'admin.property.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], [], [['text', '/admin']], [], []],
    'admin.property.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::new'], [], [['text', '/admin/property/create']], [], []],
    'admin.property.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/property']], [], []],
    'admin.property.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/property']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'property_index' => [[], ['_controller' => 'App\\Controller\\PropertyController::index'], [], [['text', '/property/']], [], []],
    'property_new' => [[], ['_controller' => 'App\\Controller\\PropertyController::new'], [], [['text', '/property/new']], [], []],
    'property_show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\PropertyController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id'], ['variable', '/', '[a-z0-9\\-]*', 'slug'], ['text', '/property']], [], []],
    'property_edit' => [['id'], ['_controller' => 'App\\Controller\\PropertyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/property']], [], []],
    'property_delete' => [['id'], ['_controller' => 'App\\Controller\\PropertyController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/property']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[^/]++', 'hash'], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
