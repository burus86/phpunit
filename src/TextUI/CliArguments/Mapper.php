<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\CliArguments;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Mapper
{
    /**
     * @throws Exception
     */
    public function mapToLegacyArray(Configuration $arguments): array
    {
        $result = [
            'extensions'            => [],
            'listGroups'            => false,
            'listSuites'            => false,
            'listTests'             => false,
            'listTestsXml'          => false,
            'loadedExtensions'      => [],
            'unavailableExtensions' => [],
            'notLoadedExtensions'   => [],
        ];

        if ($arguments->hasColors()) {
            $result['colors'] = $arguments->colors();
        }

        if ($arguments->hasColumns()) {
            $result['columns'] = $arguments->columns();
        }

        if ($arguments->hasWarmCoverageCache()) {
            $result['warmCoverageCache'] = $arguments->warmCoverageCache();
        }

        if ($arguments->hasCoverageClover()) {
            $result['coverageClover'] = $arguments->coverageClover();
        }

        if ($arguments->hasCoverageCobertura()) {
            $result['coverageCobertura'] = $arguments->coverageCobertura();
        }

        if ($arguments->hasCoverageCrap4J()) {
            $result['coverageCrap4J'] = $arguments->coverageCrap4J();
        }

        if ($arguments->hasCoverageHtml()) {
            $result['coverageHtml'] = $arguments->coverageHtml();
        }

        if ($arguments->hasCoveragePhp()) {
            $result['coveragePHP'] = $arguments->coveragePhp();
        }

        if ($arguments->hasCoverageText()) {
            $result['coverageText'] = $arguments->coverageText();
        }

        if ($arguments->hasCoverageTextShowUncoveredFiles()) {
            $result['coverageTextShowUncoveredFiles'] = $arguments->hasCoverageTextShowUncoveredFiles();
        }

        if ($arguments->hasCoverageTextShowOnlySummary()) {
            $result['coverageTextShowOnlySummary'] = $arguments->coverageTextShowOnlySummary();
        }

        if ($arguments->hasCoverageXml()) {
            $result['coverageXml'] = $arguments->coverageXml();
        }

        if ($arguments->hasPathCoverage()) {
            $result['pathCoverage'] = $arguments->pathCoverage();
        }

        if ($arguments->hasDebug()) {
            $result['debug'] = $arguments->debug();
        }

        if ($arguments->hasHelp()) {
            $result['help'] = $arguments->help();
        }

        if ($arguments->hasFilter()) {
            $result['filter'] = $arguments->filter();
        }

        if ($arguments->hasGroups()) {
            $result['groups'] = $arguments->groups();
        }

        if ($arguments->hasExcludeGroups()) {
            $result['excludeGroups'] = $arguments->excludeGroups();
        }

        if ($arguments->hasTestsCovering()) {
            $result['testsCovering'] = $arguments->testsCovering();
        }

        if ($arguments->hasTestsUsing()) {
            $result['testsUsing'] = $arguments->testsUsing();
        }

        if ($arguments->hasIncludePath()) {
            $result['includePath'] = $arguments->includePath();
        }

        if ($arguments->hasJunitLogfile()) {
            $result['junitLogfile'] = $arguments->junitLogfile();
        }

        if ($arguments->hasTeamcityLogfile()) {
            $result['teamcityLogfile'] = $arguments->teamcityLogfile();
        }

        if ($arguments->hasExecutionOrder()) {
            $result['executionOrder'] = $arguments->executionOrder();
        }

        if ($arguments->hasExecutionOrderDefects()) {
            $result['executionOrderDefects'] = $arguments->executionOrderDefects();
        }

        if ($arguments->hasExtensions()) {
            $result['extensions'] = $arguments->extensions();
        }

        if ($arguments->hasUnavailableExtensions()) {
            $result['unavailableExtensions'] = $arguments->unavailableExtensions();
        }

        if ($arguments->hasResolveDependencies()) {
            $result['resolveDependencies'] = $arguments->resolveDependencies();
        }

        if ($arguments->hasProcessIsolation()) {
            $result['processIsolation'] = $arguments->processIsolation();
        }

        if ($arguments->hasRepeat()) {
            $result['repeat'] = $arguments->repeat();
        }

        if ($arguments->hasStderr()) {
            $result['stderr'] = $arguments->stderr();
        }

        if ($arguments->hasStopOnDefect()) {
            $result['stopOnDefect'] = $arguments->stopOnDefect();
        }

        if ($arguments->hasStopOnError()) {
            $result['stopOnError'] = $arguments->stopOnError();
        }

        if ($arguments->hasStopOnFailure()) {
            $result['stopOnFailure'] = $arguments->stopOnFailure();
        }

        if ($arguments->hasStopOnWarning()) {
            $result['stopOnWarning'] = $arguments->stopOnWarning();
        }

        if ($arguments->hasStopOnIncomplete()) {
            $result['stopOnIncomplete'] = $arguments->stopOnIncomplete();
        }

        if ($arguments->hasStopOnRisky()) {
            $result['stopOnRisky'] = $arguments->stopOnRisky();
        }

        if ($arguments->hasStopOnSkipped()) {
            $result['stopOnSkipped'] = $arguments->stopOnSkipped();
        }

        if ($arguments->hasFailOnEmptyTestSuite()) {
            $result['failOnEmptyTestSuite'] = $arguments->failOnEmptyTestSuite();
        }

        if ($arguments->hasFailOnIncomplete()) {
            $result['failOnIncomplete'] = $arguments->failOnIncomplete();
        }

        if ($arguments->hasFailOnRisky()) {
            $result['failOnRisky'] = $arguments->failOnRisky();
        }

        if ($arguments->hasFailOnSkipped()) {
            $result['failOnSkipped'] = $arguments->failOnSkipped();
        }

        if ($arguments->hasFailOnWarning()) {
            $result['failOnWarning'] = $arguments->failOnWarning();
        }

        if ($arguments->hasTestdoxGroups()) {
            $result['testdoxGroups'] = $arguments->testdoxGroups();
        }

        if ($arguments->hasTestdoxExcludeGroups()) {
            $result['testdoxExcludeGroups'] = $arguments->testdoxExcludeGroups();
        }

        if ($arguments->hasTestdoxHtmlFile()) {
            $result['testdoxHTMLFile'] = $arguments->testdoxHtmlFile();
        }

        if ($arguments->hasTestdoxTextFile()) {
            $result['testdoxTextFile'] = $arguments->testdoxTextFile();
        }

        if ($arguments->hasTestdoxXmlFile()) {
            $result['testdoxXMLFile'] = $arguments->testdoxXmlFile();
        }

        if ($arguments->hasNoExtensions()) {
            $result['noExtensions'] = $arguments->noExtensions();
        }

        if ($arguments->hasNoCoverage()) {
            $result['noCoverage'] = $arguments->noCoverage();
        }

        if ($arguments->hasNoLogging()) {
            $result['noLogging'] = $arguments->noLogging();
        }

        if ($arguments->hasNoInteraction()) {
            $result['noInteraction'] = $arguments->noInteraction();
        }

        if ($arguments->hasBackupGlobals()) {
            $result['backupGlobals'] = $arguments->backupGlobals();
        }

        if ($arguments->hasBackupStaticProperties()) {
            $result['backupStaticProperties'] = $arguments->backupStaticProperties();
        }

        if ($arguments->hasVerbose()) {
            $result['verbose'] = $arguments->verbose();
        }

        if ($arguments->hasReportUselessTests()) {
            $result['reportUselessTests'] = $arguments->reportUselessTests();
        }

        if ($arguments->hasStrictCoverage()) {
            $result['strictCoverage'] = $arguments->strictCoverage();
        }

        if ($arguments->hasDisableCodeCoverageIgnore()) {
            $result['disableCodeCoverageIgnore'] = $arguments->disableCodeCoverageIgnore();
        }

        if ($arguments->hasBeStrictAboutChangesToGlobalState()) {
            $result['beStrictAboutChangesToGlobalState'] = $arguments->beStrictAboutChangesToGlobalState();
        }

        if ($arguments->hasDisallowTestOutput()) {
            $result['disallowTestOutput'] = $arguments->disallowTestOutput();
        }

        if ($arguments->hasDefaultTimeLimit()) {
            $result['defaultTimeLimit'] = $arguments->defaultTimeLimit();
        }

        if ($arguments->hasEnforceTimeLimit()) {
            $result['enforceTimeLimit'] = $arguments->enforceTimeLimit();
        }

        if ($arguments->hasReverseList()) {
            $result['reverseList'] = $arguments->reverseList();
        }

        if ($arguments->hasCoverageFilter()) {
            $result['coverageFilter'] = $arguments->coverageFilter();
        }

        if ($arguments->hasRandomOrderSeed()) {
            $result['randomOrderSeed'] = $arguments->randomOrderSeed();
        }

        if ($arguments->hasPlainTextTrace()) {
            $result['plainTextTrace'] = $arguments->plainTextTrace();
        }

        if ($arguments->hasTeamCityPrinter()) {
            $result['teamCityPrinter'] = $arguments->teamCityPrinter();
        }

        if ($arguments->hasTestDoxPrinter()) {
            $result['testdoxPrinter'] = $arguments->testdoxPrinter();
        }

        return $result;
    }
}
