<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->Dosen = new Dosen;
    }

    public function Dosen()
    {
        $data = ['Dosen'=>$this->Dosen->allData()];
        return view('Dosen', $data);
    }

    public function editDosen($id)
    {
        $data = ['Dosen' => $this->Dosen->getOneData($id),
                'title' => "Edit Dosen"];
        return view('editDosen', $data);
    }

    public function createDosen()
    {
        $data = ['title' => "Create Dosen"];
        return view('createDosen', $data);
    }

    public function showDosen($id)
    {
        $data = ['Dosen'=>$this->Dosen->getOneData($id)];
        return view ('showDosen', $data);
    }

    public function tambahDosen()
    {
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->name,
                'nidn' => Request()->nidn,
                'alamat' => Request()->address,
                'kontak' => Request()->phone,
                'create_at' => $datetime,
                'update_at' => $datetime,
            ];

            $this->Dosen->addData($data);
            return redirect("Dosen");
    }
    
    public function ubahDosen($id)
    {
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->name,
                'nidn' => Request()->nidn,
                'alamat' => Request()->address,
                'kontak' => Request()->phone,
                'update_at' => $datetime,
            ];

            $this->Dosen->editData($data, $id);
            return redirect("Dosen");
    }
    
    public function deleteDosen($id)
    {
        $this->Dosen->deleteData($id);
        return redirect ('Dosen');
    }
}
