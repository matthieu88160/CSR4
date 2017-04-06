<?php
/**
 * This file is part of CSR4-ObjectMappedDTO.
 *
 * As each files provides by vallance, this file is licensed
 * under the MIT license.
 *
 * PHP version 7.0
 *
 * @category TestFixture
 * @package  CSR4-ObjectMappedDTO
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace CSDT\CSR4\Tests\DataTransformer\Loader\ClassLoader\Util;

use CSDT\CSR4\Tests\DataTransformer\Loader\ClassLoader\Util\FixtureTransformer;

/**
 * OptionalFixtureTransformer.php
 *
 * This transformer is used as a fixture for the ClassTransformerLoader test
 *
 * @category TestFixture
 * @package  CSR4-ObjectMappedDTO
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class OptionalFixtureTransformer extends FixtureTransformer
{
    /**
     * Construct
     *
     * The default OptionalFixtureTransformer constructor
     *
     * @param mixed $argument An optional argument
     *
     * @return void
     */
    public function __construct($argument = null)
    {
        $argument = null;
    }
}
