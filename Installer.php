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
        var_dump($package->getExtra());
        return 'app/Resources/puppet/modules/' . $package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return $packageType === 'puppet-module';
    }

}
