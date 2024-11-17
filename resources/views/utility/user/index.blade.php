@extends('layouts.app')
@section('content')
  <div class="content-wrapper">
    <div class="row" id="card-list">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Users</h3>
                <h6 class="card-description font-weight-normal mb-0 ">Utility /<code>Users</code> </h6>
              </div>
              <div class="col-12 col-xl-4">
               <div class="justify-content-end d-flex">
                @can('users.create')
                <a href ="{{ route('utility.user.create') }}" class="btn btn-outline-primary btn-icon-text btn-sm" id="bt-add" > <i class="ti-plus btn-icon-prepend"></i>
                  Add Users
                </a>
                @endcan
               </div>
              </div>
             </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-borderless data-table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                  </tr>  
                </thead>
              </table>
            </div>     
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <script src="{{ asset('assets/utility/user.js') }}"></script>
@endsection
