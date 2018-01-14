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
  
  public function onEnable(){
    $this->getLogger()->info(self::PREFIX . CLLADevs::GREEN . "Enabled. Build by CLADevs");
    
  }
  
  public function onJoin(PlayerJoinEvent $event) {
   $player = $event->getPlayer();
    $name = $player->getName();
    
     $event->setJoinMessage("§7[§a+§7] §a{name}");
   $player->sendMessage(self::PREFIX . " §7| §aThanks for Playing");
   $player->sendMessage(self::PREFIX . "§eYour §cTeam");
    
        $player->setFood(20);
        $player->setHealth(20);
        $player->setGamemode(0);
    
    
  }
 }
