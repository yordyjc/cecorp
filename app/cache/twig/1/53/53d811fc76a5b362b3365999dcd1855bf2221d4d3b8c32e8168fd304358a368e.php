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

/* default/course_home/activity.tpl */
class __TwigTemplate_85bdcb612484861716d6f867929223ec29921befc635c0290bbd0b484ee94698 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["block"], "title", [])) {
                // line 3
                echo "        <div class=\"page-header\">
            <h4 class=\"title-tools\">";
                // line 4
                echo $this->getAttribute($context["block"], "title", []);
                echo "</h4>
        </div>
    ";
            }
            // line 7
            echo "
    <div class=\"row\">
        <div class=\"";
            // line 9
            echo $this->getAttribute($context["block"], "class", []);
            echo "\">
            ";
            // line 10
            if ((api_get_setting("homepage_view") == "activity")) {
                // line 11
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 12
                    echo "            <div class=\"offset2 col-md-4 course-tool\">
                ";
                    // line 13
                    echo $this->getAttribute($context["item"], "extra", []);
                    echo "
                ";
                    // line 14
                    echo $this->getAttribute($context["item"], "visibility", []);
                    echo "
                ";
                    // line 15
                    echo $this->getAttribute($context["item"], "only_icon_small", []);
                    echo "
                ";
                    // line 16
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if ((api_get_setting("homepage_view") == "activity_big")) {
                // line 22
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    echo "            <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"course-tool\">
                    <div class=\"big_icon\">
                        ";
                    // line 26
                    echo $this->getAttribute($this->getAttribute($context["item"], "tool", []), "image", []);
                    echo "
                    </div>
                    <div class=\"content\">
                        ";
                    // line 29
                    echo $this->getAttribute($context["item"], "visibility", []);
                    echo "
                        ";
                    // line 30
                    echo $this->getAttribute($context["item"], "extra", []);
                    echo "
                        ";
                    // line 31
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "
                    </div>
                </div>
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "            ";
            }
            // line 37
            echo "        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/course_home/activity.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  128 => 36,  117 => 31,  113 => 30,  109 => 29,  103 => 26,  98 => 23,  93 => 22,  91 => 21,  88 => 20,  85 => 19,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  61 => 12,  56 => 11,  54 => 10,  50 => 9,  46 => 7,  40 => 4,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/course_home/activity.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\course_home\\activity.tpl");
    }
}
