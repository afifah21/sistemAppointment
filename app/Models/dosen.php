<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dosen extends Model
{
    public function allData()
    {
        return DB::table('dosens')->get();
    }

    public function getOneData($id)
    {
        return DB::table('dosens')->where('id',$id)->first();
    }

    public function addData($data) 
    {
        DB::table('dosens')->insert($data);
    }

    public function editData($data, $id) 
    {
        DB::table('dosens')->where('id',$id)->update($data);
    }

    public function deleteData($id) 
    {
        DB::table('dosens')->where('id',$id)->delete();
    }
}
