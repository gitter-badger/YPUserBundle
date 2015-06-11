<?php

namespace YP\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Prou Yann <prouyann@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generate configuration.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('yp_user');

        $rootNode
            ->children()
                ->scalarNode('firewall_name')->isRequired()->cannotBeEmpty()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
