@extends('dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ Request::segment(2) }}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php var_dump(Auth::guard('petugas')->check()) ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-header">
                    <h4 class="text-center">Management Masyarakat</h4>
                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>NO Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($masyarakat_all as $key)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $key->username }}</td>
                                            <td>{{ $key->nama }}</td>
                                            <td>{{ $key->telp }}</td>
                                            <td>
                                                <a href="" class="table-action" data-toggle="tooltip" data-original-title="Edit Users">
                                                    <i class="fas fa-user-edit"></i>
                                                  </a>
                                                  <a data-toggle="modal" data-target="" href="#" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Users">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Management Masyarakat</div> -->
                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">Management Masyarakat</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-header">
                    <h4 class="text-center">Management Petugas</h4>
                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>NO Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($petugas_all as $key)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $key->nama_petugas }}</td>
                                            <td>{{ $key->username }}</td>
                                            <td>{{ $key->telp }}</td>
                                            <td>{{ $key->level }}</td>
                                            <td>
                                                <a href="" class="table-action" data-toggle="tooltip" data-original-title="Edit Users">
                                                    <i class="fas fa-user-edit"></i>
                                                  </a>
                                                  <a data-toggle="modal" data-target="" href="#" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Users">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Management Masyarakat</div> -->
                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">Management Masyarakat</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
