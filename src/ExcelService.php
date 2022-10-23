<?php

namespace App\Services\Excel;

use App\Services\Excel\Structure\ExcelReader;
use Illuminate\Support\Facades\Facade;


/**
 * @method static ExcelReader purify(string $storagePath,string $extension)
 * @method static array read(bool $record)
 */
class ExcelService extends Facade
{
    static public function getFacadeAccessor()
    {
        return \App::make(ExcelReader::class);
    }
}