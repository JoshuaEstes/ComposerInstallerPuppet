<?php

namespace JoshuaEstes\Composer\Installer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 * @author Joshua Estes <joshua@estes.me>
 */
class PuppetInstaller extends LibraryInstaller
{

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $extra     = $package->getExtra();
        $rootExtra = $this->composer->getPackage()->getExtra();
        $settings  = $rootExtra['puppet'];
        var_dump($extra,$settings);

        if (empty($settings['modules_path'])) {
            throw new \Exception('modules_path is not defined');
        }

        if (empty($settings['module_name'])) {
            throw new \Exception('module_name is not defined');
        }

        $path = $settings['modules_path'] . '/' . $settings['module_name'];

        return $path;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return $packageType === 'puppet-module';
    }
}
