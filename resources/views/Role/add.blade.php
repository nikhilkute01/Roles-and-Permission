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

    <section class="section dashboard">

    </section>
    <div class="pagetitle">
      <h1>Add new role</h1>
      @include('meassges')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Role</h5>

              <!-- General Form Elements -->
              <form action="{{'role/add'}}" method="post">
              @csrf
               <label>Name</label>
                <input type="text" name="name" required class="form-control">
                <br>
                <br>
                <label><b>Permission</b></label>
                <div class="container mt-5">
        @foreach($data as $value)
            <div class="row mb-4">
                <div class="col-md-12">
                    <h4>{{ $value['name'] }}</h4>  
                </div>
                @foreach ($value['group'] as $details)
                    <div class="col-md-4 permission-item">
                        <div class="form-check">
                            <input class="form-check-input" value="{{$details['id']}}" name="permission_id[]" type="checkbox">
                            <label class="form-check-label">
                                {{ $details['name'] }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

                
               
                <br>


                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      </div>
    </section>
</main>
@endsection


  