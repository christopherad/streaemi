<?php

declare(strict_types=1);

namespace App\Enum;

enum CommentStatusEnum: string{
    case VALID= 'active';
    case WAITING= 'inactive';
    case REJECTED= 'deleted';
}