<?php

/**
 * (c) Meritoo.pl, http://www.meritoo.pl
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meritoo\Common\Utilities;

use Meritoo\Common\Test\Base\BaseTestCase;

/**
 * Test case of the useful regular expressions methods
 *
 * @author    Krzysztof Niziol <krzysztof.niziol@meritoo.pl>
 * @copyright Meritoo.pl
 */
class RegexTest extends BaseTestCase
{
    private $simpleText;
    private $camelCaseText;

    public function testConstructor()
    {
        static::assertHasNoConstructor(Regex::class);
    }

    public function testGetCamelCaseParts()
    {
        $parts = [];
        self::assertEquals($parts, Regex::getCamelCaseParts(''));

        $parts = [
            'lorem',
        ];

        self::assertEquals($parts, Regex::getCamelCaseParts('lorem'));

        $parts = [
            'lorem',
            'Ipsum',
            'Dolor',
            'Sit',
        ];

        self::assertEquals($parts, Regex::getCamelCaseParts($this->camelCaseText));

        $parts = [
            'Lorem',
            'Ipsum',
            'Dolor',
            'Sit',
        ];

        $string = ucfirst($this->camelCaseText); // 'LoremIpsumDolorSit'
        self::assertEquals($parts, Regex::getCamelCaseParts($string));
    }

    public function testCamelCase2humanReadable()
    {
        self::assertEquals('', Regex::camelCase2humanReadable(''));
        self::assertEquals('lorem', Regex::camelCase2humanReadable('lorem'));

        self::assertEquals($this->simpleText, Regex::camelCase2humanReadable($this->camelCaseText));
        self::assertEquals(ucfirst($this->simpleText), Regex::camelCase2humanReadable($this->camelCaseText, true));
    }

    public function testCamelCase2simpleLowercase()
    {
        self::assertEquals('', Regex::camelCase2simpleLowercase(''));
        self::assertEquals('lorem', Regex::camelCase2simpleLowercase('lorem'));
        self::assertEquals('Lorem', Regex::camelCase2simpleLowercase('Lorem', '', false));
        self::assertEquals('lorem-ipsum-dolor-sit', Regex::camelCase2simpleLowercase($this->camelCaseText, '-'));
        self::assertEquals('lorem-Ipsum-Dolor-Sit', Regex::camelCase2simpleLowercase($this->camelCaseText, '-', false));
    }

    public function testIsValidUrl()
    {
        $validUrls = [
            'http://php.net',
            'http://php.net/',
            'http://php.net/docs.php',
            'http://php.net/get-involved.php',
            'http://php.net/manual/en/function.preg-match.php',
            'http://domain.com/BigLetters',
            'http://domain.com/Another-Big-Letters',
            'http://domain.com/?a=1&b=c2d',
            'http://domAin.COM/?a=1&B=c2D',
            'http://domain.com/index.php?a=1&b=c2d',
            'http://domain.com/another-page-2.php?a=1&b=c2d',
            'https://domain.com',
            'https://domain.com/',
        ];

        $invalidUrls = [
            '',
            null,
            false,
            true,
            0,
            1,
            123,
            '123',
            'http:',
            'http://',
            'http://abc',
            'ftp://def',
        ];

        foreach ($validUrls as $url) {
            self::assertTrue(Regex::isValidUrl($url));
        }

        foreach ($invalidUrls as $url) {
            self::assertFalse(Regex::isValidUrl($url));
        }
    }

    public function testIsSubPathOf()
    {
        self::assertFalse(Regex::isSubPathOf(null, null));
        self::assertFalse(Regex::isSubPathOf('', ''));

        self::assertFalse(Regex::isSubPathOf('', '/my/directory'));
        self::assertFalse(Regex::isSubPathOf('/my/file', ''));
        self::assertFalse(Regex::isSubPathOf('/my/file', '/my/directory'));

        self::assertTrue(Regex::isSubPathOf('/my/directory', '/my/directory'));
        self::assertTrue(Regex::isSubPathOf('/my/directory/', '/my/directory'));
        self::assertTrue(Regex::isSubPathOf('/my/directory', '/my/directory/'));
        self::assertTrue(Regex::isSubPathOf('/my/directory/', '/my/directory/'));

        self::assertTrue(Regex::isSubPathOf('/my/another/directory/another/file', '/my/another/directory'));
    }

    public function testIsLetterOrDigit()
    {
        self::assertTrue(Regex::isLetterOrDigit('a'));
        self::assertTrue(Regex::isLetterOrDigit(10));
        self::assertFalse(Regex::isLetterOrDigit(';'));
    }

