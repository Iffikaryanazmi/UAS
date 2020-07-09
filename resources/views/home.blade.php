@extends('layouts.app')

@section('content')
<div class="container bg-dark">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blogger Sistem Informasi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Menikmati Foto Foto Menarik!!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
