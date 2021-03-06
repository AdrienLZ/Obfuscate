<?php
namespace Muffin\Obfuscate\Model\Behavior\Strategy;

/**
 * Interface StrategyInterface
 *
 */
interface StrategyInterface
{

    /**
     * Obfuscates a given string.
     *
     * @param string $str String to obfuscate.
     * @return string
     */
    public function obfuscate($str);

    /**
     * Elucidates (de-obfuscates) a given string.
     *
     * @param string $str String to elucidate.
     * @return string
     */
    public function elucidate($str);
}
