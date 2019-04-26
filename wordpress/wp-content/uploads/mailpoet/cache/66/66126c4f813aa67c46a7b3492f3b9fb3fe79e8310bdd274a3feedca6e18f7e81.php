<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/social/blockIcon.hbs */
class __TwigTemplate_29e3b5eeca7aee4e2c8c88fc259c71bce5d592a0d5b3c6e3e46abf531af5342b extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a href=\"{{ link }}\" onClick=\"return false;\"><img src=\"{{#ifCond image '!=' ''}}{{ image }}{{ else }}{{ imageMissingSrc }}{{/ifCond}}\" onerror=\"if (this.src != '{{ imageMissingSrc }}') this.src = '{{ imageMissingSrc }}';\" alt=\"{{ text }}\" style=\"width: {{ width }}; height: {{ height }};\"/></a>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/social/blockIcon.hbs";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/social/blockIcon.hbs", "/home/gen-004/Documents/TRAVAIL/DEV/wp_project/wordpress/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/social/blockIcon.hbs");
    }
}
