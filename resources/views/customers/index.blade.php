@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel CRUD Services</h2>
            </div>

            <div class "pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}">Create New Customer</a>
        </div>
        <a href="/">Go to products</a>

    </div>
    </div>
