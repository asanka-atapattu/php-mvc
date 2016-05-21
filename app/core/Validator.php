<?php

class Validator{
    private static $message = array();

    private function __construct() {}

    public static function validate($array) {
        if (!isset($array)) {
            array_push(self::$message, ['warning'=>'No result found.']);
        }else{
            foreach ($array as $item=>$k) {
                $param = explode("|",$k);
                foreach($param as $para){
                    switch($para){
                        case'required':
                            if(empty($_POST[$item])){
                                array_push(self::$message,['error' => $item.' field is required.']);
                            }
                            break;

                        case'notnull':
                            if(null($_POST[$item])){
                                array_push(self::$message, ['error' => $item.' field is not null.']);
                            }
                            break;

                        case'number':
                            if(!is_numeric($_POST[$item])){
                                array_push(self::$message, ['error' => $item.' field is not a number.']);
                            }
                            break;

                        case'text':
                            if(!is_string($_POST[$item])){
                                array_push(self::$message, ['error' => $item.' field is not a text.']);
                            }
                            break;

                        case'email':
                            if(!filter_var(self::prepare($_POST[$item]), FILTER_VALIDATE_EMAIL)){
                                array_push(self::$message, ['error' => $item.' field is not correct.']);
                            }
                            break;

                        case'url':
                            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST[$item])){
                                array_push(self::$message, ['error' => $item.' field is not correct.']);
                            }
                            break;

                        case'phone':
                            $regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
                            if(!preg_match( $regex, $_POST[$item] )){
                                array_push(self::$message, ['error' => $item.' field is not correct.']);
                            }
                            break;
                    }
                }
            }
        }
        return self::$message;
    }

    private function prepare($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function findKey($array, $keySearch)
    {
        // check if it's even an array
        if (!is_array($array)) return false;

        // key exists
        if (array_key_exists($keySearch, $array)) return true;

        // key isn't in this array, go deeper
        foreach($array as $key => $val)
        {
            // return true if it's found
            if (self::findKey($val, $keySearch)) return true;
        }

        return false;
    }
}
?>