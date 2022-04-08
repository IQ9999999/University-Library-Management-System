@extends('layouts.Navbar')

@section('content')
<div class="container">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            @can('isAdmin')
            @else
            <div class="btn btn-info btn-lg">
                You have Student or Lecturer Access (Home page)
            </div>
            @endcan
        </div>
</div>
@endsection
