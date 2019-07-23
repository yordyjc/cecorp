<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/mail/subject_registration_platform.tpl */
class __TwigTemplate_4381a7a94488bb539d704251347a6dda522bb270d7f9c8efdcf3ffd5951ca9a0 extends \Twig\Template
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
        echo ((((("[" . $this->getAttribute(($context["_s"] ?? null), "site_name", [])) . "] ") . get_lang("YourReg")) . " ") . $this->getAttribute(($context["_s"] ?? null), "site_name", []));
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/mail/subject_registration_platform.tpl";
    }

    public function isTraitable()
    {
        return false;
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
        return new Source("", "default/mail/subject_registration_platform.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\mail\\subject_registration_platform.tpl");
    }
}
