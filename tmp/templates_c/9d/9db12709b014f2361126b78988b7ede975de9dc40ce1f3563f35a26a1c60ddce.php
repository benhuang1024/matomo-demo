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

/* @CorePluginsAdmin/tagManagerTeaser.twig */
class __TwigTemplate_7a59290dc868c7c3e2fc599f72565fc37159c61306c3974c2d8709fb5c00b912 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("dashboard.twig", "@CorePluginsAdmin/tagManagerTeaser.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topcontrols($context, array $blocks = [])
    {
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "<div class=\"activateTagManager\">
    <div class=\"row\">
        <div class=\"col s12\" style=\"text-align: center;\">
            <h2>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerNowAvailableTitle"]), "html", null, true);
        echo "</h2>
            <p>";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerNowAvailableSubtitle"]), "html", null, true);
        echo "</p>
        </div>
    </div>
    ";
        // line 14
        ob_start();
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col s12\">
            <div style=\"text-align: center;\">
                ";
        // line 18
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            // line 19
            echo "                    <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CorePluginsAdmin", "action" => "activate", "nonce" => ($context["nonce"] ?? $this->getContext($context, "nonce")), "pluginName" => "TagManager", "redirectTo" => "tagmanager"]]), "html", null, true);
            echo "\"
                       class=\"btn activateTagManagerPlugin\"><span class=\"icon-rocket\"></span> ";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_ActivateTagManagerNow"]), "html", null, true);
            echo " <span class=\"icon-rocket\"></span></a>
                ";
        } else {
            // line 22
            echo "                    <a href=\"mailto:";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, ($context["superUserEmails"] ?? $this->getContext($context, "superUserEmails")), "url"), "html", null, true);
            echo "?subject=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerNowAvailableTitle"]), "url"), "html", null, true);
            echo "&body=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerTeaserEmailSuperUserBody", "

", "

", ($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")), "

