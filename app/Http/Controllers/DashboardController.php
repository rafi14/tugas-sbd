<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile()
    {
        return view('content.profile');
    }

    public function untung()
    {
        return view('content.untung');
    }

    public function manfaat()
    {
        return view('content.manfaat');
    }
    public function rugi()
    {
        return view('content.rugi');
    }
    public function kerugian()
    {
        return view('content.kerugianku');
    }
    public function eer()
    {
        return view('content.eer');
    }
    public function materi()
    {
        return view('content.materi-eer');
    }
    public function material()
    {
        return view('content.material-eer');
    }

    public function sqlserver()
    {
        return view('content.sql');
    }

    public function materisql()
    {
        return view('content.sql-materi');
    }
    public function sqldetail()
    {
        return view('content.sql-detail');
    }
    public function tableone()
    {
        return view('content.tableone');
    }
    public function tabletwo()
    {
        return view('content.tabletwo');
    }
    public function distribusi()
    {
        return view('content.distribusiku');
    }
    public function distribusimateri()
    {
        return view('content.distrimateriku');
    }
    public function distribusidetail()
    {
        return view('content.distridetail');
    }

    public function keamanandb()
    {
        return view('content.keamanan');
    }

    public function keamananmateridb()
    {
        return view('content.keamananmateri');
    }

    public function salahguna()
    {
        return view('content.salahgunaku');
    }

    public function teknik()
    {
        return view('content.tekniku');
    }

    public function keamanandetail()
    {
        return view('content.detailkeamanan');
    }

    public function hasilpresentasi()
    {
        return view('content.presentasihasil');
    }

    public function presentasiworkflow()
    {
        return view('content.workflow');
    }

    public function presentasierd()
    {
        return view('content.presentasierd');
    }

    public function presentasidatabase()
    {
        return view('content.presentasidb');
    }

    public function materipresentasi()
    {
        return view('content.materi-presentasi');
    }

    public function detailpresentasi()
    {
        return view('content.detail-presentasi');
    }
}
