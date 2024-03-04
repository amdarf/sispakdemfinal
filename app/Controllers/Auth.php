<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Model_user;

class Auth extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('login');
    } 
 
    public function login()
    {
        $session = session();
        $model = new Model_user();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'            => $data['id'],
                    'username'      => $data['username'],
                    'role'          => $data['role'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username Not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
