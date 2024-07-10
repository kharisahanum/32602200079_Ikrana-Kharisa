<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
        $data['mahasiswa'] = $mahasiswaModel->findAll();
          // Debugging
          echo '<pre>';
          print_r($data['mahasiswa']);
          echo '</pre>';
          exit; // Hentikan eksekusi untuk melihat output
  
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
    {
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'angkatan' => $this->request->getPost('angkatan'),
        ];
        $mahasiswaModel->insert($data);
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $data['mahasiswa'] = $mahasiswaModel->find($id);
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'angkatan' => $this->request->getPost('angkatan'),
        ];
        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }
}
