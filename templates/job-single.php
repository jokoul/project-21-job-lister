<?php include 'inc/header.php'; ?>

<div class="mt-5 pt-5 container">
    <h1 class="page-header"><?php echo $job->job_title; ?></h1>
    <p>Location : <strong><?php echo $job->location; ?></strong></p>
    <div class="d-flex flex-column flex-md-row">
        <small class="me-5">Published on : <strong><?php echo $job->post_date; ?></strong></small>
        <small>Posted by : <strong><?php echo $job->contact_user; ?></strong></small>
    </div>
    <hr>
    <p><?php echo $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company : </strong><?php echo $job->company; ?></li>
        <li class="list-group-item"><strong>Salary : </strong><?php echo $job->salary; ?></li>
        <li class="list-group-item"><strong>Contact Email : </strong><?php echo $job->contact_email; ?></li>
    </ul>
    <br>
    <br>
    <a class="btn btn-outline-primary" href="index.php">Go Back</a>
    <br>
    <br>
    <div class="bg-light p-3 crudBtn">
        <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-outline-secondary">Edit</a>
        <form style="display:inline;" method="post" action="job.php">
            <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
            <input type="submit" name="submit" class="btn btn-outline-danger" value="Delete">
        </form>
    </div>
</div>
<!-- 
<br>
<br>
<?php print_r($job); ?> -->
<?php include 'inc/footer.php'; ?>
