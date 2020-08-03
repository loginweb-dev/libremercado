<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Block;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = Page::create([
            'name'        =>  'Ecommerce-1',
            'slug'        =>  'ecommerce-1',
            'user_id'     =>  1,
            'direction'   =>  'pages.ecommerce1',
            'description' =>  'Pagina predeterminada para comercio electronico v1'
        ]);
            $count = 1;
            Block::create([
                'name'        => 'ecommerce1.header',
                'title'       => 'Encabezado o Banner Principal',
                'description' => 'Banner Principal con Sub Categorias',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'tag' => [
                        'type'   => 'text',
                        'name'   => 'tag',
                        'label'  => 'Tag de Cabezera',
                        'value'  => 'bestseller',
                        'width'  => 3
                    ],
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo del Banner',
                        'value'  => 'This is news title',
                        'width'  => 3
                    ],
                    'button' => [
                        'type'   => 'text',
                        'name'   => 'button',
                        'label'  => 'Texto',
                        'value'  => 'READ MORE',
                        'width'  => 3
                    ],
                    'link' => [
                        'type'   => 'text',
                        'name'   => 'link',
                        'label'  => 'Link del Boton',
                        'value'  => '#',
                        'width'  => 3
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'image' => [
                        'type'   => 'image',
                        'name'   => 'image',
                        'label'  => 'Imagen del Banner',
                        'value'  => 'image1',
                        'width'  => 4
                    ],
                    'parrafo' => [
                        'type'   => 'rich_text_box',
                        'name'   => 'parrafo',
                        'label'  => 'Parrafo del Banner',
                        'value'  => 'banner',
                        'width'  => 8
                    ]
                ])
            ]);
            Block::create([
                'name'        => 'ecommerce1.recomments',
                'title'       => 'Productos Recomendados',
                'description' => 'Productos Recomendados de 8',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo Principal',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'description' => [
                        'type'   => 'text_area',
                        'name'   => 'description',
                        'label'  => 'Descripcion',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space' => [
                        'type'  => 'space',
                        'name'  => 'space'
                    ],
                    'recomments' => [
                        'type'   => 'text',
                        'name'   => 'recomments',
                        'label'  => 'Productos por Categorias',
                        'value'  => 'App\\Http\\Controllers\\Ecommerce1Controller::recomments()',
                        'width'  => 12
                    ]
                    
                ])
            ]);
            Block::create([
                'name'        => 'ecommerce1.banner',
                'title'       => 'Banner o Propaganda',
                'description' => 'Banner Dinamico de 3 Imagenes',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'dinamyc-data',
                'details'     => json_encode([
                    'tag' => [
                        'type'   => 'text',
                        'name'   => 'tag',
                        'label'  => 'Tag Superior Derecho',
                        'value'  => 'SALE',
                        'width'  => 4
                    ],
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo Principal',
                        'value'  => 'Sale 20% off on every smartphone!',
                        'width'  => 4
                    ],
                    'description' => [
                        'type'   => 'text_area',
                        'name'   => 'description',
                        'label'  => 'Titulo Principal',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                        'width'  => 4
                    ],
                    'button_text' => [
                        'type'   => 'text',
                        'name'   => 'button_text',
                        'label'  => 'Texto del Boton',
                        'value'  => 'READ MORE',
                        'width'  => 3
                    ],
                    'button_link' => [
                        'type'   => 'text',
                        'name'   => 'button_link',
                        'label'  => 'link del Boton',
                        'value'  => '#',
                        'width'  => 3
                    ],
                    'banner' => [
                        'type'   => 'image',
                        'name'   => 'banner',
                        'label'  => 'Imagen del Banner',
                        'value'  => 'banner.png',
                        'width'  => 6
                    ],
                    'space1' => [
                        'type'  => 'space',
                        'name'  => 'space1',
                    ],
                    'tag2' => [
                        'type'   => 'text',
                        'name'   => 'tag2',
                        'label'  => 'Tag Superior Izquierdo',
                        'value'  => 'bestseller',
                        'width'  => 4
                    ],
                    'title2' => [
                        'type'   => 'text',
                        'name'   => 'title2',
                        'label'  => 'Titulo Principal',
                        'value'  => 'This is news title',
                        'width'  => 4
                    ],
                    'description2' => [
                        'type'   => 'text_area',
                        'name'   => 'description2',
                        'label'  => 'Titulo Principal',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                        'width'  => 4
                    ],
                    'button_text2' => [
                        'type'   => 'text',
                        'name'   => 'button_text2',
                        'label'  => 'Texto del Boton',
                        'value'  => 'READ MORE',
                        'width'  => 3
                    ],
                    'button_link2' => [
                        'type'   => 'text',
                        'name'   => 'button_link2',
                        'label'  => 'link del Boton',
                        'value'  => '#',
                        'width'  => 3
                    ],
                    'banner2' => [
                        'type'   => 'image',
                        'name'   => 'banner2',
                        'label'  => 'Imagen del Banner',
                        'value'  => 'banner2.png',
                        'width'  => 6
                    ],
                    'space2' => [
                        'type'  => 'space',
                        'name'  => 'space2',
                    ],
                    'tag3' => [
                        'type'   => 'text',
                        'name'   => 'tag3',
                        'label'  => 'Tag Superior Centro',
                        'value'  => 'NEW',
                        'width'  => 4
                    ],
                    'title3' => [
                        'type'   => 'text',
                        'name'   => 'title3',
                        'label'  => 'Titulo Principal',
                        'value'  => 'This is news title',
                        'width'  => 4
                    ],
                    'description3' => [
                        'type'   => 'text_area',
                        'name'   => 'description3',
                        'label'  => 'Titulo Principal',
                        'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                        'width'  => 4
                    ],
                    'button_text3' => [
                        'type'   => 'text',
                        'name'   => 'button_text3',
                        'label'  => 'Texto del Boton',
                        'value'  => 'READ MORE',
                        'width'  => 3
                    ],
                    'button_link3' => [
                        'type'   => 'text',
                        'name'   => 'button_link3',
                        'label'  => 'link del Boton',
                        'value'  => '#',
                        'width'  => 3
                    ],
                    'banner3' => [
                        'type'   => 'image',
                        'name'   => 'banner3',
                        'label'  => 'Imagen del Banner',
                        'value'  => 'banner3.png',
                        'width'  => 6
                    ]
                ])
            ]);
            Block::create([
                'name'        => 'ecommerce1.categories',
                'title'       => 'Productos por Categories',
                'description' => 'Productos Filtrados por Categoria de a 3',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo Principal',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'description' => [
                        'type'   => 'text_area',
                        'name'   => 'description',
                        'label'  => 'Descripcion',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space' => [
                        'type'  => 'space',
                        'name'  => 'space'
                    ],
                    'categories' => [
                        'type'   => 'text',
                        'name'   => 'categories',
                        'label'  => 'Productos por Categorias',
                        'value'  => 'App\\Http\\Controllers\\Ecommerce1Controller::categories()',
                        'width'  => 12
                    ]
                ])
            ]);
            Block::create([
                'name'        => 'ecommerce1.moda',
                'title'       => 'Productos de Moda',
                'description' => 'Productos de Moda o Tendencia',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo Principal',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'description' => [
                        'type'   => 'text_area',
                        'name'   => 'description',
                        'label'  => 'Descripcion',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space' => [
                        'type'  => 'space',
                        'name'  => 'space'
                    ],
                    'moda' => [
                        'type'   => 'text',
                        'name'   => 'moda',
                        'label'  => 'Productos en Tendencia o Moda',
                        'value'  => 'App\\Http\\Controllers\\Ecommerce1Controller::moda()',
                        'width'  => 12
                    ]
                    
                ])
            ]);
            Block::create([
                'name'        => 'ecommerce1.sales',
                'title'       => 'Productos mas Vendidos',
                'description' => 'Productos mas Vendidos del Mes',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo Principal',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'description' => [
                        'type'   => 'text_area',
                        'name'   => 'description',
                        'label'  => 'Descripcion',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space' => [
                        'type'  => 'space',
                        'name'  => 'space'
                    ],
                    'sales' => [
                        'type'   => 'text',
                        'name'   => 'sales',
                        'label'  => 'Productos mas Vendidos',
                        'value'  => 'App\\Http\\Controllers\\Ecommerce1Controller::sales()',
                        'width'  => 12
                    ]
                ])
            ]);
            Block::create([
                'name'        => 'ecommerce1.last',
                'title'       => 'Productos Publicados',
                'description' => 'Ultimos Productos Publicados',
                'page_id'     => $page->id,
                'position'    => $count++,
                'type'        => 'controller',
                'details'     => json_encode([
                    'title' => [
                        'type'   => 'text',
                        'name'   => 'title',
                        'label'  => 'Titulo Principal',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'description' => [
                        'type'   => 'text_area',
                        'name'   => 'description',
                        'label'  => 'Descripcion',
                        'value'  => null,
                        'width'  => 6
                    ],
                    'space' => [
                        'type'  => 'space',
                        'name'  => 'space'
                    ],
                    'last' => [
                        'type'   => 'text',
                        'name'   => 'last',
                        'label'  => 'Ultimos Productos Publicados',
                        'value'  => 'App\\Http\\Controllers\\Ecommerce1Controller::last()',
                        'width'  => 12
                    ]
                ])
            ]);
    }
}
