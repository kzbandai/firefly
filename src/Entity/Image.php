<?php
declare(strict_types = 1);

namespace Firefly\Entity;

class Image
{
    use EntityTrait;

    public function setBothImageUrl(string $url)
    {
        $this->content['originalContentUrl'] = $this->content['previewImageUrl'] = $url;
    }

    public function setOriginalContentUrl(string $url)
    {
        $this->content['originalContentUrl'] = $url;
    }

    public function setPreviewImageUrl(string $url)
    {
        $this->content['previewImageUrl'] = $url;
    }
}