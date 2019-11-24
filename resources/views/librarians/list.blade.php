@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Avatar</th>
            <th scope="col">Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listLibrarian as $key => $librarian)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$librarian->name}}</td>
                <td>{{$librarian->phone}}</td>
                <td>{{$librarian->address}}</td>
                <td><img src="{{asset("storage/$librarian->avatar")}}" alt="" class="img-fluid" width="60px"></td>
                <td>@if($librarian->role == \App\RoleConstant::ADMIN)
                        Admin
                    @else
                        Librarian
                    @endif
                </td>
                <td>
                    @if($librarian->role == \App\RoleConstant::ADMIN)
                        U 're Admin
                    @else
                        <a href="{{route('librarians.destroy', $librarian->id)}}" class="btn btn-danger">Delete</a>
                    @endif

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
