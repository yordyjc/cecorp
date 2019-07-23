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

/* default/exercise/partials/result_exercise.tpl */
class __TwigTemplate_ef7c0d582650685f74521f0e48236a643b1b1aa49f60065aa7c1bb6d00f2a00f extends \Twig\Template
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
        echo "<div class=\"question-result\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <h3>";
        // line 4
        echo $this->getAttribute(($context["data"] ?? null), "title", []);
        echo "</h3>
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"user-avatar\">
                        <img src=\"";
        // line 8
        echo $this->getAttribute(($context["data"] ?? null), "avatar", []);
        echo "\">
                    </div>
                    <div class=\"user-info\">
                        <strong>";
        // line 11
        echo $this->getAttribute(($context["data"] ?? null), "name_url", []);
        echo "</strong><br>
                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"group-data\">
                        <div class=\"list-data username\">
                            <span class=\"item\">";
        // line 17
        echo get_lang("Username");
        echo "</span>
                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        // line 18
        echo $this->getAttribute(($context["data"] ?? null), "username", []);
        echo "
                        </div>
                        <div class=\"list-data start-date\">
                            <span class=\"item\">";
        // line 21
        echo get_lang("StartDate");
        echo "</span>
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 22
        echo $this->getAttribute(($context["data"] ?? null), "start_date", []);
        echo "
                        </div>
                        <div class=\"list-data duration\">
                            <span class=\"item\">";
        // line 25
        echo get_lang("Duration");
        echo "</span>
                            <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> ";
        // line 26
        echo $this->getAttribute(($context["data"] ?? null), "duration", []);
        echo "
                        </div>
                        <div class=\"list-data ip\">
                            <span class=\"item\">";
        // line 29
        echo get_lang("IP");
        echo "</span>
                            <i class=\"fa fa-laptop\" aria-hidden=\"true\"></i> ";
        // line 30
        echo $this->getAttribute(($context["data"] ?? null), "ip", []);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/exercise/partials/result_exercise.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  87 => 29,  81 => 26,  77 => 25,  71 => 22,  67 => 21,  61 => 18,  57 => 17,  48 => 11,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/exercise/partials/result_exercise.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\exercise\\partials\\result_exercise.tpl");
    }
}
