<?php

namespace Martin\TNTSearch;

use App;
use Config;
use System\Classes\PluginBase;

class Plugin extends PluginBase {

    public function pluginDetails() {
        return [
            'name'        => 'TNTSearch for OctoberCMS',
            'description' => 'TNTSearch for OctoberCMS',
            'author'      => 'Martín M.',
            'icon'        => 'icon-search',
            'homepage'    => 'https://github.com/skydiver/'
        ];
    }

    public function boot() {
        $this->bootPackages();
    }

    public function bootPackages() {
        $pluginNamespace = str_replace('\\', '.', strtolower(__NAMESPACE__));
        $packages = Config::get($pluginNamespace . '::packages');

        foreach ($packages as $name => $options) {
            if (!empty($options['config']) && !empty($options['config_namespace'])) {
                Config::set($options['config_namespace'], $options['config']);
            }
        }

        if (!empty($options['providers'])) {
            foreach ($options['providers'] as $provider) {
                App::register($provider);
            }
        }
    }

}

?>
