<?php

declare(strict_types=1);

namespace AcquiroPay;

trait MakesHttpRequests
{
    /** @var Api */
    public $api;

    /** @var string */
    public $serviceName;

    /**
     * @param string $method
     * @param string $uri
     * @param array $parameters
     * @return array
     * @throws Exceptions\ForbiddenException
     * @throws Exceptions\NotFoundException
     */
    public function callService(string $method, string $uri, array $parameters = null): array
    {
        $data = json_decode(json_encode($this->api->callService($this->serviceName, $method, $uri, $parameters)), true);

        if (!is_array($data)) {
            // todo throw error?
            return [];
        }

        return $data;
    }

    /**
     * @param string $uri
     *
     * @param array|null $parameters
     * @return mixed
     * @throws Exceptions\ForbiddenException
     * @throws Exceptions\NotFoundException
     */
    protected function get(string $uri, array $parameters = null): array
    {
        return $this->callService('GET', $uri, $parameters);
    }

    /**
     * @param string $uri
     * @param array|null $parameters
     * @return mixed
     * @throws Exceptions\ForbiddenException
     * @throws Exceptions\NotFoundException
     */
    protected function post(string $uri, array $parameters = null): array
    {
        return $this->callService('POST', $uri, $parameters);
    }

    /**
     * @param string $uri
     * @param array|null $parameters
     * @return mixed
     * @throws Exceptions\ForbiddenException
     * @throws Exceptions\NotFoundException
     */
    protected function put(string $uri, array $parameters = null): array
    {
        return $this->callService('PUT', $uri, $parameters);
    }

    /**
     * @param string $uri
     * @param array|null $parameters
     * @return mixed
     * @throws Exceptions\ForbiddenException
     * @throws Exceptions\NotFoundException
     */
    protected function delete(string $uri, array $parameters = null): array
    {
        return $this->callService('DELETE', $uri, $parameters);
    }
}
