<?php
/**
 * TeamsApi
 * PHP version 5
 *
 * @category Class
 * @package  Caplinked
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CapLinked API v1.0
 *
 * Core information security endpoints for managing files/folders, users/groups, uploads/downloads, and more.
 *
 * OpenAPI spec version: 2017-05-23
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Caplinked\Api;

use \Caplinked\ApiClient;
use \Caplinked\ApiException;
use \Caplinked\Configuration;
use \Caplinked\ObjectSerializer;

/**
 * TeamsApi Class Doc Comment
 *
 * @category Class
 * @package  Caplinked
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeamsApi
{
    /**
     * API Client
     *
     * @var \Caplinked\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Caplinked\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Caplinked\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Caplinked\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Caplinked\ApiClient $apiClient set the API client
     *
     * @return TeamsApi
     */
    public function setApiClient(\Caplinked\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteTeamsIdMemberships
     *
     * Remove team member
     *
     * @param int $id ID of team from which user will be removed (required)
     * @param int $user_id ID of user to remove (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return void
     */
    public function deleteTeamsIdMemberships($id, $user_id)
    {
        list($response) = $this->deleteTeamsIdMembershipsWithHttpInfo($id, $user_id);
        return $response;
    }

    /**
     * Operation deleteTeamsIdMembershipsWithHttpInfo
     *
     * Remove team member
     *
     * @param int $id ID of team from which user will be removed (required)
     * @param int $user_id ID of user to remove (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTeamsIdMembershipsWithHttpInfo($id, $user_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteTeamsIdMemberships');
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling deleteTeamsIdMemberships');
        }
        // parse inputs
        $resourcePath = "/teams/{id}/memberships";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/teams/{id}/memberships'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getTeams
     *
     * List all teams in organization
     *
     * @throws \Caplinked\ApiException on non-2xx response
     * @return \Caplinked\Model\Team
     */
    public function getTeams()
    {
        list($response) = $this->getTeamsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getTeamsWithHttpInfo
     *
     * List all teams in organization
     *
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of \Caplinked\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeamsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/teams";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Caplinked\Model\Team',
                '/teams'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Caplinked\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Caplinked\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTeamsId
     *
     * Get team information
     *
     * @param int $id ID of the Team (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return \Caplinked\Model\Team
     */
    public function getTeamsId($id)
    {
        list($response) = $this->getTeamsIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getTeamsIdWithHttpInfo
     *
     * Get team information
     *
     * @param int $id ID of the Team (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of \Caplinked\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeamsIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTeamsId');
        }
        // parse inputs
        $resourcePath = "/teams/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Caplinked\Model\Team',
                '/teams/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Caplinked\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Caplinked\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTeamsIdMemberships
     *
     * Get list of team members
     *
     * @param int $id ID of team for which users will be listed (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return \Caplinked\Model\Membership[]
     */
    public function getTeamsIdMemberships($id)
    {
        list($response) = $this->getTeamsIdMembershipsWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getTeamsIdMembershipsWithHttpInfo
     *
     * Get list of team members
     *
     * @param int $id ID of team for which users will be listed (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of \Caplinked\Model\Membership[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeamsIdMembershipsWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTeamsIdMemberships');
        }
        // parse inputs
        $resourcePath = "/teams/{id}/memberships";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Caplinked\Model\Membership[]',
                '/teams/{id}/memberships'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Caplinked\Model\Membership[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Caplinked\Model\Membership[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTeamsIdWatermarkSettings
     *
     * List custom watermarks for a team
     *
     * @param int $id ID of team (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return \Caplinked\Model\CustomWatermarkSetting
     */
    public function getTeamsIdWatermarkSettings($id)
    {
        list($response) = $this->getTeamsIdWatermarkSettingsWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getTeamsIdWatermarkSettingsWithHttpInfo
     *
     * List custom watermarks for a team
     *
     * @param int $id ID of team (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of \Caplinked\Model\CustomWatermarkSetting, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTeamsIdWatermarkSettingsWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTeamsIdWatermarkSettings');
        }
        // parse inputs
        $resourcePath = "/teams/{id}/watermark_settings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Caplinked\Model\CustomWatermarkSetting',
                '/teams/{id}/watermark_settings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Caplinked\Model\CustomWatermarkSetting', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Caplinked\Model\CustomWatermarkSetting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postTeams
     *
     * Create team
     *
     * @param string $team_name Name of the team (required)
     * @param int $team_allowed_workspaces Maximum workspaces for team (optional, default to 1)
     * @param int $team_allowed_admins Maximum number of admins for team (optional, default to 10)
     * @param bool $team_drm_enabled Toggle DRM (feature availability in workspaces) (optional)
     * @param bool $team_watermarking Toggle watermarking (feature availability in workspaces) (optional)
     * @param bool $team_suppress_emails Toggle email invites (optional, default to true)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return \Caplinked\Model\Team
     */
    public function postTeams($team_name, $team_allowed_workspaces = '1', $team_allowed_admins = '10', $team_drm_enabled = null, $team_watermarking = null, $team_suppress_emails = 'true')
    {
        list($response) = $this->postTeamsWithHttpInfo($team_name, $team_allowed_workspaces, $team_allowed_admins, $team_drm_enabled, $team_watermarking, $team_suppress_emails);
        return $response;
    }

    /**
     * Operation postTeamsWithHttpInfo
     *
     * Create team
     *
     * @param string $team_name Name of the team (required)
     * @param int $team_allowed_workspaces Maximum workspaces for team (optional, default to 1)
     * @param int $team_allowed_admins Maximum number of admins for team (optional, default to 10)
     * @param bool $team_drm_enabled Toggle DRM (feature availability in workspaces) (optional)
     * @param bool $team_watermarking Toggle watermarking (feature availability in workspaces) (optional)
     * @param bool $team_suppress_emails Toggle email invites (optional, default to true)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of \Caplinked\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTeamsWithHttpInfo($team_name, $team_allowed_workspaces = '1', $team_allowed_admins = '10', $team_drm_enabled = null, $team_watermarking = null, $team_suppress_emails = 'true')
    {
        // verify the required parameter 'team_name' is set
        if ($team_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_name when calling postTeams');
        }
        // parse inputs
        $resourcePath = "/teams";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // form params
        if ($team_name !== null) {
            $formParams['team[name]'] = $this->apiClient->getSerializer()->toFormValue($team_name);
        }
        // form params
        if ($team_allowed_workspaces !== null) {
            $formParams['team[allowed_workspaces]'] = $this->apiClient->getSerializer()->toFormValue($team_allowed_workspaces);
        }
        // form params
        if ($team_allowed_admins !== null) {
            $formParams['team[allowed_admins]'] = $this->apiClient->getSerializer()->toFormValue($team_allowed_admins);
        }
        // form params
        if ($team_drm_enabled !== null) {
            $formParams['team[drm_enabled]'] = $this->apiClient->getSerializer()->toFormValue($team_drm_enabled);
        }
        // form params
        if ($team_watermarking !== null) {
            $formParams['team[watermarking]'] = $this->apiClient->getSerializer()->toFormValue($team_watermarking);
        }
        // form params
        if ($team_suppress_emails !== null) {
            $formParams['team[suppress_emails]'] = $this->apiClient->getSerializer()->toFormValue($team_suppress_emails);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Caplinked\Model\Team',
                '/teams'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Caplinked\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Caplinked\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postTeamsIdMemberships
     *
     * Add team member
     *
     * @param int $id ID of team to which user will be added (required)
     * @param int $user_id ID of user to add (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return \Caplinked\Model\Membership
     */
    public function postTeamsIdMemberships($id, $user_id)
    {
        list($response) = $this->postTeamsIdMembershipsWithHttpInfo($id, $user_id);
        return $response;
    }

    /**
     * Operation postTeamsIdMembershipsWithHttpInfo
     *
     * Add team member
     *
     * @param int $id ID of team to which user will be added (required)
     * @param int $user_id ID of user to add (required)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of \Caplinked\Model\Membership, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTeamsIdMembershipsWithHttpInfo($id, $user_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling postTeamsIdMemberships');
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling postTeamsIdMemberships');
        }
        // parse inputs
        $resourcePath = "/teams/{id}/memberships";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // form params
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Caplinked\Model\Membership',
                '/teams/{id}/memberships'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Caplinked\Model\Membership', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Caplinked\Model\Membership', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putTeamsId
     *
     * Update team
     *
     * @param int $id ID of team to update (required)
     * @param string $team_name Name of the team (optional)
     * @param int $team_team_owner_id User ID of the team owner (optional)
     * @param int $team_allowed_workspaces Maximum workspaces for team (optional)
     * @param int $team_allowed_admins Maximum number of admins for team (optional)
     * @param bool $team_drm_enabled Toggle DRM (feature availability in workspaces) (optional)
     * @param bool $team_watermarking Toggle watermarking (feature availability in workspaces) (optional)
     * @param bool $team_suppress_emails Toggle email invites (optional)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return \Caplinked\Model\Team
     */
    public function putTeamsId($id, $team_name = null, $team_team_owner_id = null, $team_allowed_workspaces = null, $team_allowed_admins = null, $team_drm_enabled = null, $team_watermarking = null, $team_suppress_emails = null)
    {
        list($response) = $this->putTeamsIdWithHttpInfo($id, $team_name, $team_team_owner_id, $team_allowed_workspaces, $team_allowed_admins, $team_drm_enabled, $team_watermarking, $team_suppress_emails);
        return $response;
    }

    /**
     * Operation putTeamsIdWithHttpInfo
     *
     * Update team
     *
     * @param int $id ID of team to update (required)
     * @param string $team_name Name of the team (optional)
     * @param int $team_team_owner_id User ID of the team owner (optional)
     * @param int $team_allowed_workspaces Maximum workspaces for team (optional)
     * @param int $team_allowed_admins Maximum number of admins for team (optional)
     * @param bool $team_drm_enabled Toggle DRM (feature availability in workspaces) (optional)
     * @param bool $team_watermarking Toggle watermarking (feature availability in workspaces) (optional)
     * @param bool $team_suppress_emails Toggle email invites (optional)
     * @throws \Caplinked\ApiException on non-2xx response
     * @return array of \Caplinked\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function putTeamsIdWithHttpInfo($id, $team_name = null, $team_team_owner_id = null, $team_allowed_workspaces = null, $team_allowed_admins = null, $team_drm_enabled = null, $team_watermarking = null, $team_suppress_emails = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putTeamsId');
        }
        // parse inputs
        $resourcePath = "/teams/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // form params
        if ($team_name !== null) {
            $formParams['team[name]'] = $this->apiClient->getSerializer()->toFormValue($team_name);
        }
        // form params
        if ($team_team_owner_id !== null) {
            $formParams['team[team_owner_id]'] = $this->apiClient->getSerializer()->toFormValue($team_team_owner_id);
        }
        // form params
        if ($team_allowed_workspaces !== null) {
            $formParams['team[allowed_workspaces]'] = $this->apiClient->getSerializer()->toFormValue($team_allowed_workspaces);
        }
        // form params
        if ($team_allowed_admins !== null) {
            $formParams['team[allowed_admins]'] = $this->apiClient->getSerializer()->toFormValue($team_allowed_admins);
        }
        // form params
        if ($team_drm_enabled !== null) {
            $formParams['team[drm_enabled]'] = $this->apiClient->getSerializer()->toFormValue($team_drm_enabled);
        }
        // form params
        if ($team_watermarking !== null) {
            $formParams['team[watermarking]'] = $this->apiClient->getSerializer()->toFormValue($team_watermarking);
        }
        // form params
        if ($team_suppress_emails !== null) {
            $formParams['team[suppress_emails]'] = $this->apiClient->getSerializer()->toFormValue($team_suppress_emails);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Caplinked\Model\Team',
                '/teams/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Caplinked\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Caplinked\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
