<?php

namespace App\Http\Controllers;

use App\Absen;
use Carbon\Carbon;
use PDF;

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

    // function cetak data pdf
    public function pdfToday()
    {
        $absens = Absen::where('tanggal', Carbon::today())->get();
        $pdf = PDF::loadview('pdf.pdftoday', ['absen' => $absens])->setPaper('a3', 'landscape');
        $pdf->save(storage_path() . '_recapschedule' . Date('Y-m-d') . '.pdf');
        return $pdf->download('dataabsen_' . Date('Y-m-d') . '.pdf');
    }
}
