<?php include "header.php"; ?>

<?php

echo 'Thank you for adding an activity! <br><br>';

// Display activity info "Activity in Location with Company"

if ($_POST['activity'] == 'None') {
    echo $_POST['newActivity'] . "<br>";
} else {
    echo $_POST['activity'] . "<br>";
}


if ($_POST['location'] == 'None') {
    echo $_POST['newLocation'] . "<br>";
} else {
    echo 'in ' . $_POST['location'] . "<br>";
}

if ($_POST['coName'] != NULL) {
    echo 'with ' . $_POST['coName'];
}

//if have tie include activity page instead
?>


<?php include "footer.php"; ?>

