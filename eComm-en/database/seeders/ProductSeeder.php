<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG mobile',
                "price"=>'200',
                "description"=>"A smartphone with 4 gb ram and much more",
                "category"=>"mobile",
                "gallery"=>"https://www.zdnet.com/a/hub/i/r/2021/01/07/a20ae151-6384-47c4-a75e-802455021c41/thumbnail/1200x900/87979d415e6537a431386a8120ae95b1/apple-iphone-12-best-phones-review.png"
            ],
            [
                'name'=>'Samsung TV',
                "price"=>'290',
                "description"=>"A smartphone with 4 gb ram and much more",
                "category"=>"tv",
                "gallery"=>"https://guide-images.cdn.ifixit.com/igi/o4OjCNmNeOhvsS1P.large"
            ],
            [
                'name'=>'iPhone Watch',
                "price"=>'390',
                "description"=>"A smartphone with 4 gb ram and much more",
                "category"=>"fridge",
                "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/3/34/Nokia_3310_3G_%2820180116%29.jpg"
            ]
        ]);
    }
}
