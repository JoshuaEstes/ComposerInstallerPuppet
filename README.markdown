# Composer Installer Puppet

This installer is used to manage puppet modules in your projects. Why
would you want to do this? I use vagrant for some of my projects and
I have a few of my own custom modules that I use. I don't want to set
up the project as a puppet master/agent so I just have the manifests
run locally.

# Usage

You will need to create and drop in a `composer.json` file into
your puppet module. Below is an example:

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

In your main root project's composer.json you need to add in your "extra"
part, a variable named "puppet-modules-path" with a path to where you
want to install them. Below is an example

    {
        ...
        "extra": {
            "puppet-modules-path": "app/Resources/puppet/modules"
        }
    }

Using the 2 above composer.json files, the installer will install
your puppet module into the directory `app/Resources/puppet/modules/php`.

# License

Copyright (C) 2013 Joshua Estes

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
