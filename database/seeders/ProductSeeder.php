<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Hawaiian Pizza A',
                'description' => 'Made with Italian Sauce, Chicken, and organic vegetables.',
                'image' => 'https://i.imgur.com/1U3VQNC.jpg',
                'price' => 10.0
            ],
            [
                'name' => 'Smoky Burger',
                'description' => 'Made with Italian Sauce, Chicken, and organic vegetables.',
                'image' => 'https://i.imgur.com/P2qHKk1.jpg',
                'price' => 6.5
            ],
            [
                'name' => 'Chicken Steam Momo',
                'description' => 'Made with Italian Sauce, Chicken, and organic vegetables.',
                'image' => 'https://i.imgur.com/F6UIiK0.jpg',
                'price' => 6.0
            ],
            [
                'name' => 'Nice Burger',
                'description' => 'Made with Italian Sauce, Chicken, and organic vegetables.',
                'image' => 'https://i.imgur.com/rc1AHMc.jpg',
                'price' => 7.5
            ],
            [
                'name' => 'Hawaiian Pizza B',
                'description' => 'Made with Italian Sauce, Chicken, and organic vegetables.',
                'image' => 'https://i.imgur.com/faJ352B.jpg',
                'price' => 8.5
            ],
            [
                'name' => 'Hawaiian Pizza C',
                'description' => 'Made with Italian Sauce, Chicken, and organic vegetables.',
                'image' => 'https://i.imgur.com/1U3VQNC.jpg',
                'price' => 9.0
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}