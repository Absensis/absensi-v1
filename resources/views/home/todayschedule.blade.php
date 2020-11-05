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
                                    <a class="dropdown-item addbtn" href="#" style="color: black;">
                                        <i class="fa fa-plus fa-sm fa-fw" style="color: green;">
                                        </i> Add Data
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-item" href="#" style="color: black;">
                                        <i class="fa fa-file-pdf-o fa-sm fa-fw" style="color: blue;">
                                        </i> Generate Pdf
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-item" href="#" style="color: black;">
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
            <div class="table-responsive" style="margin-right: 10px; margin-left: 10px;">
                <table class=" table table-bordered" id="dataSchedule">
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

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formtambah" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal Pelajaran</label>
                        <input type="Date" name="tanggalpelajaran" id="tglpelajaran" class="form-control">
                    </div>
                    <div class=" form-group">
                        <label>Jam Pelajaran</label>
                        <input type="time" name="jampelajaran" id="jmpelajaran" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" name="kelas" id="kls" class="form-control" placeholder="Enter Grade Of Class">
                    </div>
                    <div class="form-group">
                        <label>Guru Pengajar</label>
                        <input type="text" name="gurupengajar" id="grpengajar" class="form-control" placeholder="Enter Name Of Teacher">
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="text" name="matapelajaran" id="mtapengajar" class="form-control" placeholder="Enter Lesson">
                    </div>
                    <div class="form-group">
                        <label>Materi Pelajaran</label>
                        <input type="text" name="materipelajaran" id="mtripelajaran" class="form-control" placeholder="Enter learning materials">
                    </div>
                    <div class="form-group">
                        <label>Link Pembelajaran</label>
                        <input type="text" name="linkpembelajaran" id="lipembelajaran" class="form-control" placeholder="Enter The Link">
                    </div>
                    <div class="form-group">
                        <label>Dokumentasi</label>
                        <input type="file" name="dokumentasi" id="dkmnts" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" name="keterangan" id="ket" class="form-control" placeholder="Enter The Information"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="action" class="btn btn-success" value="Add" />
                    <input type="submit" value="Add" name="action" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formedit" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <span id="dokumentasi"></span>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pelajaran</label>
                        <input type="Date" name="tanggalpelajaran" id="tanggalpelajaran" class="form-control">
                    </div>
                    <div class=" form-group">
                        <label>Jam Pelajaran</label>
                        <input type="time" name="jampelajaran" id="jampelajaran" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Enter Grade Of Class">
                    </div>
                    <div class="form-group">
                        <label>Guru Pengajar</label>
                        <input type="text" name="gurupengajar" id="gurupengajar" class="form-control" placeholder="Enter Name Of Teacher">
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="text" name="matapelajaran" id="matapelajaran" class="form-control" placeholder="Enter Lesson">
                    </div>
                    <div class="form-group">
                        <label>Materi Pelajaran</label>
                        <input type="text" name="materipelajaran" id="materipelajaran" class="form-control" placeholder="Enter learning materials">
                    </div>
                    <div class="form-group">
                        <label>Link Pembelajaran</label>
                        <input type="text" name="linkpembelajaran" id="linkpembelajaran" class="form-control" placeholder="Enter The Link">
                    </div>
                    <div class="form-group">
                        <label>Dokumentasi</label>
                        <input type="file" name="dokumentasi" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Enter The Information"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="id" id="id" class="btn btn-success" value="" />
                    <input type="hidden" name="action" class="btn btn-success" value="Edit" />
                    <input type="submit" value="Edit" name="action" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
