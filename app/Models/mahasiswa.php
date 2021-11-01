<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Model
{
    public function allData()
    {
        return DB::table('mahasiswas')->get();
    }

    public function getOneData($id)
    {
        return DB::table('mahasiswas')->where('id',$id)->first();
    }

    public function addData($data)
    {
        DB::table('mahasiswas')->insert($data);
    }

    public function editData($data, $id) 
    {
        DB::table('mahasiswas')->where('id',$id)->update($data);
    }

    public function deleteData($id) 
    {
        DB::table('mahasiswas')->where('id',$id)->delete();
    }
}

