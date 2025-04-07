<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
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
        CRUD::setModel(\App\Models\Project::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/project');
        CRUD::setEntityNameStrings('project', 'projects');
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
            'label' => "Project Image",
            'name' => "main_image.image",
            'type' => 'image',
        ]);
        CRUD::column('title');
        CRUD::addcolumn([
            'name' => 'category.title',
            'label' => 'Category',
            'type' => 'text',
        ]);

        CRUD::addColumn([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'select_from_array',
            'options'       => [
                1   => '<span class="badge badge-success">Published</span>',
                0 => '<span class="badge badge-default">Draft</span>',
            ],
            'escaped' => false
        ]);
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
        CRUD::setValidation(ProjectRequest::class);

        CRUD::addField([
            'name' => 'title',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
        ]);
        CRUD::addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'select_from_array',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'options'       => [
                1   => 'Published',
                0 => 'Draft',
            ],
        ]);
        CRUD::addField([
            'label' => "Project Category",
            'type'      => 'select2',
            'name'      => 'category_id', // the db column for the foreign key

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'category',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\PortfolioCategory", // related model
            'attribute' => 'title', // foreign key attribute that is shown to user
        ]);
        CRUD::addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'summernote',
            'options'       => [
                'minheight' => 150,
                'height' => 200
            ]
        ]);
        CRUD::addField([
            'name' => 'body',
            'label' => 'Body',
            'type' => 'summernote',
            'options'       => [
                'minheight' => 150,
                'height' => 200
            ]
        ]);
        CRUD::field('video');
        CRUD::addField([
            'label' => "Project Main Image",
            'type'      => 'select2',
            'name'      => 'main_image_id', // the db column for the foreign key

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'main_image',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\ImageUpload", // related model
            'attribute' => 'title', // foreign key attribute that is shown to user
        ]);
        CRUD::addField([
            'label' => "Project Gallery",
            'name' => "images",
            'type' => 'select2_multiple',
            'name' => 'getImageUploads', // the method that defines the relationship in your Model
            'entity' => 'getImageUploads', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model' => "App\Models\ImageUpload", // foreign key model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
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
