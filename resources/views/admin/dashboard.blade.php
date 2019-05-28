@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Admin Dashboard
                        @include('includes.message')</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <h3>Registered clients</h3>

                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>Client Photo</th>
                                    <th>Name</th>
                                    <th>Client email</th>
                                    <th></th>


                                </tr>
                            </thead>
                            <tbody id="">
                                @foreach($client as $client)
                                <tr>


                                    <td><img height="100px" width="100px"
                                            src="{{ asset('uploads/images/' . $client->photo)}}" alt=""></td>
                                    <td><b>{{$client->name}}</b></td>
                                    <td><b>{{$client->email}}</b></td>
                                    <td><a class="btn btn-danger"
                                            href="{{route('delete',['id'=>$client->id])}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection