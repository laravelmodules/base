<?php

\DashboardMenu::registerItem([
    'id' => 'Base',
    'priority' => 20,
    'parent_id' => null,
    'heading' => '',
    // 'heading' => 'Base',
    'title' => 'Base',
    'font_icon' => 'fa fa-bars',
    // 'link' => route('base.base.index.get'),
    'link' => '',
    'css_class' => null,
    'permissions' => ['view-menus']
]);

// \DashboardMenu::registerResource([
//      'parent' => 'Base', // Module Name
//      'prefix' => 'base', // Route prefix
//      'resource' => 'base', // Resouce name
//      'permissions' => 'view-backend', // Permissions Group
//      'priority' => 31, // priority Group
// ]);

// \MenuDashboard::registerItem([
//         'id' => route('base.base.index'),
//         'priority' => 1,
//         'parent_id' => 'Base',
//         'heading' => 'Claro',
//         'title' => 'Claro',
//         'font_icon' => 'fa fa-plus-circle',
//         'link' => route('base.base.index'),
//         // 'link' => '',
//         'css_class' => null,
//         'permissions' => 'view-backend'
// ]);

includeFiles(__DIR__.'/Dashboard/');
