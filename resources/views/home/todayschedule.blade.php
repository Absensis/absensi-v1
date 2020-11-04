@extends('layouts.main')

@section('content')

<section id="home" class="video-hero" style="height: 500px; background-image: url(bg/bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Today Schedule</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-featured" style="margin-bottom: 20px;">
    <div class="card" style="width: 80%; padding: 10px; margin-left: 10%; position: relative; margin-top: -6%; background-color: white;border-radius: 10px; box-shadow: 0px 3px 19px -9px rgba(0, 0, 0, 0.75);">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-11" style="margin-right: 60px; margin-left: 10px;">
                    <h3><b>Today Schedule</b></h3>
                </div>
                <div class="col">
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="row" style="margin-left: 15px;">
                                <div class="col">
                                    <p><b>Action : </b></p>
                                </div>
                                <div class="col" style="margin-top: -15px;">
                                    <a class="dropdown-item addbtn">
                                        <i class="fa fa-plus fa-sm fa-fw" style="color: green;">
                                        </i> Add Data
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-file-pdf-o fa-sm fa-fw" style="color: blue;">
                                        </i> Generate Pdf
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-item" href="">
                                        <i class="fa fa-file-excel-o fa-sm fa-fw" style="color: green;">
                                        </i> Generate Excel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataSchedule">
                    <thead style="background-color: #798eea; color: white;">
                        <tr>
                            <th scope=" col">Id</th>
                            <th scope=" col">Tanggal</th>
                            <th scope=" col">Jam</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Guru Pengajar</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Materi Pelajaran</th>
                            <th scope="col">Link Pembelajaran</th>
                            <th scope="col">Dokumentasi</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody style="color: black;">
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope=" col">Id</th>
                            <th scope=" col">Tanggal</th>
                            <th scope=" col">Jam</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Guru Pengajar</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Materi Pelajaran</th>
                            <th scope="col">Link Pembelajaran</th>
                            <th scope="col">Dokumentasi</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
