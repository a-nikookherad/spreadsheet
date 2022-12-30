<?php

namespace Excel\Contracts;

interface ExcelLogicInterface
{

    public function purify(string $excelFileStoragePath,string $extension = null);

    public function rows(): array;

    public function read(): array;

    public function records(): array;

    public function header(): array;

    public function body(): array;
}
