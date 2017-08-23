@extends('layouts.app')

@section('isi')

{{ $catalog }}
{{ die }}

<header style="background-image: url('{{ URL::to('/').'/'.$catalog[0]['photos'] }}')!important;" >
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">{{ URL::to('/').'/'.$project[0]['name_project'] }}</h1>
                <hr>
                <p>ini project</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>
@endsection
