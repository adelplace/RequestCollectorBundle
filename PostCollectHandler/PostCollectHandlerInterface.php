<?php

namespace Deuzu\RequestCollectorBundle\PostCollectHandler;

use Deuzu\RequestCollectorBundle\Entity\Request as RequestObject;

/**
 * Interface PostCollectHandlerInterface
 *
 * @author Florian Touya <florian.touya@gmail.com>
 */
interface PostCollectHandlerInterface
{
    /**
     * @param RequestObject $requestObject
     *
     * @return Response|null
     */
    public function execute(RequestObject $requestObject);
}