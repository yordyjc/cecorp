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

/* buycourses/view/session_panel.tpl */
class __TwigTemplate_af195293f7be2e966d7e5e3c95cc8dfcf35b4f843be62a340b8780c8ab683250 extends \Twig\Template
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
            echo "            <li id=\"buy-sessions-tab\" class=\"active\" role=\"presentation\">
                <a href=\"session_panel.php\" aria-controls=\"buy-sessions\" role=\"tab\">";
            // line 11
            echo get_lang("MySessions");
            echo "</a>
            </li>
        ";
        }
        // line 14
        echo "        ";
        if (($context["services_are_included"] ?? null)) {
            // line 15
            echo "            <li id=\"buy-services-tab\" class=\"\" role=\"presentation\">
                <a href=\"service_panel.php\" aria-controls=\"buy-services\"
                   role=\"tab\">";
            // line 17
            echo get_plugin_lang("MyServices", "BuyCoursesPlugin");
            echo "</a>
            </li>
        ";
        }
        // line 20
        echo "        <li id=\"buy-courses-tab\" class=\"\" role=\"presentation\">
            <a href=\"payout_panel.php\" aria-controls=\"buy-courses\"
               role=\"tab\">";
        // line 22
        echo get_plugin_lang("MyPayouts", "BuyCoursesPlugin");
        echo "</a>
        </li>
    </ul>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>";
        // line 29
        echo get_lang("Session");
        echo "</th>
            <th class=\"text-center\">";
        // line 30
        echo get_plugin_lang("PaymentMethod", "BuyCoursesPlugin");
        echo "</th>
            <th class=\"text-center\">";
        // line 31
        echo get_plugin_lang("Price", "BuyCoursesPlugin");
        echo "</th>
            <th class=\"text-center\">";
        // line 32
        echo get_plugin_lang("OrderDate", "BuyCoursesPlugin");
        echo "</th>
            <th class=\"text-center\">";
        // line 33
        echo get_plugin_lang("OrderReference", "BuyCoursesPlugin");
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sale_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sale"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo $this->getAttribute($context["sale"], "product_name", []);
            echo "</td>
                <td class=\"text-center\">";
            // line 40
            echo $this->getAttribute($context["sale"], "payment_type", []);
            echo "</td>
                <td class=\"text-right\">";
            // line 41
            echo (($this->getAttribute($context["sale"], "currency", []) . " ") . $this->getAttribute($context["sale"], "price", []));
            echo "</td>
                <td class=\"text-center\">";
            // line 42
            echo $this->getAttribute($context["sale"], "date", []);
            echo "</td>
                <td class=\"text-center\">";
            // line 43
            echo $this->getAttribute($context["sale"], "reference", []);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>


</div>
";
    }

    public function getTemplateName()
    {
        return "buycourses/view/session_panel.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  127 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  108 => 38,  104 => 37,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  71 => 22,  67 => 20,  61 => 17,  57 => 15,  54 => 14,  48 => 11,  45 => 10,  43 => 9,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "buycourses/view/session_panel.tpl", "C:\\wamp64\\www\\chamilo\\plugin\\buycourses\\view\\session_panel.tpl");
    }
}
