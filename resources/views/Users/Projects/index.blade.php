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
                   <form action="">
                    <div class="row text-center">
                        
                        <div class="col-md-10">
                            <div class="form-group">
                                <input type="file" name="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                               <button class="btn btn-danger" type="submit">Upload</button>
                            </div>
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
                <h3 class="card-title">Added Projects</h3>

                <div class="card-tools">
                    <span class="badge badge-danger">8 New Projects</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/AdminUi/dist/img/mechanic.jpg" class="img-thumbnail" alt="User Image">
                        <a class="users-list-name" href="#">My New Workshop</a>
                         
                    </div>
                    <div class="col-md-3">
                        <img src="/AdminUi/dist/img/soft.jpeg" class="img-thumbnail" alt="User Image">
                        <a class="users-list-name" href="#">An Invoicing Software</a>
                        
                    </div>
                    <div class="col-md-3">
                        <img src="/AdminUi/dist/img/thegrace.png" class="img-thumbnail" alt="User Image">
                        <a class="users-list-name" href="#">A membership Portal</a>
                        
                    </div>
                    <div class="col-md-3">
                        <img src="/AdminUi/dist/img/wiring.jpeg" class="img-thumbnail" alt="User Image">
                        <a class="users-list-name" href="#">Wiring Site</a>
                         
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="/AdminUi/dist/img/dc.png" class="img-thumbnail" alt="User Image">
                        <a class="users-list-name" href="#">Church site for event registeration</a>
                        
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                </div>
                <!-- /.users-list -->
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
