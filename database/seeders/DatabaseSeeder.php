<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
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
        User::create([
            "name" => "admin",
            "email" => "bogeng@example.com",
            "address" => "Planet Bumi",
            "password" => bcrypt('admin'),
            "role_id" => "1",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            "name" => "user",
            "email" => "lmao@example.com",
            "address" => "Planet Mars",
            "password" => bcrypt('user'),
            "role_id" => "3",
            'remember_token' => Str::random(10),
        ]);
        Category::create([
            "name" => "Outdoor Plant",
            "slug" => "outdoor-plant"
        ]);
        Category::create([
            "name" => "Indoor Plant",
            "slug" => "indoor-plant"
        ]);
        Category::create([
            "name" => "Office Plant",
            "slug" => "office-plant"
        ]);
        Category::create([
            "name" => "Fruit Plant",
            "slug" => "fruit-plant"
        ]);
        Role::create([
            "name" => "admin",
            "slug" => "admin"
        ]);
        Role::create([
            "name" => "seller",
            "slug" => "seller"
        ]);
        Role::create([
            "name" => "user",
            "slug" => "user"
        ]);
        // Product::create([
        //     "name" => "",
        //     "slug" => "",
        //     "category_id" => "",
        //     "dekripsi" => "",
        //     "foto" => "",
        //     "harga" => "",
        // ]);
        // Product::factory(10)->create();

        Product::create([
            "name" => "Mawar",
            "slug" => "mawar",
            "category_id" => "2",
            "deskripsi" => "Mawar adalah suatu jenis tanaman semak dari genus Rosa sekaligus nama bunga yang dihasilkan tanaman ini. Mawar liar terdiri dari 100 spesies lebih, kebanyakan tumbuh di belahan bumi utara yang berudara sejuk. Spesies mawar umumnya merupakan tanaman semak yang berduri atau tanaman memanjat yang tingginya bisa mencapai 2 sampai 5 meter. Walaupun jarang ditemui, tinggi tanaman mawar yang merambat di tanaman lain bisa mencapai 20 meter.",
            "foto" => "mawar.jpg",
            "harga" => "20000",
        ]);

        Product::create([
            "name" => "Mawar Canina",
            "slug" => "mawar_canina",
            "category_id" => "1",
            "deskripsi" => "La Rosa canina Ini adalah semak yang sangat istimewa yang bisa didapat di semua jenis taman, bahkan dalam pot, karena tingginya hanya tumbuh hingga 3 meter dan tahan terhadap embun beku hingga -20ºC tanpa masalah. Selain sangat mudah dalam perawatannya, juga harus dikatakan memiliki khasiat obat yang sangat menarik. Untuk mencari tahu apa itu, saya mengundang Anda untuk bertemu dengan salah satu mawar liar terindah di dunia: mawar anjing.",
            "foto" => "mawar_canina.jpg",
            "harga" => "30000",
        ]);

        Product::create([
            "name" => "Mawar Lincoln",
            "slug" => "mawar_lincoln",
            "category_id" => "2",
            "deskripsi" => "ni adalah semak mawar dengan karakteristik yang sangat mirip dengan kultivar lainnya yang kami temukan untuk dijual di toko pembibitan atau toko kebun. Faktanya, Yang membedakannya adalah tingginya antara 90cm sampai 2m, dan daunnya yang berwarna hijau tua agak mengkilat. Jika tidak, mekar sepanjang tahunterutama di musim semi dan musim panas. Mawarnya biasanya berwarna merah, tapi ada juga corak lain seperti kuning muda. Tentu saja aromanya tak tertandingi.",
            "foto" => "mister_lincoln.jpg",
            "harga" => "32000",
        ]);

        Product::create([
            "name" => "Tulip Gesneriana",
            "slug" => "tulip_gesneriana",
            "category_id" => "3",
            "deskripsi" => "Tulipa gesneriana , Tulip Didier atau tulip taman , adalah spesies tanaman dalam keluarga lily , dibudidayakan sebagai tanaman hias di banyak negara karena bunganya yang besar dan mencolok. Spesies tinggi, mekar terlambat ini memiliki bunga mekar tunggal dandaun lanset linier atau lebar. Ini adalah neo-spesies hibridisasi yang kompleks, dan dapat juga disebut Tulipa gesneriana . Sebagian besar kultivar tulip berasal dari Tulipa gesneriana . Itu telah dinaturalisasi di beberapa bagian Eropa tengah dan selatan dan lokasi yang tersebar diAmerika Utara .",
            "foto" => "tulip_gesneriana.jpg",
            "harga" => "50000",
        ]);

        Product::create([
            "name" => "Tulip Kakaktua",
            "slug" => "tulip_kakatua",
            "category_id" => "3",
            "deskripsi" => "Parrot tulip berbeda kelopak berbingkai bergelombang boros. Pinggirannya yang sangat berombak membuat mereka terlihat seperti bulu burung, itulah nama “keluarga yang menyenangkan” ini. Kebanyakan varietas kakatua diperoleh sebagai hasil dari mutasi ginjal tulip akhir sederhana. Pada saat yang sama, kelopak bunga mereka seringkali lebih lebar, dan bunganya jauh lebih besar daripada varietas induknya.",
            "foto" => "tulip_kakaktua.jpg",
            "harga" => "25000",
        ]);

        Product::create([
            "name" => "Tulip Kaufmanniana",
            "slug" => "tulip_kaufmanniana",
            "category_id" => "2",
            "deskripsi" => "Tanaman tulip Kaufmanniana berasal dari Turkistan, di mana mereka tumbuh liar. Mereka diperkenalkan ke Eropa pada tahun 1877. Saat ini, bunga tulip Kaufman tersedia dalam hampir semua warna kecuali biru asli, termasuk nuansa mawar yang mempesona, kuning keemasan, merah muda, ungu, oranye, dan merah. Interior bunga mekar beraneka warna. Seperti semua umbi musim semi , Kaufmanniana terlihat paling baik bila ditanam dalam kelompok setidaknya lima atau sepuluh. Tulip yang mekar lebih awal ini terutama terlihat ketika ditanam dalam kombinasi dengan umbi berbunga lainnya. Tulip teratai air cocok untuk tumbuh di zona tahan banting tanaman USDA 3 hingga 7. Di iklim yang lebih hangat, tanaman tulip Kaufmanniana dapat ditanam sebagai tanaman semusim.Read more at Gardening Know How: Kaufmanniana Plant Info: Tips For Growing Water Lily Tulips",
            "foto" => "tulip_kaufmaniana.jpg",
            "harga" => "30000",
        ]);

        User::factory(10)->create();
    }
}
