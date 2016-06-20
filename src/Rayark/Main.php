<？php

namespace Rayark;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase:
use pocketmine
use pocketmine
use pocketmine
use pocketmine
use pocketmine
use pocketmine
use pocketmine
use pocketmine

class Main extends PluginBase implements Listener
{
 public function Enable()
 {
  $this->getServe()->getPluginManager()->registerEvent($this,$this);
  $this->getLogger()->info("Welcome to use ");
 }
 
 public function onMove(PlayerMoveEvent $event)
 {
  $x=$event()->getPlayer()-$getX();
 }
}
