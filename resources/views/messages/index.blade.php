@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Message Management')])

@section('content')

 @livewire('messages')

@endsection
