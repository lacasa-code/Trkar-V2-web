<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribute;

class AttributeSeeder extends Seeder
{
    
    public function run()
    {
        Attribute::create ([
            'name'=>'width',
    
        ]);
        Attribute::create ([
            'name'=>'hieght',
    
        ]);
        Attribute::create ([
            'name'=>'diamter',
    
        ]);
        Attribute::create ([
            'name'=>'spead_rating',
    
        ]);
        Attribute::create ([
            'name'=>'load_index',
    
        ]);
        Attribute::create ([
            'name'=>'axle',
    
        ]);
        Attribute::create ([
            'name'=>'Manufacturer',
        ]);
    }
}
