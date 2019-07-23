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

/* default/course_progress/progress.tpl */
class __TwigTemplate_e64c52688d08430f4fdae3ad705b40ef1d9a26564aa0b0901ae5a637da0b9f88 extends \Twig\Template
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
        echo ($context["actions"] ?? null);
        echo "
";
        // line 2
        echo ($context["message"] ?? null);
        echo "
";
        // line 3
        echo ($context["flash_messages"] ?? null);
        echo "
";
        // line 4
        if ( !twig_test_empty(($context["data"] ?? null))) {
            // line 5
            $context["tutor"] = api_is_allowed_to_edit(false, true);
            // line 6
            echo "<div id=\"course-progress\" class=\"thematic\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"bar-progress\">
                <div class=\"pull-right\">
                    <div class=\"score-progress\">
                        <h3>";
            // line 12
            echo get_lang("Progress");
            echo ": <span id=\"div_result\">";
            echo ($context["score_progress"] ?? null);
            echo "</span> %</h3>
                    </div>
                </div>
            </div>
            <div class=\"table-responsive\">
                <table width=\"100%\" class=\"table table-hover\">
                    <tr>
                        <th style=\"width: 25%\">";
            // line 19
            echo get_lang("Thematic");
            echo "</th>
                        <th style=\"width: 40%\">";
            // line 20
            echo get_lang("ThematicPlan");
            echo "</th>
                        <th style=\"width: 35%\">";
            // line 21
            echo get_lang("ThematicAdvance");
            echo "</th>
                    </tr>
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "                        <tr>
                            <td id=\"id-thematic-";
                // line 25
                echo $this->getAttribute($context["item"], "id", []);
                echo "\">
                                ";
                // line 26
                if (twig_test_empty(($context["session_star"] ?? null))) {
                    // line 27
                    echo "                                    <h3>";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "</h3>
                                ";
                } else {
                    // line 29
                    echo "                                    <h3>";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo " ";
                    echo ($context["session_star"] ?? null);
                    echo "</h3>
                                ";
                }
                // line 31
                echo "                                ";
                echo $this->getAttribute($context["item"], "content", []);
                echo "
                                <div class=\"btn-group btn-group-sm\">
                                    ";
                // line 33
                echo $this->getAttribute($context["item"], "toolbar", []);
                echo "
                                </div>
                            </td>
                            <td>
                                ";
                // line 37
                if (($context["tutor"] ?? null)) {
                    // line 38
                    echo "                                <div class=\"pull-right\">
                                    <a title=\"";
                    // line 39
                    echo get_lang("EditThematicPlan");
                    echo "\" href=\"index.php?";
                    echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
                    echo "&origin=thematic_details&action=thematic_plan_list&thematic_id=";
                    echo $this->getAttribute($context["item"], "id", []);
                    echo "&width=700&height=500'\" class=\"btn btn-default\">
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                                ";
                }
                // line 44
                echo "                                <div class=\"thematic_plan_";
                echo $this->getAttribute($context["item"], "id", []);
                echo "\">
                                    ";
                // line 45
                if (twig_test_empty($this->getAttribute($context["item"], "thematic_plan", []))) {
                    // line 46
                    echo "                                    <div class=\"alert-thematic\">
                                        <div class=\"alert alert-info\" role=\"alert\">";
                    // line 47
                    echo get_lang("StillDoNotHaveAThematicPlan");
                    echo "</div>
                                    </div>
                                    ";
                } else {
                    // line 50
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "thematic_plan", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 51
                        echo "                                        <h4>";
                        echo $this->getAttribute($context["subitem"], "title", []);
                        echo "</h4>
                                        <p>";
                        // line 52
                        echo $this->getAttribute($context["subitem"], "description", []);
                        echo "</p>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                                    ";
                }
                // line 55
                echo "                                </div>
                            </td>
                            <td>
                                ";
                // line 58
                if (($context["tutor"] ?? null)) {
                    // line 59
                    echo "                                <div class=\"pull-right\">
                                    <a title=\"";
                    // line 60
                    echo get_lang("NewThematicAdvance");
                    echo "\" href=\"index.php?";
                    echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
                    echo "&action=thematic_advance_add&thematic_id=";
                    echo $this->getAttribute($context["item"], "id", []);
                    echo "\" class=\"btn btn-default\">
                                        <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                                ";
                }
                // line 65
                echo "                                <div class=\"thematic-advance\">
                                <table width=\"100%\" class=\"table\">
                                ";
                // line 67
                if ( !twig_test_empty($this->getAttribute($context["item"], "thematic_advance", []))) {
                    // line 68
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "thematic_advance", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["advance"]) {
                        // line 69
                        echo "                                <tr>
                                    <td style=\"width: 90%\" class=\"thematic_advance_content\" id=\"thematic_advance_content_id_";
                        // line 70
                        echo $this->getAttribute($context["advance"], "id", []);
                        echo "\">
                                        <div id=\"thematic_advance_";
                        // line 71
                        echo $this->getAttribute($context["advance"], "id", []);
                        echo "\">
                                        <strong>";
                        // line 72
                        echo api_format_date($this->getAttribute($context["advance"], "start_date", []));
                        echo "</strong>
                                        ";
                        // line 73
                        echo $this->getAttribute($context["advance"], "content", []);
                        echo "
                                        </div>
                                        ";
                        // line 75
                        if (($context["tutor"] ?? null)) {
                            // line 76
                            echo "                                            <div class=\"toolbar-actions\">
                                                <div id=\"thematic_advance_tools_";
                            // line 77
                            echo $this->getAttribute($context["advance"], "id", []);
                            echo "\" class=\"thematic_advance_actions\">
                                                    <div class=\"btn-group btn-group-sm\">
                                                        <a class=\"btn btn-default btn-sm\" href=\"index.php?";
                            // line 79
                            echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
                            echo "&action=thematic_advance_edit&thematic_id=";
                            echo $this->getAttribute($context["item"], "id", []);
                            echo "&thematic_advance_id=";
                            echo $this->getAttribute($context["advance"], "id", []);
                            echo "\" title=\"";
                            echo get_lang("Edit");
                            echo "\">
                                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                        </a>
                                                        <a class=\"btn btn-default btn-sm\" onclick=\"javascript:if(!confirm('";
                            // line 82
                            echo get_lang("AreYouSureToDelete");
                            echo "')) return false;\" href=\"index.php?";
                            echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
                            echo "&action=thematic_advance_delete&thematic_id=";
                            echo $this->getAttribute($context["item"], "id", []);
                            echo "&thematic_advance_id=";
                            echo $this->getAttribute($context["advance"], "id", []);
                            echo "\" title=\"";
                            echo get_lang("Delete");
                            echo "\">
                                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 89
                        echo "                                        </div>
                                    </td>
                                    ";
                        // line 91
                        if (($this->getAttribute($context["advance"], "done_advance", []) == 1)) {
                            // line 92
                            echo "                                        ";
                            $context["color"] = "background-color:#E5EDF9;";
                            // line 93
                            echo "                                    ";
                        } else {
                            // line 94
                            echo "                                        ";
                            $context["color"] = "background-color:#FFFFFF;";
                            // line 95
                            echo "                                    ";
                        }
                        // line 96
                        echo "                                    ";
                        if (($context["tutor"] ?? null)) {
                            // line 97
                            echo "                                        <td style=\"width: 10%; ";
                            echo ($context["color"] ?? null);
                            echo "\" id=\"td_done_thematic_";
                            echo $this->getAttribute($context["advance"], "id", []);
                            echo "\">
                                        ";
                            // line 98
                            $context["check"] = "";
                            // line 99
                            echo "                                        ";
                            if (($this->getAttribute($context["item"], "last_done", []) == $this->getAttribute($context["advance"], "id", []))) {
                                // line 100
                                echo "                                            ";
                                $context["check"] = "checked";
                                // line 101
                                echo "                                        ";
                            }
                            // line 102
                            echo "                                        <center>
                                            <input type=\"radio\" class=\"done_thematic\" id=\"done_thematic_";
                            // line 103
                            echo $this->getAttribute($context["advance"], "id", []);
                            echo "\" name=\"done_thematic\" value=\"";
                            echo $this->getAttribute($context["advance"], "id", []);
                            echo "\" ";
                            echo ($context["check"] ?? null);
                            echo " onclick=\"update_done_thematic_advance(this.value)\">
                                        </center>
                                    ";
                        } else {
                            // line 106
                            echo "                                        </td>
                                    ";
                        }
                        // line 108
                        echo "                                </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advance'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                                ";
                } else {
                    // line 111
                    echo "                                    <div class=\"alert alert-info\" role=\"alert\">";
                    echo get_lang("ThereIsNoAThematicAdvance");
                    echo "</div>
                                ";
                }
                // line 113
                echo "                                </table>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
                </table>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 125
            echo "    <div class=\"alert alert-info\" role=\"alert\">";
            echo get_lang("ThereIsNoAThematicSection");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/course_progress/progress.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 125,  348 => 118,  338 => 113,  332 => 111,  329 => 110,  322 => 108,  318 => 106,  308 => 103,  305 => 102,  302 => 101,  299 => 100,  296 => 99,  294 => 98,  287 => 97,  284 => 96,  281 => 95,  278 => 94,  275 => 93,  272 => 92,  270 => 91,  266 => 89,  248 => 82,  236 => 79,  231 => 77,  228 => 76,  226 => 75,  221 => 73,  217 => 72,  213 => 71,  209 => 70,  206 => 69,  201 => 68,  199 => 67,  195 => 65,  183 => 60,  180 => 59,  178 => 58,  173 => 55,  170 => 54,  162 => 52,  157 => 51,  152 => 50,  146 => 47,  143 => 46,  141 => 45,  136 => 44,  124 => 39,  121 => 38,  119 => 37,  112 => 33,  106 => 31,  98 => 29,  92 => 27,  90 => 26,  86 => 25,  83 => 24,  79 => 23,  74 => 21,  70 => 20,  66 => 19,  54 => 12,  46 => 6,  44 => 5,  42 => 4,  38 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/course_progress/progress.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\course_progress\\progress.tpl");
    }
}
