<?php

namespace App\Services\Excel\Structure;

use App\Services\Excel\Contracts\ExcelReaderInterface;

class ExcelReader implements ExcelReaderInterface
{
    private array $sheet = [];

    /**
     * check Excel file is correct or exist in path
     * @param string $excelFileAbsolutPath
     * @return ExcelReader|\Throwable
     * @throws \Exception
     */
    public function purify(string $excelFileStoragePath, string $extension)
    {
        // input normalize
        if (!strpos($excelFileStoragePath, '.' . $extension)) {
            $excelFileStoragePath .= '.' . $extension;
        }

        //check Excel file exist
        $excelFileStoragePath = storage_path($excelFileStoragePath);
        if (!file_exists($excelFileStoragePath)) {
            throw new \Exception("No file exists in this path: {$excelFileStoragePath}");
        }

        $this->sheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($excelFileStoragePath)
            ->getActiveSheet()
            ->toArray();

        return $this;
    }

    /**
     * @return array(header , row)
     */
    public function read(bool $record = false): array
    {
        //check Excel sheet is set
        if (empty($this->sheet)) {
            return [];
        }

        //get Excel file sheet
        $sheet = $this->sheet;

        //first row of Excel file is header
        $header = $sheet[0];

        //remove first row of Excel file
        unset($sheet[0]);

        //get all row without header row
        $rows = $sheet;

        // make records like database record (header=>row)
        if ($record) {
            $records = [];
            foreach ($rows as $row) {
                $records[] = array_combine($header, $row);
            }
            return $records;
        }

        return [$header, $rows];
    }

}