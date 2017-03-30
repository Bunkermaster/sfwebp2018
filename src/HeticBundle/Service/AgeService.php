<?php

namespace HeticBundle\Service;

use Doctrine\ORM\Query\AST\Functions\DateDiffFunction;

/**
 * Class AgeService
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package HeticBundle\Service
 */
class AgeService
{
    /**
     * @param \DateTime $dob
     * @return int age
     * @throws \Exception si Dob > now
     */
    function getAge(\DateTime $dob)
    {
        $now = new \DateTime('now');
        if($dob <= $now){
            return date_diff($dob, $now)->y;
        } else {
            throw new \Exception('Boulets');
        }
    }
}
