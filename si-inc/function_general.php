<?php
/** @noinspection PhpVoidFunctionResultUsedInspection */
function SI_Tes() {
	echo SI_ClassValidation();
}
function SI_UserBirthday() {

}
function SI_CreateFolder($location) { // upload/photos/
	if (!file_exists($location . date('Y'))) {
		mkdir($location . date('Y'), 0777, true);
	}
	if (!file_exists($location . date('Y') . '/' . date('m'))) {
		mkdir($location . date('Y') . '/' . date('m'), 0777, true);
	}
}
/*
 * Function for Page
 * TODO This function for page*/
function SI_RegisterPage() {

}


function SI_GetMyPage( $user_id ) {

}
function SI_SizeFormat($bytes) {
	$kb = 1024;
	$mb = $kb * 1024;
	$gb = $mb * 1024;
	$tb = $gb * 1024;
	if (($bytes >= 0) && ($bytes < $kb)) {
		return $bytes . ' B';
	} elseif (($bytes >= $kb) && ($bytes < $mb)) {
		return ceil($bytes / $kb) . ' KB';
	} elseif (($bytes >= $mb) && ($bytes < $gb)) {
		return ceil($bytes / $mb) . ' MB';
	} elseif (($bytes >= $gb) && ($bytes < $tb)) {
		return ceil($bytes / $gb) . ' GB';
	} elseif ($bytes >= $tb) {
		return ceil($bytes / $tb) . ' TB';
	} else {
		return $bytes . ' B';
	}
}
// TODO Link page to admin
function SI_LoadAdminLink( $link = '' ) {
	$page = SI_ADMIN_PAGE . $link;

	return $page;
}

function SI_GenerateToken() {

}

function SI_GenerateCode() {

}

function SI_GenerateKey( $minlength = 20, $maxlength = 20, $uselower = true, $useupper = true, $usenumbers = true, $usespecial = false ) {
	$charset = '';
	if ( $uselower ) {
		$charset .= "abcdefghijklmnopqrstuvwxyz";
	}
	if ( $useupper ) {
		$charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	}
	if ( $usenumbers ) {
		$charset .= "123456789";
	}
	if ( $usespecial ) {
		$charset .= "~@#$%^*()_+-={}|][";
	}
	if ( $minlength > $maxlength ) {
		$length = mt_rand( $maxlength, $minlength );
	} else {
		$length = mt_rand( $minlength, $maxlength );
	}
	$key = '';
	for ( $i = 0; $i < $length; $i ++ ) {
		$key .= $charset[ ( mt_rand( 0, strlen( $charset ) - 1 ) ) ];
	}

	return $key;
}

function SI_CreateTokenIdLogin() {
//		if ( empty( $_SESSION['token'] ) ) {
//			if ( function_exists( 'mcrypt_create_iv' ) ) {
//				$_SESSION['token'] = bin2hex( mcrypt_create_iv( 32, MCRYPT_DEV_URANDOM ) );
//			} else {
//				$_SESSION['token'] = bin2hex( openssl_random_pseudo_bytes( 32 ) );
//			}
//		}
//		$token = $_SESSION['token'];
//
//		return $token;
}

function SI_VerifyTokenIdLogin() {
//    if (!empty($_POST['token'])) {
//        if (hash_equals($_SESSION['token'], $_POST['token'])) {
//            if (isset($_POST['btn-login'])) {
//                $email = trim($_POST['txtemail']);
//                $upass = trim($_POST['txtupass']);
//                $level = trim($_POST['level']);
//                $divisi = trim($_POST['divisi']);
//
//                if ($user_login->login($email, $upass, $level, $divisi)) {
//                    $user_login->redirect('home.php');
//                }
//            }
//
//        } else {
//            echo 'Sorry token not valid';
//        }
//    } else {
//        echo 'Token is empty';
//    }
}

function SI_GetNameByEmail( $email ) {
	$username = strstr( $email, '@', true );

	// Display the username
	return $username;
}

