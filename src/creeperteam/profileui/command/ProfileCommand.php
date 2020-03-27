<?php
namespace creeperteam\profileui\command;

use creeperteam\profileui\form\game\ProfileForm;
use creeperteam\profileui\ProfileUI as Main;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class ProfileCommand extends PluginCommand {

    public static $splayer;
    public $plugin;
    public $cmd = "profile";

    public function __construct(Main $owner){
        parent::__construct($this->cmd, $owner);
        $this->setDescription("This command opens a profile ui"); 
        $this->setUsage("/profile"); 
        $this->setPermission("use.profile ui.profile"); 
        $this->plugin = $owner; 
    }

    public function execute(CommandSender $sender, $currentAlias, array $args){
        if(!$this->testPermission($sender)) {
            return true;
        }
        if($sender instanceof Player) {
            self::$splayer = strtolower($sender->getName());
            $sender->sendForm(new ProfileForm());
        } else $sender->sendMessage("§cYour can't use this command as a console");
        return false;
    }

}