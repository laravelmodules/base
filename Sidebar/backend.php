<?php

\BackendMenu::registerItem([
    'id' => 'Backend-Dashboard',
    'priority' => 0,
    'parent_id' => null,
    'heading' => trans('menus.backend.sidebar.general'),
    // 'heading' => 'Base',
    'title' => trans('menus.backend.sidebar.dashboard'),
    'font_icon' => 'fa fa-dashboard',
    'link' => route('admin.dashboard'),
    // 'link' => '',
    'css_class' => null,
    'permissions' => ['view-menus']
]);

// \BackendMenu::registerItem([
//     'id' => 'Base',
//     'priority' => 20,
//     'parent_id' => null,
//     'heading' => '',
//     // 'heading' => 'Base',
//     'title' => 'Base',
//     'font_icon' => 'fa fa-bars',
//     // 'link' => route('base::menus.index.get'),
//     'link' => '',
//     'css_class' => null,
//     'permissions' => ['view-menus']
// ]);

// \BackendMenu::registerResource([
//      'parent' => 'Base', // Module Name
//      'prefix' => 'base', // Route prefix
//      'resource' => 'base', // Resouce name
//      'permissions' => 'view-backend', // Permissions Group
//      'priority' => 31, // priority Group
// ]);

// \BackendMenu::registerItem([
//         'id' => route('Base.usuario.index'),
//         'priority' => 1,
//         'parent_id' => 'Base',
//         'heading' => 'Claro',
//         'title' => 'Claro',
//         'font_icon' => 'fa fa-plus-circle',
//         'link' => route('Base.usuario.index'),
//         // 'link' => '',
//         'css_class' => null,
//         'permissions' => 'view-backend'
// ]);

includeFiles(__DIR__.'/Backend/');
