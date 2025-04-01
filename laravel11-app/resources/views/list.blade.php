@extends('dashboardlist')  
        
@section('content')
        <h2 class="user-list-title">Danh sách user</h2>
       
            <table class="user-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lstuser as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td><a href="{{route('showUpdate',['id' => $user->id])}}">Edit</a> | 
                                <a href="#">View</a> | 
                                <a href="#">Delete</a></td>
                        </tr>       
                    @endforeach

                            
                </tbody>
            </table>
        
        
        
        <div class="pagination">
            <a href="#">Previous</a>
            <span class="active">1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Next</a>
        </div>
        
        <div class="footer">
            Lập trình web @01/2024
        </div>
    </div>
    @endsection('content')