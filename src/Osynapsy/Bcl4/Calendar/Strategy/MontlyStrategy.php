<?php

/*
 * This file is part of the Osynapsy package.
 *
 * (c) Pietro Celeste <p.celeste@osynapsy.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Osynapsy\Bcl4\Calendar\Strategy;

/**
 * Description of MontlyStrategy
 *
 * @author Pietro Celeste <p.celeste@osynapsy.net>
 */
class MontlyStrategy
{
    private $startDate;

    public function __construct(\DateTime $initDate)
    {
        $this->startDate = $initDate->format();
    }

    private function firstDayOfMonth($date)
    {
        list($aa,$mm,$dd) = explode('-',$date);
        return (($d = jddayofweek(GregorianToJD ($mm,1,$aa),0)) == 0) ? 7 : $d;
    }
}
