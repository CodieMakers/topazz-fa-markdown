<?php

namespace Topazz\Module\FontAwesomeMarkdown;

use Topazz\Module\Module;

class FontAwesomeMarkdownModule extends Module {

    protected $name = "font-awesome-markdown";

    public function isNeeded(): bool {
        return true;
    }

    public function run() {
        $markdown = $this->container->markdown;
        $markdown->addExtension(new FontAwesomeMarkdownExtension());
    }
}