<?php

namespace App\Services\Reports;

interface ExportedFile
{
    public function save(ExportedContent $exportedContent): string;
}