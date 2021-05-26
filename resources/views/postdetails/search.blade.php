@extends('postdetails.layout')
 
@section('content')

<form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
<input class="form-control mr-sma-2" name="query" type="search" placeholder="Search category/office" >
<button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
</form>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2> &nbsp;SUGGESTION/FEEDBACK &nbsp; MANAGEMENT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('postdetails.create') }}"> Create Create Feedback/Suggest</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p><i class="fa fa-check-circle-o">&nbsp;</i>{{ $message }}</p>
        </div>
    @endif
   
    <div class="container-fluid text-center">
        <table class="table table-bordered" >
        <tr>
            <th class="text-center" >No</th>
            <th class="text-center" >ID No</th>
            <th class="text-center" >Fullname</th>
            <th class="text-center">Office</th>
            <th  class="text-center">Form</th>
            <th class="text-center">Date</th>
            <th  class="text-center">Post</th>
            <th  class="text-center" width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($postdetail as $postdetail)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $postdetail->scid }}</td>
            <td>{{ $postdetail->fullname }}</td>
            <td>{{ $postdetail->office }}</td>
            <td>{{ $postdetail->category }}</td>
            <td>{{ $postdetail->post_date }}</td>
            <td>{{ $postdetail->post }}</td>
            
            <td>
                <form action="{{ route('postdetails.destroy',$postdetail->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('postdetails.show',$postdetail->id) }}">VIEW</a>
    
                    <a class="btn btn-primary" href="{{ route('postdetails.edit',$postdetail->id) }}">EDIT</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
        
        @endforeach
    </table>
</div>
   
 
      
@endsection