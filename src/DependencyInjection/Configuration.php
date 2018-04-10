<?php

namespace Afranioce\CalendarBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('afranioce_calendar');

        return $treeBuilder;
    }
}
