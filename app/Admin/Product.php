<?php

use App\Models\Product;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Str;

AdminSection::registerModel(Product::class, function (ModelConfiguration $model) {
    $model->onDisplay(function () {
        $display = AdminDisplay::datatablesAsync()->setHtmlAttribute('class', 'table-primary table-hover');
        $display->setColumns(
            AdminColumn::link('title')->setLabel('Title'),
            AdminColumn::text('price')->setLabel('Price'),
            AdminColumn::text('volume')->setLabel('Volume'),
            AdminColumn::image('main_image')->setLabel('Image'),
            AdminColumnEditable::checkbox('stock')->setLabel('In stock')
        )->paginate(10);
        return $display;
    });
    $model->onCreateAndEdit(function ($id = null) {
        $panel = AdminForm::panel();
        $panel->addHeader(AdminFormElement::columns()
            ->addColumn([
                AdminFormElement::text('title', 'Title')->required(),
            ], 4)
            ->addColumn([
                AdminFormElement::text('price', 'Price')->required(),
            ], 4)
            ->addColumn([
                AdminFormElement::image('main_image', 'Image')->setUploadSettings([
                    'orientate' => [],
                    'resize' => [100, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ])->required(),
            ], 4)
            ->addColumn([
                AdminFormElement::text('volume', 'Volume')->required(),
            ], 4)
            ->addColumn([
                AdminFormElement::text('composition', 'Composition'),
            ], 4)
            ->addColumn([
                AdminFormElement::number('sort_order', 'Sort order'),
            ], 4)
            ->addColumn([
                AdminFormElement::ckeditor('description', 'Description'),
            ], 12)
        );
        $panel->getButtons()->hideDeleteButton();
        return $panel;
    });
});
