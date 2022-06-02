<?php include 'inc/header.php'; ?>

<div class="container-fluid py-3 my-5">
    <h1 class="page-header text-md-center my-5">Edit Job Listing</h1>
    <form method="POST" action="edit.php?id=<?php echo $job->id; ?>">
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Company : </label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Category : </label>
            <select class="form-control" name="category">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if($job->category_id == $category->id): ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Job Title : </label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Description : </label>
            <textarea class="form-control" name="description"><?php echo $job->description; ?></textarea>
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Location : </label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Salary : </label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Contact User : </label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Contact Email : </label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <input type="checkbox" class="form-check-input" id="checkControl" required>
            <label for="checkControl" class="form-check-label">I accept to share information with Job Lister website. </label>
        </div>
        <input type="submit" name="submit" class="btn btn-lg btn-success mt-3 offset-md-2" value="Submit">
    </form>
</div>

<!-- 
<br>
<br>
<?php print_r($categories) ?>
<br>
<br>-->

<?php include 'inc/footer.php'; ?>