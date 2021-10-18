@extends('admin.layout.index', ['active' => 'company_list'])
@section('title', 'Company')
@section('content')

<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Company List</h4>
                    <div class="add-product">
                        <a href="{{url('/company/add')}}">Add Company</a>
                    </div>
                    <table>
                    
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>Website</th>
                            <th>Action</th>
                        </tr>
                    @if(count($company) != 0)
                        @foreach ($company as $key =>$c)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->email}}</td>
                            <td>
                                <img src="{{url('logo/'.$c->logo)}}" alt="" />
                            </td>
                            <td><a href="{{$c->website}}" target="blank"> {{$c->website}}</a></td>
                            <td>
                                <a type="btn" data-toggle="modal" data-target="#modalDetail{{$c->id}}" class="btn btn-success btn-circle btn-sm" >
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a type="btn" data-toggle="modal" data-target="#modalEdit{{$c->id}}" class="btn btn-success btn-circle btn-sm" style="font-size: xx-small;">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="{{url('/company/delete', $c->id)}}" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Are you sure to delete it ?')">
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
                    <center>{{ $company->links('admin.layout.pagination.custom') }}</center>
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($company))
@foreach( $company as $c )
<div class="modal" id="modalDetail{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Company Detail</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Company Name</th>
                    <td>: {{ $c->name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Company Email</th>
                    <td>: {{ $c->email }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Company Website</th>
                    <td>: <a href="{{ $c->website }}" target="blank" >{{ $c->website }}</a></td>
                </tr>
                <br/>
                <tr>
                    <th>Company Logo</th>
                    <td>: <img src="{{url('logo/'.$c->logo)}}" style="width: 50%"></td>
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


@if(isset($company))
@foreach( $company as $c )
<div class="modal" id="modalEdit{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Company</h5>
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
                <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/company/edit', $c->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Company Name</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="company name" name="name" required value="{{$c->name}}">
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
                                    <input type="text" class="form-control pull-right" id="" placeholder="company email" name="email" required value="{{$c->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Website</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="company website" name="website" required value="{{$c->website}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Company Logo</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="file" class="form-control pull-right" id="" placeholder="" name="logo" required value="{{$c->logo}}">
                                    <img src="{{url('logo/'.$c->logo)}}" alt="..." style="width: 20%">
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