<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="http://localhost/Carikture/internship/dist/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Bhakti Vidan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">

         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

             <?php 

             $data = file_get_contents("sidebar_links.json");

             $arr = json_decode($data, true);
             for ($i = 0; $i < count($arr); $i++) {

              ?>

              <li class="nav-item has-treeview">

                <a href="#" class="nav-link ">

                 <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                 <?php echo $arr[$i]['icon']; ?>

                 <p>
                  <?php echo $arr[$i]['category']; ?>
                  <i class="right fas fa-angle-left"></i>
                  
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">

                  <?php

                  for($j =0; $j < count($arr[$i]['sub_cat_name']); $j++) {
                    ?>

                    <a href="<?php echo $arr[$i]['link'][$j]; ?>" class="nav-link ">
                      <i class="fas fa-long-arrow-alt-right nav-icon"></i>
                      <p class="d-inline"><?php echo $arr[$i]['sub_cat_name'][$j]; ?></p>
                    </a>

                    <?php
                  }

                  ?>
                  
                </li>
              </ul>


            </li>
            <?php


          }

          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>