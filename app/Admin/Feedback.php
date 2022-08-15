<?php

use App\Models\Feedback;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Str;

AdminSection::registerModel(Feedback::class, function (ModelConfiguration $model) {
    $model->onDisplay(function () {
        $display = AdminDisplay::datatablesAsync()->setHtmlAttribute('class', 'table-primary table-hover');
        $display->setColumns(
            AdminColumn::link('name')->setLabel('Name'),
            AdminColumn::text('last_name')->setLabel('Last Name'),
            AdminColumn::text('email')->setLabel('Email'),
            AdminColumn::text('question')->setLabel('Question')
        )->paginate(10);
        return $display;
    });
    $model->onCreateAndEdit(function ($id = null) {
        $panel = AdminForm::panel();
        $panel->addHeader(AdminFormElement::columns()
            ->addColumn([
                AdminFormElement::text('name', 'Name')->required(),
            ], 4)
            ->addColumn([
                AdminFormElement::text('last_name', 'Last Name')->required(),
            ], 4)
            ->addColumn([
                AdminFormElement::text('email', 'Email'),
            ], 4)
            ->addColumn([
                AdminFormElement::textarea('question', 'Question')->required(),
            ], 12)


        );
        $panel->getButtons()->hideDeleteButton();
        return $panel;
    });
});
