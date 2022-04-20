<?php

class User {
    private $username;
    protected $email;
    public $role = 'member';

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function __destruct()
    {
     echo "The user $this->email was removed <br/>";   
    }

    public function __clone()
    {
        $this->email = $this->email . '(cloned) <br/>';
    }

    public function addFriend()
    {
        return "$this->username added a new friend";
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if(strpos($email, '@') > -1) {
            return $this->email = $email;
        } else {
            echo 'Invalid Email';
        }
    }
    
    public function message()
    {
        return "$this->email send a new message";
    }
}

$userOne = new User('me', 'me@gmail.com');
$userTwo = new User('lul', 'lul@gmail.com');

// echo get_class($userOne);
// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));

class AdminUser extends User {
    public $level;

    public $role = 'admin';

    public function __construct($username, $email, $level)
    {
        parent::__construct($username, $email);
        $this->level = $level;
    }

    public function message()
    {
        return "$this->email, an admin, send a new message";
    }
}

$userThree = new AdminUser('admin', 'admin@gmail.com', 5);

// echo $userOne->role . '<br />';
// echo $userThree->role . '<br />';

// echo $userThree->message() . '<br />';

// $userThree->setEmail('new@gmail.com');

// echo $userThree->getEmail() . '<br />';

// $userFour = clone $userOne;

// echo $userFour->getEmail();


class Weather {
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($c)
    {
        return $c * 9 / 5 + 32 . '<br/>';
    }

    public static function determineTempCondition($f)
    {
        if($f< 40) {
            return self::$tempConditions[0];
        } else if($f < 70) {
            return self::$tempConditions[1];
        } else {
            return self::$tempConditions[2];
        }
    }
}

echo Weather::determineTempCondition(Weather::celsiusToFarenheit(5)) . '<br />';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>