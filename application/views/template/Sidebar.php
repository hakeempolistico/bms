<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Bill Management
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?php if(isset($active) && $active == 'dashboard') echo 'active'; ?>">
                        <a href="<?php echo site_url('dashboard') ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="<?php if(isset($active) && $active == 'bills') echo 'active'; ?>">
                        <a href="<?php echo site_url('bills') ?>">
                            <i class="material-icons">receipt</i>
                            <p>Bills</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('census/user') ?>">
                            <i class="material-icons">supervisor_account</i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('census/table') ?>">
                            <i class="material-icons">content_paste</i>
                            <p>Reports</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>