<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => 'Dashboard',
        'icon' => 'fas fa-tachometer-alt',
        'url' => route('admin.dashboard'),
        'priority' => 1
    ],
    AdminSection::addMenuPage(\App\Models\Feedback::class)->setTitle('Questions')->setIcon('fa fa-question')->setPriority(3),
    AdminSection::addMenuPage(\App\Models\Product::class)->setTitle('Products')->setIcon('fa fa-flask')->setPriority(2),
    AdminSection::addMenuPage(\App\Models\Subscriber::class)->setTitle('Subscribers')->setIcon('fa fa-address-book')->setPriority(4),
    AdminSection::addMenuPage(\App\Models\Page::class)->setTitle('Pages')->setIcon('fa fa-file')->setPriority(5),
];
