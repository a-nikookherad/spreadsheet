# Excel file reader service

### Summery:

This service is for easy work with Excel files

_Notice:_ __This service needs PhpOffice\PhpSpreadsheet package__

__This service has six methods that can be used in a chain__

* Purify method:
  Takes from you the Excel file's address:

```php
  $excelFile=Excel\Excel::purify(string $excelFileStoragePath,string $extension = null);
```

and other methods come after that

```php
  $excelFileRows=$excelFile->rows(): array;

  list($head,$rows)=$excelFile->read(): array;

  $records=$excelFile->records(): array;

  $excelFilesRowsJustFirstRow=$excelFile->header(): array;

  $excelFilesRowsWithoutFirstRow=$excelFile->body(): array;
```
