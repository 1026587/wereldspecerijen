<!DOCTYPE html>
<head>
    <title>Update kruiden</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kruiden";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['jemoeder'])){
    $jan = "UPDATE producten SET naam='". $_POST['naam'] ."', beschrijving='". $_POST['beschrijving'] ."', image='". $_POST['image'] ."', prijs='". $_POST['prijs']."' WHERE id=". $_GET['id'];

    if ($conn->query($jan) === TRUE) {
        echo "Data updated";
        header('refresh:0 url=74AB913CBACD5BE8D6440C32B3EA84F2F84F20D.php');
    } else {
        echo "Data not updated " . $conn->error;
    }
}
$sql = "SELECT id, naam, beschrijving, image, prijs FROM producten WHERE id =" . $_GET['id'] ;
$result = $conn->query($sql);
$quey = $result->fetch_assoc();

?>

<form method="POST">

    <div class="input-group">
    Naam
    <input name="naam" type="text" value="<?php echo $quey['naam']; ?>" /><br></div>

    <div class="input-group">
    Beschrijving
    <input name="beschrijving" type="text" value="<?php echo $quey['beschrijving']; ?>"/><br></div>

    <div class="input-group">
    Image
    <input name="image" type="text" value="<?php echo $quey['image']; ?>"/><br></div>

    <div class="input-group">
    Prijs
    <input name="prijs" type="text" value="<?php echo $quey['prijs']; ?>"/><br></div>

    <div class="input-group">
    <input name="jemoeder" type="submit" value="Insert"/></div>



</form>

</body>