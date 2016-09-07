<?php

$profile = new Profile($user);


# IF the user Change it's profile, THEN is should be saved.
if (isset($_POST[changeProfile])){
    $profile->saveProfile();
}

include_once ("views/profile.php");