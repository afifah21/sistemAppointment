<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->Mahasiswa = new Mahasiswa;
    }

    public function Mahasiswa()
    {
        $data = ['Mahasiswa'=>$this->Mahasiswa->allData()];
        return view('Mahasiswa', $data);
    }

    public function editMahasiswa($id)
    {
        $data = ['mahasiswa' => $this->Mahasiswa->getOneData($id),
                'title' => "Edit Mahasiswa"];
        return view('editMahasiswa', $data);
    }

    public function createMahasiswa()
    {
        $data = ['title' => "Create Mahasiswa"];
        return view('createMahasiswa', $data);
    }

    public function showMahasiswa($id)
    {
        $data = ['Mahasiswa'=>$this->Mahasiswa->getOneData($id)];
        return view ('showMahasiswa', $data);
    }

    public function tambahMahasiswa()
    {
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->name,
                'nim' => Request()->nim,
                'tanggal_lahir' => request()->ttl,
                'alamat' => Request()->address,
                'tahun_masuk' => request()->tahun,
                'create_at' => $datetime,
                'update_at' => $datetime,
            ];

            $this->Mahasiswa->addData($data);
            return redirect("Mahasiswa");
    }

    public function ubahmahasiswa($id)
    {
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->name,
                'nim' => Request()->nim,
                'tanggal_lahir' => Request()->ttl,
                'alamat' => Request()->address,
                'tahun_masuk' => Request()->tahun,
                'update_at' => $datetime,
            ];

            $this->Mahasiswa->editData($data, $id);
            return redirect("Mahasiswa");
    }
    
    public function deleteMahasiswa($id)
    {
        $this->Mahasiswa->deleteData($id);
        return redirect ('Mahasiswa');
    }
}
