@extends('admin.layouts.main')

@section('main-content')
<div class="container p-3">
    <span class="fs-4 fw-bold">Request Jadi Seller</span>
    <hr>
    <div class="border border-secondary rounded" style="overflow-y: auto; height: 80vh; overflow-x: auto;">
        <div class="row p-3">
            <table class="table-responsive">
                <tr class="row">
                    <th class="col-2">Nama</th>
                    <td class="col">: {{ $requester->user->name }}</td>
                </tr>
                <tr class="row">
                    <th class="col-2">NIK</th>
                    <td class="col">: {{ $requester->nik }}</td>
                </tr>
                <tr class="row">
                    <th class="col-2">Phone</th>
                    <td class="col">: {{ $requester->phone }}</td>
                </tr>
                <tr class="row">
                    <th class="col-2">Alamat</th>
                    <td class="col">: {{ $requester->address }}</td>
                </tr>
                <tr class="row">
                    <th class="col-2">Foto KTP</th>
                    <td class="col">
                        <img src="{{ asset('storage/' . $requester->photo_ktp) }}" alt="Foto KTP" height="200">
                    </td>
                </tr>
                <tr class="row">
                    <th class="col-2">Foto Selfie</th>
                    <td class="col">
                        <img src="{{ asset('storage/' . $requester->photo_selfie) }}" alt="Foto Selfie" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                    <form action="/admin/requestUpgrade/{{ $requester->user->username }}" method="post">
                        @method('put')
                        @csrf
                        <input type="hidden" name="status" value="accepted">
                        <button class="btn btn-info" type="submit">Diterima</button>
                    </form>
                    <form action="/admin/requestUpgrade/{{ $requester->user->username }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">Ditolak</button>
                    </form>
                    </td>
                </tr>
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
