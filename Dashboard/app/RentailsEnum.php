<?php

namespace App;

enum RentailsEnum
{
    case pending;
    case confirmed;
    case active;
    case completed;
    case cancelled;
}
