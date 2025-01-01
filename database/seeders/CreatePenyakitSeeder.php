<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Gangguan Kecemasan Sosial',
                'kode' => 'P1',
                'penyebab' => 'Gangguan Kecemasan Sosial atau juga biasa disebut fobia sosial, adalah kondisi mental di mana seseorang mengalami kecemasan berlebihan dan ketakutan terhadap situasi sosial atau saat tampil di depan orang lain. Penderita gangguan kecemasan sosial sering merasa khawatir akan dinilai, diejek, atau merasa malu di hadapan orang lain, sehingga mereka cenderung menghindari situasi sosial atau menghadapinya dengan ketegangan yang tinggi.'
            ],
            [
                'nama' => 'Gangguan Panik',
                'kode' => 'P2',
                'penyebab' => 'Gangguan Panik adalah jenis gangguan kecemasan yang ditandai oleh serangan ketakutan yang intens dan mendadak, yang sering kali terjadi secara berulang. Gejala fisik yang mungkin muncul meliputi nyeri dada, jantung berdebar, sesak napas, pusing, atau gangguan pencernaan. Serangan ini muncul secara tiba-tiba dan tidak selalu terkait dengan ketakutan atau pemicu stres yang jelas.'
            ],
            [
                'nama' => 'Gangguan Kecemasan Umum',
                'kode' => 'P3',
                'penyebab' => 'Gangguan Kecemasan Umum adalah kondisi mental yang ditandai oleh kecemasan yang berlebihan, berkepanjangan, dan sulit untuk dikendalikan. Penderita gangguan ini sering kali merasa khawatir atau cemas mengenai berbagai aspek kehidupan sehari-hari, bahkan tanpa alasan yang jelas. Kecemasan yang berlebihan ini dapat mengganggu fungsi sehari-hari dan mempengaruhi kualitas hidup individu.'
            ],
            [
                'nama' => 'Gangguan Stres Pascatrauma',
                'kode' => 'P4',
                'penyebab' => 'Gangguan Stres Pasca Trauma adalah kondisi kesehatan mental yang serius yang dapat muncul setelah seseorang mengalami atau menyaksikan peristiwa traumatis yang berat. Peristiwa tersebut bisa mencakup bencana alam, kecelakaan, kekerasan, perang, atau pengalaman traumatis lainnya. Gangguan ini dapat menyebabkan penderita mengalami berbagai gejala emosional, fisik, dan perilaku yang mengganggu kehidupan sehari-hari mereka.'
            ]

        ];

        Penyakit::insert($data);
    }
}
