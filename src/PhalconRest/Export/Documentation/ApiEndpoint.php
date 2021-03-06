<?php

namespace PhalconRest\Export\Documentation;

class ApiEndpoint
{
    protected $name;
    protected $description;
    protected $httpMethod;
    protected $path;
    protected $paramsDescription;
    protected $exampleResponse;
    protected $exampleRequest;
    protected $allowedRoles = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getParamsDescription()
    {
        return $this->paramsDescription;
    }

    public function setParamsDescription($paramsDescription)
    {
        $this->paramsDescription = $paramsDescription;
    }

    public function getExampleResponse()
    {
        return $this->exampleResponse;
    }

    public function setExampleResponse($exampleResponse)
    {
        $this->exampleResponse = $exampleResponse;
    }

    public function getExampleRequest()
    {
        return $this->exampleRequest;
    }

    public function setExampleRequest($exampleRequest)
    {
        $this->exampleRequest = $exampleRequest;
    }

    public function getAllowedRoles()
    {
        return $this->allowedRoles;
    }

    public function setAllowedRoles($allowedRoles)
    {
        $this->allowedRoles = $allowedRoles;
    }
}
