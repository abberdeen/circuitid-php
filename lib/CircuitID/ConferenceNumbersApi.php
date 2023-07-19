<?php
/**
 * ConferenceNumbersApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Circuit ID REST API
 *
 * # Introduction Welcome to the Circuit ID REST API!                  Circuit ID&reg; is an innovative cloud communications platform that redefines your connectivity experience. Our cutting-edge AI-powered solution seamlessly integrates calling, meetings, messaging, voicemail, fax, SIP Trunking, mobile broadband, and mobile phone services, accessible wherever you and your devices go.                  Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide.   We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.                  Happy coding!
 *
 * The version of the OpenAPI document: 0.47.8
 * Contact: support@circuitid.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\CircuitID;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ConferenceNumbersApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConferenceNumbersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'findConferenceNumbers' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation findConferenceNumbers
     *
     * Find multiple objects
     *
     * @param  mixed $search Filter results by the specified value. (optional)
     * @param  mixed $limit $limit will return only the number of results you specify. (optional)
     * @param  mixed $skip $skip will skip the specified number of results. (optional)
     * @param  mixed $sort $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending). (optional)
     * @param  mixed $select $select allows to pick which fields to include in the result. (optional)
     * @param  mixed $or Find all records that match any of the given criteria. (optional)
     * @param  mixed $and Find all records that match all of the given criteria. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findConferenceNumbers'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function findConferenceNumbers($search = null, $limit = null, $skip = null, $sort = null, $select = null, $or = null, $and = null, string $contentType = self::contentTypes['findConferenceNumbers'][0])
    {
        $this->findConferenceNumbersWithHttpInfo($search, $limit, $skip, $sort, $select, $or, $and, $contentType);
    }

    /**
     * Operation findConferenceNumbersWithHttpInfo
     *
     * Find multiple objects
     *
     * @param  mixed $search Filter results by the specified value. (optional)
     * @param  mixed $limit $limit will return only the number of results you specify. (optional)
     * @param  mixed $skip $skip will skip the specified number of results. (optional)
     * @param  mixed $sort $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending). (optional)
     * @param  mixed $select $select allows to pick which fields to include in the result. (optional)
     * @param  mixed $or Find all records that match any of the given criteria. (optional)
     * @param  mixed $and Find all records that match all of the given criteria. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findConferenceNumbers'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function findConferenceNumbersWithHttpInfo($search = null, $limit = null, $skip = null, $sort = null, $select = null, $or = null, $and = null, string $contentType = self::contentTypes['findConferenceNumbers'][0])
    {
        $request = $this->findConferenceNumbersRequest($search, $limit, $skip, $sort, $select, $or, $and, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation findConferenceNumbersAsync
     *
     * Find multiple objects
     *
     * @param  mixed $search Filter results by the specified value. (optional)
     * @param  mixed $limit $limit will return only the number of results you specify. (optional)
     * @param  mixed $skip $skip will skip the specified number of results. (optional)
     * @param  mixed $sort $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending). (optional)
     * @param  mixed $select $select allows to pick which fields to include in the result. (optional)
     * @param  mixed $or Find all records that match any of the given criteria. (optional)
     * @param  mixed $and Find all records that match all of the given criteria. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findConferenceNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findConferenceNumbersAsync($search = null, $limit = null, $skip = null, $sort = null, $select = null, $or = null, $and = null, string $contentType = self::contentTypes['findConferenceNumbers'][0])
    {
        return $this->findConferenceNumbersAsyncWithHttpInfo($search, $limit, $skip, $sort, $select, $or, $and, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findConferenceNumbersAsyncWithHttpInfo
     *
     * Find multiple objects
     *
     * @param  mixed $search Filter results by the specified value. (optional)
     * @param  mixed $limit $limit will return only the number of results you specify. (optional)
     * @param  mixed $skip $skip will skip the specified number of results. (optional)
     * @param  mixed $sort $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending). (optional)
     * @param  mixed $select $select allows to pick which fields to include in the result. (optional)
     * @param  mixed $or Find all records that match any of the given criteria. (optional)
     * @param  mixed $and Find all records that match all of the given criteria. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findConferenceNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findConferenceNumbersAsyncWithHttpInfo($search = null, $limit = null, $skip = null, $sort = null, $select = null, $or = null, $and = null, string $contentType = self::contentTypes['findConferenceNumbers'][0])
    {
        $returnType = '';
        $request = $this->findConferenceNumbersRequest($search, $limit, $skip, $sort, $select, $or, $and, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'findConferenceNumbers'
     *
     * @param  mixed $search Filter results by the specified value. (optional)
     * @param  mixed $limit $limit will return only the number of results you specify. (optional)
     * @param  mixed $skip $skip will skip the specified number of results. (optional)
     * @param  mixed $sort $sort will sort based on the object you provide. It can contain a list of properties by which to sort mapped to the order (1 ascending, -1 descending). (optional)
     * @param  mixed $select $select allows to pick which fields to include in the result. (optional)
     * @param  mixed $or Find all records that match any of the given criteria. (optional)
     * @param  mixed $and Find all records that match all of the given criteria. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findConferenceNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findConferenceNumbersRequest($search = null, $limit = null, $skip = null, $sort = null, $select = null, $or = null, $and = null, string $contentType = self::contentTypes['findConferenceNumbers'][0])
    {









        $resourcePath = '/conferencenumbers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search,
            '$search', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            '$limit', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $skip,
            '$skip', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            '$sort', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            '$select', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $or,
            '$or', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $and,
            '$and', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
