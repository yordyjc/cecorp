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

/* default/mail/mail.tpl */
class __TwigTemplate_78bc9e9d28130e2eb54665a84fd4b9781b17a39caecc5c726ae957e7a741643d extends \Twig\Template
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
    <title>";
        // line 4
        echo $this->getAttribute(($context["_s"] ?? null), "institution", []);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <script type=\"application/ld+json\">
        {
          \"@context\":       \"http://schema.org\",
          \"@type\":          \"EmailMessage\",
          \"description\":    \"Chamilo Mail Notification\",
          \"potentialAction\": {
            \"@type\": \"ViewAction\",
            \"target\": \"";
        // line 14
        echo ($context["link"] ?? null);
        echo "\"
          }
        }
    </script>
</head>
<body style=\"background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;\">
    <tr>
        <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\">&nbsp;</td>
        <td class=\"container\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;\">
            <div class=\"content\" style=\"box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;\">
                <table class=\"main\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;\">
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class=\"wrapper\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\">
                                <tr>
                                    <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\">
                                        <!-- START HEADER LOGO -->
                                        ";
        // line 33
        $this->loadTemplate(api_find_template("mail/header.tpl"), "default/mail/mail.tpl", 33)->display($context);
        // line 34
        echo "                                        <!-- END HEADER LOGO -->
                                        <div ";
        // line 35
        echo ($context["mail_content_style"] ?? null);
        echo ">
                                            ";
        // line 36
        echo ($context["content"] ?? null);
        echo "
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- START FOOTER -->
                ";
        // line 46
        $this->loadTemplate(api_find_template("mail/footer.tpl"), "default/mail/mail.tpl", 46)->display($context);
        // line 47
        echo "                <!-- END FOOTER -->
            </div>
        </td>
        <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\">&nbsp;</td>
    </tr>
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/mail/mail.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  92 => 46,  79 => 36,  75 => 35,  72 => 34,  70 => 33,  48 => 14,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/mail/mail.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\mail\\mail.tpl");
    }
}
