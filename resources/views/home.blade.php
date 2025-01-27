@extends('back.master')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">10</h3>
                <p class="text-success ms-2 mb-0 font-weight-medium">laravel</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Total Laravel Project</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">100</h3>
                <p class="text-success ms-2 mb-0 font-weight-medium">HTML</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Total HTML Project</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">31</h3>
                <p class="text-success ms-2 mb-0 font-weight-medium">Convert</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Figma To HTML</h6>
        </div>
      </div>
    </div>
  </div>
@endsection
