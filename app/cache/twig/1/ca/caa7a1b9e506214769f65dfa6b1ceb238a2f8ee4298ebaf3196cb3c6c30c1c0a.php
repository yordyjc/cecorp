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

/* buycourses/view/payout_panel.tpl */
class __TwigTemplate_0bb40966f0a35422b37c1c6ca0adddd392b1af3a0ba8c431e5060dcc444ce256 extends \Twig\Template
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

    <ul class=\"nav nav-tabs buy-courses-tabs\" role=\"tablist\">
        <li id=\"buy-courses-tab\" class=\"\" role=\"presentation\">
            <a href=\"course_panel.php\" aria-controls=\"buy-courses\" role=\"tab\">";
        // line 7
        echo get_lang("MyCourses");
        echo "</a>
        </li>
        ";
        // line 9
        if (($context["sessions_are_included"] ?? null)) {
            // line 10
            echo "            <li id=\"buy-sessions-tab\" class=\"\" role=\"presentation\">
                <a href=\"session_panel.php\" aria-controls=\"buy-sessions\" role=\"tab\">";
            // line 11
            echo get_lang("MySessions");
            echo "</a>
            </li>
        ";
        }
        // line 14
        echo "        <li id=\"buy-courses-tab\" class=\"active\" role=\"presentation\">
            <a href=\"payout_panel.php\" aria-controls=\"buy-courses\"
               role=\"tab\">";
        // line 16
        echo get_plugin_lang("MyPayouts", "BuyCoursesPlugin");
        echo "</a>
        </li>
    </ul>
    ";
        // line 19
        if ( !($context["payout_list"] ?? null)) {
            // line 20
            echo "        <p class=\"alert alert-info\">
            ";
            // line 21
            echo get_plugin_lang("WantToSellCourses", "BuyCoursesPlugin");
            echo "
            <a href=\"#\">";
            // line 22
            echo get_plugin_lang("ClickHere", "BuyCoursesPlugin");
            echo "</a>
        </p>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if (($context["payout_list"] ?? null)) {
            // line 27
            echo "        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th class=\"text-center\">";
            // line 30
            echo get_plugin_lang("OrderReference", "BuyCoursesPlugin");
            echo "</th>
                <th class=\"text-center\">";
            // line 31
            echo get_plugin_lang("PayoutDate", "BuyCoursesPlugin");
            echo "</th>
                <th class=\"text-right\">";
            // line 32
            echo get_plugin_lang("Commission", "BuyCoursesPlugin");
            echo "</th>
                <th class=\"text-right\">";
            // line 33
            echo get_plugin_lang("PayPalAccount", "BuyCoursesPlugin");
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payout_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payout"]) {
                // line 38
                echo "                <tr>
                    <td class=\"text-center\" style=\"vertical-align:middle\"><a id=\"";
                // line 39
                echo $this->getAttribute($context["payout"], "sale_id", []);
                echo "\" class=\"saleInfo\"
                                                                             data-toggle=\"modal\" data-target=\"#saleInfo\"
                                                                             href=\"#\">";
                // line 41
                echo $this->getAttribute($context["payout"], "reference", []);
                echo "</a></td>
                    <td class=\"text-center\" style=\"vertical-align:middle\">";
                // line 42
                echo $this->getAttribute($context["payout"], "payout_date", []);
                echo "</td>
                    <td class=\"text-right\"
                        style=\"vertical-align:middle\">";
                // line 44
                echo (($this->getAttribute($context["payout"], "currency", []) . " ") . $this->getAttribute($context["payout"], "commission", []));
                echo "</td>
                    <td class=\"text-right\" style=\"vertical-align:middle\">";
                // line 45
                echo $this->getAttribute($context["payout"], "paypal_account", []);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </tbody>
        </table>
    ";
        }
        // line 51
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "buycourses/view/payout_panel.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  142 => 48,  133 => 45,  129 => 44,  124 => 42,  120 => 41,  115 => 39,  112 => 38,  108 => 37,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  84 => 27,  82 => 26,  79 => 25,  73 => 22,  69 => 21,  66 => 20,  64 => 19,  58 => 16,  54 => 14,  48 => 11,  45 => 10,  43 => 9,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "buycourses/view/payout_panel.tpl", "C:\\wamp64\\www\\chamilo\\plugin\\buycourses\\view\\payout_panel.tpl");
    }
}
