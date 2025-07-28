<?php


namespace App\Repositories;

use App\Models\Category;
use App\Models\SiteInfo;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait

class SiteRepository
{
    use FileUploadTrait; // Use the FileUploadTrait



    public function saveSiteService($data, $logo, $favicon)
    {
        $site_info = SiteInfo::find(1); // Fetch the existing record (if any)

        if ($logo) {
            $data['logo'] = $this->uploadFile($logo, 'site-info', $site_info->logo ?? null);
        }

        if ($favicon) {
            $data['favicon'] = $this->uploadFile($favicon, 'site-info', $site_info->favicon ?? null);
        }

        // Create or update the record
        $site_info = SiteInfo::updateOrCreate(
            ['id' => 1], // Condition to find the existing row
            $data       // Data to update or insert
        );

        return $site_info;
    }
}
