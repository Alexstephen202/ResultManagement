
@extends('frontend.layout.subpage')
@section('content')
<section class="case_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Case Studies
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('frontend/images/case-1.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Sit amet consectetur adipisicing elit
              </h5>
              <p>
                Alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('frontend/images/case-2.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Excepturi placeat nihil eos maxime
              </h5>
              <p>
                Alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection