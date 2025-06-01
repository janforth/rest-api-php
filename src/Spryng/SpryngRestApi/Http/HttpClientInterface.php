<?php

namespace Spryng\SpryngRestApi\Http;

interface HttpClientInterface
{
    /**
     * HttpClientInterface constructor.
     * @param Request|null $req
     */
    public function __construct(Request $req = null);

    /**
     * Executes the currently active request or $req if it is set.
     *
     * @param Request|null $req
     * @return Response
     */
    public function send(Request|null $req = null);

    /**
     * Sets the current request to be activated to $req
     *
     * @param Request|null $req
     * @return HttpClientInterface
     */
    public function setActiveRequest(Request|null $req);

    /**
     * Returns the lastResponse of the last request that was send.
     *
     * @return Response
     */
    public function getLastResponse();
}