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

/* default/social/form_modals.tpl */
class __TwigTemplate_b56d35d372aa3e5e2d587ef1434cdb6b7c8c9965356facf0cdcb5409f8b4e76a extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"send-invitation-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"send-invitation-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 5
        echo get_lang("Close");
        echo "\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"send-invitation-modal-title\">";
        // line 8
        echo get_lang("SendInvitation");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div id=\"send-invitation-alert\"></div>
                ";
        // line 12
        echo ($context["invitation_form"] ?? null);
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"btn-send-invitation\" class=\"btn btn-primary\">
                    <em class=\"fa fa-send\"></em> ";
        // line 16
        echo get_lang("Send");
        echo "
                </button>
            </div>
        </div>
    </div>
</div>

<script>
\$(document).on('ready', function() {
    var \$sendInvitationModal = \$('#send-invitation-modal');
    var sendToUser = 0;

    \$('.btn-to-send-invitation').on('click', function(e) {
        e.preventDefault();
        sendToUser = \$(this).data('send-to');
        \$sendInvitationModal.modal('show');
    });

    \$('#btn-send-invitation').on('click', function(e) {
        e.preventDefault();

        var \$frmSendInvitation = \$sendInvitationModal.find('.modal-body form'),
            url = '";
        // line 38
        echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", []);
        echo "message.ajax.php?a=send_invitation&user_id=' + sendToUser;

        \$.get(url, \$frmSendInvitation.serialize(), function() {
            \$frmSendInvitation[0].reset();

            window.location.reload();
        });
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/social/form_modals.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 38,  56 => 16,  49 => 12,  42 => 8,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/form_modals.tpl", "C:\\wamp64\\www\\chamilo\\main\\template\\default\\social\\form_modals.tpl");
    }
}
