<?php

namespace SimpleGM\Drama_Lvl1;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
        if($cmd->getName() === "gm"){
            if(isset($args[0])){
                if($sender->hasPermission("simplegm.use")){
                    if(isset($args[1])){
                        $player = $this->getServer()->getPlayer($args[1]);
                        if($player == null) {
                            $sender->sendMessage("§8[§bSimple§3GM§8] §cCant found this Player!");
                            return true;
                        }
                        $change = $player->getName();
						
                        if($args[0] === "0"){
                            $player->setGamemode(0);
                            $player->sendMessage("§8[§bSimple§3GM§8] §aYour Gamemode has been changed to §2survival");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed the Gamemode from §2" . $change . "§a to §2survival");
                        } else if($args[0] === "1"){
                            $player->setGamemode(1);
                            $player->sendMessage("§8[§bSimple§3GM§8] §aYour Gamemode has been changed to §2creative");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed the Gamemode from §2" . $change . "§a to §2creative");
                        } else if($args[0] === "2"){
                            $player->setGamemode(2);
                            $player->sendMessage("§8[§bSimple§3GM§8] aYour Gamemode has been changed to §2adventure");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed the Gamemode from §2" . $change . "§a to §2adventure");
                        } else if($args[0] === "3"){
                            $player->setGamemode(3);
                            $player->sendMessage("§8[§bSimple§3GM§8] §aYour Gamemode has been changed to §2spectator");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed the Gamemode from §2" . $change . "§a to §2spectator");
						}
					} else {
                        if($args[0] === "0"){
                            $sender->setGamemode(0);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed your Gamemode to §2survival");                        
                        } else if($args[0] === "1"){
                            $sender->setGamemode(1);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed your Gamemode to §2creative");
                        } else if($args[0] === "2"){
                            $sender->setGamemode(2);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed your Gamemode to §2adventure");
                        } else if($args[0] === "3"){
                            $sender->setGamemode(3);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aYou changed your Gamemode to §2spectator");
						}
                    }
				} else if(!$sender->hasPermission("SimpleGM.use")){
					$sender->sendMessage("§8[§bSimple§3GM§8] §cYou do not have permission to use this command!");
				}
					
            } else {
                $sender->sendMessage("§8[§bSimple§3GM§8] §cUsage: §e/gm <0/1/2/3> <spieler> (it works without Playername too just like normal /gamemode)");
            }
        }
    return true;
    }
}
