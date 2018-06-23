@extends('layouts.app')
@section('content')
    <!-- Content page -->
    <div class="container-fluid">
        <div class="page-header">
            <h1 class="text-titles">System <small>Tiles</small></h1>
        </div>
        <div class="full-box text-center mt-3">
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    Docentes
                </div>
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-male-alt"></i>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">10</p>
                    <small>registrados</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    Universitarios
                </div>
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-face"></i>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">70</p>
                    <small>registrados</small>
                </div>
            </article>
        </div>
    </div>

@endsection