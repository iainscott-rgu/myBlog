<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">



</head>
<body>
<header>
    <h1>myBlog</h1><br>
    <h4>because the internet needs to know what I think</h4>



    <nav>
        <ul>
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php">Work Items</a></li>
            <li><a href="blog.php">University Items</a></li>
            <li><a href="blog.php">Family Items</a></li>
            <li><a href="add.php">Insert a Blog Items</a></li>
        </ul>
    </nav>

    <?php
    include("connect.php");
    if(isset($_GET['category'])){
        $blogViewCategory = $_GET['category'];
        echo "<p><h5>Category: {$blogViewCategory} </h5></p>

<section class='grid-100' id='listcon1'>

    </section>";
        $sql = "SELECT * FROM blogView WHERE category = '$blogViewCategory'";
    }
    else{
        echo "<p><h5>Category: All Blogs </h5></p>
<section class='grid-100' id='listcon1'>

    </section>";
        $sql = "SELECT * FROM blogView";
    }
    $result = $db->query($sql);
    while ($row = $result->fetch_array()) {
        $title = $row['entryTitle'];
        $summary = $row['entrySummary'];
        $category = $row['category'];
        $submitter = $row['submitter'];


        echo "

<main class='grid-container'>

    <section class='grid-100' id='listcon1'>

    </section>
    <section class='grid-10' id='listcon2'>
        Title:
    </section>
    <section class='grid-90' id='listcon3'>
        {$title} by {$submitter}
    </section>
    <section class='grid-10' id='listcon4'>
        Category:
    </section>
    <section class='grid-90' id='listcon5'>
        {$category}
    </section>
    <section class='grid-10' id='listcon6'>
        Summary:
    </section>
    <section class='grid-90' id='listcon7'>
        {$summary}
    </section>
";
}
    ?>

</header>
<main>

</main>
<footer>
    <p>Designed by Iain Scott, 2016</p>

</footer>

</body>
</html>



