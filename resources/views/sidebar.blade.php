<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black"
        data-image="../../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                hi
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Admin
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="../../assets/img/faces/avatar.jpg" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>
                            Bùi Ngọc Huyền
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="material-icons">device_hub</i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="{{ Request::is('/jobTitle') ? 'active' : '' }}">
                    <a  href="{{ route('jobTitle.index') }}" >
                        <i class="material-icons">event_seat</i>
                        <p> Chức vụ</p>
                    </a>
                    {{-- <div class="collapse in" id="pagesExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('jobTitle.create') }}">
                                    <span class="sidebar-mini"> LSP </span>
                                    <span class="sidebar-normal"> Thêm chức vụ </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('jobTitle.index') }}">
                                    <span class="sidebar-mini"> UP </span>
                                    <span class="sidebar-normal"> Danh sách chức vụ </span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>
                <li class="{{ Request::is('/employee') ? 'active' : '' }}">
                    <a href="{{ route('employee.index') }}">
                        <i class="material-icons">portrait</i>
                        <p> Nhân viên</p>
                    </a>
                    {{-- <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('employee.index') }}">
                                    <span class="sideb  ar-mini"> GS </span>
                                    <span class="sidebar-normal"> Xem tất cả nhân viên </span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/panels.html">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Thêm nhân viên </span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>
                <li class="{{ Request::is('/legalOff') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="{{ route('legalOff.index') }}">
                        <i class="material-icons">content_paste</i>
                        <p> Nghỉ </p>
                    </a>
                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('legalOff.index') }}">
                                    <span class="sidebar-mini"> RF </span>
                                    <span class="sidebar-normal"> Danh sách đơn xin nghỉ </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('timekeeping.index') }}">
                        <i class="material-icons">timer</i>
                        <p> Bảng chấm công</p>
                    </a>

                </li>
                <li>
                    <a  href="{{ route('department.index') }}">
                        <i class="material-icons">sort</i>
                        <p> Phòng ban</p>
                    </a>
                    {{-- <div class="collapse" id="deptExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('department.index') }}">
                                    <span class="sidebar-mini"> RT </span>
                                    <span class="sidebar-normal"> Danh sách phòng ban </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('department.create') }}">
                                    <span class="sidebar-mini"> RT </span>
                                    <span class="sidebar-normal"> Thêm phòng ban </span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}

                </li>
                <li>
                    <a href="{{ route('level.index') }}">
                        <i class="material-icons">sort</i>
                        <p> Level</p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#adminExamples">
                        <i class="material-icons">assignment_ind</i>
                        <p> Admin
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="adminExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.index') }}">
                                    <span class="sidebar-mini">&nbsp; </span>
                                    <span class="sidebar-normal"> List Admin </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.create') }}">
                                    <span class="sidebar-mini"> &nbsp;</span>
                                    <span class="sidebar-normal"> Thêm admin </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
