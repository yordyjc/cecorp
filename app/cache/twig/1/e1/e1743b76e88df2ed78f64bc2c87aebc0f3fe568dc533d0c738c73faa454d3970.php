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

/* default//user_portal/classic_courses_with_category.tpl */
class __TwigTemplate_5c6a60159d93ea70e8fa007254e9980b61beeaa43ffd7f14c8878a4173e7b403 extends \Twig\Template
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
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default//user_portal/classic_courses_with_category.tpl", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 4
            echo "    <div class=\"classic-courses\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "            ";
                if ($this->getAttribute($context["category"], "courses", [])) {
                    // line 7
                    echo "                ";
                    ob_start();
                    // line 8
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "courses", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 9
                        echo "                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            ";
                        // line 11
                        if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                            // line 12
                            echo "                                <span class=\"thumbnail\">
                                        ";
                            // line 13
                            if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                                // line 14
                                echo "                                            <img src=\"";
                                echo $this->getAttribute($context["item"], "thumbnails", []);
                                echo "\" title=\"";
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"
                                                 alt=\"";
                                // line 15
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"/>
                                        ";
                            } else {
                                // line 17
                                echo "                                            ";
                                echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                                echo "
                                        ";
                            }
                            // line 19
                            echo "                                    </span>
                            ";
                        } else {
                            // line 21
                            echo "                                <a href=\"";
                            echo $this->getAttribute($context["item"], "link", []);
                            echo "\" class=\"thumbnail\">
                                    ";
                            // line 22
                            if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                                // line 23
                                echo "                                        <img src=\"";
                                echo $this->getAttribute($context["item"], "thumbnails", []);
                                echo "\" title=\"";
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"
                                             alt=\"";
                                // line 24
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"/>
                                    ";
                            } else {
                                // line 26
                                echo "                                        ";
                                echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                                echo "
                                    ";
                            }
                            // line 28
                            echo "                                </a>
                            ";
                        }
                        // line 30
                        echo "                        </div>
                        <div class=\"col-md-10\">
                            ";
                        // line 32
                        if (($this->getAttribute($context["item"], "edit_actions", []) != "")) {
                            // line 33
                            echo "                                <div class=\"pull-right\">
                                    ";
                            // line 34
                            if (($this->getAttribute($context["item"], "document", []) == "")) {
                                // line 35
                                echo "                                        <a class=\"btn btn-default btn-sm\" href=\"";
                                echo $this->getAttribute($context["item"], "edit_actions", []);
                                echo "\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    ";
                            } else {
                                // line 39
                                echo "                                        <div class=\"btn-group\" role=\"group\">
                                            <a class=\"btn btn-default btn-sm\" href=\"";
                                // line 40
                                echo $this->getAttribute($context["item"], "edit_actions", []);
                                echo "\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                            </a>
                                            ";
                                // line 43
                                echo $this->getAttribute($context["item"], "document", []);
                                echo "
                                        </div>
                                    ";
                            }
                            // line 46
                            echo "                                </div>
                            ";
                        }
                        // line 48
                        echo "                            <h4 class=\"course-items-title\">
                                ";
                        // line 49
                        if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                            // line 50
                            echo "                                    ";
                            echo $this->getAttribute($context["item"], "title", []);
                            echo " ";
                            echo $this->getAttribute($context["item"], "code_course", []);
                            echo "
                                ";
                        } else {
                            // line 52
                            echo "                                    <a href=\"";
                            echo $this->getAttribute($context["item"], "link", []);
                            echo "\">
                                        ";
                            // line 53
                            echo $this->getAttribute($context["item"], "title", []);
                            echo " ";
                            echo $this->getAttribute($context["item"], "code_course", []);
                            echo "
                                    </a>
                                    ";
                            // line 55
                            echo $this->getAttribute($context["item"], "notifications", []);
                            echo "
                                ";
                        }
                        // line 57
                        echo "                            </h4>
                            <div class=\"course-items-session\">
                                <div class=\"list-teachers\">
                                    ";
                        // line 60
                        if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) > 0)) {
                            // line 61
                            echo "                                        <img src=\"";
                            echo Display::get_icon_path("teacher.png", 16);
                            echo "\" width=\"16\" height=\"16\">&nbsp;
                                        ";
                            // line 62
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                                // line 63
                                echo "                                            ";
                                $context["counter"] = (($context["counter"] ?? null) + 1);
                                // line 64
                                echo "                                            ";
                                if ((($context["counter"] ?? null) > 1)) {
                                    echo " | ";
                                }
                                // line 65
                                echo "                                            <a href=\"";
                                echo $this->getAttribute($context["teacher"], "url", []);
                                echo "\" class=\"ajax\"
                                               data-title=\"";
                                // line 66
                                echo $this->getAttribute($context["teacher"], "firstname", []);
                                echo " ";
                                echo $this->getAttribute($context["teacher"], "lastname", []);
                                echo "\">
                                                ";
                                // line 67
                                echo $this->getAttribute($context["teacher"], "firstname", []);
                                echo " ";
                                echo $this->getAttribute($context["teacher"], "lastname", []);
                                echo "
                                            </a>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 70
                            echo "                                    ";
                        }
                        // line 71
                        echo "                                </div>
                                ";
                        // line 72
                        if ($this->getAttribute($context["item"], "student_info", [])) {
                            // line 73
                            echo "                                    ";
                            if ((( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", [])) ||  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "score", []))) ||  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", [])))) {
                                // line 74
                                echo "                                        <div class=\"course-student-info\">
                                            <div class=\"student-info\">
                                                ";
                                // line 76
                                if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", []))) {
                                    // line 77
                                    echo "                                                    ";
                                    echo sprintf(get_lang("StudentCourseProgressX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", []));
                                    echo "
                                                ";
                                }
                                // line 79
                                echo "
                                                ";
                                // line 80
                                if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "score", []))) {
                                    // line 81
                                    echo "                                                    ";
                                    echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "score", []));
                                    echo "
                                                ";
                                }
                                // line 83
                                echo "
                                                ";
                                // line 84
                                if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", []))) {
                                    // line 85
                                    echo "                                                    ";
                                    echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", []));
                                    echo "
                                                ";
                                }
                                // line 87
                                echo "                                            </div>
                                        </div>
                                    ";
                            }
                            // line 90
                            echo "                                ";
                        }
                        // line 91
                        echo "                            </div>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "                ";
                    $context["course_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 96
                    echo "
                ";
                    // line 97
                    echo $context["display"]->getcollapse(("course_category_" . $this->getAttribute(                    // line 98
$context["category"], "id_category", [])), ((($this->getAttribute(                    // line 99
$context["category"], "title_category", []) . "<div class=\"pull-right\">") . $this->getAttribute($context["category"], "collapsable_link", [])) . "</div>"),                     // line 100
($context["course_content"] ?? null), false, ($this->getAttribute(                    // line 102
$context["category"], "collapsed", []) == 0));
                    // line 104
                    echo "
            ";
                }
                // line 106
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "    </div>
";
        }
        // line 109
        echo "
