<h1 class="text-dark">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="bg-light">
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-light elevation-1"><i class="fas fa-book-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Donations Today</span>
                <span class="info-box-number text-right">
                  <?php 
                    $donation = $conn->query("SELECT sum(amount) as total FROM donations where date(date_created) = '".date('Y-m-d')."' ")->fetch_assoc()['total'];
                    echo number_format($donation);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-blog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Published Blogs/Posts</span>
                <span class="info-box-number text-right">
                  <?php 
                    $blogs = $conn->query("SELECT id FROM `blogs` where status = '1' ")->num_rows;
                    echo number_format($blogs);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar-day"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Upcoming Events</span>
                <span class="info-box-number text-right">
                <?php 
                    $event = $conn->query("SELECT id FROM `events` where date(schedule) >= '".date('Y-m-d')."' ")->num_rows;
                    echo number_format($event);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
        <div class="container-fluid">
  <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-12 mx-auto">
    <div class="card" id="today_task_card">
      <div class="card-header">
        <h3 class="card-title">Your Today's Task(s)</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <ul class="products-list product-list-in-card pl-2 pr-2">
          <?php 
          $task_query = $conn->query("SELECT * FROM `reminder_list` where ('".date('Y-m-d')."' BETWEEN `remind_from` and `remind_to` OR `remind_from` = '".date('Y-m-d')."' OR `remind_to` = '".date('Y-m-d')."') and `user_id` = '{$_settings->userdata('id')}' and `status` = 1 ");
          if($task_query->num_rows > 0):
          while($row = $task_query->fetch_assoc()):
          ?>
          <li class="item">
            <div class="product-info">
              <a href="<?= base_url."admin/?page=reminders/view_reminder&id=". $row['id'] ?>" class="product-title"><?= $row['title'] ?></a>
              <span class="product-description">
                <p class="text-truncate"><?= $row['description'] ?></p>
              </span>
            </div>
          </li>
          <?php endwhile; ?>
          <?php else: ?>
            <li>
              <div class="text-muted text-center"><em>No Task Reminder Today.</em></div>
            </li>
          <?php endif; ?>
        </ul>
      </div>
      <!-- /.card-body -->
      <div class="card-footer text-center">
        <a href="<?= base_url.'admin/?page=reminders' ?>" class="uppercase">View All Task Reminders</a>
      </div>
      <!-- /.card-footer -->
    </div>
  </div>
</div>
           
