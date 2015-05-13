<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

  <title>jqTreeTest</title>

  <script src="jquery.min.js"></script>
  <script src="tree.jquery.js"></script>
  <link rel="stylesheet" href="jqtree.css"></link>

</head>

<?php
$data = file_get_contents('TESTTREE.json');
?>

<body>

<fieldset>
<legend>funny tree</legend>

<div id="tree1"></div>

<script>

var data = <?php print($data); ?>;

$(function() {
    $('#tree1').tree({
        data: data
    });
});

    </script>

</fieldset>

<?php
?>

</body>
</html>
