<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        // echo 'Halo Dunia';
    }

    public function indexa() {
        return view ('adminside/layout/templateadmin');
    }

    public function indexadmin() {
        return view ('adminside/pages/indexadmin');
    }

    public function berita() {
        return view ('adminside/pages/berita');
    }

    public function popup() {
        return view ('adminside/pages/popup');
    }

    public function rekap_kejadian() {
        return view ('adminside/pages/rekap_kejadian');
    }

    public function regulasi() {
        return view ('adminside/pages/regulasi');
    }

    public function dokumentasi() {
        return view ('adminside/Pages/dokumentasi');
    }

    public function manage_user() {
        return view ('adminside/Pages/manage_user');
    }
}
