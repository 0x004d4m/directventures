<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WhyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class WhyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Why::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/why');
        $this->crud->setEntityNameStrings('why', 'whies');
    }

    protected function setupListOperation()
    {
        $this->crud->column('name')->type('text');
        $this->crud->column('title')->type('text');
        $this->crud->column('image')->type('image');
        $this->crud->column('why1_title')->type('text');
        $this->crud->column('why1_description')->type('text');
        $this->crud->column('why1_icon')->type('text');
        $this->crud->column('why2_title')->type('text');
        $this->crud->column('why2_description')->type('text');
        $this->crud->column('why2_icon')->type('text');
        $this->crud->column('why3_title')->type('text');
        $this->crud->column('why3_description')->type('text');
        $this->crud->column('why3_icon')->type('text');
        $this->crud->column('why4_title')->type('text');
        $this->crud->column('why4_description')->type('text');
        $this->crud->column('why4_icon')->type('text');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(WhyRequest::class);

        $this->crud->field('name')->type('text');
        $this->crud->field('title')->type('text');
        $this->crud->field('image')->type('image');
        $this->crud->field('why1_title')->type('text');
        $this->crud->field('why1_description')->type('text');
        $this->crud->field('why1_icon')->type('text')->hint('Go to <a href="https://fontawesome.com/v5/search" target="_blank">Icons List</a> and search and copy green part only');
        $this->crud->field('why2_title')->type('text');
        $this->crud->field('why2_description')->type('text');
        $this->crud->field('why2_icon')->type('text')->hint('Go to <a href="https://fontawesome.com/v5/search" target="_blank">Icons List</a> and search and copy green part only');
        $this->crud->field('why3_title')->type('text');
        $this->crud->field('why3_description')->type('text');
        $this->crud->field('why3_icon')->type('text')->hint('Go to <a href="https://fontawesome.com/v5/search" target="_blank">Icons List</a> and search and copy green part only');
        $this->crud->field('why4_title')->type('text');
        $this->crud->field('why4_description')->type('text');
        $this->crud->field('why4_icon')->type('text')->hint('Go to <a href="https://fontawesome.com/v5/search" target="_blank">Icons List</a> and search and copy green part only');
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
