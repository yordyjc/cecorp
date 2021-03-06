<?php
/* For license terms, see /license.txt */
use Chamilo\PluginBundle\Entity\ImsLti\ImsLtiTool;

$cidReset = true;

require_once __DIR__.'/../../main/inc/global.inc.php';

api_protect_admin_script();

if (!isset($_REQUEST['id'])) {
    api_not_allowed(true);
}

$toolId = intval($_REQUEST['id']);

$plugin = ImsLtiPlugin::create();
$em = Database::getManager();

/** @var ImsLtiTool $tool */
$tool = $em->find('ChamiloPluginBundle:ImsLti\ImsLtiTool', $toolId);

if (!$tool) {
    Display::addFlash(
        Display::return_message($plugin->get_lang('NoTool'), 'error')
    );

    header('Location: '.api_get_path(WEB_PLUGIN_PATH).'ims_lti/admin.php');
    exit;
}

$form = new FrmEdit('ims_lti_edit_tool', [], $tool);
$form->build();

if ($form->validate()) {
    $formValues = $form->exportValues();

    $tool
        ->setName($formValues['name'])
        ->setDescription(
            empty($formValues['description']) ? null : $formValues['description']
        )
        ->setCustomParams(
            empty($formValues['custom_params']) ? null : $formValues['custom_params']
        )
        ->setPrivacy(
            !empty($formValues['share_name']),
            !empty($formValues['share_email']),
            !empty($formValues['share_picture'])
        );

    if (null === $tool->getParent()) {
        $tool
            ->setLaunchUrl($formValues['launch_url'])
            ->setConsumerKey(
                empty($formValues['consumer_key']) ? null : $formValues['consumer_key']
            )
            ->setSharedSecret(
                empty($formValues['shared_secret']) ? null : $formValues['shared_secret']
            );
    }

    if (null === $tool->getParent() ||
        (null !== $tool->getParent() && !$tool->getParent()->isActiveDeepLinking())
    ) {
        $tool->setActiveDeepLinking(!empty($formValues['deep_linking']));
    }

    $em->persist($tool);
    $em->flush();

    Display::addFlash(
        Display::return_message($plugin->get_lang('ToolEdited'), 'success')
    );

    header('Location: '.api_get_path(WEB_PLUGIN_PATH).'ims_lti/admin.php');
    exit;
}

$form->setDefaultValues();

$interbreadcrumb[] = ['url' => api_get_path(WEB_CODE_PATH).'admin/index.php', 'name' => get_lang('PlatformAdmin')];
$interbreadcrumb[] = ['url' => api_get_path(WEB_PLUGIN_PATH).'ims_lti/admin.php', 'name' => $plugin->get_title()];

$template = new Template($plugin->get_lang('EditExternalTool'));
$template->assign('form', $form->returnForm());

$content = $template->fetch('ims_lti/view/add.tpl');

$template->assign('header', $plugin->get_title());
$template->assign('content', $content);
$template->display_one_col_template();
