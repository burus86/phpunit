--TEST--
Test incorrect testFile is reported
--ARGS--
--no-configuration nonExistingFile.php
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Test file "nonExistingFile.php" not found
