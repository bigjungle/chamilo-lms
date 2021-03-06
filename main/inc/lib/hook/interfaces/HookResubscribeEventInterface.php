<?php
/* For licensing terms, see /license.txt */
/**
 * This file contains all Hook interfaces and their relation.
 * They are used for Hook classes.
 *
 * @package chamilo.library.hook
 */

/**
 * Interface HookResubscribeEventInterface.
 */
interface HookResubscribeEventInterface extends HookEventInterface
{
    /**
     * Update all the observers.
     *
     * @param int $type
     *
     * @return int
     */
    public function notifyResubscribe($type);
}
