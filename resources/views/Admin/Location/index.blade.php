@extends('layouts.Admin.app')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Location</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Admin / Location</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
             <section class="content">
                <div class="container-fluid">
                <div class="row">
                  <livewire:admin.location-page/>
                    <!-- /.card -->
                    </div>
                </div>

                </div><!-- /.container-fluid -->
             </section>
            <!-- /.content -->
            </div>
@endsection

