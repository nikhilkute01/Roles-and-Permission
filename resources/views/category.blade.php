@extends('layout.app')
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard" style="height:100vh;">
    <div class="pagetitle">
  
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Role List</h5>
        @include('meassges')
              <div class="col-md-12" style="text-align:right;">
              <a href="{{url('add')}}" class="btn btn-primary">add</a>
            </div>
             
            
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                    id
                    </th>
                    <th>Name</th>
                    <th>action</th>
                   
                  </tr>
                </thead>
               
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    </section>

</main>
@endsection


  