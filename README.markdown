# Composer Installer Puppet

This installer is used to manage puppet modules in your projects. Why
would you want to do this? I use vagrant for some of my projects and
I have a few of my own custom modules that I use. I don't want to set
up the project as a puppet master/agent so I just have the manifests
run locally.

# Usage

You will need to create and drop in a `composer.json` file into
your project. Below is an example:

    {
        "name": "joshuaestes/puppet-php",
        "type": "puppet-module",
        "repositories": [
            {
                "type": "git",
                "url": "git://github.com/JoshuaEstes/ComposerInstallerPuppet.git"
            }
        ],
        "requires": {
            "joshuaestes/composer-installer-puppet": "*"
        },
        "extra": {
            "puppet-module": "php"
        }
    }


