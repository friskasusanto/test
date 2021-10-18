@extends('admin.layout.index', ['active' => 'home'])
@section('title', 'Home')
@section('content')


<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                        <h4 class="text-left text-uppercase"><b>Welcome</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="col-xs-12 cus-gh-hd-pro">
                                <h2 class="text-right no-margin">1ts Test GrTech</h2>
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 78%;" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection