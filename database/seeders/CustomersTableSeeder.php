<?php
//DB nằm trong schemma
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $limit = 100;
        $fake = Faker::create();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('customers')->insert([
                'name' => $fake->name,
                'gender'=>$fake->name,
                'email' =>$fake->unique->email,
                'phone' => $fake->phoneNumber,
                'address' => $fake ->address,
            ]);
        }
    }
}
// Thực hiện tạo seeder khoảng 3 records cho mỗi bảng, (category và products)
// Làm xong nhớ gửi bài lên cho thầy 
 
