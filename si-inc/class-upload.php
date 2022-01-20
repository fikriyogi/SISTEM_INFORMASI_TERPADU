<?php
/**
 * TODO Upload file proses
 * @param $folder
 * @param $max_size
 */

function upload_images($folder, $max_size) {
	if ( isset( $_REQUEST['btn_insert'] ) ) {
		try {
			$name = $_REQUEST['txt_name']; //textbox name "txt_name"

			$image_file = $_FILES["txt_file"]["name"];
			$type       = $_FILES["txt_file"]["type"]; //file name "txt_file"
			$size       = $_FILES["txt_file"]["size"];
			$temp       = $_FILES["txt_file"]["tmp_name"];

			$path = $folder . $image_file; //set upload folder path

			if ( empty( $name ) ) {
				$errorMsg = "Please Enter Name";
			} else if ( empty( $image_file ) ) {
				$errorMsg = "Please Select Image";
			} else if ( $type == "image/jpg" || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif' ) //check file extension
			{
				if ( ! file_exists( $path ) ) //check file not exist in your upload folder path
				{
					// TODO Upload file size in MB

					if ( $size < $max_size ) //check file size 5MB 5000000
					{
						move_uploaded_file( $temp, $folder . $image_file ); //move upload file temperory directory to your upload folder
					} else {
						$errorMsg = "Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
					}
				} else {
					$errorMsg = "File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
				}
			} else {
				$errorMsg = "Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
			}

			if ( ! isset( $errorMsg ) ) {
				$insert_stmt = $db->prepare( 'INSERT INTO tbl_file(name,image) VALUES(:fname,:fimage)' ); //sql insert query
				$insert_stmt->bindParam( ':fname', $name );
				$insert_stmt->bindParam( ':fimage', $image_file );   //bind all parameter

				if ( $insert_stmt->execute() ) {
					$insertMsg = "File Upload Successfully........"; //execute query success message
					header( "refresh:3;index.php" ); //refresh 3 second and redirect to index.php page
				}
			}
		} catch ( PDOException $e ) {
			echo $e->getMessage();
		}
	}

}

function upload_files($folder, $max_size) {
    if ( isset( $_REQUEST['btn_insert'] ) ) {
        try {

            $image_file = $_FILES["txt_file"]["name"];
            $type       = $_FILES["txt_file"]["type"]; //file name "txt_file"
            $size       = $_FILES["txt_file"]["size"];
            $temp       = $_FILES["txt_file"]["tmp_name"];

            $path = $folder . $image_file; //set upload folder path

            if ( empty( $image_file ) ) {
                $errorMsg = "Please Select Image";
            } else if ( $type == "image/jpg" || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif' ) //check file extension
            {
                if ( ! file_exists( $path ) ) //check file not exist in your upload folder path
                {
                    // TODO Upload file size in MB

                    if ( $size < $max_size ) //check file size 5MB 5000000
                    {
                        move_uploaded_file( $temp, $folder . $image_file ); //move upload file temperory directory to your upload folder
                    } else {
                        $errorMsg = "Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
                    }
                } else {
                    $errorMsg = "File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
                }
            } else {
                $errorMsg = "Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
            }

            if ( ! isset( $errorMsg ) ) {
                $insert_stmt = $db->prepare( 'INSERT INTO tbl_file(name,image) VALUES(:fname,:fimage)' ); //sql insert query
                $insert_stmt->bindParam( ':fname', $name );
                $insert_stmt->bindParam( ':fimage', $image_file );   //bind all parameter

                if ( $insert_stmt->execute() ) {
                    $insertMsg = "File Upload Successfully........"; //execute query success message
                    header( "refresh:3;index.php" ); //refresh 3 second and redirect to index.php page
                }
            }
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        }
    }

}
