<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('node_modules/superadmin/images/user.png') }}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Super Admin</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>Sign Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu" style="height: auto;">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="{{url('dashboard')}}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/create/admin')}}" >
                        <i class="material-icons">widgets</i>
                        <span>Admin</span>
                    </a>
                    <!-- <ul class="ml-menu">
                        <li>
                            <a href="{{url('/list/admin')}}" class="menu-toggle1">
                                <span>Admin List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/create/admin')}}" class="menu-toggle1">
                                <span>Create Admin</span>
                            </a>
                        </li>
                    </ul> -->
                </li>

                <li>
                    <a href="{{url('/create/main_category')}}">
                        <i class="material-icons">perm_media</i>
                        <span>Main Category</span>
                    </a>
                    <!-- <ul class="ml-menu">
                        <li>
                            <a href="{{url('/list/main_category')}}" class="menu-toggle1"> Main Category list</a>
                        </li>
                        <li>
                            <a href="{{url('/create/main_category')}}" class="menu-toggle1">Create Main Category</a>
                        </li>
                        <li>
                            <a href="{{url('/assign_list/main_category')}}" class="menu-toggle1"> Assigned Main Category list</a>
                        </li>
                        <li>
                            <a href="{{url('/assign/main_category')}}" class="menu-toggle1">Assigned Category</a>
                        </li>
                    </ul> -->
                </li>

                <li>
                    <a href="{{url('/create/category')}}">
                        <i class="material-icons">swap_calls</i>
                        <span>Category</span>
                    </a>
                    <!-- <ul class="ml-menu">
                        <li>
                            <a href="{{url('/list/category')}}" class="menu-toggle1">Category list</a>
                        </li>
                        <li>
                            <a href="{{url('/create/category')}}" class="menu-toggle1">Create Category</a>
                        </li>
                    </ul> -->
                </li>

                

                <li>
                    <a href="{{url('/create/category_assign')}}">
                        <i class="material-icons">content_copy</i>
                        <span>Assign Category</span>
                    </a>
                    <!-- <ul class="ml-menu">
                        <li>
                            <a href="{{url('/list_assign')}}" class="menu-toggle1">Assign List</a>
                        </li>
                        <li>
                            <a href="{{url('/create/category_assign')}}" class="menu-toggle1">Create Assign</a>
                        </li>
                    </ul> -->
                </li>

                <li>
                    <a href="{{url('/create/traders')}}">
                        <i class="material-icons">pie_chart</i>
                        <span>Traders</span>
                    </a>
                    <!-- <ul class="ml-menu">
                        <li>
                            <a href="{{url('/list/traders')}}" class="menu-toggle1">Traders List</a>
                        </li>
                        <li>
                            <a href="{{url('/create/traders')}}" class="menu-toggle1">Create Traders</a>
                        </li>
                    </ul> -->
                </li>

                <li>
                    <a href="{{url('/list/user')}}" class="">
                        <i class="material-icons">view_list</i>
                        <span>User List</span>
                    </a>
                    <!-- <ul class="ml-menu">
                        <li>
                            <a href="{{url('/list/user')}}" class="menu-toggle1">Users List</a>
                        </li>
                        
                    </ul> -->
                </li>

                <li>
                    <a href="{{url('/list/enquiry')}}">
                        <i class="material-icons">assignment</i>
                        <span>Enquiry List</span>
                    </a>
                    <!-- <ul class="ml-menu">
                        <li>
                            <a href="{{url('/list/enquiry')}}" class="menu-toggle1">Enquiry List</a>
                        </li>
                        <!-- <li>
                            <a href="{{url('/assign/enquiry')}}" class="menu-toggle1">Assign Enquiry</a>
                        </li> -->
                        
                    </ul> -->
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>