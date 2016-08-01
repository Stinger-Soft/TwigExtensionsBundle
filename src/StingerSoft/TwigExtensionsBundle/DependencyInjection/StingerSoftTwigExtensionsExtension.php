<?php

/*
 * This file is part of the Stinger Twig Extensions Bundle.
*
* (c) Oliver Kotte <oliver.kotte@stinger-soft.net>
* (c) Florian Meyer <florian.meyer@stinger-soft.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace StingerSoft\TwigExtensionsBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class StingerSoftTwigExtensionsExtension extends Extension {

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \Symfony\Component\DependencyInjection\Extension\ExtensionInterface::load()
	 */
	public function load(array $configs, ContainerBuilder $container) {
		$configuration = new Configuration();
		$config = $this->processConfiguration($configuration, $configs);
		
		$loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
		$loader->load('services.yml');

	}
}
