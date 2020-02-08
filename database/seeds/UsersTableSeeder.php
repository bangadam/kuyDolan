<?php

use App\Category as CategoryAlias;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataCategory = [
            "Wisata Alam",
            "Wisata Religi",
            "Wisata Belanja",
            "Wisata Kuliner",
            "Wisata Edukasi",
            "Wisata Budaya",
            "Wisata Berburu",
            "Wisata Politik / Konvensi",
        ];

        foreach ($dataCategory as $data) {
            CategoryAlias::create([
                'name' => $data
            ]);
        }


    }
}
