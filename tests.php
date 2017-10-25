<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function test_string_OK()
    {
        $string = "string OK";
        $expected = "-1";
        $output = exec('php balance.php "'.$string.'"');

        $this->assertEquals($output, $expected);
    }

    public function test_string_extra_closing()
    {
        $string = "{}}";
        $expected = "2";
        $output = exec('php balance.php "'.$string.'"');

        $this->assertEquals($output, $expected);
    }

    public function test_string_extra_two_closing()
    {
        $string = "{}}}";
        $expected = "2";
        $output = exec('php balance.php "'.$string.'"');

        $this->assertEquals($output, $expected);
    }

    public function test_string_extra_opening()
    {
        $string = "{{{{}}}";
        $expected = "0";
        $output = exec('php balance.php "'.$string.'"');

        $this->assertEquals($output, $expected);
    }

    public function test_string_extra_opening_middle()
    {
        $string = "{}{}{{{{}}}";
        $expected = "4";
        $output = exec('php balance.php "'.$string.'"');

        $this->assertEquals($output, $expected);
    }

    public function test_string_extra_opening_middle_good_finish()
    {
        $string = "{}{}{{{{}}}{}";
        $expected = "4";
        $output = exec('php balance.php "'.$string.'"');

        $this->assertEquals($output, $expected);
    }
}
?>