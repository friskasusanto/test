@extends('admin.layout.index', ['active' => 'employe_add'])
@section('title', 'Employe')
@section('content')

<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Employe Add</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
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
                            <form novalidate="novalidate" method="POST" action= "{{url('/employe/add')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                    <input type="number" class="form-control" placeholder="phone" name="phone"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                    <select name="company" type="text" class="form-control" style="width: 100%">
                                                          <option value="">--choose company--</option>
                                                        @foreach ($company as $c)
                                                          <option value= "{{$c->id}}">{{$c->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
												</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection