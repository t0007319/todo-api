<?php

namespace App\Enums;

enum TodoStatus: string
{
    case TODO = 'todo';
    case INPROGRESS = 'in-progress';
    case CANCELLED = 'cancelled';
    case DONE = 'done';

    public function color(): string
    {
        return match($this) 
        {
            TodoStatus::TODO => 'grey',   
            TodoStatus::INPROGRESS => 'yellow',   
            TodoStatus::CANCELLED => 'red',
            TodoStatus::DONE => 'green'
        };
    }
}
