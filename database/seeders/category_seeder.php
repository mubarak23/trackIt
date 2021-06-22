<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use App\Models\Category;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();

        $category = [
            ['id' => 1, 'name' => 'Education'],
            ['id' => 2, 'name' => 'Community'],
            ['id' => 3, 'name' => 'Health'],
            ['id' => 4, 'name' => 'Budget'],
        ];

        Category::insert($category);
    }
}