";
    }

    public function getTemplateName()
    {
        return "default//user_portal/classic_courses_with_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 109,  315 => 107,  309 => 106,  305 => 104,  303 => 102,  302 => 100,  301 => 99,  300 => 98,  299 => 97,  296 => 96,  293 => 95,  284 => 91,  281 => 90,  276 => 87,  270 => 85,  268 => 84,  265 => 83,  259 => 81,  257 => 80,  254 => 79,  248 => 77,  246 => 76,  242 => 74,  239 => 73,  237 => 72,  234 => 71,  231 => 70,  220 => 67,  214 => 66,  209 => 65,  204 => 64,  201 => 63,  197 => 62,  192 => 61,  190 => 60,  185 => 57,  180 => 55,  173 => 53,  168 => 52,  160 => 50,  158 => 49,  155 => 48,  151 => 46,  145 => 43,  139 => 40,  136 => 39,  128 => 35,  126 => 34,  123 => 33,  121 => 32,  117 => 30,  113 => 28,  107 => 26,  102 => 24,  95 => 23,  93 => 22,  88 => 21,  84 => 19,  78 => 17,  73 => 15,  66 => 14,  64 => 13,  61 => 12,  59 => 11,  55 => 9,  50 => 8,  47 => 7,  44 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default//user_portal/classic_courses_with_category.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\user_portal\\classic_courses_with_category.tpl");
    }
}
