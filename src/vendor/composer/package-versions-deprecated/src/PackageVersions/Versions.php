<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'barryvdh/laravel-dompdf' => 'v2.0.0@1d47648c6cef37f715ecb8bcc5f5a656ad372e27',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'dflydev/dot-access-data' => 'v3.0.2@f41715465d65213d644d3141a6a93081be5d3549',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dompdf/dompdf' => 'v2.0.1@c5310df0e22c758c85ea5288175fc6cd777bc085',
  'dragonmantank/cron-expression' => 'v3.3.2@782ca5968ab8b954773518e9e49a6f892a34b2a8',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.16.0@523407fb06eb9e5f3d59889b3978d5bfe94299c8',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'graham-campbell/result-type' => 'v1.1.0@a878d45c1914464426dc94da61c9e1d36ae262a8',
  'guzzlehttp/guzzle' => '7.5.0@b50a2a1251152e43f6a37f0fa053e730a67d25ba',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '2.4.3@67c26b443f348a51926030c83481b85718457d3d',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'laminas/laminas-diactoros' => '2.17.0@5b32597aa46b83c8b85bb1cf9a6ed4fe7dd980c5',
  'laravel/framework' => 'v8.83.26@7411d9fa71c1b0fd73a33e225f14512b74e6c81e',
  'laravel/serializable-closure' => 'v1.2.2@47afb7fae28ed29057fdca37e16a84f90cc62fae',
  'laravel/tinker' => 'v2.7.2@dff39b661e827dae6e092412f976658df82dbac5',
  'laravel/ui' => 'v3.4.6@65ec5c03f7fee2c8ecae785795b829a15be48c2c',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.2.1@72ac6d807ee51a70ad376ee03a2387e8646e10f3',
  'league/commonmark' => '2.3.7@a36bd2be4f5387c0f3a8792a0d76b7d68865abbf',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'maatwebsite/excel' => '3.1.44@289c3320982510dacfe0dd00de68061a2b7f4a43',
  'maennchen/zipstream-php' => '2.2.1@211e9ba1530ea5260b45d90c9ea252f56ec52729',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'masterminds/html5' => '2.7.6@897eb517a343a2281f11bc5556d6548db7d93947',
  'milon/barcode' => '8.0.1@a1b1ee1a743c1368597f1742e6ee4765333a15a1',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'myclabs/php-enum' => '1.8.4@a867478eae49c9f59ece437ae7f9506bfaa27483',
  'nesbot/carbon' => '2.63.0@ad35dd71a6a212b98e4b87e97389b6fa85f0e347',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.8@02a54c4c872b99e4ec05c4aec54b5a06eb0f6368',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.5.0@76876c6cf3080bcb6f249d7d59705108166a6685',
  'phpoffice/phpspreadsheet' => '1.25.2@a317a09e7def49852400a4b3eca4a4b0790ceeb5',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.9@1acec99d6684a54ff92f8b548a4e41b566963778',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.15@ea59bb0edfaf9f28d18d8791410ee0355f317669',
  'symfony/css-selector' => 'v5.4.11@c1681789f059ab756001052164726ae88512ae3d',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/error-handler' => 'v5.4.15@539cf1428b8442303c6e876ad7bf5a7babd91091',
  'symfony/event-dispatcher' => 'v5.4.9@8e6ce1cc0279e3ff3c8ff0f43813bc88d21ca1bc',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/finder' => 'v5.4.11@7872a66f57caffa2916a584db1aa7f12adc76f8c',
  'symfony/http-foundation' => 'v5.4.15@75bd663ff2db90141bfb733682459d5bbe9e29c3',
  'symfony/http-kernel' => 'v5.4.15@fc63c8c3e1036d424820cc993a4ea163778dc5c7',
  'symfony/mime' => 'v5.4.14@1c118b253bb3495d81e95a6e3ec6c2766a98a0c4',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-iconv' => 'v1.27.0@927013f3aac555983a5059aada98e1907d842695',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/process' => 'v5.4.11@6e75fe6874cbc7e4773d049616ab450eff537bf1',
  'symfony/routing' => 'v5.4.15@5c9b129efe9abce9470e384bf65d8a7e262eee69',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/string' => 'v5.4.15@571334ce9f687e3e6af72db4d3b2a9431e4fd9ed',
  'symfony/translation' => 'v5.4.14@f0ed07675863aa6e3939df8b1bc879450b585cab',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/var-dumper' => 'v5.4.14@6894d06145fefebd9a4c7272baa026a1c394a430',
  'tijsverkoyen/css-to-inline-styles' => '2.2.5@4348a3a06651827a27d989ad1d13efec6bb49b19',
  'vlucas/phpdotenv' => 'v5.5.0@1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.1@0e5c6bf4af22cae60a3f1098b75c25d70bac242f',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'facade/flare-client-php' => '1.10.0@213fa2c69e120bca4c51ba3e82ed1834ef3f41b8',
  'facade/ignition' => '2.17.6@6acd82e986a2ecee89e2e68adfc30a1936d1ab7c',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'filp/whoops' => '2.14.6@f7948baaa0330277c729714910336383286305da',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'mockery/mockery' => '1.5.1@e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nunomaduro/collision' => 'v5.11.0@8b610eef8582ccdc05d8f2ab23305e2d37049461',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '9.2.18@12fddc491826940cf9b7e88ad9664cf51f0f6d0a',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.26@851867efcbb6a1b992ec515c71cdcf20d895e9d2',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.0@fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
