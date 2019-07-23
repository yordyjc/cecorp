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

/* default/auth/inscription.tpl */
class __TwigTemplate_f88f6bbe2c08bfceebde0cdd2fdb7855fa98ace6167afd78c7bda3f12ef01ae6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate((((        // line 2
($context["hide_header"] ?? null) == true)) ? (api_find_template("layout/blank.tpl")) : (api_find_template("layout/layout_1_col.tpl"))), "default/auth/inscription.tpl", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "
";
        // line 9
        echo ($context["inscription_header"] ?? null);
        echo "
";
        // line 10
        echo ($context["inscription_content"] ?? null);
        echo "
";
        // line 11
        echo ($context["form"] ?? null);
        echo "
";
        // line 12
        echo ($context["text_after_registration"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/auth/inscription.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  54 => 11,  50 => 10,  46 => 9,  43 => 8,  40 => 7,  36 => 4,  30 => 2,  29 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/auth/inscription.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\auth\\inscription.tpl");
    }
}
