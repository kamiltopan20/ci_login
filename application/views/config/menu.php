<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>MENU UTAMA</b></li>
                <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
                
                <?php 
                if ($this->session->userdata('level') == 'admin') {
                 ?>
              
                <li class="list-group-item"><a href="users"><i class="glyphicon glyphicon-user"></i>Manajemen User </a></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>
                
                <?php } 
                elseif ($this->session->userdata('level') == 'student') {
                  ?>
 
 
 
 <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Siswa  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="#" class="list-group-item">Siswa</a>
                      
                    </li>
                </li>
                 <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>
 
                 <?php } elseif ($this->session->userdata('level') == 'teacher') {
                  ?>
 
 
 
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i> Guru  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="barang" class="list-group-item"> Data Guru</a>
                    </li>
                </li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>
 
                 <?php } ?>

                 

                

                <!-- <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-home"></i>Proses  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="<?php echo base_url('user')?>" class="list-group-item">2.1 Data User</a>
                      <a href="<?php echo base_url('app/history')?>" class="list-group-item">2.2 Hasil Diagnosa</a>
                    </li>
                </li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li> -->
                
               <!--  <li class="list-group-item"><a href="<?php echo base_url()?>app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/history"><i class="glyphicon glyphicon-home"></i>History Diagnosa </a></li>

                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-home"></i>Logout </a></li> -->

              </ul>
          </div>