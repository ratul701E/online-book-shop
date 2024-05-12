<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidates</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('right-panel.php') ?>
<!-- fahim: shundor format kor -->
Candidates
100 Total Person <!-- ratul: fetch kor -->
<a href="create-new-employee.php">New</a>
<!-- ratul: candidate bana, ora user but ogor account status pending, submit korle approved hoia jaibo -->
<table class="candidate-table" id="candidate-table">
    <tr>
        <td>
            <img src="" alt=""> <!-- ratul: eine pic laga -->
            Rianul Amin Rian
            rianulamin1@gmail.com
            01402246680
            EX: 10 Years
            Applied: 12 May, 2024
            <button><a href="view-details.php">View</a></button>
            <button><a href="">Submit</a></button> <!-- ratul: eine approve korbi pending erte -->
        </td>
    </tr>
</table>
</body>
</html>