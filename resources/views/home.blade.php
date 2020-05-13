@extends('layouts.app')

@section('content')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
              <div class="card">
                <table class="table table-response">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="{{asset('frontend/')}}/images/user.png" alt="" style="width:90px;height:90px;margin-left:34%;" >
                <div class="card-body">
                    <h5 class="card-title text-center">{{Auth::user()->name}}</h5>
                    
                  </div>
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center"><a href="{{route('user.password.change')}}" >Change Password</a></li>
                    <li class="list-group-item text-center">Dapibus ac facilisis in</li>
                    <li class="list-group-item text-center">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body">
                    <a href="{{route('logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                    
                  </div>
              </div>
            </div>
          </div>
    </div>
</>

@endsection
