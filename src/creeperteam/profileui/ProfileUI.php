<?php
namespace creeperteam\profileui;

use creeperteam\profileui\command\ProfileCommand;
use creeperteam\profileui\form\CustomForm;
use creeperteam\profileui\form\SimpleForm;
use creeperteam\profileui\form\ModalForm;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class ProfileUI extends PluginBase implements Listener {

    public function onEnable() {
        $folder = $this->getDataFolder();
        if(!is_dir($folder))
            @mkdir($folder);
        $this->saveDefaultConfig();
        $this->config = (new Config($folder.'config.yml', Config::YAML))->getAll();
        $this->users = (new Config($folder.'users.yml', Config::YAML))->getAll();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getCommandMap()->register("ProfileCommand", new ProfileCommand($this));
    }

   /**
     * @deprecated
     *
     * @param callable|null $function
     * @return CustomForm
     */
    public function createCustomForm(?callable $function = null) : CustomForm {
        return new CustomForm($function);
    }

    /**
     * @deprecated
     *
     * @param callable|null $function
     * @return SimpleForm
     */
    public function createSimpleForm(?callable $function = null) : SimpleForm {
        return new SimpleForm($function);
    }

    /**
     * @deprecated
     *
     * @param callable|null $function
     * @return ModalForm
     */
    public function createModalForm(?callable $function = null) : ModalForm {
        return new ModalForm($function);
    }

}