"]), "url"), "html", null, true);
            echo "\"
                       class=\"btn activateTagManagerPlugin\"><span class=\"icon-rocket\"></span> ";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerEmailSuperUserToActivate"]), "html", null, true);
            echo " <span class=\"icon-rocket\"></span></a>
                ";
        }
        // line 25
        echo "
                <a href=\"";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CorePluginsAdmin", "action" => "disableActivateTagManagerPage"]]), "html", null, true);
        echo "\"
                   class=\"btn dontShowAgainBtn\"><span class=\"icon-hide\"></span>
                    ";
        // line 28
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerTeaserHideSuperUser"]), "html", null, true);
        } else {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerTeaserHideNonSuperUser"]), "html", null, true);
        }
        // line 29
        echo "                </a>
            </div>
        </div>
    </div>
    ";
        $context["actionBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "    ";
        echo ($context["actionBlock"] ?? $this->getContext($context, "actionBlock"));
        echo "
    <div class=\"row\">
        <div class=\"col ";
        // line 36
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            echo "l4";
        } else {
            echo "l6";
        }
        echo " m12 s12\">
            <div piwik-content-block content-title=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_WhatIsTagManager"]), "html", null, true);
        echo "\">
                <p>
                    ";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_WhatIsTagManagerDetails1"]), "html", null, true);
        echo "<br /><br />
                    ";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_WhatIsTagManagerDetails2"]), "html", null, true);
        echo "<br /><br />
                    <a href=\"https://matomo.org/docs/tag-manager\" rel=\"noreferrer noopener\">";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerLearnMoreInUserGuide"]), "html", null, true);
        echo "</a>
                </p>
            </div>
        </div>
        <div class=\"col ";
        // line 45
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            echo "l4";
        } else {
            echo "l6";
        }
        echo " m12 s12\">
            <div piwik-content-block content-title=\"";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_WhyUsingATagManager"]), "html", null, true);
        echo "\">
                <p>
                    ";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_WhyUsingATagManagerDetails1"]), "html", null, true);
        echo "
                    <br /><br />
                    ";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_WhyUsingATagManagerDetails2"]), "html", null, true);
        echo "
                    <br /><br />
                    ";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_WhyUsingATagManagerDetails3"]), "html", null, true);
        echo "
                    <br /><br /><br />
                    <a href=\"https://matomo.org/docs/tag-manager\" rel=\"noreferrer noopener\">";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerLearnMoreInUserGuide"]), "html", null, true);
        echo "</a>
                </p>
            </div>
        </div>
        ";
        // line 58
        if (($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
            // line 59
            echo "            <div class=\"col l4 m12 s12\">
                <div piwik-content-block content-title=\"";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_AreThereAnyRisks"]), "html", null, true);
            echo "\">

                    ";
            // line 62
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_AreThereAnyRisksDetails1", "<a rel=\"noreferrer noopener\" href=\"https://en.wikipedia.org/wiki/Cross-site_scripting\">", "</a>"]);
            echo "
                    <br /><br />
                    ";
            // line 64
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_AreThereAnyRisksDetails2"]), "html", null, true);
            echo "
                    <br /><br /><br />
                    <a href=\"https://matomo.org/docs/tag-manager/#website-security\" rel=\"noreferrer noopener\">";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_TagManagerLearnMoreInUserGuide"]), "html", null, true);
            echo "</a>
                </div>
            </div>
        ";
        }
        // line 70
        echo "    </div>
    ";
        // line 71
        echo ($context["actionBlock"] ?? $this->getContext($context, "actionBlock"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/tagManagerTeaser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 71,  219 => 70,  212 => 66,  207 => 64,  202 => 62,  197 => 60,  194 => 59,  192 => 58,  185 => 54,  180 => 52,  175 => 50,  170 => 48,  165 => 46,  157 => 45,  150 => 41,  146 => 40,  142 => 39,  137 => 37,  129 => 36,  123 => 34,  116 => 29,  110 => 28,  105 => 26,  102 => 25,  97 => 23,  82 => 22,  77 => 20,  72 => 19,  70 => 18,  65 => 15,  63 => 14,  57 => 11,  53 => 10,  48 => 7,  45 => 6,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.twig' %}

{% block topcontrols %}
{% endblock %}

{% block content %}
<div class=\"activateTagManager\">
    <div class=\"row\">
        <div class=\"col s12\" style=\"text-align: center;\">
            <h2>{{ 'CorePluginsAdmin_TagManagerNowAvailableTitle'|translate }}</h2>
            <p>{{ 'CorePluginsAdmin_TagManagerNowAvailableSubtitle'|translate }}</p>
        </div>
    </div>
    {% set actionBlock %}
    <div class=\"row\">
        <div class=\"col s12\">
            <div style=\"text-align: center;\">
                {% if isSuperUser %}
                    <a href=\"{{ linkTo({'module': 'CorePluginsAdmin', 'action': 'activate', 'nonce': nonce, 'pluginName': 'TagManager', 'redirectTo': 'tagmanager'}) }}\"
                       class=\"btn activateTagManagerPlugin\"><span class=\"icon-rocket\"></span> {{ 'CorePluginsAdmin_ActivateTagManagerNow'|translate }} <span class=\"icon-rocket\"></span></a>
                {% else %}
                    <a href=\"mailto:{{ superUserEmails|e('url') }}?subject={{ 'CorePluginsAdmin_TagManagerNowAvailableTitle'|translate|e('url') }}&body={{ 'CorePluginsAdmin_TagManagerTeaserEmailSuperUserBody'|translate(\"\\n\\n\", \"\\n\\n\", piwikUrl, \"\\n\\n\")|e('url') }}\"
                       class=\"btn activateTagManagerPlugin\"><span class=\"icon-rocket\"></span> {{ 'CorePluginsAdmin_TagManagerEmailSuperUserToActivate'|translate }} <span class=\"icon-rocket\"></span></a>
                {% endif %}

                <a href=\"{{ linkTo({'module': 'CorePluginsAdmin', 'action': 'disableActivateTagManagerPage'}) }}\"
                   class=\"btn dontShowAgainBtn\"><span class=\"icon-hide\"></span>
                    {% if isSuperUser %}{{ 'CorePluginsAdmin_TagManagerTeaserHideSuperUser'|translate }}{% else %}{{ 'CorePluginsAdmin_TagManagerTeaserHideNonSuperUser'|translate }}{% endif %}
                </a>
            </div>
        </div>
    </div>
    {% endset %}
    {{ actionBlock|raw }}
    <div class=\"row\">
        <div class=\"col {% if isSuperUser %}l4{% else %}l6{% endif %} m12 s12\">
            <div piwik-content-block content-title=\"{{ 'CorePluginsAdmin_WhatIsTagManager'|translate }}\">
                <p>
                    {{ 'CorePluginsAdmin_WhatIsTagManagerDetails1'|translate }}<br /><br />
                    {{ 'CorePluginsAdmin_WhatIsTagManagerDetails2'|translate }}<br /><br />
                    <a href=\"https://matomo.org/docs/tag-manager\" rel=\"noreferrer noopener\">{{ 'CorePluginsAdmin_TagManagerLearnMoreInUserGuide'|translate }}</a>
                </p>
            </div>
        </div>
        <div class=\"col {% if isSuperUser %}l4{% else %}l6{% endif %} m12 s12\">
            <div piwik-content-block content-title=\"{{ 'CorePluginsAdmin_WhyUsingATagManager'|translate }}\">
                <p>
                    {{ 'CorePluginsAdmin_WhyUsingATagManagerDetails1'|translate }}
                    <br /><br />
                    {{ 'CorePluginsAdmin_WhyUsingATagManagerDetails2'|translate }}
                    <br /><br />
                    {{ 'CorePluginsAdmin_WhyUsingATagManagerDetails3'|translate }}
                    <br /><br /><br />
                    <a href=\"https://matomo.org/docs/tag-manager\" rel=\"noreferrer noopener\">{{ 'CorePluginsAdmin_TagManagerLearnMoreInUserGuide'|translate }}</a>
                </p>
            </div>
        </div>
        {% if isSuperUser %}
            <div class=\"col l4 m12 s12\">
                <div piwik-content-block content-title=\"{{ 'CorePluginsAdmin_AreThereAnyRisks'|translate }}\">

                    {{ 'CorePluginsAdmin_AreThereAnyRisksDetails1'|translate('<a rel=\"noreferrer noopener\" href=\"https://en.wikipedia.org/wiki/Cross-site_scripting\">', '</a>')|raw }}
                    <br /><br />
                    {{ 'CorePluginsAdmin_AreThereAnyRisksDetails2'|translate }}
                    <br /><br /><br />
                    <a href=\"https://matomo.org/docs/tag-manager/#website-security\" rel=\"noreferrer noopener\">{{ 'CorePluginsAdmin_TagManagerLearnMoreInUserGuide'|translate }}</a>
                </div>
            </div>
        {% endif %}
    </div>
    {{ actionBlock|raw }}
</div>
{% endblock %}
", "@CorePluginsAdmin/tagManagerTeaser.twig", "/home/vagrant/code/matomo-demo/plugins/CorePluginsAdmin/templates/tagManagerTeaser.twig");
    }
}
