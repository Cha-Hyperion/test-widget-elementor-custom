<?php

namespace czElements;

class Plugin
{
    /**
     * Initialize the plugin
     */
    public function run()
    {
        $this->registerPluginHooks();

    }


    /**
     * Register activation and deactivation hooks
     */
    public function registerPluginHooks()
    {
        // A l'exécution du hook d'activation,
        // on appelera sur l'objet courant ($this)
        // la méthode "activate()"
        register_activation_hook(
            CZELEMENTS_PLUGIN_FILE,
            [
                $this,
                'activate'
            ]
        );

        register_deactivation_hook(
            CZELEMENTS_PLUGIN_FILE,
            [
                $this,
                'deactivate'
            ]
        );
    }

    /**
     * Activate plugin
     */
    public function activate()
    {

    }

    /**
     * Deactivate plugin
     */
    public function deactivate()
    {
  
    }


}