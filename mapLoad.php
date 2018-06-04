<?php
$mapData = "";
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    include_once 'mysql.php';
    $strSQL = "SELECT maps FROM gallery where id=" . $id;
// Execute the query (the recordset $rs contains the result)
    $rs = mysql_query($strSQL);
    if (!empty($rs)) {
        while ($row = mysql_fetch_array($rs)) {
            $mapData = $row['maps'];
        }
    }
}
?>
<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>

<div class="google-maps">
<?php echo $mapData; ?>
</div>
