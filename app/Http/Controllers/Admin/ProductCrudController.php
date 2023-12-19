<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
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
//        CRUD::column('order');
        CRUD::column('category_id');
        CRUD::column('name');
//        CRUD::column('slug');
        CRUD::column('price')->type("number")->decimals(2);
//        CRUD::column('discount_price');
//        CRUD::column('banner');
//        CRUD::column('banner_text');
//        CRUD::column('slider_3');
//        CRUD::column('slider_2');
//        CRUD::column('slider_1');
//        CRUD::column('slider_text');
//        CRUD::column('content_header');
//        CRUD::column('content_text');
//        CRUD::column('content_image');
//        CRUD::column('length');
//        CRUD::column('width');
//        CRUD::column('height');
//        CRUD::column('capacity');
//        CRUD::column('material');
//        CRUD::column('color');
//        CRUD::column('rgb');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function setupShowOperation()
    {
        CRUD::column('id');
        CRUD::column('order');
        CRUD::column('category_id');
        CRUD::column('name');
        CRUD::column('slug');
        CRUD::column('cover_1')->type("image");
        CRUD::column('cover_2')->type("image");
        CRUD::column('price')->type("number")->decimals(2);
        CRUD::column('discount_price')->type("number")->decimals(2);
        CRUD::column('home_visible');
        CRUD::column('banner')->type("image");
        CRUD::column('banner_text');
        CRUD::column('slider_text');
        CRUD::column('slider_1')->type("image");
        CRUD::column('slider_2')->type("image");
        CRUD::column('slider_3')->type("image");
        CRUD::column('content_header');
        CRUD::column('content_text');
        CRUD::column('content_image')->type("image");
        CRUD::column('length');
        CRUD::column('width');
        CRUD::column('height');
        CRUD::column('capacity');
        CRUD::column('material');
        CRUD::column('color');
        CRUD::column('rgb');

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
        CRUD::setValidation(ProductRequest::class);

        CRUD::field('category_id');
        CRUD::field('name');
        CRUD::field('cover_1')->type("upload")->attributes(["accept" => "image/*"])
            ->withFiles([
                "disk" => "public",
                "path" => "categories",
                'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
            ]);
        CRUD::field('cover_2')->type("upload")->attributes(["accept" => "image/*"])
            ->withFiles([
                "disk" => "public",
                "path" => "categories",
                'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
            ]);
        CRUD::field('price')->type("number")->attributes(["min" => 0, "step" => "0.01"]);
        CRUD::field('discount_price')->type("number")->attributes(["min" => 0, "step" => "0.01"]);
        CRUD::field('home_visible');
        CRUD::field('banner')->type("upload")->attributes(["accept" => "image/*"])
            ->withFiles([
                "disk" => "public",
                "path" => "categories",
                'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
            ]);
        CRUD::field('banner_text');
        CRUD::field('slider_text');
        CRUD::field('slider_1')->type("upload")->attributes(["accept" => "image/*"])
            ->withFiles([
                "disk" => "public",
                "path" => "categories",
                'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
            ]);
        CRUD::field('slider_2')->type("upload")->attributes(["accept" => "image/*"])
            ->withFiles([
                "disk" => "public",
                "path" => "categories",
                'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
            ]);
        CRUD::field('slider_3')->type("upload")->attributes(["accept" => "image/*"])
            ->withFiles([
                "disk" => "public",
                "path" => "categories",
                'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
            ]);
        CRUD::field('content_header');
        CRUD::field('content_text');
        CRUD::field('content_image')->type("upload")->attributes(["accept" => "image/*"])
            ->withFiles([
                "disk" => "public",
                "path" => "categories",
                'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
            ]);
        CRUD::field('length');
        CRUD::field('width');
        CRUD::field('height');
        CRUD::field('capacity');
        CRUD::field('material');
        CRUD::field('color');
        CRUD::field('rgb');

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
