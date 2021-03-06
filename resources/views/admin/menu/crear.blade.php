@extends("theme.$theme.layout")
@section('titulo')
Menus
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Crear Menus</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{route('menu')}}" class="btn btn-sm btn-outline-secondary">Listado</a>
                </div>
            </div>
        </div>
        <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
            @csrf
            <div class="box-body">
                @include('admin.menu.form')
            </div>
            <div class="box-footer">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    @include('includes.boton-form-crear')
                </div>
            </div>
        </form>
    </div>
</div>
@endsection