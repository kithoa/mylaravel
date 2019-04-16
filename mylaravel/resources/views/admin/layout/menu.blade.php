<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            
            @if(Auth::user()->PhanQuyen == 0)
            <li>
                <a href="#"><i class="fa fa-fw">&#xf0f0</i>Quản lý Tài khoản<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/taikhoan/danhsach">Tất cả</a>
                    </li>
                    <li>
                        <a href="admin/giangvien/danhsach">Giảng viên</a>
                    </li>
                    <li>
                        <a href="admin/sinhvien/danhsach">Sinh viên</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/monhoc/danhsach"><i class="fa fa-fw">&#xf03a</i>Quản lý Môn học</a>
            </li>
            <li>
                <a href="admin/cauhoi/danhsach"><i class="fa fa-edit fa-fw"></i>Quản lý Câu hỏi</a>
            </li>
            <li>
                <a href="admin/de/danhsach"><i class="fa fa-files-o fa-fw"></i>Quản lý Đề</a>
            </li>
            <li>
                <a href="admin/thi/danhsach"><i class="fa fa-fw">&#xf1d9</i>Thi trực tuyến</a>
            </li>
            <li>
                <a href="admin/ketqua/danhsach"><i class="fa fa-fw">&#xf0ce</i>Kết quả thi</a>
            </li>
            <li>
                <a href="admin/tintuc/danhsach"><i class="fa fa-fw">&#xf1d9</i>Quản lý Tin Tức</a>
            </li>
             <li>
                <a href="admin/tuyendung/danhsach"><i class="fa fa-fw">&#xf1d9</i>Quản lý Tuyển Dụng</a>
            </li>
            @else
            <li>
                <a href="admin/cauhoi/danhsach"><i class="fa fa-edit fa-fw"></i>Quản lý Câu hỏi</a>
            </li>
            <li>
                <a href="admin/de/danhsach"><i class="fa fa-files-o fa-fw"></i>Quản lý Đề</a>
            </li>
            <li>
                <a href="admin/thi/danhsach"><i class="fa fa-fw">&#xf1d9</i>Thi trực tuyến</a>
            </li>
            <li>
                <a href="admin/ketqua/danhsach"><i class="fa fa-fw">&#xf0ce</i>Kết quả thi</a>
            </li>
            @endif
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>