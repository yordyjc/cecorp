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

/* default/gradebook/custom_certificate.tpl */
class __TwigTemplate_fcbd73b895854cc4cbb9355a08def50e3001fe971a0998a6ea5e1a77f9a34e43 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 5
        echo get_lang("Certificate");
        echo "</title>
</head>
<body>
<table border=\"0\" bgcolor=\"#92c647\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"80%\">
    <tr>
        <td bgcolor=\"#92c647\"><img src=\"";
        // line 10
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/header_top.png\" style=\"display: block;\"></td>
    </tr>
    <tr>
        <td>
            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                <tr>
                    <td bgcolor=\"#92c647\" width=58 height=91>
                        <img src=\"";
        // line 17
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/lado-b.png\" style=\"display:block;\">
                    </td>
                    <td bgcolor=\"#92c647\" width=700 height=91 style=\"font-family:CourierSans-Light; font-weight: bold; line-height: 47px; color:#FFF; padding-bottom: 10px; font-size: 45px;\">
                        ";
        // line 20
        echo get_lang("CertificateHeader");
        echo "
                    </td>
                    <td bgcolor=\"#92c647\" width=58 height=91>
                        <img src=\"";
        // line 23
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/lado-header.png\" style=\"display:block;\">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table bgcolor=\"#FFFFFF\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" height=900>
                <tr>
                    <td bgcolor=\"#92c647\" height=755><img src=\"";
        // line 33
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/lado-a.png\" style=\"display:block;\"></td>
                    <td height=755 style=\"font-family:CourierSans-Light; line-height: 22px; color:#40ad49; padding: 40px; font-size: 18px;\" valign=\"top\">
                        <h3 style=\"color: #672290; font-size: 24px;\">
                            ";
        // line 36
        echo ($context["complete_name"] ?? null);
        echo "
                        </h3>
                        <p style=\"font-size: 16px;\">
                            ";
        // line 39
        echo sprintf(get_lang("UserHasParticipateDansDePlatformeXTheContratDateXCertificateDateXTimeX"), $this->getAttribute(($context["_s"] ?? null), "site_name", []), ($context["certificate_generated_date_no_time"] ?? null), ($context["terms_validation_date_no_time"] ?? null), ($context["time_in_platform_in_hours"] ?? null));
        echo "
                        </p>
                        <br />
                        <p style=\"font-size: 16px;\">";
        // line 42
        echo sprintf(get_lang("ThisTrainingHasXHours"), ($context["time_in_platform_in_hours"] ?? null));
        echo "</p><br />
                        <p style=\"font-size: 16px;\">
                            ";
        // line 44
        echo get_lang("TimeSpentInLearningPaths");
        echo " : ";
        echo ($context["time_spent_in_lps"] ?? null);
        echo "
                        </p>
                        <br />
                        <p style=\"font-size: 16px;\">";
        // line 47
        echo get_lang("TheContentsAreValidated");
        echo ":</p>
                            ";
        // line 49
        echo "                                ";
        // line 50
        echo "                                    ";
        // line 51
        echo "                                        ";
        // line 52
        echo "                                    ";
        // line 53
        echo "                                ";
        // line 54
        echo "                            ";
        // line 55
        echo "                            ";
        if (($context["courses"] ?? null)) {
            // line 56
            echo "                                <ul style=\"color: #672290; font-size: 16px;\">
                                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 58
                echo "                                        <li>";
                echo $context["course"];
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                </ul>
                            ";
        }
        // line 62
        echo "                            <br />
                        <h4 style=\"color: #672290; font-size: 16px;\">";
        // line 63
        echo ($context["complete_name"] ?? null);
        echo "</h4>
                        <p style=\"color:#40ad49; font-size: 16px;\">";
        // line 64
        echo get_lang("SkillsValidated");
        echo ":</p>
                            ";
        // line 65
        if (($context["skills"] ?? null)) {
            // line 66
            echo "                                <ul style=\"color: #672290; font-size: 16px;\">
                                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 68
                echo "                                    <li>";
                echo $this->getAttribute($context["skill"], "name", []);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                </ul>
                            ";
        }
        // line 72
        echo "                            <br />
                        <p style=\"color:#40ad49; font-size: 16px;\">Berlin/Paris, ";
        // line 73
        echo get_lang("The");
        echo " <span style=\"font-weight: bold; color: #672290;\">";
        echo ($context["certificate_generated_date_no_time"] ?? null);
        echo "</span><br />
                            ";
        // line 74
        echo get_lang("ThePlatformTeam");
        echo "</p>
                        <br />
                    </td>
                    <td height=755 bgcolor=\"#92c647\">
                        <img src=\"";
        // line 78
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/lado-b.png\" style=\"display:block;\">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" height=91>
                <tr>
                    <td bgcolor=\"#92c647\" width=58 height=91><img src=\"";
        // line 88
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/lado-b.png\"  style=\"display:block;\"></td>
                    <td bgcolor=\"#92c647\" width=500 height=91 style=\"font-family:CourierSans-Light; line-height: 18px; color:#FFF;\">
                        ";
        // line 90
        echo get_lang("CertificateFooter");
        echo "
                    </td>
                    <td bgcolor=\"#92c647\" width=245 height=91><img src=\"";
        // line 92
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/lado-footer.png\" style=\"display:block;\"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "default/gradebook/custom_certificate.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 92,  216 => 90,  211 => 88,  198 => 78,  191 => 74,  185 => 73,  182 => 72,  178 => 70,  169 => 68,  165 => 67,  162 => 66,  160 => 65,  156 => 64,  152 => 63,  149 => 62,  145 => 60,  136 => 58,  132 => 57,  129 => 56,  126 => 55,  124 => 54,  122 => 53,  120 => 52,  118 => 51,  116 => 50,  114 => 49,  110 => 47,  102 => 44,  97 => 42,  91 => 39,  85 => 36,  79 => 33,  66 => 23,  60 => 20,  54 => 17,  44 => 10,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/gradebook/custom_certificate.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\gradebook\\custom_certificate.tpl");
    }
}
