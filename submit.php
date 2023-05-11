<?php require_once('./header.php') ?>
    <?php require_once('./navbar.php') ?>  
    <?php require_once('./config/db.php') ?>  
    <?php if(isset($_GET['success'])){
    echo "<script>alert('Data Inserted Successfully !!')</script>";}
    ?>
    <?php if(isset($_GET['alreadyexist'])){
    echo "<script>alert('User Already Registered !')</script>";}
    ?> 
    <section id="portfolio">
      <div id="wrapper" class="container" style="margin-top: 100px !important">
        <div class="row gy-4 d-flex align-self-center">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="card w-100 mb-2" style="backgroud-color:#a2a3a2 !important">
  <div class="card-body">
    <h5 class="card-title text-center">Project Submission Info</h5>
    <form enctype="multipart/form-data" style="font-weight: 700;" action='./config/submission.php' method = 'POST'>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Team Name</label>
    <input type="text" class="form-control" name = "t_name" placeholder="Enter Team Name :" required>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Number of Total Team Member</label>
    <input type="text" class="form-control" name = "t_member" placeholder="Number of Total Team Member:" required>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" name = "dept" placeholder="Enter Department Name :" required>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Intake</label>
    <input type="text" class="form-control" name = "intk" placeholder="Enter Intake :" required>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Project Title</label>
    <input type="text" class="form-control" name = "project_title" placeholder="Enter Project Title :" required>
  </div>
  <div class="form-group mb-3">
    <label for="project_type">Select Project Criteria</label>
    <select class="form-control" name="project_type" required>
      <option value="Software Engineering & Programming">Software Engineering & Programming</option>
      <option value="Graphics & Computer-Aided Design">Graphics & Computer-Aided Design</option>
      <option value="Databases & Information Systems">Databases & Information Systems</option>
      <option value="Networks and Communications">Networks and Communications</option>
      <option value="Image Processing & Computer Vision">Image Processing & Computer Vision</option>
      <option value="Machine Learning & Artificial Intelligence">Machine Learning & Artificial Intelligence</option>
      <option value="Hardware, Robotics & Electronics, IOT">Hardware, Robotics & Electronics, IOT</option>
      <option value="Ideas">Ideas</option>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlTextarea1">Synopsis</label>
    <textarea class="form-control" name="synopsis" rows="3" placeholder="Word Limit 400" required></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Transaction ID</label>
    <input type="text" class="form-control" name = "tnx_id" placeholder="TNX ID :" required>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Email</label>
    
    <input type="email" class="form-control" name = "email" placeholder="Enter Email :" required>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Contact Number</label>
    <?php if(isset($_GET['invalidphone'])){echo "<p class='text-danger'>Invalid Phone Number !</p>";} ?>
    <input type="text" class="form-control" name = "phone" placeholder="Enter Phone Number :" required>
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Project Video Link</label>
    <input type="text" class="form-control" name = "v_link" placeholder="Youtube Link :" required>
  </div>
  <div class="form-group mb-3">
  <div class="form-group mb-3">
    <label for="exampleFormControlFile1">Project File</label>
    <input type="file" class="ms-3 form-control-file" name="project_file" >
  </div>
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    
  </div>
</div>
          </div>
          <div class="col-lg-2"></div>
            </div>
          </div>
          <!-- ENd First -->
 
    </section>
    <!-- End Portfolio Section -->

        <?php require_once('./footer.php') ?>



