<?php

/** @User */
class User
{
    /** @var string */
    public $userName;
    private $userEmail;

    /**
     * @method constructor
     */
    public function __construct($userName, $userEmail)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
    }

    /**
     * @method addFriend
     * @return string
     */
    public function addFriend()
    {
        return "$this->userEmail add a new friend";
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        if (strpos($userEmail, '@') > -1) {
            $this->userEmail = $userEmail;
        } else {
            echo 'Please Enter a Valid email' . '<br>';
        }
    }

}

$userOne = new User("mario", "marion@gmail.com");
$userTwo = new User("kerry", "kerry@gmail.com");

$userOne->setUserEmail('yoshi@gmail.com');

echo $userOne->getUserEmail() . '<br>';
echo $userTwo->getUserEmail() . '<br>';

//echo $userOne->userName . '<br>';
//echo $userOne->userEmail . '<br>';
//echo $userOne->addFriend() . '<br>';
//
//echo $userTwo->userName . '<br>';
//echo $userTwo->userEmail . '<br>';
//echo $userTwo->addFriend() . '<br>';


//echo "Class: " . get_class($userOne) . '<br>';
// Find class properties
//echo '<pre>';
//print_r(get_class_vars('User'));
//echo '</pre>';

// Find class methods
//echo '<pre>';
//print_r(get_class_methods('User'));
//echo '</pre>';
