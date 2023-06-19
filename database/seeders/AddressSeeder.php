<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            [
                'Триумф',
                'Эжва',
                'просп. Бумажников, 37А'
            ],
            [
                'Антлантида',
                'Сыктывкар',
                'Тентюковская улица, 308'
            ],
        ];

        foreach ($addresses as $address){
            Address::create([
                'name' => $address[0],
                'city' => $address[1],
                'address' => $address[2],
            ]);
        }
    }
}
