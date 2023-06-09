@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            
              <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back </a>
              </div>

            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problem with your input.<br><br>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <form action="{{route('products.store')}}" method="post">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details:</strong>
                        <textarea class="form-control" style="height:150px" name="details" placeholder="Details"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"> submit </a>
                </div>

            </div>
        </div>
    </form>

                   
@endsection()


