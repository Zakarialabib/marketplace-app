<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 1,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique',
                'status' => 3,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 2,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique',
                'status' => 2,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 3,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique',
                'status' => 8,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 4,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique',
                'status' => 5,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 5,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 52',
                'status' => 5,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 6,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 29',
                'status' => 5,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 7,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 43',
                'status' => 3,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 8,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 43',
                'status' => 3,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 9,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 11',
                'status' => 3,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 10,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 22',
                'status' => 3,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 11,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 33',
                'status' => 3,
                'total' => 100,
                'created_at' => now(),
            ],
            [
                'admin_id'  => 1,
                'client_id' => 1,
                'vendor_id' => 1,
                'subscription_id' => 5,
                'code' => 12,
                'receiver_name' => 'Hicham',
                'receiver_address' => 'Tanger',
                'receiver_phone' => mt_rand(1000000000, 9999999999),
                'receiver_email' => '',
                'product_name' => 'Produit Physique 55',
                'status' => 3,
                'total' => 100,
                'created_at' => now(),
            ],
        ];

        Order::insert($orders);
    }
}
