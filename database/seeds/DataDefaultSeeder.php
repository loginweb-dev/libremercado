<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\SubCategory;
use App\Brand;
use App\Region;
class DataDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //------------Category---------------------
        $data = Category::create([
            'title' => 'Category 1',
            'slug' => 'category-1'
        ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 1'
            ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 2'
            ]);
        $data = Category::create([
            'title' => 'Category 2',
            'slug' => 'category-2'
        ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 3'
            ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 4'
            ]);
        $data = Category::create([
            'title' => 'Category 3',
            'slug' => 'category-3'
        ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 5'
            ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 6'
            ]);
        $data = Category::create([
            'title' => 'Category 4',
            'slug' => 'category-4'
        ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 7'
            ]);
            $data2 = SubCategory::create([
                'category_id' => $data->id,
                'title' => 'Sub Category 8'
            ]);
        //------------Marca---------------------
        Brand::create([
            'name' => 'Marca 1',
            'slug' => 'marca-1'
        ]);
        Brand::create([
            'name' => 'Marca 2',
            'slug' => 'marca-2'
        ]);
        Brand::create([
            'name' => 'Marca 3',
            'slug' => 'marca-3'
        ]);

        // ---------- Regiones ---------------
        $data = Region::create([
            'name' => 'Region 1'
        ]);
        $data = Region::create([
            'name' => 'Region 2'
        ]);
        $data = Region::create([
            'name' => 'Region 3'
        ]);
        $data = Region::create([
            'name' => 'Region 4'
        ]);
        $data = Region::create([
            'name' => 'Region 5'
        ]);
        $data = Region::create([
            'name' => 'Region 6'
        ]);
    }
}
