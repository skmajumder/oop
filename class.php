<?php

class User
{
    /** @var string */
    public $userName = "ruy";
    public $userEmail = 'ruy@gmail.com';

    /**
     * @method addFriend
     * @return string
     */
    public function addFriend(): string
    {
        return "$this->userName add a new friend";
    }

}

$userOne = new User();
$userTwo = new User();

echo "Class: " . get_class($userOne) . '<br>';

echo $userOne->userName . '<br>';
echo $userOne->userEmail . '<br>';
echo $userOne->addFriend();