<?php

use App\Models\Page;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Str;


AdminSection::registerModel( Page::class, function ( ModelConfiguration $model )
{
    $model->setTitle( 'Pages' );
    $model->setCreateTitle('');
    $model->onDisplay( function ()
    {
        $display = AdminDisplay::datatablesAsync()->setHtmlAttribute( 'class', 'table-primary table-hover' );
        $display->setColumns(
            AdminColumn::link( 'id' )->setLabel( 'ID' )->setWidth( '10px' )->setHtmlAttribute( 'class', 'text-right' ),
            AdminColumn::link( 'title' )->setLabel( 'Title' ),
            AdminColumnEditable::checkbox('is_active')->setLabel('Active')
        )->paginate( 10 );
        return $display;
    } );
    $model->disableDeleting();
    $model->onCreateAndEdit( function ( $id = null )
    {
        $panel = AdminForm::panel()
            ->addBody(
                AdminFormElement::text( 'title', 'Title' )->required(),
                AdminFormElement::ckeditor( 'description', 'Page Content' ),
                AdminFormElement::custom()->setCallback(function($instance) {
                    $request = \Request::all();
                    $instance['slug'] = Str::slug($request['title']);
                }),
                AdminFormElement::number( 'sort_order', 'Sort order' )

            )
        ;
        $panel ->getButtons()->hideDeleteButton();
        return $panel ;
    } );
} );
