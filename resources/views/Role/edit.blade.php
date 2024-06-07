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
        <!-- Dashboard Content -->
    </section>

    <div class="pagetitle">
        <h1>Add new role</h1>
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
                        <form action="{{ url('role/update', ['id' => $data->id]) }}" method="post">
                            @csrf
                            <input type="text" name="name" value="{{ $data->name }}" required class="form-control">
                            <br>
                            <label><b>Permission</b></label>
                            <div class="container mt-5">
                                @foreach($data2 as $value)
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <h4>{{ $value['name'] }}</h4>  
                                        </div>
                                        @foreach ($value['group'] as $details)
                                            @php
                                                $checked = in_array($details['id'], $roleIds) ? 'checked' : '';
                                            @endphp
                                            <div class="col-md-12">
                                                <input type="checkbox" name="permissions[]" value="{{ $details['id'] }}" {{ $checked }}>
                                                {{ $details['name'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
