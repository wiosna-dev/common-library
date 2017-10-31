<?php

/**
 * (c) Meritoo.pl, http://www.meritoo.pl
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meritoo\Common\Test\Test\Base;

use DateTime;
use Generator;
use Meritoo\Common\Test\Base\BaseTestCase;
use Meritoo\Common\Type\OopVisibilityType;
use Meritoo\Common\Utilities\GeneratorUtility;

/**
 * Test case of the base test case with common methods and data providers
 *
 * @author    Krzysztof Niziol <krzysztof.niziol@meritoo.pl>
 * @copyright Meritoo.pl
 */
class BaseTestCaseTest extends BaseTestCase
{
    public function testConstructor()
    {
        static::assertConstructorVisibilityAndArguments(BaseTestCase::class, OopVisibilityType::IS_PUBLIC, 3);
    }

    public function testProvideEmptyValue()
    {
        $elements = [
            [''],
            ['   '],
            [null],
            [0],
            [false],
            [[]],
        ];

        $generator = (new SimpleTestCase())->provideEmptyValue();
        self::assertEquals($elements, GeneratorUtility::getGeneratorElements($generator));
    }

    public function testProvideBooleanValue()
    {
        $elements = [
            [false],
            [true],
        ];

        $generator = (new SimpleTestCase())->provideBooleanValue();
        self::assertEquals($elements, GeneratorUtility::getGeneratorElements($generator));
    }

    public function testProvideDateTimeInstance()
    {
        $elements = [
            [new DateTime()],
            [new DateTime('yesterday')],
            [new DateTime('now')],
            [new DateTime('tomorrow')],
        ];

        $generator = (new SimpleTestCase())->provideDateTimeInstance();
        self::assertEquals($elements, GeneratorUtility::getGeneratorElements($generator));
    }

    public function testProvideDateTimeRelativeFormat()
    {
        $elements = [
            ['now'],
            ['yesterday'],
            ['tomorrow'],
            ['back of 10'],
            ['front of 10'],
            ['last day of February'],
            ['first day of next month'],
            ['last day of previous month'],
            ['last day of next month'],
            ['Y-m-d'],
            ['Y-m-d 10:00'],
        ];

        $generator = (new SimpleTestCase())->provideDateTimeRelativeFormat();
        self::assertEquals($elements, GeneratorUtility::getGeneratorElements($generator));
    }

    public function testProvideNotExistingFilePath()
    {
        $elements = [
            ['lets-test.doc'],
            ['lorem/ipsum.jpg'],
            ['surprise/me/one/more/time.txt'],
        ];

        $generator = (new SimpleTestCase())->provideNotExistingFilePath();
        self::assertEquals($elements, GeneratorUtility::getGeneratorElements($generator));
    }

    /**
     * @param string $fileName      Name of file
     * @param string $directoryPath Path of directory containing the file
     *
     * @dataProvider provideFileNameAndDirectoryPath
     */
    public function testGetFilePathForTesting($fileName, $directoryPath)
    {
        $path = (new SimpleTestCase())->getFilePathForTesting($fileName, $directoryPath);

        if (!empty($directoryPath)) {
            $directoryPath .= '/';
        }

        $expectedContains = sprintf('/.data/tests/%s%s', $directoryPath, $fileName);
        static::assertContains($expectedContains, $path);
    }

    /**
     * Provides name of file and path of directory containing the file
     *
     * @return Generator
     */
    public function provideFileNameAndDirectoryPath()
    {
        yield[
            'abc.jpg',
            '',
        ];

        yield[
            'abc.def.jpg',
            '',
        ];

        yield[
            'abc.jpg',
            'def',
        ];

        yield[
            'abc.def.jpg',
            'def',
        ];
    }
}

/**
 * Simple test case
 *
 * @author    Krzysztof Niziol <krzysztof.niziol@meritoo.pl>
 * @copyright Meritoo.pl
 */
class SimpleTestCase extends BaseTestCase
{
}
