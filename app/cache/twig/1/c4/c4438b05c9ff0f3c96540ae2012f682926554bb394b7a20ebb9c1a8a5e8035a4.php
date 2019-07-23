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

/* default/mail/content_registration_platform.tpl */
class __TwigTemplate_b70fd9a5b1bc296861fff3604ca43508e0e0eb39919ace2018d544ece1defe65 extends \Twig\Template
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
        echo "<p>";
        echo get_lang("Dear");
        echo " ";
        echo ($context["complete_name"] ?? null);
        echo ",</p>
<p>";
        // line 2
        echo get_lang("YouAreReg");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo " ";
        echo get_lang("WithTheFollowingSettings");
        echo "</p>
<p>";
        // line 3
        echo get_lang("Username");
        echo " : ";
        echo ($context["login_name"] ?? null);
        echo "<br>
    ";
        // line 4
        echo get_lang("Pass");
        echo " : ";
        echo ($context["original_password"] ?? null);
        echo "</p>
<p>";
        // line 5
        echo sprintf(get_lang("ThanksForRegisteringToSite"), $this->getAttribute(($context["_s"] ?? null), "site_name", []));
        echo "</p>
<p>";
        // line 6
        echo get_lang("Address");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo " ";
        echo get_lang("Is");
        echo " : ";
        echo ($context["mailWebPath"] ?? null);
        echo "</p>
<p>";
        // line 7
        echo get_lang("Problem");
        echo "</p>
<p>";
        // line 8
        echo get_lang("SignatureFormula");
        echo "</p>
<p>";
        // line 9
        echo $this->getAttribute(($context["_admin"] ?? null), "name", []);
        echo ", ";
        echo $this->getAttribute(($context["_admin"] ?? null), "surname", []);
        echo "<br>
    ";
        // line 10
        echo get_lang("Manager");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo "<br>
    ";
        // line 11
        echo (($this->getAttribute(($context["_admin"] ?? null), "telephone", [])) ? (("T. " . $this->getAttribute(($context["_admin"] ?? null), "telephone", []))) : (""));
        echo "<br>
    ";
        // line 12
        echo (($this->getAttribute(($context["_admin"] ?? null), "email", [])) ? (((get_lang("Email") . ": ") . $this->getAttribute(($context["_admin"] ?? null), "email", []))) : (""));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "default/mail/content_registration_platform.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  91 => 11,  85 => 10,  79 => 9,  75 => 8,  71 => 7,  61 => 6,  57 => 5,  51 => 4,  45 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/mail/content_registration_platform.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\mail\\content_registration_platform.tpl");
    }
}
