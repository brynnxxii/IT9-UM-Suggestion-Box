@extends('postdetails.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Message</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('postdetails.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li><i class="fa fa-info-circle">&nbsp;</i>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('postdetails.update', $postdetail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="post_date" value="{{ $postdetail->post_date}}" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
        <div class="form-group">
                <strong>ID No:</strong>
                <input type="text" name="scid" value="{{ $postdetail->scid }}" class="form-control" style="height:55px" placeholder="ex.481234">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
                <strong>Fullname:</strong>
                <input type="text" name="fullname" value="{{ $postdetail->fullname }}" class="form-control" style="height:55px" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
                <strong>Type of Feedback:</strong>
                <select class="form-control"  name="category"  value="{{ $postdetail->category }}"style="width: 180px; height:55px" placeholder="Office" required>
                                <option value=""></option>
                                <option value="COMPLAINT">Complaint</option>
                                <option value="COMMENT">Recommendation</option>
                                <option value="SUGGESTION">Suggestion</option>
                            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
                <strong>Office:</strong>
                <select class="form-control"  name="office" value="{{ $postdetail->office }}" style="width: 180px; height:55px" placeholder="Office" required>
                        <option value=""></option>
                        <option value="ADMISSION">ADMISSION</option>
                        <option value="CASHIER">CASHIER</option>
                        <option value="CLINIC">CLINIC</option>
                        <option value="GSTC">GSTC</option>
                        <option value="HRMD">HRMD</option>
                        <option value="OSA">OSA</option>
                        <option value="RAC">RAC</option>
                        <option value="SAD">SAD</option>
                        <option value="TREASURY">TREASURY</option>
                </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Write your comments below:</strong>
                        <textarea class="form-control" style="height:150px" name="post" placeholder="Write here..."> {{ $postdetail->post }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
    </div>
</form>
    
@endsection