<x-app-layout>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fa fa-bell">&nbsp;</i> {{ __('If you have any comment/suggestion on how we still improve our service.
             Please write them on the form provided below:') }}
        </h2>
    </x-slot>
    

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-56">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-sm">

            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p><i class="fa fa-check-circle-o">&nbsp;</i>{{ $message }}</p>
        </div>
    @endif
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

                <div class="p-2 bg-white border-b border-gray-100">
                    <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="text-center">
                            <h2><br>TEACHER'S FEEDBACK AND SUGGESTION FORM <br><br></h2>
                            <hr class="solid" style="border-top:3px solid #bbb;"></h1><br><br>
                        </div>
                        
                    </div>
                </div>
            <form action="{{ route('postdetails.store') }}" method="POST">
                @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 ml-16 mr-20">
                    <div class="form-group">
                        <strong>ID No:</strong>
                        <input type="text" name="scid" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200
                        focus:ring-opacity-50 rounded-md shadow-sm" placeholder="ex.481234">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 ml-56">
                <div class="form-group">
                <strong>Date:</strong>
                        <input type="date" name="post_date" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200
                        focus:ring-opacity-50 rounded-md shadow-sm" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 ml-16">
                <div class="form-group">
                        <strong>Fullname:</strong>
                        <input type="text" name="fullname" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200
                        focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 ml-16"">
                <div class="form-group">
                        <strong>Type of Feedback:</strong>
                        <select name="category" class="block mt-1 w-56 border-gray-300 focus:border-indigo-300 focus:ring-indigo-200
                        focus:ring-opacity-50 rounded-md shadow-sm">
                           <option value=""></option>
                            <option value="COMPLAINT">Complaint</option>
                            <option value="RECOMMENDATION">Recommendation</option>
                            <option value="SUGGESTION">Suggestion</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 ml-16 mr-28">
                <div class="form-group">
                        <strong>Office:</strong>
                        <select name="office" class="block mt-1 w-56 border-gray-300 focus:border-indigo-300 focus:ring-indigo-200
                        focus:ring-opacity-50 rounded-md shadow-sm">
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
                <div class="col-xs-12 col-sm-12 col-md-12 ml-16 mr-8">
                    <div class="form-group">
                        <strong>Write it below:</strong>
                        <textarea class="form-control" style="width:680px; height:150px" name="post" placeholder="Write here..."></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
           </form>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>