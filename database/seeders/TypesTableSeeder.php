<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config('helpers.types');
        
        foreach($types as $type){
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->vanilla = $type['vanilla'];
            $newType->save();
        }
    }
}