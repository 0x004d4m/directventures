<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MemberRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class MemberCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Member::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/member');
        $this->crud->setEntityNameStrings('member', 'members');
    }

    protected function setupListOperation()
    {
        $this->crud->column('name')->type('text');
        $this->crud->column('position')->type('text');
        $this->crud->column('image')->type('image');
        $this->crud->column('twitter')->type('text');
        $this->crud->column('facebook')->type('text');
        $this->crud->column('instagram')->type('text');
        $this->crud->column('linkedin')->type('text');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MemberRequest::class);

        $this->crud->field('name')->type('text');
        $this->crud->field('position')->type('text');
        $this->crud->field('image')->type('image');
        $this->crud->field('twitter')->type('text');
        $this->crud->field('facebook')->type('text');
        $this->crud->field('instagram')->type('text');
        $this->crud->field('linkedin')->type('text');
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
