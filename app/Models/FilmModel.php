<?php

namespace App\Models;
use CodeIgniter\Model;

class FilmModel extends Model{

    protected $table = "film";
    protected $primarykey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_film', 'id_genre', 'duration', 'cover']; 
    
    public function getAllData()
    {
        return $this->join('genre', 'film.id_genre = genre.id_genre')->findAll();
    }

    public function getDataById($id)
    {
        return $this->find($id);
    }

    


    // public function getFilm(){
    //     $data =  [
    //       
    //         [
    //       
    //             "nama_film" => "5 CM",
    //             "genre" => "Adventure",
    //             "duration" => "1 Jam 2 Menit",
    //         ],
    //         [
    //             "nama_film" => "The Last of Us",
    //             "genre" => "Adventure",
    //             "duration" => "2 Jam 2 Menit",
    //         ],
    //         [
    //             "nama_film" => "Evil Dead Rise",
    //             "genre" => "Horror",
    //             "duration" => "1 Jam 30 Menit",
    //         ],
    //         [
    //             "nama_film" => "Swipe",
    //             "genre" => "Drama",
    //             "duration" => "2 Jam 7 Menit",
    //         ],
    //         [
    //             "nama_film" => "Culpa Mia",
    //             "genre" => "Drama",
    //             "duration" => "2 Jam 18 Menit",
    //         ],
    //         [
    //             "nama_film" => "
    //             ",
    //             "genre" => "Action",
    //             "duration" => "2 Jam 20 Menit",
    //         ],
    //         [
    //             "nama_film" => "Guardians of the Galaxy Vol.3",
    //             "genre" => "Action",
    //             "duration" => "2 Jam 35 Menit",
    //         ],
    //         [
    //             "nama_film" => "Creed III",
    //             "genre" => "Sport",
    //             "duration" => "2 Jam 15 Menit",
    //         ],
    //         [
    //             "nama_film" => "Tom and Jerry: Snowman's Land",
    //             "genre" => "Animation",
    //             "duration" => "1 Jam 55 Menit",
    //         ],
    //         [
    //             "nama_film" => "The Siege",
    //             "genre" => "Action",
    //             "duration" => "2 Jam 9 Menit",
    //         ],
    //         [
    //             "nama_film" => "Mafia Mamma",
    //             "genre" => "Comedy",
    //             "duration" => "2 Jam 27 Menit",
    //         ],
    //     ];
    //     return $data;
        
    // }
}
