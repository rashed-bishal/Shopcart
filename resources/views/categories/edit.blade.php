@extends('layouts.admin')

@section('title')
    Edit Category
@endsection

@section('content')
    @include('notifications.flash-alert')
    <br><br>
    <div class="container">
        <h2>Edit Category</h2>
        <div class="card col-sm-4">
            <div class="card-body">
                {!! Form::model($category,['method'=>'PATCH','action'=>['CategoriesController@update',$category->id]]) !!}
                <div class="form-group">
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Update Category '.$category->name]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update Category',['class'=>'btn btn-warning']) !!}
                </div>
                {!! Form::close() !!}
                {!! Form::open(['method'=>'DELETE','action'=>['CategoriesController@destroy',$category->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete Category',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>


    </div>

@endsection

@section('scripts')


@endsection
