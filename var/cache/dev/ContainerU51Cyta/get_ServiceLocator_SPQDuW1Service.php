<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.sPQDuW1' shared service.

return $this->privates['.service_locator.sPQDuW1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'guest' => ['privates', '.errored..service_locator.sPQDuW1.App\\Entity\\Guest', NULL, 'Cannot autowire service ".service_locator.sPQDuW1": it references class "App\\Entity\\Guest" but no such service exists.'],
]);