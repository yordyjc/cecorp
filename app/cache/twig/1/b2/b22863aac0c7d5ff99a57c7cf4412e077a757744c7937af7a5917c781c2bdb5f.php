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

/* default/my_space/user_details.tpl */
class __TwigTemplate_556961741e5f41488c62e0a9f2951dc6348db6b0df962abc6701e02bae73c699 extends \Twig\Template
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
        $context["display"] = $this->loadTemplate(api_find_template("macro/macro.tpl"), "default/my_space/user_details.tpl", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "    <h2 class=\"details-title\"><img src=\"";
            echo Display::get_icon_path("course.png", 32);
            echo "\"> ";
            echo ($context["title"] ?? null);
            echo "</h2>
";
        }
        // line 6
        echo "
<div class=\"page-header\">
    <h3>";
        // line 8
        echo $this->getAttribute(($context["user"] ?? null), "complete_name", []);
        echo "</h3>
</div>
<!-- NO DETAILS -->
";
        // line 11
        if ((($context["details"] ?? null) != true)) {
            // line 12
            echo "    <div class=\"no-details\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"user text-center\">
                            <div class=\"avatar\">
                                <img width=\"128px\" src=\"";
            // line 19
            echo $this->getAttribute(($context["user"] ?? null), "avatar", []);
            echo "\" class=\"img-responsive\">
                            </div>
                            <div class=\"name\">
                                <h3>";
            // line 22
            echo $this->getAttribute(($context["user"] ?? null), "complete_name_link", []);
            echo "</h3>
                                <p class=\"email\">";
            // line 23
            echo $this->getAttribute(($context["user"] ?? null), "email", []);
            echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        ";
            // line 28
            echo $context["display"]->getreporting_user_details(($context["user"] ?? null));
            echo "
                    </div>
                    <div class=\"col-md-4\">
                        ";
            // line 31
            echo $context["display"]->getcard_widget(get_lang("FirstLoginInPlatform"), $this->getAttribute(($context["user"] ?? null), "first_connection", []), "calendar");
            echo "

                        ";
            // line 33
            echo $context["display"]->getcard_widget(get_lang("LatestLoginInPlatform"), $this->getAttribute(($context["user"] ?? null), "last_connection", []), "calendar");
            echo "

                        ";
            // line 35
            if ($this->getAttribute(($context["user"] ?? null), "legal", [])) {
                // line 36
                echo "                            ";
                echo $context["display"]->getcard_widget(get_lang("LegalAccepted"), $this->getAttribute($this->getAttribute(($context["user"] ?? null), "legal", []), "datetime", []), "gavel", $this->getAttribute($this->getAttribute(($context["user"] ?? null), "legal", []), "icon", []));
                echo "
                        ";
            }
            // line 38
            echo "                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- DETAILS -->
";
        } else {
            // line 46
            echo "    <div class=\"details\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                ";
            // line 49
            echo $context["display"]->getpanel("", $context["display"]->getreporting_user_box(($context["user"] ?? null)), "");
            echo "
            </div>

            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-8\">

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"easy-donut\">
                                    <div id=\"easypiechart-blue\" title=\"";
            // line 59
            echo get_lang("Progress");
            echo "\" class=\"easypiechart\"
                                         data-percent=\"";
            // line 60
            echo $this->getAttribute(($context["user"] ?? null), "student_progress", []);
            echo "\">
                                        <span class=\"percent\">";
            // line 61
            echo $this->getAttribute(($context["user"] ?? null), "student_progress", []);
            echo "%</span>
                                    </div>
                                    <div class=\"easypiechart-legend\">
                                        ";
            // line 64
            echo get_lang("ScormAndLPProgressTotalAverage");
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"easy-donut\">
                                    <div id=\"easypiechart-red\" title=\"";
            // line 70
            echo get_lang("Score");
            echo "\" class=\"easypiechart\"
                                         data-percent=\"";
            // line 71
            echo $this->getAttribute(($context["user"] ?? null), "student_score", []);
            echo "\">
                                        <span class=\"percent\">";
            // line 72
            echo $this->getAttribute(($context["user"] ?? null), "student_score", []);
            echo " </span>
                                    </div>
                                    <div class=\"easypiechart-legend\">
                                        ";
            // line 75
            echo get_lang("ScormAndLPTestTotalAverage");
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">

                                <div class=\"card box-widget\">
                                    <div class=\"card-body\">
                                        <div class=\"stat-widget-five\">
                                            <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                            ";
            // line 87
            echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "links", []);
            echo "
                                            <div class=\"box-name\">
                                                ";
            // line 89
            echo get_lang("LinksDetails");
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card box-widget\">
                                    <div class=\"card-body\">
                                        <div class=\"stat-widget-five\">
                                            <i class=\"fa fa-download\" aria-hidden=\"true\"></i>
                                            ";
            // line 99
            echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "documents", []);
            echo "
                                            <div class=\"box-name\">
                                                ";
            // line 101
            echo get_lang("DocumentsDetails");
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card box-widget\">
                                    <div class=\"card-body\">
                                        <div class=\"stat-widget-five\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                            ";
            // line 111
            echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "tasks", []);
            echo "
                                            <div class=\"box-name\">
                                                ";
            // line 113
            echo get_lang("Student_publication");
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"col-md-6\">

                                <div class=\"card box-widget\">
                                    <div class=\"card-body\">
                                        <div class=\"stat-widget-five\">
                                            <i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i>
                                            ";
            // line 126
            echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "messages", []);
            echo "
                                            <div class=\"box-name\">
                                                ";
            // line 128
            echo get_lang("NumberOfPostsForThisUser");
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card box-widget\">
                                    <div class=\"card-body\">
                                        <div class=\"stat-widget-five\">
                                            <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
                                            ";
            // line 138
            echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "upload_documents", []);
            echo "
                                            <div class=\"box-name\">
                                                ";
            // line 140
            echo get_lang("UploadedDocuments");
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card box-widget\">
                                    <div class=\"card-body\">
                                        <div class=\"stat-widget-five\">
                                            <i class=\"fa fa-plug\" aria-hidden=\"true\"></i>
                                            <span class=\"date\" title=\"";
            // line 150
            echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "chat_connection", []);
            echo "\">
                                        ";
            // line 151
            if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "chat_connection", []) != "")) {
                // line 152
                echo "                                            ";
                echo $this->getAttribute($this->getAttribute(($context["user"] ?? null), "tools", []), "chat_connection", []);
                echo "
                                        ";
            } else {
                // line 154
                echo "                                            ";
                echo get_lang("NotRegistered");
                echo "
                                        ";
            }
            // line 156
            echo "                                        </span>
                                            <div class=\"box-name\">
                                                ";
            // line 158
            echo get_lang("ChatLastConnection");
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class=\"col-md-4\">
                        ";
            // line 169
            echo $context["display"]->getcard_widget(get_lang("FirstLoginInPlatform"), $this->getAttribute(($context["user"] ?? null), "first_connection", []), "calendar");
            echo "

                        ";
            // line 171
            echo $context["display"]->getcard_widget(get_lang("LatestLoginInPlatform"), $this->getAttribute(($context["user"] ?? null), "last_connection", []), "calendar");
            echo "

                        ";
            // line 173
            if ($this->getAttribute(($context["user"] ?? null), "time_spent_course", [])) {
                // line 174
                echo "                            ";
                echo $context["display"]->getcard_widget(get_lang("TimeSpentInTheCourse"), $this->getAttribute(($context["user"] ?? null), "time_spent_course", []), "clock-o");
                echo "
                        ";
            }
            // line 176
            echo "
                        ";
            // line 177
            if ($this->getAttribute(($context["user"] ?? null), "legal", [])) {
                // line 178
                echo "                            ";
                echo $context["display"]->getcard_widget(get_lang("LegalAccepted"), $this->getAttribute($this->getAttribute(($context["user"] ?? null), "legal", []), "datetime", []), "gavel", $this->getAttribute($this->getAttribute(($context["user"] ?? null), "legal", []), "icon", []));
                echo "
                        ";
            }
            // line 180
            echo "                    </div>
                </div>

            </div>
        </div>
    </div>
