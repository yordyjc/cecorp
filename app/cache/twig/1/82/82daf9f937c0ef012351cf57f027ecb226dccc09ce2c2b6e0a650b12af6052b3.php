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

/* default/admin/questions.tpl */
class __TwigTemplate_187c8e2279e2de81455f57a3070bbe7123c87f244656c3e3b97126961519e71f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/admin/questions.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default/admin/questions.tpl", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        echo ($context["form"] ?? null);
        echo "

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 8
            echo "        ";
            echo $context["display"]->getcollapse($this->getAttribute(            // line 9
$context["question"], "iid", []), ((((("#" . $this->getAttribute(            // line 10
$context["question"], "courseCode", [])) . "-") . $this->getAttribute($context["question"], "iid", [])) . " - ") . $this->getAttribute($context["question"], "question", [])), $this->getAttribute(            // line 11
$context["question"], "questionData", []), false, false);
            // line 15
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 18
        if ((($context["question_count"] ?? null) > ($context["pagination_length"] ?? null))) {
            // line 19
            echo "        ";
            echo ($context["pagination"] ?? null);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "default/admin/questions.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  70 => 18,  67 => 17,  60 => 15,  58 => 11,  57 => 10,  56 => 9,  54 => 8,  50 => 7,  44 => 5,  41 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/admin/questions.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\admin\\questions.tpl");
    }
}
