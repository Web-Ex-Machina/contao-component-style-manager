<?php
/*
 * This file is part of ContaoComponentStyleManager.
 *
 * (c) https://www.oveleon.de/
 */

namespace Oveleon\ContaoComponentStyleManager;

use Contao\CoreBundle\Exception\NoContentResponseException;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;

use Contao\Backend;
use Contao\DataContainer;
use Contao\System;
use Contao\Input;

class Ajax extends Backend
{
    /**
     * Ajax actions that do require a data container object
     *
     * @param $strAction
     * @param \DataContainer $dc
     *
     * @throws \Exception
     * @throws NoContentResponseException
     */
    public function executePostActions($strAction, DataContainer $dc)
    {
        if($strAction !== 'selectStyleManagerSection')
        {
            return;
        }

        /** @var AttributeBagInterface $objSessionBag */
        $objSessionBag = System::getContainer()->get('session')->getBag('contao_backend');

        $fs = $objSessionBag->get('stylemanager_section_states');
        $fs[Input::post('groupAlias')] = Input::post('identifier');
        $objSessionBag->set('stylemanager_section_states', $fs);

        throw new NoContentResponseException();
    }
}
