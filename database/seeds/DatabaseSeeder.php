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
        DB::table('khachhang')->insert(
            ['hoTen'=>'ho ten mau 1','gioiTinh'=>'Nam','CMND'=>'999999999','soDienThoai'=>'0000000000','email'=>str_random(3).'@gmail.com','diaChi'=>'Can Tho'],
            ['hoTen'=>'ho ten mau 3','gioiTinh'=>'Nam','CMND'=>'999999999','soDienThoai'=>'0000000000','email'=>str_random(3).'@gmail.com','diaChi'=>'CM'],
            ['hoTen'=>'ho ten mau 4','gioiTinh'=>'Nam','CMND'=>'999999999','soDienThoai'=>'0000000000','email'=>str_random(3).'@gmail.com','diaChi'=>'Can Tho']          
        );
    }
}
