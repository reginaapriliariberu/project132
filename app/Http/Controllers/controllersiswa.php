<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllersiswa extends Controller
{
    public function list(){
        $siswa = [
            'Nani',
            'Gina',
            'Lalu',
            'Tina'
    
        ];
    
        
        return view('datasiswa.siswa', [
            'siswa' =>  $siswa
        ]);
    }
   
}