    public function testStartsWith()
    {
        $string = 'Lorem ipsum dolor sit amet';

        $beginning = 'Lor';
        self::assertTrue(Regex::startsWith($string, $beginning));

        $beginning = 'L';
        self::assertTrue(Regex::startsWith($string, $beginning));

        $beginning = 'X';
        self::assertFalse(Regex::startsWith($string, $beginning));

        $string = '1234567890';
        $beginning = '1';
        self::assertTrue(Regex::startsWith($string, $beginning));

        $beginning = ';';
        self::assertFalse(Regex::startsWith($string, $beginning));
    }

    public function testStartsWithDirectorySeparator()
    {
        /*
         * Slash as separator
         */
        $separatorSlash = '/';

        self::assertTrue(Regex::startsWithDirectorySeparator('/my/extra/directory', $separatorSlash));
        self::assertFalse(Regex::startsWithDirectorySeparator('my/extra/directory', $separatorSlash));

        /*
         * Backslash as separator
         */
        $separatorBackslash = '\\';

        self::assertTrue(Regex::startsWithDirectorySeparator('\my\extra\directory', $separatorBackslash));
        self::assertFalse(Regex::startsWithDirectorySeparator('my\extra\directory', $separatorBackslash));
    }

    public function testEndsWithDirectorySeparator()
    {
        /*
         * Slash as separator
         */
        $separatorSlash = '/';

        self::assertTrue(Regex::endsWithDirectorySeparator('my simple text/', $separatorSlash));
        self::assertFalse(Regex::endsWithDirectorySeparator('my simple text', $separatorSlash));

        /*
         * Backslash as separator
         */
        $separatorBackslash = '\\';

        self::assertTrue(Regex::endsWithDirectorySeparator('my simple text\\', $separatorBackslash));
        self::assertFalse(Regex::endsWithDirectorySeparator('my simple text', $separatorBackslash));
    }

    public function testEndsWith()
    {
        self::assertFalse(Regex::endsWith($this->simpleText, '\.\.\.'));
        self::assertFalse(Regex::endsWith($this->simpleText, '\.'));
        self::assertTrue(Regex::endsWith($this->simpleText, 't'));
    }

    public function testIsSetUriParameter()
    {
        $uri = 'www.domain.com/?name=phil&type=4';

        $parameterName = 'type';
        self::assertTrue(Regex::isSetUriParameter($uri, $parameterName));

        $parameterName = 'color';
        self::assertFalse(Regex::isSetUriParameter($uri, $parameterName));
    }

    public function testContainsEntities()
    {
        self::assertFalse(Regex::containsEntities('Lorem ipsum'));
        self::assertTrue(Regex::containsEntities('Lorem ipsum &raquo;'));
    }

    public function testContains()
    {
        self::assertTrue(Regex::contains($this->simpleText, 'ipsum'));
        self::assertFalse(Regex::contains($this->simpleText, 'neque'));
    }

    public function testIsFileName()
    {
        $filePath = __FILE__;
        $directoryPath = dirname($filePath);

        self::assertTrue(Regex::isFileName($filePath));
        self::assertFalse(Regex::isFileName($directoryPath));
    }

    public function testIsQuoted()
    {
        self::assertTrue(Regex::isQuoted('\'lorem ipsum\''));
        self::assertTrue(Regex::isQuoted('"lorem ipsum"'));

        self::assertFalse(Regex::isQuoted('lorem ipsum'));
        self::assertFalse(Regex::isQuoted(new \stdClass()));
    }

    public function testIsWindowsBasedPath()
    {
        self::assertTrue(Regex::isWindowsBasedPath('C:\path\to\directory'));
        self::assertTrue(Regex::isWindowsBasedPath('C:\path\to\file.jpg'));

        self::assertFalse(Regex::isWindowsBasedPath('/path/to/directory'));
        self::assertFalse(Regex::isWindowsBasedPath('/path/to/file.jpg'));
    }

    public function testIsValidNip()
    {
        self::assertFalse(Regex::isValidNip(null));
        self::assertFalse(Regex::isValidNip(''));
        self::assertFalse(Regex::isValidNip(1234));
        self::assertFalse(Regex::isValidNip(1234567890));
        self::assertFalse(Regex::isValidNip(0000000000));
        self::assertFalse(Regex::isValidNip('1234567890'));
        self::assertFalse(Regex::isValidNip('0000000000'));
        self::assertFalse(Regex::isValidNip('abc'));
        self::assertFalse(Regex::isValidNip($this->simpleText));

        self::assertTrue(Regex::isValidNip('7340009469')); // Onet S.A.
        self::assertTrue(Regex::isValidNip('5252530705')); // Facebook Poland sp. z o.o.
    }

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->simpleText = 'lorem ipsum dolor sit';
        $this->camelCaseText = str_replace(' ', '', lcfirst(ucwords($this->simpleText))); // 'loremIpsumDolorSit'
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        unset($this->simpleText);
        unset($this->camelCaseText);
    }
}