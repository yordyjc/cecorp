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

/* default/social/skills_block.tpl */
class __TwigTemplate_449f85c9a0f980c6aaa9c380a1b7d68e82f32587fbeea8c78c7d7b3d51c947d0 extends \Twig\Template
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
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default/social/skills_block.tpl", 1)->unwrap();
        // line 2
        echo "<script>
\$(function() {
    jQuery('.scrollbar-inner').scrollbar();
});
</script>
<div class=\"panel-group\" id=\"skill-block\" role=\"tablist\" aria-multiselectable=\"true\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
            <h4 class=\"panel-title\">
                <a role=\"button\" data-toggle=\"collapse\"
                   data-parent=\"#skill-block\" href=\"#skillList\" aria-expanded=\"true\" aria-controls=\"skillList\">
                    ";
        // line 13
        echo get_lang("Skills");
        echo "
                </a>
                <div class=\"btn-group pull-right\">
                    <a class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 20
        if (($context["show_skills_report_link"] ?? null)) {
            // line 21
            echo "                            <li>
                                <a href=\"";
            // line 22
            echo ($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "social/my_skills_report.php");
            echo "\"> ";
            echo get_lang("SkillsReport");
            echo "</a>
                            </li>
                        ";
        }
        // line 25
        echo "                        <li>
                            <a href=\"";
        // line 26
        echo ($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "social/skills_wheel.php");
        echo "\"> ";
        echo get_lang("SkillsWheel");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 29
        echo ($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "social/skills_ranking.php");
        echo "\"> ";
        echo sprintf(get_lang("YourSkillRankingX"), ($context["ranking"] ?? null));
        echo "</a>
                        </li>
                    </ul>
                </div>
            </h4>
        </div>
        <div id=\"skillList\" class=\"panel-collapse collapse in list-";
        // line 35
        echo ($context["orientation"] ?? null);
        echo "\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
            ";
        // line 36
        ob_start();
        // line 37
        echo "                ";
        if (($context["skills"] ?? null)) {
            // line 38
            echo "                    <div class=\"list-skills\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "                        <div class=\"item\">
                            <div class=\"image\">
                                <a href=\"";
                // line 42
                echo $this->getAttribute($context["item"], "skill_url", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["item"], "skill_name", []);
                echo "\">
                                    ";
                // line 43
                echo $this->getAttribute($context["item"], "skill_badge", []);
                echo "
                                </a>
                            </div>
                            <div class=\"caption\">
                                <a href=\"";
                // line 47
                echo $this->getAttribute($context["item"], "skill_url", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["item"], "skill_name", []);
                echo "\">
                                    ";
                // line 48
                echo $this->getAttribute($context["item"], "skill_name", []);
                echo "
                                </a>
                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                    </div>
                ";
        } else {
            // line 55
            echo "                    <p>";
            echo get_lang("WithoutAchievedSkills");
            echo "</p>
                    <p>
                        <a href=\"";
            // line 57
            echo ($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "social/skills_wheel.php");
            echo "\">";
            echo get_lang("SkillsWheel");
            echo "</a>
                    </p>
                ";
        }
        // line 60
        echo "            ";
        $context["panel_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "            ";
        echo $context["display"]->getpanel("", ($context["panel_content"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/skills_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 61,  158 => 60,  150 => 57,  144 => 55,  140 => 53,  129 => 48,  123 => 47,  116 => 43,  110 => 42,  106 => 40,  102 => 39,  99 => 38,  96 => 37,  94 => 36,  90 => 35,  79 => 29,  71 => 26,  68 => 25,  60 => 22,  57 => 21,  55 => 20,  45 => 13,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/skills_block.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\social\\skills_block.tpl");
    }
}
