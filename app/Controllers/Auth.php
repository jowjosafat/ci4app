<?php

namespace App\Controllers;


use \App\Models\AuthModels;


class Auth extends BaseController

{
    protected $gudang_login;

    public function __construct()

    {

        $this->gudang_login = new AuthModels();
    }


    public function index()
    {
        // session login apabila sudah loggin
        if (!empty(session()->get('role_id'))) {
            return redirect()->to('gudang');
        }
        // exit session login apabila sudah loggin



        $data = [];
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email' => [
                    'rules' => 'required|valid_email|trim',
                    'errors' => [
                        'required' => '{field} harus di-isi',
                        'valid_email' => 'ini bukan {field}'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus di-isi'
                    ]
                ]
            ];
            $validate = $this->validate($rules);


            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $model = new AuthModels();
            $user = $model->where(['email' => $email, 'is_active' => 1])->first();

            if (empty($user)) {
                $data = ['info' => 'Email atau password salah'];
            } else {
                if (password_verify($password, $user['password'])) {
                    $this->setSession($user);
                    return redirect()->to('gudang');
                } else {
                    $data['info'] = 'Password Salah';
                }
            }
            // if (empty($user)) {
            //     $data = ['info' => 'Email atau password salah'];
            // } else {
            //     $this->setSession($user);
            //     return redirect()->to('gudang');
            // }
        } else {
            //
        }



        $data = [
            'title' => 'BMP Login',
            'validation' => \Config\Services::validation()


        ];
        return view('auth/login', $data);
    }




    public function setSession($user)
    {
        $data = [
            'id' => $user['id'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'image' => $user['image'],
            'is_active' => $user['is_active'],
            'role_id' => $user['role_id'],
            'created_at' => $user['created_at'],
            'loggedIn' => true

        ];
        session()->set($data);
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('auth'));
    }




    public function register()

    {
        // session login apabila sudah loggin
        if (!empty(session()->get('role_id'))) {
            return redirect()->to(base_url('gudang'));
        }
        // exit session login apabila sudah loggin

        // session();
        $data = [
            'title' => 'BMP Register',
            'validation' => \Config\Services::validation()

        ];
        return view('auth/register', $data);
    }





    public function saveregister()
    {
        // validasi input

        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[gudang_login.nama]',
                'errors' => [
                    'required' => '{field} harus di-isi',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[gudang_login.email]',
                'errors' => [
                    'required' => '{field} harus di-isi',
                    'valid_email' => 'ini bukan {field}',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'password1' => [
                'rules' => 'required|min_length[3]|matches[password2]',
                'errors' => [
                    'required' => 'password harus di-isi',
                    'min_length' => 'password minimal 3 karakter.',
                    'matches' => 'password tidak sama'
                ]
            ],
            'password2' => [
                'rules' => 'required|min_length[3]|matches[password1]',
                'errors' => [
                    'required' => 'password harus di-isi',
                    'min_length' => 'password minimal 3 karakter.',
                    'matches' => 'password tidak sama'
                ]
            ]


        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('auth/register'))->withInput()->with('validation', $validation);
        }

        $role_id = htmlspecialchars(3, true);
        $is_active = htmlspecialchars(0, true);
        $image = htmlspecialchars("default.jpg", true);

        $this->gudang_login->save([


            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password1'), PASSWORD_DEFAULT),
            'image' => $image,
            'role_id' => $role_id,
            'is_active' => $is_active



        ]);

        session()->setFlashdata('pesan', 'Registrasi berhasil');

        return redirect()->to(base_url('auth'));
    }
}
