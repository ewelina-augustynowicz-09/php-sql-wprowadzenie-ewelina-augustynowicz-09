<?php
$servername = "mysql-ewelina.alwaysdata.net";
$username = "ewelina";
$password = "ewelinailukas";
$dbname = "ewelina_09";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>


<?php
echo("<h2>Autorzy</h2>");
$result=$conn->query(SELECT * FROM bibliotekaAutor);
echo("<table>");
echo("<th>id</th>");
echo("<th>Autor</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_autor"]."</td><td>".$row["Autor"]."</td>");
echo("</tr>");
}
echo("</table>");

<?php
$sql = ("SELECT * FROM bibliotekaTytuł");
echo("<h2>Tytuły książek</h2>");
$result=$conn->query($sql);
echo("<table>");
echo("<th>id</th>");
echo("<th>Tytul</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_tytuł"]."</td><td>".$row["Tytuł"]."</td>");
echo("</tr>");
}
echo("</table>");
?>
  
