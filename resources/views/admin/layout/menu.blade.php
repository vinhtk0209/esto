<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Nav items -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}" href="admin/dashboard/">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'khoahoc') ? 'active' : '' }}" href="admin/khoahoc/">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Khóa Học</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'lophoc') ? 'active' : '' }}" href="admin/lophoc/">
                <i class="ni ni-shop text-purple"></i>
                <span class="nav-link-text">Lớp học</span>
            </a>
        </li>  
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'baihoc') ? 'active' : '' }}" href="admin/baihoc/">
                <i class="ni ni-books text-yellow"></i>
                <span class="nav-link-text">Bài Học</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'baithi') ? 'active' : '' }}" href="admin/baithi/">
                <i class="ni ni-ungroup text-green"></i>
                <span class="nav-link-text">Bài Thi</span>
            </a>
        </li>   
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'hocvien') ? 'active' : '' }}" href="admin/hocvien/">
                <i class="ni ni-hat-3 text-blue"></i>
                <span class="nav-link-text">Học Viên</span>
            </a>
        </li>      
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'danhmuc') ? 'active' : '' }}" href="admin/danhmuc/">
                <i class="ni ni-bullet-list-67 text-brown"></i>
                <span class="nav-link-text">Danh Mục</span>
            </a>
        </li>   
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'taikhoan') ? 'active' : '' }}" href="admin/taikhoan/">
                <i class="ni ni-single-02 text-pink"></i>
                <span class="nav-link-text">Tài Khoản</span>
            </a>
        </li>   
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'danhgia') ? 'active' : '' }}" href="admin/danhgia/">
                <i class="ni ni-chat-round text-gray"></i>
                <span class="nav-link-text">Đánh Giá</span>
            </a>
        </li>   
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'giaodich') ? 'active' : '' }}" href="admin/giaodich/">
                <i class="ni ni-money-coins text-green"></i>
                <span class="nav-link-text">Giao Dịch</span>
            </a>
        </li>   
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'khuyenmai') ? 'active' : '' }}" href="admin/khuyenmai/">
                <i class="ni ni-badge text-yellow"></i>
                <span class="nav-link-text">Khuyến Mãi</span>
            </a>
        </li>  
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'thongtincanhan') ? 'active' : '' }}" href="admin/thongtincanhan/">
                <i class="ni ni-single-02 text-red"></i>
                <span class="nav-link-text">Thông Tin Cá Nhân</span>
            </a>
        </li>       
    </ul>
</div>