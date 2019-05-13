<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.builder.orm_datagrid' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\BuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\DatagridBuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Builder\\DatagridBuilder.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Guesser\\TypeGuesserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Guesser\\TypeGuesserChain.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Guesser\\AbstractTypeGuesser.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Guesser\\FilterTypeGuesser.php';

return $this->privates['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['sonata.admin.builder.filter.factory'] ?? $this->load('getSonata_Admin_Builder_Filter_FactoryService.php')), new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser()]), true);
