<?php

class Validator
{
    public static function isString($string, $min = 1, $max = INF)
    {
        return is_string(trim($string)) && strlen($string) >= $min && strlen($string) <= $max;
    }


    // public static function validate($data, $rules) {
    //     $errors = [];

    //     foreach ($rules as $field => $rule) {
    //         $rules = explode('|', $rule);

    //         foreach ($rules as $rule) {
    //             $rule = explode(':', $rule);

    //             switch ($rule[0]) {
    //                 case 'required':
    //                     if (! isset($data[$field]) || empty($data[$field])) {
    //                         $errors[$field] = 'The ' . $field . ' field is required.';
    //                     }
    //                     break;
    //                 case 'email':
    //                     if (! filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
    //                         $errors[$field] = 'The ' . $field . ' field must be a valid email address.';
    //                     }
    //                     break;
    //                 case 'min':
    //                     if (strlen($data[$field]) < $rule[1]) {
    //                         $errors[$field] = 'The ' . $field . ' field must be at least ' . $rule[1] . ' characters.';
    //                     }
    //                     break;
    //                 case 'max':
    //                     if (strlen($data[$field]) > $rule[1]) {
    //                         $errors[$field] = 'The ' . $field . ' field must be less than ' . $rule[1] . ' characters.';
    //                     }
    //                     break;
    //                 case 'match':
    //                     if ($data[$field] !== $data[$rule[1]]) {
    //                         $errors[$field] = 'The ' . $field . ' field must match the ' . $rule[1] . ' field.';
    //                     }
    //                     break;
    //                 case 'unique':
    //                     $pdo = Connection::make(App::get('config')['database']);

    //                     $statement = $pdo->prepare("SELECT * FROM {$rule[1]} WHERE {$field} = :{$field}");

    //                     $statement->execute([
    //                         $field => $data[$field]
    //                     ]);

    //                     if ($statement->fetch(PDO::FETCH_ASSOC)) {
    //                         $errors[$field] = 'The ' . $field . ' field must be unique.';
    //                     }
    //                     break;
    //             }
    //         }
    //     }

    //     return $errors;
    // }
}
