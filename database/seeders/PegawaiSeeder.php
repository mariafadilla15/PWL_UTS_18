<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            [
                'nip' => '001',
                'nama' => 'Maria Fadilla',
                'alamat' => 'Jl.Soekarno Hatta',
                'jabatan' => 'Presdir',
                'gaji_pokok' => '10.000.000'
            ], 
            [
                'nip' => '008104567', 
                'nama' => 'Lisa Mona',
                'alamat' => 'jl.xxx Malang',
                'jabatan' => 'Manager',
                'gaji_pokok' => '5.500.000'
            ],
            [
                'nip' => '003',
                'nama' => 'Xaviero',
                'alamat' => 'Jl.yyy Malang',
                'jabatan' => 'Personal Assistant',
                'gaji_pokok' => '7.000.000'
            ],
            [
                'nip' => '004',
                'nama' => 'Agatta',
                'alamat' => 'Jl.zzz Malang',
                'jabatan' => 'Project Manager',
                'gaji_pokok' => '8.000.000'
            ],
            [
                'nip' => '005',
                'nama' => 'Hasibuan',
                'alamat' => 'Jl.aaa Malang',
                'jabatan' => 'Staf Marekting',
                'gaji_pokok' => '3.500.000'
            ],
            [
                'nip' => '006',
                'nama' => 'Benjamin',
                'alamat' => 'Jl.bbb Malang',
                'jabatan' => 'Staf Marketing',
                'gaji_pokok' => '3.500.000'
            ],
            [
                'nip' => '007',
                'nama' => 'Anna',
                'alamat' => 'Jl.ccc Malang',
                'jabatan' => 'Staf Marketing',
                'gaji_pokok' => '3.500.000'
            ],
            [
                'nip' => '008',
                'nama' => 'Amel',
                'alamat' => 'Jl.ddd Malang',
                'jabatan' => 'Staf Personalia',
                'gaji_pokok' => '3.500.000'
            ],
            [
                'nip' => '009',
                'nama' => 'Emely',
                'alamat' => 'Jl.eee Malang',
                'jabatan' => 'Staf Admin',
                'gaji_pokok' => '3.000.000'
            ],
            [
                'nip' => '010',
                'nama' => 'Ambar',
                'alamat' => 'Jl.fff Malang',
                'jabatan' => 'Staf Admin',
                'gaji_pokok' => '3.000.000'
            ],
            [
                'nip' => '011',
                'nama' => 'Rahman',
                'alamat' => 'Jl.ggg Malang',
                'jabatan' => 'Staf Tata Usaha',
                'gaji_pokok' => '3.500.000'
            ],
            [
                'nip' => '012',
                'nama' => 'Rendy',
                'alamat' => 'Jl.hhh Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '2.000.000'
            ],
            [
                'nip' => '013',
                'nama' => 'Anggun',
                'alamat' => 'Jl.iii Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '2.000.000'
        
            ],
            [
                'nip' => '014',
                'nama' => 'Unaa',
                'alamat' => 'Jl.jjj Malang',
                'jabatan' => 'Staf CS',
                'gaji_pokok' => '2.000.000'
        
            ],
            [
                'nip' => '015',
                'nama' => 'Lala Nitania',
                'alamat' => 'Jl.kkk Malang',
                'jabatan' => 'Staf CS',
                'gaji_pokok' => '2.000.000'
        
            ],
            [
                'nip' => '016',
                'nama' => 'Hilda',
                'alamat' => 'Jl.lll Malang',
                'jabatan' => 'Resepsionis',
                'gaji_pokok' => '3.000.000'
        
            ],
            [
                'nip' => '017',
                'nama' => 'Arman',
                'alamat' => 'Jl.mmm Malang',
                'jabatan' => 'Finance Manager',
                'gaji_pokok' => '8.000.000'
        
            ],
            [
                'nip' => '018',
                'nama' => 'Sadewa',
                'alamat' => 'Jl.nnn Malang',
                'jabatan' => 'Staf Finance',
                'gaji_pokok' => '4.500.000'
        
            ],
            [
                'nip' => '019',
                'nama' => 'Nakula',
                'alamat' => 'Jl.ooo Malang',
                'jabatan' => 'Staf Finance',
                'gaji_pokok' => '4.500.000'
        
            ],            
            [
                'nip' => '020',
                'nama' => 'Arjuna',
                'alamat' => 'Jl.ppp Malang',
                'jabatan' => 'Security',
                'gaji_pokok' => '1.750.000'
        
            ],

        ]);
    }
}