function SI_UserActive() {

}

function SI_UserInActive() {

}

function SI_UserBanned() {

}

function SI_UserExists() {

}

function SI_EmailExists() {

}

function SI_UsernameExists() {

}

function SI_PhoneExists() {

}

function SI_UserProfile( $user_id ) {
	echo "Ini profil $user_id";
}

function SI_ActiveUser() {

}

function SI_VerifyEmail( $email, $code ) {

}

function SI_ResetPassword() {

}

function SI_isValidPasswordResetToken() {

}

function SI_UserIdFromPhoneNumber() {

}

function SI_UserIdFromUsername() {

}

function SI_IsUserComplete() {

}

function SI_DeleteUser( $user_id ) {

}

function url_slug( $str, $options = array() ) {
	// Make sure string is in UTF-8 and strip invalid UTF-8 characters
	$str      = mb_convert_encoding( (string) $str, 'UTF-8', mb_list_encodings() );
	$defaults = array(
		'delimiter'     => '-',
		'limit'         => null,
		'lowercase'     => true,
		'replacements'  => array(),
		'transliterate' => true
	);
	// Merge options
	$options  = array_merge( $defaults, $options );
	$char_map = [
		'??' => 'A',
		'??' => 'A',
		'??' => 'A',
		'??' => 'A',
		'??' => 'A',
		'??' => 'A',
		'??' => 'AE',
		'??' => 'C',
		'??' => 'E',
		'??' => 'E',
		'??' => 'E',
		'??' => 'E',
		'??' => 'I',
		'??' => 'I',
		'??' => 'I',
		'??' => 'I',
		'??' => 'D',
		'??' => 'N',
		'??' => 'O',
		'??' => 'O',
		'??' => 'O',
		'??' => 'O',
		'??' => 'O',
		'??' => 'O',
		'??' => 'O',
		'??' => 'U',
		'??' => 'U',
		'??' => 'U',
		'??' => 'U',
		'??' => 'U',
		'??' => 'Y',
		'??' => 'TH',
		'??' => 'ss',
		'??' => 'a',
		'??' => 'a',
		'??' => 'a',
		'??' => 'a',
		'??' => 'a',
		'??' => 'a',
		'??' => 'ae',
		'??' => 'c',
		'??' => 'e',
		'??' => 'e',
		'??' => 'e',
		'??' => 'e',
		'??' => 'i',
		'??' => 'i',
		'??' => 'i',
		'??' => 'i',
		'??' => 'd',
		'??' => 'n',
		'??' => 'o',
		'??' => 'o',
		'??' => 'o',
		'??' => 'o',
		'??' => 'o',
		'??' => 'o',
		'??' => 'o',
		'??' => 'u',
		'??' => 'u',
		'??' => 'u',
		'??' => 'u',
		'??' => 'u',
		'??' => 'y',
		'??' => 'th',
		'??' => 'y',
		'??' => '(c)',
		'??' => 'A',
		'??' => 'B',
		'??' => 'G',
		'??' => 'D',
		'??' => 'E',
		'??' => 'Z',
		'??' => 'H',
		'??' => '8',
		'??' => 'I',
		'??' => 'K',
		'??' => 'L',
		'??' => 'M',
		'??' => 'N',
		'??' => '3',
		'??' => 'O',
		'??' => 'P',
		'??' => 'R',
		'??' => 'S',
		'??' => 'T',
		'??' => 'Y',
		'??' => 'F',
		'??' => 'X',
		'??' => 'PS',
		'??' => 'W',
		'??' => 'A',
		'??' => 'E',
		'??' => 'I',
		'??' => 'O',
		'??' => 'Y',
		'??' => 'H',
		'??' => 'W',
		'??' => 'I',
		'??' => 'Y',
		'??' => 'a',
		'??' => 'b',
		'??' => 'g',
		'??' => 'd',
		'??' => 'e',
		'??' => 'z',
		'??' => 'h',
		'??' => '8',
		'??' => 'i',
		'??' => 'k',
		'??' => 'l',
		'??' => 'm',
		'??' => 'n',
		'??' => '3',
		'??' => 'o',
		'??' => 'p',
		'??' => 'r',
		'??' => 's',
		'??' => 't',
		'??' => 'y',
		'??' => 'f',
		'??' => 'x',
		'??' => 'ps',
		'??' => 'w',
		'??' => 'a',
		'??' => 'e',
		'??' => 'i',
		'??' => 'o',
		'??' => 'y',
		'??' => 'h',
		'??' => 'w',
		'??' => 's',
		'??' => 'i',
		'??' => 'y',
		'??' => 'y',
		'??' => 'i',
		'??' => 'S',
		'??' => 'I',
		'??' => 'C',
		'??' => 'U',
		'??' => 'O',
		'??' => 'G',
		'??' => 's',
		'??' => 'i',
		'??' => 'c',
		'??' => 'u',
		'??' => 'o',
		'??' => 'g',
		'??' => 'A',
		'??' => 'B',
		'??' => 'V',
		'??' => 'G',
		'??' => 'D',
		'??' => 'E',
		'??' => 'Yo',
		'??' => 'Zh',
		'??' => 'Z',
		'??' => 'I',
		'??' => 'J',
		'??' => 'K',
		'??' => 'L',
		'??' => 'M',
		'??' => 'N',
		'??' => 'O',
		'??' => 'P',
		'??' => 'R',
		'??' => 'S',
		'??' => 'T',
		'??' => 'U',
		'??' => 'F',
		'??' => 'H',
		'??' => 'C',
		'??' => 'Ch',
		'??' => 'Sh',
		'??' => 'Sh',
		'??' => '',
		'??' => 'Y',
		'??' => '',
		'??' => 'E',
		'??' => 'Yu',
		'??' => 'Ya',
		'??' => 'a',
		'??' => 'b',
		'??' => 'v',
		'??' => 'g',
		'??' => 'd',
		'??' => 'e',
		'??' => 'yo',
		'??' => 'zh',
		'??' => 'z',
		'??' => 'i',
		'??' => 'j',
		'??' => 'k',
		'??' => 'l',
		'??' => 'm',
		'??' => 'n',
		'??' => 'o',
		'??' => 'p',
		'??' => 'r',
		'??' => 's',
		'??' => 't',
		'??' => 'u',
		'??' => 'f',
		'??' => 'h',
		'??' => 'c',
		'??' => 'ch',
		'??' => 'sh',
		'??' => 'sh',
		'??' => '',
		'??' => 'y',
		'??' => '',
		'??' => 'e',
		'??' => 'yu',
		'??' => 'ya',
		'??' => 'Ye',
		'??' => 'I',
		'??' => 'Yi',
		'??' => 'G',
		'??' => 'ye',
		'??' => 'i',
		'??' => 'yi',
		'??' => 'g',
		'??' => 'C',
		'??' => 'D',
		'??' => 'E',
		'??' => 'N',
		'??' => 'R',
		'??' => 'S',
		'??' => 'T',
		'??' => 'U',
		'??' => 'Z',
		'??' => 'c',
		'??' => 'd',
		'??' => 'e',
		'??' => 'n',
		'??' => 'r',
		'??' => 's',
		'??' => 't',
		'??' => 'u',
		'??' => 'z',
		'??' => 'A',
		'??' => 'C',
		'??' => 'e',
		'??' => 'L',
		'??' => 'N',
		'??' => 'o',
		'??' => 'S',
		'??' => 'Z',
		'??' => 'Z',
		'??' => 'a',
		'??' => 'c',
		'??' => 'e',
		'??' => 'l',
		'??' => 'n',
		'??' => 'o',
		'??' => 's',
		'??' => 'z',
		'??' => 'z',
		'??' => 'A',
		'??' => 'C',
		'??' => 'E',
		'??' => 'G',
		'??' => 'i',
		'??' => 'k',
		'??' => 'L',
		'??' => 'N',
		'??' => 'S',
		'??' => 'u',
		'??' => 'Z',
		'??' => 'a',
		'??' => 'c',
		'??' => 'e',
		'??' => 'g',
		'??' => 'i',
		'??' => 'k',
		'??' => 'l',
		'??' => 'n',
		'??' => 's',
		'??' => 'u',
		'??' => 'z'
	];
	// Make custom replacements
	$str = preg_replace( array_keys( $options['replacements'] ), $options['replacements'], $str );
	// Transliterate characters to ASCII
	if ( $options['transliterate'] ) {
		$str = str_replace( array_keys( $char_map ), $char_map, $str );
	}
	// Replace non-alphanumeric characters with our delimiter
	$str = preg_replace( '/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str );
	// Remove duplicate delimiters
	$str = preg_replace( '/(' . preg_quote( $options['delimiter'], '/' ) . '){2,}/', '$1', $str );
	// Truncate slug to max. characters
	$str = mb_substr( $str, 0, ( $options['limit'] ? $options['limit'] : mb_strlen( $str, 'UTF-8' ) ), 'UTF-8' );
	// Remove delimiter from ends
	$str = trim( $str, $options['delimiter'] );

	return $options['lowercase'] ? mb_strtolower( $str, 'UTF-8' ) : $str;
}

function SI_SlugPost( $string ) {
	$slug = url_slug( $string, array(
		'delimiter'    => '-',
		'limit'        => 80,
		'lowercase'    => true,
		'replacements' => array(
			'/\b(an)\b/i'      => 'a',
			'/\b(example)\b/i' => 'Test'
		)
	) );

	return $slug . '.html';
}

function S_ConvertTimestamp( $times ) {
	$read = date( 'm/d/Y H:i:s', $times ); // TODO convert timestamp 1541843467 to 11/10/2018 09:51:07

	return $read;
}

function SI_CreateAvatar( $character ) {
	$name_slice = explode( ' ', $character );
	$name_slice = array_filter( $name_slice );
	$initials   = '';
	$initials   .= ( isset( $name_slice[0][0] ) ) ? strtoupper( $name_slice[0][0] ) : '';
	$initials   .= ( isset( $name_slice[ count( $name_slice ) - 1 ][0] ) ) ? strtoupper( $name_slice[ count( $name_slice ) - 1 ][0] ) : '';

	// return '<div class="profile-pic">'.$initials.'</div>';
	return $initials;
}

function SI_CreateDirectory( $location, $name ) {
	$make = mkdir( $location, $name );

	return $make;
}

function SI_CencorWord() {

}

function SI_WordofMoney( $x ) {
	$abil = array(
		"",
		"satu",
		"dua",
		"tiga",
		"empat",
		"lima",
		"enam",
		"tujuh",
		"delapan",
		"sembilan",
		"sepuluh",
		"sebelas"
	);
	if ( $x < 12 ) {
		return " " . $abil[ $x ];
	} elseif ( $x < 20 ) {
		return Terbilang( $x - 10 ) . "belas";
	} elseif ( $x < 100 ) {
		return Terbilang( $x / 10 ) . " puluh" . Terbilang( $x % 10 );
	} elseif ( $x < 200 ) {
		return " seratus" . Terbilang( $x - 100 );
	} elseif ( $x < 1000 ) {
		return Terbilang( $x / 100 ) . " ratus" . Terbilang( $x % 100 );
	} elseif ( $x < 2000 ) {
		return " seribu" . Terbilang( $x - 1000 );
	} elseif ( $x < 1000000 ) {
		return Terbilang( $x / 1000 ) . " ribu" . Terbilang( $x % 1000 );
	} elseif ( $x < 1000000000 ) {
		return Terbilang( $x / 1000000 ) . " juta" . Terbilang( $x % 1000000 );
	}

}