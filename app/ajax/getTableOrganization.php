<?php
include '../../connection/connection.php';

$selectedOrg = 1;
$query = "SELECT id_oborudovanie, id_type_oborudovanie FROM medOborudovanie.oborudovanie WHERE id_org = '$selectedOrg'";
$result = mysqli_query($connection, $query);

echo '<table class="table table-striped table-responsive-sm dataTable no-footer" id="infoOb' . $selectedOrg . '">';
echo '<tr><th>id_oborudovanie</th><th>id_type_oborudovanie</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['id_oborudovanie'] . '</td>';
    echo '<td>' . $row['id_type_oborudovanie'] . '</td>';
    echo '</tr>';
}
echo '</table>';

mysqli_close($connection);
?>