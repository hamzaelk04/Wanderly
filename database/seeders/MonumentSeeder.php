<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Monument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example Categories
        $historical = Category::firstOrCreate(['name' => 'Historical',
        'slug' => 'historical']);
        $cultural = Category::firstOrCreate(['name' => 'Cultural',
        'slug' => 'cultural']);

        // Monuments data
        $monuments = [
            [
                'data' => [
                    'name' => 'Great Pyramid of Giza',
                    'city' => 'Agadir',
                    'address' => 'Dechira',
                    'description' => 'The oldest of the Seven Wonders of the Ancient World.',
                    'history' => 'Built around 2560 BC.',
                    'openning' => '15:08:00',
                    'closing' => '22:08:00',
                    'fees' => 20.00
                ],
                'category' => $historical,
                'images' => [
                    ['path' => 'monuments/76cey1IUqtrG61jGIzeYFU5kTKUBrlvh56LuyBVy.jpg'],
                    ['path' => 'monuments/76cey1IUqtrG61jGIzeYFU5kTKUBrlvh56LuyBVy.jpg']
                ]
            ],
            [
                'data' => [
                    'name' => 'Hassan II Mosque',
                    'city' => 'Casablanca',
                    'address' => 'Boulevard de la Corniche',
                    'description' => 'One of the largest mosques in the world.',
                    'history' => 'Completed in 1993.',
                    'openning' => '09:00:00',
                    'closing' => '18:00:00',
                    'fees' => 12.00
                ],
                'category' => $cultural,
                'images' => [
                    ['path' => 'monuments/76cey1IUqtrG61jGIzeYFU5kTKUBrlvh56LuyBVy.jpg']
                ]
            ],
            [
                'data' => [
                    'name' => 'Volubilis',
                    'city' => 'Meknes',
                    'address' => 'Oualili',
                    'description' => 'Ancient Roman city ruins.',
                    'history' => 'Dates back to 3rd century BC.',
                    'openning' => '08:00:00',
                    'closing' => '17:00:00',
                    'fees' => 10.00
                ],
                'category' => $historical,
                'images' => [
                    ['path' => 'monuments/76cey1IUqtrG61jGIzeYFU5kTKUBrlvh56LuyBVy.jpg'],
                    ['path' => 'monuments/76cey1IUqtrG61jGIzeYFU5kTKUBrlvh56LuyBVy.jpg'],
                    ['path' => 'monuments/76cey1IUqtrG61jGIzeYFU5kTKUBrlvh56LuyBVy.jpg']
                ]
            ]
        ];

        // Loop through monuments
        foreach ($monuments as $item) {
            $monument = Monument::create($item['data']);

            // Attach category
            $monument->categories()->attach($item['category']->id);

            // Attach images
            foreach ($item['images'] as $img) {
                $monument->images()->create($img);
            }
        }
    }
}
