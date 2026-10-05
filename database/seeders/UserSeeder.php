<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->truncate();

        $kelasB = Kelas::where('nama_kelas', 'B')->first();

        if ($kelasB) {
            UserModel::create([
                'nama' => 'Alyssa Putri Hermawan',
                'npm' => '2417051051',
                'kelas_id' => $kelasB->id,
            ]);
        }
    }
}
