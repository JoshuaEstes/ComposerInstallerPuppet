<?php

namespace JoshuaEstes\Composer\Installer\Puppet;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 * @author Joshua Estes
 */
class Installer extends LibraryInstaller
{

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $extra     = $package->getExtra();
        $rootExtra = $this->composer->getPackage()->getExtra();
        if (empty($rootExtra['puppet-modules-path']) || empty($extra['puppet-module'])) {
            throw new \Exception('puppet-modules-path or puppet-module is not defined');
        }
        return $rootExtra['puppet-modules-path'] . '/' . $extra['puppet-module'];
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return $packageType === 'puppet-module';
    }

}
