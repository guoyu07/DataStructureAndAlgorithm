<?php
/*
 +------------------------------------------------------------------------+
 | ThangTD Adventures                                                     |
 +------------------------------------------------------------------------+
 | Source (https://github.com/thangcest2/DataStructureAndAlgorithm)       |
 +------------------------------------------------------------------------+
 | In love with my wife Mai Phuong Nguyen                                 |
 +------------------------------------------------------------------------+
 | Authors: Tran Duc Thang <thangcest2@gmail.com>                         |
 |          or             <thangcest2@gmail.com>                           |
 +------------------------------------------------------------------------+
*/

namespace DesignPatterns\Command\ImplementedCommands;
use DesignPatterns\Command\Core\CommandInterface;

/**
* @class NoCommand
*/

class NoCommand implements CommandInterface
{
    public function execute()
    {
        echo 'Idle !!!' . PHP_EOL;
    }

    public function undo()
    {
        echo 'Undoing nothing :v' . PHP_EOL;
    }

}