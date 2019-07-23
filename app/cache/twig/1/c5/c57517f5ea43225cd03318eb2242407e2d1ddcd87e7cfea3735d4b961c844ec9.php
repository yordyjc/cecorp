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

/* buycourses/view/configuration.tpl */
class __TwigTemplate_ec03714a8af7a0f1458d47705e1f7982a46df11c8a80e329fa702ff6b5155032 extends \Twig\Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../resources/css/style.css\"/>

";
        // line 3
        if ((($context["sessions_are_included"] ?? null) || ($context["services_are_included"] ?? null))) {
            // line 4
            echo "    <ul class=\"nav nav-tabs buy-courses-tabs\" role=\"tablist\">
        <li role=\"presentation\" class=\"active\">
            <a href=\"#courses\" aria-controls=\"courses\" role=\"tab\" data-toggle=\"tab\">";
            // line 6
            echo get_lang("Courses");
            echo "</a>
        </li>
        ";
            // line 8
            if (($context["sessions_are_included"] ?? null)) {
                // line 9
                echo "        <li role=\"presentation\">
            <a href=\"#sessions\" aria-controls=\"sessions\" role=\"tab\" data-toggle=\"tab\">";
                // line 10
                echo get_lang("Sessions");
                echo "</a>
        </li>
        ";
            }
            // line 13
            echo "        ";
            if (($context["services_are_included"] ?? null)) {
                // line 14
                echo "            <li role=\"presentation\">
                <a href=\"#services\" aria-controls=\"services\" role=\"tab\"
                   data-toggle=\"tab\">";
                // line 16
                echo get_plugin_lang("Services", "BuyCoursesPlugin");
                echo "</a>
            </li>
        ";
            }
            // line 19
            echo "    </ul>
";
        }
        // line 21
        echo "
