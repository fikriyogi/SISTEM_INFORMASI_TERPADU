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
		'À' => 'A',
		'Á' => 'A',
		'Â' => 'A',
		'Ã' => 'A',
		'Ä' => 'A',
		'Å' => 'A',
		'Æ' => 'AE',
		'Ç' => 'C',
		'È' => 'E',
		'É' => 'E',
		'Ê' => 'E',
		'Ë' => 'E',
		'Ì' => 'I',
		'Í' => 'I',
		'Î' => 'I',
		'Ï' => 'I',
		'Ð' => 'D',
		'Ñ' => 'N',
		'Ò' => 'O',
		'Ó' => 'O',
		'Ô' => 'O',
		'Õ' => 'O',
		'Ö' => 'O',
		'Ő' => 'O',
		'Ø' => 'O',
		'Ù' => 'U',
		'Ú' => 'U',
		'Û' => 'U',
		'Ü' => 'U',
		'Ű' => 'U',
		'Ý' => 'Y',
		'Þ' => 'TH',
		'ß' => 'ss',
		'à' => 'a',
		'á' => 'a',
		'â' => 'a',
		'ã' => 'a',
		'ä' => 'a',
		'å' => 'a',
		'æ' => 'ae',
		'ç' => 'c',
		'è' => 'e',
		'é' => 'e',
		'ê' => 'e',
		'ë' => 'e',
		'ì' => 'i',
		'í' => 'i',
		'î' => 'i',
		'ï' => 'i',
		'ð' => 'd',
		'ñ' => 'n',
		'ò' => 'o',
		'ó' => 'o',
		'ô' => 'o',
		'õ' => 'o',
		'ö' => 'o',
		'ő' => 'o',
		'ø' => 'o',
		'ù' => 'u',
		'ú' => 'u',
		'û' => 'u',
		'ü' => 'u',
		'ű' => 'u',
		'ý' => 'y',
		'þ' => 'th',
		'ÿ' => 'y',
		'©' => '(c)',
		'Α' => 'A',
		'Β' => 'B',
		'Γ' => 'G',
		'Δ' => 'D',
		'Ε' => 'E',
		'Ζ' => 'Z',
		'Η' => 'H',
		'Θ' => '8',
		'Ι' => 'I',
		'Κ' => 'K',
		'Λ' => 'L',
		'Μ' => 'M',
		'Ν' => 'N',
		'Ξ' => '3',
		'Ο' => 'O',
		'Π' => 'P',
		'Ρ' => 'R',
		'Σ' => 'S',
		'Τ' => 'T',
		'Υ' => 'Y',
		'Φ' => 'F',
		'Χ' => 'X',
		'Ψ' => 'PS',
		'Ω' => 'W',
		'Ά' => 'A',
		'Έ' => 'E',
		'Ί' => 'I',
		'Ό' => 'O',
		'Ύ' => 'Y',
		'Ή' => 'H',
		'Ώ' => 'W',
		'Ϊ' => 'I',
		'Ϋ' => 'Y',
		'α' => 'a',
		'β' => 'b',
		'γ' => 'g',
		'δ' => 'd',
		'ε' => 'e',
		'ζ' => 'z',
		'η' => 'h',
		'θ' => '8',
		'ι' => 'i',
		'κ' => 'k',
		'λ' => 'l',
		'μ' => 'm',
		'ν' => 'n',
		'ξ' => '3',
		'ο' => 'o',
		'π' => 'p',
		'ρ' => 'r',
		'σ' => 's',
		'τ' => 't',
		'υ' => 'y',
		'φ' => 'f',
		'χ' => 'x',
		'ψ' => 'ps',
		'ω' => 'w',
		'ά' => 'a',
		'έ' => 'e',
		'ί' => 'i',
		'ό' => 'o',
		'ύ' => 'y',
		'ή' => 'h',
		'ώ' => 'w',
		'ς' => 's',
		'ϊ' => 'i',
		'ΰ' => 'y',
		'ϋ' => 'y',
		'ΐ' => 'i',
		'Ş' => 'S',
		'İ' => 'I',
		'Ç' => 'C',
		'Ü' => 'U',
		'Ö' => 'O',
		'Ğ' => 'G',
		'ş' => 's',
		'ı' => 'i',
		'ç' => 'c',
		'ü' => 'u',
		'ö' => 'o',
		'ğ' => 'g',
		'А' => 'A',
		'Б' => 'B',
		'В' => 'V',
		'Г' => 'G',
		'Д' => 'D',
		'Е' => 'E',
		'Ё' => 'Yo',
		'Ж' => 'Zh',
		'З' => 'Z',
		'И' => 'I',
		'Й' => 'J',
		'К' => 'K',
		'Л' => 'L',
		'М' => 'M',
		'Н' => 'N',
		'О' => 'O',
		'П' => 'P',
		'Р' => 'R',
		'С' => 'S',
		'Т' => 'T',
		'У' => 'U',
		'Ф' => 'F',
		'Х' => 'H',
		'Ц' => 'C',
		'Ч' => 'Ch',
		'Ш' => 'Sh',
		'Щ' => 'Sh',
		'Ъ' => '',
		'Ы' => 'Y',
		'Ь' => '',
		'Э' => 'E',
		'Ю' => 'Yu',
		'Я' => 'Ya',
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'е' => 'e',
		'ё' => 'yo',
		'ж' => 'zh',
		'з' => 'z',
		'и' => 'i',
		'й' => 'j',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'h',
		'ц' => 'c',
		'ч' => 'ch',
		'ш' => 'sh',
		'щ' => 'sh',
		'ъ' => '',
		'ы' => 'y',
		'ь' => '',
		'э' => 'e',
		'ю' => 'yu',
		'я' => 'ya',
		'Є' => 'Ye',
		'І' => 'I',
		'Ї' => 'Yi',
		'Ґ' => 'G',
		'є' => 'ye',
		'і' => 'i',
		'ї' => 'yi',
		'ґ' => 'g',
		'Č' => 'C',
		'Ď' => 'D',
		'Ě' => 'E',
		'Ň' => 'N',
		'Ř' => 'R',
		'Š' => 'S',
		'Ť' => 'T',
		'Ů' => 'U',
		'Ž' => 'Z',
		'č' => 'c',
		'ď' => 'd',
		'ě' => 'e',
		'ň' => 'n',
		'ř' => 'r',
		'š' => 's',
		'ť' => 't',
		'ů' => 'u',
		'ž' => 'z',
		'Ą' => 'A',
		'Ć' => 'C',
		'Ę' => 'e',
		'Ł' => 'L',
		'Ń' => 'N',
		'Ó' => 'o',
		'Ś' => 'S',
		'Ź' => 'Z',
		'Ż' => 'Z',
		'ą' => 'a',
		'ć' => 'c',
		'ę' => 'e',
		'ł' => 'l',
		'ń' => 'n',
		'ó' => 'o',
		'ś' => 's',
		'ź' => 'z',
		'ż' => 'z',
		'Ā' => 'A',
		'Č' => 'C',
		'Ē' => 'E',
		'Ģ' => 'G',
		'Ī' => 'i',
		'Ķ' => 'k',
		'Ļ' => 'L',
		'Ņ' => 'N',
		'Š' => 'S',
		'Ū' => 'u',
		'Ž' => 'Z',
		'ā' => 'a',
		'č' => 'c',
		'ē' => 'e',
		'ģ' => 'g',
		'ī' => 'i',
		'ķ' => 'k',
		'ļ' => 'l',
		'ņ' => 'n',
		'š' => 's',
		'ū' => 'u',
		'ž' => 'z'
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