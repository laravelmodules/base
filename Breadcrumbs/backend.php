<?php

/**
 * Base
 */
 Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
     $breadcrumbs->push('Dashboard', route('admin.dashboard'));
 });

includeFiles(__DIR__.'/Backend/');
