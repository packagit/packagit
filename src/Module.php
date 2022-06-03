<?php

namespace Packagit;

use Illuminate\Support\Str;

class Module
{

    /**
     * @var string
     */
    private $packageName;

    /**
     * @param string $packageName
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }

    /**
     * @param string      $key
     * @param null|string $default
     *
     * @return mixed
     */
    public function config(string $key, $default = null)
    {
        return config('packagit.' . $key, $default);
    }

    /**
     * Get name in lower case.
     *
     * @return string
     */
    public function getLowerName(): string
    {
        return strtolower($this->packageName);
    }

    public function getStudlyName()
    {
        return Str::studly($this->packageName);
    }

    /**
     * Get class namespace.
     *
     * @return string
     */
    public function getClassNamespace()
    {
        $namespace = $this->config('namespace');
        $namespace .= '\\' . $this->getStudlyName();
        $namespace = str_replace('/', '\\', $namespace);

        return trim($namespace, '\\');
    }

    /**
     * Handle call __toString.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getStudlyName();
    }
}
