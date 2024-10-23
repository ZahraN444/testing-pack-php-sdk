<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use MistAPILib\Controllers\OrgsNACPortalsController;
use MistAPILib\Exceptions;

class OrgsNACPortalsControllerTest extends BaseTestController
{
    /**
     * @var OrgsNACPortalsController OrgsNACPortalsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getOrgsNACPortalsController();
    }

    public function testListOrgNacPortals()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $page = 1;
        $limit = 100;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listOrgNacPortals($orgId, $page, $limit);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '[{"access_type":"wireless","cert_expire_time":365,"enable_telemetry":true,"exp' .
                'iry_notification_time":2,"name":"get-wifi","notify_expiry":true,"ssid":"Corp","' .
                'sso":{"idp_cert":"-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDo' .
                'wDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----","idp_sign_algo":"sha256","idp' .
                '_sso_url":"https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130","issu' .
                'er":"https://app.onelogin.com/saml/metadata/138130","nameid_format":"email","ss' .
                'o_role_matching":[{"assigned":"user","match":"Student"}],"use_sso_role_for_cert' .
                '":true}}]'
            )))
            ->assert();
    }

    public function testGetOrgNacPortal()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getOrgNacPortal($orgId, $nacportalId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"access_type":"wireless","cert_expire_time":365,"enable_telemetry":true,"expi' .
                'ry_notification_time":2,"name":"get-wifi","notify_expiry":true,"ssid":"Corp","s' .
                'so":{"idp_cert":"-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDow' .
                'DQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----","idp_sign_algo":"sha256","idp_' .
                'sso_url":"https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130","issue' .
                'r":"https://app.onelogin.com/saml/metadata/138130","nameid_format":"email","sso' .
                '_role_matching":[{"assigned":"user","match":"Student"}],"use_sso_role_for_cert"' .
                ':true}}'
            )))
            ->assert();
    }

    public function testUpdateOrgNacPortal()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->updateOrgNacPortal($orgId, $nacportalId, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"access_type":"wireless","cert_expire_time":365,"enable_telemetry":true,"expi' .
                'ry_notification_time":2,"name":"get-wifi","notify_expiry":true,"ssid":"Corp","s' .
                'so":{"idp_cert":"-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDow' .
                'DQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----","idp_sign_algo":"sha256","idp_' .
                'sso_url":"https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130","issue' .
                'r":"https://app.onelogin.com/saml/metadata/138130","nameid_format":"email","sso' .
                '_role_matching":[{"assigned":"user","match":"Student"}],"use_sso_role_for_cert"' .
                ':true}}'
            )))
            ->assert();
    }

    public function testCreateOrgNacPortal()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->createOrgNacPortal($orgId, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"access_type":"wireless","cert_expire_time":365,"enable_telemetry":true,"expi' .
                'ry_notification_time":2,"name":"get-wifi","notify_expiry":true,"ssid":"Corp","s' .
                'so":{"idp_cert":"-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDow' .
                'DQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----","idp_sign_algo":"sha256","idp_' .
                'sso_url":"https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130","issue' .
                'r":"https://app.onelogin.com/saml/metadata/138130","nameid_format":"email","sso' .
                '_role_matching":[{"assigned":"user","match":"Student"}],"use_sso_role_for_cert"' .
                ':true}}'
            )))
            ->assert();
    }

    public function testDeleteOrgNacPortal()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

        // Perform API call
        try {
            self::$controller->deleteOrgNacPortal($orgId, $nacportalId);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }

    public function testListOrgNacPortalSsoLatestFailures()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $page = 1;
        $limit = 100;
        $start = null;
        $end = null;
        $duration = '1d';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listOrgNacPortalSsoLatestFailures(
                $orgId,
                $nacportalId,
                $page,
                $limit,
                $start,
                $end,
                $duration
            );
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object('{"results":[{"detail":"string","saml_assertion_xml":"string","timestamp":0}]}')
            ))
            ->assert();
    }

    public function testUpdateOrgNacPortalTempalte()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $body = null;

        // Perform API call
        try {
            self::$controller->updateOrgNacPortalTempalte($orgId, $nacportalId, $body);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }

    public function testUploadOrgNacPortalImage()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $file = null;
        $json = null;

        // Perform API call
        try {
            self::$controller->uploadOrgNacPortalImage($orgId, $nacportalId, $file, $json);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }

    public function testDeleteOrgNacPortalImage()
    {
        // Parameters for the API call
        $orgId = '000000ab-00ab-00ab-00ab-0000000000ab';
        $nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

        // Perform API call
        try {
            self::$controller->deleteOrgNacPortalImage($orgId, $nacportalId);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }
}
