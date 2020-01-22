<?php
$paramController = $this->request->params['controller'];
$paramAction = $this->request->params['action'];
?>
<style>
    .main-sidebar{
        background-color: #222d32!important;
    }
</style>
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="treeview <?php if ($paramController == 'Appadmins' && $paramAction == 'index') { ?> active <?php } ?>">
                <a href="<?php echo HTTP_ROOT ?>appadmins/index" >
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <?php if ($type == 1) { ?>
                <li class="treeview <?php if ($paramController == 'Appadmins' && ($paramAction == 'createAdmin' || $paramAction == 'viewAdmin')) { ?> active <?php } ?>">
                    <a href="javascript:;"><i class="fa  fa-user"></i><span>Employee</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'createAdmin') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/create_admin"><i class="fa  fa-user"></i> Create  Employee</a></li>
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'viewAdmin') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/view_admin"><i class="fa  fa-eye"></i> View  Employee</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if ($paramController == 'Appadmins' && ($paramAction == 'cmsPage' || $paramAction == 'editpages')) { ?> active <?php } ?>">
                    <a href="<?php echo HTTP_ROOT ?>appadmins/cms_page" ><i class="fa  fa-file-text"></i> <span>CMS pages</span></a>
                </li>
                
                 <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'socialMedia') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/social_media"><i class="fa  fa-link"></i>Social media</a></li>
            <?php } ?>



            <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'viewUsers') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/view_users"><i class="fa  fa-clone"></i> Current  Work list</a></li>
            <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'previousworklist') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/previousworklist"><i class="fa  fa-tasks"></i> Previous Work list</a></li>



            <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'scanProduct') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/scan_product"><i class="fa  fa-eye"></i> Scan Product</a></li>


            <li class="treeview <?php if ($paramController == 'Appadmins' && $paramAction == 'profile') { ?> active <?php } ?>">
                <a href="<?php echo HTTP_ROOT ?>appadmins/profile" ><i class="fa fa-wrench"></i> <span>Setting</span></a>
            </li>
            <?php if ($type == 1) { ?>
                <li class="treeview <?php if ($paramController == 'Appadmins' && $paramAction == 'promocode') { ?> active <?php } ?>">
                    <a href="<?php echo HTTP_ROOT ?>appadmins/promocode" ><i class="fa fa-code"></i> <span>Promocode Setting</span></a>
                </li>
                <li class="treeview <?php if ($paramController == 'Appadmins' && $paramAction == 'giftcard') { ?> active <?php } ?>">
                    <a href="<?php echo HTTP_ROOT ?>appadmins/giftcard" ><i class="fa fa-gift"></i> <span>Giftcard Setting</span></a>
                </li>
                <li class="treeview <?php if ($paramController == 'Appadmins' && $paramAction == 'promocode') { ?> active <?php } ?>">
                    <a href="<?php echo HTTP_ROOT ?>appadmins/empty_all_tables" ><i class="fa fa-archive"></i> <span>Empty all tables</span></a>
                </li>
                <li class="treeview <?php if ($paramController == 'Appadmins' && $paramAction == 'customerList' || $paramAction == 'blockCustomerList' || $paramAction == 'junkCustomerList' || $paramAction == 'fundrefund'|| $paramAction == 'cancellationList') { ?> active <?php } ?>">
                    <a href="javascript:;"><i class="fa  fa-user"></i><span> Customer Report</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                         <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'cancellationList') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/cancellation_list"><i class="fa  fa-eye"></i> Subscription Cancellation</a></li>
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'customerList') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/customer_list"><i class="fa  fa-eye"></i> Customer List</a></li>
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'blockCustomerList') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/block_customer_list"><i class="fa  fa-eye"></i> Block Customer List</a></li>
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'junkCustomerList') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/junk_customer_list"><i class="fa  fa-eye"></i> Junk User List</a></li>
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'fundrefund') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/fundrefund"><i class="fa  fa-eye"></i> Payment Refund</a></li>
                       
                    </ul>
                </li>
                <li class="treeview <?php if ($paramController == 'Appadmins' && ($paramAction == 'addCareer' || $paramAction == 'viewCareer')) { ?> active <?php } ?>">
                    <a href="javascript:;"><i class="fa  fa-user"></i><span>Career</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'addCareer') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/add_career"><i class="fa  fa-user"></i> Add  Career</a></li>
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'viewCareer') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/view_career"><i class="fa  fa-eye"></i> View  Career</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if ($paramController == 'Appadmins' && ($paramAction == 'blogCategory' || $paramAction == 'createBlog' || $paramAction == 'blogTag' )) { ?> active <?php } ?>">
                    <a href="javascript:;"><i class="fa  fa-th"></i><span>Manage Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'blogCategory') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/blog_category"><i class="fa  fa-chevron-right"></i> Category</a></li>
                        
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'createBlog') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/create_blog"><i class="fa  fa-chevron-right"></i> Blog</a></li>
                        <li class="<?php if ($paramController == 'Appadmins' && $paramAction == 'blogTag') { ?> active <?php } ?>"><a href="<?= h(HTTP_ROOT) ?>appadmins/blog_tag"><i class="fa  fa-chevron-right"></i> Blog Tag</a></li>
                    </ul>
                </li>
                <li class="treeview <?php if ($paramController == 'Appadmins' && $paramAction == 'news') { ?> active <?php } ?>">
                    <a href="<?php echo HTTP_ROOT ?>appadmins/news" ><i class="fa fa-newspaper-o"></i> <span>News</span></a>
                </li>
            <?php } ?>

            <li><a style="color: red;" href="<?= h(HTTP_ROOT) ?>appadmins/logout"><i class="fa fa-key"></i> <span>Logout</span></a></li>

        </ul>
    </section>
</aside>