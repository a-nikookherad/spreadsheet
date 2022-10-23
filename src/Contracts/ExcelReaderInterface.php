<?php

namespace App\Services\Excel\Contracts;

interface ExcelReaderInterface
{
    public function purify(string $path,string $extension);

    public function read(bool $record): array;
}