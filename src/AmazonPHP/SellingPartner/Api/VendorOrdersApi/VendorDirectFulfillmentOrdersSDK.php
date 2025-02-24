<?php

namespace AmazonPHP\SellingPartner\Api\VendorOrdersApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
final class VendorDirectFulfillmentOrdersSDK
{
    public const API_NAME = 'VendorDirectFulfillmentOrders';

    public const OPERATION_GETORDER = 'getOrder';

    public const OPERATION_GETORDER_PATH = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders/{purchaseOrderNumber}';
    public const OPERATION_GETORDERS = 'getOrders';

    public const OPERATION_GETORDERS_PATH = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders';
    public const OPERATION_SUBMITACKNOWLEDGEMENT = 'submitAcknowledgement';

    public const OPERATION_SUBMITACKNOWLEDGEMENT_PATH = '/vendor/directFulfillment/orders/2021-12-28/acknowledgements';

    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation getOrder
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Order
     */
    public function getOrder(AccessToken $accessToken, string $region, $purchase_order_number)
    {
        $request = $this->getOrderRequest($accessToken, $region, $purchase_order_number);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentOrders', 'getOrder', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentOrders', 'getOrder')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentOrders', 'getOrder'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentOrders',
                        'operation' => 'getOrder',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentOrders', 'getOrder', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentOrders', 'getOrder')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentOrders', 'getOrder'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentOrders',
                        'operation' => 'getOrder',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
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

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Order',
            []
        );
    }

    /**
     * Create request for operation 'getOrder'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function getOrderRequest(AccessToken $accessToken, string $region, $purchase_order_number) : RequestInterface
    {
        // verify the required parameter 'purchase_order_number' is set
        if ($purchase_order_number === null || (is_array($purchase_order_number) && count($purchase_order_number) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $purchase_order_number when calling getOrder'
            );
        }

        $resourcePath = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders/{purchaseOrderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';


        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }


        // path params
        if ($purchase_order_number !== null) {
            $resourcePath = str_replace(
                '{' . 'purchaseOrderNumber' . '}',
                ObjectSerializer::toPathValue($purchase_order_number),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
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
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation getOrders
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \DateTime $created_after Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTime $created_before Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param string $ship_from_party_id The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. (optional)
     * @param string $status Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. (optional)
     * @param int $limit The limit to the number of purchase orders returned. (optional)
     * @param string $sort_order Sort the list in ascending or descending order by order creation date. (optional)
     * @param string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     * @param bool $include_details When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. (optional, default to 'true')
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderList
     */
    public function getOrders(AccessToken $accessToken, string $region, $created_after, $created_before, $ship_from_party_id = null, $status = null, $limit = null, $sort_order = null, $next_token = null, $include_details = 'true')
    {
        $request = $this->getOrdersRequest($accessToken, $region, $created_after, $created_before, $ship_from_party_id, $status, $limit, $sort_order, $next_token, $include_details);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentOrders', 'getOrders', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentOrders', 'getOrders')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentOrders', 'getOrders'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentOrders',
                        'operation' => 'getOrders',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentOrders', 'getOrders', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentOrders', 'getOrders')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentOrders', 'getOrders'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentOrders',
                        'operation' => 'getOrders',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
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

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderList',
            []
        );
    }

    /**
     * Create request for operation 'getOrders'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \DateTime $created_after Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTime $created_before Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param string $ship_from_party_id The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. (optional)
     * @param string $status Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. (optional)
     * @param int $limit The limit to the number of purchase orders returned. (optional)
     * @param string $sort_order Sort the list in ascending or descending order by order creation date. (optional)
     * @param string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     * @param bool $include_details When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. (optional, default to 'true')
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function getOrdersRequest(AccessToken $accessToken, string $region, $created_after, $created_before, $ship_from_party_id = null, $status = null, $limit = null, $sort_order = null, $next_token = null, $include_details = 'true') : RequestInterface
    {
        // verify the required parameter 'created_after' is set
        if ($created_after === null || (is_array($created_after) && count($created_after) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $created_after when calling getOrders'
            );
        }
        // verify the required parameter 'created_before' is set
        if ($created_before === null || (is_array($created_before) && count($created_before) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $created_before when calling getOrders'
            );
        }
        if ($limit !== null && $limit > 100) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling VendorOrdersApi.getOrders, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling VendorOrdersApi.getOrders, must be bigger than or equal to 1.');
        }


        $resourcePath = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (is_array($ship_from_party_id)) {
            $ship_from_party_id = ObjectSerializer::serializeCollection($ship_from_party_id, '', true);
        }
        if ($ship_from_party_id !== null) {
            $queryParams['shipFromPartyId'] = ObjectSerializer::toString($ship_from_party_id);
        }
        // query params
        if (is_array($status)) {
            $status = ObjectSerializer::serializeCollection($status, '', true);
        }
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toString($status);
        }
        // query params
        if (is_array($limit)) {
            $limit = ObjectSerializer::serializeCollection($limit, '', true);
        }
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toString($limit);
        }
        // query params
        if (is_array($created_after)) {
            $created_after = ObjectSerializer::serializeCollection($created_after, '', true);
        }
        if ($created_after !== null) {
            $queryParams['createdAfter'] = ObjectSerializer::toString($created_after);
        }
        // query params
        if (is_array($created_before)) {
            $created_before = ObjectSerializer::serializeCollection($created_before, '', true);
        }
        if ($created_before !== null) {
            $queryParams['createdBefore'] = ObjectSerializer::toString($created_before);
        }
        // query params
        if (is_array($sort_order)) {
            $sort_order = ObjectSerializer::serializeCollection($sort_order, '', true);
        }
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toString($sort_order);
        }
        // query params
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toString($next_token);
        }
        // query params
        if (is_array($include_details)) {
            $include_details = ObjectSerializer::serializeCollection($include_details, '', true);
        }
        if ($include_details !== null) {
            $queryParams['includeDetails'] = ObjectSerializer::toString($include_details);
        }

        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }




        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
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
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation submitAcknowledgement
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TransactionId
     */
    public function submitAcknowledgement(AccessToken $accessToken, string $region, $body)
    {
        $request = $this->submitAcknowledgementRequest($accessToken, $region, $body);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentOrders', 'submitAcknowledgement', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentOrders', 'submitAcknowledgement')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentOrders', 'submitAcknowledgement'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentOrders',
                        'operation' => 'submitAcknowledgement',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentOrders', 'submitAcknowledgement', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentOrders', 'submitAcknowledgement')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentOrders', 'submitAcknowledgement'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentOrders',
                        'operation' => 'submitAcknowledgement',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
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

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TransactionId',
            []
        );
    }

    /**
     * Create request for operation 'submitAcknowledgement'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function submitAcknowledgementRequest(AccessToken $accessToken, string $region, $body) : RequestInterface
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling submitAcknowledgement'
            );
        }

        $resourcePath = '/vendor/directFulfillment/orders/2021-12-28/acknowledgements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';


        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }




        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'POST',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['content-type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (count($formParams) > 0) {
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
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

}
