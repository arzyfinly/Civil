<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('home') }}" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                            aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="dropdown sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="me-3 fa fa-suitcase" aria-hidden="true"></i><span
                                class="hide-menu">Praktikum</span>
                    </a>
                    <div class="dropdown-menu" style="width:100%;" aria-labelledby="dropdownMenuButton">
                        <a class="sidebar-link" href="{{ route('praktikum') }}">Pendaftaran</a>
                        <a class="sidebar-link" href="#">Daftar Hadir</a>
                        <a class="sidebar-link" href="#">BA Pelaksanaan</a>
                        <a class="sidebar-link" href="#">BA Pelaksanaan Ujian</a>
                        <a class="sidebar-link" href="#">Harga Praktikum</a>
                    </div>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="table-basic.html" aria-expanded="false"><i class="me-3 fa fa-wrench"
                            aria-hidden="true"></i><span class="hide-menu">Sewa Alat</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="map-google.html" aria-expanded="false"><i class="me-3 fa fa-graduation-cap"
                            aria-hidden="true"></i><span class="hide-menu">Penelitian & <br> Pengabdian</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="blank.html" aria-expanded="false"><i class="me-3 fa fa-th-list"
                            aria-hidden="true"></i><span class="hide-menu">Pengujian</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>