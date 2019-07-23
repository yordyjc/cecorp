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

/* default/mail/footer.tpl */
class __TwigTemplate_1f5a2623a25a72e57c17d183f742d4ea033f2b0dbe6d1f093a8e2e196c6ca713 extends \Twig\Template
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
        echo "<div class=\"footer\" style=\"clear: both; Margin-top: 10px; text-align: center; width: 100%;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\">
        <tr>
            <td class=\"content-block powered-by\" style=\"font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;\">
                <a style=\"color: #999999; font-size: 12px; text-align: center; text-decoration: none;\" href=\"";
        // line 5
        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
        echo "\" target=\"_blank\">
                    ";
        // line 6
        echo sprintf(get_lang("PoweredByX"), $this->getAttribute(($context["_s"] ?? null), "software_name", []));
        echo "
                </a>&copy; ";
        // line 7
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "
            </td>
        </tr>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "default/mail/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/mail/footer.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\mail\\footer.tpl");
    }
}
