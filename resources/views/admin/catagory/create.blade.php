@extends('admin')
@section('title') Add New Publisher - {{ $common['appShort'] }} @stop

@section("content")
    <section class="content-header">
        <h1><i class="fa fa-plus"></i> Add Catagory</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="">
                <a href="{{ url('/admin/publisher/list') }}">Catagory List</a>
            </li>
            <li class="active">
                Add New
            </li>
        </ol>
    </section>

    <section id="createBook" class="content publisher-form">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Catagory Details</h3>
                    </div>
                    <form method="post" action="{{ url('/').'/admin/catagory' }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="box-body">
                            @if (count($errors) > 0)
                                <div class="">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <div class="form-group">
                                        <label for="mName">Catagory Name</label>
                                        <input type="text" class="form-control input-lg" id="mName" placeholder="Catagory Name"
                                               name="name" value="{{ old('name') }}" maxlength="100" required>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-12">
                                        <div class="form-group">
                                            <label for="mName">Catagory Code</label>
                                            <input type="text" class="form-control input-lg" id="mName" placeholder="Catagory Code"
                                                   name="code" value="{{ old('name') }}" maxlength="100" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-12">
                                        <div class="form-group">
                                            <label for="mName">Discription</label>
                                            <input type="text" class="form-control input-lg" id="mName" placeholder="Discription"
                                                   name="discription" value="{{ old('name') }}" maxlength="100" required>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="box-footer">
                            <p class="text-right">
                                <button class="btn btn-primary btn-flat" type="submit">Save</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop