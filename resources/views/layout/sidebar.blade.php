<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div >
            <img src="{{ asset('images/logo-medsos.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Silahkan Login terlebih dahulu</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/beranda') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Beranda</div>
            </a>
        </li>
        <li>
            <a href="{{ url('/data_pengaduan') }}">
                <div class="parent-icon"><i class="bi bi-list-task"></i>
                </div>
                <div class="menu-title">Explore</div>
            </a>
        </li>
        <li>
            <a href="">
                <div class="parent-icon"><i class="bi bi-list-task"></i>
                </div>
                <div class="menu-title">LogOut</div>
            </a>
        </li>
    </ul>

</div>
