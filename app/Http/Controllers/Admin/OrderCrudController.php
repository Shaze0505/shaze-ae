<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\Widget;
use izica\RelationsWidgets\RelationsWidgetsServiceProvider;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings('order', 'orders');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name');
        CRUD::column('surname');
        CRUD::column('phone');
        CRUD::column('email');
        CRUD::column('total_price');
        CRUD::column('created_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function setupShowOperation()
    {
        CRUD::column('id');
        CRUD::column('name');
        CRUD::column('surname');
        CRUD::column('phone');
        CRUD::column('email');
        CRUD::column('status_label')->label("Status");
        CRUD::column('payment_type');
//        CRUD::column('payment_id');
        CRUD::column('address');
        CRUD::column('address2');
        CRUD::column('area');
        CRUD::column('state');
        CRUD::column('country');
        CRUD::column('subtotal')->type("number")->decimals(2);
        CRUD::column('shipment_price')->type("number")->decimals(2);
        CRUD::column('total_tax')->type("number")->decimals(2);
        CRUD::column('total_discount')->type("number")->decimals(2);
        CRUD::column('total_coupon_discount')->type("number")->decimals(2);
        CRUD::column('total_item_discount')->type("number")->decimals(2);
        CRUD::column('total_price')->type("number")->decimals(2);
        CRUD::column('created_at');

        Widget::add([
            'type'           => 'relation_table',
            'name'           => 'order_products',
            'label'          => 'Products',
            'backpack_crud'  => 'orderproducts',
            'visible' => function($entry){
                return $entry->order_products->count() > 0;
            },
            'relation_attribute' => 'order_id',
            'buttons' => false,
            'button_create' => false,
            'button_edit' => false,
            'button_show' => false,
            'button_delete' => false,
            'columns' => [
                [
                    'label' => 'Product',
                    'closure' => function($entry) {
                        return Product::find($entry->product_id)->name ?? "-";
                    }
                ],
                [
                    'label' => 'Quantity',
                    'name' => 'quantity'
                ],
                [
                    'label' => 'Actual price',
                    'closure' => function($entry) {
                        return $entry->sold_price ? number_format($entry->sold_price, 2) : "-";
                    },
                ],
                [
                    'label' => 'Sold price',
                    'closure' => function($entry) {
                        return $entry->actual_price ? number_format($entry->actual_price, 2) : "-";
                    },
                ],
                [
                    'label' => 'Discounted amount',
                    'closure' => function($entry) {
                        return $entry->discounted_amount ? number_format($entry->discounted_amount, 2) : "-";
                    },
                ],
            ],
        ])->to('after_content');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(OrderRequest::class);

        CRUD::field('user_id');
        CRUD::field('name');
        CRUD::field('surname');
        CRUD::field('phone');
        CRUD::field('email');
        CRUD::field('status_id');
        CRUD::field('payment_type');
        CRUD::field('payment_id');
        CRUD::field('address');
        CRUD::field('address2');
        CRUD::field('area');
        CRUD::field('state');
        CRUD::field('country');
        CRUD::field('subtotal');
        CRUD::field('shipment_price');
        CRUD::field('total_tax');
        CRUD::field('total_discount');
        CRUD::field('total_coupon_discount');
        CRUD::field('total_item_discount');
        CRUD::field('total_price');

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
