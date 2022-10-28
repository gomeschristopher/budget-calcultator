<?php

namespace App\Services\Reports;

class ExportedFileXml implements ExportedFile
{
    private string $fatherElement;

    public function __construct(string $fatherElement)
    {
        $this->fatherElement = $fatherElement;
    }

    public function save(ExportedContent $exportedContent): string
    {
        $elementXml = new \SimpleXMLElement("<{$this->fatherElement} />");

        foreach($exportedContent->content() as $item => $value) {
            $elementXml->addChild($item, $value);
        }

        $filePath = tempnam(sys_get_temp_dir(), 'xml');
        $elementXml->asXML($filePath);

        return $filePath;
    }
}