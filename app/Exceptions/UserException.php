<?php

namespace App\Exceptions;

use Exception;

class UserException extends Exception
{
    public static function loginFailed(): self {
        return new self("Gagal Login, kredensial yang anda masukkan mungkin salah");
    }
}
