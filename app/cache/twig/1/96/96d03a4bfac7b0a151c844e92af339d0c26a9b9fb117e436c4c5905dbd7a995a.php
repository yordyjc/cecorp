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

/* default//user_portal/classic_courses_without_category.tpl */
class __TwigTemplate_b8df5027efe93a486c15d3839a139771a48c1324088c5aed212238d7b9b78e0f extends \Twig\Template
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
        if ( !twig_test_empty(($context["courses"] ?? null))) {
            // line 2
            echo "    <div class=\"classic-courses\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
                // line 8
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 9
                    echo "                            <span class=\"thumbnail\">
                                ";
                    // line 10
                    if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                        // line 11
                        echo "                                    <img src=\"";
                        echo $this->getAttribute($context["item"], "thumbnails", []);
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"
                                         alt=\"";
                        // line 12
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"/>
                                ";
                    } else {
                        // line 14
                        echo "                                    ";
                        echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                        echo "
                                ";
                    }
                    // line 16
                    echo "                            </span>
                        ";
                } else {
                    // line 18
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\" class=\"thumbnail\">
                                ";
                    // line 19
                    if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                        // line 20
                        echo "                                    <img src=\"";
                        echo $this->getAttribute($context["item"], "thumbnails", []);
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"
                                         alt=\"";
                        // line 21
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"/>
                                ";
                    } else {
                        // line 23
                        echo "                                    ";
                        echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                        echo "
                                ";
                    }
                    // line 25
                    echo "                            </a>
                        ";
                }
                // line 27
                echo "                    </div>
                    <div class=\"col-md-10\">
                        ";
                // line 29
                if (($this->getAttribute($context["item"], "edit_actions", []) != "")) {
                    // line 30
                    echo "                            <div class=\"pull-right\">
                                ";
                    // line 31
                    if (($this->getAttribute($context["item"], "document", []) == "")) {
                        // line 32
                        echo "                                    <a class=\"btn btn-default btn-sm\" href=\"";
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                ";
                    } else {
                        // line 36
                        echo "                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 37
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                        ";
                        // line 40
                        echo $this->getAttribute($context["item"], "document", []);
                        echo "
                                    </div>
                                ";
                    }
                    // line 43
                    echo "                            </div>
                        ";
                }
                // line 45
                echo "                        <h4 class=\"course-items-title\">
                            ";
                // line 46
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 47
                    echo "                                ";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo "
                            ";
                } else {
                    // line 49
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\">
                                    ";
                    // line 50
                    echo $this->getAttribute($context["item"], "title", []);
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo "
                                </a>
                                ";
                    // line 52
                    echo $this->getAttribute($context["item"], "notifications", []);
                    echo "
                                ";
                    // line 53
                    if ($this->getAttribute($context["item"], "is_special_course", [])) {
                        // line 54
                        echo "                                    ";
                        echo Display::get_image("klipper.png", 22, get_lang("CourseAutoRegister"));
                        echo "
                                ";
                    }
                    // line 56
                    echo "                            ";
                }
                // line 57
                echo "                        </h4>
                        <div class=\"course-items-session\">
                            <div class=\"list-teachers\">
                                ";
                // line 60
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) > 0)) {
                    // line 61
                    echo "                                    ";
                    echo Display::get_image("teacher.png", 16, get_lang("Professor"));
                    echo "
                                    ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 63
                        echo "                                        ";
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 64
                        echo "                                        ";
                        if ((($context["counter"] ?? null) > 1)) {
                            echo " | ";
                        }
                        // line 65
                        echo "                                        <a href=\"";
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
                    echo "                                ";
                }
                // line 71
                echo "                            </div>
                            ";
                // line 72
                if ($this->getAttribute($context["item"], "student_info", [])) {
                    // line 73
                    echo "                                ";
                    if ((( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", [])) ||  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "score", []))) ||  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", [])))) {
                        // line 74
                        echo "                                    <div class=\"course-student-info\">
                                        <div class=\"student-info\">
                                            ";
                        // line 76
                        if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "progress", []))) {
                            // line 77
                            echo "                                                ";
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
                            echo "                                                ";
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
                            echo "                                                ";
                            echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", []), "certificate", []));
                            echo "
                                            ";
                        }
                        // line 87
                        echo "                                        </div>
                                    </div>
                                ";
                    }
                    // line 90
                    echo "                            ";
                }
                // line 91
                echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default//user_portal/classic_courses_without_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 97,  280 => 91,  277 => 90,  272 => 87,  266 => 85,  264 => 84,  261 => 83,  255 => 81,  253 => 80,  250 => 79,  244 => 77,  242 => 76,  238 => 74,  235 => 73,  233 => 72,  230 => 71,  227 => 70,  216 => 67,  210 => 66,  205 => 65,  200 => 64,  197 => 63,  193 => 62,  188 => 61,  186 => 60,  181 => 57,  178 => 56,  172 => 54,  170 => 53,  166 => 52,  159 => 50,  154 => 49,  146 => 47,  144 => 46,  141 => 45,  137 => 43,  131 => 40,  125 => 37,  122 => 36,  114 => 32,  112 => 31,  109 => 30,  107 => 29,  103 => 27,  99 => 25,  93 => 23,  88 => 21,  81 => 20,  79 => 19,  74 => 18,  70 => 16,  64 => 14,  59 => 12,  52 => 11,  50 => 10,  47 => 9,  45 => 8,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default//user_portal/classic_courses_without_category.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\user_portal\\classic_courses_without_category.tpl");
    }
}
