<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Model_pencegahan;
use App\Models\Model_penyakit;

class Pencegahan extends BaseController
{
    public function __construct()
    {
        $this->pencegahan = new Model_pencegahan();
        $this->penyakit = new Model_penyakit();
    }

    public function index()
    {
        $data['pencegahan'] = $this->pencegahan->select('tb_pencegahan.id, id_penyakit, pencegahan, penyakit')->join('tb_penyakit', 'tb_penyakit.id = tb_pencegahan.id_penyakit', 'left')->findAll();
        return view('admin/pencegahan/list', $data);
    }

    public function add()
    {
        if( $this->request->getPost()){
            $validation = $this->validate([
                'penyakit' => 'required',
                'pencegahan' => 'required'
            ]);
    
            if(!$validation) {
    
                //render view with error validation message
                $data['validation'] = $this->validator; //pass
    
            } else {

                $this->pencegahan->insert([
                    "id_penyakit" => $this->request->getPost('penyakit'),
                    "pencegahan" => $this->request->getPost('pencegahan')
                ]);
    
                session()->setFlashdata('message', 'Add data success');
                return redirect('admin/pencegahan/add');
            }
        }

        $data['penyakit'] = $this->penyakit->orderBy('id','ASC')->findAll();
        return view('admin/pencegahan/add', $data);
    }

    public function edit($slug)
    {
        if( $this->request->getPost()){
            $validation = $this->validate([
                'penyakit' => 'required',
                'pencegahan' => 'required'
            ]);
    
            if(!$validation) {
    
                //render view with error validation message
                $data['validation'] = $this->validator; //pass
    
            } else {

                $this->pencegahan->update($slug, [
                    "id_penyakit" => $this->request->getPost('penyakit'),
                    "pencegahan" => $this->request->getPost('pencegahan')
                ]);
    
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to('admin/pencegahan/edit/'.$slug);
            }
        }
        $data['pencegahan'] = $this->pencegahan->find($slug);
        if (!$data['pencegahan']) {
			throw PageNotFoundException::forPageNotFound();
		}
        $data['penyakit'] = $this->penyakit->orderBy('id','ASC')->findAll();
        return view('admin/pencegahan/edit', $data);
    }

    public function delete($id=null) {
        if (!isset($id)) {
            throw PageNotFoundException::forPageNotFound();
        }
        
        if ($this->pencegahan->delete($id)) {
            session()->setFlashdata('message', 'Delete data success');
            return redirect('admin/pencegahan');
        } 
    }
}
