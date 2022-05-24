@extends('admin.layouts.main')

@section('main-content')
    <div class="container p-3">
        <span class="fs-4 fw-bold">Daftar Buyer</span>
        <hr>
        <div class="border border-secondary rounded" style="overflow-y: auto; height: 80vh; overflow-x: auto;">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr style="background-color: #BFBFBF;">
                            <th class="col">No</th>
                            <th class="col">Nama</th>
                            <th class="col">No. Telepon</th>
                            <th class="col">Email</th>
                            <th class="col">Username</th>
                            <th class="col">Password</th>
                            <th class="col">No. KTP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Eimi Fukada</td>
                            <td>0852696969696</td>
                            <td>Jl. Tokyo Ohayou Konnichiwa</td>
                            <td>eimiSlav@gmail.com</td>
                            <td>eimiSlav69</td>
                            <td>3211123669691242</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
