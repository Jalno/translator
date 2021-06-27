<?php
namespace Jalno\Translator;

use Jalno\Lumen\Packages\PackageAbstract;

class Package extends PackageAbstract
{
    public function getProviders(): array
    {
        return [
            Providers\TranslatorServiceProvider::class,
        ];
    }

    public function basePath(): string
    {
        return __DIR__;
    }

    public function getNamespace(): string
    {
        return __NAMESPACE__;
    }
}
