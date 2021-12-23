<p align="center">
    <a href="#">
        <img src="./images/jiny.png" width="200">
    </a>
</p>

# Icons Blade Components for Laravel
jinyIcon is icon generator by PHP. It is easy to use fure PHP and Laravel Framwork.

## Install
Install using Composer.
```
composer require jiny/icons
```

## How to use
JinyIcon can be used in two ways. The method of calling using the helper function and the method using components of the Laravel framework.

### Helper 
You can use the `xIcon()` helper function to call the icon as follows.
```php
xIcon("o-academic-cap", $type="heroicon")->setClass("w-8 h-8");
xIcon("o-academic-cap")->setType("heroicon")->setClass("w-8 h-8");
```

### Laravel Component
If you are using Laravel's Blade View, you can call the icon using the single tag `<x-icon/>`.

```php
<x-icon type="heroicon" name="o-academic-cap" class="w-4 h-4"/>
```

## Icon set
GenieIcon supports a variety of free MIT open icon sets. Anyone can add a new SVG icon to the package
You can contribute. Create a folder named `type` in the `/resources/view` folder, save the svg file, and commit.

* [Heroicon](https://heroicons.com/)
* Academicons
* Akar Icons
* Ant Design Icons
* Bootstrap Icons
* boxicons
* bytesize
* carbon
* clarity
* coolicons
* country-flags
* cryptocurrency
* zondicons
* weather-icons
* vaadin-icons
* unicons
* uiw-icons
* typicons
* teeny-icons
* tabler-icons
* system-uicons
* simple-line-icons
* simple-icons
* rpg-awesome-icons
* remix-icon
* radix-icons
* prime-icons
* pixelarticons
* phosphor-icons
* pepicons
* mono-icons
* microns
* maki-icons
* majestic-icons
* lucide-icons
* line-awesome-icons
* jam-icons
* iconpark
* iconic
* icomoon
* health-icons
* grommet-icons
* govicons
* google-material
* github-octicons
* forkawesome
* fontisto-icons
* fontawesome
* fontaudio
* fluentui-system
* file-icons
* feather
* evil-icons
* eva-icons
* eos-icons
* entypo
* emblemicons
* elusive-icons
* devicons
* css-icons
* coreui-icons
* codicons

## How to contribute code
The Genie PHP icons package is provided to easily handle SVG icons registered by group.
It is a pure library. After forking the github repository, create a new icon group in the `/resources/view` folder
svg file to register. And if you submit a pull-request, you will be registered as a contributor.

Also, if you have various ideas for handling additional icons, please contribute by writing the code.


## License
jinyPHP icons is open-sourced software licensedd under MIT license.
