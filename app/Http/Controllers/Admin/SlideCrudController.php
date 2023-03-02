<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SlideRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class SlideCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Slide::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/slide');
        $this->crud->setEntityNameStrings('slide', 'slides');
    }

    protected function setupListOperation()
    {
        $this->crud->column('small_text')->type('text');
        $this->crud->column('big_text')->type('text');
        $this->crud->column('image')->type('image');

    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SlideRequest::class);

        $this->crud->field('small_text')->type('text');
        $this->crud->field('big_text')->type('text');
        $this->crud->field('image')->type('image');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }
}
