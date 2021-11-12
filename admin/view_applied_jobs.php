<?php 
  include('connection/db.php');
  include('include/header.php');
    include('include/sidebar.php');
?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Applied Jobs</a></li>
              </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">Applied Jobs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>
          
            </div>
          </div>

          <form style="border: 1px solid grey; width: 80%; margin-left: 10%; padding: 10px;">
            <?php 
            include('connection/db.php');
            $id=$_GET['id'];
            $query = mysqli_query($conn,"select * from job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id where id='$id'");
            while($row=mysqli_fetch_array($query))
            {
             ?>
              <div class="form-group">
                <label>Job Title</label>
                <td><?php echo $row['job_title']; ?></td>
              </div>
               <div class="form-group">
                <label>Job Description</label>
                <td><?php echo $row['des']; ?></td>
              </div>
                <div class="form-group">
                <label>Job Seeker Name</label>
                 <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
              </div>
              <div class="form-group">
                <label>Job Seeker Email</label>
                 <td><?php echo $row['job_seeker']; ?></td>
              </div>
              <div class="form-group">
                <label>Job Seeker Mobile Number</label>
                 <td><?php echo $row['mobile_number']; ?></td>
              </div>
              <div class="form-group">
                <label>Job Seeker File</label>
                <td><a href = "files/<?php echo $row['file']; ?>">Download File</td>
              </div>
                
                
                <!--  -->
                  
          <?php } ?>
          <a href="send_mail.php?id=<?php echo $id;?>" class="btn btn-success">Accept</a>
          <a href="reject_mail.php?id=<?php echo $id;?>" class="btn btn-danger">Reject</a>

       </form>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <!-- Data Table Plugin -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
}
);
    </script>
  </body>
</html>