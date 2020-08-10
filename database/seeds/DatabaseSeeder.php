<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'     => 'پوریا',
            'mobile'   => '09129283406',
            'password' => bcrypt('111111'),
            'roleId'   => '0',
            'active'   => '1',
            'reagent'   => '15831594591572',
        ]);

        DB::table('users')->insert([
            'name'     => 'حسین',
            'mobile'   => '09129283407',
            'password' => bcrypt('111111'),
            'roleId'   => '2',
            'active'   => '1',
            'reagent'   => '15831594591572',
        ]);

//        DB::table('orders')->insert([
//            'product_id'   => '1',
//            'user_id' => '2',
//        ]);

        DB::table('sliders')->insert([
            'group'   => 'بالا چپ',
        ]);
        DB::table('sliders')->insert([
            'group'   => 'بالا وسط',
        ]);
        DB::table('sliders')->insert([
            'group'   => 'بالا راست',
        ]);
        DB::table('sliders')->insert([
            'group'   => 'پایین چپ',
        ]);
        DB::table('sliders')->insert([
            'group'   => 'پایین وسط چپ',
        ]);
        DB::table('sliders')->insert([
            'group'   => 'پایین وسط راست',
        ]);
        DB::table('sliders')->insert([
            'group'   => ' پایین راست',
        ]);


        DB::table('abouts')->insert([
            'photo1'   => 'تست',
            'photo2'   => 'تست',
        ]);

        DB::table('contacts')->insert([
            'photo1'   => 'تست',
            'photo2'   => 'تست',
            'photo3'   => 'تست',
        ]);

        DB::table('settings')->insert([
            'photo1'   => 'تست',
        ]);

        DB::table('footers')->insert([
            'link'   => 'تست',
        ]);

        DB::table('menu_products')->insert([
            'name'   => 'منو',
        ]);

        DB::table('sub_menu_products')->insert([
            'menuProducts_id'   => 1,
            'name'   => 'زیر منو',
        ]);

        DB::table('products')->insert([
            'name'   => 'محصول یک',
            'description'   => 'توضیحات یک',
            'price'   => '20000',
            'discount'   => '2',
            'price_after_discount'   => '19600',
            'rate'   => '1',
            'category'   => '4',
            'photo1'   => '158587401504.jpg',
            'buy_count'   => '0',
            'price_en'   => '0',
        ]);
        DB::table('products')->insert([
            'name'   => 'محصول دو',
            'description'   => 'توضیحات دو',
            'price'   => '20000',
            'discount'   => '2',
            'price_after_discount'   => '19600',
            'rate'   => '2',
            'category'   => '4',
            'photo1'   => '158587401504.jpg',
            'buy_count'   => '0',
            'price_en'   => '0',
        ]);
    }
}
