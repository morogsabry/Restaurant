@extends('layouts.app')
@section('title','Profile')
@section('content')
<body class="profileBody">

    <div class="card">
        <div class="Prof">
            <header>
                <img src="../images/Morog.jpg" alt="Image"/>
            </header>
            <form method="POST" action="register">
                {{ csrf_field() }}
            
            <h3>{{Auth::user()->name}}</h3>
            <p {{ $errors->has('name') ? ' has-error' : '' }}>{{Auth::user()->email}}</p>
            <p {{ $errors->has('name') ? ' has-error' : '' }}>{{Auth::user()->phone_number}}</p>
            <hr>
            <h5>Address</h5>
            <h6 {{ $errors->has('name') ? ' has-error' : '' }}>{{Auth::user()->address}}</h6>
            <hr>
            <div class="text-center">
                <a href="/users/{{Auth::user()->id}}/edit" class="btn btn-primary">Edite profile</a><hr>
                <a href="/items/create" class="btn btn-success">Add new item</a>
                <a href="/showallmenu" class="btn btn-success">View menu</a>
                <a href="/showallusers" class="btn btn-success">View Users</a>
            </div>
        </form>
        </div>
    </div>
@endsection
</body>
