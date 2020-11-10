<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Content Row -->

    <div class="container-fluid">

        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="row">
                <div class="col">
                    <h4 class="m-0 font-weight-bold text-primary">Data Absen</h4>
                    <h6 style="margin-top: 15px;">Tanggal Print PDF : {{date('d-m-Y')}}</h6>
                    <h6>Nama Guru : {{ Auth::user()->name }}</h6>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" width=100%" border="1">
                    <tr>
                        <th>Id</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Kelas</th>
                        <th>Guru Pengajar</th>
                        <th>Mata Pelajaran</th>
                        <th>Materi Pelajaran</th>
                        <th>Link Pembelajaran</th>
                        <th>Dokumentasi</th>
                        <th>Keterangan</th>
                    </tr>
                    @foreach($absen as $b)
                    <tr>
                        <th>{{$b->id}}</th>
                        <th>{{$b->tanggal}}</th>
                        <th>{{$b->jam_pembelajaran}}</th>
                        <th>{{$b->kelas}}</th>
                        <th>{{$b->guru_pengajar}}</th>
                        <th>{{$b->mata_pelajaran}}</th>
                        <th>{{$b->materi_pelajaran}}</th>
                        <th>{{$b->link_pembelajaran}}</th>
                        <th align="center"=><img style="width: 20%;" src="storage/{{$b->dokumentasi}}"></th>
                        <th>{{$b->keterangan}}</th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>
