
        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text text-light mx-3">Ishakk<span class="brand">An</span>gah</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php 

            // JOIN TABLE
            $roleId = $this->session->userdata('role_id');
            $query = "  SELECT `user_menu`.`id`,`menu`
                          FROM `user_menu` JOIN `user_access_menu` 
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                         WHERE `user_access_menu`.`role_id` = $roleId
                         ORDER BY `user_menu`.`menu` ASC
                      ";
            $menu = $this->db->query($query)->result_array();


             ?>

            <?php foreach( $menu as $m ) : ?>

            <!-- Heading -->
            <div class="sidebar-heading">
                <?= $m['menu']; ?>
            </div>


            <?php 
            $menuId = $m['id'];
            $submenu ="SELECT *
                         FROM `user_menu` JOIN `user_sub_menu`
                           ON `user_menu`.`id` = `user_sub_menu`.`menu_id`
                        WHERE  `user_sub_menu`.`menu_id` = $menuId
            ";

            $sbmenu = $this->db->query($submenu)->result_array();


             ?>

            <!-- Nav Item - Dashboard -->
            <?php foreach( $sbmenu as $sm ) : ?>
            <?php if ( $title == $sm['title'] ) : ?>
            <li class="nav-item active">
            <?php else: ?>
            <li class="nav-item">
            <?php endif; ?> 

                <a class="nav-link pb-0 pt-0 text-monospace" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon'] ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
            </li>

            <?php endforeach; ?>

           <!-- Divider -->
            <hr class="sidebar-divider mb-2 mt-4">


            <?php endforeach; ?>









            <!-- Heading -->
            <div class="sidebar-heading">
                Logout
            </div>

                        <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>



        </ul>
        <!-- End of Sidebar -->

