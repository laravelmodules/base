<?php
\BackendMenu::registerItem([
    'id' => 'Log-Viewer',
    'priority' => 999,
    'parent_id' => null,
    'heading' => trans('menus.backend.sidebar.system'),
    // 'heading' => 'Users',
    'title' => trans('menus.backend.log-viewer.main'),
    // 'title' => trans('menus.backend.access.title'),
    'font_icon' => 'fa fa-list',
    // 'link' => route('users::menus.index.get'),
    'link' => '',
    'css_class' => null,
    'permissions' => ['manage-users', 'manage-roles']
]);
\BackendMenu::registerItem([
    'id' => 'Log-Viewer-dashboard',
    'priority' => 9991,
    'parent_id' => 'Log-Viewer',
    'heading' => '',
    'title' => trans('menus.backend.log-viewer.dashboard'),
    'font_icon' => 'fa fa-circle-o',
    'link' => route('log-viewer::dashboard'),
    'css_class' => null,
    'permissions' => ['manage-users', 'manage-roles']
]);
\BackendMenu::registerItem([
    'id' => 'Log-Viewer-logs',
    'priority' => 9992,
    'parent_id' => 'Log-Viewer',
    'heading' => '',
    'title' => trans('menus.backend.log-viewer.logs'),
    'font_icon' => 'fa fa-circle-o',
    'link' => route('log-viewer::logs.list'),
    'css_class' => null,
    'permissions' => ['manage-users', 'manage-roles']
]);
