
@extends('backend.layout.subpage')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
<div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h1>View Details</h1>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="">Name : {{ $user->name }}</label>

                            </div>
                            <div class="col-md-12">
                                <label for="">Mail : {{ $user->email }}</label>
                            </div>
                           
                            <div class="col-md-12">
                                <label for="">Gender : {{ $user->gender }}</label>
                            </div>

                            <div class="col-md-12">
                                <label for="">Age : {{ $user->age }}</label>
                            </div>
                          
                            <div class="col-md-12">
                                <label for="">rollno : {{ $user->rollno }}</label>
                            </div>

                            <div class="col-md-12">
                                <label for="">Phoneno : {{ $user->phoneno }}</label>
                            </div>

                            <div class="col-md-12">
                                <label for="">Course : {{ $user->course }}</label>
                            </div>

                            <div class="col-md-12">
                                <label for="">Image:</label>
                                <img src="{{ asset('image' . $user->fileupload) }}" width="100" alt="">
                                <a href="{{ asset('image' . $user->fileupload) }}"
                                    download>{{ $user->fileupload ?? '' }}</a>
                         
                        </div>
                           
                        </div>
                      
                    </div>
                </div>
                <a class="btn btn-light" href="{{ URL::previous() }}">Back</a>
</div>
</div>
            </div>
        </div>
    </div>
    @endsection