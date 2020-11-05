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
            $btn = "<button type='button' class='btn btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id'] . " 	style='padding-right: 6%; width: 95%; background-color: blue; color: white'>
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

    // function add
    public function addData(Request $request)
    {
        if ($_POST["action"] == "Add") {
            $imageName = 'absens/November2020' . $request->dokumentasi->getClientOriginalName();
            $request->dokumentasi->move(public_path('storage/absens'), $imageName);
            $absen = new Absen();
            $absen->tanggal = $request->tanggalpelajaran;
            $absen->jam_pembelajaran = $request->jampelajaran;
            $absen->kelas = $request->kelas;
            $absen->guru_pengajar = $request->gurupengajar;
            $absen->mata_pelajaran = $request->matapelajaran;
            $absen->materi_pelajaran = $request->materipelajaran;
            $absen->link_pembelajaran = $request->linkpembelajaran;
            $absen->dokumentasi = $imageName;
            $absen->keterangan = $request->keterangan;
            $absen->save();
            echo 'Data Inserted';
        }
    }

    // function edit
    public function editData(Request $request)
    {
        if ($_POST["action"] == "Edit") {
            $imageName = 'absens/November2020' . $request->dokumentasi->getClientOriginalName();
            $request->dokumentasi->move(public_path('storage/absens'), $imageName);
            $idabsen = $request->id;
            $absen = Absen::find($idabsen);
            $absen->tanggal = $request->tanggalpelajaran;
            $absen->jam_pembelajaran = $request->jampelajaran;
            $absen->kelas = $request->kelas;
            $absen->guru_pengajar = $request->gurupengajar;
            $absen->mata_pelajaran = $request->matapelajaran;
            $absen->materi_pelajaran = $request->materipelajaran;
            $absen->link_pembelajaran = $request->linkpembelajaran;
            $absen->dokumentasi = $imageName;
            $absen->keterangan = $request->keterangan;
            $absen->save();
            echo 'Data Updated';
        }
    }

    // function delete
    public function deleteData()
    {
        $absen = Absen::find($_POST['id']);
        $absen->delete();
    }

    // function get id goods
    public function getIdAbsen()
    {
        $output = array();
        $data = Absen::find($_POST["id"]);
        $output['tanggal'] = $data->tanggal;
        $output['jam_pembelajaran'] = $data->jam_pembelajaran;
        $output['kelas'] = $data->kelas;
        $output['guru_pengajar'] = $data->guru_pengajar;
        $output['mata_pelajaran'] = $data->mata_pelajaran;
        $output['materi_pelajaran'] = $data->materi_pelajaran;
        $output['link_pembelajaran'] = $data->link_pembelajaran;
        $output['keterangan'] = $data->keterangan;
        if ($data->dokumentasi != '') {
            $output['dokumentasi'] = '<img style="width: 100%;" src="storage/' . $data->dokumentasi . '" /><input type="hidden" name="hidden_barang_image" value="' . $data->dokumentasi . '"/>';
        } else {
            $output['dokumentasi'] = '<input type="hidden" name="hidden_barang_image" value=""/>';
        }

        echo json_encode($output);
    }
}
