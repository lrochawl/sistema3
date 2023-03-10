<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('restrita/usuarios') ?>"> <img alt="image" src="<?php echo base_url('public/assets/img/logo.png')?>" class="header-logo" /> <span
                class="logo-name">WL TOPOS</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="dropdown <?php echo ($this->router->fetch_class() == 'home' && $this->router->fetch_method() == 'index')? 'active':'';?>">
              <a href="<?php echo base_url('restrita') ?>" class="nav-link" ><i data-feather="home"></i><span>Inicio</span></a>
            </li>
            <li class="dropdown <?php echo ($this->router->fetch_class() == 'usuarios' )?'active':'';?>">
              <a href="<?php echo base_url('restrita/usuarios') ?>" class="nav-link"><i data-feather="users"></i><span>Usuários</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="settings"></i><span>Configurações</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('restrita/sistema') ?>">Sistema</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
