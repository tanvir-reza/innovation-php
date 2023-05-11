<?php require_once('./header.php') ?>
    <?php require_once('./navbar.php') ?>  
    <?php require_once('./config/db.php') ?>  
    
    <section id="portfolio" style="min-height:320px !important margin-top:300px !Important;">
      <div id="wrapper" class="container" style="margin-top: 60px !important">
        <div class="row gy-4 d-flex align-self-center">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="card w-100 mb-2" style="backgroud-color:#a2a3a2 !important">
  <div class="card-body">
    <h5 class="card-title text-center">Submitted Proposal</h5>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Team Name</th>
      <th scope="col">Project Name</th>
      <th scope="col">Department</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM project_info";
    $data = mysqli_query($db, $sql);
    while($mydata = mysqli_fetch_array($data)){
      echo "<tr>";
      echo "<td>".$mydata['team_name']."</td>";
      echo "<td>".$mydata['project_title']."</td>";
      echo "<td>".$mydata['dept']."</td>";
      echo "<td class='text-warning'>"?> <?php if($mydata['p_status']=='0'){echo "Pending";}elseif($mydata['p_status']=='1'){echo "<span class='text-primary'>Accepted</span>";} ?> <?php "</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
  </div>
</div>
          </div>
          <div class="col-lg-1"></div>
            </div>
          </div>
          <!-- ENd First -->
 
    </section>
    <!-- End Portfolio Section -->

    <!-- Footer -->
        <?php require_once('./footer.php') ?>
