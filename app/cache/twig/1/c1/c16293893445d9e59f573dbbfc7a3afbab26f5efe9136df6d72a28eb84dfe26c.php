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

/* default/layout/hot_course_item.tpl */
class __TwigTemplate_ec18be73f92d4f9f9ef787a39b594c0f28544945011fec27fb294b80a61f6720 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["hot_courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["item"], "title", [])) {
                // line 3
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"items items-hotcourse\">
                <div class=\"image\">
                        <a title=\"";
                // line 6
                echo $this->getAttribute($context["item"], "title", []);
                echo "\" href=\"";
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "course/";
                echo $this->getAttribute($context["item"], "real_id", []);
                echo "/about\">
                            <img src=\"";
                // line 7
                echo $this->getAttribute($context["item"], "course_image_large", []);
                echo "\" class=\"img-responsive\" alt=\"";
                echo $this->getAttribute($context["item"], "title", []);
                echo "\">
                        </a>

                    ";
                // line 10
                if (($this->getAttribute($context["item"], "categoryName", []) != "")) {
                    // line 11
                    echo "                        <span class=\"category\">";
                    echo $this->getAttribute($context["item"], "categoryName", []);
                    echo "</span>
                        <div class=\"cribbon\"></div>
                    ";
                }
                // line 14
                echo "                    <div class=\"user-actions\">";
                echo $this->getAttribute($context["item"], "description_button", []);
                echo "</div>
                </div>
                <div class=\"description\">
                    <div class=\"block-title\">
                        <h5 class=\"title\">
                            ";
                // line 19
                if (($this->getAttribute($context["item"], "is_course_student", []) || $this->getAttribute($context["item"], "is_course_teacher", []))) {
                    // line 20
                    echo "                                <a alt=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "courses/";
                    echo $this->getAttribute($context["item"], "code", []);
                    echo "/\">
                                    ";
                    // line 21
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "
                                </a>
                            ";
                } else {
                    // line 24
                    echo "                                <a alt=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "course/";
                    echo $this->getAttribute($context["item"], "real_id", []);
                    echo "/about\">
                                    ";
                    // line 25
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "
                                </a>
                            ";
                }
                // line 28
                echo "                        </h5>
                    </div>
                    <div class=\"ranking\">
                        ";
                // line 31
                echo $this->getAttribute($context["item"], "rating_html", []);
                echo "
                    </div>
                    <div class=\"toolbar row\">
                        <div class=\"col-sm-4\">
                            ";
                // line 35
                if ($this->getAttribute($context["item"], "price", [])) {
                    // line 36
                    echo "                                ";
                    echo $this->getAttribute($context["item"], "price", []);
                    echo "
                            ";
                }
                // line 38
                echo "                        </div>
                        <div class=\"col-sm-8\">
                            <div class=\"btn-group\" role=\"group\">
                                ";
                // line 41
                echo $this->getAttribute($context["item"], "register_button", []);
                echo "
                                ";
                // line 42
                echo $this->getAttribute($context["item"], "unsubscribe_button", []);
                echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/layout/hot_course_item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  137 => 41,  132 => 38,  126 => 36,  124 => 35,  117 => 31,  112 => 28,  106 => 25,  95 => 24,  89 => 21,  78 => 20,  76 => 19,  67 => 14,  60 => 11,  58 => 10,  50 => 7,  42 => 6,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/hot_course_item.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\layout\\hot_course_item.tpl");
    }
}
