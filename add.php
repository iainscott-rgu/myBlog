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
            <li><a href="blog.php?category=Work">Work Items</a></li>
            <li><a href="blog.php?category=University">University Items</a></li>
            <li><a href="blog.php?category=Family">Family Items</a></li>
            <li><a href="add.php">Insert a Blog Items</a></li>
        </ul>
    </nav>


</header>
<main>


    <form action="insert.php" method="post">
    <table class="input">


        <tr><td><label for="title">Entry Title:</label></td><td><input type="text" name="title" id="title" size="50" required></td></tr>
        <tr><td><label for="summary">Entry Summary:</label></td><td><textarea cols="50" rows="5" name="summary" id="summary" required></textarea></td></tr>
        <tr><td><label for="category">Category:</label></td><td>
                <select name = "category" id="category">
                    <option value="work" name="work">Work</option>
                    <option value="university" name="university">University</option>
                    <option value="family" name="family">Family</option>
                </select></td></tr>
        <tr><td><label for="submitter">Submitted By:</label></td><td><input type="text" name="submitter" id="submitter" size="50"></td></tr>
        <tr><td colspan="2"><p><input type="submit" id="submit" value="submit"></p></td></tr>
    </table>
</form>




</main>
<footer>
    <p>Designed by Iain Scott, 2016</p>

</footer>

</body>
</html>