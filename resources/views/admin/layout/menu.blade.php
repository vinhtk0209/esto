<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Nav items -->
    <ul class="navbar-nav">
        @if (session('login') != null && session('login')->LOAITK ==3)
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}" href="admin/dashboard/">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
            </a>
        </li>
        @endif
        @if (session('login') != null && in_array(session('login')->LOAITK, [2,3]))
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'khoahoc') ? 'active' : '' }}" href="admin/khoahoc/">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Khóa Học</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'lophoc') ? 'active' : '' }}" href="admin/lophoc/">
                <i class="ni ni-shop text-purple"></i>
                <span class="nav-link-text">Lớp Học</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'chuonghoc') ? 'active' : '' }}" href="admin/chuonghoc/">
                <i class="ni ni-caps-small text-black"></i>
                <span class="nav-link-text">Chương Học</span>
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
        @else
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'baithi') ? 'active' : '' }}" href="admin/baithi/">
                <i class="ni ni-ungroup text-green"></i>
                <span class="nav-link-text">Bài Thi</span>
            </a>
        </li>
        @endif
        @if (session('login') != null && session('login')->LOAITK == 3)
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
            <a class="nav-link {{ (request()->segment(2) == 'hoadon') ? 'active' : '' }}" href="admin/hoadon/">
                <i class="ni ni-money-coins text-green"></i>
                <span class="nav-link-text">Hóa đơn</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'khuyenmai') ? 'active' : '' }}" href="admin/khuyenmai/">
                <i class="ni ni-badge text-yellow"></i>
                <span class="nav-link-text">Khuyến Mãi</span>
            </a>
        </li>
        @endif
    </ul>
</div>
