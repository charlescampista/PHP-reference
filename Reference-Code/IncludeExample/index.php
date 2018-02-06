<?php include  'inc/header.php'?>
    <h1>Home</h1>
<?php include 'inc/footer.php' ?>

<!-- THE DIFFERENCE BETWEEN INCLUDE, REQUIRE, AND REQUIRE_ONCE

*INCLUDE - When you use include the page continues loand the content wheter the file load or not
and a warning massage appears

*REQUIRE - Require doesn't allow the page to be displayed in case of the file not load
it throws an error and crash the view

* REQUIRE_ONCE - It does the same thing as require with only a single difference,
it checks if the file has already been included, if so, it's not included again. -->
