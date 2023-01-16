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
echo $userOne->addFriend() . '<br>';

$userTwo->userName = 'yoshi';
$userTwo->userEmail = 'yoshi@gmail.com';

echo $userTwo->userName . '<br>';
echo $userTwo->userEmail . '<br>';
echo $userTwo->addFriend() . '<br>';


// Find class properties
echo '<pre>';
print_r(get_class_vars('User'));
echo '</pre>';

// Find class methods
echo '<pre>';
print_r(get_class_methods('User'));
echo '</pre>';
