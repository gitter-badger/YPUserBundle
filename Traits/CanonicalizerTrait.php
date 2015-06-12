<?php

namespace YP\UserBundle\Traits;

/**
 * @author Prou Yann <prouyann@gmail.com>
 */
trait CanonicalizerTrait
{
    protected function canonicalize($string)
    {
        $encoding = mb_detect_encoding($string);

        return (null === $string) ? null : mb_convert_case($string, MB_CASE_LOWER, $encoding);
    }
}
