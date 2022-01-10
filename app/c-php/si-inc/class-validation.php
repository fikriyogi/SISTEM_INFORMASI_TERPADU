<?php
class CallStatic{
    public static function test_static() {
        echo "static";
    }
}
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function check_pass_secure($upass)
{
    $number = preg_match('@[0-9]@', $upass);
    $uppercase = preg_match('@[A-Z]@', $upass);
    $lowercase = preg_match('@[a-z]@', $upass);
    $specialChars = preg_match('@[^\w]@', $upass);

    if(strlen($upass) < 8) {
        $msg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    } elseif (!$number) {
        $msg = "must contain at least one number";
    } elseif (!$uppercase) {
        $msg = "one upper case letter, one lower case letter and one special character.";
    } elseif (!$lowercase) {
        $msg = "one lower case letter and one special character.";
    } elseif (!$specialChars) {
        $msg = "one special character.";
    } else {
        $msg = "Password is strength";
    }

    return $msg;

}
function email_validation($email) {
    //Email Validation
    if (empty($email)) {
        $emailErr = "Email is required";
    } else {
        $email = input_data($email);
        // check that the e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}
function name_validation($name) {
    if (empty($name)) {
        $nameErr = "Name is required";
    } else {
        $nama = input_data($name);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
            $nameErr = "Only alphabets and white space are allowed";
        }
    }
}

function phone_validation($hp) {
    //Number Validation
    if (empty($hp)) {
        $mobilenoErr = "Mobile no is required";
    } else {
        $mobileno = input_data($hp);
        // check if mobile no is well-formed
        if (!preg_match("/^[0-9]*$/", $mobileno)) {
            $mobilenoErr = "Only numeric value is allowed.";
        }
        //check mobile no length should not be less and greator than 10
        if (strlen($mobileno) != 10) {
            $mobilenoErr = "Mobile no must contain 10 digits.";
        }
    }
}
function phone_formatting($phone){
    // Pass phone number in preg_match function
    if(preg_match(
        '/^\+[0-9]([0-9]{3})([0-9]{3})([0-9]{4})$/',
        $phone, $value)) {

        // Store value in format variable
        $format = $value[1] . '-' . $value[2] . '-' . $value[3];
    }
    else {
        // If given number is invalid
        echo "Invalid phone number <br>";
    }

    // Print the given format
//    return $format;

}
function web_validation($web) {
    //URL Validation
    if (empty($web)) {
        $website = "";
    } else {
        $website = input_data($web);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }
}


function gender_validation($jk) {
    //Empty Field Validation
    if (empty($jk)) {
        $genderErr = "Gender is required";
    } else {
        $gender = input_data($jk);
    }
}
function check_validation($setuju) {
    //Checkbox Validation
    if (!isset($setuju)) {
        $agreeErr = "Accept terms of services before submit.";
    } else {
        $agree = input_data($setuju);
    }
}






function form_validation($input, $email, $phone, $web) {

}
