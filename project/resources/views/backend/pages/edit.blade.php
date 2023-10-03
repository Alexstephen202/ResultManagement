@extends('backend.layout.subpage')
@section('content')

<style>
  .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
  </style>

  <body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="{{ route('student.update',$user->id)}}" method="post" enctype="multipart/form-data" >
              @csrf
          @method('Put')
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="name" value="{{$user->name}}"/>
                    <label class="form-label" for="firstName" >First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">


                
                <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" value="{{$user->email}}"/>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>
                

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                <input type="number" id="emailAddress" class="form-control form-control-lg" name="age"  value="{{$user->age}}"/><br>
                    <label class="form-label" for="emailAddress">Age</label>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="female"  {{($user->gender=='female'?'selected':'')}} />
                    <label class="form-check-label" for="femaleGender" >Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male"    {{($user->gender=='male'?'selected':'')}}/>
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="others"    {{($user->gender=='others'?'selected':'')}}/>
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <input type="text" id="rollno" class="form-control form-control-lg" name="rollno" value="{{$user->rollno}}" />
                    <label class="form-label" for="rollno" >Roll No</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg"  name="phoneno"  value="{{$user->phoneno}}"/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-6">

                  <select class="select form-control-lg"  name="course">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <option value="BCA"  {{($user->course=='BCA'?'selected':'')}}>BCA</option>
                    <option value="BBA" {{($user->course=='BBA'?'selected':'')}}>BBA</option>
                    <option value="BSC"{{($user->course=='BSC'?'selected':'')}}>BSC</option>
                  </select>
                 

                </div>
              <div class="col-md-6">

                <h6 class="mb-0">Upload CV</h6>

            

                <input class="form-control form-control-lg" id="formFileLg" type="file"  name="fileupload" value=""
               {{ isset($user) ? '' : 'required' }}>
                                <input type="hidden" name="image_old" value="{{ $user->image ?? '' }}">
                                @if (isset($user))
                                    <img src="{{ asset('image' . $user->image) }}" width="100" alt="">
                                    <a href="{{ asset('image' . $user->image) }}"
                                        download="">{{ $user->image ?? '' }}</a>
                                @endif<br>
                <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div>

              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
      
