@extends('layout.main')
    @section('content')

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($examples as $example)
                <tr>
                    <td>{{$example->name}}</td>
                    <td>{{$example->email}}</td>
                    <td><a href="{{ route('example.edit', $example->id)}}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="{{ route('example.destroy', $example->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

                {{ $examples->links() }}


    @endsection

