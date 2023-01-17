@extends('layouts.Artisan.app')
@section('content')
<!--cntent Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Projects</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
       <div class="row">
       <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="col-md-6">
                   <form action="{{ route('artisan.projects') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Project Title" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                               <textarea name="description" class="form-control" required placeholder="Project Description"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" required name="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <button class="btn btn-danger" type="submit">Upload</button>
                            </div>
                        </div>

                   </form>
                </div>

            </div>
       </div>
       </div>
       </div>

      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Added Projects <span class="text-success">{{ $projects->count() }}</span></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>

                <div class="card-body p-3">
                    <div class="row">
                        @foreach ($projects as $project)
                        <div class="col-md-4">
                            <a href="">
                                <img src="{{ asset('/storage/Projects/' . $project->file) }}" class="img-thumbnail" alt="User Image">
                            <h5 class="text-white">{{ $project->title }}</h5>

                            </a>
                        </div>

                        @endforeach


                    </div>

                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
            </div>
        </div>

      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
  <!-- /.content-wrapper -->
