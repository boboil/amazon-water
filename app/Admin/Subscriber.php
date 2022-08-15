<?php

use App\Models\Subscriber;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Str;

AdminSection::registerModel(Subscriber::class, function (ModelConfiguration $model) {
    $model->onDisplay(function () {
        $display = AdminDisplay::datatablesAsync()->setHtmlAttribute('class', 'table-primary table-hover');
        $display->setColumns(
            AdminColumn::link('email')->setLabel('Email')
        )->paginate(10);
        return $display;
    });
    $model->onCreateAndEdit(function ($id = null) {
        $panel = AdminForm::panel();
        $panel->addHeader(AdminFormElement::columns()
            ->addColumn([
                AdminFormElement::text('email', 'Email'),
            ], 9)
        );
        $panel->getButtons()->hideDeleteButton();
        return $panel;
    });
});
