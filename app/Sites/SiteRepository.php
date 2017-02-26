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

    public function create(array $data) {
        $site = $this->model->create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'status' => $data['status']
        ]);

        return $site;
    }
}