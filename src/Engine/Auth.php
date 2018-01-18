<?php

namespace Dominik\CMS\Engine;

interface Auth
{ 
    public function is_logged();
    public function has_permissions($scope);
    public function logout();
}