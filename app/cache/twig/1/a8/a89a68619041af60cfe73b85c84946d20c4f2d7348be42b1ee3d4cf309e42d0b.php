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

/* default/social/search.tpl */
class __TwigTemplate_a296789080e66ae5833af208ea97f8ba7028ee8d1973be46642cc5be3a7986fd extends \Twig\Template
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
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/social/search.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"social-network-menu\">
            ";
        // line 7
        echo ($context["social_avatar_block"] ?? null);
        echo "
            ";
        // line 8
        echo ($context["social_menu_block"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"col-md-9\">
        <div class=\"form-search-sm\">
            ";
        // line 13
        echo ($context["search_form"] ?? null);
        echo "
        </div>
        <div class=\"list-search-sm\">
            ";
        // line 16
        echo ($context["social_search"] ?? null);
        echo "
        </div>
    </div>
</div>

";
        // line 21
        if ((isset($context["form_modals"]) || array_key_exists("form_modals", $context))) {
            // line 22
            echo "    ";
            echo ($context["form_modals"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/social/search.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  72 => 21,  64 => 16,  58 => 13,  50 => 8,  46 => 7,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/search.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\social\\search.tpl");
    }
}
