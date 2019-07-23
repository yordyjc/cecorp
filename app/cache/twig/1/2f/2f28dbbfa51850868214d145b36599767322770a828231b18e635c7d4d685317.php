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

/* default/tracking/tracking_course_log.tpl */
class __TwigTemplate_dccb98d3465e6f9a573093b6af0d9ab507de810ded1784ac626362ad9eb1b922 extends \Twig\Template
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
        echo "<!-- tracking course log -->
<script>
window.onload = function() {
    var scoreStudent = document.getElementById(\"chart-score\").getContext('2d');
    var lastAccess = document.getElementById(\"chart-access\").getContext('2d');
    var jsonfile = ";
        // line 6
        echo ($context["json_time_student"] ?? null);
        echo ";
    var labels = [];
    var times = [];

   Object.keys(jsonfile).forEach(function(key) {
       //Names
       labels.push(jsonfile[key].fullname);
       //Time plataform total
       times.push(jsonfile[key].total_time);
   });

    var myChartAccess = new Chart(lastAccess, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                data: times,
                borderColor: \"#3ba557\",
                backgroundColor: \"#3ba557\",
                borderWidth: 1,
                fill: false,
                label: '";
        // line 27
        echo twig_escape_filter($this->env, get_lang("Minutes"), "js");
        echo "',
            }]
        },
        options: {
            legend:{
                display: false
            },
            scales: {
                xAxes:[{
                    position: \"bottom\",
                    scaleLabel: {
                        display: true,
                        labelString: '";
        // line 39
        echo twig_escape_filter($this->env, get_lang("Students"), "js");
        echo "',
                    },
                    ticks: {
                        display: false
                    }
                }],
                yAxes: [{
                    position: \"left\",
                    scaleLabel: {
                        display: true,
                        labelString: '";
        // line 49
        echo twig_escape_filter($this->env, get_lang("Minutes"), "js");
        echo "',
                    }
                }]
            }
        }
    });

    var myChartScore = new Chart(scoreStudent, {
        type: 'bar',
        data: {
            labels: [\"0-9%\", \"10-19%\", \"20-29%\", \"30-39%\", \"40-49%\", \"50-59%\", \"60-69%\", \"70-79%\", \"80-89%\", \"90-100%\"],
            datasets: [{
                label: '";
        // line 61
        echo twig_escape_filter($this->env, get_lang("NumberOfUsers"), "js");
        echo "',
                data: ";
        // line 62
        echo ($context["score_distribution"] ?? null);
        echo ",
                backgroundColor: ";
        // line 63
        echo ($context["chart_colors"] ?? null);
        echo ",
                borderColor: ";
        // line 64
        echo ($context["chart_colors"] ?? null);
        echo ",
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            legend:{
              display: false
            },
            scales: {
                yAxes: [{
                    position: \"left\",
                    scaleLabel: {
                        display: true,
                        labelString: '";
        // line 78
        echo twig_escape_filter($this->env, get_lang("NumberOfUsers"), "js");
        echo "',
                    },
                    ticks: {
                        display: true,
                        min: 0,
                        stepSize: 1
                    }
                }],
                xAxes:[{
                    position: \"bottom\",
                    scaleLabel: {
                        display: true,
                        labelString: \"";
        // line 90
        echo twig_escape_filter($this->env, get_lang("PercentileScoresDistribution"), "js");
        echo "\",
                    },
                    gridLines: {
                      display: true
                    },
                    ticks: {
                        display: false,
                    }
                }],
            }
        }
    });
};
</script>

<div class=\"tracking-course-summary\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"panel panel-default tracking tracking-student\">
                <div class=\"panel-body\">
                    <span class=\"tracking-icon\">
                        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                    </span>
                    <div class=\"tracking-info\">
                        <div class=\"tracking-text\"> ";
        // line 114
        echo get_lang("NumberOfUsers");
        echo "</div>
                        <div class=\"tracking-number\">
                            ";
        // line 116
        echo ($context["number_students"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"panel panel-default tracking tracking-lessons\">
                <div class=\"panel-body\">
                    <span class=\"tracking-icon\">
                        <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                    </span>
                    <div class=\"tracking-info\">
                        <div class=\"tracking-text\"> ";
        // line 129
        echo get_lang("CourseProgress");
        echo "</div>
                        <div class=\"tracking-number\">
                            ";
        // line 131
        echo ($context["students_completed_lp"] ?? null);
        echo "/";
        echo ($context["number_students"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"panel panel-default tracking tracking-exercise\">
                <div class=\"panel-body\">
                    <span class=\"tracking-icon\">
                        <i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i>
                    </span>
                    <div class=\"tracking-info\">
                        <div class=\"tracking-text\"> ";
        // line 144
        echo get_lang("ExerciseAverage");
        echo "</div>
                        <div class=\"tracking-number\">
                            ";
        // line 146
        echo ($context["students_test_score"] ?? null);
        echo "%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"panel panel-default tracking tracking-certificate\">
                <div class=\"panel-body\">
                    <span class=\"tracking-icon\">
                        <i class=\"fa fa-id-card-o\" aria-hidden=\"true\"></i>
                    </span>
                    <div class=\"tracking-info\">
                        <div class=\"tracking-text\"> ";
        // line 159
        echo get_lang("CountCertificates");
        echo "</div>
                        <div class=\"tracking-number\">
                            ";
        // line 161
        echo ($context["certificate_count"] ?? null);
        echo "/";
        echo ($context["number_students"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <div class=\"tracking-chart\">
                        <h4 class=\"tracking-box-title\">";
        // line 173
        echo get_lang("PercentileScoresDistribution");
        echo "</h4>
                        <canvas id=\"chart-score\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default tracking-top-student\">
                <div class=\"panel-body\">
                    <h4 class=\"tracking-box-title\">";
        // line 182
        echo get_lang("OutstandingStudents");
        echo "</h4>
                    <ul class=\"list-top\">
                        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["top_students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 185
            echo "                            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 186
            echo "                            ";
            if ((($context["counter"] ?? null) <= 3)) {
                // line 187
                echo "                            <li>
                                <div class=\"avatar\">
                                    <span class=\"round\">
                                        <img
                                                title=\"";
                // line 191
                echo $this->getAttribute($context["student"], "fullname", []);
                echo "\"
                                                alt=\"";
                // line 192
                echo $this->getAttribute($context["student"], "fullname", []);
                echo "\"
                                                src=\"";
                // line 193
                echo $this->getAttribute($context["student"], "avatar", []);
                echo "\"
                                                width=\"40px\">
                                    </span>
                                </div>
                                <div class=\"info\">
                                    <h3 class=\"name\">";
                // line 198
                echo $this->getAttribute($context["student"], "fullname", []);
                echo "</h3>
                                    <div class=\"progress\">
                                        <div
                                            class=\"progress-bar progress-bar-success progress-bar-striped\"
                                            role=\"progressbar\"
                                            aria-valuenow=\"";
                // line 203
                echo $this->getAttribute($context["student"], "score", []);
                echo "\" aria-valuemin=\"0\"
                                            aria-valuemax=\"100\" style=\"width: ";
                // line 204
                echo $this->getAttribute($context["student"], "score", []);
                echo "%;\">
                                            ";
                // line 205
                echo $this->getAttribute($context["student"], "score", []);
                echo "%
                                        </div>
                                    </div>
                                </div>
                            </li>
                            ";
            }
            // line 211
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                    </ul>
                   <span class=\"tracking-box-legend\">
                       ";
        // line 214
        echo get_lang("ProgressObtainedFromLPProgressAndTestsAverage");
        echo "
                   </span>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h4 class=\"tracking-box-title\">";
        // line 222
        echo get_lang("TotalTimeSpentInTheCourse");
        echo "</h4>
                    <canvas id=\"chart-access\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "default/tracking/tracking_course_log.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 222,  346 => 214,  342 => 212,  336 => 211,  327 => 205,  323 => 204,  319 => 203,  311 => 198,  303 => 193,  299 => 192,  295 => 191,  289 => 187,  286 => 186,  283 => 185,  279 => 184,  274 => 182,  262 => 173,  245 => 161,  240 => 159,  224 => 146,  219 => 144,  201 => 131,  196 => 129,  180 => 116,  175 => 114,  148 => 90,  133 => 78,  116 => 64,  112 => 63,  108 => 62,  104 => 61,  89 => 49,  76 => 39,  61 => 27,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/tracking/tracking_course_log.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\tracking\\tracking_course_log.tpl");
    }
}
