<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $userDataType = DataType::where('slug', 'users')->firstOrFail();
        $menuDataType = DataType::where('slug', 'menus')->firstOrFail();
        $roleDataType = DataType::where('slug', 'roles')->firstOrFail();

        $PageDataType = DataType::where('slug', 'pages')->firstOrFail();
        $BlockDataType = DataType::where('slug', 'blocks')->firstOrFail();

        //--------------MODULE INVENTARIO -----------------------------------
        $CategoryDataType = DataType::where('slug', 'categories')->firstOrFail();
        $SubCategoryDataType = DataType::where('slug', 'sub_categories')->firstOrFail();
        $BrandsDataType = DataType::where('slug', 'brands')->firstOrFail();
        $ProductDataType = DataType::where('slug', 'products')->firstOrFail();
        $ProductDetailsDataType = DataType::where('slug', 'product_details')->firstOrFail();
        $deliveryDataType = DataType::where('slug', 'deliveries')->firstOrFail();



        $dataRow = $this->dataRow($userDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.email'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'password');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'password',
                'display_name' => __('voyager::seeders.data_rows.password'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'remember_token');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.remember_token'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'avatar');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => __('voyager::seeders.data_rows.avatar'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'user_belongsto_role_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.role'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'TCG\\Voyager\\Models\\Role',
                    'table'       => 'roles',
                    'type'        => 'belongsTo',
                    'column'      => 'role_id',
                    'key'         => 'id',
                    'label'       => 'display_name',
                    'pivot_table' => 'roles',
                    'pivot'       => 0,
                ],
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'user_belongstomany_role_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Roles',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'TCG\\Voyager\\Models\\Role',
                    'table'       => 'roles',
                    'type'        => 'belongsToMany',
                    'column'      => 'id',
                    'key'         => 'id',
                    'label'       => 'display_name',
                    'pivot_table' => 'user_roles',
                    'pivot'       => '1',
                    'taggable'    => '0',
                ],
                'order'        => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'settings');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Settings',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 12,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'display_name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.display_name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'role_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.role'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 9,
            ])->save();
        }



        $count=1;
        $dataRow = $this->dataRow($PageDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'slugify' => [
                        'origin' => 'name',
                        'forceUpdate' => true,
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ],
                'order'        => $count++,
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Descripcion',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'direction');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Direccion',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'details');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Json',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Traking',
                'display_name' => 'Trackin User',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display'   => [
                        'width'  => '3',
                    ],
                ],
                'order'        => $count++
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
            ])->save();
        }
        $dataRow = $this->dataRow($PageDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
            ])->save();
        }
        //pages------------------------------


        //Blocks------------------------------
        //-----------------------------------
        $count = 1;
        $dataRow = $this->dataRow($BlockDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 6
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'page_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'page_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 6
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'block_belongsto_page_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Pagina',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'App\\Page',
                    'table'       => 'pages',
                    'type'        => 'belongsTo',
                    'column'      => 'page_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'pages',
                    'pivot'       => 0,
                ],
                'order'        =>$count++,
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 6
                    ],
                    "options" => [
                        "dinamyc-data" => "Datos Dinamicos",
                        "controller" => "Controlador"
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 6
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Titulo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 6
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'position');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Lugar',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 6
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Descripcion',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 6
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'details');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Details',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $count++,
                'details' => [
                    'display' => [
                        'width' => 12
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
            ])->save();
        }
        $dataRow = $this->dataRow($BlockDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $count++,
            ])->save();
        }
        //Blocks------------------------------

        
                 /**
         * ------------------------------------------------
         *               Formulario Category
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($CategoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Titulo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Categorias de los Productos'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Imagen o Benner de la Categoria'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '12'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($CategoryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Slug',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'slugify' => [
                        'origin' => 'title',
                        'forceUpdate' => true
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }

           /**
         * ------------------------------------------------
         *               Formulario SubCategory
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($SubCategoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'sub_belongsto_category_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Categoria',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Categoria Asociada a la Sub Categoria'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgCategory',
                    'table'       => 'bg_categories',
                    'type'        => 'belongsTo',
                    'column'      => 'category_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'category_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Titulo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Titulo de la Sub Categoria'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'block');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Blocke',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece el lugar de la Sub Categoria'
                    ],
                    'options' => [
                        'null' => 'null',
                        'categories' => 'categories',
                        'sales' => 'sales'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'icons');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Icons',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Icono de la Sub Categoria'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '12'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'category_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Categoria',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($SubCategoryDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }


              /**
         * ------------------------------------------------
         *               Formulario Marcas
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($BrandsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Nombre de la Marca'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image Principal',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '12'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($BrandsDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Slug',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'slugify' => [
                        'origin' => 'name',
                        'forceUpdate' => true
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }

        /**
         * ------------------------------------------------
         *               Formulario Products
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($ProductDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'actions' => [
                        'table' => 'bg_product_details',
                        'key' => 'product_id',
                        'type' => 'create',
                        'message' => 'New Product'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'product_belongsto_subcategory_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Sub Categoria',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Sub Categorias de Productos'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'App\\SubCategory',
                    'table'       => 'bg_sub_categories',
                    'type'        => 'belongsTo',
                    'column'      => 'sub_category_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'sub_category_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Nombre',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Nombre o Titulo Unico del Producto hasta 120c'
                    ],
                    'actions' => [
                        'table' => 'bg_product_details',
                        'key' => 'product_id',
                        'type' => 'list',
                        'message' => 'Sub Productos'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'product_belongsto_brands_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Marcas',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Marcas de Productos'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'App\\Brand',
                    'table'       => 'bg_brands',
                    'type'        => 'belongsTo',
                    'column'      => 'brand_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'bg_brands',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'images');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'multiple_images',
                'display_name' => 'Imagenes 1080x1080',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Imagenes del producto de 1080x1080'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'images_large');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'multiple_images',
                'display_name' => 'Imagenes 1080x1920',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Imagenes del producto de 1080x1920'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Descripcion',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Descripcion corta del Producto hasta 400c'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'stars');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Estrellas',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Estrellas del Producto del 1 -5'
                    ],
                    'display' => [
                        'width' => '6'
                    ],
                    'options' => [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'tags');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_multiple',
                'display_name' => 'Tags',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Tags del Producto del 1 -5'
                    ],
                    'display' => [
                        'width' => '6'
                    ],
                    'options' => [
                        'bestseller' => 'bestseller',
                        'SALE' => 'SALE',
                        'new'=> 'new',
                        'best rated' => 'best rated'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'characteristics');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Caracteristicas',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Datos basados en JSON'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'published');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Producto Publicado',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece si el producto esta listo para su venta'
                    ],
                    'on'  => 'Publicado',
                    'off' => 'No Publicado',
                    'checked' => true,
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'offer');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Producto en Oferta',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece si el producto esta en oferta'
                    ],
                    'on'  => 'En Oferta',
                    'off' => 'No en Oferta',
                    'checked' => false,
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'block');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Blocke',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '3',
                    ],
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece el lugar del producto'
                    ],
                    'options' => [
                        'null' => 'null',
                        'recomments' => 'recomments',
                        'moda' => 'moda'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'shortage');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Producto en Oferta',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece si el producto esta en Escacez'
                    ],
                    'on'  => 'Escacez',
                    'off' => 'No Escacez',
                    'checked' => false,
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'new');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Producto Nuevo',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Establece si el producto es Nuevo'
                    ],
                    'on'  => 'Nuevo',
                    'off' => 'Medio Uso',
                    'checked' => true,
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'views');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Vistas',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'default' => 1,
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Vistas del Producto'
                    ],
                    'display' => [
                        'width' => '3'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'description_long');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Editor HTML',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '12',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Traking',
                'display_name' => 'Traking',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '3',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'Slug',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'slugify' => [
                        'origin' => 'name',
                        'forceUpdate' => true
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'sub_category_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Sub Categoria',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDataType, 'brand_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Marca',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }


          /**
         * ------------------------------------------------
         *               Formulario Products Details
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($ProductDetailsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'details_belongsto_product_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Producto',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Producto Asociado'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'Modules\\Bimgo\\Entities\\BgProduct',
                    'table'       => 'bg_products',
                    'type'        => 'belongsTo',
                    'column'      => 'product_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'product_id',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'code');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Codigo',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Codigo de la tienda'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Tipo',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Filtro del Producto'
                    ],
                    'display' => [
                        'width' => '6'
                    ],
                    'options' => [
                        'Color' => 'Color',
                        'Tamaño' => 'Tamaño',
                        'Talla' => 'Talla',
                        'Capacidad' => 'Capacidad',
                        'Modelo' => 'Modelo'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Titulo',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Titulo para la Opcion'
                    ],
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'  => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'stock');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Stock',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Cantidad en el Inventario'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'price');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Precio',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Precio Sin Original'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        } 
        $dataRow = $this->dataRow($ProductDetailsDataType, 'price_last');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Precio Anterior',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Precio con Descuento'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        } 
        $dataRow = $this->dataRow($ProductDetailsDataType, 'default');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Sub Producto Default',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Data Principal'
                    ],
                    'on'  => 'Dato Default',
                    'off' => 'No Default',
                    'checked' => false,
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '3'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($ProductDetailsDataType, 'product_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Producto',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }


                   /**
         * ------------------------------------------------
         *               Formulario Delivery
         * -----------------------------------------------
         */
        $postion = 1;
        $dataRow = $this->dataRow($deliveryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'delivery_belongsto_product_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Producto',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Producto'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'App\\Product',
                    'table'       => 'bg_products',
                    'type'        => 'belongsTo',
                    'column'      => 'product_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_products',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'delivery_belongsto_region_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Region',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'tooltip' => [
                        'ubication' => 'top',
                        'message' => 'Region'
                    ],
                    'display' => [
                        'width' => 6
                    ],
                    'model'       => 'App\\Region',
                    'table'       => 'bg_regions',
                    'type'        => 'belongsTo',
                    'column'      => 'region_id',
                    'key'         => 'id',
                    'label'       => 'id',
                    'pivot_table' => 'bg_regions',
                    'pivot'       => 0,
                ],
                'order'=> $postion++,

            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'price_shipping');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Precio de Envio',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'day_delivery');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Dias de Envio',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        '1 Dia' => '1 Dia',
                        '1 Dia' => '1 Dia'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'hour_delivery');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Horas de Envio',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'options' => [
                        '1 Hora' => '1 Hora',
                        '2 Horas' => '2 Horas'
                    ],
                    'display'   => [
                        'width'  => '6',
                    ],
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'deleted_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => $postion++,
                'details'      => [
                    'display' => [
                        'width' => '4'
                    ]
                ]
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'product_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'product_id',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'region_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'region_id',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'display' => [
                        'width' => '6'
                    ]
                ],
                'order'        => $postion++,
            ])->save();
        }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
