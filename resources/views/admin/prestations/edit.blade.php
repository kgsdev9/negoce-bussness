@extends('admin.layout')

@section('admin')
<div class="container-fluid mt-2">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Edition de la catégorie de job  </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('typejob.update', $ressource->id)}}" method="post" enctype="multipart/form-data">
            @csrf 
            @method('PATCH')
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input">Nom de la categorie job </label>
              <input type="text" class="form-control" name="name" id="example3cols1Input"  value="{{$ressource->name}}">
            </div>
          </div>


        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister les modifications </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>

@endsection
