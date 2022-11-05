{{-- @extends('admin.layouts.auth') --}}


{{-- @section('content') --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Faculty</h3>
                        </div>
                        <form action="{{ route('task.update',['task' => $id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$id}}">
                            <table>
                                <div class="div1">
                                    <tr>
                                        <td>
                                            Name:
                                        </td>
    
                                        <td>
                                            <input type=text placeholder=”Name” name="name" value="{{$task['name']}}">
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td>
                                            Email Address:
                                        </td>
    
                                        <td>
                                            <input type=”mail” placeholder=”Email” name="email" value="{{$task['email']}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mobile:
                                        </td>
    
                                        <td>
                                            <input type=text placeholder=”Number” name="number" value="{{$task['number']}}">
                                        </td>
                                    </tr>
                                </div>
                                <tr>
                                    <td>
                                        Role:
                                    </td>
    
                                    <td>
                                        <select name="user_type" id="">
                                            <option value="">Select</option>
                                            <option name="admin" value="admin" @php if($task['user_type'] == 'admin') echo "selected"; @endphp >Admin</option>
                                            <option name="user" value="user" @php if($task['user_type'] == 'user') echo "selected"; @endphp >User</option>
                                        </select>
                                    </td>
                                </tr>
                                <div class="div2">
    
                                    <tr>
                                        <td>
                                            Password:
                                        </td>
    
                                        <td>
                                            <input type='password' placeholder=”Password” name="password" value="{{$task['password']}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Image:
                                        </td>
    
                                        <td>
                                            <input type="file" placeholder="File" name="file">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date:
                                        </td>
    
                                        <td>
                                            <input type="date" placeholder=date name="date" value="{{$task['date']}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Preview:
                                        </td>
    
                                        <td>
                                            <img src="{{((!empty($task['file']) ? $task['file'] : null))}}" height="150">
                                        </td>
                                    </tr>
                                </div>
                            </table>
                            <input value="Update" type="submit">
                        </form>
                    </div>
                </div>
            </div>
    </section>
{{-- @endsection --}}
