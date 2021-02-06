<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM clgnames WHERE name like '" . $_POST["keyword"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list" style="background-color:#90CAF9">
    <h5>College Name</h5>
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["name"]; ?>');" ><?php echo $country["name"]; ?></li>
<?php } ?>
</ul>

<ul id="country-list1" style="background-color:#90CAF9">
    <h5>College Code</h5>
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry1('<?php echo $country["clgcode"]; ?>');" ><?php echo $country["name"]." code : ".$country["clgcode"]; ?></li>
<?php } ?>
</ul>

<?php } } ?>