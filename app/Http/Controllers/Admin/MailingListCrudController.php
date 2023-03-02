<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MailingListRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class MailingListCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\MailingList::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/mailing-list');
        $this->crud->setEntityNameStrings('mailing list', 'mailing lists');
    }

    protected function setupListOperation()
    {
        $this->crud->column('email')->type('text');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MailingListRequest::class);

        $this->crud->field('email')->type('text');
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
