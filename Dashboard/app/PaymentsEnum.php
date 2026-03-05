<?php

namespace App;

enum PaymentsEnum
{
    case pending;
    case completed;
    case failed;
    case refunded;
}
