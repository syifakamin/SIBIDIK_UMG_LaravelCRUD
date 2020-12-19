<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SIBIDIK-UMG</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">UMG</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="/" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
              </li>
              @role('admin')
              <li class="menu-header">Managemen Data</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Managemen Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/user">Managemen User</a></li>
                  <li><a class="nav-link" href="/kriteria">Data Kriteria & Bobot</a></li>
                  <li><a class="nav-link" href="/camaba">Data Calon Mahasiswa</a></li>
                </ul>
              </li>
              @endhasanyrole
              @hasanyrole('admin|juri')
              <li class="menu-header">Penilaian</li>
              <li class="nav-item dropdown">
                <a href="/hasil_perhitungan" class="nav-link"><i class="far fa-user" ></i> <span>Penilaian Camaba</span></a>
              </li>
              @endhasanyrole
              @hasanyrole('admin|kepala')
              <li class="menu-header">Sistem Pendukung Keputusan</li>
              <li class="nav-item dropdown">
                <a href="/detail_waspas" class="nav-link"><i class="fas fa-th-large"></i> <span>Perangkingan WASPAS</span></a>
              </li>
              <li class="menu-header">Laporan</li>
              <li class="nav-item dropdown">
                <a href="/waspas" class="nav-link"><i class="far fa-file-alt" ></i> <span>Hasil Perangkingan</span></a>
              </li>
              @endhasanyrole
              
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://github.com/syifakamin/SIBIDIK_UMG_LaravelCRUD" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Kembangkan Aplikasi
              </a>
            </div>
        </aside>
      </div>