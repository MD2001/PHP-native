<?php

namespace Core;

class Container
{
    protected $contatiner;
    public function bind($key, $resolver)
    {
        $this->contatiner[$key] = $resolver;
    }

    public function resolve($key)
    {
        if (!array_key_exists($key, $this->contatiner)) {
            throw new \Exception("your key is not found {$key}");
        }
        $resolve = $this->contatiner[$key];
        return call_user_func($resolve);
    }
}
