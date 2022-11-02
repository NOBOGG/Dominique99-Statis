<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    private static $listMenu = [
        [
            'id' => 1,
            'namaMenu' => 'Lidah Kucing',
            'deskripsi' => 'Kue kering berbentuk panjang dan tipis dengan cita rasa yang gurih dan renyah tentunya',
            'kategori' => 'Cookies',
            'fotoMakanan' => 'images/lidahkucing.jpg',
            'bahan' => '',
            'menuFavorite' => 0
        ],
        [
            'id' => 2,
            'namaMenu' => 'Sagu Keju',
            'deskripsi' => 'Kue kering yang bisa menemani lebaranmu dengan rasa yang gurih dan menggunakan resep rahasia keluarga yang turun temurun terkenal enaknya',
            'kategori' => 'Cookies',
            'fotoMakanan' => 'images/sagukeju.jpg',
            'bahan' => '',
            'menuFavorite' => 0
        ],
        [
            'id' => 3,
            'namaMenu' => 'Chocolate Chip Cookies',
            'deskripsi' => 'Kukis yang disajikan dengan kepingan coklat yang dapat mengguggah rasa',
            'kategori' => 'Cookies',
            'fotoMakanan' => 'images/chocochips.jpg',
            'bahan' => '',
            'menuFavorite' => 1
        ],
        [
            'id' => 4,
            'namaMenu' => 'Mini Chiffon Hias',
            'deskripsi' => 'Kue yang sangat ringan yang dibuat dengan minyak sayur, telur, gula, tepung, baking powder, dan perasa. Bisa juga dihias sesuai request',
            'kategori' => 'Cake',
            'fotoMakanan' => 'images/chiffon.jpg',
            'bahan' => '',
            'menuFavorite' => 0
        ],
        [
            'id' => 5,
            'namaMenu' => 'Roll Cake Keju',
            'deskripsi' => 'Roll cake istimewah dengan isian keju yang menciptakan rasa gurih yang tidak ada duanya',
            'kategori' => 'Cake',
            'fotoMakanan' => 'images/rollcake.jpg',
            'bahan' => '',
            'menuFavorite' => 1
        ],
        [
            'id' => 6,
            'namaMenu' => 'Birthday Cake',
            'deskripsi' => 'Kue Ulang Tahun warna dan hiasan bisa sesuai dengan request',
            'kategori' => 'Cake',
            'fotoMakanan' => 'images/cakeultah.jpg',
            'bahan' => '',
            'menuFavorite' => 0
        ],
        [
            'id' => 7,
            'namaMenu' => 'Kue Lapis',
            'deskripsi' => 'Kue Lapis dengan cita rasa tradisional yang sangat mengguggah cita rasa',
            'kategori' => 'Kue Tradisional',
            'fotoMakanan' => 'images/kuelapis.jpg',
            'bahan' => '',
            'menuFavorite' => 0
        ],
        [
            'id' => 8,
            'namaMenu' => 'Mooncake',
            'deskripsi' => 'Produk roti Cina yang secara tradisional dimakan selama Festival Pertengahan Musim Gugur. ',
            'kategori' => 'Kue Tradisional',
            'fotoMakanan' => 'images/mooncake.jpg',
            'bahan' => '',
            'menuFavorite' => 1
        ]
    ];

    public static function index(){
        return collect(self::$listMenu);
    }

    public static function detailMenu($id){
        return self::index()->firstWhere('id', $id);
    }
}
