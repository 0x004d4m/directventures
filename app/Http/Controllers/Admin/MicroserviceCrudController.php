<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MicroserviceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class MicroserviceCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Microservice::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/microservice');
        $this->crud->setEntityNameStrings('microservice', 'microservices');
    }

    protected function setupListOperation()
    {
        $this->crud->column('title')->type('text');
        $this->crud->column('icon')->type('text');
        $this->crud->column('description')->type('textarea');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MicroserviceRequest::class);

        $this->crud->field('title')->type('text');
        $this->crud->field('icon')->type('text')->hint('Go to <a href="https://fontawesome.com/v5/search" target="_blank">Icons List</a> and search and copy green part only');
        $this->crud->field('description')->type('textarea');
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
