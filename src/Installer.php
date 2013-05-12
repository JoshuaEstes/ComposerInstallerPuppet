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
        return 'app/Resources/puppet/modules';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return ($packageType === "puppet-module");
    }

}
