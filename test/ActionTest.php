<?php
declare(strict_types=1);

namespace test\tpl_company_tpl\tpl_project_tpl;

use tpl_company_tpl\tpl_project_tpl\Action;
use PHPUnit\Framework\TestCase;

class ActionTest extends TestCase
{

    public function test_do_basic()
    {
        $action = new Action();
        $this->assertEquals("some return", $action->do());
    }


}
