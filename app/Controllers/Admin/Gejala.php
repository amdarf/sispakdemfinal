<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Model_gejala;
use App\Models\Model_kategori;

class Gejala extends BaseController
{
    public function __construct()
    {
        $this->gejala = new Model_gejala();
        $this->kategori = new Model_kategori();
    }

    public function index()
    {
        $data['gejala'] = $this->gejala->select('tb_gejala.id,gejala,level,kategori')->join('tb_kategori','tb_gejala.id_kategori=tb_kategori.id', 'LEFT')->orderBy('kategori', 'ASC')->findAll();
        return view('admin/gejala/list', $data);
    }

    public function add()
    {
        if($this->request->getPost()){
            $validation = $this->validate([
                'kategori' => 'required',
                'gejala' => 'required',
                'level' => 'required|numeric|greater_than[0]'
            ]);
            if(!$validation) {
                $data['validation'] = $this->validator;
            }
            else {
                $this->gejala->insert([
                    "id_kategori" => $this->request->getPost('kategori'),
                    "gejala" => $this->request->getPost('gejala'),
                    "level" => $this->request->getPost('level')
                ]);

                session()->setFlashdata('message', 'Add data success');
                return redirect('admin/gejala/add');
            }
        }

        $data['kategori'] = $this->kategori->select('id,kategori')->orderBy('kategori','ASC')->findAll();
        return view('admin/gejala/add', $data);
    }

    public function edit($slug)
    {
        if($this->request->getPost()) {
            $validation = $this->validate([
                'kategori' => 'required',
                'gejala' => 'required',
                'level' => 'required|numeric|greater_than[0]'
            ]);
            if(!$validation) {
                $data['validation'] = $this->validator;
            }
            else {
                $this->gejala->update($slug, [
                    "id_kategori" => $this->request->getPost('kategori'),
                    "gejala" => $this->request->getPost('gejala'),
                    "level" => $this->request->getPost('level')
                ]);

                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to('admin/gejala/edit/'.$slug);
            }
        }
        $data['gejala'] = $this->gejala->find($slug);
        if(!$data['gejala']) {
            throw PageNotFoundException::forPageNotFound();
        }
        $data['kategori'] = $this->kategori->select('id,kategori')->orderBy('kategori','ASC')->findAll();
        return view('admin/gejala/edit', $data);
    }

    public function delete($id=null) {
        if(!isset($id)) {
            throw PageNotFoundException::forPageNotFound();
        }

        if($this->gejala->delete($id)) {
            session()->setFlashdata('message', 'Delete data success');
            return redirect('admin/gejala');
        }
    }
}
