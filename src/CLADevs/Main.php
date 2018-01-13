<?php

namespace  CLADevs;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as CLADevs;

class Main extends PluginBase implements Listener {
  
  const PREIX = "§fCLA§cDevs §7>§r ";
  const AUTHOR = "CLADevs";
  
  public function onEnable(){
    $this->getLogger()->info(self::PREFIX . CLLADevs::GREEN . "Enabled. Build by " . CLADevs::RED . self::AUTHOR);
    
  }
  
  public function onJoin[PlayerJoinEvent $event) {
   $player = $event->getPlayer();
    $name = $player->getName();
    
        $event->setJoinMessage("§a$name §ehas §eJoining he Server");
        $player->setFood(20);
        $player->setHealth(20);
        $player->setGamemode(0);
    
    
  }
 }
