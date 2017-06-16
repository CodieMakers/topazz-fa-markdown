<?php

namespace Topazz\Module\FontAwesomeMarkdown;

use Topazz\Module\Module;

class FontAwesomeMarkdownModule extends Module {

    protected $name = "fa-markdown";

    public function isNeeded(): bool {
        return true;
    }

    public function hasTemplates(): bool {
        return false;
    }

    public function getTemplateDir(): string {
        return "";
    }

    public function hasConfig(): bool {
        return false;
    }

    public function getConfigFilename(): string {
        return "";
    }

    public function run() {
        $markdown = $this->container->markdown;
        $markdown->addExtension(new FontAwesomeMarkdownExtension());
    }
}