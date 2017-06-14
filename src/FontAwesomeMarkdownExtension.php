<?php

namespace Topazz\Module\FontAwesomeMarkdown;

use Topazz\View\Markdown\Extension;

class FontAwesomeMarkdownExtension extends Extension {

    public function filter(string $markdown): string {
        return preg_replace_callback(
            '/(?::)(fa-[\w\d-\s]+)(?::)/',
            function (array $matches) {
                return "<i class='fa {$matches[1]}'></i>";
            }, $markdown);
    }
}