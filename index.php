<?php
if ( ! empty( $_FILES ) ) {
	$target_folder = 'uploads/';
	$img           = $_FILES['image'];
	$fileName      = $img['name'];
	$imgSize       = $img['size'];
	$imgType       = $img['type'];
	$target_file   = $target_folder . $fileName;
	if ( file_exists( $target_file ) ) {
		$target_file = $target_folder . "2_" . $fileName;
	}
	if ( 1000000 > $imgSize AND $imgType == 'image/jpeg'){
		if ( move_uploaded_file( $img['tmp_name'], $target_file ) ) {
			echo "Successfully uploaded";
		} else {
			echo "Error";
		}
	}


//	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//	} else {
//		echo "Sorry, there was an error uploading your file.";
//	}
}

?>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="upload">
    </form>

<?php







// readfil('test.txt');
//$file = fop≈en('test.txt',"r") or die("Unable to open file!");
//echo fread($file, filesize("test.txt"));
//fclose($file);

// This is for echoing all line at the text file
//$file = fopen('test.txt',"r") or die("Unable to open file!");
//while(!feof($file)) {
//	echo fgets($file) ."<br>";
//}
//fclose($file);

// File Writing
//$file = fopen('test.txt',"w") or die("Unable to open file!");
//fwrite($file, "Thi is my eefirst text\n");
//fwrite($file, "Thi is my eesecond text\n");
//fclose($file);
//$file1 = fopen('test.txt',"r") or die("Unable to open file!");
//echo fread($file1, filesize('test.txt'));
//fclose($file1);

// File get content

//echo $text = file_get_contents('test.txt');

// File put content
//$text = "This is my data\r\n";
//$file = file_put_contents('test.txt', $text, FILE_APPEND | LOCK_EX);

