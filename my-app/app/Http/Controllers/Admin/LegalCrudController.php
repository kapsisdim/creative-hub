<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LegalRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LegalCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LegalCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Legal::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/legal');
        CRUD::setEntityNameStrings('legal', 'legals');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addcolumn([
            'name' => 'term_type',
            'label' => 'Type',
            'type' => 'select_from_array',
            'options' => [
                'conditions' => 'Terms and Conditions',
                'privacy' => 'Privacy Policy',
                'cookies' => 'Cookies Policy',
                'shipping' => 'Shipping Policy',
                'payment' => 'Payment Policy',
                'return' => 'Return Policy',
            ]
        ]);
        CRUD::column('title');
        CRUD::addField([
            'name' => 'body',
            'label' => 'Body',
            'type' => 'summernote',
            'options'       => [
                'minheight' => 150,
                'height' => 200,
                'codeviewFilter' => false,
                'codeviewIframeFilter' => true,
                'disableDragAndDrop' => true,
                'dialogsInBody' => true,
                'toolbar' => [
                    ['style', ['bold', 'italic', 'underline', 'clear', 'fontsize']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']],
                    ['color', ['color']],
                ],
            ]
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(LegalRequest::class);

        CRUD::addField([
            'name' => 'term_type',
            'label' => 'Type',
            'type' => 'select_from_array',
            'options' => [
                'conditions' => 'Terms and Conditions',
                'privacy' => 'Privacy Policy',
                'cookies' => 'Cookies Policy',
                'shipping' => 'Shipping Policy',
                'payment' => 'Payment Policy',
                'return' => 'Return Policy',
            ]
        ]);
        CRUD::addField('title');
        CRUD::addField([
            'name' => 'body',
            'label' => 'Body',
            'type' => 'summernote',
            'options'       => [
                'minheight' => 150,
                'height' => 200,
                'codeviewFilter' => false,
                'codeviewIframeFilter' => true,
                'disableDragAndDrop' => true,
                'dialogsInBody' => true,
                'toolbar' => [
                    ['style', ['bold', 'italic', 'underline', 'clear', 'fontsize']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']],
                    ['color', ['color']],
                ],
            ]
        ]);


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
