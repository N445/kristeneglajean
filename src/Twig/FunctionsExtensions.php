<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class FunctionsExtensions extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('filter_name', [$this, 'doSomething']),
        ];
    }
    
    public function getFunctions(): array
    {
        return [
            new TwigFunction('youtubeIframe', [$this, 'youtubeIframe'], ['is_safe' => ['html']]),
            new TwigFunction('vimeoIframe', [$this, 'vimeoIframe'], ['is_safe' => ['html']]),
        ];
    }
    
    public function youtubeIframe(string $videoId)
    {
        return '
        <div class="embed-responsive embed-responsive-16by9">
            <iframe
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/' . $videoId . '"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            frameborder="0"
                    >
            </iframe>
        </div>
                ';
    }
    
    public function vimeoIframe(string $videoId)
    {
        return '
        <div class="embed-responsive embed-responsive-16by9">
            <iframe
                            class="embed-responsive-item"
                            src="https://player.vimeo.com/video/' . $videoId . '"
                            allow="autoplay; fullscreen"
                            allowfullscreen
                            frameborder="0"
                    >
            </iframe>
        </div>
                ';
    }
}
