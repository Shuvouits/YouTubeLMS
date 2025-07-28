<?php

namespace App\Services;

use App\Repositories\SiteRepository;

class SiteService
{


    protected $siteRepository;

    public function __construct(SiteRepository $siteRepository)
    {
        $this->siteRepository = $siteRepository;
    }


    public function saveSiteService(array $data, $logo = null, $favicon = null)
    {
        return $this->siteRepository->saveSiteService($data, $logo, $favicon);

    }




}
