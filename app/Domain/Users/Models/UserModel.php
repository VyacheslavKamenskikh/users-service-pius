<?php

namespace App\Domain\Users\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 *
 * @property string $name User Name
 * @property string $surname User Surname
 * @property string $phone Phone number
 * @property string $password User Password
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class UserModel extends Model
{
    protected $table = 'users';
}

