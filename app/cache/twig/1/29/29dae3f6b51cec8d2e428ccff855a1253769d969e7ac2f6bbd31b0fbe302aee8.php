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

/* default/gradebook/my_certificates.tpl */
class __TwigTemplate_287900b3867cc0bbe5a98b8c75593b85f5e05ed47d851ac01d202bcf8e102c6d extends \Twig\Template
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
        if ( !twig_test_empty(($context["course_list"] ?? null))) {
            // line 2
            echo "    <h2 class=\"page-header\">";
            echo get_lang("Courses");
            echo "</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 7
            echo get_lang("Course");
            echo "</th>
                    <th class=\"text-right\">";
            // line 8
            echo get_lang("Score");
            echo "</th>
                    <th class=\"text-center\">";
            // line 9
            echo get_lang("Date");
            echo "</th>
                    <th class=\"text-right\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["course_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 15
                echo "                    <tr>
                        <td>";
                // line 16
                echo $this->getAttribute($context["row"], "course", []);
                echo "</td>
                        <td class=\"text-right\">";
                // line 17
                echo $this->getAttribute($context["row"], "score", []);
                echo "</td>
                        <td class=\"text-center\">";
                // line 18
                echo $this->getAttribute($context["row"], "date", []);
                echo "</td>
                        <td class=\"text-right\">
                            <a href=\"";
                // line 20
                echo $this->getAttribute($context["row"], "link", []);
                echo "\" target=\"_blank\" class=\"btn btn-default\">
                                <em class=\"fa fa-external-link\"></em> ";
                // line 21
                echo get_lang("Certificate");
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </tbody>
        </table>
    </div>
";
        }
        // line 30
        echo "
";
        // line 31
        if ( !twig_test_empty(($context["session_list"] ?? null))) {
            // line 32
            echo "    <h2 class=\"page-header\">";
            echo get_lang("Sessions");
            echo "</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 37
            echo get_lang("Session");
            echo "</th>
                    <th>";
            // line 38
            echo get_lang("Course");
            echo "</th>
                    <th class=\"text-right\">";
            // line 39
            echo get_lang("Score");
            echo "</th>
                    <th class=\"text-center\">";
            // line 40
            echo get_lang("Date");
            echo "</th>
                    <th class=\"text-right\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["session_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 46
                echo "                    <tr>
                        <td>";
                // line 47
                echo $this->getAttribute($context["row"], "session", []);
                echo "</td>
                        <td>";
                // line 48
                echo $this->getAttribute($context["row"], "course", []);
                echo "</td>
                        <td class=\"text-right\">";
                // line 49
                echo $this->getAttribute($context["row"], "score", []);
                echo "</td>
                        <td class=\"text-center\">";
                // line 50
                echo $this->getAttribute($context["row"], "date", []);
                echo "</td>
                        <td class=\"text-right\">
                            <a href=\"";
                // line 52
                echo $this->getAttribute($context["row"], "link", []);
                echo "\" target=\"_blank\" class=\"btn btn-default\">
                                <em class=\"fa fa-external-link\"></em> ";
                // line 53
                echo get_lang("Certificate");
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tbody>
        </table>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/gradebook/my_certificates.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 58,  160 => 53,  156 => 52,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  136 => 46,  132 => 45,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  103 => 32,  101 => 31,  98 => 30,  92 => 26,  81 => 21,  77 => 20,  72 => 18,  68 => 17,  64 => 16,  61 => 15,  57 => 14,  49 => 9,  45 => 8,  41 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/gradebook/my_certificates.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\gradebook\\my_certificates.tpl");
    }
}
