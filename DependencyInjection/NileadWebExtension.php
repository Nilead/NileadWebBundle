<?php

namespace Nilead\WebBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class NileadWebExtension
 * @package Nilead\WebBundle\DependencyInjection
 */
class NileadWebExtension extends Extension
{
    /**
     * Lpad configs
     *
     * @param array $config
     * @param ContainerBuilder $container
     *
     * @return void
     */
    public function load(array $config, ContainerBuilder $container)
    {
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
    }
}
