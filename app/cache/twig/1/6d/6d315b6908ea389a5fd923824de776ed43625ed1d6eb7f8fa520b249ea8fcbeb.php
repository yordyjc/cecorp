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

/* buycourses/view/index.tpl */
class __TwigTemplate_3bdce7aa83920435ade9a30796f61effa756395a7e474d22fc84ba743ed23e07 extends \Twig\Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/style.css\"/>
";
        // line 2
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", [])) {
            // line 3
            echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <article class=\"jumbotron\">
                <h3>";
            // line 6
            echo get_plugin_lang("TitlePlugin", "BuyCoursesPlugin");
            echo "</h3>
                <p>";
            // line 7
            echo get_plugin_lang("PluginPresentation", "BuyCoursesPlugin");
            echo "</p>
                <ul class=\"list-unstyled\">
                    <li>
                        ";
            // line 10
            echo get_plugin_lang("Instructions", "BuyCoursesPlugin");
            echo "
                        <ul>
                            <li>";
            // line 12
            echo get_plugin_lang("InstructionsStepOne", "BuyCoursesPlugin");
            echo "</li>
                            <li>";
            // line 13
            echo get_plugin_lang("InstructionsStepTwo", "BuyCoursesPlugin");
            echo "</li>
                            <li>";
            // line 14
            echo get_plugin_lang("InstructionsStepThree", "BuyCoursesPlugin");
            echo "</li>
                        </ul>
                    </li>
                </ul>
            </article>
        </div>
    </div>
";
        }
        // line 22
        echo "
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"thumbnail\">
            <a href=\"src/course_catalog.php\">
                <img src=\"resources/img/128/buycourses.png\">
            </a>
            <div class=\"caption\">
                <p class=\"text-center\">
                    <a class=\"btn btn-default btn-sm\"
                       href=\"src/course_catalog.php\">";
        // line 32
        echo get_plugin_lang("BuyCourses", "BuyCoursesPlugin");
        echo "</a>
                </p>
            </div>
        </div>
    </div>

    ";
        // line 38
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", [])) {
            // line 39
            echo "        <div class=\"col-md-3\">
            <div class=\"thumbnail\">
                <a href=\"src/configuration.php\">
                    <img src=\"resources/img/128/settings.png\">
                </a>
                <div class=\"caption\">
                    <p class=\"text-center\">
                        <a class=\"btn btn-default btn-sm\"
                           href=\"src/configuration.php\">";
            // line 47
            echo get_plugin_lang("ConfigurationOfCoursesAndPrices", "BuyCoursesPlugin");
            echo "</a>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"thumbnail\">
                <a href=\"src/paymentsetup.php\">
                    <img src=\"resources/img/128/paymentsettings.png\">
                </a>
                <div class=\"caption\">
                    <p class=\"text-center\">
                        <a class=\"btn btn-default btn-sm\"
                           href=\"src/paymentsetup.php\">";
            // line 60
            echo get_plugin_lang("PaymentsConfiguration", "BuyCoursesPlugin");
            echo "</a>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"thumbnail\">
                <a href=\"src/sales_report.php\">
                    <img src=\"resources/img/128/backlogs.png\">
                </a>
                <div class=\"caption\">
                    <p class=\"text-center\">
                        <a class=\"btn btn-default btn-sm\"
                           href=\"src/sales_report.php\"> ";
            // line 73
            echo get_plugin_lang("SalesReport", "BuyCoursesPlugin");
            echo "</a>
                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 79
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "buycourses/view/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 79,  139 => 73,  123 => 60,  107 => 47,  97 => 39,  95 => 38,  86 => 32,  74 => 22,  63 => 14,  59 => 13,  55 => 12,  50 => 10,  44 => 7,  40 => 6,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "buycourses/view/index.tpl", "C:\\wamp64\\www\\chamilo\\plugin\\buycourses\\view\\index.tpl");
    }
}
