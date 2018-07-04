@extends('layouts.admin')

@section('title')
    Category List
@endsection

@section('content')
    @include('notifications.flash-alert')
    <br><br>
    <div class="container">
        <h2>Category List</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Management</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td >{{$category->name}}</td>
                        <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-info">Manage</a></td>
                        <td>{{$category->created_at?$category->created_at->diffForHumans():'No Record Available'}}</td>
                        <td>{{$category->updated_at?$category->updated_at->diffForHumans():'No Record Available'}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection

@section('scripts')


@endsection
