@extends('admin.layout.index', ['active' => 'company_add'])
@section('title', 'Company')
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
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Company Add</a></li>
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
                            <form novalidate="novalidate" method="POST" action= "{{url('/company/add')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Company Name" name="name">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Website" name="website">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                    <input type="file" class="form-control" placeholder="Tax" name="logo"> 
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