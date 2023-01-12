
<div class="col-12">
    @include('livewire.admin.create-proffession')
   @include('livewire.admin.edit-proffession') <br><br>
    <div class="card">
      <div class="card-header">
      <h3 class="card-title">Added Professions Table</h3>

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

              <th>Title</th>
              <th>Date</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($professions as $profession)
            <tr>
                <td>{{ $profession->title }}</td>
                <td>{{ \Carbon\Carbon::parse($profession->created_at)->format('d D, M Y') }}</td>
                <td>
                    <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $profession->id }})" class="btn btn-outline-success btn-sm">Edit</button>
                    <button wire:click="delete({{ $profession->id }})" class="btn btn-danger btn-sm">Delete</button>

                </td>

            </tr>

            @endforeach

          </tbody>
      </table>
      </div>
      <!-- /.card-body -->
  </div>
