<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\Angkatan;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Kelas;
use App\Models\Organisasi;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //jabatan
        Jabatan::create([
            'nama_jabatan' => 'Ketua',
        ]);
        Jabatan::create([
            'nama_jabatan' => 'koordinator',
        ]);
        Jabatan::create(
            [
                'nama_jabatan' => 'Wakil ketua',
            ]
        );
        Jabatan::create(
            [
                'nama_jabatan' => 'Anggota',
            ]
        );
        Jabatan::create(
            [
                'nama_jabatan' => 'Koordinator 1',
            ]
        );
        Jabatan::create(
            [
                'nama_jabatan' => 'Koordinator 2',
            ]
        );


        //divisi
        Divisi::create(
            [
                'nama_divisi' => 'Trikora',
                'slug' => 'trikora',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekretaris',
                'slug' => 'sekretaris',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Bendahara',
                'slug' => 'bendahara',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 1',
                'slug' => 'sekbid1',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 2',
                'slug' => 'sekbid2',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 3',
                'slug' => 'sekbid3',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 4',
                'slug' => 'sekbid4',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 5',
                'slug' => 'sekbid5',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 6',
                'slug' => 'sekbid6',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 7',
                'slug' => 'sekbid7',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 8',
                'slug' => 'sekbid8',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 9',
                'slug' => 'sekbid9',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Sekbid 10',
                'slug' => 'sekbid10',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Komisi A',
                'slug' => 'komisia',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Komisi B',
                'slug' => 'komisib',
            ]
        );
        Divisi::create(
            [
                'nama_divisi' => 'Komisi C',
                'slug' => 'komisic',
            ]
        );

        Divisi::create(
            [
                'nama_divisi' => 'Trimitra',
                'slug' => 'trimitra',
            ]
        );

        Angkatan::create([
            'nama_angkatan' => 'askara',
            'visi_angkatan' => 'Menjadikan Osis SMKN 13 Bandung sebagai Organisasi Yang Memiliki Sifat Disiplin,Edukatif,Inspiratif, Kolaboratif,Komunikatif, Kreatif,Aktif',
            'misi_angkatan' => '
            1.Menjadikan OSIS Sebagai Wadah Siswa SMK 13 mengembangkan minat, bakatnya dengan mengadakan program yang bermanfaat dan menginspirasi.
            <br/>
            2.Merencanakan dan melaksanakan seluruh program kerja OSIS dengan prinsip Kerja Sama,Kerja Keras,Kerja Cerdas,Kerja Ikhlas Dan Kerja Tuntas.
            <br/>
            3. Menjaga Koordinasi, Kolaborasi dan Kerja sama yang sudah terjalin antar Rekan Osis, Sekolah dan MPK
            <br/>
            4.Aktif dengan melibatkan pengurus OSIS untuk ikut berkontribusi dalam kegiatan kegiatan yang diadakan sekolah
            <br/>
            5.Menjunjung Tinggi Nilai Kekeluargaan
            
            ',
            'gambar_angkatan' => 'image-anggota/logo.png',
        ]);
        Angkatan::create([
            'nama_angkatan' => 'mantulll',
            'visi_angkatan' => '
            Menjadikan MPK Sat Dasa Bhakti Anuraga Paramartha sebagai wadah dalam menampung aspirasi siswa, sumber informasi, menjadi cover yang baik, menjadi pelopor perubahan yang transparan serta membantu sekolah untuk mencapai misinya.
            ',
            'misi_angkatan' => '
            1. Berkomitmen tinggi dan bertanggung jawab dalam melaksanakan tugas.
            <br/>
            2. Menampung kreatifitas siswa.
            <br/>
            3. Menjalin hubungan yang baik dengan seluruh warga SMKN 13 Bandung.
            <br/>
            4. Transparan, jujur, dan kekeluargaan.
            <br/>
            5. Memperbaharui eskul di SMKN 13 Bandung.
            <br/>
            6. Mematuhi peraturan sekolah serta membantu menjalan misi SMKN 13 Bandung agar mencapai visi SMKN 13 Bandung.

            ',
            'gambar_angkatan' => 'image-anggota/logo-mpk.png',
        ]);

        User::create([
            'name' => 'SMK NEGERI 13 BANDUNG',
            'username' => 'Admin',
            'email' => 'bdg133s3mk4@gmail.com',
            'password' => '$2y$10$3davSUhRMQwfaxlTvK8F0u5DGmRHr6ea7gjL2i5QGLkCiVeIZhJ8G',
        ]);

        // Organisasi
        Organisasi::create([
            'nama_organisasi' => 'OSIS',
        ]);
        Organisasi::create([
            'nama_organisasi' => 'MPK',
        ]);
        $kelas = [
            ['nama_kelas'=>'X AK 1'],
            ['nama_kelas'=>'X AK 2'],
            ['nama_kelas'=>'X AK 3'],
            ['nama_kelas'=>'X AK 4'],
            ['nama_kelas'=>'X AK 5'],
            ['nama_kelas'=>'X AK 6'],
            ['nama_kelas'=>'X TKJ 1'],
            ['nama_kelas'=>'X TKJ 2'],
            ['nama_kelas'=>'X TKJ 3'],
            ['nama_kelas'=>'X RPL 1'],
            ['nama_kelas'=>'X RPL 2'],
            ['nama_kelas'=>'XI AK 1'],
            ['nama_kelas'=>'XI AK 2'],
            ['nama_kelas'=>'XI AK 3'],
            ['nama_kelas'=>'XI AK 4'],
            ['nama_kelas'=>'XI AK 5'],
            ['nama_kelas'=>'XI AK 6'],
            ['nama_kelas'=>'XI TKJ 1'],
            ['nama_kelas'=>'XI TKJ 2'],
            ['nama_kelas'=>'XI TKJ 3'],
            ['nama_kelas'=>'XI RPL 1'],
            ['nama_kelas'=>'XI RPL 2'],

        ];
        foreach ($kelas as $class) {
            Kelas::create($class);
        }
        //buat value aggota
        $anggota = [
            [
                'id_angkatan' => 1,
                'id_divisi' => 1,
                'id_jabatan' => 1,
                'id_kelas' => 20,
                'id_organisasi' => 1,
                'nama_anggota' => 'Fadhal Muhammad Jibran',
                'instagram_anggota' => 'https://www.instagram.com/ini.jibrann/',
                'gambar_anggota' => "image-anggota/OSIS/Trikora/Fadhal Muhammad Jibran.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 1,
                'id_jabatan' => 3,
                'id_kelas' => 19,
                'id_organisasi' => 1,
                'nama_anggota' => 'Alif Alfarizi',
                'instagram_anggota' => 'https://www.instagram.com/ini.aliff_/',
                'gambar_anggota' => "image-anggota/OSIS/Trikora/Alif Alfarizi.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 1,
                'id_jabatan' => 3,
                'id_kelas' => 20,
                'id_organisasi' => 1,
                'nama_anggota' => 'Nesya Dzikriya Dane Pratama',
                'instagram_anggota' => 'https://www.instagram.com/ini.nesyaa14/',
                'gambar_anggota' => "image-anggota/OSIS/Trikora/Nesya Dzikriya Dane Pratama.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 2,
                'id_jabatan' => 2,
                'id_kelas' => 15,
                'id_organisasi' => 1,
                'nama_anggota' => 'Alexandri Nathania Dewi Isprawira',
                'instagram_anggota' => 'https://www.instagram.com/alexandrinathaniaa/',
                'gambar_anggota' => "image-anggota/OSIS/Sekretaris/Alexandri Nathania Dewi Isprawira.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 3,
                'id_jabatan' => 2,
                'id_kelas' => 16,
                'id_organisasi' => 1,
                'nama_anggota' => 'Intan Rahma Yanti',
                'instagram_anggota' => 'https://www.instagram.com/intannrmy_/',
                'gambar_anggota' => "image-anggota/OSIS/Bendahara/Intan Rahma Yanti.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 4,
                'id_jabatan' => 2,
                'id_kelas' => 12,
                'id_organisasi' => 1,
                'nama_anggota' => 'Mentari Timur El-Faiz',
                'instagram_anggota' => 'https://www.instagram.com/mentimoer_/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 1/Mentari Timur El-Faiz.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 5,
                'id_jabatan' => 2,
                'id_kelas' => 16,
                'id_organisasi' => 1,
                'nama_anggota' => 'Tia Nurul Alawiyah',
                'instagram_anggota' => 'https://www.instagram.com/tiaa.nurul/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 2/Tia Nurul Alawiyah.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 6,
                'id_jabatan' => 2,
                'id_kelas' => 14,
                'id_organisasi' => 1,
                'nama_anggota' => 'Rava Amesta',
                'instagram_anggota' => '-',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 3/Rava Amesta.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 7,
                'id_jabatan' => 2,
                'id_kelas' => 16,
                'id_organisasi' => 1,
                'nama_anggota' => 'Ratna Fitriana Kusuma Dewi',
                'instagram_anggota' => 'https://www.instagram.com/rrtfkd._495/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 4/Ratna Fitriana Kusuma Dewi.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 8,
                'id_jabatan' => 2,
                'id_kelas' => 15,
                'id_organisasi' => 1,
                'nama_anggota' => 'Zahra Safitri',
                'instagram_anggota' => 'https://www.instagram.com/wcispyskie/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 5/Zahra Safitri.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 9,
                'id_jabatan' => 2,
                'id_kelas' => 17,
                'id_organisasi' => 1,
                'nama_anggota' => 'Sinta Rahmawati',
                'instagram_anggota' => 'https://www.instagram.com/sintaaraaa_/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 6/Sinta Rahmawati.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 10,
                'id_jabatan' => 2,
                'id_kelas' => 16,
                'id_organisasi' => 1,
                'nama_anggota' => 'Fayyadh Ghozy Novandi',
                'instagram_anggota' => 'https://www.instagram.com/payadapay/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 7/Fayyadh Ghozy Novandi.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 11,
                'id_jabatan' => 2,
                'id_kelas' => 20,
                'id_organisasi' => 1,
                'nama_anggota' => 'Dhafa Rifalda Fauzan',
                'instagram_anggota' => 'https://www.instagram.com/dhaa.__.fa/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 8/Dhafa Rifalda Fauzan.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 12,
                'id_jabatan' => 2,
                'id_kelas' => 19,
                'id_organisasi' => 1,
                'nama_anggota' => 'Muhammad Haikal Baihaqi',
                'instagram_anggota' => 'https://www.instagram.com/h.kaal_/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 9/Muhammad Haikal Baihaqi.png",
            ],
            [
                'id_angkatan' => 1,
                'id_divisi' => 13,
                'id_jabatan' => 2,
                'id_kelas' => 14,
                'id_organisasi' => 1,
                'nama_anggota' => 'Salwa Alya Utama',
                'instagram_anggota' => 'https://www.instagram.com/salwaalya__/',
                'gambar_anggota' => "image-anggota/OSIS/Sekbid 10/Salwa Alya Utama.png",
            ],
        ];
        foreach ($anggota as $user) {
            Anggota::create($user);
        }
        
        $anggotaMpk = [
            [
                'id_angkatan' => 2,
                'id_divisi' => 17,
                'id_jabatan' => 1,
                'id_kelas' => 16,
                'id_organisasi' => 2,
                'nama_anggota' => 'Muhammad Dzaki Permana',
                'instagram_anggota' => 'https://www.instagram.com/mdzkiip_/',
                'gambar_anggota' => "image-anggota/MPK/TRIMITRA/KETUA.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 17,
                'id_jabatan' => 3,
                'id_kelas' => 17,
                'id_organisasi' => 2,
                'nama_anggota' => 'Agnesya Putri Feyllisa',
                'instagram_anggota' => 'https://www.instagram.com/agnnessya/',
                'gambar_anggota' => "image-anggota/MPK/TRIMITRA/WAKIL KETUA 1.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 17,
                'id_jabatan' => 3,
                'id_kelas' => 17,
                'id_organisasi' => 2,
                'nama_anggota' => 'Lasro Fansiskus Solanus Lumban Batu',
                'instagram_anggota' => 'https://www.instagram.com/frnsks.lasro/',
                'gambar_anggota' => "image-anggota/MPK/TRIMITRA/WAKIL KETUA 2.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 2,
                'id_jabatan' => 2,
                'id_kelas' => 13,
                'id_organisasi' => 2,
                'nama_anggota' => 'Dina Leisya Hanifah',
                'instagram_anggota' => 'https://www.instagram.com/dinaleisya/',
                'gambar_anggota' => "image-anggota/MPK/SEKRETARIS/SEKRETARIS 1.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 3,
                'id_jabatan' => 2,
                'id_kelas' => 12,
                'id_organisasi' => 2,
                'nama_anggota' => 'Inay Inayaturohmah',
                'instagram_anggota' => 'https://www.instagram.com/naytrmh/',
                'gambar_anggota' => "image-anggota/MPK/BENDAHARA/BENDAHARA 1.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 14,
                'id_jabatan' => 5,
                'id_kelas' => 4,
                'id_organisasi' => 2,
                'nama_anggota' => 'Abdul Azis Solihudin',
                'instagram_anggota' => 'https://www.instagram.com/bdullazis_/',
                'gambar_anggota' => "image-anggota/MPK/KOMISI A/KOORDINATOR 1.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 14,
                'id_jabatan' => 6,
                'id_kelas' => 18,
                'id_organisasi' => 2,
                'nama_anggota' => 'Putri Nabiilah Awwaliyah',
                'instagram_anggota' => 'https://www.instagram.com/ptrinwy/',
                'gambar_anggota' => "image-anggota/MPK/KOMISI A/KOORDINATOR 2.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 15,
                'id_jabatan' => 5,
                'id_kelas' => 12,
                'id_organisasi' => 2,
                'nama_anggota' => 'Nazwa Fadlilatu Muthmainnah',
                'instagram_anggota' => 'https://www.instagram.com/nazwa.fdlt/',
                'gambar_anggota' => "image-anggota/MPK/KOMISI B/KOORDINATOR 1.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 15,
                'id_jabatan' => 6,
                'id_kelas' => 17,
                'id_organisasi' => 2,
                'nama_anggota' => 'Wildan Muhammad Sawwa',
                'instagram_anggota' => 'https://www.instagram.com/anodeidan/',
                'gambar_anggota' => "image-anggota/MPK/KOMISI B/KOORDINATOR 2.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 16,
                'id_jabatan' => 5,
                'id_kelas' => 18,
                'id_organisasi' => 2,
                'nama_anggota' => 'Pikri Adul Sidik',
                'instagram_anggota' => 'https://www.instagram.com/pikriias/',
                'gambar_anggota' => "image-anggota/MPK/KOMISI C/KOORDINATOR 1.png",
            ],
            [
                'id_angkatan' => 2,
                'id_divisi' => 16,
                'id_jabatan' => 6,
                'id_kelas' => 21,
                'id_organisasi' => 2,
                'nama_anggota' => 'Heky Velma',
                'instagram_anggota' => 'https://www.instagram.com/hekishh_/',
                'gambar_anggota' => "image-anggota/MPK/KOMISI C/KOORDINATOR 2.png",
            ]
        ];
        foreach ($anggotaMpk as $user) {
            Anggota::create($user);
        }
        //bikin factory 10 data anggota
        // Anggota::factory(10)->create();
    }
}