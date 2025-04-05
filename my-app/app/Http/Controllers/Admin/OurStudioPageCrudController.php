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
            ]
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
                        'height' => 200
                    ]
                ],
            ],
        ]);

        CRUD::addField([
            'name' => 'gallery_title',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ]
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
