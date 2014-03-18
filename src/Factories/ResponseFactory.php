<?php

namespace Shale\Response\Factories
{
  class ResponseFactory extends ResponseFactoryBase
  {
    public function ok($message, $args = array())
    {
      return $this->send($message, 200);
    }

    public function notFound($message)
    {
      return $this->send($message, 404);
    }

    public function internalServerError($message)
    {
      return $this->send("An unexpected error occurred: ". $message, 500);
    }
  }
}
