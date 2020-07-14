<?php

namespace Mera;


use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
	$this->getLogger()->info("Plugin Aktif Query");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onQuery(QueryRegenerateEvent $event){
$event->setMaxPlayerCount(intval(count($this->getServer()->getOnlinePlayers())+1));
}
}
