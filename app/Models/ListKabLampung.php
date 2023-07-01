<?php

namespace App\Models;
use CodeIgniter\Model;

class ListKabLampung extends Model
{
    public function getKabupaten()
    {
        $data = [
            [
                "kabupaten_kota" => "Kabupaten Lampung Barat",
                "ibu_kota" => "Liwa",
                "bupati_wali_kota" => "Nukman (Pj.)",
                "luas_wilayah" => "2.142,78 km2",
                "jumlah_penduduk" => "302.139",
                "kecamatan" => 15,
                "kelurahan_desa" => "5/131",
            ],
            [
                "kabupaten_kota" => "Kabupaten Lampung Selatan",
                "ibu_kota" => "Kalianda",
                "bupati_wali_kota" => "Nanang Ermanto",
                "luas_wilayah" => "2.219,01 km2",
                "jumlah_penduduk" => "1.064.301",
                "kecamatan" => 17,
                "kelurahan_desa" => "4/256",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Lampung Tengah",
                "ibu_kota" => "Gunung Sugih",
                "bupati_wali_kota" => "Musa Ahmad",
                "luas_wilayah" => "4.544,68 km2",
                "jumlah_penduduk" => "1.460.045",
                "kecamatan" => 28,
                "kelurahan_desa" => "10/301",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Lampung Timur",
                "ibu_kota" => "Sukadana",
                "bupati_wali_kota" => "M. Dawam Rahardjo",
                "luas_wilayah" => "3.864,69 km2",
                "jumlah_penduduk" => "1.110.340",
                "kecamatan" => 24,
                "kelurahan_desa" => "-/264",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Lampung Utara",
                "ibu_kota" => "Kotabumi",
                "bupati_wali_kota" => "Budi Utomo",
                "luas_wilayah" => "2.529,54 km2",
                "jumlah_penduduk" => "633.099",
                "kecamatan" => 23,
                "kelurahan_desa" => "15/232",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Mesuji",
                "ibu_kota" => "Wiralaga Mulya",
                "bupati_wali_kota" => "Sulpakar (Pj.)",
                "luas_wilayah" => "2.205,57 km2",
                "jumlah_penduduk" => "227.518",
                "kecamatan" => 7,
                "kelurahan_desa" => "-/105",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Pesawaran",
                "ibu_kota" => "Gedong Tataan",
                "bupati_wali_kota" => "Dendi Ramadhona",
                "luas_wilayah" => "1.278,21 km2",
                "jumlah_penduduk" => "477.468",
                "kecamatan" => 11,
                "kelurahan_desa" => "-/144",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Pesisir Barat",
                "ibu_kota" => "Krui",
                "bupati_wali_kota" => "Agus Istiqlal",
                "luas_wilayah" => "2.988,07 km2",
                "jumlah_penduduk" => "162.697",
                "kecamatan" => 11,
                "kelurahan_desa" => "2/116",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Pringsewu",
                "ibu_kota" => "Pringsewu",
                "bupati_wali_kota" => "Adi Erlansyah (Pj.)",
                "luas_wilayah" => "614,48 km2",
                "jumlah_penduduk" => "405.466",
                "kecamatan" => 9,
                "kelurahan_desa" => "5/126",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Tanggamus",
                "ibu_kota" => "Kota Agung",
                "bupati_wali_kota" => "Dewi Handajani",
                "luas_wilayah" => "2.900,29 km2",
                "jumlah_penduduk" => "640.275",
                "kecamatan" => 20,
                "kelurahan_desa" => "3/299",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Tulang Bawang",
                "ibu_kota" => "Menggala",
                "bupati_wali_kota" => "Qodratul Ikhwan (Pj.)",
                "luas_wilayah" => "3.091,08 km2",
                "jumlah_penduduk" => "430.021",
                "kecamatan" => 15,
                "kelurahan_desa" => "4/147",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Tulang Bawang Barat",
                "ibu_kota" => "Panaragan Jaya",
                "bupati_wali_kota" => "Zaidirina Wardoyo (Pj.)",
                "luas_wilayah" => "1.285,74 km2",
                "jumlah_penduduk" => "286.162",
                "kecamatan" => 9,
                "kelurahan_desa" => "3/93",
            ],
            [
                
                "kabupaten_kota" => "Kabupaten Way Kanan",
                "ibu_kota" => "Blambangan Umpu",
                "bupati_wali_kota" => "Raden Adipati Surya",
                "luas_wilayah" => "3.657,49 km2",
                "jumlah_penduduk" => "473.575",
                "kecamatan" => 14,
                "kelurahan_desa" => "6/221",
            ],
            [
                
                "kabupaten_kota" => "Kota Bandar Lampung",
                "ibu_kota" => "-",
                "bupati_wali_kota" => "Eva Dwiana",
                "luas_wilayah" => "183,31 km2",
                "jumlah_penduduk" => "1.166.066",
                "kecamatan" => 20,
                "kelurahan_desa" => "126/-",
            ],
            [
                
                "kabupaten_kota" => "Kota Metro",
                "ibu_kota" => "-",
                "bupati_wali_kota" => "Wahdi",
                "luas_wilayah" => "73,15 km2",
                "jumlah_penduduk" => "168.676",
                "kecamatan" => 5,
                "kelurahan_desa" => "22/-",
            ],
        ];
        return $data;
    }
}
