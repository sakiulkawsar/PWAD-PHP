<?php
include_once('db_config.php');
$current_page = basename($_SERVER['PHP_SELF']);

// Define student pages
$student_pages = ['All_Students.php', 'Add_New_Student.php', 'Edit_Student.php'];

// Check if current page is a student page
$is_student_page = in_array($current_page, $student_pages);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $project_URL  ?>index.php" class="brand-link">
        <img src="<?php echo $project_URL  ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $project_URL  ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Students menu -->
                <li class="nav-item <?php echo $is_student_page ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo $is_student_page ? '' : ''; ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Students
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $project_URL ?>Students/All_Students.php" class="nav-link <?php echo $current_page == 'All_Students.php' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Students</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $project_URL ?>Students/Add_New_Student.php" class="nav-link <?php echo $current_page == 'Add_New_Student.php' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Student</p>
                            </a>
                        </li>
                        <?php if ($current_page == 'Edit_Student.php'): ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Edit Student</p>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>



                <!-- Tables -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>