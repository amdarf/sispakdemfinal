<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Model_penyakit;
use App\Models\Model_gejala;

class Penyakit extends BaseController
{
    public function __construct()
    {
        $this->penyakit = new Model_penyakit();
        $this->gejala = new Model_gejala();
    }

    public function index()
    {
        $data['gejala'] = $this->gejala->orderBy('id_kategori','ASC')->findAll();
        $data['penyakit'] = $this->penyakit->orderBy('id','ASC')->findAll();
        for ($i=0; $i<count($data['penyakit']); $i++) {
            $data['penyakit'][$i]['gejala_penyakit'] = $this->toArray($data['penyakit'][$i]['gejala_penyakit']);
        }
        return view('admin/penyakit/list', $data);
    }

    public function add()
    {
        if( $this->request->getPost()){
            $validation = $this->validate([
                'penyakit' => 'required',
                'gejala_input' => 'required'
            ]);
    
            if(!$validation) {
    
                //render view with error validation message
                $data['validation'] = $this->validator; //pass
    
            } else {
                $json = json_encode($this->request->getPost('gejala_input'));
                $filter = str_replace( array('"'),'', $json);

                $this->penyakit->insert([
                    "penyakit" => $this->request->getPost('penyakit'),
                    "gejala_penyakit" => $filter
                ]);
    
                session()->setFlashdata('message', 'Add data success');
                return redirect('admin/penyakit/add');
            }
        }
        $data['gejala'] = $this->gejala->orderBy('id_kategori','ASC')->findAll();
        return view('admin/penyakit/add', $data);
    }

    public function edit($slug)
    {
        if( $this->request->getPost()){
            $validation = $this->validate([
                'penyakit' => 'required',
                'gejala_input' => 'required'
            ]);
    
            if(!$validation) {
    
                //render view with error validation message
                $data['validation'] = $this->validator; //pass
    
            } else {
                $json = json_encode($this->request->getPost('gejala_input'));
                $filter = str_replace( array('"'),'', $json);

                $this->penyakit->update($slug, [
                    "penyakit" => $this->request->getPost('penyakit'),
                    "gejala_penyakit" => $filter
                ]);
    
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to('admin/penyakit/edit/'.$slug);
            }
        }
        $data['penyakit'] = $this->penyakit->find($slug);
        if (!$data['penyakit']) {
			throw PageNotFoundException::forPageNotFound();
		}
        $data['penyakit']['gejala_penyakit'] = $this->toArray($data['penyakit']['gejala_penyakit']);
        $data['gejala'] = $this->gejala->orderBy('id_kategori','ASC')->findAll();
        return view('admin/penyakit/edit', $data);
    }

    public function delete($id=null) {
        if (!isset($id)) {
            throw PageNotFoundException::forPageNotFound();
        }
        
        if ($this->penyakit->delete($id)) {
            session()->setFlashdata('message', 'Delete data success');
            return redirect('admin/penyakit');
        } 
    }

    public function toArray($str) 
    {
        // Using str_replace() function
        // to replace the word
        $replace = str_replace( array('[', ']'),'', $str);
        $explode = explode(",",$replace);
   
        // Returning the result
        return $explode;
    }
}
