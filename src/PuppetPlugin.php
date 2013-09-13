<?php

namespace JoshuaEstes\Composer\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use JoshuaEstes\Composer\Installer\PuppetInstaller;

/**
 * @author Joshua Estes <joshua@estes.me>
 */
class PuppetPlugin implements PluginInterface
{

    /**
     * {@inheritDoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new PuppetInstaller($io, $composer);
        $composer->getInstallationmanager()->addInstaller($installer);
    }
}
