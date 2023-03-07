@extends('layouts.main')
@section('container')
<div class="p-4">
    <div class="bg-base-100 shadow-xl roudned-md p-4">
        <form action="/ruangan/simpan" method="POST">
            @csrf
            <div class="form-control">
                <label for="nama_ruangan" class="mb-2 font-medium block text-sm">Nama Ruangan</label>
                <input type="text" name="nama_ruangan" class="input input-bordered w-full max-w-xs" required autocomplete="off"/>
            </div>
            <button type="submit" class="btn btn-wide">Wide</button>
        </form>
    </div>
</div>
@endsection
