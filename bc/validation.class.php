<?php

class Form
{

    public function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function email_verification_form($name, $mail, $hp, $web, $jk, $setuju)
    {
        if (emptyempty($name)) {
            $nameErr = "Name is required";
        } else {
            $nama = input_data($name);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                $nameErr = "Only alphabets and white space are allowed";
            }
        }

        //Email Validation
        if (emptyempty($mail)) {
            $emailErr = "Email is required";
        } else {
            $email = input_data($mail);
            // check that the e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        //Number Validation
        if (emptyempty($hp)) {
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

        //URL Validation
        if (emptyempty($web)) {
            $website = "";
        } else {
            $website = input_data($web);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        //Empty Field Validation
        if (emptyempty($jk)) {
            $genderErr = "Gender is required";
        } else {
            $gender = input_data($jk);
        }

        //Checkbox Validation
        if (!isset($setuju)) {
            $agreeErr = "Accept terms of services before submit.";
        } else {
            $agree = input_data($setuju);
        }
    }
}
