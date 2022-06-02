<?php include 'inc/header.php'; ?>

<div class="container-fluid py-3 my-5">
    <h1 class="page-header text-md-center my-5">Create Job Listing</h1>
    <form method="POST" action="create.php">
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Company : </label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Category : </label>
            <select class="form-control" name="category">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Job Title : </label>
            <input type="text" class="form-control" name="job_title">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Description : </label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Location : </label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Salary : </label>
            <input type="text" class="form-control" name="salary">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Contact User : </label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <div class="form-group mt-3 col-12 col-md-8 offset-md-2">
            <label>Contact Email : </label>
            <input type="text" class="form-control" name="contact_email">
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