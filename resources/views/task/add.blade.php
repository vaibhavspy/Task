{{-- @extends('admin.layouts.auth') --}}


{{-- @section('content') --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                    </div>
                    <form action="{{ route('task.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table>
                            <div class="div1">
                                <tr>
                                    <td>
                                        Name:
                                    </td>

                                    <td>
                                        <input type=text placeholder=”Name” name="name">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Email Address:
                                    </td>

                                    <td>
                                        <input type=”mail” placeholder=”Email” name="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mobile:
                                    </td>

                                    <td>
                                        <input type=text placeholder=”Number” name="number">
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
                                        <option name="admin" value="admin">Admin</option>
                                        <option name="user" value="user">User</option>
                                    </select>
                                </td>
                            </tr>
                            <div class="div2">

                                <tr>
                                    <td>
                                        Password:
                                    </td>

                                    <td>
                                        <input type='password' placeholder=”Password” name="password">
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
                                        <input type="date" placeholder=date name="date">
                                    </td>
                                </tr>
                            </div>
                        </table>
                        <input value="SUBMIT" type="submit">
                    </form>
                </div>
            </div>
        </div>
</section>
{{-- @endsection --}}
