// app/models/User.php

<?php

namespace App\Models;

class User extends \Eloquent {

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

}

?>
