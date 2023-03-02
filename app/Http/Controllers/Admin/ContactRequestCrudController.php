<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ContactRequestCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\ContactRequest::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/contact-request');
        $this->crud->setEntityNameStrings('contact request', 'contact requests');
    }

    protected function setupListOperation()
    {
        $this->crud->column('name')->type('text');
        $this->crud->column('email')->type('text');
        $this->crud->column('service_id')->type('text');
        $this->crud->column('message')->type('textarea');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ContactRequestRequest::class);

        $this->crud->field('name')->type('text');
        $this->crud->field('email')->type('text');
        $this->crud->field('service_id')->type('text');
        $this->crud->field('message')->type('textarea');
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
