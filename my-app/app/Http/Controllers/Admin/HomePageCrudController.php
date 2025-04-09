<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HomePageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HomePageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HomePageCrudController extends CrudController
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
        CRUD::setModel(\App\Models\HomePage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/home-page');
        CRUD::setEntityNameStrings('home page', 'home page');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'label' => "Logo",
            'name' => "logo_image.image",
            'type' => 'image',
        ]);
        CRUD::addColumn([
            'label' => "Footer Logo",
            'name' => "footer_logo_image.image",
            'type' => 'image',
        ]);
        CRUD::column('title');
        CRUD::column('main_video_link');
        CRUD::column('created_at');
        CRUD::column('updated_at');

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
        CRUD::setValidation(HomePageRequest::class);
        CRUD::addField([
            'label' => "Logo",
            'type'      => 'select2',
            'name'      => 'logo_image_id', // the db column for the foreign key

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'logo_image',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\ImageUpload", // related model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'tab' => 'General',
        ]);
        CRUD::addField([
            'label' => "Footer Logo",
            'type'      => 'select2',
            'name'      => 'footer_logo_image_id', // the db column for the foreign key

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'footer_logo_image',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\ImageUpload", // related model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'title',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'main_video_link',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'we_create_title',
            'type'         => 'text',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'we_create_text',
            'label' => 'We Create Body',
            'type' => 'summernote',
            'options'       => [
                'minheight' => 150,
                'height' => 200,
                'codeviewFilter' => false,
                'codeviewIframeFilter' => true,
                'disableDragAndDrop' => true,
                'dialogsInBody' => true,
                'toolbar' => [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']],
                    ['color', ['color']],
                ],
            ],
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'our_clients_title',
            'type'         => 'text',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'our_clients_text',
            'type' => 'summernote',
            'options'       => [
                'minheight' => 150,
                'height' => 200,
                'codeviewFilter' => false,
                'codeviewIframeFilter' => true,
                'disableDragAndDrop' => true,
                'dialogsInBody' => true,
                'toolbar' => [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']],
                    ['color', ['color']],
                ],
            ],
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'contact_title',
            'type'         => 'text',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);
        CRUD::addField([
            'name' => 'contact_text',
            'type' => 'summernote',
            'options'       => [
                'minheight' => 150,
                'height' => 200,
                'codeviewFilter' => false,
                'codeviewIframeFilter' => true,
                'disableDragAndDrop' => true,
                'dialogsInBody' => true,
                'toolbar' => [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview']],
                    ['color', ['color']],
                ],
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'meta_title',
            'type' => 'text',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'Seo',
        ]);

        CRUD::addField([
            'name' => 'meta_description',
            'type' => 'textarea',
            'tab' => 'Seo',
        ]);

        CRUD::addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'tab' => 'Seo',
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
