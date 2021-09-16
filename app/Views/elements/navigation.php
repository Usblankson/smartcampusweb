    <!-- begin::navigation menu -->
    <div class="navigation-menu-body">
        <ul>
            <li class="navigation-divider">Main</li>
            <li class="<?php echo $uri == 'dashboard' ? 'open' : ''?>">
                <a href="<?= base_url('dashboard') ?>" class="<?php echo $uri == 'dashboard' ? 'active' : ''?>">
                    <i class="nav-link-icon" data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?php echo $uri == 'campus' || $uri == 'school' ? 'open' : ''?>">
                <a href="#">
                    <i class="nav-link-icon" data-feather="book-open"></i>
                    <span>Smart Campus</span>
                </a>
                <ul>
                    <li><a href="<?= base_url('campus') ?>" class="<?php echo $uri == 'campus' ? 'active' : ''?>">Dashboard</a></li>
                    <li><a href="<?= base_url('school') ?>" class="<?php echo $uri == 'school' ? 'active' : ''?>">School</a></li>
                    <li><a href="<?= base_url('courses') ?>" class="<?php echo $uri == 'courses' ? 'active' : ''?>">Courses</a></li>
                    <li><a href="<?= base_url('past question') ?>" class="<?php echo $uri == 'past question' ? 'active' : ''?>">Past Question</a></li>
                    <li><a href="<?= base_url('tutorial') ?>" class="<?php echo $uri == 'tutorial' ? 'active' : ''?>">Tutorials</a></li>
                    <li><a href="<?= base_url('quiz') ?>" class="<?php echo $uri == 'quiz' ? 'active' : ''?>">Quiz</a></li>
                </ul>
            </li>
            <!-- smart commerce -->
            <li>
                <a href="#" class="<?php echo $uri == 'commerce' ? 'active' : ''?>">
                    <i class="nav-link-icon" data-feather="shopping-bag"></i> 
                    <span>Smart Commerce</span>
                </a>
                <ul>
                    <li><a href="<?= base_url('commerce') ?>" class="<?php echo $uri == 'commerce' ? 'active' : ''?>">Dashboard</a></li>
                    <li><a href="<?= base_url('products') ?>" class="<?php echo $uri == 'products' ? 'active' : ''?>">Products</a></li>
                    <li><a href="<?= base_url('sold') ?>" class="<?php echo $uri == 'sold' ? 'active' : ''?>">Sold</a></li>
                </ul>
            </li>
            <!-- smart food -->
            <li>
                <a href="<?= base_url('food') ?>"  class="<?php echo $uri == 'food' ? 'active' : ''?>">
                    <i class="nav-link-icon" data-feather="package"></i>
                    <span>Smart Food</span>
                </a>
                <ul>
                    <li><a href="<?= base_url('food') ?>" class="<?php echo $uri == 'food' ? 'active' : ''?>">Dashboard </a></li>
                    <li><a href="<?= base_url('vendors') ?>" class="<?php echo $uri == 'vendors' ? 'active' : ''?>">Vendor</a></li>
                </ul>
            </li>
            <!-- ends -->
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="users"></i>
                    <span>User Management</span>
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="settings"></i>
                    <span>Global Settings</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('logout') ?>">
                    <i class="nav-link-icon" data-feather="log-out"></i>
                    <span>Logout</span>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->