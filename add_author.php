<?php
sessionstart();

# If the admin is logged in
if (isset($_SESSION['user-id']) &&
    isset($_SESSION['user_email'])) {
?>

<!DOCtype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint", content="width=device-width, initial-scale=1.0">
        <title>Add Author</title>

        <!-- bootstrap 5 CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- boostrap 5 js bundle CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
    </head>
</html>
}