<?php

namespace App\Twig;

use Illuminate\Foundation\Vite;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class ViteExtension extends AbstractExtension
{

    protected Vite $vite;

    public function __construct(Vite $vite)
    {
        $this->vite = $vite;
    }

    public function getName(): string
    {
        return 'TwigBridge_Extension_Laravel_Vite';
    }

    /**
     * @returns TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction(
                'vite',
                function () {
                    return call_user_func_array($this->vite,func_get_args());
                },
                [
                    'is_safe' => ['html'],
                ]
            ),
        ];
    }
}
