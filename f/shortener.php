<?php
	ini_set('display_errors', 1);
	$extension = $_POST["encrypt-content"];

	session_start();
	ob_start();

	if( !empty($_POST['url']) and isset($_SESSION['prevent_repeat']) ){

		$link = $_POST['url']; // link from input "my-link" in index.php form

		$id = substr( str_shuffle("ASDFGHJKLZXCVBNMQWERTYUIOP0123456789asdfghjklzxcvbnmqwertyuiop"), 0, 6 ); // create random ID (6 lenght), you can change 6 to your custom number

		$txt_path = "txt-db/"; // txt folder path, you can change it (if you changed it, open robots.txt file and change "txt-db" to your new folder name, robots.txt is file to protection your text database from search engine)

		if( file_exists($txt_path.$id.".txt") ){ // check if ID is taken
			while($id) { // start loop to create a new ID

				$id = substr( str_shuffle("ASDFGHJKLZXCVBNMQWERTYUIOP0123456789asdfghjklzxcvbnmqwertyuiop"), 0, 6 ); // create random ID again (6 lenght)

				if( file_exists($txt_path.$id.".txt") ){ // if ID is taken 
					continue; // if ID is taken: back again to search for available ID
				}else{
					break; // if found available ID: loop will be finished!
				}

			} // end loop
		}

		$create_txt_file = file_put_contents($txt_path.$id.".txt", $extension); // create a new txt file and add inside it the long link

		if( $create_txt_file ){
			//$website = "http://mycampfirechat.com/";
			$website = "http://localhost:8888/url-short-txt/";
			$short_link = $website.$id."#".$link; // short link, adds the original url
			echo 'Your Short Link: <a href="'.$short_link.'" target="_blank">'.$short_link.'</a>';

			// REDIRECT
			//header('Location: '.$short_link);
			ob_end_flush();
		}else{
			echo "We have some errors! Please try later.";
		}

		unset($_SESSION['prevent_repeat']); // Prevent a repeat of the process

	}

	else{
		header("location: index.php"); // if empty link or repeat process, will be redirect the user to index page
	}

?>