<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Model_kategori;

class Kategori extends BaseController
{
    public function __construct() 
    {
        $this->kategori = new Model_kategori();
    }

    public function index()
    {
        $data['kategori'] = $this->kategori->orderBy('kategori', 'ASC')->findAll();
        return view('admin/kategori/list', $data);
    }

    public function add()
    {
        if($this->request->getPost()) {
            $validation = $this->validate([
                'kategori' => 'required'
            ]);
            if(!$validation) {
                $data['validation'] =  $this->validator;
            }
            else {
                $this->kategori->insert([
                    "kategori" => $this->request->getPost('kategori')
                ]);
                session()->setFlashdata('message', 'Add data success');
                return redirect('admin/kategori/add');
            }
        }
        return view('admin/kategori/add');
    }

    public function edit($slug)
    {
        if($this->request->getPost()) {
            $validation = $this->validate([
                'kategori' => 'required'
            ]);
            if(!$validation) {
                $data['validation'] = $this->validator;
            }
            else {
                $this->kategori->update($slug, [
                    "kategori" => $this->request->getPost('kategori')
                ]);
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to('admin/kategori/edit/'.$slug);
            }
        }
        $data['kategori'] = $this->kategori->find($slug);
        if(!$data['kategori']) {
            throw PageNotFoundException::forPageNotFound();
        }
        return view('admin/kategori/edit', $data);
    }

    public function delete($id=null)
    {
        if(!isset($id)) {
            throw PageNotFoundException::forPageNotFound();
        }
        if($this->kategori->delete($id)) {
            session()->setFlashdata('message', 'Delete data success');
            return redirect('admin/kategori');
        }
    }
}
