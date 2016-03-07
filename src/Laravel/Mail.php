<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('mailer')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function mailer()
    {
        return app('mailer');
    }
}