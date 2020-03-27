<?php
namespace
creeperteam\profileui\form\game;

use creeperteam\profileui\command\ProfileCommand;
use creeperteam\profileui\form\SimpleForm;
use creeperteam\profileui\ProfileUI as Main;
use pocketmine\Player;
use pocketmine\plugin\Plugin;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class ProfileForm extends SimpleForm {

    public $pnane;
    public static $plugin;

    public function __construct() {

        parent::__construct(function(Player $player, ?int $data) {

        });
        $pname = ProfileCommand::$splayer;
self::$plugin = Server::getInstance()->getPluginManager()->getPlugin("ProfileUI");

        $this->setTitle(self::$plugin->getConfig()->get("menu-name"));
        $this->setContent(TextFormat::YELLOW . $pname . "\n");
        $this->addButton(self::$plugin->getConfig()->get("button-name"));
    }

    public function handleResponse(Player $player, $response): void {

        if($response === null) return;

        if($response) return;
    }
}