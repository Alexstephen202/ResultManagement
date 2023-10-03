

@extends('backend.layout.subpage')
@section('content')
<style>
  @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}</style>

          <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">    Teacher Registration </h3>

            <form class="px-md-2" action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="name" />
                <label class="form-label" for="form3Example1q">Name</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="email" name="email" />
                    <label for="email" class="form-label"> Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <select class="select" name="gender">
                    <option value="1" disabled>Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                  </select>

                </div>
              </div>


              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection