<?php

namespace Excel;

use Excel\Logics\ExcelLogic;
use Illuminate\Support\Facades\Facade;


/**
 * @method static ExcelLogic purify(string $storagePath, string $extension = null)
 * @method static array rows()
 * @method static array read()
 * @method static array header()
 * @method static array body()
 * @method static array records()
 */
class ExcelFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return "ExcelLogic";
    }
}
