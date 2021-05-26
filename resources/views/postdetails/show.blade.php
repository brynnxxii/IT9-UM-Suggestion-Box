@extends('postdetails.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>VIEW FORM</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('postdetails.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date::</strong>
                {{ $postdetail->post_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID No:</strong>
                {{ $postdetail->scid }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FROM:</strong>
                {{ $postdetail->fullname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TO:</strong>
                {{ $postdetail->office }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category: </strong>
                {{ $postdetail->category }}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">
                <strong>Message: </strong>
                {{ $postdetail->post }}
            </div>
        </div>

</div>
   
@endsection