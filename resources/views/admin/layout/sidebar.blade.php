<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{asset('backend/img/logo/logo.png')}}" alt="" /></a>
                <strong><img src="{{asset('backend/img/logo/logosn.png')}}" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="{{asset('backend/img/notification/4.jpg')}}" alt="" /></a>
					<h2>{{Auth::user()->name}}</h2>
				</div>
			</div>
            @role('Admin')
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Companies</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="View Mail" href="{{url('/company/list')}}"><span class="mini-sub-pro">list company</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Employees</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="View Mail" href="{{url('/employe/list')}}"><span class="mini-sub-pro">list employe</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            @endrole
        </nav>
    </div>