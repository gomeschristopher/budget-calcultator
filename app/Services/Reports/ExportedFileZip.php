<?php

namespace App\Services\Reports;

class ExportedFileZip implements ExportedFile
{
    private string $internFileName;

    public function __construct(string $internFileName)
    {
        $this->internFileName = $internFileName;
    }

    public function save(ExportedContent $exportedContent): string
    {
        $filePath = tempnam(sys_get_temp_dir(), 'zip');
        $zipFile = new \ZipArchive();   
        $zipFile->open($filePath);
        $zipFile->addFromString($this->internFileName, serialize($exportedContent->content()));
        $zipFile->close(); 
        return $filePath;
    }
}