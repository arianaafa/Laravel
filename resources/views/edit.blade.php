@extends('layout.main')
@section('content')
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif
        <form method="post" action="{{ route('example.update', $example->id ) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="titulo">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$example->name}}"/>
            </div>
            <div class="form-group">
                <label for="date">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{$example->email}}"/>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
