@extends('admin.layouts.main')

@section('main-content')
@php
$i = 1
@endphp
<div class="container p-3">
    <span class="fs-4 fw-bold">Request Jadi Seller</span>
    <hr>
    <div class="border border-secondary rounded" style="overflow-y: auto; height: 80vh; overflow-x: auto;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="background-color: #BFBFBF;">
                        <th class="col">No</th>
                        <th class="col">Nama Seller</th>
                        <th class="col">Username</th>
                        <th class="col">Email</th>
                        <th class="col">Status</th>
                        <th class="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>Eimi</td>
                        <td>eimin</td>
                        <td>eimi@gmail.com</td>
                        <td>Pending</td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                <button class="btn btn-info" name="status" value="accepted">Diterima</button>
                                <button class="btn btn-danger" name="status" value="rejected">Ditolak</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script>
    let oldConfirmationStatus;
        $('#status').change(function() {
            let newConfirmationStatus = $(this).val();
            if(!confirm("Apakah anda yakin ingin mengubah status transaksi ini?")) {
                $(this).val(oldConfirmationStatus);
                return;
            }
            oldConfirmationStatus = newConfirmationStatus;
        });
</script>
@endsection