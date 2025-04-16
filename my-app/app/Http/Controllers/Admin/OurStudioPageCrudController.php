<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OurStudioPageRequest;
use Illuminate\Http\Request;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OurStudioPageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OurStudioPageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\OurStudioPage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/our-studio-page');
        CRUD::setEntityNameStrings('our studio page', 'our studio pages');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title');
        CRUD::addColumn([
            'label' => "Background Image",
            'name' => "background_image.image",
            'type' => 'image',
        ]);
        CRUD::column('gallery_title');
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
        CRUD::setValidation(OurStudioPageRequest::class);

        CRUD::addField([
            'name' => 'title',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'label' => "Background Image",
            'type'      => 'select2',
            'name'      => 'background_image_id', // the db column for the foreign key
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'General',

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'background_image',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\ImageUpload", // related model
            'attribute' => 'title', // foreign key attribute that is shown to user
        ]);

        CRUD::addField([
            'name' => 'sections',
            'type'  => 'repeatable',
            'reorder' => true,
            'subfields' => [
                [
                    'name'    => 'title',
                    'type'    => 'text',
                    'label'   => 'Title',
                ],
                [
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
                ],
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'gallery_title',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'gallery',
            'type'  => 'repeatable',
            'reorder' => true,
            'subfields' => [
                [
                    'label' => "Gallery Image",
                    'type'      => 'select2_from_array',
                    'name'      => 'image_id', // the db column for the foreign key

                    'options' => \App\Models\ImageUpload::pluck('title', 'id')->toArray(),
                    'wrapper' => [
                        'class' => 'form-group col-md-3',
                    ]
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

    public function store(Request $request)
    {
        $data = $request->all();

        $request->merge([
            'sections' => json_encode($data['sections']),
        ]);

        $AboutPage = \App\Models\OurStudioPage::create([
            'title' => $request->input('title'),
            'sections' => $request->input('sections'),
            'gallery_title' => $request->input('gallery_title'),
        ]);


        return redirect('admin/our-studio-page');
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
