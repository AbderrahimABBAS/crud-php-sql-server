<table border="1">
   <tr>
      <td>baie<br><i>fruit</i></td>
      <td>ballon<br><i>jouet</i></td>
      <td>banane<br><i>fruit</i></td>
      <td>betterave<br><i>legume</i></td>
   </tr>
   <tr>
      <td>bille<br><i>jouet</i></td>
      <td>bonbon<br><i>douceur</i></td>
      <td>boule<br><i>jouet</i></td>
   </tr>
</table>

<?php  include("_connexion.php") ; ?>
<html><body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)
$NbrCol = 4;
// requête
$table = 'MATABLE';
$condition = ' WHERE DONNEE LIKE 'b%' ORDER BY DONNEE ASC';
$query = 'SELECT * FROM '.$table.$condition;
$result = mysql_query($query);
// -------------------------------------------------------
$NbreData = mysql_num_rows($result);
// -------------------------------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
$j = 1;
echo '<table border="1">';
while ($val = mysql_fetch_array($result)) {
   if ($j%$NbrCol == 1) {
      $NbrLigne++;
      echo "<tr>";
      $fintr = 0;
   }
   echo '<td>';
    // ------------------------------------------
    // AFFICHAGE des DONNEES de la fiche
   echo $val['DONNEE'];
   echo '<br>';
   echo '<i>'.$val['TYPE'].'</i>';
    // ------------------------------------------
   echo '</td>';
   if ($j%$NbrCol == 0) {
      echo "</tr>"; 
      $fintr = 1;
   }
   $j++;
}
if ($fintr!=1) { echo '</tr>'; }
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
</body></html>
<?php
// déconnexion de la base
mysql_close(); 
?> 

 <!--   <!DOCTYPE html>
<html>
<head>Afficher la table users</head>
<body>
 <h1>Liste des utilisateurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['name']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html> -->
<!-- //////////////////////
<? while($row = $req->fetch()) { ?>
        <td><? echo $row['id']; ?></td>
        <td><? echo $row['username']; ?></td>
 
        <td><? echo $row['prenom']; ?></td>
        <td><? echo $row['nom']; ?></td>
    <td><? if ($row['verified'] == "0") { echo 'Membre'; } if ($row['verified'] == "1") { echo '<p class="text-warning"><strong>Modérateur</strong></p>'; } if ($row['verified'] == "2") { echo '<p class="text-error"><strong>Administrateur</strong></p>'; } ?></td>
    <td><? echo '<a class="btn btn-info" href="profil?user='.$row['username'].'">Voir le profil</a><br/>'; ?></td>
     
 
 
 
</tr>
<? }    -->


////////////////////
<!--  if ($result->num_rows > 0) {
        ?>
        <table>
            <thead>
                <tr>
                    <th>id.</th>
                    <th>Datum</th>
                    <th>Kunde</th>
                    <th>Produkt</th>
                    <th>Produktversion</th>
                    <th>Menge</th>
                </tr>   
            </thead>
            <tbody>
                <?php
                while($row = $result->fetch_assoc()) {
                 //echo "<br> ".$row["id"]. " ". $row["Datum"]. " " . $row["Kunde"] . $row["Produkt"] . $row["Produktversion"] . $row["Menge"] ."<br>";
                    ?>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["Datum"] ?></td>
                    <td><?php echo $row["Kunde"]; ?></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <?php
                }
                ?>
            </tbody>
         </table>
         <?php 
    } else {
         echo "00 results";
    }

    $conn->close();
   -->