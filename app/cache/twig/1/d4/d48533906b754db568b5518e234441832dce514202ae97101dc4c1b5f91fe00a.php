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

/* default/export/pdf_footer.tpl */
class __TwigTemplate_883c44c35bf8cd37a8cc7527b3c95c77c9a6b11b749e1e190df296c66fd48e5b extends \Twig\Template
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
        echo "<table border=\"0\" class=\"full-width border-top page-footer\">
    <tr>
        <td class=\"text-left\">
            <strong>";
        // line 4
        echo $this->getAttribute(($context["_s"] ?? null), "institution", []);
        echo "</strong>
        </td>
        <td class=\"text-right\">
            <strong>{PAGENO} / {nb}</strong>
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "default/export/pdf_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/export/pdf_footer.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\export\\pdf_footer.tpl");
    }
}
