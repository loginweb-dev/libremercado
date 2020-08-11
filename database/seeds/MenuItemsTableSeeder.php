<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        // $menuItem = MenuItem::firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title'   => __('voyager::seeders.menu_items.dashboard'),
        //     'url'     => '',
        //     'route'   => 'voyager.dashboard',
        // ]);
        // if (!$menuItem->exists) {
        //     $menuItem->fill([
        //         'target'     => '_self',
        //         'icon_class' => 'voyager-boat',
        //         'color'      => null,
        //         'parent_id'  => null,
        //         'order'      => 1,
        //     ])->save();
        // }

    

        // $menuItem = MenuItem::firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title'   => __('voyager::seeders.menu_items.roles'),
        //     'url'     => '',
        //     'route'   => 'voyager.roles.index',
        // ]);
        // if (!$menuItem->exists) {
        //     $menuItem->fill([
        //         'target'     => '_self',
        //         'icon_class' => 'voyager-lock',
        //         'color'      => null,
        //         'parent_id'  => null,
        //         'order'      => 2,
        //     ])->save();
        // }

        
        $toolsMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.tools'),
            'url'     => '',
        ]);
        if (!$toolsMenuItem->exists) {
            $toolsMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-tools',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        $count = 1;

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.users'),
            'url'     => '',
            'route'   => 'voyager.users.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-person',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => $count++,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.media'),
            'url'     => '',
            'route'   => 'voyager.media.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-images',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => $count++,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.menu_builder'),
            'url'     => '',
            'route'   => 'voyager.menus.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-list',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => $count++,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Paginas',
            'url'     => '',
            'route'   => 'voyager.pages.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-paypal',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => $count++,
            ])->save();
        }
        
        // $menuItem = MenuItem::firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title'   => __('voyager::seeders.menu_items.database'),
        //     'url'     => '',
        //     'route'   => 'voyager.database.index',
        // ]);
        // if (!$menuItem->exists) {
        //     $menuItem->fill([
        //         'target'     => '_self',
        //         'icon_class' => 'voyager-data',
        //         'color'      => null,
        //         'parent_id'  => $toolsMenuItem->id,
        //         'order'      => 11,
        //     ])->save();
        // }

        // $menuItem = MenuItem::firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title'   => __('voyager::seeders.menu_items.compass'),
        //     'url'     => '',
        //     'route'   => 'voyager.compass.index',
        // ]);
        // if (!$menuItem->exists) {
        //     $menuItem->fill([
        //         'target'     => '_self',
        //         'icon_class' => 'voyager-compass',
        //         'color'      => null,
        //         'parent_id'  => $toolsMenuItem->id,
        //         'order'      => 12,
        //     ])->save();
        // }

        // $menuItem = MenuItem::firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title'   => __('voyager::seeders.menu_items.bread'),
        //     'url'     => '',
        //     'route'   => 'voyager.bread.index',
        // ]);
        // if (!$menuItem->exists) {
        //     $menuItem->fill([
        //         'target'     => '_self',
        //         'icon_class' => 'voyager-bread',
        //         'color'      => null,
        //         'parent_id'  => $toolsMenuItem->id,
        //         'order'      => 13,
        //     ])->save();
        // }

        // $menuItem = MenuItem::firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title'   => __('voyager::seeders.menu_items.settings'),
        //     'url'     => '',
        //     'route'   => 'voyager.settings.index',
        // ]);
        // if (!$menuItem->exists) {
        //     $menuItem->fill([
        //         'target'     => '_self',
        //         'icon_class' => 'voyager-settings',
        //         'color'      => null,
        //         'parent_id'  => null,
        //         'order'      => 14,
        //     ])->save();
        // }


        //----------------------------------------------
        $InventarioMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Inventario',
            'url'     => '',
        ]);
        if (!$InventarioMenuItem->exists) {
            $InventarioMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-data',
                'color'      => null,
                'parent_id'  => null, //menu desplegable
                'order'      => 2,
            ])->save();
        }
            $postion = 1;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Productos',
                'url'     => '',
                'route'   => 'voyager.products.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-double-right',
                    'color'      => null,
                    'parent_id'  => $InventarioMenuItem->id,
                    'order'      => $postion++,
                ])->save();
            }

            //---------------------------



            //--------------------------- MODULO INVENTARIO --------------------------
        //-----------------------------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'categories',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'sub_categories',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'brands',
        ]);
        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'products',
        ]);
            $menu = Menu::where('name', 'products')->firstOrFail();
            $count=1;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Listar los Productos',
                'url'     => 'admin/products/1',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nuevo Producto',
                'url'     => 'admin/products/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Categoria',
                'url'     => 'admin/categories/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Sub Categoria',
                'url'     => 'admin/sub_categories/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nueva Marca',
                'url'     => 'admin/brands/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Delivery',
                'url'     => 'admin/deliveries/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'divider',
                'url'     => null,
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'setting',
                'url'     => null,
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_blank',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }

        //-------------------------------------------------
        Menu::firstOrCreate([
            'name' => 'product_details', // Detalles del Producto
        ]);
        Menu::firstOrCreate([
            'name' => 'deliveries', // Delivery
        ]);
        //-----------------FIN MODULO INVENTARI-----------    

    }
}
