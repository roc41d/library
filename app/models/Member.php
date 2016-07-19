<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;

class Member extends Eloquent implements UserInterface
{
    use UserTrait;

    protected $table = 'members';
}
