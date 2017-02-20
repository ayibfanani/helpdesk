<?php

namespace App\Sites;

use App\Sites\Site;

class SiteRepository
{
    public function __construct(Site $site)
    {
        $this->model = $site;
    }

    public function getSite($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}