<div class=\"tab-content\">
    <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"courses\">
        <div class=\"table-responsive\">
            <table id=\"courses_table\" class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th>";
        // line 28
        echo get_lang("Title");
        echo "</th>
                    <th class=\"text-center\">";
        // line 29
        echo get_lang("OfficialCode");
        echo "</th>
                    <th class=\"text-center\">";
        // line 30
        echo get_plugin_lang("VisibleInCatalog", "BuyCoursesPlugin");
        echo "</th>
                    <th class=\"text-right\" width=\"200\">";
        // line 31
        echo get_plugin_lang("Price", "BuyCoursesPlugin");
        echo "</th>
                    ";
        // line 32
        if ((($context["tax_enable"] ?? null) && ((($context["tax_applies_to"] ?? null) == 1) || (($context["tax_applies_to"] ?? null) == 2)))) {
            // line 33
            echo "                        <th class=\"text-center\" width=\"100\">";
            echo ($context["tax_name"] ?? null);
            echo "</th>
                    ";
        }
        // line 35
        echo "                    <th class=\"text-right\">";
        echo get_lang("Options");
        echo "</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "                    <tr data-item=\"";
            echo $this->getAttribute($context["item"], "course_id", []);
            echo "\" data-type=\"course\">
                        <td>
                            ";
            // line 43
            if (($this->getAttribute($context["item"], "course_visibility", []) == 0)) {
                // line 44
                echo "                                <img src=\"";
                echo Display::get_icon_path("bullet_red.png");
                echo "\" alt=\"";
                echo get_lang("CourseVisibilityClosed");
                echo "\"
                                     title=\"";
                // line 45
                echo get_lang("CourseVisibilityClosed");
                echo "\">
                            ";
            } elseif (($this->getAttribute(            // line 46
$context["item"], "course_visibility", []) == 1)) {
                // line 47
                echo "                                <img src=\"";
                echo Display::get_icon_path("bullet_orange.png");
                echo "\" alt=\"";
                echo get_lang("Private");
                echo "\"
                                     title=\"";
                // line 48
                echo get_lang("Private");
                echo "\">
                            ";
            } elseif (($this->getAttribute(            // line 49
$context["item"], "course_visibility", []) == 2)) {
                // line 50
                echo "                                <img src=\"";
                echo Display::get_icon_path("bullet_green.png");
                echo "\" alt=\"";
                echo get_lang("OpenToThePlatform");
                echo "\"
                                     title=\"";
                // line 51
                echo get_lang("OpenToThePlatform");
                echo "\">
                            ";
            } elseif (($this->getAttribute(            // line 52
$context["item"], "course_visibility", []) == 3)) {
                // line 53
                echo "                                <img src=\"";
                echo Display::get_icon_path("bullet_blue.png");
                echo "\" alt=\"";
                echo get_lang("OpenToTheWorld");
                echo "\"
                                     title=\"";
                // line 54
                echo get_lang("OpenToTheWorld");
                echo "\">
                            ";
            } elseif (($this->getAttribute(            // line 55
$context["item"], "course_visibility", []) == 4)) {
                // line 56
                echo "                                <img src=\"";
                echo Display::get_icon_path("bullet_grey.png");
                echo "\" alt=\"";
                echo get_lang("CourseVisibilityHidden");
                echo "\"
                                     title=\"";
                // line 57
                echo get_lang("CourseVisibilityHidden");
                echo "\">
                            ";
            }
            // line 59
            echo "
                            <a href=\"";
            // line 60
            echo (($this->getAttribute(($context["_p"] ?? null), "web_course", []) . $this->getAttribute($context["item"], "course_directory", [])) . "/index.php");
            echo "\">
                                ";
            // line 61
            echo $this->getAttribute($context["item"], "course_title", []);
            echo "
                            </a>
                            <span class=\"label label-info\">";
            // line 63
            echo $this->getAttribute($context["item"], "course_visual_code", []);
            echo "</span>
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 66
            echo $this->getAttribute($context["item"], "course_code", []);
            echo "
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 69
            if ($this->getAttribute($context["item"], "visible", [])) {
                // line 70
                echo "                                <em class=\"fa fa-fw fa-check-square-o\"></em>
                            ";
            } else {
                // line 72
                echo "                                <em class=\"fa fa-fw fa-square-o\"></em>
                            ";
            }
            // line 74
            echo "                        </td>
                        <td width=\"200\" class=\"text-right\">
                            ";
            // line 76
            echo (($this->getAttribute($context["item"], "price", []) . " ") . (($this->getAttribute(($context["tem"] ?? null), "currency", [])) ? ($this->getAttribute(($context["tem"] ?? null), "currency", [])) : ($this->getAttribute($context["item"], "currency", []))));
            echo "
                        </td>
                        ";
            // line 78
            if ((($context["tax_enable"] ?? null) && ((($context["tax_applies_to"] ?? null) == 1) || (($context["tax_applies_to"] ?? null) == 2)))) {
                // line 79
                echo "                            <td class=\"text-center\">
                                ";
                // line 80
                if ((null === $this->getAttribute($context["item"], "tax_perc", []))) {
                    // line 81
                    echo "                                    ";
                    echo ($context["global_tax_perc"] ?? null);
                    echo " %
                                ";
                } else {
                    // line 83
                    echo "                                    ";
                    echo $this->getAttribute($context["item"], "tax_perc", []);
                    echo " %
                                ";
                }
                // line 85
                echo "                            </td>
                        ";
            }
            // line 87
            echo "                        <td class=\"text-right\">
                            <a href=\"";
            // line 88
            echo (($this->getAttribute(($context["_p"] ?? null), "web_plugin", []) . "buycourses/src/configure_course.php?") . twig_urlencode_filter(["i" => $this->getAttribute($context["item"], "course_id", []), "t" => ($context["product_type_course"] ?? null)]));
            echo "\"
                               class=\"btn btn-info btn-sm\">
                                <em class=\"fa fa-wrench fa-fw\"></em> ";
            // line 90
            echo get_lang("Configure");
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 100
        if (($context["sessions_are_included"] ?? null)) {
            // line 101
            echo "        <div role=\"tabpanel\" class=\"tab-pane\" id=\"sessions\">
            <div class=\"table-responsive\">
                <table id=\"courses_table\" class=\"table\">
                    <thead>
                    <tr>
                        <th>";
            // line 106
            echo get_lang("Title");
            echo "</th>
                        <th class=\"text-center\">";
            // line 107
            echo get_lang("StartDate");
            echo "</th>
                        <th class=\"text-center\">";
            // line 108
            echo get_lang("EndDate");
            echo "</th>
                        <th class=\"text-center\">";
            // line 109
            echo get_plugin_lang("VisibleInCatalog", "BuyCoursesPlugin");
            echo "</th>
                        <th class=\"text-right\">";
            // line 110
            echo get_plugin_lang("Price", "BuyCoursesPlugin");
            echo "</th>
                        ";
            // line 111
            if ((($context["tax_enable"] ?? null) && ((($context["tax_applies_to"] ?? null) == 1) || (($context["tax_applies_to"] ?? null) == 3)))) {
                // line 112
                echo "                            <th class=\"text-center\" width=\"100\">";
                echo ($context["tax_name"] ?? null);
                echo "</th>
                        ";
            }
            // line 114
            echo "                        <th class=\"text-right\">";
            echo get_lang("Options");
            echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 119
                echo "                        <tr data-item=\"";
                echo $this->getAttribute($context["item"], "session_id", []);
                echo "\" data-type=\"session\">
                            <td>
                                <a href=\"";
                // line 121
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?") . twig_urlencode_filter(["session_id" => $this->getAttribute($context["item"], "session_id", [])]));
                echo "\">";
                echo $this->getAttribute($context["item"], "session_name", []);
                echo "</a>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 124
                echo $this->getAttribute($context["item"], "session_display_start_date", []);
                echo "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 127
                echo $this->getAttribute($context["item"], "session_display_end_date", []);
                echo "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 130
                if ($this->getAttribute($context["item"], "visible", [])) {
                    // line 131
                    echo "                                    <em class=\"fa fa-fw fa-check-square-o\"></em>
                                ";
                } else {
                    // line 133
                    echo "                                    <em class=\"fa fa-fw fa-square-o\"></em>
                                ";
                }
                // line 135
                echo "                            </td>
                            <td class=\"text-right\" width=\"200\">
                                ";
                // line 137
                echo (($this->getAttribute($context["item"], "price", []) . " ") . (($this->getAttribute(($context["tem"] ?? null), "currency", [])) ? ($this->getAttribute(($context["tem"] ?? null), "currency", [])) : ($this->getAttribute($context["item"], "currency", []))));
                echo "
                            </td>
                            ";
                // line 139
                if ((($context["tax_enable"] ?? null) && ((($context["tax_applies_to"] ?? null) == 1) || (($context["tax_applies_to"] ?? null) == 3)))) {
                    // line 140
                    echo "                                <td class=\"text-center\">
                                    ";
                    // line 141
                    if ((null === $this->getAttribute($context["item"], "tax_perc", []))) {
                        // line 142
                        echo "                                        ";
                        echo ($context["global_tax_perc"] ?? null);
                        echo " %
                                    ";
                    } else {
                        // line 144
                        echo "                                        ";
                        echo $this->getAttribute($context["item"], "tax_perc", []);
                        echo " %
                                    ";
                    }
                    // line 146
                    echo "                                </td>
                            ";
                }
                // line 148
                echo "                            <td class=\"text-right\">
                                <a href=\"";
                // line 149
                echo (($this->getAttribute(($context["_p"] ?? null), "web_plugin", []) . "buycourses/src/configure_course.php?") . twig_urlencode_filter(["i" => $this->getAttribute($context["item"], "session_id", []), "t" => ($context["product_type_session"] ?? null)]));
                echo "\"
                                   class=\"btn btn-info btn-sm\">
                                    <em class=\"fa fa-wrench fa-fw\"></em> ";
                // line 151
                echo get_lang("Configure");
                echo "
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 161
        echo "    ";
        if (($context["services_are_included"] ?? null)) {
            // line 162
            echo "        <div role=\"tabpanel\" class=\"tab-pane\" id=\"services\">
            <div class=\"table-responsive\">
                <a href=\"";
            // line 164
            echo ($this->getAttribute(($context["_p"] ?? null), "web_plugin", []) . "buycourses/src/services_add.php");
            echo "\" class=\"btn btn-primary\">
                    <em class=\"fa fa-cart-plus fa-fw\"></em> ";
            // line 165
            echo get_plugin_lang("NewService", "BuyCoursesPlugin");
            echo "
                </a>
                </br>
                </br>
                <table id=\"services_table\" class=\"table\">
                    <thead>
                    <tr>
                        <th>";
            // line 172
            echo get_plugin_lang("Service", "BuyCoursesPlugin");
            echo "</th>
                        <th>";
            // line 173
            echo get_lang("Description");
            echo "</th>
                        <th class=\"text-center\">";
            // line 174
            echo get_plugin_lang("Duration", "BuyCoursesPlugin");
            echo "</th>
                        <th class=\"text-center\">";
            // line 175
            echo get_plugin_lang("VisibleInCatalog", "BuyCoursesPlugin");
            echo "</th>
                        <th class=\"text-center\">";
            // line 176
            echo get_lang("Owner");
            echo "</th>
                        <th class=\"text-right\">";
            // line 177
            echo get_plugin_lang("Price", "BuyCoursesPlugin");
            echo "</th>
                        ";
            // line 178
            if ((($context["tax_enable"] ?? null) && ((($context["tax_applies_to"] ?? null) == 1) || (($context["tax_applies_to"] ?? null) == 4)))) {
                // line 179
                echo "                            <th class=\"text-center\" width=\"100\">";
                echo ($context["tax_name"] ?? null);
                echo "</th>
                        ";
            }
            // line 181
            echo "                        <th class=\"text-right\">";
            echo get_lang("Options");
            echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 186
                echo "                        <tr data-item=\"";
                echo $this->getAttribute($context["item"], "id", []);
                echo "\" data-type=\"service\">
                            <td>
                                ";
                // line 188
                echo $this->getAttribute($context["item"], "name", []);
                echo "
                            </td>
                            <td>
                                ";
                // line 191
                echo $this->getAttribute($context["item"], "description", []);
                echo "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 194
                if (($this->getAttribute($context["item"], "duration_days", []) == 0)) {
                    // line 195
                    echo "                                    ";
                    echo get_lang("NoLimit");
                    echo "
                                ";
                } else {
                    // line 197
                    echo "                                    ";
                    echo $this->getAttribute($context["item"], "duration_days", []);
                    echo " ";
                    echo get_lang("Days");
                    echo "
                                ";
                }
                // line 199
                echo "                            </td>
                            <td class=\"text-center\">
                                ";
                // line 201
                if (($this->getAttribute($context["item"], "visibility", []) == 1)) {
                    // line 202
                    echo "                                    <em class=\"fa fa-fw fa-check-square-o\"></em>
                                ";
                } else {
                    // line 204
                    echo "                                    <em class=\"fa fa-fw fa-square-o\"></em>
                                ";
                }
                // line 206
                echo "                            </td>
                            <td class=\"text-center\">
                                ";
                // line 208
                echo $this->getAttribute($context["item"], "owner_name", []);
                echo "
                            </td>
                            <td class=\"text-right\" width=\"200\">
                                ";
                // line 211
                echo (($this->getAttribute($context["item"], "price", []) . " ") . (($this->getAttribute(($context["tem"] ?? null), "currency", [])) ? ($this->getAttribute(($context["tem"] ?? null), "currency", [])) : ($this->getAttribute($context["item"], "currency", []))));
                echo "
                            </td>
                            ";
                // line 213
                if ((($context["tax_enable"] ?? null) && ((($context["tax_applies_to"] ?? null) == 1) || (($context["tax_applies_to"] ?? null) == 4)))) {
                    // line 214
                    echo "                                <td class=\"text-center\">
                                    ";
                    // line 215
                    if ((null === $this->getAttribute($context["item"], "tax_perc", []))) {
                        // line 216
                        echo "                                        ";
                        echo ($context["global_tax_perc"] ?? null);
                        echo " %
                                    ";
                    } else {
                        // line 218
                        echo "                                        ";
                        echo $this->getAttribute($context["item"], "tax_perc", []);
                        echo " %
                                    ";
                    }
                    // line 220
                    echo "                                </td>
                            ";
                }
                // line 222
                echo "                            <td class=\"text-right\">
                                <a href=\"";
                // line 223
                echo (($this->getAttribute(($context["_p"] ?? null), "web_plugin", []) . "buycourses/src/services_edit.php?") . twig_urlencode_filter(["id" => $this->getAttribute($context["item"], "id", [])]));
                echo "\"
                                   class=\"btn btn-info btn-sm\">
                                    <em class=\"fa fa-wrench fa-fw\"></em> ";
                // line 225
                echo get_lang("Edit");
                echo "
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 235
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "buycourses/view/configuration.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 235,  596 => 230,  585 => 225,  580 => 223,  577 => 222,  573 => 220,  567 => 218,  561 => 216,  559 => 215,  556 => 214,  554 => 213,  549 => 211,  543 => 208,  539 => 206,  535 => 204,  531 => 202,  529 => 201,  525 => 199,  517 => 197,  511 => 195,  509 => 194,  503 => 191,  497 => 188,  491 => 186,  487 => 185,  479 => 181,  473 => 179,  471 => 178,  467 => 177,  463 => 176,  459 => 175,  455 => 174,  451 => 173,  447 => 172,  437 => 165,  433 => 164,  429 => 162,  426 => 161,  419 => 156,  408 => 151,  403 => 149,  400 => 148,  396 => 146,  390 => 144,  384 => 142,  382 => 141,  379 => 140,  377 => 139,  372 => 137,  368 => 135,  364 => 133,  360 => 131,  358 => 130,  352 => 127,  346 => 124,  338 => 121,  332 => 119,  328 => 118,  320 => 114,  314 => 112,  312 => 111,  308 => 110,  304 => 109,  300 => 108,  296 => 107,  292 => 106,  285 => 101,  283 => 100,  276 => 95,  265 => 90,  260 => 88,  257 => 87,  253 => 85,  247 => 83,  241 => 81,  239 => 80,  236 => 79,  234 => 78,  229 => 76,  225 => 74,  221 => 72,  217 => 70,  215 => 69,  209 => 66,  203 => 63,  198 => 61,  194 => 60,  191 => 59,  186 => 57,  179 => 56,  177 => 55,  173 => 54,  166 => 53,  164 => 52,  160 => 51,  153 => 50,  151 => 49,  147 => 48,  140 => 47,  138 => 46,  134 => 45,  127 => 44,  125 => 43,  119 => 41,  115 => 40,  106 => 35,  100 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  73 => 21,  69 => 19,  63 => 16,  59 => 14,  56 => 13,  50 => 10,  47 => 9,  45 => 8,  40 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "buycourses/view/configuration.tpl", "C:\\wamp64\\www\\chamilo\\plugin\\buycourses\\view\\configuration.tpl");
    }
}
