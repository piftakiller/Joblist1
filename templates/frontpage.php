<?php include 'inc/header.php' ?>

   <div class="jumbotron">
     <h1>Find A Job</h1>
     <form class="" action="index.php" method="get">
       <select name="category" class="form-control">
         <option value="0">Choose Category</option>
         <?php foreach($categories as $category): ?>
           <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
         <?php endforeach; ?>
       </select>
       <br>
       <input type="submit" class="btn btn-lg btn-success" value="FIND">
     </form>
   </div>
   <h3><?php echo $title; ?></h3>
<?php foreach ($jobs as $job ): ?>
   <div class="row marketing">
     <div class="col-sm-10">
       <h4><?php echo $job->job_title; ?></h4>
       <p><?php echo $job->description; ?></p>
      </div>
      <div class="col-sm-2">
          <a class="btn btn-default" href="job.php?id=<?php echo $job->job_id;?>">View</a>
      </div>
   </div>
 <?php endforeach; ?>

<?php include 'inc/footer.php' ?>
