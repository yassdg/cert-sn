<?php

namespace Cert\IncidentBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ServiceImage
 */
class GenerationPDF
{

    public function generePDF()
    {
        $pdf = new Cangelis\PDF\PDF('/usr/bin/wkhtmltopdf');
        echo $pdf->loadURL('http://www.laravel.com')->grayscale()->pageSize('A3')->orientation('Landscape')->get();

    }
}
