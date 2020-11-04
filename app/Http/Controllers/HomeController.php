<?php

namespace App\Http\Controllers;

use App\Absen;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //  view home
    public function homeView()
    {
        return view('home.home');
    }

    // view about
    public function aboutView()
    {
        return view('home.about');
    }

    // view last schedule
    public function scheduleList()
    {
        return view('home.listschedule');
    }

    // view today schedule
    public function todaySchedule()
    {
        return view('home.todayschedule');
    }

    // show databarang in datatable
    public function dataAbsen()
    {
        $dataabsen = Absen::get();
        foreach ($dataabsen as $value) {
            $tbody = array();
            $tbody[] = $value['id'];
            $tbody[] = $value['tanggal'];
            $tbody[] = $value['jam_pembelajaran'];
            $tbody[] = $value['kelas'];
            $tbody[] = $value['guru_pengajar'];
            $tbody[] = $value['mata_pelajaran'];
            $tbody[] = $value['materi_pelajaran'];
            $tbody[] = $value['link_pembelajaran'];
            $img = "<img style='width: 80%;' src='storage/" . $value['dokumentasi'] . "' >";
            $tbody[] = $img;
            $tbody[] = $value['keterangan'];
            $btn = "<button type='button' class='btn btn-primary btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id'] . " 	style='padding-right: 6%; width: 95%'>
                          <span class='icon text-white'>
                              <i class='fa fa-edit'></i>
                          </span>
                          <span class='text'>Edit Data</span>
                          </button>
                          <button type='button' class='btn btn-danger btn-icon-split deletebtn mt-2' name='deletebtn' data-toggle='modal' id=" . $value['id'] . ">
                          <span class='icon text-white'>
                              <i class='fa fa-trash'></i>
                          </span>
                          <span class='text'>Delete Data</span>
                          </button>";
            $tbody[] = $btn;
            $data[] = $tbody;
        }
        if ($dataabsen) {
            echo json_encode(array('data' => $data));
        } else {
            echo json_encode(array('data' => 0));
        }
    }
}
