<?php

namespace App\Providers;

//use Illuminate\Support\ServiceProvider;
use \Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter as AdapterProvider;

class GoogleDriveAdapter extends AdapterProvider
{
    public function getService()
    {
            return $this->service;
    }
}
