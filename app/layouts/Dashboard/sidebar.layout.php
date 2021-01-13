<?php

use App\Process\Template;
?>
<div class="d-flex align-items-stretch" >
    <!-- Sidebar Navigation-->
    <nav id="sidebar" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" style="text-align: none;">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
          <div class="avatar welcome" id="photo"><a href="<?= Template::asset('admin/img/3.jpg')?>" data-lightbox="piture"> <img src="<?= Template::asset('admin/img/3.jpg')?>" alt="..." class="img-fluid rounded-circle"></a></div>
        <div class="title">
          <h1 class="h5">mashro3 elt5arog</h1>
          <!-- <p>{{Auth::user()->name}}</p> -->
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
              <li><a href="tables.php"> <i class="icon-grid"></i>Test </a></li>
              <li><a href="charts.php"> <i class="fa fa-bar-chart"></i>Test </a></li>
              <li><a href="forms.php"> <i class="icon-padnote"></i>Test </a></li>
              <li class="dropdown"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
<!--                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">-->
<!--                  <li><a href="#">Page</a></li>-->
<!--                  <li><a href="#">Page</a></li>-->
<!--                  <li><a href="#">Page</a></li>-->
<!--                </ul>-->
<!--              </li>-->
<!--              <li><a href="login.php"> <i class="icon-logout"></i>Login page </a></li>-->
      </ul>
        <span class="heading">Administer</span>
      <ul class="list-unstyled">
        <li> <a href="#"> <i class="icon-settings"></i>Admins </a></li>
        <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Rules </a></li>

      </ul>
    </nav>

