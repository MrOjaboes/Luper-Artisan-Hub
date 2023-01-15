
<div class="col-12">
    <div class="card">
      <div class="card-header">
      <h3 class="card-title">Registered Artisans Table</h3>

      <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
              <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
              </button>
          </div>
          </div>
      </div>
      </div>
      <div class="row py-1">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <a href="#" class="close text-white" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('message') }}
                </div>
            @endif
            <div class="col-md-1"></div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
          <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Gender</th>
              <th>Location</th>
              <th>State</th>
              <th>Date Of Reg.</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($artisans as $artisan)
            <tr>
                <td>{{ $artisan->fullname }}</td>
                <td>{{ $artisan->email }}</td>
                <td>{{ $artisan->contact_one }}</td>
                <td>{{ $artisan->gender }}</td>
                <td>{{ $artisan->location }}</td>
                <td>{{ $artisan->state_of_origin }}</td>
                <td>{{ \Carbon\Carbon::parse($artisan->created_at)->format('d D, M Y') }}</td>
                <td>
                    <a href="{{ route('admin.artisan.details',$artisan->id) }}" class="btn btn-outline-info btn-sm">Details</a>
                </td>
            </tr>

            @endforeach

          </tbody>
      </table>
      </div>
      <!-- /.card-body -->
  </div>
