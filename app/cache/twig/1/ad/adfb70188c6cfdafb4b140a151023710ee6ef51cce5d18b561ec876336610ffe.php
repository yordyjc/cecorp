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

/* buycourses/view/catalog.tpl */
class __TwigTemplate_0d62b92a911f1e542822c3e4c771253982b87d50f8282a19cc6dd77e52318201 extends \Twig\Template
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

<div id=\"buy-courses-tabs\">
    ";
        // line 4
        if (($context["sessions_are_included"] ?? null)) {
            // line 5
            echo "        <ul class=\"nav nav-tabs buy-courses-tabs\" role=\"tablist\">
            <li id=\"buy-courses-tab\" class=\"";
            // line 6
            echo ((($context["showing_courses"] ?? null)) ? ("active") : (""));
            echo "\" role=\"presentation\">
                <a href=\"course_catalog.php\" aria-controls=\"buy-courses\" role=\"tab\">";
            // line 7
            echo get_lang("Courses");
            echo "</a>
            </li>
            <li id=\"buy-sessions-tab\" class=\"";
            // line 9
            echo ((($context["showing_sessions"] ?? null)) ? ("active") : (""));
            echo "\" role=\"presentation\">
                <a href=\"session_catalog.php\" aria-controls=\"buy-sessions\" role=\"tab\">";
            // line 10
            echo get_lang("Sessions");
            echo "</a>
            </li>
            ";
            // line 12
            if (($context["services_are_included"] ?? null)) {
                // line 13
                echo "                <li id=\"buy-services-tab\" class=\"";
                echo ((($context["showing_services"] ?? null)) ? ("active") : (""));
                echo "\" role=\"presentation\">
                    <a href=\"service_catalog.php\" aria-controls=\"buy-services\"
                       role=\"tab\">";
                // line 15
                echo get_plugin_lang("Services", "BuyCoursesPlugin");
                echo "</a>
                </li>
            ";
            }
            // line 18
            echo "        </ul>
    ";
        }
        // line 20
        echo "
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" aria-labelledby=\"buy-sessions-tab\" role=\"tabpanel\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
        // line 25
        echo ($context["search_filter_form"] ?? null);
        echo "
                </div>
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        ";
        // line 29
        if (($context["showing_courses"] ?? null)) {
            // line 30
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 31
                echo "                                <div class=\"col-md-4 col-sm-6\">
                                    <article class=\"items-course\">
                                        <div class=\"items-course-image\">
                                            <img alt=\"";
                // line 34
                echo $this->getAttribute($context["course"], "title", []);
                echo "\" class=\"img-responsive\"
                                                 src=\"";
                // line 35
                echo (($this->getAttribute($context["course"], "course_img", [])) ? ($this->getAttribute($context["course"], "course_img", [])) : (Display::get_icon_path("session_default.png")));
                echo "\">
                                        </div>
                                        <div class=\"items-course-info\">
                                            ";
                // line 38
                $context["course_description_url"] = (($this->getAttribute(($context["_p"] ?? null), "web_ajax", []) . "course_home.ajax.php?") . twig_urlencode_filter(["code" => $this->getAttribute($context["course"], "code", []), "a" => "show_course_information"]));
                // line 39
                echo "                                            <h4 class=\"title\">
                                                <a class=\"ajax\" href=\"";
                // line 40
                echo ($context["course_description_url"] ?? null);
                echo "\"
                                                   data-title=\"";
                // line 41
                echo $this->getAttribute($context["course"], "title", []);
                echo "\">";
                echo $this->getAttribute($context["course"], "title", []);
                echo "</a>
                                            </h4>
                                            <ul class=\"list-unstyled\">
                                                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["course"], "teachers", []));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 45
                    echo "                                                    <li><em class=\"fa fa-user\"></em> ";
                    echo $context["teacher"];
                    echo "</li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                                            </ul>
                                            <p class=\"text-right\">
                                                <span class=\"label label-primary\">
                                                    ";
                // line 50
                echo $this->getAttribute($context["course"], "currency", []);
                echo " ";
                echo $this->getAttribute($context["course"], "price", []);
                echo "
                                                </span>
                                            </p>
                                            ";
                // line 53
                if (($this->getAttribute($context["course"], "enrolled", []) == "YES")) {
                    // line 54
                    echo "                                                <div class=\"alert alert-success\">
                                                    <em class=\"fa fa-check-square-o fa-fw\"></em> ";
                    // line 55
                    echo get_plugin_lang("TheUserIsAlreadyRegisteredInTheCourse", "BuyCoursesPlugin");
                    echo "
                                                </div>
                                            ";
                } elseif (($this->getAttribute(                // line 57
$context["course"], "enrolled", []) == "NO")) {
                    // line 58
                    echo "                                                <div class=\"toolbar\">
                                                    <a class=\"ajax btn btn-info btn-block btn-sm\" title=\"\"
                                                       href=\"";
                    // line 60
                    echo ($context["course_description_url"] ?? null);
                    echo "\"
                                                       data-title=\"";
                    // line 61
                    echo $this->getAttribute($context["course"], "title", []);
                    echo "\">
                                                        <em class=\"fa fa-file-text\"></em> ";
                    // line 62
                    echo get_plugin_lang("SeeDescription", "BuyCoursesPlugin");
                    echo "
                                                    </a>
                                                    <a class=\"btn btn-success btn-block btn-sm\" title=\"\"
                                                       href=\"";
                    // line 65
                    echo (($this->getAttribute(($context["_p"] ?? null), "web_plugin", []) . "buycourses/src/process.php?") . twig_urlencode_filter(["i" => $this->getAttribute($context["course"], "id", []), "t" => 1]));
                    echo "\">
                                                        <em class=\"fa fa-shopping-cart\"></em> ";
                    // line 66
                    echo get_plugin_lang("Buy", "BuyCoursesPlugin");
                    echo "
                                                    </a>
                                                </div>
                                            ";
                } elseif (($this->getAttribute(                // line 69
$context["course"], "enrolled", []) == "TMP")) {
                    // line 70
                    echo "                                                <div class=\"alert alert-info\">";
                    echo get_plugin_lang("WaitingToReceiveThePayment", "BuyCoursesPlugin");
                    echo "</div>
                                            ";
                }
                // line 72
                echo "                                        </div>
                                    </article>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        ";
        }
        // line 77
        echo "
                        ";
        // line 78
        if (($context["showing_sessions"] ?? null)) {
            // line 79
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 80
                echo "                                <div class=\"col-md-4 col-sm-6\">
                                    <article class=\"items-course\">
                                        <div class=\"items-course-image\">
                                            <img alt=\"";
                // line 83
                echo $this->getAttribute($context["session"], "name", []);
                echo "\" class=\"img-responsive\"
                                                 src=\"";
                // line 84
                echo (($this->getAttribute($context["session"], "image", [])) ? ($this->getAttribute($context["session"], "image", [])) : (Display::get_icon_path("session_default.png")));
                echo "\">
                                        </div>
                                        <div class=\"items-course-info\">
                                            <h4 class=\"title\">
                                                <a href=\"";
                // line 88
                echo ((($this->getAttribute(($context["_p"] ?? null), "web", []) . "session/") . $this->getAttribute($context["session"], "id", [])) . "/about/");
                echo "\">";
                echo $this->getAttribute($context["session"], "name", []);
                echo "</a>
                                            </h4>
                                            ";
                // line 90
                if ((api_get_setting("show_session_coach") == "true")) {
                    // line 91
                    echo "                                                <p><em class=\"fa fa-user fa-fw\"></em> ";
                    echo $this->getAttribute($context["session"], "coach", []);
                    echo "</p>
                                            ";
                }
                // line 93
                echo "                                            <p><em class=\"fa fa-calendar fa-fw\"></em> ";
                echo $this->getAttribute($this->getAttribute($context["session"], "dates", []), "display", []);
                echo "</p>
                                            <p class=\"text-right\">
                                                <span class=\"label label-primary\">
                                                    ";
                // line 96
                echo $this->getAttribute($context["session"], "currency", []);
                echo " ";
                echo $this->getAttribute($context["session"], "price", []);
                echo "
                                                </span>
                                            </p>
                                            <ul class=\"list-unstyled\">
                                                ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["session"], "courses", []));
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 101
                    echo "                                                    <li>
                                                        <em class=\"fa fa-book fa-fw\"></em> ";
                    // line 102
                    echo $this->getAttribute($context["course"], "title", []);
                    echo "
                                                        ";
                    // line 103
                    if (twig_length_filter($this->env, $this->getAttribute($context["course"], "coaches", []))) {
                        // line 104
                        echo "                                                            <ul>
                                                                ";
                        // line 105
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["course"], "coaches", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                            // line 106
                            echo "                                                                    <li>";
                            echo $context["coach"];
                            echo "</li>
                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                                                            </ul>
                                                        ";
                    }
                    // line 110
                    echo "                                                    </li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                                            </ul>
                                            ";
                // line 113
                if (($this->getAttribute($context["session"], "enrolled", []) == "YES")) {
                    // line 114
                    echo "                                                <div class=\"alert alert-success\">
                                                    <em class=\"fa fa-check-square-o fa-fw\"></em> ";
                    // line 115
                    echo get_plugin_lang("TheUserIsAlreadyRegisteredInTheSession", "BuyCoursesPlugin");
                    echo "
                                                </div>
                                            ";
                } elseif (($this->getAttribute(                // line 117
$context["session"], "enrolled", []) == "NO")) {
                    // line 118
                    echo "                                                <div class=\"toolbar\">
                                                    <a class=\"btn btn-success btn-block btn-sm\"
                                                       href=\"";
                    // line 120
                    echo (($this->getAttribute(($context["_p"] ?? null), "web_plugin", []) . "buycourses/src/process.php?") . twig_urlencode_filter(["i" => $this->getAttribute($context["session"], "id", []), "t" => 2]));
                    echo "\">
                                                        <em class=\"fa fa-shopping-cart\"></em> ";
                    // line 121
                    echo get_plugin_lang("Buy", "BuyCoursesPlugin");
                    echo "
                                                    </a>
                                                </div>
                                            ";
                } elseif (($this->getAttribute(                // line 124
$context["session"], "enrolled", []) == "TMP")) {
                    // line 125
                    echo "                                                <div class=\"alert alert-info\">";
                    echo get_plugin_lang("WaitingToReceiveThePayment", "BuyCoursesPlugin");
                    echo "</div>
                                            ";
                }
                // line 127
                echo "                                        </div>
                                    </article>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                        ";
        }
        // line 132
        echo "
                        ";
        // line 133
        if (($context["showing_services"] ?? null)) {
            // line 134
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 135
                echo "                                <div class=\"col-md-4 col-sm-6\">
                                    <div class=\"items-course\">
                                        <div class=\"items-course-image\">
                                            <a href=\"";
                // line 138
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "service/";
                echo $this->getAttribute($context["service"], "id", []);
                echo "\"><img alt=\"";
                echo $this->getAttribute($context["service"], "name", []);
                echo "\"
                                                                                                class=\"img-responsive\"
                                                                                                src=\"";
                // line 140
                echo (($this->getAttribute($context["service"], "image", [])) ? ($this->getAttribute($context["service"], "image", [])) : (Display::get_icon_path("session_default.png")));
                echo "\"></a>
                                        </div>
                                        <div class=\"items-course-info\">
                                            <h4 class=\"title\">
                                                <a title=\"";
                // line 144
                echo $this->getAttribute($context["service"], "name", []);
                echo "\"
                                                   href=\"";
                // line 145
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "service/";
                echo $this->getAttribute($context["service"], "id", []);
                echo "\">
                                                    ";
                // line 146
                echo $this->getAttribute($context["service"], "name", []);
                echo "
                                                </a>
                                            </h4>
                                            <ul class=\"list-unstyled\">
                                                <li>
                                                    <em class=\"fa fa-clock-o\"></em> ";
                // line 151
                echo get_plugin_lang("Duration", "BuyCoursesPlugin");
                echo "
                                                    : ";
                // line 152
                echo ((($this->getAttribute($context["service"], "duration_days", []) == 0)) ? (get_lang("NoLimit")) : ((($this->getAttribute($context["service"], "duration_days", []) . " ") . get_lang("Days"))));
                echo "
                                                </li>
                                                ";
                // line 154
                if (($this->getAttribute($context["service"], "applies_to", []) == 0)) {
                    // line 155
                    echo "                                                    <li>
                                                        <em class=\"fa fa-hand-o-right\"></em> ";
                    // line 156
                    echo get_plugin_lang("AppliesTo", "BuyCoursesPlugin");
                    echo " ";
                    echo get_lang("None");
                    echo "
                                                    </li>
                                                ";
                } elseif (($this->getAttribute(                // line 158
$context["service"], "applies_to", []) == 1)) {
                    // line 159
                    echo "                                                    <li>
                                                        <em class=\"fa fa-hand-o-right\"></em> ";
                    // line 160
                    echo get_plugin_lang("AppliesTo", "BuyCoursesPlugin");
                    echo " ";
                    echo get_lang("User");
                    echo "
                                                    </li>
                                                ";
                } elseif (($this->getAttribute(                // line 162
$context["service"], "applies_to", []) == 2)) {
                    // line 163
                    echo "                                                    <li>
                                                        <em class=\"fa fa-hand-o-right\"></em> ";
                    // line 164
                    echo get_plugin_lang("AppliesTo", "BuyCoursesPlugin");
                    echo " ";
                    echo get_lang("Course");
                    echo "
                                                    </li>
                                                ";
                } elseif (($this->getAttribute(                // line 166
$context["service"], "applies_to", []) == 3)) {
                    // line 167
                    echo "                                                    <li>
                                                        <em class=\"fa fa-hand-o-right\"></em> ";
                    // line 168
                    echo get_plugin_lang("AppliesTo", "BuyCoursesPlugin");
                    echo " ";
                    echo get_lang("Session");
                    echo "
                                                    </li>
                                                ";
                } elseif (($this->getAttribute(                // line 170
$context["service"], "applies_to", []) == 4)) {
                    // line 171
                    echo "                                                    <li>
                                                        <em class=\"fa fa-hand-o-right\"></em> ";
                    // line 172
                    echo get_plugin_lang("AppliesTo", "BuyCoursesPlugin");
                    echo " ";
                    echo get_plugin_lang("TemplateTitleCertificate", "BuyCoursesPlugin");
                    echo "
                                                    </li>
                                                ";
                }
                // line 175
                echo "                                                <li><em class=\"fa fa-user\"></em> ";
                echo $this->getAttribute($context["service"], "owner_name", []);
                echo "</li>
                                            </ul>
                                            <p class=\"text-right\">
                                                <span class=\"label label-primary\">
                                                    ";
                // line 179
                echo ((($this->getAttribute($context["service"], "currency", []) == "BRL")) ? ("R\$") : ($this->getAttribute($context["service"], "currency", [])));
                echo " ";
                echo $this->getAttribute($context["service"], "price", []);
                echo "
                                                </span>
                                            </p>
                                            <div class=\"toolbar\">
                                                <a class=\"btn btn-info btn-block btn-sm\" title=\"\"
                                                   href=\"";
                // line 184
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "service/";
                echo $this->getAttribute($context["service"], "id", []);
                echo "\">
                                                    <em class=\"fa fa-info-circle\"></em> ";
                // line 185
                echo get_plugin_lang("ServiceInformation", "BuyCoursesPlugin");
                echo "
                                                </a>
                                                <a class=\"btn btn-success btn-block btn-sm\" title=\"\"
                                                   href=\"";
                // line 188
                echo (($this->getAttribute(($context["_p"] ?? null), "web_plugin", []) . "buycourses/src/service_process.php?") . twig_urlencode_filter(["i" => $this->getAttribute($context["service"], "id", []), "t" => $this->getAttribute($context["service"], "applies_to", [])]));
                echo "\">
                                                    <em class=\"fa fa-shopping-cart\"></em> ";
                // line 189
                echo get_plugin_lang("Buy", "BuyCoursesPlugin");
                echo "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                        ";
        }
        // line 197
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "buycourses/view/catalog.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 197,  527 => 196,  514 => 189,  510 => 188,  504 => 185,  498 => 184,  488 => 179,  480 => 175,  472 => 172,  469 => 171,  467 => 170,  460 => 168,  457 => 167,  455 => 166,  448 => 164,  445 => 163,  443 => 162,  436 => 160,  433 => 159,  431 => 158,  424 => 156,  421 => 155,  419 => 154,  414 => 152,  410 => 151,  402 => 146,  396 => 145,  392 => 144,  385 => 140,  376 => 138,  371 => 135,  366 => 134,  364 => 133,  361 => 132,  358 => 131,  349 => 127,  343 => 125,  341 => 124,  335 => 121,  331 => 120,  327 => 118,  325 => 117,  320 => 115,  317 => 114,  315 => 113,  312 => 112,  305 => 110,  301 => 108,  292 => 106,  288 => 105,  285 => 104,  283 => 103,  279 => 102,  276 => 101,  272 => 100,  263 => 96,  256 => 93,  250 => 91,  248 => 90,  241 => 88,  234 => 84,  230 => 83,  225 => 80,  220 => 79,  218 => 78,  215 => 77,  212 => 76,  203 => 72,  197 => 70,  195 => 69,  189 => 66,  185 => 65,  179 => 62,  175 => 61,  171 => 60,  167 => 58,  165 => 57,  160 => 55,  157 => 54,  155 => 53,  147 => 50,  142 => 47,  133 => 45,  129 => 44,  121 => 41,  117 => 40,  114 => 39,  112 => 38,  106 => 35,  102 => 34,  97 => 31,  92 => 30,  90 => 29,  83 => 25,  76 => 20,  72 => 18,  66 => 15,  60 => 13,  58 => 12,  53 => 10,  49 => 9,  44 => 7,  40 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "buycourses/view/catalog.tpl", "C:\\wamp64\\www\\chamilo\\plugin\\buycourses\\view\\catalog.tpl");
    }
}
