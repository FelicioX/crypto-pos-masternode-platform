<?php
include("../conn_db.php");
include("../fnc.php");

$moeda = $_POST;
$query = "INSERT INTO car_dep (nome,moeda,endereco,status) VALUES ('" . $_POST['nome'] . "','" . $_POST['ticker'] . "','" . $_POST['carteira'] . "',1)";
$result = mysqli_query($conect, $query);

$query = "CREATE TABLE `" . $_POST['ticker'] . "` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$result = mysqli_query($conect, $query);

$query = "ALTER TABLE `" . $_POST['ticker'] . "`
  ADD PRIMARY KEY (`id`);";
$result = mysqli_query($conect, $query);

$query = "ALTER TABLE `" . $_POST['ticker'] . "`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
$result = mysqli_query($conect, $query);

if ( isset($_FILES["file"]["type"]) )
{
  $max_size = 500 * 500; // 500 KB
  $destination_directory = "../images/coinlogos/";
  $validextensions = array("png");

  $temporary = explode(".", $_FILES["file"]["name"]);
  $file_extension = end($temporary);

  // We need to check for image format and size again, because client-side code can be altered
  if ( (($_FILES["file"]["type"] == "image/png")
       ) && in_array($file_extension, $validextensions))
  {
    if ( $_FILES["file"]["size"] < ($max_size) )
    {
      if ( $_FILES["file"]["error"] > 0 )
      {
        //echo "<div class=\"alert alert-danger\" role=\"alert\">Error: <strong>" . $_FILES["file"]["error"] . "</strong></div>";
      }
      else
      {
        
          $sourcePath = $_FILES["file"]["tmp_name"];
          $targetPath = $destination_directory . $_POST['ticker'] . '.png';
          move_uploaded_file($sourcePath, $targetPath);
        
      }
    }
    else
    {
      //echo "<div class=\"alert alert-danger\" role=\"alert\">The size of image you are attempting to upload is " . round($_FILES["file"]["size"]/1024, 2) . " KB, maximum size allowed is " . round($max_size/1024, 2) . " KB</div>";
    }
  }
  else
  {
    //echo "<div class=\"alert alert-danger\" role=\"alert\">Unvalid image format. Allowed formats: JPG, JPEG, PNG.</div>";
  }
}
echo tabelaMoedas();
?>