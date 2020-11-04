@extends('layouts.main')

@section('content')

<section id="home" class="video-hero" style="height: 500px; background-image: url(bg/bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Last Schedule</h2>
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
                    <h3><b>Last Schedule</b></h3>
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
                <table class="table table-bordered">
                    <thead style="background-color: #798eea; color: white;">
                        <tr>
                            <th scope=" col">Tanggal</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody style="color: black;">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
