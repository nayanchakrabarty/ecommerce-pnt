@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit</h4>
                    <h6 class="box-subtitle">Category</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body wizard-content">
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        <!-- Step 1 -->
                        @method('put')
                        @include('admin.category._form')
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
