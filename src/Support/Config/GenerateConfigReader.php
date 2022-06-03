<?php

namespace Packagit\Support\Config;


class GenerateConfigReader
{
    public static function read(string $value) : GeneratorPath
    {
        return new GeneratorPath(config("packagit.paths.generator.$value"));
    }
}
