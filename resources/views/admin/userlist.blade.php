@extends('layouts.master')
@section('title','用户列表')
@section('model-title','用户列表')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>班期</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->sex}}</td>
            <td>{{$user->grade}}</td>
            <td><a class="btn btn-success">修改</a><a class="btn btn-danger">删除</a></td>
        </tr>
            @endforeach
        </tbody>

    </table>
    {{$users->appends($search)->links('admin.page')}}
    @endsection