";
        }
        // line 187
        echo "
<script type=\"text/javascript\">
    \$(function () {
        \$('#easypiechart-blue').easyPieChart({
            scaleColor: false,
            barColor: '#30a5ff',
            lineWidth: 8,
            trackColor: '#f2f2f2'
        });

        \$('#easypiechart-red').easyPieChart({
            scaleColor: false,
            barColor: '#f9243f',
            lineWidth: 8,
            trackColor: '#f2f2f2'
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/my_space/user_details.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 187,  346 => 180,  340 => 178,  338 => 177,  335 => 176,  329 => 174,  327 => 173,  322 => 171,  317 => 169,  303 => 158,  299 => 156,  293 => 154,  287 => 152,  285 => 151,  281 => 150,  268 => 140,  263 => 138,  250 => 128,  245 => 126,  229 => 113,  224 => 111,  211 => 101,  206 => 99,  193 => 89,  188 => 87,  173 => 75,  167 => 72,  163 => 71,  159 => 70,  150 => 64,  144 => 61,  140 => 60,  136 => 59,  123 => 49,  118 => 46,  108 => 38,  102 => 36,  100 => 35,  95 => 33,  90 => 31,  84 => 28,  76 => 23,  72 => 22,  66 => 19,  57 => 12,  55 => 11,  49 => 8,  45 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/my_space/user_details.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\my_space\\user_details.tpl");
    }
}
