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

/* default/learnpath/list.tpl */
class __TwigTemplate_765d96a7da3d8b6b744060b4bd443f3a95ee20e1eeba6a173154df3525514431 extends \Twig\Template
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
        echo "<script>
    function confirmation(name) {
        if (confirm(\"";
        // line 3
        echo get_lang("AreYouSureToDeleteJS");
        echo " \\\"\" + name + \"\\\" ?\")) {
            return true;
        } else {
            return false;
        }
    }
</script>
";
        // line 10
        $context["configuration"] = api_get_configuration_value("lp_category_accordion");
        // line 11
        echo "<div class=\"lp-accordion panel-group\" id=\"lp-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lp_data"]) {
            // line 13
            echo "        ";
            $context["show_category"] = true;
            // line 14
            echo "
        ";
            // line 15
            if ((($context["filtered_category"] ?? null) && (($context["filtered_category"] ?? null) != $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", [])))) {
                // line 16
                echo "            ";
                $context["show_category"] = false;
                // line 17
                echo "        ";
            }
            // line 18
            echo "
        ";
            // line 19
            if (($context["show_category"] ?? null)) {
                // line 20
                echo "            ";
                if ((($context["configuration"] ?? null) == 0)) {
                    // line 21
                    echo "                <!--- old view -->
                ";
                    // line 22
                    if (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1) && $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []))) {
                        // line 23
                        echo "                    ";
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 24
                            echo "                        <h3 class=\"page-header\">
                            ";
                            // line 25
                            echo twig_trim_filter($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getName", [], "method"));
                            echo "

                            ";
                            // line 27
                            if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method") > 0)) {
                                // line 28
                                echo "                                ";
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", [])) {
                                    // line 29
                                    echo "                                    <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                       title=\"";
                                    // line 30
                                    echo get_lang("Edit");
                                    echo "\">
                                        <img src=\"";
                                    // line 31
                                    echo Display::get_icon_path("edit.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                                    </a>

                                    ";
                                    // line 34
                                    if ($this->getAttribute(($context["subscription_settings"] ?? null), "allow_add_users_to_lp_category", [])) {
                                        // line 35
                                        echo "                                        <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_users_to_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                           title=\"";
                                        // line 36
                                        echo get_lang("AddUsers");
                                        echo "\">
                                            <img src=\"";
                                        // line 37
                                        echo Display::get_icon_path("user.png");
                                        echo "\" alt=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                                        </a>
                                    ";
                                    }
                                    // line 40
                                    echo "
                                    ";
                                    // line 41
                                    if (($this->getAttribute($context["loop"], "index0", []) == 1)) {
                                        // line 42
                                        echo "                                        <a href=\"#\">
                                            <img src=\"";
                                        // line 43
                                        echo Display::get_icon_path("up_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                        </a>
                                    ";
                                    } else {
                                        // line 46
                                        echo "                                        <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_up_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                           title=\"";
                                        // line 47
                                        echo get_lang("Move");
                                        echo "\">
                                            <img src=\"";
                                        // line 48
                                        echo Display::get_icon_path("up.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                        </a>
                                    ";
                                    }
                                    // line 51
                                    echo "
                                    ";
                                    // line 52
                                    if (((twig_length_filter($this->env, ($context["data"] ?? null)) - 1) == $this->getAttribute($context["loop"], "index0", []))) {
                                        // line 53
                                        echo "                                        <a href=\"#\">
                                            <img src=\"";
                                        // line 54
                                        echo Display::get_icon_path("down_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                        </a>
                                    ";
                                    } else {
                                        // line 57
                                        echo "                                        <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_down_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                           title=\"";
                                        // line 58
                                        echo get_lang("Move");
                                        echo "\">
                                            <img src=\"";
                                        // line 59
                                        echo Display::get_icon_path("down.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                        </a>
                                    ";
                                    }
                                    // line 62
                                    echo "                                ";
                                }
                                // line 63
                                echo "
                                ";
                                // line 64
                                if (($this->getAttribute($context["lp_data"], "category_visibility", []) == 0)) {
                                    // line 65
                                    echo "                                    <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                    echo "\"
                                       title=\"";
                                    // line 66
                                    echo get_lang("Show");
                                    echo "\">
                                        <img src=\"";
                                    // line 67
                                    echo Display::get_icon_path("invisible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Show");
                                    echo "\">
                                    </a>
                                ";
                                } else {
                                    // line 70
                                    echo "                                    <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                    echo "\"
                                       title=\"";
                                    // line 71
                                    echo get_lang("Hide");
                                    echo "\">
                                        <img src=\"";
                                    // line 72
                                    echo Display::get_icon_path("visible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                                    </a>
                                ";
                                }
                                // line 75
                                echo "
                                ";
                                // line 76
                                if (($this->getAttribute($context["lp_data"], "category_is_published", []) == 0)) {
                                    // line 77
                                    echo "                                    <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                    echo "\"
                                       title=\"";
                                    // line 78
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                        <img src=\"";
                                    // line 79
                                    echo Display::get_icon_path("lp_publish_na.png");
                                    echo "\"
                                             alt=\"";
                                    // line 80
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                    </a>
                                ";
                                } else {
                                    // line 83
                                    echo "                                    <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                    echo "\"
                                       title=\"";
                                    // line 84
                                    echo get_lang("LearnpathDoNotPublish");
                                    echo "\">
                                        <img src=\"";
                                    // line 85
                                    echo Display::get_icon_path("lp_publish.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                                    </a>
                                ";
                                }
                                // line 88
                                echo "                                ";
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", [])) {
                                    // line 89
                                    echo "                                    <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=delete_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                       title=\"";
                                    // line 90
                                    echo get_lang("Delete");
                                    echo "\">
                                        <img src=\"";
                                    // line 91
                                    echo Display::get_icon_path("delete.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                                    </a>
                                ";
                                }
                                // line 94
                                echo "                            ";
                            }
                            // line 95
                            echo "                        </h3>
                    ";
                        } elseif ( !twig_test_empty($this->getAttribute(                        // line 96
$context["lp_data"], "lp_list", []))) {
                            // line 97
                            echo "                        <h3 class=\"page-header\">";
                            echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getName", [], "method");
                            echo "</h3>
                    ";
                        }
                        // line 99
                        echo "                ";
                    }
                    // line 100
                    echo "
                ";
                    // line 101
                    if ($this->getAttribute($context["lp_data"], "lp_list", [])) {
                        // line 102
                        echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped\">
                            <thead>
                            <tr>
                                <th>
                                    ";
                        // line 107
                        echo get_lang("Title");
                        echo "
                                </th>
                                ";
                        // line 109
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 110
                            echo "                                    <th>";
                            echo get_lang("PublicationDate");
                            echo "</th>
                                    <th>";
                            // line 111
                            echo get_lang("ExpirationDate");
                            echo "</th>
                                    <th>";
                            // line 112
                            echo get_lang("Progress");
                            echo "</th>
                                    ";
                            // line 113
                            if (($context["allow_min_time"] ?? null)) {
                                // line 114
                                echo "                                        <th>";
                                echo get_lang("TimeSpentTimeRequired");
                                echo "</th>
                                    ";
                            }
                            // line 116
                            echo "                                    <th>";
                            echo get_lang("AuthoringOptions");
                            echo "</th>
                                ";
                        } else {
                            // line 118
                            echo "                                    ";
                            if ( !($context["is_invitee"] ?? null)) {
                                // line 119
                                echo "                                        <th>";
                                echo get_lang("Progress");
                                echo "</th>
                                    ";
                            }
                            // line 121
                            echo "                                    ";
                            if (($context["allow_min_time"] ?? null)) {
                                // line 122
                                echo "                                        <th>";
                                echo get_lang("TimeSpentTimeRequired");
                                echo "</th>
                                    ";
                            }
                            // line 124
                            echo "                                    <th>";
                            echo get_lang("Actions");
                            echo "</th>
                                ";
                        }
                        // line 126
                        echo "                            </tr>
                            </thead>
                            <tbody>
                            ";
                        // line 129
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 130
                            echo "                                <tr>
                                    <td>
                                        ";
                            // line 132
                            echo $this->getAttribute($context["row"], "learnpath_icon", []);
                            echo "
                                        <a href=\"";
                            // line 133
                            echo $this->getAttribute($context["row"], "url_start", []);
                            echo "\">
                                            ";
                            // line 134
                            echo $this->getAttribute($context["row"], "title", []);
                            echo "
                                            ";
                            // line 135
                            echo $this->getAttribute($context["row"], "session_image", []);
                            echo "
                                            ";
                            // line 136
                            echo $this->getAttribute($context["row"], "extra", []);
                            echo "
                                        </a>
                                    </td>
                                    ";
                            // line 139
                            if (($context["is_allowed_to_edit"] ?? null)) {
                                // line 140
                                echo "                                        <td>
                                            ";
                                // line 141
                                if ($this->getAttribute($context["row"], "start_time", [])) {
                                    // line 142
                                    echo "                                                <span class=\"small\">";
                                    echo $this->getAttribute($context["row"], "start_time", []);
                                    echo "</span>
                                            ";
                                }
                                // line 144
                                echo "                                        </td>
                                        <td>
                                            <span class=\"small\">";
                                // line 146
                                echo $this->getAttribute($context["row"], "end_time", []);
                                echo "</span>
                                        </td>
                                        <td>
                                            ";
                                // line 149
                                echo $this->getAttribute($context["row"], "dsp_progress", []);
                                echo "
                                        </td>
                                        ";
                                // line 151
                                if (($context["allow_min_time"] ?? null)) {
                                    // line 152
                                    echo "                                            <td>
                                            ";
                                    // line 153
                                    if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                        // line 154
                                        echo "                                                ";
                                        echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                        echo "
                                            ";
                                    }
                                    // line 156
                                    echo "                                            </td>
                                        ";
                                }
                                // line 158
                                echo "                                    ";
                            } else {
                                // line 159
                                echo "                                        ";
                                if ( !($context["is_invitee"] ?? null)) {
                                    // line 160
                                    echo "                                            <td>
                                                ";
                                    // line 161
                                    echo $this->getAttribute($context["row"], "dsp_progress", []);
                                    echo "
                                            </td>
                                        ";
                                }
                                // line 164
                                echo "                                        ";
                                if (($context["allow_min_time"] ?? null)) {
                                    // line 165
                                    echo "                                            <td>
                                                ";
                                    // line 166
                                    if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                        // line 167
                                        echo "                                                    ";
                                        echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                        echo "
                                                ";
                                    }
                                    // line 169
                                    echo "                                            </td>
                                        ";
                                }
                                // line 171
                                echo "                                    ";
                            }
                            // line 172
                            echo "                                    <td>
                                        ";
                            // line 173
                            echo $this->getAttribute($context["row"], "action_build", []);
                            echo "
                                        ";
                            // line 174
                            echo $this->getAttribute($context["row"], "action_edit", []);
                            echo "
                                        ";
                            // line 175
                            echo $this->getAttribute($context["row"], "action_visible", []);
                            echo "
                                        ";
                            // line 176
                            echo $this->getAttribute($context["row"], "action_tracking", []);
                            echo "
                                        ";
                            // line 177
                            echo $this->getAttribute($context["row"], "action_publish", []);
                            echo "
                                        ";
                            // line 178
                            echo $this->getAttribute($context["row"], "action_subscribe_users", []);
                            echo "
                                        ";
                            // line 179
                            echo $this->getAttribute($context["row"], "action_serious_game", []);
                            echo "
                                        ";
                            // line 180
                            echo $this->getAttribute($context["row"], "action_reinit", []);
                            echo "
                                        ";
                            // line 181
                            echo $this->getAttribute($context["row"], "action_default_view", []);
                            echo "
                                        ";
                            // line 182
                            echo $this->getAttribute($context["row"], "action_debug", []);
                            echo "
                                        ";
                            // line 183
                            echo $this->getAttribute($context["row"], "action_export", []);
                            echo "
                                        ";
                            // line 184
                            echo $this->getAttribute($context["row"], "action_copy", []);
                            echo "
                                        ";
                            // line 185
                            echo $this->getAttribute($context["row"], "action_auto_launch", []);
                            echo "
                                        ";
                            // line 186
                            echo $this->getAttribute($context["row"], "action_pdf", []);
                            echo "
                                        ";
                            // line 187
                            echo $this->getAttribute($context["row"], "action_delete", []);
                            echo "
                                        ";
                            // line 188
                            echo $this->getAttribute($context["row"], "action_order", []);
                            echo "
                                        ";
                            // line 189
                            echo $this->getAttribute($context["row"], "action_update_scorm", []);
                            echo "
                                        ";
                            // line 190
                            echo $this->getAttribute($context["row"], "action_export_to_course_build", []);
                            echo "
                                    </td>
                                </tr>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 194
                        echo "                            </tbody>
                        </table>
                    </div>
                ";
                    }
                    // line 198
                    echo "                <!--- end old view -->
            ";
                } else {
                    // line 200
                    echo "                <!-- new view block accordeon -->
                ";
                    // line 201
                    if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []) == 0)) {
                        // line 202
                        echo "                    ";
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 203
                            echo "                        ";
                            if ($this->getAttribute($context["lp_data"], "lp_list", [])) {
                                // line 204
                                echo "                            <div class=\"table-responsive\">
                                <table class=\"table table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>";
                                // line 208
                                echo get_lang("Title");
                                echo "</th>
                                        ";
                                // line 209
                                if (($context["is_allowed_to_edit"] ?? null)) {
                                    // line 210
                                    echo "                                            <th>";
                                    echo get_lang("PublicationDate");
                                    echo "</th>
                                            <th>";
                                    // line 211
                                    echo get_lang("ExpirationDate");
                                    echo "</th>
                                            <th>";
                                    // line 212
                                    echo get_lang("Progress");
                                    echo "</th>
                                            <th>";
                                    // line 213
                                    echo get_lang("AuthoringOptions");
                                    echo "</th>
                                        ";
                                } else {
                                    // line 215
                                    echo "                                            ";
                                    if ( !($context["is_invitee"] ?? null)) {
                                        // line 216
                                        echo "                                                <th>";
                                        echo get_lang("Progress");
                                        echo "</th>
                                            ";
                                    }
                                    // line 218
                                    echo "
                                            <th>";
                                    // line 219
                                    echo get_lang("Actions");
                                    echo "</th>
                                        ";
                                }
                                // line 221
                                echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                                // line 224
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 225
                                    echo "                                        <tr>
                                            <td>
                                                ";
                                    // line 227
                                    echo $this->getAttribute($context["row"], "learnpath_icon", []);
                                    echo "
                                                <a href=\"";
                                    // line 228
                                    echo $this->getAttribute($context["row"], "url_start", []);
                                    echo "\">
                                                    ";
                                    // line 229
                                    echo $this->getAttribute($context["row"], "title", []);
                                    echo "
                                                    ";
                                    // line 230
                                    echo $this->getAttribute($context["row"], "session_image", []);
                                    echo "
                                                    ";
                                    // line 231
                                    echo $this->getAttribute($context["row"], "extra", []);
                                    echo "
                                                </a>
                                            </td>
                                            ";
                                    // line 234
                                    if (($context["is_allowed_to_edit"] ?? null)) {
                                        // line 235
                                        echo "                                                <td>
                                                    ";
                                        // line 236
                                        if ($this->getAttribute($context["row"], "start_time", [])) {
                                            // line 237
                                            echo "                                                        <span class=\"small\">";
                                            echo $this->getAttribute($context["row"], "start_time", []);
                                            echo "</span>
                                                    ";
                                        }
                                        // line 239
                                        echo "                                                </td>
                                                <td>
                                                    <span class=\"small\">";
                                        // line 241
                                        echo $this->getAttribute($context["row"], "end_time", []);
                                        echo "</span>
                                                </td>
                                                <td>
                                                    ";
                                        // line 244
                                        echo $this->getAttribute($context["row"], "dsp_progress", []);
                                        echo "
                                                </td>
                                            ";
                                    } else {
                                        // line 247
                                        echo "                                                ";
                                        if ( !($context["is_invitee"] ?? null)) {
                                            // line 248
                                            echo "                                                    <td>
                                                        ";
                                            // line 249
                                            echo $this->getAttribute($context["row"], "dsp_progress", []);
                                            echo "
                                                    </td>
                                                ";
                                        }
                                        // line 252
                                        echo "                                            ";
                                    }
                                    // line 253
                                    echo "
                                            <td>
                                                ";
                                    // line 255
                                    echo $this->getAttribute($context["row"], "action_build", []);
                                    echo "
                                                ";
                                    // line 256
                                    echo $this->getAttribute($context["row"], "action_edit", []);
                                    echo "
                                                ";
                                    // line 257
                                    echo $this->getAttribute($context["row"], "action_visible", []);
                                    echo "
                                                ";
                                    // line 258
                                    echo $this->getAttribute($context["row"], "action_tracking", []);
                                    echo "
                                                ";
                                    // line 259
                                    echo $this->getAttribute($context["row"], "action_publish", []);
                                    echo "
                                                ";
                                    // line 260
                                    echo $this->getAttribute($context["row"], "action_subscribe_users", []);
                                    echo "
                                                ";
                                    // line 261
                                    echo $this->getAttribute($context["row"], "action_serious_game", []);
                                    echo "
                                                ";
                                    // line 262
                                    echo $this->getAttribute($context["row"], "action_reinit", []);
                                    echo "
                                                ";
                                    // line 263
                                    echo $this->getAttribute($context["row"], "action_default_view", []);
                                    echo "
                                                ";
                                    // line 264
                                    echo $this->getAttribute($context["row"], "action_debug", []);
                                    echo "
                                                ";
                                    // line 265
                                    echo $this->getAttribute($context["row"], "action_export", []);
                                    echo "
                                                ";
                                    // line 266
                                    echo $this->getAttribute($context["row"], "action_copy", []);
                                    echo "
                                                ";
                                    // line 267
                                    echo $this->getAttribute($context["row"], "action_auto_launch", []);
                                    echo "
                                                ";
                                    // line 268
                                    echo $this->getAttribute($context["row"], "action_pdf", []);
                                    echo "
                                                ";
                                    // line 269
                                    echo $this->getAttribute($context["row"], "action_delete", []);
                                    echo "
                                                ";
                                    // line 270
                                    echo $this->getAttribute($context["row"], "action_order", []);
                                    echo "
                                                ";
                                    // line 271
                                    echo $this->getAttribute($context["row"], "action_update_scorm", []);
                                    echo "
                                            </td>
                                        </tr>
                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 275
                                echo "                                    </tbody>
                                </table>
                            </div>
                        ";
                            }
                            // line 279
                            echo "                    ";
                        } else {
                            // line 280
                            echo "                        <div id=\"not-category\" class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                ";
                            // line 282
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                // line 283
                                echo "                                    <div class=\"lp-item\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                <a href=\"";
                                // line 287
                                echo $this->getAttribute($context["row"], "url_start", []);
                                echo "\">
                                                    ";
                                // line 288
                                echo $this->getAttribute($context["row"], "title", []);
                                echo "
                                                    ";
                                // line 289
                                echo $this->getAttribute($context["row"], "session_image", []);
                                echo "
                                                    ";
                                // line 290
                                echo $this->getAttribute($context["row"], "extra", []);
                                echo "
                                                </a>
                                            </div>
                                            <div class=\"col-md-3\">
                                                ";
                                // line 294
                                echo $this->getAttribute($context["row"], "dsp_progress", []);
                                echo "
                                            </div>
                                            <div class=\"col-md-1\">
                                                ";
                                // line 297
                                echo $this->getAttribute($context["row"], "action_pdf", []);
                                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 302
                            echo "                            </div>
                        </div>
                    ";
                        }
                        // line 305
                        echo "                ";
                    }
                    // line 306
                    echo "
                ";
                    // line 307
                    if (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1) && $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []))) {
                        // line 308
                        echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"heading-";
                        // line 309
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\">
                            ";
                        // line 310
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 311
                            echo "                                <div class=\"tools-actions pull-right\">
                                    ";
                            // line 312
                            if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method") > 0)) {
                                // line 313
                                echo "                                        ";
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", [])) {
                                    // line 314
                                    echo "                                            <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                               title=\"";
                                    // line 315
                                    echo get_lang("Edit");
                                    echo "\">
                                                <img src=\"";
                                    // line 316
                                    echo Display::get_icon_path("edit.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                                            </a>

                                            ";
                                    // line 319
                                    if ($this->getAttribute(($context["subscription_settings"] ?? null), "allow_add_users_to_lp_category", [])) {
                                        // line 320
                                        echo "                                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_users_to_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                                   title=\"";
                                        // line 321
                                        echo get_lang("AddUsers");
                                        echo "\">
                                                    <img src=\"";
                                        // line 322
                                        echo Display::get_icon_path("user.png");
                                        echo "\" alt=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 325
                                    echo "
                                            ";
                                    // line 326
                                    if (($this->getAttribute($context["loop"], "index0", []) == 1)) {
                                        // line 327
                                        echo "                                                <a href=\"#\">
                                                    <img src=\"";
                                        // line 328
                                        echo Display::get_icon_path("up_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    } else {
                                        // line 331
                                        echo "                                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_up_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                                   title=\"";
                                        // line 332
                                        echo get_lang("Move");
                                        echo "\">
                                                    <img src=\"";
                                        // line 333
                                        echo Display::get_icon_path("up.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 336
                                    echo "
                                            ";
                                    // line 337
                                    if (((twig_length_filter($this->env, ($context["data"] ?? null)) - 1) == $this->getAttribute($context["loop"], "index0", []))) {
                                        // line 338
                                        echo "                                                <a href=\"#\">
                                                    <img src=\"";
                                        // line 339
                                        echo Display::get_icon_path("down_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    } else {
                                        // line 342
                                        echo "                                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_down_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                                   title=\"";
                                        // line 343
                                        echo get_lang("Move");
                                        echo "\">
                                                    <img src=\"";
                                        // line 344
                                        echo Display::get_icon_path("down.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 347
                                    echo "                                        ";
                                }
                                // line 348
                                echo "
                                        ";
                                // line 349
                                if (($this->getAttribute($context["lp_data"], "category_visibility", []) == 0)) {
                                    // line 350
                                    echo "                                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                    echo "\"
                                               title=\"";
                                    // line 351
                                    echo get_lang("Show");
                                    echo "\">
                                                <img src=\"";
                                    // line 352
                                    echo Display::get_icon_path("invisible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Show");
                                    echo "\">
                                            </a>
                                        ";
                                } else {
                                    // line 355
                                    echo "                                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                    echo "\"
                                               title=\"";
                                    // line 356
                                    echo get_lang("Hide");
                                    echo "\">
                                                <img src=\"";
                                    // line 357
                                    echo Display::get_icon_path("visible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                                            </a>
                                        ";
                                }
                                // line 360
                                echo "
                                        ";
                                // line 361
                                if (($this->getAttribute($context["lp_data"], "category_visibility", []) == 1)) {
                                    // line 362
                                    echo "                                            ";
                                    if (($this->getAttribute($context["lp_data"], "category_is_published", []) == 0)) {
                                        // line 363
                                        echo "                                                <a href=\"lp_controller.php?";
                                        echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                        echo "\"
                                                   title=\"";
                                        // line 364
                                        echo get_lang("LearnpathPublish");
                                        echo "\">
                                                    <img src=\"";
                                        // line 365
                                        echo Display::get_icon_path("lp_publish_na.png");
                                        echo "\"
                                                         alt=\"";
                                        // line 366
                                        echo get_lang("LearnpathPublish");
                                        echo "\">
                                                </a>
                                            ";
                                    } else {
                                        // line 369
                                        echo "                                                <a href=\"lp_controller.php?";
                                        echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                        echo "\"
                                                   title=\"";
                                        // line 370
                                        echo get_lang("LearnpathDoNotPublish");
                                        echo "\">
                                                    <img src=\"";
                                        // line 371
                                        echo Display::get_icon_path("lp_publish.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Hide");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 374
                                    echo "                                        ";
                                } else {
                                    // line 375
                                    echo "                                            <img src=\"";
                                    echo Display::get_icon_path("lp_publish_na.png");
                                    echo "\"
                                                 alt=\"";
                                    // line 376
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                        ";
                                }
                                // line 378
                                echo "
                                        ";
                                // line 379
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", [])) {
                                    // line 380
                                    echo "                                            <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=delete_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                               title=\"";
                                    // line 381
                                    echo get_lang("Delete");
                                    echo "\">
                                                <img src=\"";
                                    // line 382
                                    echo Display::get_icon_path("delete.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                                            </a>
                                        ";
                                }
                                // line 385
                                echo "                                    ";
                            }
                            // line 386
                            echo "                                </div>
                            ";
                        }
                        // line 388
                        echo "                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#lp-accordion\"
                                   href=\"#collapse-";
                        // line 390
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\" aria-expanded=\"true\"
                                   aria-controls=\"collapse-";
                        // line 391
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\">
                                    ";
                        // line 392
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getName", [], "method");
                        echo "
                                </a>
                            </h4>
                        </div>

                        <div id=\"collapse-";
                        // line 397
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\" class=\"panel-collapse collapse ";
                        echo (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1)) ? ("in") : (""));
                        echo "\"
                             role=\"tabpanel\" aria-labelledby=\"heading-";
                        // line 398
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\">
                            <div class=\"panel-body\">
                                ";
                        // line 400
                        if ($this->getAttribute($context["lp_data"], "lp_list", [])) {
                            // line 401
                            echo "
                                    ";
                            // line 402
                            if (($context["is_allowed_to_edit"] ?? null)) {
                                // line 403
                                echo "                                        <div class=\"table-responsive\">
                                            <table class=\"table table-hover table-striped\">
                                                <thead>
                                                <tr>
                                                    <th>";
                                // line 407
                                echo get_lang("Title");
                                echo "</th>
                                                    ";
                                // line 408
                                if (($context["is_allowed_to_edit"] ?? null)) {
                                    // line 409
                                    echo "                                                        <th>";
                                    echo get_lang("PublicationDate");
                                    echo "</th>
                                                        <th>";
                                    // line 410
                                    echo get_lang("ExpirationDate");
                                    echo "</th>
                                                        <th>";
                                    // line 411
                                    echo get_lang("Progress");
                                    echo "</th>
                                                        <th>";
                                    // line 412
                                    echo get_lang("AuthoringOptions");
                                    echo "</th>
                                                    ";
                                } else {
                                    // line 414
                                    echo "                                                        ";
                                    if ( !($context["is_invitee"] ?? null)) {
                                        // line 415
                                        echo "                                                            <th>";
                                        echo get_lang("Progress");
                                        echo "</th>
                                                        ";
                                    }
                                    // line 417
                                    echo "
                                                        <th>";
                                    // line 418
                                    echo get_lang("Actions");
                                    echo "</th>
                                                    ";
                                }
                                // line 420
                                echo "                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
                                // line 423
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 424
                                    echo "                                                    <tr>
                                                        <td>
                                                            ";
                                    // line 426
                                    echo $this->getAttribute($context["row"], "learnpath_icon", []);
                                    echo "
                                                            <a href=\"";
                                    // line 427
                                    echo $this->getAttribute($context["row"], "url_start", []);
                                    echo "\">
                                                                ";
                                    // line 428
                                    echo $this->getAttribute($context["row"], "title", []);
                                    echo "
                                                                ";
                                    // line 429
                                    echo $this->getAttribute($context["row"], "session_image", []);
                                    echo "
                                                                ";
                                    // line 430
                                    echo $this->getAttribute($context["row"], "extra", []);
                                    echo "
                                                            </a>
                                                        </td>
                                                        ";
                                    // line 433
                                    if (($context["is_allowed_to_edit"] ?? null)) {
                                        // line 434
                                        echo "                                                            <td>
                                                                ";
                                        // line 435
                                        if ($this->getAttribute($context["row"], "start_time", [])) {
                                            // line 436
                                            echo "                                                                    <span class=\"small\">";
                                            echo $this->getAttribute($context["row"], "start_time", []);
                                            echo "</span>
                                                                ";
                                        }
                                        // line 438
                                        echo "                                                            </td>
                                                            <td>
                                                                <span class=\"small\">";
                                        // line 440
                                        echo $this->getAttribute($context["row"], "end_time", []);
                                        echo "</span>
                                                            </td>
                                                            <td>
                                                                ";
                                        // line 443
                                        echo $this->getAttribute($context["row"], "dsp_progress", []);
                                        echo "
                                                            </td>
                                                        ";
                                    } else {
                                        // line 446
                                        echo "                                                            ";
                                        if ( !($context["is_invitee"] ?? null)) {
                                            // line 447
                                            echo "                                                                <td>
                                                                    ";
                                            // line 448
                                            echo $this->getAttribute($context["row"], "dsp_progress", []);
                                            echo "
                                                                </td>
                                                            ";
                                        }
                                        // line 451
                                        echo "                                                        ";
                                    }
                                    // line 452
                                    echo "
                                                        <td>
                                                            ";
                                    // line 454
                                    echo $this->getAttribute($context["row"], "action_build", []);
                                    echo "
                                                            ";
                                    // line 455
                                    echo $this->getAttribute($context["row"], "action_edit", []);
                                    echo "
                                                            ";
                                    // line 456
                                    echo $this->getAttribute($context["row"], "action_visible", []);
                                    echo "
                                                            ";
                                    // line 457
                                    echo $this->getAttribute($context["row"], "action_tracking", []);
                                    echo "
                                                            ";
                                    // line 458
                                    echo $this->getAttribute($context["row"], "action_publish", []);
                                    echo "
                                                            ";
                                    // line 459
                                    echo $this->getAttribute($context["row"], "action_subscribe_users", []);
                                    echo "
                                                            ";
                                    // line 460
                                    echo $this->getAttribute($context["row"], "action_serious_game", []);
                                    echo "
                                                            ";
                                    // line 461
                                    echo $this->getAttribute($context["row"], "action_reinit", []);
                                    echo "
                                                            ";
                                    // line 462
                                    echo $this->getAttribute($context["row"], "action_default_view", []);
                                    echo "
                                                            ";
                                    // line 463
                                    echo $this->getAttribute($context["row"], "action_debug", []);
                                    echo "
                                                            ";
                                    // line 464
                                    echo $this->getAttribute($context["row"], "action_export", []);
                                    echo "
                                                            ";
                                    // line 465
                                    echo $this->getAttribute($context["row"], "action_copy", []);
                                    echo "
                                                            ";
                                    // line 466
                                    echo $this->getAttribute($context["row"], "action_auto_launch", []);
                                    echo "
                                                            ";
                                    // line 467
                                    echo $this->getAttribute($context["row"], "action_pdf", []);
                                    echo "
                                                            ";
                                    // line 468
                                    echo $this->getAttribute($context["row"], "action_delete", []);
                                    echo "
                                                            ";
                                    // line 469
                                    echo $this->getAttribute($context["row"], "action_order", []);
                                    echo "
                                                            ";
                                    // line 470
                                    echo $this->getAttribute($context["row"], "action_update_scorm", []);
                                    echo "
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 474
                                echo "                                                </tbody>
                                            </table>
                                        </div>
                                    ";
                            } else {
                                // line 478
                                echo "                                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 479
                                    echo "                                            <div class=\"lp-item\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-8\">
                                                        <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                        <a href=\"";
                                    // line 483
                                    echo $this->getAttribute($context["row"], "url_start", []);
                                    echo "\">
                                                            ";
                                    // line 484
                                    echo $this->getAttribute($context["row"], "title", []);
                                    echo "
                                                            ";
                                    // line 485
                                    echo $this->getAttribute($context["row"], "session_image", []);
                                    echo "
                                                            ";
                                    // line 486
                                    echo $this->getAttribute($context["row"], "extra", []);
                                    echo "
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        ";
                                    // line 490
                                    echo $this->getAttribute($context["row"], "dsp_progress", []);
                                    echo "
                                                    </div>
                                                    <div class=\"col-md-1\">
                                                        ";
                                    // line 493
                                    echo $this->getAttribute($context["row"], "action_pdf", []);
                                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 498
                                echo "                                    ";
                            }
                            // line 499
                            echo "                                ";
                        }
                        // line 500
                        echo "                            </div>
                        </div>
                    </div>

                ";
                    }
                    // line 505
                    echo "                <!-- end view block accordeon -->
            ";
                }
                // line 507
                echo "        ";
            }
            // line 508
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lp_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        echo "</div>

";
        // line 511
        if ((( !($context["is_invitee"] ?? null) && ($context["lp_is_shown"] ?? null)) && ($context["allow_min_time"] ?? null))) {
            // line 512
            echo "    <div class=\"controls text-center\">
        ";
            // line 513
            if ( !($context["is_ending"] ?? null)) {
                // line 514
                echo "            <button class=\"btn btn-primary\" type=\"button\" disabled>
                ";
                // line 515
                echo get_lang("IHaveFinishedTheLessonsNotifyTheTeacher");
                echo "
            </button>
        ";
            } else {
                // line 518
                echo "            <a href=\"";
                echo (((($context["web_self"] ?? null) . "?") . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=send_notify_teacher");
                echo "\" class=\"btn btn-primary\">
                ";
                // line 519
                echo get_lang("IHaveFinishedTheLessonsNotifyTheTeacher");
                echo "
            </a>
        ";
            }
            // line 522
            echo "    </div>
";
        }
        // line 524
        echo "
";
        // line 525
        if ((($context["is_allowed_to_edit"] ?? null) &&  !($context["lp_is_shown"] ?? null))) {
            // line 526
            echo "    <div id=\"no-data-view\">
        <h2>";
            // line 527
            echo get_lang("LearningPaths");
            echo "</h2>
        <img src=\"";
            // line 528
            echo Display::get_icon_path("scorms.png", 64);
            echo "\" width=\"64\" height=\"64\">
        <div class=\"controls\">
            <a href=\"";
            // line 530
            echo (((($context["web_self"] ?? null) . "?") . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_lp");
            echo "\" class=\"btn btn-default\">
                ";
            // line 531
            echo get_lang("LearnpathAddLearnpath");
            echo "
            </a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/learnpath/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1527 => 531,  1523 => 530,  1518 => 528,  1514 => 527,  1511 => 526,  1509 => 525,  1506 => 524,  1502 => 522,  1496 => 519,  1491 => 518,  1485 => 515,  1482 => 514,  1480 => 513,  1477 => 512,  1475 => 511,  1471 => 509,  1457 => 508,  1454 => 507,  1450 => 505,  1443 => 500,  1440 => 499,  1437 => 498,  1426 => 493,  1420 => 490,  1413 => 486,  1409 => 485,  1405 => 484,  1401 => 483,  1395 => 479,  1390 => 478,  1384 => 474,  1374 => 470,  1370 => 469,  1366 => 468,  1362 => 467,  1358 => 466,  1354 => 465,  1350 => 464,  1346 => 463,  1342 => 462,  1338 => 461,  1334 => 460,  1330 => 459,  1326 => 458,  1322 => 457,  1318 => 456,  1314 => 455,  1310 => 454,  1306 => 452,  1303 => 451,  1297 => 448,  1294 => 447,  1291 => 446,  1285 => 443,  1279 => 440,  1275 => 438,  1269 => 436,  1267 => 435,  1264 => 434,  1262 => 433,  1256 => 430,  1252 => 429,  1248 => 428,  1244 => 427,  1240 => 426,  1236 => 424,  1232 => 423,  1227 => 420,  1222 => 418,  1219 => 417,  1213 => 415,  1210 => 414,  1205 => 412,  1201 => 411,  1197 => 410,  1192 => 409,  1190 => 408,  1186 => 407,  1180 => 403,  1178 => 402,  1175 => 401,  1173 => 400,  1168 => 398,  1162 => 397,  1154 => 392,  1150 => 391,  1146 => 390,  1142 => 388,  1138 => 386,  1135 => 385,  1127 => 382,  1123 => 381,  1118 => 380,  1116 => 379,  1113 => 378,  1108 => 376,  1103 => 375,  1100 => 374,  1092 => 371,  1088 => 370,  1083 => 369,  1077 => 366,  1073 => 365,  1069 => 364,  1064 => 363,  1061 => 362,  1059 => 361,  1056 => 360,  1048 => 357,  1044 => 356,  1039 => 355,  1031 => 352,  1027 => 351,  1022 => 350,  1020 => 349,  1017 => 348,  1014 => 347,  1006 => 344,  1002 => 343,  997 => 342,  989 => 339,  986 => 338,  984 => 337,  981 => 336,  973 => 333,  969 => 332,  964 => 331,  956 => 328,  953 => 327,  951 => 326,  948 => 325,  940 => 322,  936 => 321,  931 => 320,  929 => 319,  921 => 316,  917 => 315,  912 => 314,  909 => 313,  907 => 312,  904 => 311,  902 => 310,  898 => 309,  895 => 308,  893 => 307,  890 => 306,  887 => 305,  882 => 302,  871 => 297,  865 => 294,  858 => 290,  854 => 289,  850 => 288,  846 => 287,  840 => 283,  836 => 282,  832 => 280,  829 => 279,  823 => 275,  813 => 271,  809 => 270,  805 => 269,  801 => 268,  797 => 267,  793 => 266,  789 => 265,  785 => 264,  781 => 263,  777 => 262,  773 => 261,  769 => 260,  765 => 259,  761 => 258,  757 => 257,  753 => 256,  749 => 255,  745 => 253,  742 => 252,  736 => 249,  733 => 248,  730 => 247,  724 => 244,  718 => 241,  714 => 239,  708 => 237,  706 => 236,  703 => 235,  701 => 234,  695 => 231,  691 => 230,  687 => 229,  683 => 228,  679 => 227,  675 => 225,  671 => 224,  666 => 221,  661 => 219,  658 => 218,  652 => 216,  649 => 215,  644 => 213,  640 => 212,  636 => 211,  631 => 210,  629 => 209,  625 => 208,  619 => 204,  616 => 203,  613 => 202,  611 => 201,  608 => 200,  604 => 198,  598 => 194,  588 => 190,  584 => 189,  580 => 188,  576 => 187,  572 => 186,  568 => 185,  564 => 184,  560 => 183,  556 => 182,  552 => 181,  548 => 180,  544 => 179,  540 => 178,  536 => 177,  532 => 176,  528 => 175,  524 => 174,  520 => 173,  517 => 172,  514 => 171,  510 => 169,  504 => 167,  502 => 166,  499 => 165,  496 => 164,  490 => 161,  487 => 160,  484 => 159,  481 => 158,  477 => 156,  471 => 154,  469 => 153,  466 => 152,  464 => 151,  459 => 149,  453 => 146,  449 => 144,  443 => 142,  441 => 141,  438 => 140,  436 => 139,  430 => 136,  426 => 135,  422 => 134,  418 => 133,  414 => 132,  410 => 130,  406 => 129,  401 => 126,  395 => 124,  389 => 122,  386 => 121,  380 => 119,  377 => 118,  371 => 116,  365 => 114,  363 => 113,  359 => 112,  355 => 111,  350 => 110,  348 => 109,  343 => 107,  336 => 102,  334 => 101,  331 => 100,  328 => 99,  322 => 97,  320 => 96,  317 => 95,  314 => 94,  306 => 91,  302 => 90,  297 => 89,  294 => 88,  286 => 85,  282 => 84,  277 => 83,  271 => 80,  267 => 79,  263 => 78,  258 => 77,  256 => 76,  253 => 75,  245 => 72,  241 => 71,  236 => 70,  228 => 67,  224 => 66,  219 => 65,  217 => 64,  214 => 63,  211 => 62,  203 => 59,  199 => 58,  194 => 57,  186 => 54,  183 => 53,  181 => 52,  178 => 51,  170 => 48,  166 => 47,  161 => 46,  153 => 43,  150 => 42,  148 => 41,  145 => 40,  137 => 37,  133 => 36,  128 => 35,  126 => 34,  118 => 31,  114 => 30,  109 => 29,  106 => 28,  104 => 27,  99 => 25,  96 => 24,  93 => 23,  91 => 22,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  72 => 15,  69 => 14,  66 => 13,  49 => 12,  46 => 11,  44 => 10,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/learnpath/list.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\learnpath\\list.tpl");
    }
}
