@extends('back.master')
@section('title', 'Add Project')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Laravel Project</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('addproject')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Project Title</label>
                            <input name="title" type="text" class="text-white form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail11">Project Discription</label>
                            <input name="dis" type="text" class="text-white form-control" id="exampleInputEmail11" aria-describedby="emailHelp" placeholder="Enter Discription">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail111">Project Preview Link</label>
                            <input name="link" type="text" class="text-white form-control" id="exampleInputEmail111" aria-describedby="emailHelp" placeholder="Enter Preview Link">
                            <input name="category" type="text" class="d-none" value="laravel">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark w-100">Add Project</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Show All Laravel Projects</h3>
                </div>
                <div class="card-body">
                    <table class="table table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Demo</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($projects as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{!! Str::limit($item->title, 30, ' ...') !!}</td>
                                <td><a class="badge badge-success" href="{{$item->link}}" target="_blank">View</a></td>
                                <td><a href="#" class="btn btn-danger">Hide</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection