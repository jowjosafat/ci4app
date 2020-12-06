<?php

namespace App\Controllers;

use \App\Models\GudangModels;
use \App\Models\HistoryModels;
use \App\Models\Material_inModel;
use \App\Models\Material_outModel;
use \App\Models\AuthModels;

class Gudang extends BaseController
{
    protected $list_material;
    protected $list_history;
    protected $material_in;
    protected $material_out;
    protected $gudang_login;
    public function __construct()
    {

        $this->list_material = new GudangModels;
        $this->list_history = new HistoryModels;
        $this->material_in = new Material_inModel;
        $this->material_out = new Material_outModel;
        $this->gudang_login = new AuthModels();
    }

    public function index()
    {


        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();



        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'BMP Warehouse',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];
        // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $list_material = $db->query("SELECT * From list_material");
        // foreach ($list_material->getResultArray() as $row) {
        //     d($row);
        // }


        return view('gudang/home', $data);
    }

    

    public function listmaterial()
    {
        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'List Material',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/listmaterial', $data);
    }

    public function stokmaterial()
    {
        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Stok Material',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/stokmaterial', $data);
    }

    public function materialrowin()
    {
        $list = $this->material_in->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Material In',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/materialrowin', $data);
    }

    public function materialrowout()
    {
        $list = $this->material_out->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Material Out',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/materialrowout', $data);
    }

    public function other()
    {
        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();

        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Other',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/other', $data);
    }

    public function tables()

    {
        $list = $this->list_history->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Tables',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/tables', $data);
    }

    public function create()
    {
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Material New',
            'in' => $in,
            'out' => $out,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out,
            'validation' => \Config\Services::validation()
        ];

        return view('gudang/create', $data);
    }

    public function list()
    {
        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'List Item',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/list', $data);
    }

    public function save()
    {
        //validasi input

        if (!$this->validate([
            'itemmaterial' => 'required|is_unique[list_material.itemmaterial]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('gudang/create'))->withInput('validation', $validation);
        }

        $this->list_material->save([
            'itemmaterial' => $this->request->getVar('itemmaterial'),
            'uom' => $this->request->getVar('uom'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga'),
            'total' => $this->request->getVar('total'),
            'ket'  => $this->request->getVar('ket')
        ]);
        $this->list_history->save([
            'itemmaterial_h' => $this->request->getVar('itemmaterial'),
            'uom_h' => $this->request->getVar('uom'),
            'satuan_h' => $this->request->getVar('satuan'),
            'harga_h' => $this->request->getVar('harga'),
            'total_h' => $this->request->getVar('total'),
            'ket_h' => $this->request->getVar('ket')

        ]);


        return redirect()->to('listmaterial');
    }


    public function delete($id)
    {
        $this->list_material->delete($id);


        return redirect()->to(base_url('/gudang/other'));
    }

    public function edit($id)
    {

        $l = $this->list_material->where(['id' => $id])->first();
        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Update Material',
            'validation' => \Config\Services::validation(),
            'l' => $l,
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/edit', $data);
    }



    public function update_other($id)
    {
        $this->list_material->save([
            'id' => $id,
            'itemmaterial' => $this->request->getVar('itemmaterial'),
            'uom' => $this->request->getVar('uom'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga'),
            'total' => $this->request->getVar('total'),
            'ket' => $this->request->getVar('ket')
        ]);

        return redirect()->to(base_url('/gudang/other'));
    }

    public function update_in($id)
    {
        $this->list_material->save([
            'id' => $id,
            'itemmaterial' => $this->request->getVar('itemmaterial'),
            'uom' => $this->request->getVar('uom'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga'),
            'total' => $this->request->getVar('total'),
            'ket' => $this->request->getVar('ket')
        ]);

        return redirect()->to(base_url('gudang/materialrowin'));
    }

    public function update_out($id)
    {
        $this->list_material->save([
            'id' => $id,
            'itemmaterial' => $this->request->getVar('itemmaterial'),
            'uom' => $this->request->getVar('uom'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga'),
            'total' => $this->request->getVar('total'),
            'ket' => $this->request->getVar('ket')
        ]);

        return redirect()->to(base_url('gudang/materialrowout'));
    }

    public function material_in()
    {

        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Pilih Material In',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/material_in', $data);
    }

    public function material_in_update()
    {

        $i = $this->request->getVar('id');
        $l = $this->list_material->where(['id' => $i])->first();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);


        $data = [
            'title' => 'Update In Material',
            'validation' => \Config\Services::validation(),
            'l' => $l,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/material_in_update', $data);
    }

    public function update_in_material($id)
    {


        $this->list_material->save([
            'id' => $id,
            'itemmaterial' => $this->request->getVar('itemmaterial'),
            'uom' => $this->request->getVar('uom'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga'),
            'total' => $this->request->getVar('total'),
            'ket' => $this->request->getVar('ket')
        ]);


        $this->list_history->save([
            'id' => $this->request->getVar('id'),
            'itemmaterial_h' => $this->request->getVar('itemmaterial'),
            'uom_h' => $this->request->getVar('uom_h'),
            'satuan_h' => $this->request->getVar('satuan'),
            'harga_h' => $this->request->getVar('harga'),
            'total_h' => $this->request->getVar('total'),
            'ket_h' => $this->request->getVar('ket')

        ]);

        $this->material_in->save([
            'id' => $this->request->getVar('id'),
            'itemmaterial_in' => $this->request->getVar('itemmaterial'),
            'uom_in' => $this->request->getVar('uom_h'),
            'satuan_in' => $this->request->getVar('satuan'),
            'harga_in' => $this->request->getVar('harga'),
            'total_in' => $this->request->getVar('total_h'),
            'ket_in' => $this->request->getVar('ket')


        ]);

        return redirect()->to(base_url('gudang/materialrowin'));
    }

    public function material_out()
    {

        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Pilih Material Out',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/material_out', $data);
    }

    public function material_out_update()
    {

        $i = $this->request->getVar('id');
        $l = $this->list_material->where(['id' => $i])->first();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Update Out Material',
            'validation' => \Config\Services::validation(),
            'l' => $l,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/material_out_update', $data);
    }

    public function update_out_material($id)
    {


        $this->list_material->save([
            'id' => $id,
            'itemmaterial' => $this->request->getVar('itemmaterial'),
            'uom' => $this->request->getVar('uom'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga'),
            'total' => $this->request->getVar('total'),
            'ket' => $this->request->getVar('ket')
        ]);


        $this->list_history->save([
            'id' => $this->request->getVar('id'),
            'itemmaterial_h' => $this->request->getVar('itemmaterial'),
            'uom_h' => $this->request->getVar('uom_out'),
            'satuan_h' => $this->request->getVar('satuan'),
            'harga_h' => $this->request->getVar('harga'),
            'total_h' => $this->request->getVar('total_out'),
            'ket_h' => $this->request->getVar('ket')

        ]);

        $this->material_out->save([
            'id' => $this->request->getVar('id'),
            'itemmaterial_out' => $this->request->getVar('itemmaterial'),
            'uom_out' => $this->request->getVar('uom_out'),
            'satuan_out' => $this->request->getVar('satuan'),
            'harga_out' => $this->request->getVar('harga'),
            'total_out' => $this->request->getVar('total_out'),
            'ket_out' => $this->request->getVar('ket')


        ]);

        return redirect()->to(base_url('gudang/materialrowout'));
    }


    public function access()

    {
        $access = $this->gudang_login->findAll();
        $i = $this->request->getVar('id');
        $l = $this->list_material->where(['id' => $i])->first();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);



        $data = [
            'title' => 'Access Managemet',
            'access' => $access,
            'validation' => \Config\Services::validation(),
            'l' => $l,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out


        ];

        return view('gudang/access', $data);
    }
    public function editAccess($id)
    {
        $access = $this->gudang_login->where(['id' => $id])->first();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Update User',
            'validation' => \Config\Services::validation(),
            'a' => $access,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/editAccess', $data);
    }

    public function update_access($id)
    {
        $this->gudang_login->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'image' => $this->request->getVar('image'),
            'role_id' => $this->request->getVar('role_id'),
            'is_active' => $this->request->getVar('is_active')
        ]);

        return redirect()->to(base_url('/gudang/access'));
    }


    public function deleteAccess($id)
    {
        $this->gudang_login->delete($id);


        return redirect()->to(base_url('/gudang/access'));
    }

   
    public function profile()
    {
        

        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $a = $this->gudang_login->findAll();

        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Profile',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out,
            'a' => $a

        ];
        // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $list_material = $db->query("SELECT * From list_material");
        // foreach ($list_material->getResultArray() as $row) {
        //     d($row);
        // }
        

        return view('gudang/profile', $data);
    }


    public function update_user($id)

    {
        $access = $this->gudang_login->where(['id' => $id])->first();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Update Profil',
            'validation' => \Config\Services::validation(),
            'a' => $access,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out
        ];

        return view('gudang/update_user', $data);
    }


    public function update_profil($id)
    {
        
        if (!$this->validate([
            'nama' => 'required',
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
            
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to(base_url('gudang/profile'))->withInput('validation', $validation);
            return redirect()->to(base_url('gudang/profile'))->withInput();
        }
        //ambil gambar 
        
        $fileimage = $this->request->getFile('image');
        $fileimage->move('assets\img');
        $namaImage = $fileimage->getName();
        

        $this->gudang_login->save([
            
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'image' => $namaImage
            
        ]);
        session()->destroy();
        return redirect()->to(base_url('auth'));
    }

    

    public function laporan()

    {
        $list = $this->list_history->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Laporan',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/laporan', $data);
    }

    public function report()

    {
        $list = $this->list_material->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }
        

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Report Stok',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/report', $data);
    }


    public function report_in()

    {
        $list = $this->material_in->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }
        

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Report Stok',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/report_in', $data);
    }
    public function report_out()

    {
        $list = $this->material_out->findAll();
        $list_in = $this->material_in->findAll();
        $list_out = $this->material_out->findAll();
        $dat_in = $list_in;
        $dat_out = $list_out;

        $db = \Config\Database::connect();
        $sum = $db->query("SELECT SUM(total_in) From material_in");
        foreach ($sum->getFirstRow() as $row_in) {
        }
        $sum = $db->query("SELECT SUM(total_out) From material_out");
        foreach ($sum->getFirstRow() as $row_out) {
        }
        

        $in = count($dat_in);
        $out = count($dat_out);

        $data = [
            'title' => 'Report Stok',
            'list' => $list,
            'in' => $in,
            'out' => $out,
            'row_in' => $row_in,
            'row_out' => $row_out

        ];

        return view('gudang/report_out', $data);
    }

    //--------------------------------------------------------------------

}
