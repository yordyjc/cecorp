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

/* default/chat/chat.tpl */
class __TwigTemplate_3798745c31c450a0f6623f83faa5ca0810078cf26a4e19c6ded25a929dc5a5d9 extends \Twig\Template
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
        echo "<div class=\"page-chat\">
    <div class=\"row\">
        <div class=\"col-sm-4 col-md-5 col-lg-4\">
            <ul class=\"row list-unstyled\" id=\"chat-users\"></ul>
        </div>
        <div class=\"col-sm-8 col-md-7 col-lg-8\">
            <div id=\"chat-tabs\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
        // line 9
        if ( !($context["restrict_to_coach"] ?? null)) {
            // line 10
            echo "                        <li role=\"presentation\" class=\"active\">
                            <a href=\"#all\" aria-controls=\"all\" role=\"tab\" data-toggle=\"tab\">";
            // line 11
            echo get_lang("All");
            echo "</a>
                        </li>
                    ";
        }
        // line 14
        echo "                </ul>
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"";
        // line 16
        echo ((($context["restrict_to_coach"] ?? null)) ? ("") : ("all"));
        echo "\">
                        <div class=\"course-chat chat-history\" id=\"";
        // line 17
        echo ((($context["restrict_to_coach"] ?? null)) ? ("") : ("chat-history"));
        echo "\"></div>
                    </div>
                </div>
            </div>
            <div class=\"profile row\">
                <div class=\"col-xs-12\">
                    <div class=\"message-form-chat\">
                        <div class=\"tabbable\">
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\">
                                    <a href=\"#tab1\" data-toggle=\"tab\">";
        // line 27
        echo get_lang("Write");
        echo "</a>
                                </li>
                                <li>
                                    <a href=\"#tab2\" id=\"preview\" data-toggle=\"tab\">";
        // line 30
        echo get_lang("Preview");
        echo "</a>
                                </li>
                                <li>
                                    <button id=\"emojis\" class=\"btn btn-link\" type=\"button\">
                                        <span class=\"sr-only\">";
        // line 34
        echo get_lang("Emoji");
        echo "</span>";
        echo ($context["emoji_smile"] ?? null);
        echo "
                                    </button>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab1\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-9\">
                                            <span class=\"sr-only\">";
        // line 42
        echo get_lang("Message");
        echo "</span>
                                            <textarea id=\"chat-writer\" name=\"message\"></textarea>
                                        </div>
                                        <div class=\"col-sm-3\">
                                            <button id=\"chat-send-message\" type=\"button\" ";
        // line 46
        echo ((($context["restrict_to_coach"] ?? null)) ? ("disabled") : (""));
        echo "
                                                    class=\"btn btn-primary\">";
        // line 47
        echo get_lang("Send");
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab2\">
                                    <div id=\"html-preview\" class=\"emoji-wysiwyg-editor-preview\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<audio id=\"chat-alert\" class=\"skip\">
    <source src=\"";
        // line 63
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "chat/sound/notification.wav\" type=\"audio/wav\"></source>
    <source src=\"";
        // line 64
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "chat/sound/notification.ogg\" type=\"audio/ogg\"></source>
    <source src=\"";
        // line 65
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "chat/sound/notification.mp3\" type=\"audio/mpeg\"></source>
</audio>
<script>
\$(function () {
    var ChChat = {
        _ajaxUrl: '";
        // line 70
        echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", []);
        echo "course_chat.ajax.php?";
        echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
        echo "',
        _historySize: -1,
        usersOnline: 0,
        currentFriend: 0,
        call: false,
        track: function () {
            return \$
                .get(ChChat._ajaxUrl, {
                    action: 'track',
                    size: ChChat._historySize,
                    users_online: ChChat.usersOnline,
                    friend: ChChat.currentFriend
                })
                .done(function (response) {
                    if (response.data.history) {
                        ChChat._historySize = response.data.oldFileSize;
                        ChChat.setHistory(response.data.history);
                    }

                    if (response.data.userList) {
                        ChChat.usersOnline = response.data.usersOnline;
                        ChChat.setConnectedUsers(response.data.userList);
                    }
                });
        },
        setHistory: function (messageList) {
            var chatHistoryContainer = ChChat.currentFriend ? ('#chat-history-' + ChChat.currentFriend) : '#chat-history';

            \$(chatHistoryContainer)
                .html(messageList)
                .prop('scrollTop', function () {
                    return this.scrollHeight;
                });
            \$('#chat-alert').get(0).play();
        },
        setConnectedUsers: function (userList) {
            var html = '';

            userList.forEach(function (user) {
                var buttonStatus = user.isConnected ? 'success' : 'muted',
                    buttonTitle = user.isConnected ? '";
        // line 110
        echo get_lang("StartAChat");
        echo "' : '";
        echo get_lang("LeaveAMessage");
        echo "';

                html += '<li class=\"col-xs-12\">' +
                    '   <div class=\"chat-user\" data-name=\"' + user.complete_name + '\" data-user=\"' + user.id + '\">' +
                    '       <img src=\"' + user.image_url + '\" alt=\"' + user.complete_name + '\" class=\"img-circle user-image-chat\"/>' +
                    '       <ul class=\"list-unstyled\">' +
                    '           <li>' + user.complete_name;

                if (user.id != ";
        // line 118
        echo $this->getAttribute(($context["_u"] ?? null), "user_id", []);
        echo ") {
                    html += '           <button type=\"button\" class=\"btn btn-link btn-xs\" title=\"' + buttonTitle + '\" data-name=\"' + user.complete_name + '\" data-user=\"' + user.id + '\">' +
                        '               <i class=\"fa fa-comments text-' + buttonStatus + '\"></i><span class=\"sr-only\">' + buttonTitle + '</span>' +
                        '           </button>';
                }
                html += '           </li>' +

                    ";
        // line 125
        if ( !api_get_configuration_value("hide_username_in_course_chat")) {
            // line 126
            echo "                    '           <li><small>' + user.username + '</small></li>' +
                    ";
        } else {
            // line 128
            echo "                    '           <li>&nbsp;</li>' +
                    ";
        }
        // line 130
        echo "
                    '       </ul>' +
                    '   </div>' +
                    '</li>';
            });

            \$('#chat-users').html(html);
        },
        onPreviewListener: function () {
            \$
                .post(ChChat._ajaxUrl, {
                    action: 'preview',
                    'message': \$('textarea#chat-writer').val()
                })
                .done(function (response) {
                    if (!response.status) {
                        return;
                    }

                    \$('#html-preview').html(response.data.message);
                });
        },
        onSendMessageListener: function (e) {
            e.preventDefault();

            if (!\$('textarea#chat-writer').val().trim().length) {
                return;
            }

            var self = this;
            self.disabled = true;

            \$
                .post(ChChat._ajaxUrl, {
                    action: 'write',
                    message: \$('textarea#chat-writer').val(),
                    friend: ChChat.currentFriend
                })
                .done(function (response) {
                    self.disabled = false;

                    if (!response.status) {
                        return;
                    }

                    \$('textarea#chat-writer').val('');
                    \$(\".emoji-wysiwyg-editor\").html('');
                });
        },
        onResetListener: function (e) {
            if (!confirm(\"";
        // line 180
        echo get_lang("ConfirmReset");
        echo "\")) {
                e.preventDefault();
                return;
            }
            \$
                .get(ChChat._ajaxUrl, {
                    action: 'reset',
                    friend: ChChat.currentFriend
                })
                .done(function (response) {
                    if (!response.status) {
                        return;
                    }

                    ChChat.setHistory(response.data);
                });
        },
        init: function () {
            ChChat.track().done(function () {
                ChChat.init();
            });
        }
    };

    hljs.initHighlightingOnLoad();

    emojione.ascii = true;
    emojione.imagePathPNG = '";
        // line 207
        echo $this->getAttribute(($context["_p"] ?? null), "web_lib", []);
        echo "javascript/emojione/png/';
    emojione.imagePathSVG = '";
        // line 208
        echo $this->getAttribute(($context["_p"] ?? null), "web_lib", []);
        echo "javascript/emojione/svg/';
    emojione.imagePathSVGSprites = '";
        // line 209
        echo $this->getAttribute(($context["_p"] ?? null), "web_lib", []);
        echo "javascript/emojione/sprites/';

    var emojiStrategy = ";
        // line 211
        echo twig_jsonencode_filter(($context["emoji_strategy"] ?? null));
        echo ";

    \$.emojiarea.path = '";
        // line 213
        echo $this->getAttribute(($context["_p"] ?? null), "web_lib", []);
        echo "javascript/emojione/png/';
    \$.emojiarea.icons = ";
        // line 214
        echo twig_jsonencode_filter(($context["icons"] ?? null));
        echo ";

    \$('body').on('click', '#chat-reset', ChChat.onResetListener);
    \$('#preview').on('click', ChChat.onPreviewListener);
    \$('#emojis').on('click', function () {
        \$('[data-toggle=\"tab\"][href=\"#tab1\"]').show().tab('show');
    });

    \$('textarea#chat-writer').emojiarea({
        button: '#emojis'
    });

    \$('body').delay(1500).find('.emoji-wysiwyg-editor').textcomplete([{
        match: /\\B:([\\-+\\w]*)\$/,
        search: function (term, callback) {
            var results = [];
            var results2 = [];
            var results3 = [];
            \$.each(emojiStrategy, function (shortname, data) {
                if (shortname.indexOf(term) > -1) {
                    results.push(shortname);
                } else {
                    if ((data.aliases !== null) && (data.aliases.indexOf(term) > -1)) {
                        results2.push(shortname);
                    } else if ((data.keywords !== null) && (data.keywords.indexOf(term) > -1)) {
                        results3.push(shortname);
                    }
                }
            });

            if (term.length >= 3) {
                results.sort(function (a, b) {
                    return (a.length > b.length);
                });
                results2.sort(function (a, b) {
                    return (a.length > b.length);
                });
                results3.sort();
            }

            var newResults = results.concat(results2).concat(results3);
            callback(newResults);
        },
        template: function (shortname) {
            return '<img class=\"emojione\" src=\"";
        // line 258
        echo $this->getAttribute(($context["_p"] ?? null), "web_lib", []);
        echo "javascript/emojione/png/'
                + emojiStrategy[shortname].unicode
                + '.png\"> :' + shortname + ':';
        },
        replace: function (shortname) {
            return ':' + shortname + ': ';
        },
        index: 1,
        maxCount: 10
    }], {});

    \$('button#chat-send-message').on('click', ChChat.onSendMessageListener);
    \$('#chat-users').on('click', 'div.chat-user', function (e) {
        e.preventDefault();
        var jSelf = \$(this),
            userId = parseInt(jSelf.data('user')) || 0;

        if (!userId) {
            return;
        }

        var exists = false;

        \$('#chat-tabs ul.nav li').each(function (i, el) {
            if (\$(el).data('user') == userId) {
                exists = true;
            }
        });

        \$('button#chat-send-message').prop('disabled', false);

        if (exists) {
            \$('#chat-tab-' + userId).tab('show');

            return;
        }

        \$('#chat-tabs ul.nav-tabs').append('\\
            <li role=\"presentation\" data-user=\"' + userId + '\">\\
                <a id=\"chat-tab-' + userId + '\" href=\"#chat-' + userId + '\" aria-controls=\"chat-' + userId + '\" role=\"tab\" data-toggle=\"tab\">' + jSelf.data('name') + '</a>\\
            </li>\\
        ');

        \$('#chat-tabs .tab-content').append('\\
            <div role=\"tabpanel\" class=\"tab-pane\" id=\"chat-' + userId + '\">\\
                <div class=\"course-chat chat-history\" id=\"chat-history-' + userId + '\"></div>\\
            </div>\\
        ');

        \$('#chat-tab-' + userId).tab('show');
    });

    \$('#chat-tabs ul.nav-tabs').on('shown.bs.tab', 'li a', function (e) {
        var jSelf = \$(this);
        var userId = parseInt(jSelf.parent().data('user')) || 0;
        if (!userId) {
            ChChat.currentFriend = 0;

            return;
        }

        ChChat.currentFriend = userId;

        \$(this).tab('show');
    });

    \$('.emoji-wysiwyg-editor').on('keyup', function (e) {
        if (e.ctrlKey && e.keyCode === 13) {
            \$('button#chat-send-message').trigger('click');
        }
    });

    ChChat.init();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/chat/chat.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 258,  326 => 214,  322 => 213,  317 => 211,  312 => 209,  308 => 208,  304 => 207,  274 => 180,  222 => 130,  218 => 128,  214 => 126,  212 => 125,  202 => 118,  189 => 110,  144 => 70,  136 => 65,  132 => 64,  128 => 63,  109 => 47,  105 => 46,  98 => 42,  85 => 34,  78 => 30,  72 => 27,  59 => 17,  55 => 16,  51 => 14,  45 => 11,  42 => 10,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/chat/chat.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\chat\\chat.tpl");
    }
}
