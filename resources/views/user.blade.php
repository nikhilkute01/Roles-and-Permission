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
              <form action="{{'user/add'}}" method="post">
                 @csrf
               <label>Name</label>
                <input type="text" name="name" required class="form-control">
                <br>
                <br>
              
                <label>Email</label>
                <input type="text" name="email" required class="form-control">
                <br>


                <label>password</label>
                <input type="password" name="password" required class="form-control">
                  <br>
                  <label for="cars">select role</label>

              <select name="role" id="">      
             @foreach ($data as $role)
             <option value="{{$role->id}}" class="form-control">{{$role->name}}</option>
             @endforeach
              </select>

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


  