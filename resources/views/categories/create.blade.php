@extends('layouts.admin')

@section('title')
    Create Category
@endsection

@section('content')
    @include('notifications.flash-alert')
    <br><br>
    <div class="container">
        <h2>Create Category</h2>
        <div class="card col-sm-4">
            <div class="card-body">
                {!! Form::open(['method'=>'POST','action'=>['CategoriesController@store']]) !!}
                <div class="form-group">
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Type a category name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create Category',['class'=>'btn btn-success']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>


    </div>

@endsection

@section('scripts')


@endsection
