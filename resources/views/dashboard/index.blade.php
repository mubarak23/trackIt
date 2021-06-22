@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-3">
        <div class="card shadow-sm mb-4 p-3">
            Dashboard | Index
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Project Title</th>
                        <th>Posted By</th>
                        <th>Category</th>
                        <th>Take Actions </th>
                    </tr>
                    <tr>
                        @if($projects->count())
                        @foreach ($projects as  $project)
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->posted_by}}</td>
                        <td>{{$project->category->name}}</td>
                        <td><button class="btn btn-primary">Edit</button>  <button class="btn btn-primary">Add image</button></td>

                        @endforeach
                        {{ $projects->links() }}
                         @else
                         <p>There are no Projects</p>
                         @endif
                    </tr>
                </thead>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection
