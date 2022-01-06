@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Usuários</h4>
                            <p class="card-category"> Aqui você pode gerenciar usuários</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
{{--                                    <a href="#" class="btn btn-sm btn-primary">Add user</a>--}}
                                </div>
                            </div>

                            @livewire('messages')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
