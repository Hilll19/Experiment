<h1>FILM</h1>

<form name="submit" method="POST"> 
    <table>
        <tr>
            <td width="130">Name Film</td>
            <td><input type="text" name="Name_Film" placeholder="Nama Film"></td>
        </tr>
        <tr>
            <td>Genre Film</td>
            <td><input type="text" name="Genre_Film" placeholder="Genre Film"></td>
        </tr>
        <tr>
            <td>Duration Film</td>
            <td><input type="text" name="Duration_Film" placeholder="Duration Film"></td>
        </tr>
        <tr>
            <td>Release Film</td>
            <td><input type="text" name="Release_Film" placeholder="Release Film"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="Submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
<?php

    $conn = new mysqli("localhost", "root", "", "Film");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } else {
        echo "<br/> Success connection! <br/>";
      }
      $sql = "SELECT * FROM film";
      $data = $conn -> query($sql);
      echo "Query from table film = " . $data->num_rows . " result(s) <br/>";
      if ($data->num_rows) {
        // display item
        while($item = $data -> fetch_assoc()) {
          echo $item["Name_Film, Genre_Film, Duration_Film, Release_Film"] . ". " . "<br/>";
        }
      } else {
        echo "No data";
      }
  
      // Add Data
      if ($_POST['proses']) {
        //$insertSql = "INSERT INTO film set 
        //Name_Film = '$_POST[Name_Film]', 
        //Genre_Film = '$_POST[Genre_Film]', 
        //Duration_Film = '$_POST[Duration_Film]', 
        //Release_Film = '$_POST[Release_Film]) values (" . "'" . $_POST['proses'] . "'" . ");";
	$insertSql = "INSERT INTO film(Name_Film) values ('$_POST[Name_Film]');";
        $result = $conn -> query($insertSql);
        // Refresh page
        header("Refresh:0");
      }

    //$sql = "INSERT INTO film set 
    //Name_Film = '$_POST[Name_Film]', 
    //Genre_Film = '$_POST[Genre_Film]', 
    //Duration_Film = '$_POST[Duration_Film]', 
    //Release_Film = '$_POST[Release_Film]'";
	//$result = mysqli_query($conn, $sql);; 
	
	
	$conn->close();
?>
