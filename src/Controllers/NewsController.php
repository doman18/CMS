<?php

namespace Company\Name;

use Dominik\CMS\Engine;

class NewsController extends DashboardController
{  
    public function news()
    {
        return $this->view('dashboard/news/news');
    }
}


