<?php

use Illuminate\Support\Str;
use Mpstr24\TextSpeak\Tests\TestCase;

/**
 * @covers \Mpstr24\TextSpeak\TextSpeakServiceProvider
 */
class TextSpeakTest extends TestCase
{
    public function test_text_speak_works(){
        $original = "hello world";
        $expected = "h3ll0 w0rld";

        $this->assertEquals($expected, Str::textSpeak($original));
    }
}
