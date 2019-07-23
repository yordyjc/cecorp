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

/* default/forum/list.tpl */
class __TwigTemplate_658ac126d02e8ec709482fe2409520b14071eeca80421af499ab7c6849bc3f77 extends \Twig\Template
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
        // line 2
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/forum/list.tpl", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default/forum/list.tpl", 1)->unwrap();
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        if (api_get_configuration_value("translate_html")) {
            // line 6
            echo "        <script>
            \$(document).ready(function () {
                // default
                \$('.category-forum ').hide();

                ";
            // line 11
            if (($context["default_user_language"] ?? null)) {
                // line 12
                echo "                    \$('.";
                echo ($context["default_user_language"] ?? null);
                echo "').show();
                ";
            }
            // line 14
            echo "
                \$('#extra_language').attr('data-width', '200px');
                \$('#extra_language option[value=\"\"]').text('";
            // line 16
            echo twig_escape_filter($this->env, get_lang("Any"), "js");
            echo "');
                \$('#extra_language').on('change', function() {
                    var selectedLanguageArray = \$(this).val();
                    \$('.category-forum ').hide();
                    \$.each(selectedLanguageArray, function(index, selectedLanguage) {
                        if (selectedLanguage == '') {
                            \$('.category-forum ').show();
                        } else {
                            \$('.'+ selectedLanguage).show();
                        }
                    });
                });
            });
        </script>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        echo ($context["form_content"] ?? null);
        echo "
    ";
        // line 33
        echo ($context["search_filter"] ?? null);
        echo "

    ";
        // line 35
        $context["fold_forum_categories"] = api_get_configuration_value("forum_fold_categories");
        // line 36
        echo "
    ";
        // line 37
        if ( !twig_test_empty(($context["data"] ?? null))) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "            ";
                $context["category_language_array"] = [];
                // line 40
                echo "            ";
                $context["category_language"] = "";
                // line 41
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra_fields", []));
                foreach ($context['_seq'] as $context["_key"] => $context["extra_field"]) {
                    // line 42
                    echo "                ";
                    if (($this->getAttribute($context["extra_field"], "variable", []) == "language")) {
                        // line 43
                        echo "                    ";
                        $context["category_language_array"] = twig_split_filter($this->env, $this->getAttribute($context["extra_field"], "value", []), ";");
                        // line 44
                        echo "                    ";
                        $context["category_language"] = twig_replace_filter($this->getAttribute($context["extra_field"], "value", []), [";" => " "]);
                        // line 45
                        echo "                ";
                    }
                    // line 46
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "
            ";
                // line 48
                if (($context["fold_forum_categories"] ?? null)) {
                    // line 49
                    echo "                ";
                    ob_start();
                    // line 50
                    echo "                    <a href=\"";
                    echo $this->getAttribute($context["item"], "url", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\">
                        <span class=\"open\">";
                    // line 51
                    echo Display::get_image("forum_blue.png", 32);
                    echo "</span>
                    </a>
                ";
                    $context["panel_icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 54
                    echo "
                ";
                    // line 55
                    ob_start();
                    // line 56
                    echo "                    ";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo $this->getAttribute($context["item"], "icon_session", []);
                    echo "
                    ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["category_language_array"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category_language_item"]) {
                        // line 58
                        echo "                        <span class=\"flag-icon flag-icon-";
                        echo $this->getAttribute(($context["languages"] ?? null), twig_lower_filter($this->env, $context["category_language_item"]), [], "array");
                        echo "\"></span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_language_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                ";
                    $context["panel_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 61
                    echo "            ";
                } else {
                    // line 62
                    echo "                ";
                    ob_start();
                    // line 63
                    echo "                    <a href=\"";
                    echo $this->getAttribute($context["item"], "url", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\">
                        <span class=\"open\">";
                    // line 64
                    echo Display::get_image("forum_blue.png", 32);
                    echo "</span>
                        ";
                    // line 65
                    echo $this->getAttribute($context["item"], "title", []);
                    echo $this->getAttribute($context["item"], "icon_session", []);
                    echo "
                    </a>
                    ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["category_language_array"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category_language_item"]) {
                        // line 68
                        echo "                        <span class=\"flag-icon flag-icon-";
                        echo $this->getAttribute(($context["languages"] ?? null), twig_lower_filter($this->env, $context["category_language_item"]), [], "array");
                        echo "\"></span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_language_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                    <div class=\"pull-right\">
                        ";
                    // line 71
                    echo $this->getAttribute($context["item"], "tools", []);
                    echo "
                    </div>
                ";
                    $context["panel_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            ";
                // line 76
                ob_start();
                // line 77
                echo "                <div class=\"forum-description\">
                    ";
                // line 78
                echo $this->getAttribute($context["item"], "description", []);
                echo "
                </div>
                ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "forums", []));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 81
                    echo "                    <div class=\"forum_display\">
                        <div class=\"panel panel-default forum\">
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 col-md-3\">
                                        <div class=\"number-post\">
                                            <a href=\"";
                    // line 87
                    echo $this->getAttribute(($context["forum"] ?? null), "url", []);
                    echo "\" title=\"";
                    echo $this->getAttribute(($context["forum"] ?? null), "title", []);
                    echo "\">
                                                ";
                    // line 88
                    if ( !twig_test_empty($this->getAttribute($context["subitem"], "forum_image", []))) {
                        // line 89
                        echo "                                                    <img src=\"";
                        echo $this->getAttribute($context["subitem"], "forum_image", []);
                        echo "\" width=\"48px\">
                                                ";
                    } else {
                        // line 91
                        echo "                                                    ";
                        if (($this->getAttribute($context["subitem"], "forum_of_group", []) == 0)) {
                            // line 92
                            echo "                                                        ";
                            echo Display::get_image("forum_group.png", 48);
                            echo "
                                                    ";
                        } else {
                            // line 94
                            echo "                                                        ";
                            echo Display::get_image("forum.png", 48);
                            echo "
                                                    ";
                        }
                        // line 96
                        echo "                                                ";
                    }
                    // line 97
                    echo "                                            </a>
                                            <p>";
                    // line 98
                    echo get_lang("ForumThreads");
                    echo ": ";
                    echo $this->getAttribute($context["subitem"], "number_threads", []);
                    echo " </p>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-8 col-md-9\">
                                        <div class=\"pull-right\">
                                            <div class=\"toolbar\">
                                                ";
                    // line 104
                    echo $this->getAttribute($context["subitem"], "tools", []);
                    echo "
                                            </div>
                                        </div>
                                        <h3 class=\"title\">
                                            ";
                    // line 108
                    echo Display::get_image("forum_yellow.png", 32);
                    echo "
                                            <a href=\"";
                    // line 109
                    echo $this->getAttribute($context["subitem"], "url", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["subitem"], "title", []);
                    echo "\" class=\"";
                    echo ((($this->getAttribute($context["subitem"], "visibility", []) != "1")) ? ("text-muted") : (""));
                    echo "\">";
                    echo $this->getAttribute($context["subitem"], "title", []);
                    echo "</a>
                                            ";
                    // line 110
                    if (($this->getAttribute($context["subitem"], "forum_of_group", []) != 0)) {
                        // line 111
                        echo "                                                <a class=\"forum-goto\" href=\"../group/group_space.php?";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
                        echo "&gidReq=";
                        echo $this->getAttribute($context["subitem"], "forum_of_group", []);
                        echo "\">
                                                    ";
                        // line 112
                        echo Display::get_image("forum.png", 22);
                        echo " ";
                        echo get_lang("GoTo");
                        echo " ";
                        echo $this->getAttribute($context["subitem"], "forum_group_title", []);
                        echo "
                                                </a>
                                            ";
                    }
                    // line 115
                    echo "                                            ";
                    echo $this->getAttribute($context["subitem"], "icon_session", []);
                    echo "
                                        </h3>
                                        ";
                    // line 117
                    if ( !twig_test_empty($this->getAttribute($context["subitem"], "last_poster_id", []))) {
                        // line 118
                        echo "                                            <div class=\"forum-date\">
                                                <i class=\"fa fa-comments\" aria-hidden=\"true\"></i>
                                                ";
                        // line 120
                        echo $this->getAttribute($context["subitem"], "last_poster_date", []);
                        echo "
                                                « ";
                        // line 121
                        echo $this->getAttribute($context["subitem"], "last_post_title", []);
                        echo " »
                                                ";
                        // line 122
                        echo get_lang("By");
                        echo "
                                                ";
                        // line 123
                        echo $this->getAttribute($context["subitem"], "last_poster_user", []);
                        echo "
                                            </div>
                                        ";
                    }
                    // line 126
                    echo "                                        <div class=\"description\">
                                            ";
                    // line 127
                    echo $this->getAttribute($context["subitem"], "description", []);
                    echo "
                                        </div>

                                        ";
                    // line 130
                    echo $this->getAttribute($context["subitem"], "last_post_text", []);
                    echo "

                                        ";
                    // line 132
                    echo $this->getAttribute($context["subitem"], "alert", []);
                    echo "
                                        ";
                    // line 133
                    if ( !twig_test_empty($this->getAttribute($context["subitem"], "moderation", []))) {
                        // line 134
                        echo "                                            <span class=\"label label-warning\">
                                        ";
                        // line 135
                        echo get_lang("PostsPendingModeration");
                        echo ": ";
                        echo $this->getAttribute($context["subitem"], "moderation", []);
                        echo "
                                    </span>
                                        ";
                    }
                    // line 138
                    echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "            ";
                $context["panel_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 145
                echo "

            <div class=\"category-forum ";
                // line 147
                echo ($context["category_language"] ?? null);
                echo "\" id=\"category_";
                echo $this->getAttribute($context["item"], "id", []);
                echo "\">
            ";
                // line 148
                if (($context["fold_forum_categories"] ?? null)) {
                    // line 149
                    echo "                ";
                    echo $context["display"]->getcollapse(("category_" . $this->getAttribute($context["item"], "id", [])), ($context["panel_title"] ?? null), ($context["panel_content"] ?? null), false, ($context["fold_forum_categories"] ?? null), $this->getAttribute($context["item"], "tools", []), ($context["panel_icon"] ?? null));
                    echo "
            ";
                } else {
                    // line 151
                    echo "                ";
                    echo $context["display"]->getpanel(($context["panel_title"] ?? null), ($context["panel_content"] ?? null));
                    echo "
            ";
                }
                // line 153
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "    ";
        } else {
            // line 156
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 157
            echo get_lang("NoForumInThisCategory");
            echo "
        </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/forum/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 157,  453 => 156,  450 => 155,  443 => 153,  437 => 151,  431 => 149,  429 => 148,  423 => 147,  419 => 145,  416 => 144,  405 => 138,  397 => 135,  394 => 134,  392 => 133,  388 => 132,  383 => 130,  377 => 127,  374 => 126,  368 => 123,  364 => 122,  360 => 121,  356 => 120,  352 => 118,  350 => 117,  344 => 115,  334 => 112,  327 => 111,  325 => 110,  315 => 109,  311 => 108,  304 => 104,  293 => 98,  290 => 97,  287 => 96,  281 => 94,  275 => 92,  272 => 91,  266 => 89,  264 => 88,  258 => 87,  250 => 81,  246 => 80,  241 => 78,  238 => 77,  236 => 76,  233 => 75,  230 => 74,  224 => 71,  221 => 70,  212 => 68,  208 => 67,  202 => 65,  198 => 64,  191 => 63,  188 => 62,  185 => 61,  182 => 60,  173 => 58,  169 => 57,  163 => 56,  161 => 55,  158 => 54,  152 => 51,  145 => 50,  142 => 49,  140 => 48,  137 => 47,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  119 => 42,  114 => 41,  111 => 40,  108 => 39,  103 => 38,  101 => 37,  98 => 36,  96 => 35,  91 => 33,  87 => 32,  84 => 31,  66 => 16,  62 => 14,  56 => 12,  54 => 11,  47 => 6,  44 => 5,  41 => 4,  37 => 2,  35 => 1,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/forum/list.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\forum\\list.tpl");
    }
}
