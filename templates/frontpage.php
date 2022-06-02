<?php include 'inc/header.php'; ?>

<!--JUMBOTRON-->
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Find Your Job</h1>
        <form action="index.php" method="GET">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <div class="text-center">
                <input type="submit" class="btn btn-lg btn-success" value="Find">
            </div>
        </form>
    </div>
    
    <div>
        <h2 class="my-3"><?php echo $title; ?></h2>
        <?php foreach($jobs as $job): ?>
        <div class="row mt-1">
            <div class="col-md-10">
                <h3><?php echo $job->job_title ?></h3>
                <p><?php echo $job->description ?></p>
            </div>
            <div class="col-md-2">
                <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>">View</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>




<?php include 'inc/footer.php'; ?>
