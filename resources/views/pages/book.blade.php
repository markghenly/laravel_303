@extends('layouts.app')

@section('content')


@if(Session::has('success'))
<p class=" allert alert-success">{{ Session::get('success')}}</p>

@else
<div class="container mt-5">

        <!-- Likes with 520 Title Card -->
        <div class="col-md-4">
            <div class="card text-center bg-primary">
                <div class="card-body">
                    <i class="bi bi-hand-thumbs-up" style="font-size: 2rem;"></i>
                    <h2 class="card-title mt-3">Books</h2>
                    <p class="card-text">105</p>
                </div>
            </div>
        </div>
      
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="fw-bold">Repost for 2024</h2>
        </div>
        <div class="card-body">
            <p class="fw-bold">Report for 2024</p>
            <p class="fw-bold">Company financial status</p> 
        </div>
        <div class="card-footer">
            <button class="btn btn-primary fw-bold">Save</button>
        </div>
    </div>
</div>


<div class="container mt-5">
            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">
                    <a href="{{ url('/add-book-form') }}" class="btn btn-primary">Add book</a>
               
  <div class="container mt-5">                 
                    <div class="row">
                    @foreach($data as $d)
                        <div class="col ">
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="{{ asset('_uploads/'.$d->photo) }}" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">{{ $d->title }}</h4>
                                <p class="card-text">Country code: {{ $d->country_id }}
                                <br>Stocks: {{ $d->stock }}
                                <br>Price: {{ $d->amount }}</p>
                                <a href="{{ url('/edit-book',$d->id) }}" class="btn btn-info" onclick="return confirm('Update?')"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('/delete-book',$d->id) }}" class="btn btn-danger" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                    </div>
                </div>
            </div>


</div>
  </div>




@endif

@endsection
















