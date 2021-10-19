@extends('admin.layout.index', ['active' => 'employe_list'])
@section('title', 'Employe')
@section('content')

<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Employe List</h4>
                    <div class="add-product">
                        <a href="{{url('/employe/add')}}">Add Employe</a>
                    </div>
                    <table>
                    
                        <tr>
                            <th>No</th>
                            <th>Full Name</th>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    @if(count($employe) != 0)
                        @foreach ($employe as $key =>$c)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$c->first_name}} {{$c->last_name}}</td>
                            <td><a href="{{$c->company->website}}" target="blank">{{$c->company->name}}</a></td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->phone}}</td>
                            <td>
                                <a type="btn" data-toggle="modal" data-target="#modalDetail{{$c->id}}" class="btn btn-success btn-circle btn-sm" >
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a type="btn" data-toggle="modal" data-target="#modalEdit{{$c->id}}" class="btn btn-success btn-circle btn-sm" style="font-size: xx-small;">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="{{url('/employe/delete', $c->id)}}" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Are you sure to delete it ?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6"><center>EMPTY</center></td>
                        </tr>
                    @endif
                    </table>
                    <center>{{ $employe->links('admin.layout.pagination.custom') }}</center>
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($employe))
@foreach( $employe as $c )
<div class="modal" id="modalDetail{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Employe Detail</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Full Name</th>
                    <td>: {{ $c->first_name }} {{ $c->last_name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Company</th>
                    <td>: {{ $c->company->name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Email</th>
                    <td>: {{ $c->email }}</a></td>
                </tr>
                <br/>
                <tr>
                    <th>Phone</th>
                    <td>: {{ $c->phone }}</a></td>
                </tr>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif


@if(isset($employe))
@foreach( $employe as $c )
<div class="modal" id="modalEdit{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Employe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/employe/edit', $c->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>First Name</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="first name" name="first_name" required value="{{$c->first_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="last name" name="last_name" required value="{{$c->last_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Company</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="company" type="text" class="form-control" style="width: 100%">
                                          <option value="">--choose company--</option>
                                        @foreach ($company as $com)
                                          <option value= "{{$com->id}}">{{$com->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="email" name="email" required value="{{$c->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Phone</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="phone" name="phone" required value="{{$c->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info" id="btn_submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif


@endsection