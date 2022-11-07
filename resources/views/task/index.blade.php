<style>
    .card__subscribe-button {
        background: #6C2D88 !important;
        color: #fff !important;
    }
    table, th, td {
      border:0.5px solid black;
    }
</style>
{{-- @extends('admin.layouts.auth') --}}
{{-- 
@section('content') --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-0 pt-1">
                            <div class="card-header">
                                <h3 class="card-title">List</h3>
                                <div class="float-right">
                                    <a href="{{ url('task/create') }}" class="btn card__subscribe-button px-5">Add New </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  
                                    @if(!empty($details['formdata']))
                                    @foreach ($details['formdata'] as $key => $data)
                                        <tr>
                                            {{-- <th scope="row">{{ $data->id }}</th> --}}
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $data['name'] }}</td>

                                            <td>{{ $data['email'] }}</td>
                                            <td>{{ $data['number'] }}</td>
                                            <td>{{ $data['date'] }}</td>
                                            <td>{{ $data['user_type'] }}</td>
                                          
                                            <td style="display:flex; align-items:center; column-gap:10px">
                                                <a href="{{route('task.edit',['task'=>$key+1])}}" class="btn btn-success">Edit</a>
                                                <form style="margin: 0" action="{{route('task.destroy',['task'=>$key+1])}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <form action="{{ route('task.save') }}" method="POST">
                                @csrf
                            <button type="submit" class="btn btn-primary">Final Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- @endsection --}}
