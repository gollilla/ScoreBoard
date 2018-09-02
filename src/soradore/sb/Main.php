<?php
namespace soradore\sb;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\network\mcbe\protocol\SetScorePacket;
use pocketmine\network\mcbe\protocol\SetScoreboardIdentityPacket;

class Main extends PluginBase implements Listener {


    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(\pocketmine\event\player\PlayerJoinEvent $ev){
    	$player = $ev->getPlayer();
    	$entry1 = ScorePacketFactory::createModifyEntry($player->getUniqueId(), "");

    }



    /**
     * 
     *   必要そうなやつ
     *   
     *   pocketmine\network\mcbe\protocol\{
     *             RemoveObjectivePacket,
     *             SetDisplayObjectivePacket,
     *                         
     *   };
     *   
     *   
     *   [SetDisplayObjectivePacket]
     *   
     *    public $displaySlot;    ----   表示する場所(?)
     *    public $objectiveName;  ----   不明
     *    public $displayName;    ----   表示名
     *    public $criteriaName;   ----   不明
     *    public $sortOrder;      ----   不明
     *    
     */
}
