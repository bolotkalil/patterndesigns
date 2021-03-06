<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/21/18
 * Time: 2:54 PM
 */

namespace PatternDesigns\Algorithm\Merge;


use PHPUnit\Framework\TestCase;

class MergeTest extends TestCase
{
    /**
     * @var Merge
     */
    private $merge;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->merge = new Merge();
    }

    public function testMerge()
    {
        $this->assertEquals([1,2,3,4,5,6,7], $this->merge->sort([5,4,3,2,1,6,7]));
    }

}