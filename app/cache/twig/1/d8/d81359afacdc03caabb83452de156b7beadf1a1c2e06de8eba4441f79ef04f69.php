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

/* default/export/table_pdf.tpl */
class __TwigTemplate_eab2cbded45ea12f70cb5d15ad68b1d5ee775b96aae1ee803350cc7c9fa7bbea extends \Twig\Template
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
        if (($context["pdf_title"] ?? null)) {
            // line 2
            echo "<h2 align=\"center\"> ";
            echo ($context["pdf_title"] ?? null);
            echo " </h2>
";
        }
        // line 4
        echo "
";
        // line 5
        if (($context["pdf_description"] ?? null)) {
            // line 6
            echo "    ";
            echo ($context["pdf_description"] ?? null);
            echo "
    <br /><br />
";
        }
        // line 9
        echo "
<table align=\"center\" width=\"100%\" class=\"full-width border-thin\">
    ";
        // line 11
        if (($context["pdf_student_info"] ?? null)) {
            // line 12
            echo "    <tr>
        <td style=\"background-color: #E5E5E5; text-align: left; width:130px; \">
            <strong>";
            // line 14
            echo get_lang("Student");
            echo ":</strong>
        </td>
        <td>
            ";
            // line 17
            echo $this->getAttribute(($context["pdf_student_info"] ?? null), "complete_name", []);
            echo "
        </td>
    </tr>
    ";
        }
        // line 21
        echo "    ";
        if (($context["pdf_teachers"] ?? null)) {
            // line 22
            echo "        <tr>
            <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
                <strong>";
            // line 24
            echo get_lang("Teacher");
            echo ":</strong>
            </td>
            <td>
                ";
            // line 27
            echo ($context["pdf_teachers"] ?? null);
            echo "
            </td>
        </tr>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (($context["pdf_session_info"] ?? null)) {
            // line 33
            echo "        <tr>
            <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
                <strong>";
            // line 35
            echo get_lang("Session");
            echo ":</strong> ";
            echo $this->getAttribute(($context["pdf_session_info"] ?? null), "name", []);
            echo "
            </td>

            ";
            // line 38
            if ($this->getAttribute(($context["pdf_session_info"] ?? null), "description", [])) {
                // line 39
                echo "            <td>
                <strong>";
                // line 40
                echo get_lang("Description");
                echo ":</strong> ";
                echo $this->getAttribute(($context["pdf_session_info"] ?? null), "description", []);
                echo "
            </td>
            ";
            }
            // line 43
            echo "        </tr>

        ";
            // line 45
            if (((($this->getAttribute(($context["pdf_session_info"] ?? null), "access_start_date", []) != "") &&  !twig_test_empty($this->getAttribute(($context["pdf_session_info"] ?? null), "access_end_date", []))) && ($this->getAttribute(($context["pdf_session_info"] ?? null), "access_end_date", []) != "0000-00-00"))) {
                // line 46
                echo "        <tr>
            <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
                <strong>";
                // line 48
                echo get_lang("PeriodToDisplay");
                echo ":</strong>
            </td>
            <td>
                ";
                // line 51
                echo sprintf(get_lang("FromDateXToDateY"), $this->getAttribute(($context["pdf_session_info"] ?? null), "access_start_date", []), $this->getAttribute(($context["pdf_session_info"] ?? null), "access_end_date", []));
                echo "
            </td>
        </tr>
        ";
            }
            // line 55
            echo "    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (($context["pdf_course_info"] ?? null)) {
            // line 58
            echo "    <tr>
        <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
            <strong>";
            // line 60
            echo get_lang("Course");
            echo ":</strong>
        </td>
        <td>
            ";
            // line 63
            echo $this->getAttribute(($context["pdf_course_info"] ?? null), "title", []);
            echo " (";
            echo $this->getAttribute(($context["pdf_course_info"] ?? null), "code", []);
            echo ")
        </td>
    </tr>
        ";
            // line 66
            if (($context["pdf_course_category"] ?? null)) {
                // line 67
                echo "            <tr>
                <td> <strong>";
                // line 68
                echo get_lang("Category");
                echo ":</strong></td>
                <td> ";
                // line 69
                echo ($context["pdf_course_category"] ?? null);
                echo " </td>
            </tr>
        ";
            }
            // line 72
            echo "    ";
        }
        // line 73
        echo "
    ";
        // line 74
        if (($context["pdf_date"] ?? null)) {
            // line 75
            echo "    <tr>
        <td style=\"background-color: #E5E5E5; text-align: left; width:130px;\">
            <strong>";
            // line 77
            echo get_lang("Date");
            echo ":</strong>
        </td>
        <td>
            ";
            // line 80
            echo ($context["pdf_date"] ?? null);
            echo "
        </td>
    </tr>
    ";
        }
        // line 84
        echo "</table>
<br />

";
        // line 87
        if ((($context["show_grade_generated_date"] ?? null) == true)) {
            // line 88
            echo "<h5 align=\"right\">
    ";
            // line 89
            echo sprintf(get_lang("GradeGeneratedOnX"), twig_date_format_filter($this->env, "now", "d/m/Y"));
            echo "
</h5>
";
        }
        // line 92
        echo "
";
        // line 93
        echo ($context["pdf_content"] ?? null);
        echo "

";
        // line 95
        if ( !twig_test_empty(($context["add_signatures"] ?? null))) {
            // line 96
            echo "    <br />
    <br />

    <table class=\"full-width\">
        <tr>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["add_signatures"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["signature"]) {
                // line 102
                echo "                <td class=\"text-center\">
                    _____________________________
                    <br />
                    ";
                // line 105
                echo get_lang($context["signature"]);
                echo "
                </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        </tr>
    </table>
";
        }
        // line 111
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/export/table_pdf.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 111,  263 => 108,  254 => 105,  249 => 102,  245 => 101,  238 => 96,  236 => 95,  231 => 93,  228 => 92,  222 => 89,  219 => 88,  217 => 87,  212 => 84,  205 => 80,  199 => 77,  195 => 75,  193 => 74,  190 => 73,  187 => 72,  181 => 69,  177 => 68,  174 => 67,  172 => 66,  164 => 63,  158 => 60,  154 => 58,  152 => 57,  149 => 56,  146 => 55,  139 => 51,  133 => 48,  129 => 46,  127 => 45,  123 => 43,  115 => 40,  112 => 39,  110 => 38,  102 => 35,  98 => 33,  96 => 32,  93 => 31,  86 => 27,  80 => 24,  76 => 22,  73 => 21,  66 => 17,  60 => 14,  56 => 12,  54 => 11,  50 => 9,  43 => 6,  41 => 5,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/export/table_pdf.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\export\\table_pdf.tpl");
    }
}
