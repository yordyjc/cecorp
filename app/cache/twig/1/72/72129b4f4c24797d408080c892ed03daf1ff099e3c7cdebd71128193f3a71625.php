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

/* default/social/whoisonline.tpl */
class __TwigTemplate_ae950410db25204d52210eb9be5d12a9a02fb85affab2138ee52ab95d1b50668 extends \Twig\Template
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
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/social/whoisonline.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 6
        if (($context["social_search"] ?? null)) {
            // line 7
            echo "            <div class=\"search-user\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        ";
            // line 10
            echo get_lang("SearchUsers");
            echo "
                    </div>
                    <div class=\"panel-body\">
                        ";
            // line 13
            echo ($context["social_search"] ?? null);
            echo "
                    </div>
                </div>
            </div>
            ";
        }
        // line 18
        echo "            <div id=\"whoisonline\">
                <div id=\"user-list\" class=\"row\">
                    ";
        // line 20
        echo ($context["whoisonline"] ?? null);
        echo "
                </div>
                <div class=\"col-md-12\">
                    <a class=\"btn btn-large btn-default\" id=\"link_load_more_items\" data_link=\"2\" >";
        // line 23
        echo get_lang("More");
        echo "</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function() {
            \$(\"#link_load_more_items\").click(function() {
                page = \$(\"#link_load_more_items\").attr(\"data_link\");
                \$.ajax({
                    beforeSend: function() {
                        \$(\"#link_load_more_items\").html(\"";
        // line 34
        echo twig_escape_filter($this->env, get_lang("Loading"), "js");
        echo " <em class='fa fa-spinner fa-pulse fa-fw'></em>\");
                    },
                    type: \"GET\",
                    url: \"main/inc/ajax/online.ajax.php?a=load_online_user\",
                    data: \"online_page_nr=\" + page,
                    success: function(data) {
                        if (data != \"end\") {
                            \$(\"#link_load_more_items\").attr(\"data_link\", parseInt(page) + 1);
                            \$(\"#user-list\").append(data);
                            \$(\"#link_load_more_items\").html(\"";
        // line 43
        echo twig_escape_filter($this->env, get_lang("More"), "js");
        echo "\");
                        } else {
                            \$(\"#link_load_more_items\").remove();
                        }
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/social/whoisonline.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 43,  90 => 34,  76 => 23,  70 => 20,  66 => 18,  58 => 13,  52 => 10,  47 => 7,  45 => 6,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/whoisonline.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\social\\whoisonline.tpl");
    }
}
