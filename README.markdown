# Composer Installer Puppet

This installer is used to manage puppet modules in your projects. Why
would you want to do this? I use vagrant for some of my projects and
I have a few of my own custom modules that I use. I don't want to set
up the project as a puppet master/agent so I just have the manifests
run locally.

You can also use this for making sure that you puppet master always
uses the most stable of code.

# Usage (puppet module)

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
        "require": {
            "joshuaestes/composer-installer-puppet": "~2.0"
        },
        "extra": {
            "puppet": {
                "module_name": "php"
            }
        }
    }

* `type` Must equal `puppet-module`
* You must give this a module name in the `extra` configuration

# Usage (main project)

In your main project's `composer.json` you need to make sure that
you are including your puppet module and also give it a path to install
the module at.

    {
        ...
        "require": {
            "joshuaestes/puppet-php": "~1.0"
        },
        "extra": {
            "puppet": {
                "modules_path": "app/Resources/puppet/modules"
            }
        }
    }

Since we have configured our puppet module with a name of "php" and now have
a modules path set, the code will be installed in this path, ie
`app/Resources/puppet/modules/php`.

## NOTE

You will need to add the path to where the modules are placed in your `.gitignore`
file. Generally this will be what you set your `puppet-modules-path` to.

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
