@extends('admin.layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h3>All Users</h3>
                </div>
                <div class="float-left">
                    Find <b>{{$users->total()}}</b> rows, page <b>{{$users->currentPage()}} / {{$users->lastPage()}}</b>
                </div>
                <div class="float-right">
                    {!! $users->links(); !!}
                </div>
                <table class="table table-center table-brd a-color">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
{{--                        <th scope="col"></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            @if($user->role == 'MEMBER')
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td class="text-right">
        {{--                                <a href="{{route('admin-users-edit',$user)}}" class="btn btn-sm btn-warning">edit</a>--}}
                                        <a href="{{route('admin-users-delete',$user)}}" class="btn btn-sm btn-danger">delete</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {!! $users->links(); !!}
                </div>
            </div>
        </div>
    </div>
@stop
