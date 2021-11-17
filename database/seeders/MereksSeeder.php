<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Merek;
use App\Models\Sopir;
use App\Models\Mobil;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\Pembayaran;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class MereksSeeder extends Seeder
{

    public function run()
    {

        $admin1 = Admin::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => 'rahasia']);
        $merek1 = Merek::create(['nama_merek' => 'Toyota']);
        $sopir1 = Sopir::create(['nama_sopir' => 'Aam Rura', 'status' => 'Sehat']);
        $customer1 = Customer::create(['name' => 'Erin', 'nomor_hp' => '12345678', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'alamat' => 'Bandung', 'email' => 'erin@gmail.com', 'password' => 'rahasia']);



        $mobil1 = Mobil::create(['id_merek' => $merek1->id, 'nama_mobil' => 'Avansa', 'nomor_polisi' => 'D001', 'seat' => '4', 'bahan_bakar' => 'Pertamina', 'status_mobil' => 'Aman', 'tarif_mobil' => '100000', 'tarif_sopir' => '50000']);
        $booking1 = Booking::create(['id_mobil' => $mobil1->id, 'id_customer' => $customer1->id, 'id_sopir' => $sopir1->id, 'id_admin' => $admin1->id, 'tanggal_booking' => '2021-01-12', 'tanggal_mulai' => '2021-01-13', 'tanggal_kembali' => '2021-01-18', 'denda' => '0', 'durasi' => '5 hari', 'status' => 'Sewa', 'jumlah_bayar' => '5000000', 'jumlah_dp' => '2000000']);
        $pembayaran1 = Pembayaran::create(['id_booking' => $booking1->id, 'id_customer' => $customer1->id, 'dp' => '2000000', 'kekurangan' => '3000000', 'status' => 'Bayar Kurang']);
        $testimoni1 = Testimoni::create(['id_customer' => $customer1->id, 'testimoni' => 'Mobil Dalam Keadaan Baik Dan Sangat Bersih']);
    }
}
