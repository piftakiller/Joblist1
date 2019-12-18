<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Joblister</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href=" /css/styles.css">
  </head>
  <body>

    <div class="container">
       <div class="header clearfix">
         <nav>
           <ul class="nav nav-pills pull-right">
             <li role="presentation"><a href="index.php">Home</a></li>
             <li role="presentation"><a href="create.php">Create Job</a></li>
           </ul>
         </nav>
         <h3 class="text-muted"><?php $TITLE=TITLE; echo $TITLE;?></h3>
       </div>
       <?php displayMessage(); ?>
