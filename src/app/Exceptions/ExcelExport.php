<?php

namespace LaravelEnso\Excel\App\Exceptions;

use UnexpectedValueException;

class ExcelExport extends UnexpectedValueException
{
    public static function missingInterface()
    {
        return new static('The exporter class must implement SavesToDisk interface');
    }
}
