<?php

/** @User */
class User
{
    /** @var string */
    public $userName;
    public $userEmail;

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
    public function addFriend(): string
    {
        return "$this->userName add a new friend";
    }

}

$userOne = new User("mario", "marion@gmail.com");
$userTwo = new User("kerry", "kerry@gmail.com");

echo "Class: " . get_class($userOne) . '<br>';

echo $userOne->userName . '<br>';
echo $userOne->userEmail . '<br>';
echo $userOne->addFriend() . '<br>';

echo $userTwo->userName . '<br>';
echo $userTwo->userEmail . '<br>';
echo $userTwo->addFriend() . '<br>';


// Find class properties
//echo '<pre>';
//print_r(get_class_vars('User'));
//echo '</pre>';

// Find class methods
//echo '<pre>';
//print_r(get_class_methods('User'));
//echo '</pre>';
